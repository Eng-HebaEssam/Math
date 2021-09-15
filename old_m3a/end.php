<?php 
	session_start();
    $pageTitle = 'categories';
    $noNavbar = '';
    if (isset($_SESSION['user'])) {
	include 'inital.php';
    include "check_token.php";
    ?>
                <div class="row ">
                    <div class="col-md-10 order-sm-2 order-md-1">
                        <?php include $tpl . 'intro.php'; ?>
                        <div class="alert alert-danger main_alert text-right container"> لقد انتهى الوقت المحدد للامتحان</div>
                    </div>    
                    <?php include $tpl . 'last.php'; ?>          
                </div>           
    <?php
    } else {
        header('Location: index.php');
        exit();
    } 
    include $tpl . 'footer.php'; 
	ob_end_flush();
?>