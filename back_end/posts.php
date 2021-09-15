<?php
    ob_start();
    session_start();
    $pageTitle = 'posts';
    $Title = 'posts';
    if (isset($_SESSION['user'])) {
		header('Location: main.php');
	}
    include 'inital.php';
    include $tpl . 'header.php'; 
?>
  <section style="background:url('assets/img/hero2.jpg') center center; height:300px" id="hero" class="d-flex align-items-center">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
      <h1>المقالات</h1>
  
    </div>
  </section>
  <main id="main">
    <section id="posts" class="posts">
        <div class="container">
          <div class="row">
            <div class="col-md-6 d-flex align-items-stretch">
              <div class="card" style='background-image: url("assets/img/image.png");'>
                <div class="card-body">
                  <h5 class="card-title"><a href="log.php">علم الرياضيات</a></h5>
                  <p class="card-text">مادة الرياضيات؛ وتُسمّى أيضاً بعلم القياس أهمّ مادّة من موادّ العلومِ جميعِها، وأساس تطوُّرها ونموُّها، فالرياضيات أمّ العلوم، وتتنوّع مواد الرياضيّات ما بين المفاهيم المُجرّدة، والمواد التطبيقيّة، والمصطلحات الرياضيّة والنظريّات
                  ، كما تهتمُّ بدراسةِ الأعدادِ والعمليّاتِ الحسابيّةِ التي تجري عليها، ودراسةِ الكَمِّ وكميّة المَعدود، وعلمِ القياس، والجبرِ، والحِسابِ، والهندسةِ، والّتحليلِ إلى العوامل، والاحتمالاتِ، وتطبيقاتِ التّفاضُلِ والتكامُلِ،
                  </p>
                  <div class="read-more"><a href="#"data-toggle="modal" data-target="#post1"><i class="bx bx-chevron-left"></i>المزيد</a></div>
                </div>
              </div>
            </div>
            <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
              <div class="card" style='background-image: url("assets/img/rekenvaardigheid3.jpg");'>
                <div class="card-body">
                  <h5 class="card-title"><a href="log.php">حساب التفاضل والتكامل</a></h5>
                  <p class="card-text">يسمى في الأساس "حساب التفاضل والتكامل اللانهائي"، هو الدراسة الرياضية للتغير المستمر، بنفس الطريقة التي تكون فيها الهندسة هي دراسة الشكل والجبر هي دراسة تعميمات العمليات الحسابية.

