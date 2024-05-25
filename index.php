<?php

include_once("connect.php");
?>

<!DOCTYPE html>

<html lang="vi">

<head>

  <link rel="shortcut icon" type="image/png" href="./static/images/ProPTIT.ico" />

  <meta charset="UTF-8" />

  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <meta name="description" content="Câu lạc bộ Lập Trình PTIT được thành lập ngày 9/10/2011.

    LẬP TRÌNH PTIT lập trình từ trái tim chính là slogan của CLB. Với Phương châm hoạt động chia sẻ để cùng nhau phát triển,

    CLB là nơi giao lưu, đào tạo các môn lập trình và các môn học trong trường, nâng cao phong trào học lập trình của sinh viên trong trường, góp phần vào để đưa lập trình là một thế mạnh của học viện.

    Và CLB cũng tạo điều kiện để sinh viên trong học viện có môi trường học tập năng động sáng tạo, và giúp đỡ sinh viên có thể đạt thành tích cao trong học tập.

    CLB là nơi hội tụ các bạn đam mê lập trình vào nghiên cứu các đề tài, dự án.

    Hơn nữa, CLB còn giúp các bạn nâng cao các kĩ năng làm việc cần thiết cho sinh viên như: làm việc nhóm, kĩ năng thuyết trình, kĩ năng tổ chức sự kiện, kĩ năng quản lí nhân sự, dự án….

    CLB còn có các hoạt động của câu lạc bộ như là học tập về lập trình, học tập về các môn học trong trường. Các hoạt động học tập được tổ chức hàng tuần.

    Và các hoạt động sự kiện tổ chức hàng tháng như sinh nhật hàng tháng, tổng kết cuối năm, các cuộc thi sáng tạo phần mềm, các chuyến picnic, big game, tình nguyện, Tham gia các cuộc thi của học viện, Microsoft …." />

  <meta name="keywords" content="CLB PTIT,Lập Trình PTIT,CLB Lập Trình PTIT,IT PTIT, ProPTIT, CLB ProPITT, CLB CNTT, CNTT, IT, CLB Bưu chính, proptit, clb lap trinh, lap trinh ptit, clb ptit, clb it, code, lap trinh, lap trinh tu trai tim" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>CLB Lập Trình PTIT - Lập trình từ trái tim</title>

  <!-- css -->

  <link rel="stylesheet" href="static/tailwind.css" async />

  <link rel="stylesheet" href="dist/css/style.css" />

  <link rel="stylesheet" href="dist/css/home.css" />

  <link rel="stylesheet" href="dist/css/loading.css" />

  <link rel="stylesheet" href="dist/css/swiper-bundle.min.css" />

  <!-- wowJS -->

  <link rel="stylesheet" href="./dist/css/animate.css" />



  <!-- font Quicksand có Bold 700, Medium 500, Regular 400-->

  <link rel="preconnect" href="https://fonts.googleapis.com" />

  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;700&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

  <script type="module" src="https://cdn.jsdelivr.net/npm/@justinribeiro/lite-youtube@1.5.0/lite-youtube.js"></script>



</head>

