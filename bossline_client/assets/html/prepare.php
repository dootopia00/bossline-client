<?php
  include 'common.php';
?>
<!DOCTYPE html>
<html class="no-js" lang="ko">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="" />
    <title>더 좋은 서비스를 위해 준비중입니다. | 라인스마트</title>
    <link
      rel="stylesheet"
      href="./assets/vendors/swiper/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="./assets/fonts/NotoSansKR/font.css" />
    <link rel="stylesheet" href="./assets/fonts/Poppins/font.css" />
    <link rel="stylesheet" href="./assets/css/common.css" />
    <link rel="stylesheet" href="./assets/css/sub.css" />
    <link rel="shortcut icon" type="image/jpg" href="./assets/img/joeys_favicon.ico"/>
  </head>

  <script src="https://developers.kakao.com/sdk/js/kakao.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript">
    var isLogin;
    window.Kakao.init("269c5b7a046160744b444b4f0beabf9e");
    function kakaoLogin() {
      window.Kakao.Auth.login({
        scope: 'account_email',
        success: function(authObj) {
          // console.log(authObj);
          window.Kakao.API.request({
            url:'/v2/user/me',
            success: res => {
              const kakao_account = res.kakao_account;
              // console.log(res);
              postForm('/', {userId: res.id, accessToken: authObj.access_token});
            }
          });
        }
      });
    }

    function kakaoChannel() {
      gtag('event', 'conversion', {'send_to': 'AW-392325495/1b8UCIHphoACEPfSibsB'});
      Kakao.Channel.chat({
        channelPublicId: '_EhleK' 
      });

    }

    function postForm(path, params, method) {
      method = method || 'post';

      var form = document.createElement('form');
      form.setAttribute('method', method);
      form.setAttribute('action', path);

      for (var key in params) {
          if (params.hasOwnProperty(key)) {
              var hiddenField = document.createElement('input');
              hiddenField.setAttribute('type', 'hidden');
              hiddenField.setAttribute('name', key);
              hiddenField.setAttribute('value', params[key]);

              form.appendChild(hiddenField);
          }
      }

      document.body.appendChild(form);
      form.submit();
    }
    

    $(document).ready(function(){  
      console.log("<?php echo $userId?>");
      isLogin = <?php echo $isLogin; ?>;
      if(isLogin){
        document.getElementById("mp").innerHTML = 
        '<a href="/mypage.php">마이페이지';
      }
      console.log(isLogin);
    });

  </script>
  <body>
    <div class="wrapper">
      <header class="header">
        <nav class="gnb">
          <div class="gnb-row">
            <a href="/" class="gnb-logo">
              <img src="./assets/img/img_bi.png" alt="BOSS LINE" />
            </a>
            <div class="gnb-menu">
              <a href="/lineage-m-01.php">보탐스마트</a>
              <a href="/linesmart.php" class="is-active">라인스마트</a>
            </div>
            <span class="gnb-line"></span>
            <div id='mp' class="gnb-auth">
              <a href="javascript:kakaoLogin();">
                로그인
              </a>
            </div>
          </div>
        </nav>

        <div
          class="cover"
          style="background-image: url(./assets/img/bg_cover04.jpg)"
        >
          <h1 class="cover-title">라인스마트</h1>
        </div>

        <?php include "mobileheader.php"?>
      </header>

      <main class="container">
        <div class="content">
          <div class="prepare">
            <h1 class="prepare-title">더 좋은 서비스를 위해 준비중입니다.</h1>
          </div>
        </div>
      </main>
      <?php include "footer.php"?>
    </div>

    <script src="./assets/vendors/swiper/swiper-bundle.min.js"></script>
    <script src="./assets/js/app.js"></script>
  </body>
</html>