لديها فرعين رئيسيين: حساب التفاضل وحساب التكامل. يتعلق الأول بمعدلات التغيير الفورية، وميل المنحنيات، بينما يتعلق حساب التكامل بتراكم الكميات، والمساحات الموجودة أسفل المنحنيات أو بينها</p>
                  <div class="read-more"><a href="#"data-toggle="modal" data-target="#post2"><i class="bx bx-chevron-left"></i> المزيد</a></div>
                </div>
              </div>
  
            </div>
            <div class="col-md-6 d-flex align-items-stretch mt-4">
              <div class="card" style='background-image: url("assets/img/arquitectura-540x360.jpg");'>
                <div class="card-body">
                  <h5 class="card-title"><a href="log.php">الأحصاء</a></h5>
                  <p class="card-text">أحد فروع الرياضيات الهامة ذات التطبيقات الواسعة. وهو علم جمع ووصف وتفسير البيانات وبمعنى آخر صندوق الأدوات الموضوع تحت البحث التجريبي. يهتم علم الإحصاء بجمع وتلخيص وتمثيل وإيجاد استنتاجات من مجموعة البيانات المتوفرة، محاولا التغلب على مشاكل مثل عدم تجانس البيانات وتباعدها. كل هذا يجعله ذا أهمية تطبيقية واسعة في شتى مجالات العلوم من الفيزياء إلى العلوم الاجتماعية وحتى الإنسانية، كما يلعب دورا في السياسة والأعمال.</p>
                  <div class="read-more"><a href="#"data-toggle="modal" data-target="#post3"><i class="bx bx-chevron-left"></i> المزيد</a></div>
                </div>
              </div>
            </div>
            <div class="col-md-6 d-flex align-items-stretch mt-4">
              <div class="card" style='background-image: url("assets/img/fg.jpg");'>
                <div class="card-body">
                  <h5 class="card-title"><a href="log.php">الرياضيات التطبيقية</a></h5>
                  <p class="card-text">تطبيق الأساليب الرياضية في مجالات مختلفة مثل العلوم والهندسة والأعمال وعلوم الحاسوب والصناعة. فإن الرياضيات التطبيقية هي مزيج من العلوم الرياضية والمعرفة المتخصصة. يصف مصطلح "الرياضيات التطبيقية" أيضًا التخصص المهني الذي يعمل فيه علماء الرياضيات على حل المشكلات العملية من خلال صياغة النماذج الرياضية ودراستها.</p>
                  <div class="read-more"><a href="#"data-toggle="modal" data-target="#post4"><i class="bx bx-chevron-left"></i> المزيد</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
  <!-- Modal -->
  <div class="modal fade" id="post1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="card-title m-auto">علم الرياضيات</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin: -1rem -1rem -1rem 0;">
            <span aria-hidden="true" style="color:#009970">&times;</span>
          </button>
        </div>
        <div class="modal-body text-right">
          <p class="card-text">مادة الرياضيات؛ وتُسمّى أيضاً بعلم القياس أهمّ مادّة من موادّ العلومِ جميعِها، وأساس تطوُّرها ونموُّها، فالرياضيات أمّ العلوم، وتتنوّع مواد الرياضيّات ما بين المفاهيم المُجرّدة، والمواد التطبيقيّة، والمصطلحات الرياضيّة والنظريّات
          ، كما تهتمُّ بدراسةِ الأعدادِ والعمليّاتِ الحسابيّةِ التي تجري عليها، ودراسةِ الكَمِّ وكميّة المَعدود، وعلمِ القياس، والجبرِ، والحِسابِ، والهندسةِ، والّتحليلِ إلى العوامل، والاحتمالاتِ، وتطبيقاتِ التّفاضُلِ والتكامُلِ،
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="post2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="card-title m-auto">حساب التفاضل والتكامل</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin: -1rem -1rem -1rem 0;">
            <span aria-hidden="true" style="color:#009970">&times;</span>
          </button>
        </div>
        <div class="modal-body text-right">
        <p class="card-text">يسمى في الأساس "حساب التفاضل والتكامل اللانهائي"، هو الدراسة الرياضية للتغير المستمر، بنفس الطريقة التي تكون فيها الهندسة هي دراسة الشكل والجبر هي دراسة تعميمات العمليات الحسابية.
        لديها فرعين رئيسيين: حساب التفاضل وحساب التكامل. يتعلق الأول بمعدلات التغيير الفورية، وميل المنحنيات، بينما يتعلق حساب التكامل بتراكم الكميات، والمساحات الموجودة أسفل المنحنيات أو بينها</p>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="post3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="card-title m-auto">الأحصاء</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin: -1rem -1rem -1rem 0;">
            <span aria-hidden="true" style="color:#009970">&times;</span>
          </button>
        </div>
        <div class="modal-body text-right">
        <p class="card-text">أحد فروع الرياضيات الهامة ذات التطبيقات الواسعة. وهو علم جمع ووصف وتفسير البيانات وبمعنى آخر صندوق الأدوات الموضوع تحت البحث التجريبي. يهتم علم الإحصاء بجمع وتلخيص وتمثيل وإيجاد استنتاجات من مجموعة البيانات المتوفرة، محاولا التغلب على مشاكل مثل عدم تجانس البيانات وتباعدها. كل هذا يجعله ذا أهمية تطبيقية واسعة في شتى مجالات العلوم من الفيزياء إلى العلوم الاجتماعية وحتى الإنسانية، كما يلعب دورا في السياسة والأعمال.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="post4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="card-title m-auto">الرياضيات التطبيقية</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin: -1rem -1rem -1rem 0;">
            <span aria-hidden="true" style="color:#009970">&times;</span>
          </button>
        </div>
        <div class="modal-body text-right">
        <p class="card-text">تطبيق الأساليب الرياضية في مجالات مختلفة مثل العلوم والهندسة والأعمال وعلوم الحاسوب والصناعة. فإن الرياضيات التطبيقية هي مزيج من العلوم الرياضية والمعرفة المتخصصة. يصف مصطلح "الرياضيات التطبيقية" أيضًا التخصص المهني الذي يعمل فيه علماء الرياضيات على حل المشكلات العملية من خلال صياغة النماذج الرياضية ودراستها.</p>
        </div>
      </div>
    </div>
  </div>
  </main>
   <!-- ======= Footer ======= -->
   <?php 
    include $tpl . 'footer.php'; 
    include $tpl . 'scripts.php'; 
    ob_end_flush();
?>