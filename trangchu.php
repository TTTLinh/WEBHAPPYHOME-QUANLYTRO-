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
          <h2><small>Gia đình của sinh viên</small></h2><br>
          <button type="button" class="btn w3-flat-sun-flower" data-toggle="modal" data-target="#modalone">  Xem Thêm
          </button>
          <br>
          <br>

  <!-- The Modal -->
          <div class="modal" id="modalone">
                <div class="modal-dialog">
                <div class="modal-content">

        <!-- Modal Header -->
               <div class="modal-header">
               <h4 class="modal-title text-center">Bạn là sinh viên đang đi kiếm phòng trọ?</h4>
               <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
             <div class="modal-body text-justify">
                Hãy đến với "Studen Home" ngồi nhà của các sinh viên. Một ngôi nhà tuyệt đẹp chứa đựng sự ấm áp của gia đình, nơi liên kết các sinh viên có mục đích đi làm và học tập, nơi ươm mầm của các ước mơ. Các bạn có thể yên tâm và thoải mái để học tập. 
                Chào mừng các bạn đến với chúng tôi"Student Home" ngôi nhà xinh xắn!!
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
                  <h4 class="text-center text-uppercase"><small>Sang trọng</small></h4>
                  <br>
              </div>
          </div>
          <div class="col-12 col-md-12 col-lg-3">
              <img src="images/6.jpg">
              <div class="container w3-flat-nephritis">
                <br>
                  <h4 class="text-center text-uppercase"><small>Thoáng mát sạch sẽ</small></h4>
                  <br>
              </div>
          </div>
          <div class="col-12 col-md-12 col-lg-3">
              <img src="images/5.jpg">
              <div class="container w3-flat-midnight-blue">
                <br>
                  <h4 class="text-center text-uppercase"><small>Đầy đủ tiện nghi</small></h4>
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
                  <h4 class="text-center text-uppercase">Vị Trí Tốt: Ngay đường lớn</h4>
                 <p>"Student Home" nằm ngay vị trí đặc địa, ngay đường lớn, gần các trường đại học, an ninh, dân cư tốt. Ngay dưới tầng 1 có khu mini mart đầy đủ các sản phẩm, thực phẩm cần thiết. Mong các bạn sẽ đến với chúng tôi!</p>
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
                  <h4 class="text-center text-uppercase">Nội Thất Tiện Nghi</h4>
                    <p>"Student Home" có nội thất đáng chú ý nhất. Nội thất đầy đủ tiện nghi, các phòng đều được trang bị hoàn toàn đủ các vật dụng, đồ dùng nội thất khá đầy đủ cho từng cá nhân. Chất lượng nội thất cũng không cần bàn vì tất cả đều là loại tốt nhất và đều có thương hiệu. Nên các bạn không cần lo lắng khi đến với chúng tôi.</p>
              </div>
          </div>
      </div>
      <div class="subsribe">
         <br>
         <br>
          <h3 class="text-center" style="color: black;">Bạn muốn biết thêm?</h3>
          <p class="text-center"></p>
               <div class="input-group mb-3 mx-auto">
                     <input type="text" class="form-control" placeholder="Email" id="demo" name="email" style="width:30%">
                      <input type="text" class="form-control" placeholder="your Telephone" id="demo2" name="tel" style="width:30%">
                       <button>SUBMIT</button>
                </div>
       </div>
       <footer class="footer text-faded text-center py-5" style="background-color: #F2F2F2">
      <p class="m-0 small">Copyright &copy; Your Website 2020 - Bản Quyền thuộc Bụi
      					<br> Được thiết kế bởi:Thùy Linh
      					<br> Student Home
      </p>
  </footer>
</body>
</html>