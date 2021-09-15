<?php
ob_start(); 
session_start();
$pageTitle = 'lessons';
if (isset($_SESSION['username'])) {
        include 'inital.php';
        $do = isset($_GET['do']) ? $_GET['do'] : 'Manage';
		if ($do == 'Manage') {
            $stmt = $con->prepare("SELECT 
                                        answer.*, 
                                        exams.exam_name AS exam_name, 
                                        members.username AS username
                                    FROM 
                                        answer
                                    INNER JOIN 
                                        exams 
                                    ON 
                                        exams.exam_id = answer.exam_id 
                                    INNER JOIN 
                                        members 
                                    ON 
                                        members.userid = answer.user_id
                                    ORDER BY 
                                        id DESC");
            $stmt->execute();
            $exams = $stmt->fetchAll();
            if (! empty($exams)) {
            ?>
            <div class="manages container">
                <h1 class="text-center">الامتحانات</h1>
                <div class="table-responsive">
                    <table class="main-table text-center table table-bordered">
                        <tr>
                        <td> حزف</td>
                            <td>نتيجة الاختبار</td>
                            <td>اسم الطالب</td>
                            <td>تاريخ اداء الامتحان</td>
                            <td>اسم الامتحان</td>
                            <td>الرقم التعريفي</td>
                        </tr>
                        <?php
                            foreach($exams as $exam) {
                            echo "<tr>";
                            echo "<td>
                            <a href='mark.php?do=Delete&examid=" . $exam['id'] . "' class='btn btn-danger confirm'><i class='fa fa-close'></i> حذف </a>";
                            echo "</td>";
                                echo "<td>" . $exam['mark'] ."</td>";
                                echo "<td>" . $exam['username'] ."</td>";
                                echo "<td>" . $exam['date'] . "</td>";
                                echo "<td>" . $exam['exam_name'] . "</td>";
                                echo "<td>" . $exam['id'] . "</td>";
                            echo "</tr>";
                            }
                        ?>
                    </table>
                </div>
            </div>
            <?php } else {
                    echo '<div class="container">';
                        echo '<div class="message">لا يوجد نتائج</div>';
                    echo '</div>';
                }
        } elseif ($do == 'Delete') {
			echo "<div class='add container'>";
            echo "<h1 class='text-center'>حزف النتيجة</h1>";
            $examid = isset($_GET['examid']) && is_numeric($_GET['examid']) ? intval($_GET['examid']) : 0;
            $stmt = $con->prepare("SELECT id FROM answer WHERE id = ?");
            $stmt->execute(array($examid));
            $count = $stmt->rowCount();
            if ($count > 0) {
                $stmt = $con->prepare("DELETE FROM answer WHERE id = :zid");
                $stmt->bindParam(":zid", $examid);
                $stmt->execute();
                $theMsg = "<div class='alert alert-success'>" . $stmt->rowCount() . ' Record Deleted</div>';
                redirectHome($theMsg, 'back');
            } else {
                $theMsg = '<div class="alert alert-danger">هذا الرقم التعريفى غير موجود</div>';
                redirectHome($theMsg);
            }
			echo '</div>';
		} 
} else {
    header('Location: index.php');
    exit();
}
ob_end_flush();
?>                