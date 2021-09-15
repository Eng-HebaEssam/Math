<div class="col-md-2 right order-sm-1 order-md-2">
                <img height="100px" src="layouts/images/mainlogore.png" class="text-right">
                <div class="icons <?php if ($pageTitle == 'Profile') {echo 'selected';}?>">
                    <a href="profile.php">
                        <i class="fa fa-home fa-2x"></i>
                        <span class="main-spain">الرئيسية</span>
                    </a>
                </div>
                <div class="icons <?php if ($pageTitle == 'categories') {echo 'selected';}?>">
                    <a href="categories.php">
                        <i class="fa fa-book fa-2x"></i>
                        <span class="main-spain">الاقسام </span>
                    </a>
                </div>
                <div class="icons <?php if ($pageTitle == 'post') {echo 'selected';}?>">
                    <a href="post.php">
                        <i class="fa fa-edit fa-2x"></i>
                        <span class="main-spain">المنشورات</span>
                    </a>
                </div>
                <div class="icons <?php if ($pageTitle == 'settings') {echo 'selected';}?>">
                    <a href="settings.php?do=Edit">
                        <i class="fa fa-cogs fa-2x"></i>
                        <span class="main-spain">الاعدادات</span>
                    </a>
                </div>
                <div class="icons <?php if ($pageTitle == 'logout') {echo 'selected';}?>">
                    <a href="logout.php">
                        <i class="fa fa-sign-out fa-2x"></i>
                        <span class="main-spain"> الخروج</span>
                    </a>
                </div>   
            </div> 