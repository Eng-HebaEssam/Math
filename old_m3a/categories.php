<?php
    ob_start();
	session_start();
    $pageTitle = 'categories';
    $noNavbar = '';
	include 'inital.php';
    include "check_token.php";
    if (isset($_SESSION['user'])) {?>
            <div class="profile row amg">
                <div class="col-md-10 order-sm-2 order-md-1">
                    <?php include $tpl . 'intro.php'; ?> 
                    <div class="alls">
                        <h1 class="text-center">الاقسام</h1>
                        <h3 class="text-center">الصفوف الدراسية الاعدادي والثانوي سيتم ظهور القسم علي اساس اختيارة عند التسجيل</h3>
                    </div>
                    <div class="container maind"> 
                            <?php 
                            $stmt = $con->prepare("SELECT groupid FROM members WHERE username = ?");
                            $stmt->execute(array($_SESSION['user']));
                            $get = $stmt->fetch();
                            $count = $stmt->rowCount();
                            if ($count > 0) {    
                                $getAll = $con->prepare("SELECT * FROM category where parent = 0 And ordering= ? ORDER BY ordering asc");
                                $getAll->execute(array($get['groupid']));
                                $all = $getAll->fetch();?>
                                <h3 class="text-center"><?php echo $all['category_name']; ?></h3>
                                <p class="text-center"><?php echo $all['category_description']; ?></p> 
                                <div class="com text-center">
                                    <div class="row">
                                        <div class="first-row">
                                            <h2>شرح اجزاء المنهج</h2>
                                            <img src="layouts/images/31.png" alt="">
                                            <h3 class="text-center">جميع ابواب للفصل الدراسى</h3>
                                            <?php 
                                                $allItems = getAllFrom("*", "category","where parent = {$all['category_id']}","", "ordering");
                                                foreach ($allItems as $cat) {?>
                                                    <a href="sub_cat.php?pageid=<?php echo $cat['category_id']?>"><h4 class="text-right"><?php echo $cat['category_name']; ?><i class="fa fa-chevron-circle-left"></i></h4></a>
                                                <?php }?> 
                                        </div>
                                        <hr>
                                        <div class="second-row">
                                            <h2> الامتحانات الشاملة</h2>
                                            <img src="layouts/images/32.png" alt="">
                                            <h3 class="text-center">جميع الامتحانات المطلوبة خلال الفصل</h3>
                                            <?php
                                            $allItems = getAllFrom("*", "category","where parent = {$all['category_id']}","", "ordering");
                                            foreach ($allItems as $cat) {
                                            ?><h4 class="text-right"><?php echo $cat['category_name']; ?><i class="fa fa-chevron-circle-left"></i></h4>
                                            <?php      
                                            $allItem = getAllFrom("*", "exams", "where categ_id = {$cat['category_id']}", "AND link != '' ", "exam_date");
                                            foreach ($allItem as $exams) {?>
                                            <div class="full-view hidden main_a">
                                            <h5><a href="<?php echo $exams['link']?>"><i class="fa fa-chevron-circle-left"></i><?php echo $exams['exam_name']; ?></a></h5>
                                            </div>  
                                            <?php }} ?>
                                        </div>
                                    </div>
                                </div>    
                            <?php } else {
                                ?> <div class="alert alert-danger">لا يمكنك تصفح تلك الصفحة </div> <?php
                                } ?>
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