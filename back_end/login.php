<?php
ob_start();
session_start();
$pageTitle = 'login';
$Title = 'login';
include 'inital.php';
if (isset($_SESSION['user'])) {
    header('Location: main.php');
}
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		if (isset($_POST['login'])) {
			$user = filter_var($_POST['username'],FILTER_SANITIZE_STRING);
			$pass = filter_var($_POST['password'],FILTER_SANITIZE_STRING);
			$hashedPass = sha1($pass);
			// Check If The User Exist In Database
			$stmt = $con->prepare("SELECT 
								        userid, username, password, only ,regstatus
									FROM 
										members 
									WHERE 
										username = ? 
									AND 
										password = ?");
			$stmt->execute(array($user, $hashedPass));
			$get = $stmt->fetch();
			$count = $stmt->rowCount();
            // If Count > 0 This Mean The Database Contain Record About This Username
            if ($count > 0) {
                if ($get['regstatus'] == 1) {
                    $token = getToken(10);
                    $_SESSION['user'] = $user; // Register Session Name
                    $_SESSION['uid'] = $get['userid']; // Register User ID in Session
                    $_SESSION['token'] = $token;
                    // Update user token 
                    $result_token = $con->prepare("select count(*) as allcount from user_token where username = ? ");
                    $result_token->execute(array($user));
                    $row_token = $result_token->rowCount();
                    if ($row_token > 0) {
                        $mod = $con->prepare("update user_token set token = ? where username = ?");
                        $mod->execute(array($token, $user)); 
                    } else {
                        $ins = $con->prepare("insert into user_token(username,token) VALUES(:zuser, :ztoken)");
                        $ins->execute(array(
                            'zuser' 	=> $user,
                            'ztoken'		=> $token
                        ));
                    }
                    header('Location:main.php'); // Redirect To Dashboard Page
                    exit();
                } else {
                    header('Location:not_activated.php'); // Redirect To Dashboard Page
                    exit();
                }
            } else {
                $formErrors = array();
                $formErrors[] = 'خطا بالتسجيل';
            }
		} 
    }
?>
<body>
<section class="sectionlogin p-0">
    <div class="row">
        <div class="col-md-8 order-2 order-md-1">
            <div class="main second_v">
                <h1> تسجيل <strong> الدخول</strong></h1>
                <h4>ليس لديك حساب ؟<a href="register.php">انشاء حساب</a></h4>
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                    <input type="text" class="username" name="username" placeholder="اسم المستخدم" required>
                    <input type="password" class="password" name="password" placeholder="كلمة المرور" required>
                    <button type="submit" name="login">تسجيل الدخول</button>
                </form>
                <div class="social">
                    <h3>تواصل معنا</h3>
                    <a href="https://www.facebook.com/%D8%B1%D9%8A%D8%A7%D8%B6%D9%8A%D8%A7%D8%AA-%D8%A8%D8%B4%D9%83%D9%84-%D8%AC%D8%AF%D9%8A%D8%AF-%D9%85%D8%AD%D9%85%D8%AF-%D8%B9%D8%A8%D8%AF%D8%A7%D9%84%D8%B9%D8%B2%D9%8A%D8%B2-109604920760675/" class="face">فيس بوك</a>
                    <a href="https://chat.whatsapp.com/C3tIc40lOLrIv6X0qq6aAK" class="whats">واتس اب </a>
                </div>
            </div>
        </div>
        <div class="col-md-4 order-1 order-md-2">
            <div class="second">
                <a href="index.php"><img src="assets/img/mainlogore.png" width="250px"></a>
            </div>
        </div>
    </div>
</section>

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
<?php 
include $tpl . 'scripts.php'; 
ob_end_flush();
?>