<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link
      href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900"
      rel="stylesheet"
    />

    <title>Trang Cá Nhân</title>
<!--
Reflux Template
https://templatemo.com/tm-531-reflux
-->
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css" />
    <link rel="stylesheet" href="assets/css/templatemo-style.css" />
    <link rel="stylesheet" href="assets/css/owl.css" />
    <link rel="stylesheet" href="assets/css/lightbox.css" />
  </head>

  <body>
    <div id="page-wraper">
      <!-- Sidebar Menu -->
      <div class="responsive-nav">
        <i class="fa fa-bars" id="menu-toggle"></i>
        <div id="menu" class="menu">
          <i class="fa fa-times" id="menu-close"></i>
          <div class="container">
            <div class="image">
              <a href="taianh.php"><img src="images/bg-01.jpg" alt="" /></a>
            </div>
            <div class="author-content">
            <?php
                if(isset($_SESSION['username'])){
                        
                        
                        echo '<h4><a><span class="nav-link glyphicon glyphicon-user" ></span> '.$_SESSION['username'].'</a></h4>';
                        
                        echo '<a href="trangchu.php">Đăng xuất</a>';
                        echo "<br>";
                        echo '< Phòng' .$_SESSION['sophong'].'>'  ;
                    }else{
                        echo '<li><a href="login.php"><span class="glyphicon glyphicon-user nav-link" style="padding:10px;></span> Đăng nhập</a></li>';
                    }
                    ?>
              
              
            </div>
            <nav class="main-nav" role="navigation">
              <ul class="main-menu">
                <li><a href="#section1">Thông tin Cá Nhân</a></li>
                <li><a href="#section2">Quản lý</a></li>
                <li><a href="#section3">Trò chuyện</a></li>
                <li><a href="#section4">Nội quy</a></li>
              </ul>
            </nav>
            <div class="social-network">
              <ul class="soial-icons">
                <li>
                  <a href="https://fb.com/templatemo"
                    ><i class="fa fa-facebook"></i
                  ></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-linkedin"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-dribbble"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-rss"></i></a>
                </li>
              </ul>
            </div>
            <div class="copyright-text">
              <p>Copyright@2021 Design Bụi</p>
            </div>
          </div>
        </div>
      </div>
      <section class="section about-me" data-section="section1">
        <div class="container">
          <div class="section-heading">
            <h2>Thông Tin Của Tôi</h2>
            <div class="line-dec"></div>
            <span>"Student Home" ngôi nhà của bạn</span>
          </div>
          <div class="left-image-post">
            <div class="row">
              <div class="col-md-4">
                <div class="left-image">
                  <img src="assets/images/left-image.jpg" alt="" />
                </div>
              </div>
              <div class="col-md-8">
                <div class="right-text">
                <?php
                if(isset($_SESSION['username'])){
                        
                        
                        echo '<h4><span class="nav-link glyphicon glyphicon-user" >Họ và tên : '.$_SESSION['username'].'</span> </h4>';
                        echo '< Phòng' .$_SESSION['sophong'].'>'  ;
                        echo '<span>Ngày Sinh : '.$_SESSION['date'].'</span>';
                        echo '<span> Giới Tính : '.$_SESSION['sex'].'</span>';
                        
                    }else{
                        echo '<li><a href="login.php"><span class="glyphicon glyphicon-user nav-link" style="padding:10px;></span> Đăng nhập</a></li>';
                    }
                    ?>
                  <p>
                    
                  </p>
                </div>
              </div>
            </div>
          </div>
          </section>
          <section class="section my-services" data-section="section2">
        <div class="container">
          <div class="section-heading">
            <h2>Quản ly trọ</h2>
            <div class="line-dec"></div>
            <span>""Student Home" ngôi nhà của bạn"</span
            >
          </div>
          <div class="row">
            <div class="col-md-6">
            <a href="hoadon.php">
              <div class="service-item">
                <div class="first-service-icon service-icon"></div>
                <h4>Hóa Đơn &amp; Thanh Toán</h4>
                <p>
                    Mong mọi người thường xuyên theo dõi và cân nhắc việc thanh toán hóa đơn phòng trọ đúng hạn. Mọi thắc mắc xin liên hệ trực tiếp, hoặc phản hồi với quản lý. Xin chân thành cảm ơn!! 
                </p>
              </div>
            </div>
            </a>
            <div class="col-md-6">
              <div class="service-item">
                <div class="second-service-icon service-icon"></div>
                <h4>Liên hệ &amp;Góp ý</h4>
                <p>
                </p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="service-item">
                <div class="third-service-icon service-icon"></div>
                <h4>Báo cáo hư hỏng</h4>
                <p>
                 
                </p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="service-item">
                <div class="fourth-service-icon service-icon"></div>
                <h4>Thống kê</h4>
                <p>
                 
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

          