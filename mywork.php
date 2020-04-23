<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Gurjit Kaur- Web developer & designer, freelancer and paper crafter. I made many projects using different technologies and tools.">
    <link rel="keywords" content="Php, calculator, javascript game, responsive design, photoshop, html, css">
    <link rel="canonical" href="">
    <link rel="shortlink" href="">

    <title>My Work- Gurjit Kaur</title>
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




<section id="references">
      <div class="container">
        <div class="col-sm-12">
          <div class="mb-5 text-center">
            <h2 class="title">My work</h2>
            <p class="lead">I have worked on dozens of projects so I have picked only the latest for you.</p>
          </div>
          <ul id="filter" data-animate="fadeInUp">
            <li class="active"><a href="#" data-filter="all">All</a></li>
            <li><a href="#" data-filter="html">HTML & CSS</a></li>
            <li><a href="#" data-filter="php">PHP</a></li>
            <li><a href="#" data-filter="java">JavaScript</a></li>
            <li><a href="#" data-filter="photo">Photoshop</a></li>
            <li><a href="#" data-filter="craft">Paper Craft</a></li>
<!--            <li><a href="#" data-filter="other">Other</a></li>-->
          </ul>
        <div id="detail">
            <div class="row">
             

                <div class="text-center">
                  <h1 id="detail-title" class="title" style="text-align: center;"></h1>
                </div>
                <div id="detail-content"></div>
              </div>
            </div>
          </div>
          <!-- Reference detail-->
          <div id="references-masonry">
            <div class="row">
                  <div data-category="html" class="reference-item col-lg-3 col-md-6">
                    <div class="reference"><a href="#"><img src="img/html1.png" alt="Indian Style Food" class="img-fluid">
                        <div class="overlay">
                          <div class="inner">
                            <h3 class="h4 reference-title">Indian Style Food</h3>
                            <p>HTML & CSS Project</p>
                          </div>
                        </div></a>
                      <div data-images="img/main-slider1.jpg,img/main-slider2.jpg,img/main-slider3.jpg" class="sr-only reference-description">
                        <p>It is a html & CSS based project. It is about the recipe of rice pudding. I made this project in the first semester of my post graduate diploma.It is a mutiple page webiste. It has consistent navigation bar and proper use of h1 tags.</p><p>Font awsome icons are used in the footer section. External CSS is used and different folders are used for images and CSS. </p>
                        <p class="buttons text-center"><a href="javascript:void(0);" onclick="closeReference()" class="btn btn-outline-primary">Close <i class="fa fa-close"></i></a></p>
                      </div>
                    </div>
                  </div>
                  <div data-category="php" class="reference-item col-lg-3 col-md-6">
                    <div class="reference"><a href="#"><img src="img/php.png" alt="Book Inventory Store" class="img-fluid">
                        <div class="overlay">
                          <div class="inner">
                            <h3 class="h4 reference-title">Book Inventory Store</h3>
                            <p>PHP Project</p>
                          </div>
                        </div></a>
                      <div data-images="img/main-slider3.jpg,img/main-slider1.jpg" class="sr-only reference-description">
                        <p>This project is based on PHP, MYSQL, HTML and CSS and it is a responsive website site. It is a website of selling books anyone can order any book from this site. I made this website responsive using media queries in the CSS. In this session is used to store the value of variables. and mysql database to store the data and user inputs. Tables are used to display the books i the rows and columns and these tables are responsive.</p>
                        <p class="buttons text-center"><a href="javascript:void(0);" onclick="closeReference()" class="btn btn-outline-primary">Close <i class="fa fa-close"></i></a></p>
                      </div>
                    </div>
                  </div>
                  <div data-category="java" class="reference-item col-lg-3 col-md-6">
                    <div class="reference"><a href="#"><img src="img/javascript.png" alt="Find the Penguin" class="img-fluid">
                        <div class="overlay">
                          <div class="inner">
                            <h3 class="h4 reference-title">Find the Penguin</h3>
                            <p>JavaScript Project</p>
                          </div>
                        </div></a>
                      <div data-images="img/main-slider1.jpg,img/main-slider2.jpg,img/main-slider3.jpg" class="sr-only reference-description">
                          <p>This is a javascript based game project. It is a wack-a-mole style game to find all the penguins before the dreaded Yeti makes an appearance. Once the Yeti is found, the game should reset and be ready for another round.</p><p>A score box that adds up the number of Penguins you can find before the Yeti shows up. Once the yeti is found, the score gets reset. I use JavaScript and/or jQuery to make the penguins stay up when clicked and disappear when the yeti is awoken.</p>
                        <p class="buttons text-center"><a href="javascript:void(0);" onclick="closeReference()" class="btn btn-outline-primary">Close <i class="fa fa-close"></i></a></p>
                      </div>
                    </div>
                  </div>
                  <div data-category="photo" class="reference-item col-lg-3 col-md-6">
                    <div class="reference"><a href="#"><img src="img/photoshop1.jpg" alt="TravelCo" width="279" class="img-fluid">
                        <div class="overlay">
                          <div class="inner">
                            <h3 class="h4 reference-title">TravelCo</h3>
                            <p>Photshop Project</p>
                          </div>
                        </div></a>
                      <div data-images="img/main-slider1.jpg,img/main-slider2.jpg,img/main-slider3.jpg" class="sr-only reference-description">
                        <p>This project is created using Adobe Photoshop. It is a prototype of a travel/tour website in Photoshop based on a client's wireframe mock-up and requirements.</p>
                        <p class="buttons text-center"><a href="javascript:void(0);" onclick="closeReference()" class="btn btn-outline-primary">Close <i class="fa fa-close"></i></a></p>
                      </div>
                    </div>
                  </div>
                  <div data-category="craft" class="reference-item col-lg-3 col-md-6">
                    <div class="reference"><a href="#"><img src="img/craft1.jpeg" alt="Tissue Paper Stand" class="img-fluid">
                        <div class="overlay">
                          <div class="inner">
                            <h3 class="h4 reference-title">Tissue Paper Stand</h3>
                            <p>Paper Craft</p>
                          </div>
                        </div></a>
                      <div data-images="img/main-slider1.jpg,img/main-slider2.jpg,img/main-slider3.jpg" class="sr-only reference-description">
                        <p>This tissue paper stand is made up of paper by quiling it. Quilling or paper filigree is an art form that involves the use of strips of paper that are rolled, shaped, and glued together to create decorative designs. </p>
                        <p class="buttons text-center"><a href="javascript:void(0);" onclick="closeReference()" class="btn btn-outline-primary">Close <i class="fa fa-close"></i></a></p>
                      </div>
                    </div>
                  </div>
                  <div data-category="html" class="reference-item col-lg-3 col-md-6">
                    <div class="reference"><a href="#"><img src="img/html2.JPG" alt="College Project" class="img-fluid">
                        <div class="overlay">
                          <div class="inner">
                            <h3 class="h4 reference-title">College Project</h3>
                            <p>HTML & CSS Project</p>
                          </div>
                        </div></a>
                      <div data-images="img/main-slider1.jpg,img/main-slider2.jpg,img/main-slider3.jpg" class="sr-only reference-description">
                        <p>It is a HTML and CSS based project. The site has header, nav, main, and footer for all pages. The site is responsive at a width of 1024px and 768px. This site contains responsive tables.It is a mutiple page webiste. It has consistent navigation bar and proper use of h1 tags.</p><p>Font awsome icons are used in the footer section. External CSS is used and different folders are used for images and CSS. </p>
                        <p class="buttons text-center"><a href="javascript:void(0);" onclick="closeReference()" class="btn btn-outline-primary">Close <i class="fa fa-close"></i></a></p>
                      </div>
                    </div>
                  </div>
                  <div data-category="php" class="reference-item col-lg-3 col-md-6">
                    <div class="reference"><a href="#"><img src="img/php4.png" alt="Shopping Star" class="img-fluid">
                        <div class="overlay">
                          <div class="inner">
                            <h3 class="h4 reference-title">Shopping Star</h3>
                            <p>PHP Project</p>
                          </div>
                        </div></a>
                      <div data-images="img/main-slider1.jpg,img/main-slider2.jpg,img/main-slider3.jpg" class="sr-only reference-description">
                        <p>The Shopping Star is a HTML, CSS, PHP,JavaScript and MYSQL based project. It is a shopping website. Thid website is useful for men, women and kids. he main components used are:</p>
                          <ul>
                            <li>PHP programing language</li>
                            <li>MYSQL through WAMP server</li>
                            <li>Xampp(phpmyadmin/localhost) for creating tables. </li>
                          </ul>
                        <p class="buttons text-center"><a href="javascript:void(0);" onclick="closeReference()" class="btn btn-outline-primary">Close <i class="fa fa-close"></i></a></p>
                      </div>
                    </div>
                  </div>
                  <div data-category="java" class="reference-item col-lg-3 col-md-6">
                    <div class="reference"><a href="#"><img src="img/javascript2.jpg" width="279" alt="Calculator" class="img-fluid">
                        <div class="overlay">
                          <div class="inner">
                            <h3 class="h4 reference-title">Scientific Calculator</h3>
                            <p>JavaScript Project</p>
                          </div>
                        </div></a>
                      <div data-images="img/main-slider1.jpg,img/main-slider2.jpg,img/main-slider3.jpg" class="sr-only reference-description">
                        <p>It is HTML, CSS and JavaScript based project. Proper heading tag (h1) with a project title, and a footer with copyright date and my name is used. The JavaScript is in an external file (.js). It is a single page application. </p><p>Scientific Calculator contains the following:</p>
                            <ul>
                            <li>Number pad 0 - 9</li>
                            <li>Add/Subtract/Multiply/Divide</li>
                            <li>Equals/Decimal</li>
                            <li>Square Root/Percent/Pi (Pi button will multiply an input value and Pi up to 8 decimal places or just display Pi if no value entered)</li>
                            <li>Sin/Cos/Tan</li>
                            <li>Exponent/Log(logarithm)</li>
                            <li>Clear function</li>
                          </ul>
                        <p class="buttons text-center"><a href="javascript:void(0);" onclick="closeReference()" class="btn btn-outline-primary">Close <i class="fa fa-close"></i></a></p>
                      </div>
                    </div>
                  </div>
                  <div data-category="photo" class="reference-item col-lg-3 col-md-6">
                    <div class="reference"><a href="#"><img src="img/photo2.jpg" alt="TechCo" class="img-fluid">
                        <div class="overlay">
                          <div class="inner">
                            <h3 class="h4 reference-title">TechCo</h3>
                            <p>Photoshop Project</p>
                          </div>
                        </div></a>
                      <div data-images="img/main-slider1.jpg,img/main-slider2.jpg,img/main-slider3.jpg" class="sr-only reference-description">
                        <p>It is photoshop based project. It is logo/splash page for the responsive website. The page contains the company name, TechCo. The page conveys the atmosphere of a tech start up. The page is unique with the following elements: </p>
                          <ul>
                            <li>Named layers and groupings</li>
                            <li>Image are not flattened</li>
                          </ul>
                        <p class="buttons text-center"><a href="javascript:void(0);" onclick="closeReference()" class="btn btn-outline-primary">Close <i class="fa fa-close"></i></a></p>
                      </div>
                    </div>
                  </div>
                  <div data-category="craft" class="reference-item col-lg-3 col-md-6">
                    <div class="reference"><a href="#"><img src="img/craft2.jpeg" alt="Paper Bicycle" width="279" class="img-fluid">
                        <div class="overlay">
                          <div class="inner">
                            <h3 class="h4 reference-title">Paper Bicycle</h3>
                            <p>Paper Craft</p>
                          </div>
                        </div></a>
                      <div data-images="img/main-slider1.jpg,img/main-slider2.jpg,img/main-slider3.jpg" class="sr-only reference-description">
                        <p>This bicycle is made up of paper by quiling it. Quilling or paper filigree is an art form that involves the use of strips of paper that are rolled, shaped, and glued together to create decorative designs.</p>
                        <p class="buttons text-center"><a href="javascript:void(0);" onclick="closeReference()" class="btn btn-outline-primary">Close <i class="fa fa-close"></i></a></p>
                      </div>
                    </div>
                  </div>
                  <div data-category="html" class="reference-item col-lg-3 col-md-6">
                    <div class="reference"><a href="#"><img src="img/html3.jpg" alt="Kiddos" class="img-fluid">
                        <div class="overlay">
                          <div class="inner">
                            <h3 class="h4 reference-title">Kiddos</h3>
                            <p>HTML & CSS Project</p>
                          </div>
                        </div></a>
                      <div data-images="img/main-slider1.jpg,img/main-slider2.jpg,img/main-slider3.jpg" class="sr-only reference-description">
                        <p>It is HTML and CSS based project. It is particularly for kids to study while staying at home. It was my final project in the first semester of PG diploma. This project contains: </p>
                          <ul>
                            <li>Appropriate meta tags</li>
                            <li>Appropriate semantic HTML (nav, main, aside, etc..)</li>
                            <li>Consistent banner logo area</li>
                            <li>Consistent main navigation</li>
                            <li>Association with external style sheet (.css file)</li>
                            <li>Responsive images</li>
                              <li>FlexBox for responsiveness </li>
                          </ul>
                        <p class="buttons text-center"><a href="javascript:void(0);" onclick="closeReference()" class="btn btn-outline-primary">Close <i class="fa fa-close"></i></a></p>
                      </div>
                    </div>
                  </div>
                 
                <div data-category="craft" class="reference-item col-lg-3 col-md-6">
                    <div class="reference"><a href="#"><img src="img/craft3.jpeg" alt="Paper Flowers" class="img-fluid" width="279">
                        <div class="overlay">
                          <div class="inner">
                            <h3 class="h4 reference-title">Paper Flowers</h3>
                            <p>Paper Craft</p>
                          </div>
                        </div></a>
                      <div data-images="img/main-slider1.jpg,img/main-slider2.jpg,img/main-slider3.jpg" class="sr-only reference-description">
                        <p>These flowers are made up of paper. Paper art is one of the best and beautiful type of art. Different color paper of different size are used to make flowers. Material required:</p>
                          <ul>
                            <li>Coloured Paper</li>
                              <li>Scissor</li>
                              <li>Glue</li>
                              <li>Scale</li>
                              <li>Pencil</li>
                          
                          </ul>
                        
                        <p class="buttons text-center"><a href="javascript:void(0);" onclick="closeReference()" class="btn btn-outline-primary">Close <i class="fa fa-close"></i></a></p>
                      </div>
                    </div>
                  </div>
                 <div data-category="php" class="reference-item col-lg-3 col-md-6">
                    <div class="reference"><a href="#"><img src="img/php2.png" alt="College Info" class="img-fluid">
                        <div class="overlay">
                          <div class="inner">
                            <h3 class="h4 reference-title">College Info</h3>
                            <p>PHP Project</p>
                          </div>
                        </div></a>
                      <div data-images="img/main-slider1.jpg,img/main-slider2.jpg,img/main-slider3.jpg" class="sr-only reference-description">
                        <p>The project is “College Info”. This website objective is to help the user to clear their nodue and to check there pending fee or fine .it is very necessary to clear all the  dues regarding their fees to get their roll number for the final exams. The project created by using PHP. The main components used are:</p>
                          <ul>
                            <li>PHP programing language</li>
                            <li>MYSQL through WAMP server</li>
                            <li>WampServer(phpmyadmin/localhost) for creating tables. </li>
                          </ul>
                        <p>It is website which is created in PHP language. Its main objective is to give information about the cleared and pending dues. It save all information about the student’s fee detail ,library detail,  sports detail ,transport ,lab’s detail ,such as it saves student’s name, mob and student can also check announcements and all the detail regarding account section.
                        The website will be scalable and easily maintained.
                        </p>
                       
                        <p class="buttons text-center"><a href="javascript:void(0);" onclick="closeReference()" class="btn btn-outline-primary">Close <i class="fa fa-close"></i></a></p>
                      </div>
                    </div>
                  </div>
               <div data-category="java" class="reference-item col-lg-3 col-md-6">
                    <div class="reference"><a href="#"><img src="img/javascript3.JPG" alt="My apps" class="img-fluid">
                        <div class="overlay">
                          <div class="inner">
                            <h3 class="h4 reference-title">My Apps</h3>
                            <p>JavaSript Project</p>
                          </div>
                        </div></a>
                      <div data-images="img/main-slider1.jpg,img/main-slider2.jpg,img/main-slider3.jpg" class="sr-only reference-description">
                        
                          <p>It is HTML, CSS and JavaScript based project. Proper heading tag (h1) with a project title, and a footer with copyright date used. The JavaScript is in an external file (.js). </p><p>My app contains the following:</p>
                            <ul>
                            <li>A home page and linking pages to your widget</li>
                              <li>Proper and consitent Navigation</li>
                              <li>external CSS file</li>
                              <li>images in images folder</li>
                              <li>HTML/JavaScript structure is complete and validated</li>
                          </ul>
                        <p class="buttons text-center"><a href="javascript:void(0);" onclick="closeReference()" class="btn btn-outline-primary">Close <i class="fa fa-close"></i></a></p>
                      </div>
                    </div>
                  </div>
                  <div data-category="photo" class="reference-item col-lg-3 col-md-6">
                    <div class="reference"><a href="#"><img src="img/photo4.gif" alt="Sunset GIF" class="img-fluid">
                        <div class="overlay">
                          <div class="inner">
                            <h3 class="h4 reference-title">Sunset GIF</h3>
                            <p>Photoshop Project</p>
                          </div>
                        </div></a>
                      <div data-images="img/main-slider1.jpg,img/main-slider2.jpg,img/main-slider3.jpg" class="sr-only reference-description">
                        <p>It is a Adobe Photoshop based project. I created this project in the first semester of my post graduate diploma It is a Parallax Video project in the form of .gif. It is a image of sunset view and is animated to create a gif. </p>
                        <p class="buttons text-center"><a href="javascript:void(0);" onclick="closeReference()" class="btn btn-outline-primary">Close <i class="fa fa-close"></i></a></p>
                      </div>
                    </div>
                  </div>
                  <div data-category="php" class="reference-item col-lg-3 col-md-6">
                    <div class="reference"><a href="#"><img src="img/wordpress.png" alt="MagicApparels" class="img-fluid">
                        <div class="overlay">
                          <div class="inner">
                            <h3 class="h4 reference-title">MagicApparels</h3>
                            <p>PHP Project</p>
                          </div>
                        </div></a>
                      <div data-images="img/main-slider1.jpg,img/main-slider2.jpg,img/main-slider3.jpg" class="sr-only reference-description">
                        <p>The name of the project is MAGIC APPARELS. It is a clothing store. This site is created by using WordPress and WooCommerce and published on alter vista. Different products are separated in different categories. Different customised and inbuilt plugins are used. The purpose of this website is to buy and sell the clothes online that save the time and is cost effective.</p> 
                            <b>Technology Used: </b>
                          <ul>
                          <li>WordPress using PHP and MySQL database</li>
                          <li>Alter Vista- Hosting Server</li>
                          <li>WooCommerce- E-Commerce Platform</li>
                                <ul> 
                                    <li>WooCommerce Payment</li>
                                    <li>WooCommerce Coupons</li>
                                    <li>WooCommerce Cart and Checkout information</li>
                              </ul>
                          </ul>
                          <b>Plugin</b>
                          <ul>
                            <li>Contact us 7 form</li>
                            <li>Flamingo</li>
                          </ul>
                          <b>Implementation</b>
                          <ul>
                            <li>Parent Theme – Buzz Commerce</li>
                            <li>Child Theme</li>
                            <li>Customized Plugin</li>
                          </ul>


                        <p class="buttons text-center"><a href="javascript:void(0);" onclick="closeReference()" class="btn btn-outline-primary">Close <i class="fa fa-close"></i></a></p>
                      </div>
                    </div>
                  </div>
            </div>
          </div>
        </div>
      
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

           
        });


    </script>             

</body>
</html>
