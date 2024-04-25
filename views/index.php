<?php
require_once '../controllers/AdminController.php';

$adminController = new AdminController();
$isadmin = $adminController->isAdmin();

?> 
<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <title>We Palestine</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        
        <link href='vendor/twbs/bootstrap/dist/css/bootstrap.min.css/fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/templatemo_style.css">
        <link rel="stylesheet" href="css/templatemo_misc.css">
        <link rel="stylesheet" href="css/flexslider.css">
        <link rel="stylesheet" href="css/testimonails-slider.css">
        <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css/cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

        <script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
    </head>
    <body>
        
            <header>
                <div id="top-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="home-account">
                                    <a href="register.php">Register</a>
                                    
                                </div>
                            </div>
                           
                         
                        </div>
                    </div>
                </div>
                <div id="main-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="logo">
                                    <a href="index.php"><img src="images/logo.png" title="wePalestine" alt="wePalestine" ></a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="main-menu">
                                    <ul>
                                        <li><a href="index.php">home</a></li>
                                        <li><a href="products.php">Boycott</a></li>
                                        <li><a href="Articles.php">Blogs</a></li>
                                        <li><a href="statistics.php">statistics</a></li>
                                        <li><a href="donation.php">DONATIONS</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="search-box">  
                                    <form name="search_form" method="get" class="search_form">
                                        <input id="search" type="text" />
                                        <input type="submit" id="search-button" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            

            <div id="slider">
                <div class="flexslider">
                  <ul class="slides">
                    <li>
                        <div class="slider-caption">
                            <h1>Trapped in a nightmare</h1>
                            <p>food tastes bland when dreams are being crushed</p>
                            
                        </div>
                      <img src="images/khobz.jpeg" alt="" />
                    </li>
                    <li>
                        <div class="slider-caption">
                            <h1>Death stalks my dreams</h1>
                            <p>Tonight's dream was different.</p>
                            
                        </div>
                      <img src="images/stalks22.webp" alt="" />
                    </li>
                    <li>
                        <div class="slider-caption">
                            <h1>Gaza Is a Nightmare Today, but We Will Not Stop Dreaming of Freedom</h1>
                            <p>the prolonged suffering and occupation that Palestinians have endured for seven decades.</p>
                            
                        </div>
                      <img src="images/2.jpg" alt="" />
                    </li>
                    <li>
                        <div class="slider-caption">
                            <h1>Isra*l's War on Hamas: What to Know</h1>
                            <p>Isra*l will seek to eliminate the threat posed by the Palestinian militant group for good, but its campaign in Gaza could draw in other adversaries, including Hezbollah and al-Qaeda. </p>
                            
                        </div>
                      <img src="images/warhama.jpg" alt="" />
                    </li>
                  </ul>
                </div>
            </div>


            <div id="services">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-section">
                                <h2>we stand for</h2>
                               
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <div class="icon">
                                    <i class="fa fa-pencil"></i>
                                </div>
                                <h4>UP TO DATE NEWS</h4>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <div class="icon">
                                    <i class="fa fa-bullhorn"></i>
                                </div>
                                <h4>CALL TO ACTIONS</h4>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <div class="icon">
                                    <i class="fa fa-bell"></i>
                                </div>
                                <h4>TRANSPARENCY</h4>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <div class="icon">
                                    <i class="fa fa-heart"></i>
                                </div>
                                <h4>SHARING</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





            <div id="latest-blog">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-section">
                                <h2>LATEST BLOGS</h2>
                                <img src="images/under-heading.png" alt="" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="images/blog1.jpeg" alt="" />
                                </div>
                                <div class="blog-content">
                                    <div class="content-show">
                                        <h4><a href="single-post.html">Solidarity from Global North requires understanding</a></h4>
                                        <span>23 April 2024</span>
                                    </div>
                                    <div class="content-hide">
                                        <p>In November 2023, while analyzing the mainstream news immediately after the 7 October Palestinian breakout from Gaza and defeat of the Israeli Gaza command, legal scholar Noura Erakat noted that there was “a discourse on day one that understood Oct. 7 as a prison break or the Tet Offensive; people were distressed, but there was an understanding of the logic.”</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="images/blog2.jpg" alt="" />
                                </div>
                                <div class="blog-content">
                                    <div class="content-show">
                                        <h4><a href="single-post.html">Israel subjects UN workers to torture</a></h4>
                                        <span>19 April 2024</span>
                                    </div>
                                    <div class="content-hide">
                                        <p>Israel is abusing UNRWA employees detained in Gaza in order to extract forced confessions against the agency, with detainees describing being subjected to acts of torture.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="images/blog3.jpg" alt="" />
                                </div>
                                <div class="blog-content">
                                    <div class="content-show">
                                        <h4><a href="#">JOSEPH MASSAD RESPONDS TO FABRICATIONS AND LIES ABOUT HIM IN CONGRESS</a></h4>
                                        <span>17 April 2024</span>
                                    </div>
                                    <div class="content-hide">
                                        <p>Columbia University President Minouche Shafik throws professors under the bus amid McCarthyite attack.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="images/blog4.webp" alt="" />
                                </div>
                                <div class="blog-content">
                                    <div class="content-show">
                                        <h4><a href="single-post.html">ISRAELI PRISON SYSTEM CLAIMS ANOTHER LIFE</a></h4>
                                        <span>14 April 2024</span>
                                    </div>
                                    <div class="content-hide">
                                        <p>Israel refuses to release body of Walid Daqqa.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="images/blog5.jpg" alt="" />
                                </div>
                                <div class="blog-content">
                                    <div class="content-show">
                                        <h4><a href="single-post.html">I will return to Gaza</a></h4>
                                        <span>24 April 2024</span>
                                    </div>
                                    <div class="content-hide">
                                        <p>Despite the destruction of Gaza, hope must be retained.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="images/blog6.jpg" alt="" />
                                </div>
                                <div class="blog-content">
                                    <div class="content-show">
                                        <h4><a href="single-post.html">Daily life in Rafah’s desert camp</a></h4>
                                        <span>22 April 2024</span>
                                    </div>
                                    <div class="content-hide">
                                        <p>A camp for displaced Palestinians in Rafah, in the southern Gaza Strip, where 1.5 million people have been forcibly displaced by Israeli strikes</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-md-12">
                            <div class="heading-section">
                                <h2>YOUR VOICE MATTERS</h2>
                                <img src="images/under-heading.png" alt="" >
                            </div>
                        </div>
                    </div>
                         <div class="col-md-4 col-sm-6">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="images/chatt.jpg" alt="" />
                                </div>
                                <div class="blog-content">
                                    <div class="content-show">
                                        <h4><a href="chat__room.php">Chatroom</a></h4>
                                    </div>
                                    <div class="content-hide">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="images/addblogs.webp" alt="" />
                                </div>
                                <div class="blog-content">
                                    <div class="content-show">
                                        <h4><a href="createArticle.php">Add Blogs</a></h4>
                                    </div>
                                    <div class="content-hide">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="images/blogg.jpg" alt="" />
                                </div>
                                <div class="blog-content">
                                    <div class="content-show">
                                        <h4><a href="Articles.php">Explore Blogs</a></h4>
                                    </div>
                                    <div class="content-hide">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


           
			<footer>
                <div class="container">
                                      
                            <div class="col-md-3">
                                <div class="shop-list">
                                    <h4 class="footer-title">keep an eye out</h4>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>DONATIONS</a></li>
                                       
                                    </ul>
                                </div>
                            </div>
                           
                            
                            <div class="col-md-3">
                                <div class="more-info">
                                    <h4 class="footer-title">More info</h4>
                                                                       <ul>
                                        <li><i class="fa fa-phone"></i>Contact your member of Congress and call for an immediate cease-fire. </li>
                                        <li><i class="fa fa-globe"></i>ESSEC Tunisia, Tunis</li>
                                        <li><i class="fa fa-envelope"></i><a href="#">wepalestine@gmail.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bottom-footer">
                        <p>
                           Copyright © 2024 <a href="index.php">WE PALESTINE</a>  
                        </p>
                    </div>
                    
                </div>
            </footer>

    
        <script src="js/vendor/jquery-1.11.0.min.js"></script>
        <script src="js/vendor/jquery.gmap3.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>

