<!DOCTYPE html>

<html lang="vi">



<head>

  <link rel="shortcut icon" type="image/png" href="../static/images/ProPTIT.ico" />

  <meta charset="UTF-8" />

  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>

    Quản lý thành viên

  </title>

  <link rel="stylesheet" href="../static/tailwind.css" async />

  <link rel="stylesheet" href="../dist/css/style.css" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <link rel="stylesheet" href="../dist/css/loading.css" />



  <!-- wowJS -->

  <link rel="stylesheet" href="../dist/css/animate.css" />



  <!-- font Quicksand có font-Bold 700, Medium 500, Regular 400-->

  <link rel="preconnect" href="https://fonts.googleapis.com" />

  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;700&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

</head>



<body>

  <div class="menu">

    <div class="container">

      <a href="/" class="logo">

        <img src="https://proptit.com/static/images/logo.svg" alt="Logo của CLB Lập Trình PTIT" />

        <h2>CLB Lập Trình PTIT</h2>

      </a>

      <nav class="nav" id="nav">

        <div class="close_icon flex flex-row justify-between items-center">

          <a href="#" class="logo-nav">

            <img src="https://proptit.com/static/images/logo.svg" alt="Logo của CLB Lập Trình PTIT" />

          </a>

          <i class="fas fa-times text-4xl" id="hideMenu"></i>

        </div>

        <a href="../index.php" class="nav-item nav-active">TRANG CHỦ</a>
        <a href="../dao-tao/dao-tao.html" class="nav-item">ĐÀO TẠO</a>
        <a href="./phong-truyen-thong.php" class="nav-item">QUẢN LÝ THÀNH VIÊN</a>


      </nav>

      <img class="show-menu-btn" id="showMenu" src="../static/images/list.svg" alt="" />

    </div>

  </div>

  <div class="tradition">
    <div class="training_banner relative overflow-hidden">
      <img src="../static/images/phong-truyen-thong-lap.jpg" alt="Phòng Truyền Thống của CLB Lập Trình PTIT" />
      <div class="absolute inset-0 flex items-center">
        <div class="flex flex-col items-start w-full lg:w-1/2 wow animate__backInLeft">

          <!-- <form action="" method="post" style="margin-left: 100px; margin-top: 50px;">


            <h1 class="mb-4 text-center" style="position: relative;top:-40px; margin-left: 290px;">Đăng nhập</h1>
            <label for="" style="align-items: start; padding-left: 330px; font-size: 30px;">Tài khoản</label>
            <input type="text" class="p-2 mb-4" placeholder="Nhập tài khoản"
              style="margin-left: 330px; width: 450px; height: 50px;">
            <label for="" style="align-items: start; padding-left: 330px ; font-size: 30px;">Mật khẩu</label>
            <input type="password" class="p-2 mb-4" placeholder="Nhập mật khẩu"
              style="margin-left: 330px; width: 450px; height: 50px;">
            <button class="bg-blue-500 text-white"
              style="margin-left: 330px; width: 450px; height: 50px; margin-top: 50px;">
              Đăng nhập</button>

          </form> -->

        </div>
      </div>
    </div>

    <h1 class="text-center text-danger py-3">Thông tin thành viên</h1>
    <div class="d-flex justify-content-center align-items-center">
      <label class="text-center" style="font-size: 20px; color: green">

      </label>
      <label class="text-center" style="font-size: 20px; color: green">

      </label>
    </div>

  </div>




  <footer>

    <div class="footer">

      <div class="footer-content">

        <div class="footer-link">

          <div class="footer-info">

            <a href="#" class="mb-8 block">

              <img src="../static/images/logoFooter.svg" alt="logo CLB Lap trinh ptit" class="mx-auto md:m-0" />

            </a>

            <a href="tel:+84354618636" class="flex" target="_blank">

              <img src="../static/images/phone.svg" alt="phone" class="mr-2" />

              085 872 4654

            </a>

            <a href="mailto:clblaptrinhptit@gmail.com" class="flex" target="_blank">

              <img src="../static/images/email.svg" alt="email" class="mr-2" />

              clblaptrinhptit@gmail.com

            </a>

            <a href="https://proptit.com" class="flex" target="_blank">

              <img src="../static/images/web.svg" alt="github" class="mr-2" />

              proptit.com

            </a>

          </div>

          <div class="footer-info">

            <h3 class="mt-2 mb-6">VỀ CHÚNG TÔI</h3>

            <a href="#" class="block"> Phòng truyền thống </a>

            <a href="#anhchedinhson" class="block"> Anh Chế Đình Sơn </a>

          </div>

          <div class="footer-info">

            <h3 class="mt-2 mb-6">TRANG</h3>

            <a href="#thanhvien" class="block"> Thành viên tiêu biểu </a>

            <a href="#giaithuong" class="block"> Các giải thưởng </a>

          </div>

          <div class="footer-info">

            <h3 class="mt-2 mb-6">TRANG KHÁC</h3>

            <a href="/" class="block"> Trang chủ </a>

            <a href="/dao-tao/" class="block"> Đào tạo </a>

            <a href="/su-kien/" class="block"> Sự kiện </a>

            <a href="/phong-truyen-thong/" class="block active">

              Phòng truyền thống

            </a>

          </div>

        </div>

      </div>

      <div class="footer-social">

        <p class="copyright">@2021 Design by WebTeam D18</p>

        <div class="social">

          <a href="https://www.facebook.com/clubproptit" target="_blank">

            <img src="../static/images/facebook.svg" alt="facebook CLB Lập trình ptit" />

          </a>

          <a href="https://www.youtube.com/channel/UCdOcZv16XwUi7bhawqPjV9g" target="_blank">

            <img src="../static/images/youtube.svg" alt="youtube CLB Lập trình ptit" />

          </a>

          <a href="https://github.com/proptitclub" target="_blank">

            <img src="../static/images/github.svg" alt="github CLB Lập trình ptit" />

          </a>

        </div>

        <p class="copyright-mb">@2023 | Design by WebTeam D18</p>

      </div>

    </div>

  </footer>

  <script src="../static/js/jquery.min.js" type="text/javascript"></script>

  <script src="../dao-tao/training.js" type="text/javascript"></script>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <script src="../static/js/lazyload.js"></script>

  <script>
    var swiper1 = new Swiper(".swiper1", {

      direction: "horizontal",

      centeredSlides: true,

      loop: true,

      initialSlide: 0,

      pagination: {

        el: ".swiper-pagination",

        type: "bullets",

      },

      navigation: {

        nextEl: ".swiper-button-next",

        prevEl: ".swiper-button-prev",

      },

      breakpoints: {

        768: {

          slidesPerView: 1,

        },

        1024: {

          slidesPerView: 3,

        },

      },

    });

    swiper1.on("slideChange", function() {

      myswiper.slideTo(swiper1.realIndex);

    });



    var myswiper = new Swiper(".myswiper", {

      centeredSlides: true,

      loop: false,

      speed: 1,

      slidesPerView: 1,

      initialSlide: 0,

      allowTouchMove: false,

    });
  </script>

  <script src="../static/js/wow.js"></script>

  <script>
    new WOW().init();
  </script>

</body>



</html>