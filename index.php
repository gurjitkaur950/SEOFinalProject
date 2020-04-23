<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Gurjit Kaur- Web developer & designer, freelancer and paper crafter. I made many projects using different technologies and tools.">
    <link rel="keywords" content="Web designer, Web developer, freelancer, paper craft">
    <link rel="shortlink" href="">
    <link rel="canonical" href="">

    <title>Home- Gurjit Kaur</title>
    <link rel="icon" type="image/ico" href="img/logo.png">

    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" href="css/main-style.css">                                   <!-- main-style -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
              <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
      </head>

      <body>
        <div class="pr-main-content" id="top">
            <div class="pr-top-bar-bg"></div>    
            <div class="pr-top-bar" id="pr-top-bar">
                <div class="container">
                    <div class="row">
                        <nav class="navbar navbar-expand-lg narbar-light">
                            <a class="navbar-brand mr-auto" href="#">
                                <img src="img/logo.png" alt="Site logo">
                                Gurjit Kaur
                            </a>
                            <button type="button" id="nav-toggle" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#mainNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div id="mainNav" class="collapse navbar-collapse pr-bg-white">
                                <ul class="navbar-nav ml-auto">
                                  <li class="nav-item">
                                    <a class="nav-link" href="/index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/about.php">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/mywork.php">My Work</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/contact.php">Contact Us</a>
                                </li>
                            </ul>
                        </div>                            
                    </nav>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- .pr-top-bar -->

        <div class="pr-page-wrap mx-auto">
           
            <section class="pr-banner" style="background: url(img/home.jpg) center no-repeat; background-size: cover; height:550px;" class="intro-section pb-2">
                
                 <div class="row pr-banner-row pr-banner-row-header">
                            <div class="col-xs-12">
                                <div class="pr-banner-header">
                                    <h1 class="text-uppercase pr-banner-title">Hello, My Name Is Gurjit Kaur</h1>
                                    <p class="pr-banner-subtitle">I am a Web developer, Web designer, Free Lancer & Paper Crafter. </p>
                                    <a href="#references" class="pr-down-arrow-link"><i class="fa fa-2x fa-angle-down pr-down-arrow"></i></a>       
                                </div>    
                            </div>  <!-- col-xs-12 -->                      
                        </div> <!-- row -->                
            </section>
             

            <section id="references">
      <div class="container">
        <div class="col-sm-12">
          <div class="mb-5 text-center">
            <h2  class="title">My work</h2>
            <p  class="lead">I have worked on dozens of projects so I have picked only the latest for you.</p>
          </div>
          <ul id="filter" >
            <li class="active"><a href="#" data-filter="all">All</a></li>
            <li><a href="#" data-filter="html">HTML & CSS</a></li>
            <li><a href="#" data-filter="php">PHP</a></li>
            <li><a href="#" data-filter="java">JavaScript</a></li>
            <li><a href="#" data-filter="photo">Photoshop</a></li>
            <li><a href="#" data-filter="craft">Paper Craft</a></li>
          </ul>

          </div>
          <!-- Reference detail-->
          <div id="references-masonry" >
            <div class="row">
                  <div data-category="html" class="reference-item col-lg-3 col-md-6">
                    <div class="reference"><img src="img/html1.png" alt="Indian Style Food" class="img-fluid">
                    </div>
                  </div>
                  <div data-category="php" class="reference-item col-lg-3 col-md-6">
                    <div class="reference"><img src="img/php.png" alt="Book Inventory Store" class="img-fluid">

                    </div>
                  </div>
                  <div data-category="java" class="reference-item col-lg-3 col-md-6">
                    <div class="reference"><img src="img/javascript.png" alt="Find the Penguin" class="img-fluid">

                    </div>
                  </div>
                  <div data-category="photo" class="reference-item col-lg-3 col-md-6">
                    <div class="reference"><img src="img/photoshop1.jpg" alt="TravelCo" width="279" class="img-fluid">
           </div>
                  </div>
                  <div data-category="craft" class="reference-item col-lg-3 col-md-6">
                    <div class="reference"><img src="img/craft1.jpeg" alt="Tissue Paper Stand" class="img-fluid">

                    </div>
                  </div>
                  <div data-category="html" class="reference-item col-lg-3 col-md-6">
                    <div class="reference"><img src="img/html2.JPG" alt="College Project" class="img-fluid">
                    </div>
                  </div>
                  <div data-category="php" class="reference-item col-lg-3 col-md-6">
                    <div class="reference"><img src="img/php4.png" alt="Shopping Star" class="img-fluid">

                    </div>
                  </div>
                  <div data-category="java" class="reference-item col-lg-3 col-md-6">
                    <div class="reference"><img src="img/javascript2.JPG" width="279" alt="Calculator" class="img-fluid">
              </div>
                  </div>
                <div data-category="photo" class="reference-item col-lg-3 col-md-6">
                    <div class="reference"><img src="img/photo2.jpg" alt="TechCo" class="img-fluid">
              </div>
                  </div>
                <div data-category="craft" class="reference-item col-lg-3 col-md-6">
                    <div class="reference"><img src="img/craft2.jpeg" alt="Paper Bicycle" width="279" class="img-fluid">
              </div>
                  </div>
                <div data-category="html" class="reference-item col-lg-3 col-md-6">
                    <div class="reference"><img src="img/html3.JPG" alt="Kiddos" class="img-fluid">
              </div>
                  </div>
            
                <div data-category="craft" class="reference-item col-lg-3 col-md-6">
                    <div class="reference"><img src="img/craft3.jpeg" alt="Paper Flowers" class="img-fluid" width="279">
              </div>
                  </div>
                    <div data-category="php" class="reference-item col-lg-3 col-md-6">
                    <div class="reference"><img src="img/php2.png" alt="College Info" class="img-fluid">
              </div>
                  </div>
                <div data-category="java" class="reference-item col-lg-3 col-md-6">
                    <div class="reference"><img src="img/javascript3.JPG" alt="My Apps" class="img-fluid">
              </div>
                  </div>
                <div data-category="photo" class="reference-item col-lg-3 col-md-6">
                    <div class="reference"><img src="img/photo4.gif" alt="Sunset GIF" class="img-fluid">
              </div>
                  </div>
                <div data-category="php" class="reference-item col-lg-3 col-md-6">
                    <div class="reference"><img src="img/wordpress.png" alt="MagicApparels" class="img-fluid">
              </div>
                  </div>
            </div>
          </div>
