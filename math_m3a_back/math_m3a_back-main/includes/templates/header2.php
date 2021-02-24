<body dir="rtl">
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container">
      <div class="header-container d-flex align-items-center">
        <div class="logo">
          <a href="index.html"><img src="assets/img/logo8_10_153813.png" alt=""></a>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
        </div>

        <nav class="nav-menu  d-none d-lg-block mr-3">
          <ul> 
            <li class="<?php if($pageTitle == 'main'){ echo 'active';}?>"><a href="main.php">الرئيسية</a></li>
            <li class="<?php if($pageTitle == 'posts2'){ echo 'active';}?>"><a href="posts2.php">المقالات</a></li>
            <li class="<?php if($pageTitle == 'activities'){ echo 'active';}?>"><a href="activities.php">المنشورات</a></li>
            <li class="<?php if($pageTitle == 'events'){ echo 'active';}?>"><a href="events.php"> المهام الدراسية</a></li>
            <li class="<?php if($pageTitle == 'account'){ echo 'active';}?>"><a href="account.php">الحساب الشخصى </a></li>
            <li class="get-started"><a href="logout.php">خروج</a></li>
        </nav><!-- .nav-menu -->
      </div><!-- End Header Container -->
    </div>
  </header>