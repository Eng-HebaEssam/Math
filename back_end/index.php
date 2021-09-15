<?php
    ob_start();
    session_start();
    $pageTitle = 'Homepage';
    $Title = 'Homepage';
    if (isset($_SESSION['user'])) {
		header('Location: main.php');
	}
  include 'inital.php';
  include $tpl . 'header.php';   
?>
<!-- End Header -->
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
      <h1>أفضل طريقة للتعلم </h1>
      <h2>أنضم الينا الأن وكن من المتفوقين فى مادة الرياضيات</h2>
      <a href="#why-us" class="btn-get-started scrollto">أبدأ الان</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-right">
            <div class="content">
              <h3>لماذا تختار منصتنا لدراسة الرياضيات؟</h3>
              <p>
                هدفنا هو اتقان مادة الرياضيات والتفوق فيها عن طريق اساليب التعليم الجديدة والمعاصرة
              </p>
              <div class="text-center">
                <a href="login.php" class="more-btn">الدخول للمنصة <i class="bx bx-chevron-left"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>تدرب علي جميع الدروس</h4>
                    <p>
                      سوف تجد بعد كل درس جزء تطبيقي عليه وسيتم تسجيل النتيجه في ملفك الشخصى</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4>
                      أحصل علي مهارات جديدة
                      </h4>
                    <p>
                      أحصل على مهارات جديده من خلال التعلم بشكل صحيح ومحاوله التطبيق الجيد على المعلومات الجديدة</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-message-square-dots"></i>
                    <h4>تواصل مع معلمك</h4>
                    <p>
                      سوف يتم تحديد اوقات في الأسبوع للرد على الأسئلة والأستفسارات من خلال تطبيقات الفصول الأفتراضية</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="text-center main_cat" data-aos="zoom-in">
          <h3> نبذة عن المنصة</h3>
          <iframe src="https://www.youtube.com/embed/bq26OyPprF0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </section><!-- End Cta Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">
        <div class="section-title" data-aos="fade-right">
          <h2> الخدمات</h2>
          <p> تشمل الخدمات قيمة الأشتراك الشهرى للمراحل المختلفة كما توضح الخدمة التى نقدمها فى كل قسم
        </p>
        </div>
          <div class="row mb-4">
              <div class="col-md-4 d-block align-items-stretch">
                <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                  <div class="icon"><i class="bx bxl-dribbble"></i></div>
                  <h4><a href="#">الصف الأول الأعدادى</a></h4>
                  <ul style="list-style:none;margin-right: -40px;">
                    <li>ورق الشرح</li>
                    <li>فيديوهات الشرح</li>
                    <li>امتحانات المتابعة</li>
                    <li>حصص لتطبيق Zoom </li>
                  </ul>
                  <button class="price">50 جنية</button>
                </div>
              </div>

              <div class="col-md-4 d-block align-items-stretch mt-4 mt-lg-0">
                <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                  <div class="icon"><i class="bx bx-file"></i></div>
                  <h4><a href="">الصف الثانى الأعدادى</a></h4>
                  <ul style="list-style:none;margin-right: -40px;">
                    <li>ورق الشرح</li>
                    <li>فيديوهات الشرح</li>
                    <li>امتحانات المتابعة</li>
                    <li>حصص لتطبيق Zoom </li>
                  </ul>
                  <button class="price">50 جنية</button>
                </div>
              </div>

              <div class="col-md-4 d-block align-items-stretch">
                <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
                  <div class="icon"><i class="bx bx-tachometer"></i></div>
                  <h4><a href="">الصف الثالث الأعدادى</a></h4>
                  <ul style="list-style:none;margin-right: -40px;">
                    <li>ورق الشرح</li>
                    <li>فيديوهات الشرح</li>
                    <li>امتحانات المتابعة</li>
                    <li>حصص لتطبيق Zoom </li>
                  </ul>
                  <button class="price">60 جنية</button>
                </div>
              </div>


            </div>
            <div class="row mb-4">
              <div class="col-md-4 d-block align-items-stretch">
                <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                  <div class="icon"><i class="bx bxl-dribbble"></i></div>
                  <h4><a href="#">الصف الأول الثانوى</a></h4>
                  <ul style="list-style:none;margin-right: -40px;">
                    <li>الرياضيات البحتة</li>
                    <li>ورق الشرح</li>
                    <li>فيديوهات الشرح</li>
                    <li>امتحانات المتابعة</li>
                    <li>حصص لتطبيق Zoom </li>
                  </ul>
                  <button class="price">80 جنية</button>
                </div>
              </div>

              <div class="col-md-4 d-block align-items-stretch mt-4 mt-lg-0">
                <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                  <div class="icon"><i class="bx bx-file"></i></div>
                  <h4><a href="">الصف الثانى الثانوى</a></h4>
                  <ul style="list-style:none;margin-right: -40px;">
                    <li>الرياضيات البحتة</li>
                    <li>الرياضيات التطبيقية</li>
                    <li>ورق الشرح</li>
                    <li>فيديوهات الشرح</li>
                    <li>امتحانات المتابعة</li>
                    <li>حصص لتطبيق Zoom </li>
                  </ul>
                  <button class="price">120 جنية</button>
                </div>
              </div>

              <div class="col-md-4 d-block align-items-stretch">
                <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
                  <div class="icon"><i class="bx bx-tachometer"></i></div>
                  <h4><a href="">الصف الثالث الثانوى</a></h4>
                  <ul style="list-style:none;margin-right: -40px;">
                    <li>الرياضيات البحتة</li>
                    <li>الرياضيات التطبيقية</li>
                    <li>ورق الشرح</li>
                    <li>فيديوهات الشرح</li>
                    <li>امتحانات المتابعة</li>
                    <li>حصص لتطبيق Zoom </li>
                  </ul>
                  <button class="price">180 جنية</button>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-left">
          <h2> أخر الأعمال </h2>
          <p>تحتوى على كل ما هو جديد فى منصتنا </p>
        </div>
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-6 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/v-ukraine-sokraschayutsya-podpisnye-tirazhi-gazet-i-zhurnalov-obnarodovany-trevozhnye-dannye-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>المقالات</h4>
                <p>معلومات ومقالات عن الرياضيات</p>
                <div class="portfolio-links">
                  <a href="posts.php" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/p.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>الفيديوهات المجانية</h4>
                <p>فيديوهات شرح مجانية</p>
                <div class="portfolio-links">
                  <a href="free.php" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/p1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>المنشورات</h4>
                <p>تحتوى على كل ما ينشرة المدرس عن العام الدراسى </p>
                <div class="portfolio-links">
                  <a href="log.php" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/p3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>المهام</h4>
                <p>يحدد المدرس المهام للطالب والمسابقات</p>
                <div class="portfolio-links">
                  <a href="log.php" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section dir="ltr" id="testimonials" class="testimonials section-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 order-1 order-lg-2">
            <div class="section-title" data-aos="fade-right">
              <h2> تعليقات الطلاب</h2>
              <p>بعض التعليقات على بعض الدروس المضافة في المنصة وقناة اليوتيوب وذلك لأن رأيكم دائما يهمنا</p>
            </div>
          </div>
          <div class="col-lg-8 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
            <div class="owl-carousel testimonials-carousel">
            <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  جزاك الله كل الخير استاذنا الغالى احاطكم الله برعايتة ومن عليكم بمغفرتة وامدكم بالصحة والعافية
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/img.png" class="testimonial-img" alt="">
                <h3>عرفات للرياضيات</h3>
                <h4>مراجعة ليلة الامتحان تفاضل وتكامل</h4>
              </div>

              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  روعة استاذ محمد ربنا يوفقك ويبارك في علمك وعملك
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/img.png" class="testimonial-img" alt="">
                <h3>مستر محمود صبحى</h3>
                <h4>حل اسئله الاختيارى تفاضل وتكامل</h4>
              </div>
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  واللة شرح جميل ومفصل جدا جدا 
                  انا عن نفسى فهمت الدرس بالرغم انى بدأت فالمنهج متأخر 
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/img.png" class="testimonial-img" alt="">
                <h3>عصام الجيوشي</h3>
                <h4>	العلاقة - الدالة </h4>
              </div>

              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  ❤عظمه ماشاء الله والله ي استاذ محمد❤
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/img.png" class="testimonial-img" alt="">
                <h3>Alaa fayez</h3>
                <h4>العمليات على الدوال - تركيب دالتين</h4>
              </div>

              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  شرح رائع جدا
                  طريقة توصيل 10 على 10
                  ممتاز مستر محمد
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/img.png" class="testimonial-img" alt="">
                <h3>Abdoo Toleb</h3>
                <h4>حل النموذج الاسترشادى الثانى</h4>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="row">
          <div class="col-lg-4">
            <div class="section-title" data-aos="fade-right">
              <h2> فريق العمل 
              </h2>
              <p>هدفنا الاول والاخير هو التفوق دائما </p>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="row">

              <div class="col-lg-6">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <div class="pic"><img src="assets/img/mohamed.png" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4>الأستاذ محمد عبد العزيز</h4>
                    <span>مدرس مادة الرياضيات</span>
                    <p>أستاذ الرياضيات</p>
                    <div class="social">
                      <a href="https://chat.whatsapp.com/C3tIc40lOLrIv6X0qq6aAK" style="margin-left:7px"><i class="ri-whatsapp-fill "></i></a>
                      <a href="https://www.facebook.com/%D8%B1%D9%8A%D8%A7%D8%B6%D9%8A%D8%A7%D8%AA-%D8%A8%D8%B4%D9%83%D9%84-%D8%AC%D8%AF%D9%8A%D8%AF-%D9%85%D8%AD%D9%85%D8%AF-%D8%B9%D8%A8%D8%AF%D8%A7%D9%84%D8%B9%D8%B2%D9%8A%D8%B2-109604920760675/"><i class="ri-facebook-fill"></i></a>
                      <a href="https://www.youtube.com/channel/UCbTiEjv8G0eEahLklDBejaQ"><i class="ri-youtube-fill"></i> </a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-6 mt-4 mt-lg-0">
                <div class="member" data-aos="zoom-in" data-aos-delay="200">
                  <div class="pic"><img src="assets/img/master.png" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4>فريق عمل ماستركود</h4>
                    <span>MasterCode</span>
                    <p>التصميم والأعمال  البرمجية</p>
                    <div class="social">
                      <a href="https://api.whatsapp.com/send?phone=01066343874" style="margin-left:7px"><i class="ri-whatsapp-fill"></i></a>
                      <a href="https://www.facebook.com/MasterC0de"><i class="ri-facebook-fill"></i></a>
                      <a href="https://www.linkedin.com/mynetwork/"><i class="ri-linkedin-box-fill"></i> </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <div class="section-title">
              <h2> تواصل معنا</h2>
              <p>احرص دائما على التواصل معنا</p>
            </div>
          </div>
          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
          <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $username 	= filter_var($_POST['username'], FILTER_SANITIZE_STRING);
                    $email 	    = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
                    $comment 	= filter_var($_POST['message'], FILTER_SANITIZE_STRING);
                    if (! empty($comment)) {
                        $stmt = $con->prepare("INSERT INTO 
                            message(message, username, email, date)
                            VALUES(:message, :username, :email, NOW())");
                        $stmt->execute(array(
                            'message'   => $comment,
                            'username'  => $username,
                            'email'     => $email
                        ));
                        if ($stmt) {
                            echo '<div class="alert alert-success text-center alert-dismissible fade show" role="alert" id="alert-message">
                                    تم ارسال الرسالة بنجاح
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>';
                        }
                    } else {
                        echo '<div class="alert alert-warning alert-dismissible text-center fade show" role="alert" id="alert-message">
                                يجب عليك اضافة الرساله
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>';
                    }
                }
            ?>
            <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d638578.8656879187!2d30.85574933025395!3d30.795411189402884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2seg!4v1603370690272!5m2!1sar!2seg" width="100%" height="550" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>    
            <div class="info mt-4">
              <i class="bx bx-location-plus"></i>
              <h4>العنوان</h4>
              <p>كفر الشيخ</p>
            </div>
            <div class="row">
              <div class="col-lg-6 mt-4">
                <div class="info">
                  <i class="bx bx-mail-send"></i>
                  <h4>البريد الألكترونى</h4>
                  <p>moh.abdelazize@gmail.com</p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="info w-100 mt-4">
                  <i class="bx bxs-phone"></i>
                  <h4>الهاتف</h4>
                  <p>01000919748</p>
                </div>
              </div>
            </div>

            <form action="#contact" method="post" role="form" class="php-email-form mt-4">
                <div class="form-group">
                  <input type="text" name="username" class="form-control" id="name" placeholder="الأسم"  />
                </div>
                <div class=" form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="البريد الألكترونى"  />
                </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="الرسالة"></textarea>
              </div>
              <div class="text-center"><button type="submit">أرسال</button></div>
            </form>
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
  <?php 
    include $tpl . 'footer.php'; 
    include $tpl . 'scripts.php'; 
    ob_end_flush();
?>
  