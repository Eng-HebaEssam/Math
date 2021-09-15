<?php 
    ob_start();
	session_start();
    $pageTitle = 'examResult';
    $noNavbar = '';
	include 'inital.php';
    include "check_token.php";
    if (isset($_SESSION['user'])) {?>
		<div class="text-right ">
            <div class="profile row amg">
                <div class="col-md-10 order-sm-2 order-md-1">
                 <div class="profile-settings text-left">
                   <nav aria-label="breadcrumb">
                       <ol class="breadcrumb">
                           <li class="breadcrumb-item pull-right">
                                       <a href="profile.php">الرئيسية</a>
                           </li>
                           <li class="breadcrumb-item active pull-right" aria-current="page">نتائج الامتحانات</li>
                           <li class="dropdown lis">
                                <i class="fa fa-ellipsis-v dropdown-toggle"data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></i>
                                <ul class="dropdown-menu text-center">
                                    <li><a href="settings.php?do=Edit&userid=<?php echo $userid; ?>">الاعدادات</a></li>
                                    <li><a href="logout.php">تسجيل الخروج</a></li>                        
                                </ul>
                           </li>
                           <li class="dropdown lis">
                                <i class="fa fa-bars hidden dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></i>
                                <ul class="dropdown-menu text-center">
                                    <li><a href="profile.php">الرئيسية</a></li>
                                    <li><a href="categories.php">الاقسام الدراسية</a></li>
                                    <li><a href="post.php">المنشروات</a></li>
                                    <li><a href="settings.php?do=Edit&userid=<?php echo $userid; ?>">الاعدادات</a></li>
                                    <li><a href="logout.php">تسجيل الخروج</a></li>
                                </ul>
                          </li>
                          <li class="lis">
                                <span><i class="theme fa fa-moon-o" data-value="<?php echo $night ?>"></i>
                                      <i class="theme fa fa-flash" data-value="<?php echo $sun ?>"></i>
                                        الاوضاع</span>
                          </li>
                      </ol>
                  </nav>
                </div>
                <div class="result alls">
                    <h1 class="text-center">صفحة التعليقات</h1>
                    <div class="container">
                        <div class="table-responsive">
                            <table class="text-center table table-bordered">
                                <tr class="table-primary">
                                    <td> نتيجة الامتحان</td>
                                    <td> تاريخ اداء الامتحان</td>
                                    <td >اسم الامتحان</td>
                                </tr>
                                    <?php
                                    $formErrors = array(); 
                                    $stmt = $con->prepare("SELECT 
                                                                answer.*, exams.exam_name AS exam_name  
                                                            FROM 
                                                                answer
                                                            INNER JOIN 
                                                                exams 
                                                            ON 
                                                                exams.exam_id = answer.exam_id 
                                                            WHERE 
                                                                user_id = ? 
                                                            ORDER BY date desc");
                                    $stmt->execute(array($_SESSION['uid']));
                                    $exams = $stmt->fetchAll();
                                    foreach ($exams as $exam) {  ?>
                                    <tr class="table-light">
                                        <td ><?php echo $exam['mark'] ?></td>
                                        <td><?php echo $exam['date'] ?></td>
                                        <td><?php echo $exam['exam_name'] ?></td>
                                    </tr>
                                <?php }?>
                            </table>
                        </div>
                    </div>
                </div>    
               </div>
               <?php include $tpl . 'last.php'; ?>         
    </div>            
<?php } else {
		header('Location: index.php');
		exit();
	}
    include $tpl . 'footer.php';
    ob_end_flush();    
?>