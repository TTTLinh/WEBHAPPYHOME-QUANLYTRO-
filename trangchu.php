<?php  session_start(); ?>
<html>
  <head>
    <title>Student Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css"
     integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-sm row container">
        <div class="col-12 col-md-12 col-lg-6 col-sm-4 text-right">
           <a class="navbar-brand" href="trangchu.php">
           <img src="images/logo.png" alt="logo" style="width: 40%;">
         </a>
        </div>
        <div class="col-8 col-md-12 col-lg-6 col-sm-8 text-right">
            <ul class="navbar-nav container icon">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fab fa-tripadvisor"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fab fa-twitter"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fab fa-youtube"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fab fa-google-plus-g"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fab fa-pinterest-p"></i></a>
                </li>
            </ul>
        </div>
    </nav>
    <?php include("menu.php"); ?>
    <div class="main">
        <div class="row jumbotron">
        <div class="col-12 col-md-4 text text-center container">
          <h1><small>STUDENT HOME</small></h1>
          <span><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i></span>
          <h2><small>Gia ????nh c???a sinh vi??n</small></h2><br>
          <button type="button" class="btn w3-flat-sun-flower" data-toggle="modal" data-target="#modalone">  Xem Th??m
          </button>
          <br>
          <br>

  <!-- The Modal -->
          <div class="modal" id="modalone">
                <div class="modal-dialog">
                <div class="modal-content">

        <!-- Modal Header -->
               <div class="modal-header">
               <h4 class="modal-title text-center">B???n l?? sinh vi??n ??ang ??i ki???m ph??ng tr????</h4>
               <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
             <div class="modal-body text-justify">
                H??y ?????n v???i "Studen Home" ng???i nh?? c???a c??c sinh vi??n. M???t ng??i nh?? tuy???t ?????p ch???a ?????ng s??? ???m ??p c???a gia ????nh, n??i li??n k???t c??c sinh vi??n c?? m???c ????ch ??i l??m v?? h???c t???p, n??i ????m m???m c???a c??c ?????c m??. C??c b???n c?? th??? y??n t??m v?? tho???i m??i ????? h???c t???p. 
                Ch??o m???ng c??c b???n ?????n v???i ch??ng t??i"Student Home" ng??i nh?? xinh x???n!!
               <div class="row">
                   <div class="col-12 col-md-6 col-lg-6">
                      <img src="images/2.jpg">
                   </div>
                   <div class="col-12 col-md-6 col-lg-6">
                      <img src="images/3.jpg">
                   </div>
               </div>
              </div>
              <div class="modal-footer">
               <button type="button" class="btn w3-flat-sun-flower" data-dismiss="modal">Close</button>
             </div>
           </div>
          </div>
        </div>
       </div>
      </div>
      </div>
     
      <div class="row third">
          <div class="col-12 col-md-12 col-lg-3">
              <img src="images/4.jpg">
              <div class="container w3-flat-midnight-blue">
                <br>
                  <h4 class="text-center text-uppercase"><small>Sang tr???ng</small></h4>
                  <br>
              </div>
          </div>
          <div class="col-12 col-md-12 col-lg-3">
              <img src="images/6.jpg">
              <div class="container w3-flat-nephritis">
                <br>
                  <h4 class="text-center text-uppercase"><small>Tho??ng m??t s???ch s???</small></h4>
                  <br>
              </div>
          </div>
          <div class="col-12 col-md-12 col-lg-3">
              <img src="images/5.jpg">
              <div class="container w3-flat-midnight-blue">
                <br>
                  <h4 class="text-center text-uppercase"><small>?????y ????? ti???n nghi</small></h4>
                  <br>
              </div>
          </div>
          <div class="col-12 col-md-12 col-lg-3">
              <img src="images/7.jpg">
              <div class="container w3-flat-nephritis">
                <br>
                  <h4 class="text-center text-uppercase"><small>An ninh</small></h4>
                  <br>
              </div>
          </div>
      </div>
      <div class="four jumbotron">
          <div class="row">
              <div class="col-12 col-md-12 col-lg-6 container text-center text1">
                  <h4 class="text-center text-uppercase">V??? Tr?? T???t: Ngay ???????ng l???n</h4>
                 <p>"Student Home" n???m ngay v??? tr?? ?????c ?????a, ngay ???????ng l???n, g???n c??c tr?????ng ?????i h???c, an ninh, d??n c?? t???t. Ngay d?????i t???ng 1 c?? khu mini mart ?????y ????? c??c s???n ph???m, th???c ph???m c???n thi???t. Mong c??c b???n s??? ?????n v???i ch??ng t??i!</p>
              </div>
              <div class="col-12 col-md-12 col-lg-6 container text-center local">
              <img src="images/8.jpg">
              </div>
          </div>
          <div class="row">
            <div class="col-12 col-md-12 col-lg-6 container text-center local2">
                <img src="images/9.jpg">
            </div>
              <div class="col-12 col-md-12 col-lg-6 container text-center text1">
                  <h4 class="text-center text-uppercase">N???i Th???t Ti???n Nghi</h4>
                    <p>"Student Home" c?? n???i th???t ????ng ch?? ?? nh???t. N???i th???t ?????y ????? ti???n nghi, c??c ph??ng ?????u ???????c trang b??? ho??n to??n ????? c??c v???t d???ng, ????? d??ng n???i th???t kh?? ?????y ????? cho t???ng c?? nh??n. Ch???t l?????ng n???i th???t c??ng kh??ng c???n b??n v?? t???t c??? ?????u l?? lo???i t???t nh???t v?? ?????u c?? th????ng hi???u. N??n c??c b???n kh??ng c???n lo l???ng khi ?????n v???i ch??ng t??i.</p>
              </div>
          </div>
      </div>
      <div class="subsribe">
         <br>
         <br>
          <h3 class="text-center" style="color: black;">B???n mu???n bi???t th??m?</h3>
          <p class="text-center"></p>
               <div class="input-group mb-3 mx-auto">
                     <input type="text" class="form-control" placeholder="Email" id="demo" name="email" style="width:30%">
                      <input type="text" class="form-control" placeholder="your Telephone" id="demo2" name="tel" style="width:30%">
                       <button>SUBMIT</button>
                </div>
       </div>
       <footer class="footer text-faded text-center py-5" style="background-color: #F2F2F2">
      <p class="m-0 small">Copyright &copy; Your Website 2020 - B???n Quy???n thu???c B???i
      					<br> ???????c thi???t k??? b???i:Th??y Linh
      					<br> Student Home
      </p>
  </footer>
</body>
</html>