<?php 
ob_start();
session_start();
$pageTitle = 'end';
$Title = '';
include 'inital.php';
include "check_token.php";
    $getUser = $con->prepare("SELECT * FROM members WHERE username = ?");
    $getUser->execute(array($sessionUser));
    $info = $getUser->fetch();
    if (isset($_SESSION['user']) && $info['regstatus'] == 1) {
        if (isset($_POST['exam'])) {
            $i=0; 
            $exam_id = isset($_GET['exam_id']) && is_numeric($_GET['exam_id']) ? intval($_GET['exam_id']) : 0;
            $exams = $con->prepare("SELECT number FROM exams WHERE exam_id = ? AND type = 2");
            $exams->execute(array($exam_id));
            $exam = $exams->fetch();
            $number = $exam['number']; 
            $stmt = $con->prepare("SELECT 
                                        * 
                                    FROM 
                                        part
                                    where
                                    exam_id = ?
                                    ORDER BY RAND() ");
            $stmt->execute(array($exam_id));
            $parts = $stmt->fetchAll();
            foreach ($parts as $part){
                $stmt = $con->prepare('SELECT * FROM question where part_id = ? ORDER BY RAND() 
                LIMIT ' . $number);
                $stmt->execute(array($part['part_id']));
                $exams = $stmt->fetchAll(); 
                foreach ($exams as $key=>$exam ) { 
                    $ques    = $_POST['main' . $exam['id']];
                    $answer  = $exam['right_answer'];
                    $answer2 = $exam['answer'];
                    if($ques == $answer || $ques == $answer2){$i++;}
                }
            }
            $stmt = $con->prepare("SELECT user_id FROM answer WHERE user_id = ? AND exam_id = ?");
            $stmt->execute(array($_SESSION['uid'], $exam_id));
            $count = $stmt->rowCount();
            if ($count ==  0) { 
                $stmt = $con->prepare("INSERT INTO 
                                    answer(exam_id, mark, user_id, date)
                                    VALUES(:exam_id, :mark, :user_id, now())");
                $stmt->execute(array(
                    'exam_id'   => $exam_id,
                    'mark'      => $i,
                    'user_id'   => $_SESSION['uid']
                ));
            }
?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
                <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
                <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700&display=swap" rel="stylesheet">
                <link rel="stylesheet" href="assets/css/forms.css">
                <title>M3AMath</title>
            </head>
            <body>
                <section class="sectionlogin">
                    <div class="row">
                        <div class="col-md-8 order-2 order-md-1">
                            <div class="main second_error">
                                <h2 class="mb-4"> لقد تم اداء الامتحان بنجاح </h2>
                                <table class="table table-bordered">
                                    <tbody>
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">النتيجة</th>
                                                <th scope="col">النتيجة الكلية</th>
                                            </tr>
                                        </thead>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $number; ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <button><a href="main.php">الرئيسية</a></button>
                            </div>
                        </div>
                        <div class="col-md-4 order-1 order-md-2">
                            <div class="second">
                                <a href="main.php"><img src="assets/img/mainlogore.png" width="250px"></a>
                            </div>
                        </div>
                    </div>
                </section>
            </body>
            <script>
                if ( window.history.replaceState ) {
                    window.history.replaceState( null, null, window.location.href );
                }
            </script>
            </html>
<?php
    } else {
        header('Location: 404-error.php');
        exit();
    }
}else {
    header('Location: index.php');
    exit();
}
ob_end_flush();
?>