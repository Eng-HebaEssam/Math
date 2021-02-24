<body dir="rtl">
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container">
      <div class="header-container d-flex align-items-center">
        <div class="logo">
          <a href="index.php"><img src="assets/img/logo8_10_153813.png" alt=""></a>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
        </div>

        <nav class="nav-menu  d-none d-lg-block mr-3">
          <ul> 
            <li class="<?php if($pageTitle == 'Homepage'){ echo 'active';}?>"><a href="index.php">الرئيسية</a></li>
            <li class="<?php if($pageTitle == 'free'){ echo 'active';}?>"><a href="free.php">الفيديوهات المجانية</a></li>
            <li class="<?php if($pageTitle == 'posts'){ echo 'active';}?>"><a href="posts.php">المقالات</a></li>
            <li class="<?php if($pageTitle == 'register'){ echo 'active';}?>"><a href="register.php">أنشاء حساب </a></li>
            <li class="<?php if($pageTitle == 'login'){ echo 'active';}?>"><a href="login.php">تسجيل الدخول </a></li>
            <li class="get-started"><a href="index.php">M.3.A</a></li>
          </ul>
        </nav><!-- .nav-menu -->
      </div><!-- End Header Container -->
    </div>
  </header><!-- End Header -->
