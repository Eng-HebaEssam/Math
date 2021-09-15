<?php
    ob_start();
    session_start();
    $noNavbar = '';
    $pageTitle = 'Homepage';
    if (isset($_SESSION['user'])) {
		header('Location: profile.php');
    }
    include 'inital.php'; ?>
    <section class="sectioninfo">
        <div class="alert alert-primary text-center"><h2>لقد تم انشاء حساب وفي انتظار التفعيل. يوجد في الاسفل مجموعة من الدروس المجانية يمكنك الاطلاع عليها</h2></div>
    </section>
    <section class="our_work text-center">
        <div class="container">
            <h2>دروس مجانية</h2>
            <div class="alert alert-info alert-dismissible fade show text-right" role="alert">
                    <button type="button" class="close pull-left" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h5 class="text-center">اضغط علي اسم الصف لمشاهدة الدروس المجانية المدرجة اسفلة</h5>
                </div>
            <h3>الصف الاول الاعدادى</h3>
            <div class="hidden">
                <div class="row">
                    <div class="col-md-6">
                    <div class="video">
                        <iframe width="360" height="315" src="https://www.youtube.com/embed/LJvUTKY62vI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <h4>الجبر</h4>
                    </div>
                    <div class="col-md-6">
                        <div class="video">
                            <iframe width="360" height="315" src="https://www.youtube.com/embed/LJvUTKY62vI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <h4>الجبر</h4>
                    </div>
                </div>
            </div>
            <h3>الصف الثانى الاعدادي</h3>
            <div class="hidden">
                <div class="row">
                    <div class="col-md-6">
                    <div class="video">
                        <iframe width="360" height="315" src="https://www.youtube.com/embed/LJvUTKY62vI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <h4>الجبر</h4>
                    </div>
                    <div class="col-md-6">
                        <div class="video">
                            <iframe width="360" height="315" src="https://www.youtube.com/embed/LJvUTKY62vI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <h4>الجبر</h4>
                    </div>
                </div>
            </div>
            <h3>الصف الثالث الاعدادى</h3>
            <div class="hidden">
                <div class="row">
                    <div class="col-md-6">
                    <div class="video">
                        <iframe width="360" height="315" src="https://www.youtube.com/embed/LJvUTKY62vI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <h4>الجبر</h4>
                    </div>
                    <div class="col-md-6">
                        <div class="video">
                            <iframe width="360" height="315" src="https://www.youtube.com/embed/LJvUTKY62vI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <h4>الجبر</h4>
                    </div>
                </div>
            </div>
            <h3>الصف الاول الثانوى</h3>
            <div class="hidden">
                <div class="row">
                    <div class="col-md-6">
                    <div class="video">
                        <iframe width="360" height="315" src="https://www.youtube.com/embed/LJvUTKY62vI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <h4>الجبر</h4>
                    </div>
                    <div class="col-md-6">
                        <div class="video">
                            <iframe width="360" height="315" src="https://www.youtube.com/embed/LJvUTKY62vI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <h4>الجبر</h4>
                    </div>
                </div>
            </div>
            <h3>الصف الثانى الثانوى</h3>
            <div class="hidden">
                <div class="row">
                    <div class="col-md-6">
                    <div class="video">
                        <iframe width="360" height="315" src="https://www.youtube.com/embed/LJvUTKY62vI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <h4>الجبر</h4>
                    </div>
                    <div class="col-md-6">
                        <div class="video">
                            <iframe width="360" height="315" src="https://www.youtube.com/embed/LJvUTKY62vI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <h4>الجبر</h4>
                    </div>
                </div>
            </div>
            <h3>الصف الثالث الثانوى</h3>
            <div class="hidden">
                <div class="row">
                    <div class="col-md-6">
                    <div class="video">
                        <iframe width="360" height="315" src="https://www.youtube.com/embed/LJvUTKY62vI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <h4>الجبر</h4>
                    </div>
                    <div class="col-md-6">
                        <div class="video">
                            <iframe width="360" height="315" src="https://www.youtube.com/embed/LJvUTKY62vI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <h4>الجبر</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4 order-3 order-md-1 order-lg-1" >
                        <h2>يمكنك متابعتنا </h2>
                        <p>من خلال تلك الروابط</p>
                        <div class="social">
                            <a href="https://www.facebook.com/%D8%B1%D9%8A%D8%A7%D8%B6%D9%8A%D8%A7%D8%AA-%D8%A8%D8%B4%D9%83%D9%84-%D8%AC%D8%AF%D9%8A%D8%AF-%D9%85%D8%AD%D9%85%D8%AF-%D8%B9%D8%A8%D8%AF%D8%A7%D9%84%D8%B9%D8%B2%D9%8A%D8%B2-109604920760675/"><i class="fa fa-facebook-f"></i></a> 
                            <a href="https://chat.whatsapp.com/C3tIc40lOLrIv6X0qq6aAK"><i class="fa fa-whatsapp"></i></a> 
                            <a href="https://www.youtube.com/channel/UCbTiEjv8G0eEahLklDBejaQ"><i class="fa fa-youtube"></i></a>  
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 about order-2 order-lg-2 order-md-3 text-right" >
                        <h2 class="text-center">ما تقدمة المنصة</h2>
                        <div class="row">
                            <div class="col-7">فيديوهات شرح مبسطة لكل الدروس</div>
                            <div class="col-5"><img src="layouts/images/1.jpg" alt="" /></div>
                        </div>
                        <div class="row">
                            <div class="col-7">فيديوهات لحل المسائل ومسائل القدرات العلية للتفكير </div>
                            <div class="col-5"><img src="layouts/images/2.jpg" alt="" /></div>
                        </div>
                        <div class="row">
                            <div class="col-7">ملف pdf به ورق الشرح لكل فيديو يمكن تحميلة وطباعته</div>
                            <div class="col-5"><img src="layouts/images/3.png" alt="" /></div>
                        </div>
                        <div class="row">
                            <div class="col-7">اختبارات تفاعلية من بنك الاسئله الخاص بنا</div>
                            <div class="col-5"><img src="layouts/images/4.png" alt="" /></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 order-1 order-md-2 order-lg-3 text-center" >
                        <h2>الاستاذ محمد عبد العزيز</h2>
                        <p> مدرس الرياضيات بمدرسة الشهيد عزت الشافعى الثانوية بنات القديمة بكفر الشيخ</p>
                        <span class="spa">01000919748</span>
                    </div>
                </div>
            </div>
        </section>
        <section class="rights text-center">
            <hr>
            <h4>
                Copyright &copy 2020 All rights reserved | made by
                <span class="foot">Ahmed Eltaroon</span>    
            </h4>
        </section>
    <?php
    include $tpl . 'footer.php';
    ob_end_flush(); 
?>