</div><!--        container-->
      
    </section>


           <footer class="main-footer">
        <div class="container">
        <div class="row">
          <div class="col-md-6 text-center text-lg-left">
            <p class="social"><a href="https://www.facebook.com/" target="_blank" class="external facebook wow "><i class="fa fa-facebook"></i></a><a href="https://www.instagram.com/" data-wow-delay="0.2s" target="_blank" class="external instagram wow"><i class="fa fa-instagram"></i></a><a href="https://www.linkedin.com/in/gurjit-kaur-b35252180/" target="_blank" data-wow-delay="0.4s" class="external gplus wow"><i class="fa fa-linkedin"></i></a><a href="mailto:gurjitkaur7106@gmail.com" target="_blank" data-wow-delay="0.6s" class="email wow fadeInUp"><i class="fa fa-envelope"></i></a><a href="https://www.youtube.com/watch?v=j38Ke1enzmw" target="_blank" class="external facebook wow"><i class="fa fa-youtube"></i></a></p>
          </div>
          <!-- /.6-->
          <div class="col-md-6 text-center text-lg-right mt-4 mt-lg-0">
            <p>© 2020 Gurjit Kaur. All rights reserved.</p>
          </div>
          
        </div>
      </div>
    </footer>
        </div>
   </div>  <!-- .main-content -->

    <!-- load JS files -->
        <script src="js/jquery-1.11.3.min.js"></script>             <!-- jQuery (https://jquery.com/download/) -->
    <script src="js/popper.min.js"></script>                    <!-- https://popper.js.org/ -->       
    <script src="js/bootstrap.min.js"></script>                 <!-- https://getbootstrap.com/ -->
          <script src="js/script.js"></script> 
    
    <script> 
        

        /* DOM is ready
        ------------------------------------------------*/
        $(function(){
// Change top navbar on scroll
            $(window).on("scroll", function() {
                if($(window).scrollTop() > 100) {
                    $(".pr-top-bar").addClass("active");
                } else {                    
                 $(".pr-top-bar").removeClass("active");
                }
            });



            // Close navbar after clicked
            $('.nav-link').click(function(){
                $('#mainNav').removeClass('show');
            });
           
        });

    </script>             

</body>
</html>