<body>

  <div class="menu">

    <div class="container">

      <a href="/" class="logo">

        <img src="https://proptit.com/static/images/logo.svg" alt="Logo của PROPTIT" />

        <h2>PROPTIT</h2>

      </a>

      <nav class="nav" id="nav">

        <div class="close_icon flex flex-row justify-between items-center">

          <a href="#" class="logo-nav">

            <img src="https://proptit.com/static/images/logo.svg" alt="Logo của CLB Lập Trình PTIT" />

          </a>

          <i class="fas fa-times text-3xl md:text-4xl" id="hideMenu"></i>

        </div>

        <a href="./index.php" class="nav-item nav-active">TRANG CHỦ</a>
        <a href="./dao-tao/dao-tao.php" class="nav-item">ĐÀO TẠO</a>
        <a href="./phong-truyen-thong/phong-truyen-thong.php" class="nav-item">QUẢN LÝ THÀNH VIÊN</a>

      </nav>

      <img class="show-menu-btn show-menu-home" id="showMenu" src="./static/images/listRed.svg" alt="menu" />

    </div>

  </div>

  <header class="relative header overflow-hidden">

    <div class="header__content swiper mySwiper">

      <div class="swiper-wrapper">

        <div class="swiper-slide ttv">

          <div class="header-slider">

            <div class="dots">

              <div class="dot"></div>

              <div class="dot"> </div>

              <div class="dot"> </div>

              <div class="dot"></div>

            </div>

            <div class="flex flex-col items-start pl-2 lg:pl-14 w-full lg:w-1/2">

              <h1 class="mb-4 text-red-400 wow animate__tada">
                Giới thiệu PROPTIT
              </h1>

              <p class="text-justify">

                <strong>Câu lạc bộ Lập Trình PTIT</strong> (Programming PTIT), tên

                viết tắt là PROPTIT được thành lập ngày 9/10/2011. Với phương châm

                hoạt động "Chia sẻ để cùng nhau phát triển", câu lạc bộ là nơi giao

                lưu, đào tạo các môn lập trình và các môn học trong trường, tạo điều

                kiện để sinh viên trong Học viện có môi trường học tập năng động

                sáng tạo

                <br />

                <br />

                <strong>Slogan:</strong> Lập Trình PTIT - Lập trình từ trái tim

              </p>

            </div>

          </div>

        </div>

      </div>

      <div class="swiper-pagination"></div>

    </div>

  </header>

  <section class="introdure" id="gioithieu">
    <div class="introdure-content flex xl:flex-row items-center justify-cente">
      <img class="lg:w-1/2 w-full object-contain wow animate__fadeInLeft" src="./static/images/anh-Che-Dinh-Son-1.svg" alt="Anh Chế Đình Sơn" />

      <div class="introdure__text xl:flex-1 flex flex-col ">
        <h2 class="name pink font-bold">Chế Đình Sơn</h2>
        <p class="text-justify"><strong>Người anh cả của đại gia đình PROPTIT</strong></p>

        <div class="text-justify mt-4">

          Anh Chế Đình Sơn - Sinh viên khóa D09 tại Học viện Công Nghệ Bưu

          Chính Viễn Thông, người đã đặt những viên gạch đầu tiên, xây dựng

          CLB Lập Trình PTIT. Ngày 09/10/2011, CLB Lập Trình PTIT chính thức

          được ra đời với mục đích giúp đỡ các bạn sinh viên học lập trình,

          tạo ra một môi trường học tập và làm việc năng động, sáng tạo.

          Trải qua quãng thời gian 10 năm hình thành và phát triển, Câu Lạc

          Bộ vẫn luôn kế thừa, phát huy những giá trị tư tưởng cốt lõi mà

          anh Sơn và các anh chị tiền nhiệm để lại, đó chính là tiền đề để

          ProPTIT phát triển lớn mạnh như bây giờ.

        </div>
        </p>
      </div>
    </div>
  </section>




  <section class="body py-10" id="tieubieu" style="background-color: #fff7f2;">

    <div class="video-content flex flex-col items-center justify-center">
      <h2>NHỮNG THÀNH VIÊN TIÊU BIỂU TRONG THÁNG</h2>
      <div class="members flex justify-between">
        <div class="member">
          <img class="rounded-circle" src="./static/images/daotao.jpeg" alt="Member 1" style="height: 150px; width: auto;">
          <p class=" name text-center mt-3">Tên Thành Viên 1</p>
          <p class="position text-center">Chức Vụ 1</p>
          <p class="year text-center">Khóa 1</p>
        </div>
        <div class="member" style="margin: 0px 200px 0px 200px;">
          <img src="./static/images/daotao.jpeg" alt="Member 2" class="avatar" style="height: 150px;width: auto;">
          <p class=" name text-center mt-3">Tên Thành Viên 2</p>
          <p class="position text-center">Chức Vụ 2</p>
          <p class="year text-center">Khóa 2</p>
        </div>
        <div class="member">
          <img src="./static/images/daotao.jpeg" alt="Member 3" class="avatar" style="height: 150px;width: auto;">
          <p class=" name text-center mt-3">Tên Thành Viên 3</p>
          <p class="position text-center">Chức Vụ 3</p>
          <p class="year text-center">Khóa 3</p>
        </div>
      </div>
    </div>


  </section>



  <section class="body py-10" id="tieubieu" style="background-color: #ebf6fb;">

    <div class=" video-content flex flex-col items-center justify-center">
      <h2>CÁC GIẢI THƯỞNG NỔI BẬT TRONG NHỮNG NĂM GẦN ĐÂY</h2>
      <div class="members flex justify-between">
        <div class="member">
          <img class="rounded-circle" src="./static/images/daotao.jpeg" alt="Member 1" style="height: 200px; width: auto;">
          <p class=" name text-center mt-3">
            <strong>Tên Thành Viên 1</strong>
          </p>
        </div>
        <div class="member" style="margin: 0px 200px 0px 200px;">
          <img src="./static/images/daotao.jpeg" alt="Member 2" class="avatar" style="height: 200px; width: auto;">
          <p class=" name text-center mt-3">
            <strong>Tên Thành Viên 1</strong>

        </div>
        <div class="member">
          <img src="./static/images/daotao.jpeg" alt="Member 3" class="avatar" style="height: 200px; width: auto;">
          <p class=" name text-center mt-3">
            <strong>Tên Thành Viên 1</strong>
        </div>
      </div>

      <div class="members flex justify-between my-10">
        <div class="member">
          <img class="rounded-circle" src="./static/images/daotao.jpeg" alt="Member 1" style="height: 200px; width: auto;">
          <p class=" name text-center mt-3">
            <strong>Tên Thành Viên 1</strong>
        </div>
        <div class="member" style="margin: 0px 200px 0px 200px;">
          <img src="./static/images/daotao.jpeg" alt="Member 2" class="avatar" style="height: 200px; width: auto;">
          <p class=" name text-center mt-3">
            <strong>Tên Thành Viên 1</strong>

        </div>
        <div class="member">
          <img src="./static/images/daotao.jpeg" alt="Member 3" class="avatar" style="height: 200px;width: auto;">
          <p class=" name text-center mt-3">
            <strong>Tên Thành Viên 1</strong>

        </div>
      </div>
    </div>
  </section>


  <section class="project" id="teamduan" style="background-color:white;">

    <div class="project-content flex flex-col items-center justify-center">

      <h2>TEAM DỰ ÁN</h2>

      <div class="project-img">

        <div class="wow animate__zoomInDown" data-wow-duration="1.25s">

          <img class="" src="./static/images/ai.png" alt="AI" />

          <h3>AI</h3>

        </div>

        <div class="wow animate__zoomInDown" data-wow-duration="1.25s">

          <img class="" src="./static/images/mobile.png" alt="Mobile" />

          <h3>Mobile</h3>

        </div>

        <div class="wow animate__zoomInDown" data-wow-duration="1.25s">

          <img class="" src="./static/images/webIcon.jpeg" alt="Web" />

          <h3>Web</h3>

        </div>

        <div class="wow animate__zoomInDown" data-wow-duration="1.25s">

          <img class="" src="./static/images/unity.jpeg" alt="Game" />

          <h3>Game</h3>

        </div>

      </div>

    </div>

  </section>


  <footer>

    <div class="footer">

      <div class="footer-content">

        <div class="footer-link">

          <div class="footer-info">

            <a href="#" class="mb-8 block">

              <img src="static/images/logoFooter.svg" alt="logo CLB Lap trinh ptit" class="mx-auto md:m-0" />

            </a>

            <a href="tel:+84354618636" class="flex" target="_blank">

              <img src="static/images/phone.svg" alt="phone" class="mr-2" />

              096 400 21 40

            </a>

            <a href="mailto:clblaptrinhptit@gmail.com" class="flex" target="_blank">

              <img src="static/images/email.svg" alt="email" class="mr-2" />

              clblaptrinhptit@gmail.com

            </a>

            <a href="https://proptit.com" class="flex" target="_blank">

              <img src="static/images/web.svg" alt="github" class="mr-2" />

              proptit.com

            </a>

          </div>

          <div class="footer-info">

            <h3 class="mt-2 mb-6">VỀ CHÚNG TÔI</h3>

            <a href="#" class="block"> Sự kiện nổi bật </a>

            <a href="#video" class="block"> Video giới thiệu </a>

            <a href="#qa" class="block"> Q & A </a>

          </div>

          <div class="footer-info">

            <h3 class="mt-2 mb-6">TRANG CHỦ</h3>

            <a href="#gioithieu" class="block"> Giới thiệu </a>

            <a href="#hoatdong" class="block"> Hoạt động </a>

            <a href="#giaithuong" class="block"> Giải thưởng </a>

            <a href="#teamduan" class="block"> Team dự án </a>

          </div>

          <div class="footer-info">

            <h3 class="mt-2 mb-6">TRANG KHÁC</h3>

            <a href="/" class="block active"> Trang chủ </a>

            <a href="/dao-tao/" class="block"> Đào tạo </a>

            <a href="/phong-truyen-thong/" class="block">

              QUẢN LÝ THÀNH VIÊN

            </a>

          </div>

        </div>

      </div>

      <div class="footer-social">

        <p class="copyright">@2023 Design by </p>

        <div class="social">

          <a href="https://www.facebook.com/clubproptit" target="_blank">

            <img src="static/images/facebook.svg" alt="facebook PROPTIT" />

          </a>

          <a href="https://www.youtube.com/channel/UCdOcZv16XwUi7bhawqPjV9g" target="_blank">

            <img src="static/images/youtube.svg" alt="youtube PROPTIT" />

          </a>

          <a href="https://github.com/proptitclub" target="_blank">

            <img src="static/images/github.svg" alt="github PROPTIT" />

          </a>

        </div>

        <p class="copyright-mb">@2023 Design by </p>

      </div>

    </div>

  </footer>

  <!-- Messenger Chat Plugin Code -->

  <div id="fb-root"></div>



  <!-- Your Chat Plugin code -->

  <div id="fb-customer-chat" class="fb-customerchat"></div>



  <script>
    var chatbox = document.getElementById("fb-customer-chat");

    chatbox.setAttribute("page_id", "389943977794272");

    chatbox.setAttribute("attribution", "biz_inbox");



    window.fbAsyncInit = function() {

      FB.init({

        xfbml: true,

        version: "v12.0",

      });

    };



    (function(d, s, id) {

      var js,

        fjs = d.getElementsByTagName(s)[0];

      if (d.getElementById(id)) return;

      js = d.createElement(s);

      js.id = id;

      js.src = "https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js";

      fjs.parentNode.insertBefore(js, fjs);

    })(document, "script", "facebook-jssdk");
  </script>

  <script src="./static/js/home.js" type="text/javascript"></script>

  <script src="./static/js/jquery.min.js" type="text/javascript"></script>

  <script src="./dao-tao/training.js" type="text/javascript"></script>

  <script src="./static/js/swiper-bundle.min.js"></script>

  <script>
    var swiper = new Swiper(".mySwiper", {

      spaceBetween: 30,

      pagination: {

        el: ".swiper-pagination",

        clickable: true,

      },

    });
  </script>

  <script src="./static/js/wow.js"></script>

  <script>
    new WOW().init();
  </script>

</body>

</html>