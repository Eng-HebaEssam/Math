<?php
    ob_start();
    session_start();
    $pageTitle = 'register';
    $Title = 'register';
    if (isset($_SESSION['user'])) {
		header('Location: main.php');
	}
    include 'inital.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		if (isset($_POST['sign'])) {
            $formErrors = array();
            $token = getToken(10);
			$username 	= filter_var($_POST['username'],FILTER_SANITIZE_STRING);
			$password 	= filter_var($_POST['password'],FILTER_SANITIZE_STRING);
            $email      = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
            $phone      = filter_var($_POST['phone'],FILTER_SANITIZE_NUMBER_INT);
            $class      = $_POST['parent'];
			if (isset($username)) {
				if (strlen($username) < 4) {$formErrors[] = 'اسم المستخدم يجب ان يكون اكبر من 4 احرف';}
			}
            if (isset($password)) {
				if (strlen($password) < 4) {$formErrors[] = 'كلمة المرور يجب ان تكون اكبر من 4 ارقام';}
			}
            if (isset($phone)) {
				if (strlen($phone) < 8) {$formErrors[] = 'رقم الهاتف يجب ان يكون اكبر من 8 ارقام';}
			}
			// Check If There's No Error Proceed The User Add
			if (empty($formErrors)) {
				// Check If User Exist in Database
				$check = checkItem("username", "members", $username);
				if ($check == 1) {
					$formErrors[] = 'هذا المستخدم موجود عليك استخدام اسم مستخدم اخر';
				} else {
					// Insert Userinfo In Database
					$stmt = $con->prepare("INSERT INTO 
								members(username, password, phone, groupid, email, regstatus, date)
										VALUES(:zuser, :zpass, :zphone, :zclass, :zemail, 0, now())");
					$stmt->execute(array(
						'zuser' => $username,
						'zpass' => sha1($password),
						'zphone' => $phone,
                        'zclass' => $class,
                        'zemail' => $email
					));
                    // Update user token 
                    $ins = $con->prepare("insert into user_token(username,token) VALUES(:zuser, :ztoken)");
                    $ins->execute(array(
                        'zuser' 	=> $username,
                        'ztoken'	=> $token
                    ));
					// Echo Success Message
                    $succesMsg = 'لقد تم تسجيل البيانات قم بتسجيل الدخول';
                    header('Location: reg.php');
                    exit();
                    
				}
			}
        }
    }
?>
<body>
<section class="sectionlogin p-0">
    <div class="row">
        <div class="col-md-8 order-2 order-md-1">
            <div class="main second_v">
            <?php 
                            if (!empty($formErrors)) {
                                foreach ($formErrors as $error) {
                                    echo '<div class="msg error alert alert-danger" style="margin-top:30px">' . $error . '</div>';
                                }
                            }
                            if (isset($succesMsg)) {
                                echo '<div class="msg success alert alert-success" style="margin-top:30px">' . $succesMsg . '</div>';
                            }
                ?>
                <h1> أنشاء حساب</h1>
                <h4> لديك حساب ؟<a href="login.php">تسجيل الدخول</a></h4>
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                <input type="text" class="username" name="username" placeholder="اسم المستخدم" required>
                    <input type="email" class="email" name="email" placeholder="البريد الالكتروني">
                    <input type="number" class="phone" name="phone" placeholder="رقم الهاتف">
                    <input type="password" class="password" name="password" placeholder="كلمة المرور" required>
                    <select name="parent" class="form-control form-control-lg show_btn" required>
                        <option selected disabled>الصف الدراسي</option>
                          <?php 
                                                    $allCats = getAllFrom("*", "category", "where parent = 0", "", "ordering", "ASC");
                                                    foreach($allCats as $cat) {
                                                        echo "<option value='" . $cat['category_id'] . "'>" . $cat['category_name'] . "</option>";
                                                    }
                                                ?>
                    </select>
                    <button type="submit" name="sign">تسجيل الدخول</button>
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