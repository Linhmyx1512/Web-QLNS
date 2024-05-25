<!DOCTYPE html>

<html lang="vi">

<head>

  <link rel="shortcut icon" type="image/png" href="/static/images/ProPTIT.ico" />

  <meta charset="UTF-8" />

  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>

    Đào tạo - Tìm hiểu chương trình đào tại của CLB Lập Trình PTIT

  </title>

  <!-- css -->

  <link rel="stylesheet" href="/static/tailwind.css" />

  <link rel="stylesheet" href="/dist/css/style.css" />

  <link rel="stylesheet" href="/dist/css/loading.css" />



  <!-- wowJS -->

  <link rel="stylesheet" href="/dist/css/animate.css" />



  <!-- font Quicksand có Bold 700, Medium 500, Regular 400-->

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

        <a href="./index.php" class="nav-item nav-active">TRANG CHỦ</a>
        <a href="./dao-tao/dao-tao.php" class="nav-item">ĐÀO TẠO</a>
        <a href="./phong-truyen-thong/phong-truyen-thong.php" class="nav-item">QUẢN LÝ THÀNH VIÊN</a>


      </nav>

      <img class="show-menu-btn" id="showMenu" src="/static/images/list.svg" alt="" />

    </div>

  </div>

  <div class="training">

    <div class="training_banner relative overflow-hidden">
      <img src="/static/images/daotao.jpeg" alt="Sự kiện của CLB Lập Trình PTIT" class="object-cover w-full h-full" loading="lazy" />

      <div class="absolute inset-0 flex items-center">
        <div class="intro flex flex-col items-start w-full lg:w-1/2 wow animate__backInLeft" style="padding-left: 300px;">
          <h1 class="mb-4 text-red-400 wow animate__tada">ĐÀO TẠO</h1>
          <p class="text-justify text-black">
            CLB sẽ đào tạo các bạn từ những thứ cơ bản nhất của lập trình đến những thứ nâng cao hơn. Các bạn sẽ có được
            nền tảng vững chắc và từ đó có thể tạo ra những sản phẩm của riêng mình như web, game, app. Những kiến thức
            này sẽ giúp các bạn rất nhiều trong quá trình học tập tại Học Viện cũng như trong công việc sau này.
          </p>
        </div>
      </div>
    </div>




    <div class="training_timeline">

      <div class="container">

        <h3 class="title" id="lotrinh">Lộ trình học tại clb</h3>

        <div class="roadmap">

          <div class="roadmap_step left">

            <div class="step_header" id="training">

              <div class="count">01</div>

              <div class="name">TRAINING</div>

              <img class="label-pc wow animate__heartBeat" data-wow-duration="2s" src="/static/images/step1.svg" alt="training" />

            </div>

            <div class="step_body">

              <img class="label" src="/static/images/step1.svg" alt="training" />

              <p class="description">

                Trong quá trình training, các bạn sẽ được đào tạo và sử dụng

                thành thạo về ngôn ngữ C. Ngôn ngữ C là một ngôn ngữ phổ biến,

                cú pháp tường minh, dễ sử dụng đối với những người bắt đầu với

                lập trình. Và điều đặc biệt cho các PTITER là ngôn ngữ C sẽ

                được học vào kỳ 2 năm nhất, cho nên bạn sẽ có lợi thế khi mà

                tham gia khoá training này.

              </p>

            </div>

          </div>



          <div></div>

          <div class="right-pc"></div>

          <div class="roadmap_step right">

            <img src="/static/images/down.svg" alt="down" class="down_icon" />

            <div class="step_header" id="namnhat">

              <div class="count">02</div>

              <div class="name">kì i năm nhất</div>

              <img class="label-pc wow animate__heartBeat" data-wow-duration="2s" src="/static/images/step2.svg" alt="kì i năm nhất" />

            </div>

            <div class="step_body">

              <img class="label" src="/static/images/step2.svg" alt="kì i năm nhất" />

              <p class="description">

                Ngôn ngữ C++ đóng một vai trò quan trọng trong việc học lập

                trình. Nắm bắt được tầm quan trọng đó Câu lạc bộ đã xây dựng

                lên khóa học Lập trình với C++ để cung cấp một lượng kiến thức

                về ngôn ngữ C++ nói riêng, và các khái niệm khác trong lập

                trình nói chung cho các thành viên trong CLB.

              </p>

            </div>

          </div>



          <div class="roadmap_step left">

            <img src="/static/images/down.svg" alt="down" class="down_icon" />

            <div class="step_header">

              <div class="count">03</div>

              <div class="name">kì iI năm nhất</div>

              <img class="label-pc wow animate__heartBeat" data-wow-duration="2s" src="/static/images/step3.svg" alt="kì iI năm nhất" />

            </div>

            <div class="step_body">

              <img class="label" src="/static/images/step3.svg" alt="kì iI năm nhất" />

              <p class="description">

                Trong kì II năm nhất, các thành viên học thêm về cấu trúc dữ

                liệu và giải thuật. Khóa học kéo dài trong hai tháng bao gồm

                các vấn đề như: Sắp xếp và tìm kiếm, các phương pháp sinh,

                chia để trị, quy hoạch động, đồ thị,. sẽ trang bị cho thành

                viên Câu lạc bộ những kiến thức cơ bản và nâng cao trong bộ

                môn cấu trúc dữ liệu và giải thuật.

              </p>

            </div>

          </div>



          <div></div>

          <div class="right-pc"></div>



          <div class="roadmap_step right">

            <img src="/static/images/down.svg" alt="down" class="down_icon" />

            <div class="step_header">

              <div class="count">04</div>

              <div class="name">kì I năm HAI</div>

              <img class="label-pc wow animate__heartBeat" data-wow-duration="2s" src="/static/images/step4.svg" alt="kì I năm HAI" />

            </div>

            <div class="step_body">

              <img class="label" src="/static/images/step4.svg" alt="kì I năm HAI" />

              <p class="description">

                Trong vòng 1 tháng các thành viên sẽ được làm quen với lập

                trình hướng đối tượng sử dụng ngôn ngữ C++. Khóa học kết thúc

                bằng cuộc thi làm Game, trong cuộc thi này các thành viên sẽ

                vận dụng kiến thức mình tích luỹ được để làm project đầu tiên

                trong sự nghiệp làm lập trình viên của mình.

              </p>

            </div>

          </div>



          <div class="roadmap_step left">

            <img src="/static/images/down.svg" alt="down" class="down_icon" />

            <div class="step_header" id="namhai">

              <div class="count">05</div>

              <div class="name">kì iI năm HAI</div>

              <img class="label-pc wow animate__heartBeat" data-wow-duration="2s" src="/static/images/step5.svg" alt="kì iI năm HAI" />

            </div>

            <div class="step_body">

              <img class="label" src="/static/images/step5.svg" alt="kì iI năm HAI" />

              <p class="description">

                Khóa học kéo dài trong 1 tháng sẽ giúp mọi người có được tư

                duy lập trình hướng đối tượng. Bên cạnh đó mọi người còn học

                ngôn ngữ Java, một ngôn ngữ lập trình hướng đối tượng, để có

                thể tự viết cho mình một ứng dụng bằng Java đơn giản qua cuộc

                thi ProGAPP.

              </p>

            </div>

          </div>



          <div></div>

          <div></div>



          <div class="roadmap_step right">

            <img src="/static/images/down.svg" alt="down" class="down_icon" />

            <div class="step_header" id="teamduan">

              <div class="count">06</div>

              <div class="name">TEAM dự án</div>

              <img class="label-pc wow animate__heartBeat" data-wow-duration="2s" src="/static/images/step6.svg" alt="TEAM dự án" />

            </div>

            <div class="step_body">

              <img class="label" src="/static/images/step6.svg" alt="TEAM dự án" />

              <p class="description">

                Trong CLB, có các team dự án như: Team AI, Team Mobile, Team

                Web, Team Game,. Mỗi team dự án có một hướng phát triển và

                học tập riêng về mảng team hướng đến. Với phương châm "Chia sẻ

                để cùng nhau phát triển", team dự án sẽ luôn gắn bó cùng nhau

                ở cả hiện tại cũng như tương lai sau này.

              </p>

            </div>

          </div>
        </div>

      </div>

    </div>

  </div>

  <footer>

    <div class="footer">

      <div class="footer-content">

        <div class="footer-link">

          <div class="footer-info">

            <a href="#" class="mb-8 block">

              <img src="/static/images/logoFooter.svg" alt="logo CLB Lap trinh ptit" class="mx-auto md:m-0" />

            </a>

            <a href="tel:+84354618636" class="flex" target="_blank">

              <img src="/static/images/phone.svg" alt="phone" class="mr-2" />

              085 872 4654

            </a>

            <a href="mailto:clblaptrinhptit@gmail.com" class="flex" target="_blank">

              <img src="/static/images/email.svg" alt="email" class="mr-2" />

              clblaptrinhptit@gmail.com

            </a>

            <a href="https://proptit.com" class="flex" target="_blank">

              <img src="/static/images/web.svg" alt="github" class="mr-2" />

              proptit.com

            </a>

          </div>

          <div class="footer-info">

            <h3 class="mt-2 mb-6">VỀ CHÚNG TÔI</h3>

            <a href="#lotrinh" class="block"> Lộ trình học tập </a>

            <a href="#sanpham" class="block"> Một số sản phẩm </a>

          </div>

          <div class="footer-info">

            <h3 class="mt-2 mb-6">ĐÀO TẠO</h3>

            <a href="#training" class="block"> Training </a>

            <a href="#namnhat" class="block"> Năm nhất </a>

            <a href="#namhai" class="block"> Năm hai </a>

            <a href="#teamduan" class="block"> Team dự án </a>

          </div>

          <div class="footer-info">

            <h3 class="mt-2 mb-6">TRANG KHÁC</h3>

            <a href="/" class="block"> Trang chủ </a>

            <a href="/dao-tao/" class="block active"> Đào tạo </a>

            <a href="/su-kien/" class="block"> Sự kiện </a>

            <a href="/phong-truyen-thong/" class="block">

              Quản lý thành viên

            </a>

          </div>

        </div>

      </div>

      <div class="footer-social">

        <p class="copyright">@2021 Design by</p>

        <div class="social">

          <a href="https://www.facebook.com/clubproptit" target="_blank">

            <img src="/static/images/facebook.svg" alt="facebook CLB Lập trình ptit" />

          </a>

          <a href="https://www.youtube.com/channel/UCdOcZv16XwUi7bhawqPjV9g" target="_blank">

            <img src="/static/images/youtube.svg" alt="youtube CLB Lập trình ptit" />

          </a>

          <a href="https://github.com/proptitclub" target="_blank">

            <img src="/static/images/github.svg" alt="github CLB Lập trình ptit" />

          </a>

        </div>

        <p class="copyright-mb">@2021 Design by</p>

      </div>

    </div>

  </footer>

  <script src="/static/js/jquery.min.js" type="text/javascript"></script>

  <script src="./training.js"></script>

  <script src="/static/js/wow.js"></script>

  <script>
    new WOW().init();
  </script>

</body>

</html>