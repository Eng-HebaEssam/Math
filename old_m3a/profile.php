<?php
	ob_start();
	session_start();
	$pageTitle = 'Profile';
	include 'inital.php';
    include "check_token.php";
    $getUser = $con->prepare("SELECT * FROM members WHERE username = ?");
    $getUser->execute(array($sessionUser));
    $info = $getUser->fetch();
	if (isset($_SESSION['user']) && $info['regstatus'] == 1) {
		$userid = $info['userid'];
        $avatar = $info['avatar'];
        $data = $info['date'];
        $last_exam = $info['exam answer'];
        $lil = $info['lil'];
        $lil_data = $info['lil_data'];
         $stmt2 = $con->prepare("SELECT 
                                    members.*, category.category_name AS categoryname  
                                FROM 
                                    members
                                INNER JOIN 
                                    category 
                                ON 
                                    members.groupid = category.ordering
                                WHERE 
                                    username  = ?");
        // Execute The Statement
        $stmt2->execute(array($sessionUser));
        // Assign To Variable 
        $name = $stmt2->fetch();
?>
<div class="profile">
        <div class="row">
            <div class="col-md-10 order-sm-2 order-md-1 container">
                <?php include $tpl . 'intro.php'; ?> 
                <div class="row all">
                    <div class="col-md-8 order-md-2 text-right">
                        <div class="greatings">
                            <div class="row">
                                <div class="col-md-7 order-md-2">
                                    <h2><i class="fa fa-hand-peace-o"></i> اهلا</h2>
                                    <h3 class="h2"><?php echo $_SESSION['user']; ?></h3>
                                    <p class="text-center"><?php echo $lil; ?></p>
                                </div>
                                <div class="col-md-5 order-md-1">
                                    <div id="myclock"></div>
                                </div>
                            </div>    
                        </div>
                        <div class="pro text-center">
                            <div class="card">
                             <div class="card-header">البيانات الشخصية</div>
                              <img class="card-img-top img-thumbnail" src="admin/uploads/avatars/<?php echo $avatar; ?>" alt="" />
                              <div class="card-body">
                                <h4 class="card-title h2"><?php echo $_SESSION['user']; ?></h4>
                                <h6 class="card-subtitle mb-2"><?php echo $data; ?></h6>
                                <ul class="list-group">
                                    <li class="list-group-item">  تاريخ الانضمام <?php echo $data; ?></li>
                                    <li class="list-group-item"> <?php echo $name['categoryname'] ?> </li>
                                    <li class="list-group-item"><a href="exam_result.php">نتائج الامتحانات</a></li>
                                </ul>
                                <a href="settings.php?do=Edit&userid=<?php echo $userid; ?>" class="card-link">تعديل البيانات</a>
                              </div>
                            </div>
                        </div>
                        <!--start copy right-->
    <!--end copy right-->
                    </div>
                    <div class="col-md-4 order-md-1 text-center greatings">
                       <h2>مهامك اليومية</h2>
                        <span>بتاريخ</span>
                       <span><?php echo date('Y-M-D'); ?></span>
                        
                        <form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                            <textarea
                              class="form-control text-right" 
                              name="comment" 
                              placeholder="مهمة جديدة" ></textarea>
                            <input type="submit" value="تعين المهمة" class="btn btn-primary"/>
                          </form>
                        <a class="btn btn-primary " href="profile.php">اظهار المهمة</a>  
                        <div class="shown text-rihgt">
                            <h4>اخر مهمة</h4>
                            <div><?php echo $lil; ?></div>
                            <span class="text-left"><?php echo $lil_data; ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <?php include $tpl . 'last.php'; ?>  
        </div>
    </div>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $comment = filter_var($_POST['comment'], FILTER_SANITIZE_STRING);
        $stmt = $con->prepare("UPDATE members SET lil = ?, lil_data = now() WHERE userid = ?");
						$stmt->execute(array($comment, $userid));
    }

	} else {
		header('Location: reg.php');
		exit();
	}
	include $tpl . 'footer.php';
	ob_end_flush();
?>