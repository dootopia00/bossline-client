<?php
  include 'common.php';
  if(isset($_GET["logout"])){
    if($_GET["logout"]=="true"){
      $_SESSION['user_id'] = null;
      header("Refresh:0; url=index.php");
    }
  }
?>
<!DOCTYPE html>
<html class="no-js" lang="ko">
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-H2JP0637G0"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-H2JP0637G0');
  </script>

  <!-- 마케팅 회사 ga태그 -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-193464214-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-193464214-1');
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
    var isLogin = 0;
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

    function toMain() {
      stopVideo();
      document.getElementById('iframe').style.visibility='hidden'; 
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
        document.getElementById("mypage").innerHTML = 
        '<a href="/mypage.php">마이페이지';
      } else {
        document.getElementById("mypage").innerHTML = 
        '<a href="javascript:kakaoLogin();">로그인';
      }
      console.log(isLogin);
    });

  </script>
  <head>
    
    <meta charset="UTF-8" />
    <meta name="description" content="리니지M, 리니지2M, V4 - 보탐스마트 라인스마트 보탐봇 디스코드봇 보스타이머 보탐매니저">
    <meta name="keywords" content="리니지M, 리니지2M, V4 - 보탐스마트, 보탐봇, 디스코드봇, 보스타이머, 보탐매니저, 에오스레드, 킹덤, 바람의나라, 카오스m, R2m, 어비스M, 이카루스이터널">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!-- 페이스북 OG태그 -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="보탐스마트">
    <meta property="og:description" content="리니지M, 리니지2M, V4 - 보탐스마트 라인스마트 보탐봇 디스코드봇 보스타이머 보탐매니저">
    <meta property="og:image" content="https://bossline.gg/assets/img/img_logo.png">
    <meta property="og:url" content="https://bossline.gg">
    <!-- 트위터 OG태그 -->
    <meta name="twitter:card" content="summary">  
    <meta name="twitter:url" content="https://bossline.gg">
    <meta name="twitter:title" content="보탐스마트">
    <meta name="twitter:description" content="리니지M, 리니지2M, V4 - 보탐스마트 라인스마트 보탐봇 디스코드봇 보스타이머 보탐매니저">
    <meta name="twitter:image" content="https://bossline.gg/assets/img/img_logo.png">

    <title>메인 | 보스라인</title>
    <link
      rel="stylesheet"
      href="./assets/vendors/swiper/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="./assets/fonts/NotoSansKR/font.css" />
    <link rel="stylesheet" href="./assets/fonts/Poppins/font.css" />
    <link rel="stylesheet" href="./assets/css/common.css" />
    <link rel="stylesheet" href="./assets/css/main.css" />
    <link rel="stylesheet" href="./assets/css/joeys.css" />
    <link rel="shortcut icon" type="image/jpg" href="./assets/img/joeys_favicon.ico"/>
  </head>
  <body>
    <div class="wrapper">
      <header class="header">
        <div class="header-top">
          <div class="bi">
            <a href="/">
              <img src="./assets/img/img_bi.png" alt="BOSS LINE" />
            </a>
          </div>
        </div>
        <!-- Slider main container -->
        <div class="swiper-container">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <div
              class="swiper-slide"
              style="background-image: url(./assets/img/bg_slide01.jpg)"
            >
              <div class="box">
                <!--01/19 삭제
                <div class="box-img">
                  <img src="./assets/img/img_slide01-title.png" alt="">
                </div>
                01/19 삭제-->
                <h2 class="box-title">보스라인</h2>
                <!--01/22 수정-->
                <p class="box-text">
                  게임 혈맹/길드의 종합 관리 서비스를 향해 나아가는 기업입니다.<br>
                  보탐스마트 챗봇으로 1레벨 달성 후, 5월 라인스마트로 2레벨로 렙업 예정입니다.
                </p>
                <!--01/22 수정//-->
              </div>
            </div>
            <div
              class="swiper-slide"
              style="background-image: url(./assets/img/bg_slide02.jpg)"
            >
              <div class="box">
                <!--01/19 삭제
                <div class="box-img">
                  <img src="./assets/img/img_slide01-title.png" alt="">
                </div>
                01/19 삭제-->
                <h2 class="box-title">보탐스마트</h2>
                <!--01/22 수정-->
                <p class="box-text">
                  게임 정보 관리 챗봇입니다. 기본적인 보스, 이벤트 스케쥴 관리를 포함하여, <br>
                  아이템 및 재화관리, 참여자 관리 데이터 통계 등 게이머들의 편의 향상을 위한 인공지능 챗봇입니다.
                </p>
                <!--01/22 수정//-->
              </div>
            </div>
            <div
              class="swiper-slide"
              style="background-image: url(./assets/img/bg_slide03.jpg)"
            >
              <div class="box">
                <!--01/19 삭제
                <div class="box-img">
                  <img src="./assets/img/img_slide01-title.png" alt="">
                </div>
                01/19 삭제-->
                <h2 class="box-title">라인스마트</h2>
                <!--01/22 수정-->
                <p class="box-text">
                  게임 혈맹/길드와 개인을 연결하는 플랫폼 서비스입니다. 서버이전시 발생하는 게이머들의 정보 공유,<br>
                  새로운 모험 및 신규 인원 모집을 지원하기 위한 서비스입니다.
                </p>
                <!--01/22 수정//-->
              </div>
            </div>
          </div>

          <div class="swiper-inner">
            <div class="swiper-control">
              <div class="swiper-button-prev"></div>
              <div class="swiper-pagination"></div>
              <div class="swiper-button-next"></div>
            </div>
          </div>
        </div>
      </header>

      <!--01/11 추가-->
      <button class="btn-menu">
        <span class="btn-menu-bar"></span>
        <span class="sr-only">메뉴</span>
      </button>
      <!--01/11 추가//-->

      <!--01/11 이동-->
      <nav class="nav">
        <a href="/" class="nav-logo">
          <img src="./assets/img/img_bi.png" alt="BOSS LINE" />
        </a>
        <div class="nav-menu">
          <a href="/lineage-m-01.php">보탐스마트</a>
          <a href="/linesmart.php">라인스마트</a>
        </div>
        <span class="nav-line"></span>
        <div id='mypage' class="nav-auth">
          </a>
        </div>
      </nav>
      <!--01/11 이동//-->


      <main>
        <!--01/19 수정-->
        <section class="section section-01">
          <div class="section-inner">
            <div class="section-row">
              <div class="section-box">
                <div class="section-img">
                  <img src="./assets/img/img_section01.jpg" alt="" />
                </div>
                <h2 class="section-title">
                  <sup>보탐스마트</sup>
                  <span>BOTAM SMART</span>
                </h2>
                <p class="section-text">
                  게임의 길드의 관리자 및 보스시간 관리를 해주는 챗봇
                  서비스입니다.
                </p>
                <a href="/lineage-m-01.php" class="btn btn-plus">
                  <span class="text">더 보기</span>
                  <span class="icon">
                    <img
                      src="./assets/img/img_plus.png"
                      alt=""
                      class="icon-plus"
                    />
                  </span>
                </a>
              </div>
              <div class="section-box">
                <div class="section-img">
                  <img src="./assets/img/img_section02.jpg" alt="" />
                </div>
                <h2 class="section-title">
                  <sup>라인스마트</sup>
                  <span>LINE SMART</span>
                </h2>
                <p class="section-text">
                  게임 길드원들을 위한 모집형 커뮤니티 서비스입니다.
                </p>
                <a href="/linesmart.php" class="btn btn-plus">
                  <span class="text">더 보기</span>
                  <span class="icon">
                    <img
                      src="./assets/img/img_plus.png"
                      alt=""
                      class="icon-plus"
                    />
                  </span>
                </a>
              </div>
            </div>
          </div>
        </section>
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



    <script>
      // 2. This code loads the IFrame Player API code asynchronously.
      var tag = document.createElement('script');

      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      // 3. This function creates an <iframe> (and YouTube player)
      //    after the API code downloads.
      var player;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
          height: '100%',
          width: '100%',
          videoId: 'VSyEUXrW8kI',
          playerVars: { 'autoplay': isLogin ? 0 : 1, 'controls': 1 },
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          }
        });
      }

      // 4. The API will call this function when the video player is ready.
      function onPlayerReady(event) {
        if (!isLogin) {
          document.getElementById('iframe').style.visibility='visible'; 
          event.target.playVideo();
        }
      }

      // 5. The API calls this function when the player's state changes.
      //    The function indicates that when playing a video (state=1),
      //    the player should play for six seconds and then stop.
      var done = false;
      function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.PLAYING && !done) {
          done = true;
        }
      }
      function stopVideo() {
        player.stopVideo();
      }
    </script>

    <div id="iframe" class="modal" style="visibility:hidden;">
      <div class="ivideo" role="dialog">
        <div id="player"></div>

        <div class="ivideo-btn">
          <button onClick="toMain();" type="button" class="btn btn-confirm">메인화면</button>
        </div>
      </div>
    </div>
    <script src="./assets/vendors/swiper/swiper-bundle.min.js"></script>
    <script src="./assets/js/app.js"></script>
  </body>
</html>
