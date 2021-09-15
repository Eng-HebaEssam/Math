<?php 
	session_start();
    $pageTitle = 'categories';
	include 'inital.php';
    include "check_token.php";
    ?><div class="text-right ">
            <div class="profile row amg">
                <div class="col-md-10 order-sm-2 order-md-1">
                     <?php include $tpl . 'intro.php'; ?> 
                            <?php
                            if (isset($_GET['name'])) {
                                $tag = $_GET['name'];
                                echo "<h1 class='text-center'>" . $tag . "</h1>";
                                ?> <div class="row ta"> <?php
                                $stmt = $con->prepare("SELECT groupid FROM members WHERE username = ?");
                                $stmt->execute(array($_SESSION['user']));
                                $get = $stmt->fetch();
                                $getAll = $con->prepare("SELECT * FROM category where parent = 0 And ordering= ? ORDER BY ordering asc");
                                $getAll->execute(array($get['groupid']));
                                $all = $getAll->fetch();
                                $allItems = getAllFrom("*", "category","where parent = {$all['category_id']}","", "ordering");
                                foreach ($allItems as $cat) {
                                    $tagItems = getAllFrom("*", "lessons", "where tags like '%$tag%'", "AND cat_id = {$cat['category_id']}", "lesson_id");
                                    foreach ($tagItems as $item) {?>
                                        <div class=" col-lg-4 tagss">
                                            <h2><a href="lesson.php?pageid=<?php echo $item['lesson_id']?>"><?php echo $item['lesson_name']?></a></h2>
                                            <p class="lead"><?php echo $item['lesson_description']?></p>
                                            <span class="lead text-left"><?php echo $item['lesson_data']?></span>
                                        </div> <?php }}
                                $tagItems = getAllFrom("*", "post", "where tags like '%$tag%'", "", "post_id");
                                foreach ($tagItems as $posts) {?>
                                    <div class=" col-lg-4 tagss">
                                        <h2><a href="post.php"><?php echo $posts['post_name']?></a></h2>
                                        <p class="lead"><?php echo $posts['post_description']?></p>
                                        <span class="lead text-left"><?php echo $posts['post_data']?></span>
                                    </div>
                                <?php }
                            } else {
                                echo 'يجب عليك ادخال اعلام';
                            }
                            ?>
                    </div>  
                    </div>
                    <?php include $tpl . 'last.php'; ?>                   
    </div>
    </div>
<?php include $tpl . 'footer.php'; ?>