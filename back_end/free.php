<?php
    ob_start();
    session_start();
    $pageTitle = 'free';
    $Title = 'free';
    if (isset($_SESSION['user'])) {
		header('Location: main.php');
	}
    include 'inital.php';
    include $tpl . 'header.php'; 
?>
  <section style="background:url('assets/img/hero2.jpg') center center; height:300px"id="hero" class="d-flex align-items-center">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
      <h1>الفيديوهات المجانية</h1>
    </div>
  </section>
  <main id="main">
    <section id="courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="row mb-5" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-6 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="assets/img/free1.jpg" class="w-100" height="500" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                </div>

                <h3><a href="#">قاعدة الجيب</a></h3>
                <p>قاعدة الجيب - الصف الثاني الثانوي (أ/ محمد عبد العزيز ).</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                  <h4><a style="color:#fff" href="https://www.youtube.com/watch?v=ogH5NxlVNW8&feature=youtu.be" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true">مشاهدة </a></h4>
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

          
          <div class="col-lg-6 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="assets/img/free2.jpg" class="w-100" height="500" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                </div>

                <h3><a href="#">النسب المثلثية الأساسية للزاوية الحادة</a></h3>
                <p>النسب المثلثية الأساسية للزاوية الحادة</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                  <h4><a style="color:#fff" href="https://www.youtube.com/watch?v=MxxYvWP3GeQ&feature=youtu.be" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true">مشاهدة </a></h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100"> 
          <div class="col-lg-6 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="assets/img/free3.png" class="w-100" height="500" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                </div>

                <h3><a href="#">محصلة قوتين</a></h3>
                <p>محصلة قوتين - الجزء الأول - إستاتيكا - الصف الثاني الثانوي (أ/ محمد عبد العزيز )</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                  <h4><a style="color:#fff" href="https://www.youtube.com/watch?v=WH2Juo7mnS0&feature=youtu.be" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true">مشاهدة </a></h4>
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-6 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="assets/img/free4.jpg" class="w-100" height="500" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                </div>

                <h3><a href="#">إشتقاق الدوال المثلثية</a></h3>
                <p>إشتقاق الدوال المثلثية - التفاضل والتكامل - الصف الثالث الثانوي</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                  <h4><a style="color:#fff" href="https://www.youtube.com/watch?v=6fuqEoU9Y3k&feature=youtu.be" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true">مشاهدة </a></h4>
                  </div>
                </div>
              </div>
            </div>
          </div> 
          <!-- End Course Item-->
        </div>
      </div>
    </section>
  </main>
  <?php 
    include $tpl . 'footer.php'; 
    include $tpl . 'scripts.php'; 
    ob_end_flush();
?>