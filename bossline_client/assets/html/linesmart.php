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
    <title>사전예약 중 | 라인스마트</title>
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
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-H2JP0637G0"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-H2JP0637G0');
  </script>
  <!-- Global site tag (gtag.js) - Google Ads: 392325495 -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-392325495"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'AW-392325495');
  </script>
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

    function normalLogin() {
      document.getElementById('login').style.visibility='visible';
    }

    function login(){
      var uuid = document.getElementById('password').value;
      var test = document.getElementById('uuid').value;
      $.ajax({
      type: 'GET',
      dataType: "json",
      url:'api/sign-in.php?userId='+uuid+'&test='+test,
      success: function(data)
      {
        if(data["status"]== "success")
          postForm('/', {userId: uuid, test: test});
        else
          document.getElementById('warning').style.visibility='visible';
      }});
      
    }


    function cancel() {
      document.getElementById('login').style.visibility='hidden';
      document.getElementById('warning').style.visibility='hidden';
      document.getElementById('uuid').value = "";
      document.getElementById('password').value = "";
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
      } else {
        document.getElementById("mp").innerHTML = 
        '<a href="javascript:kakaoLogin();">로그인';
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
              </a>
            </div>
          </div>
        </nav>

        <div
          class="cover"
          style="background-image: url(./assets/img/bg_cover04.jpg); text-align: center;"
        >
          <h1 class="cover-title"><p>라인스마트<br/><a style="font-size: 40px; text-align: center;">사전예약중</a></p></h1>

        </div>

        <?php include "mobileheader.php"?>
      </header>

      <main class="container">
        <div class="content">
          <img src="./assets/img/linesmart_guild_gathering2.jpg" alt="Girl in a jacket" width="100%" height="auto">
        </div>
      </main>
      <?php include "footer.php"?>
    </div>


    <div id="login" class="modal" style="visibility:hidden;">
      <div class="dialog" role="dialog">
        <h1 class="dialog-title">로그인</h1>
        <div class="dialog-form">
          <div class="service-form">
            <dl class="modal-field">
              <dt class="modal-field-col">아이디</dt>
              <dd class="modal-field-col">
                <input type="text" class="text-input" id="uuid" value="" />
              </dd>
            </dl>
            <dl class="modal-field">
              <dt class="modal-field-col">비밀번호</dt>
              <dd class="modal-field-col">
                <input
                  type="password"
                  class="text-input"
                  value=""
                  id = "password"
                />
              </dd>
            </dl>
            <dd class="modal-field-col">
              <span id="warning" style="color: #ff1448;visibility:hidden;">존재하지 않는 아이디 입니다</span>
            </dd>
          </div>
        </div>
        <div class="dialog-btn">
          <button onClick="login();" type="button" class="btn btn-confirm">로그인</button>
          <button onClick="cancel();" type="button" class="btn">취소</button>
        </div>
      </div>
    </div>

    <script src="./assets/vendors/swiper/swiper-bundle.min.js"></script>
    <script src="./assets/js/app.js"></script>
  </body>
</html>
