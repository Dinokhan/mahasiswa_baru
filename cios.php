
<!DOCTYPE HTML>
<html>
<head>
<title>PMB UNIDA GONTOR</title>
<!--css-->
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
  <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
  
  <!--css-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  <script src="js/jquery.min.js"></script>
  <link href='//fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
  <link href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>

  <link href="http://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Allerta+Stencil:400,700,900:normal" rel="stylesheet" type="text/css">
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
    <!-- Plugins CSS -->
    <link href="assets/css/normalize.css" type="text/css" rel="stylesheet" />
    <link href="assets/css/animate.css" type="text/css" rel="stylesheet" />
    <!-- Main CSS -->
    <link href="assets/css/style.css" type="text/css" rel="stylesheet" />
    <link href="assets/css/responsive.css" type="text/css" rel="stylesheet" />
    <!-- icons -->
    <link href="assets/css/iline-icons.css" type="text/css" rel="stylesheet" />
    <link href="assets/css/magnific-popup.css" type="text/css" rel="stylesheet" />
    <!-- Shortcut icon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon"/>

    
<!--css-->

<!--search jQuery-->
  <script src="js/main.js"></script>
<!--search jQuery-->
<script src="js/responsiveslides.min.js"></script>
 <script>
    $(function () {
      $("#slider").responsiveSlides({
        auto: true,
        nav: true,
        speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
 </script>
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<script src="js/simpleCart.min.js"></script>
<script src="js/jstarbox.js"></script>
  <link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
    <script type="text/javascript">
      jQuery(function() {
      jQuery('.starbox').each(function() {
        var starbox = jQuery(this);
          starbox.starbox({
          average: starbox.attr('data-start-value'),
          changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
          ghosting: starbox.hasClass('ghosting'),
          autoUpdateAverage: starbox.hasClass('autoupdate'),
          buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
          stars: starbox.attr('data-star-count') || 5
          }).bind('starbox-value-changed', function(event, value) {
          if(starbox.hasClass('random')) {
          var val = Math.random();
          starbox.next().text(' '+val);
          return val;
          } 
        })
      });
    });
    </script>
</head>
<body>
  <!--header-->
    <div class="header">
      <!-- NAVBAR LANJTUAN -->
       <header class="fallone-navbar" data-id="default-navbar">
            <nav class="navbar navbar-default">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div>
                    
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <li class="active"><a  href="index.php">Home</a></li>
                    <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">About <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li>
                          <a href="about.php">
                            HISTORY
                          </a>
                        </li>
                        <li>
                          <a  href="visi.php">
                            VISION & MISION
                          </a>
                        </li>
                        <li>
                          <a  href="karakter.php">
                            CHARACTERISTIC
                          </a>
                        </li>
                        <li>
                          <a  href="recognition.php">
                            RECOGNITION
                          </a>
                        </li>
                        <li>
                          <a  href="login/admin/foto/profile.php">
                          
                            PROFILE
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Academic<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                          <li>
                            <a  href="#">
                              UNDERGRADUATE PROGRAMS
                            </a>
                          </li>
                          <li>
                            <a  href="#">
                              POSTGRADUATE PROGRAMS
                            </a>
                          </li>

                      </ul>
                  </li>
                  <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">CENTERS<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                          <li>
                            <a  href="cios.php">
                              CIOS - CENTER OF ISLAMIC AND OCCINDENTAL STUDIES
                            </a>
                          </li>
                          <li>
                            <a  href="ulama.php">
                              TRAINING FOR ULAMA
                            </a>
                          </li>
                          <li>
                            <a  href="islami.php">
                              CENTER FOR ISLAMIZATION SCIENCES
                            </a>
                          </li> 
                          <li>
                            <a  href="language.php">
                              LANGUAGE CENTER
                            </a>
                          </li>
                          
                      </ul>
                  </li>
                    <li><a  href="network.php">Network</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">STUDENT<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li>
                            <a  href="student.php">
                              STUDENTS ORGANIZATION
                            </a>
                          </li>
                          
                         </ul>
                  </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">ADMISIONS<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li>
                             <a  href="login/user/create.php">
                              UNDERGRADUATE PROGRAMS
                            </a>
                          </li>
                          <li>
                            <a  href="registrasi2.html">
                              POSTGRADUATE PROGRAMS
                            </a>
                          </li>
                         </ul>
                  </li>
                  <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">REQUIREMENTS<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li>
                            <a  href="info.php">
                              UNDERGRADUATE PROGRAMS
                            </a>
                          </li>
                          <li>
                            <a  href="#">
                              POSTGRADUATE PROGRAMS
                            </a>
                          </li>
                         </ul>
                  </li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container -->
            </nav>
          </header>
      <!-- header -->
      <!-- NAVBAR LANJTUAN -->
      <div class="header-top">
        <div class="container">
           <div class="top-left">
            <a href="#">&nbsp;&nbsp;&nbsp;<img src="assets/images/logo.png" style="width:250px"></a>
          </div>
          <div class="top-right">
          <br>
          <ul>
           <li><a href="login/index.php">Login</a></li>
          </ul>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
    
    <!-- MAIN CONTAINER -->
    <div class="main-content">
      
      <!-- BLOG POST BODY SECTION -->

     <section class="pattern-3 no-padding-right">
        <!-- .container -->
        <div class="container">
          <!-- .row -->
          <div class="row">
            <!-- .col-md-12 -->
            <div class="col-md-12">
              <!-- All blog posts -->
              <div>
                <!-- Left part -->
                <div class="col-md-8 blog-main">
                  <div class="post-detail sep-bottom-lg">
                    <div class="post-detail-body sep-xs">
                      <h3 class="text-uppercase">CIOS (en)</h3>
                      <span class="line-sep-gray"></span>
                        <blockquote >
                          <p style="font-size: 13px" align="justify">
                            <i>
                              The Center for Islamic and Occidental Studies (CIOS) is a center which was established based on the idea that Islam is both a religion and civilization that is now confronting challenges from other civilizations, especially that of the West. However, such a challenge is not new in the history of Islamic civilization, since from the very beginning Islam had the experience of encountering foreign civilizations such as Greek, Persian, Indian and others.
                            </i></p>
                        </blockquote>
                        <p style="font-size: 13px" align="justify">
                        It is worth noting that when Muslim scholars in the past encountered foreign civilizations, their un¬derstanding of the basic concepts of Islam was very strong. They mastered, for example the knowledge about al-Qur’an and Hadith, science of interpretation of the Qur’an (Tafsir), the sciences of Hadith (Ulum al-Hadith), Jurisprudence (Fiqh and Usul al-Fiqh), theology (Aqidah), and the likes. As a result, they were able naturally and successfully to appropriate those foreign elements, adopting and adapting them to be developed within the framework of Islamic thought. This process is what we call the Islamization of con¬temporary knowledge.

                        Today, however, Muslims are facing serious problems to carry out such scientific process. This is due to two reasons: a weak understanding of Islam and overwhelming influence of foreign concepts in the mind of Muslim ummah. They lack mastery of the Islamic sciences and are at the same time unfa¬miliar with the modern sciences of Western civilization. Indeed, many of them are more acquainted with the Western ideas than they are with Islamic concepts, causing them to adopt un-Islamic ideas and theories uncritically. It is to remedy this situation that CIOS was established. The aim is to rediscover the key concepts in Islam through the thought of al-Salaf al-Salih, and at the same time to study the key concepts of Western civilization.

                        It is hoped that through this scientific approach, the Islamic concepts could be clarified, elaborated and applied in various areas such as economics, education, politics, culture, science, etc. creatively, so as to meet the contemporary challenges. At the same time, the Western concepts will be studied critically and selec¬tively, before they are adapted into Islamic concepts.
                        </p>
                        <br><br>
                        
                        <h5>Inauguration</h5><hr>
                        <p style="font-size: 13px" align="justify">The inauguration ceremony of the Centre was held in concurrence with the celebration of Gontor’s 80th Anniversary. The program was attended by Prof. Dr. Abdullah Abdul Muhsin Al-Turki the President of International Muslim Universities League and its Secretary General Prof. Dr. Ja‘far Abdussalam. On this occasion Prof. Dr. Ja’far Abdussalam delivered his speech entitled “The Challenge of Islamic World”.

                        The second inauguration of the Center was by Grand Shaikh al-Azhar, H.E. Prof. Dr. Muhammad Sayyid Tantawi during washich he presented his key note speech on the occasion of 80th Gontor Anniversary.</p>
                        <br><br>

                        <h5>Activities</h5><hr>
                        <p style="font-size: 13px" align="justify">The main activities of the Center are:</p>
                        <ol type="circle">
                          <li>Organizing workshop on Islamization of contemporary knowledge</li>
                          <li>Publication of books and scientific reports</li>
                          <li>Organizing symposium, and seminars both nationally and internationally</li>
                          <li>Holding regular weekly discussions on issues related to thought and civilization of Islam and the West</li>
                          
                        </ol>
                      
                    </div>
                  </div>
                </div>
                <!-- /Left part -->
                <!-- Right part -->
                <div class="col-md-4 blog-sidebar">
                  <!-- Categories List -->
                  <div class="post-detail">
                    <div class="post-detail-body sep-xs">
                      <h3 class="text-primary text-uppercase text-center">Campus Activities</h3>
                      <ul class="text-capitalize sidebar">
                        <li>
                          <a href="#">
                            <span class="post-img">
                              <img src="blog/1.jpg" alt="" class="img-responsive" />
                            </span> 
                            <p style="font-size: 12px;">77 TPQ Teachers Candidate Participated in Tahsin al-Qiro’ah Training at UNIDA Gontor</p>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span class="post-img">
                              <img src="blog/2.jpg" alt="" class="img-responsive" />
                            </span> 
                            <p style="font-size: 12px;">“Al-Hambra” Art Appreciation Night</p>
                            <i class="text-muted small">September 6, 2017</i>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span class="post-img">
                              <img src="blog/3.jpg" alt="" class="img-responsive" />
                            </span> 
                            <p style="font-size: 12px;">Arabic Language Teaching Department Served as One of the Pioneers of Arabic Linguistic Corpus Project in Indonesia</p>
                            <i class="text-muted small">August 30, 2017</i>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span class="post-img">
                              <img src="blog/4.jpg" alt="" class="img-responsive" />
                            </span> 
                             <p style="font-size: 12px;">For the First Time in History, UNIDA Gontor Held Annual Ceremony of Khutbatu-l- ‘Arsy Orientation Week</p>
                            <i class="text-muted small">August 30, 2017</i>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span class="post-img">
                              <img src="blog/5.jpg" alt="" class="img-responsive" />
                            </span> 
                             <p style="font-size: 12px;">Hundreds of Students MTsN Ponorogo Followed Usbu’ Arabiy in UNIDA Gontor</p>
                            <i class="text-muted small">August 30, 2017</i>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span class="post-img">
                              <img src="blog/6.jpg" alt="" class="img-responsive" />
                            </span> 
                             <p style="font-size: 12px;">Seminar Nasional – Conference of Indonesian Occupational Safety and Health (CIOSH)</p>
                            <i class="text-muted small">March 12, 2018</i>
                          </a>
                        </li>
                         <li>
                          <a href="#">
                            <span class="post-img">
                              <img src="blog/7.jpg" alt="" class="img-responsive" />
                            </span> 
                             <p style="font-size: 12px;">International Festival of Education and Culture (IFEC)</p>
                            <i class="text-muted small">August 18, 2016</i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <!-- Categories List End -->
                  
                  <!-- Archive List End -->
                </div>
                <!-- /Right part -->
              </div>
            </div>
            <!-- /.col-md-12 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </section>
      <!-- BLOG POST BODY SECTION END -->
    </div>
    <!-- MAIN CONTAINER END -->

    <!-- Features -->
          <div class="footer-w3l">
          <div class="container">
                <div class="col-md-4 mar-bottom-md">
                      
                      <h2 class="wow fadeInDown text-uppercase"  data-wow-duration=".8s" data-wow-delay=".2s" style="color: white;">EDUCATION</h2>
                      <span class="line-sep-gray"></span>
                      <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s" style="color: white;">
                            - Islamic Education <br>
                  - Arabic Language Teaching <br>
                      </p>
                    </div>
                    <div class="col-md-4 mar-bottom-md">
                      
                      <h2 class="wow fadeInDown text-uppercase"  data-wow-duration=".8s" data-wow-delay=".2s" style="color: white;">USHULUDDIN</h2>
                      <span class="line-sep-gray"></span>
                      <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s" style="color: white;">
                            - Comparative Study of Religion  <br>
                  - Aqidah and Islamic Thought <br>
                  - Al-Qur’an and Tafsir <br>
                      </p>
                    </div>
                    <div class="col-md-4 mar-bottom-md">
                      
                      <h2 class="wow fadeInDown text-uppercase"  data-wow-duration=".8s" data-wow-delay=".2s" style="color: white;">SHARI’AH</h2>
                      <span class="line-sep-gray"></span>
                      <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s" style="color: white;">
                          - Comparative School of Law <br>
                  - Islamic Economic Laws <br>
                      </p>
                    </div>
                </div>
                <div class="container">
                <div class="col-md-4 mar-bottom-md">
                      
                      <h2 class="wow fadeInDown text-uppercase"  data-wow-duration=".8s" data-wow-delay=".2s" style="color: white;">SCIENCE AND TECHNOLOGY</h2>
                      <span class="line-sep-gray"></span>
                      <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s" style="color: white;">
                                - Information Technology <br>
                    - Agro-industrial Technology <br>
                    - Agro-technology <br>
                      </p> 
                    </div>
                    <div class="col-md-4 mar-bottom-md">
                      
                      <h2 class="wow fadeInDown text-uppercase"  data-wow-duration=".8s" data-wow-delay=".2s" style="color: white;">HUMANITIES</h2>
                      <span class="line-sep-gray"></span>
                      <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s" style="color: white;">
                                - International Relations <br>
                    - Communication Sciences <br>
                      </p>
                    </div>
                    <div class="col-md-4 mar-bottom-md">
                      
                      <h2 class="wow fadeInDown text-uppercase"  data-wow-duration=".8s" data-wow-delay=".2s" style="color: white;">HEALTH</h2>
                      <span class="line-sep-gray"></span>
                      <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s" style="color: white;">
                              - Pharmacy <br>
                    - Nutrition <br>
                    - Occupational Safety and Health <br>
                      </p>
                    </div>
                </div>
                <div class="container">
                <div class="col-md-4 mar-bottom-md">
                      
                      <h2 class="wow fadeInDown text-uppercase"  data-wow-duration=".8s" data-wow-delay=".2s" style="color: white;">ECONOMICS AND MANAGEMENT</h2>
                      <span class="line-sep-gray"></span>
                      <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s" style="color: white;">
                                    - Islamic Economic Laws <br>
                      - Business Management <br>
                      </p> 
                    </div>
                    <div class="col-md-4 mar-bottom-md">
                      
                      <h2 class="wow fadeInDown text-uppercase"  data-wow-duration=".8s" data-wow-delay=".2s" style="color: white;">POSTGRADUATE</h2>
                      <span class="line-sep-gray"></span>
                      <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s" style="color: white;">
                                    - Department of Islamic Theology <br>
                      - Arabic Language Teaching <br>
                      </p>
                    </div>
                    
                </div>
            </div>
          <!-- /Features -->
          <!-- footer -->
          <div class="copy-section">
            <div class="container">
              <div class="copy-left">
                <p>&copy;&nbsp;2018 UNIDA Gontor - All rights reserved.</p>
              </div>
              <!-- icon media sosial -->
              <div class="copy-right">
                  
                    <div class="social-icon">
                      <a href="#"><i class="icon" ></i></a>
                      <a href="#"><i class="icon1"></i></a>
                      <a href="#"><i class="icon2"></i></a>
                      <a href="#"><i class="icon3"></i></a>
                    </div>
                  
              </div>
              
              <!-- icon media sosial -->
            </div>
          </div>
          
      <!-- kembali keatas -->
      <div id="back-to-top" class="back-to-top">
           <a href="#" class="icon iline2-thin16 no-margin"></a>
         </div>
      <!-- kembali keatas -->
          <!-- footer -->
      <script src="assets/js/libs/jquery-1.11.2.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/libs/jqBootstrapValidation.js"></script>
        <script src="assets/js/libs/imagesloaded.pkgd.min.js"></script>
        <script src="assets/js/libs/imagesloaded.js"></script>
        <script src="assets/js/libs/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/libs/isotope.pkgd.min.js"></script>
        <script src="assets/js/libs/ParallaxScrolling.js"></script>
        <script src="assets/js/libs/jquery.mailchimp.js"></script>
        <script src="assets/js/libs/wow.min.js"></script>
        <script src="assets/js/libs/jquery.fittext.js"></script>
        <script src="assets/js/libs/jquery.lettering.js"></script>
        <script src="assets/js/libs/jquery.textillate.js"></script>

        <!-- Main JS -->
        <script src="assets/js/main.js"></script>
</body>
</html>