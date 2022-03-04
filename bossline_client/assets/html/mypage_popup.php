<!DOCTYPE html>
<html class="no-js" lang="ko">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="" />
    <title>마이페이지 | Boss Line</title>
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
  <body>
    <div class="wrapper">
      <header class="header">
        <nav class="gnb">
          <div class="gnb-row">
            <a href="#" class="gnb-logo">
              <img src="./assets/img/img_bi.png" alt="BOSS LINE" />
            </a>
            <div class="gnb-menu">
              <a href="#">보탐스마트</a>
              <a href="#" class="is-active">라인스마트</a>
            </div>
            <span class="gnb-line"></span>
            <div class="gnb-auth">
              <a href="#">
                로그인
                <span class="circle"></span>
              </a>
            </div>
          </div>
        </nav>

        <button class="btn-menu">
          <span class="btn-menu-bar"></span>
          <span class="sr-only">메뉴</span>
        </button>
        <nav class="nav">
          <a href="#" class="nav-logo">
            <img src="./assets/img/img_bi.png" alt="BOSS LINE" />
          </a>
          <div class="nav-menu">
            <a href="#">보탐스마트</a>
            <a href="#">라인스마트</a>
          </div>
          <span class="nav-line"></span>
          <div class="nav-auth">
            <a href="#">
              로그인
              <span class="circle"></span>
            </a>
          </div>
        </nav>
      </header>

      <main class="container">
        <div class="content">
          <div class="mypage">
            <span class="mypage-breadcrumb">
              <a href="#">홈</a>
              <a href="#">마이페이지</a>
            </span>

            <div class="mypage-header">
              <h1 class="title">마이페이지</h1>
            </div>

            <div class="mypage-section">
              <h2 class="title">개인정보 관리</h2>
              <dl class="field">
                <dt class="field-title">ID / 이메일</dt>
                <dd class="field-text">test@test.net</dd>
              </dl>
              <a href="#" class="btn btn-leave">회원탈퇴</a>
            </div>

            <div class="mypage-section">
              <h2 class="title">보탐스마트 서비스 내역</h2>

              <div class="service">
                <div class="service-header">
                  <h2 class="service-title">game1</h2>
                  <span class="label label-red">
                    <span class="label-text text-normal">만료일</span>
                    <span class="label-text">11/04 18:30</span>
                  </span>
                  <span class="label label-red">
                    <span class="label-text">8일 남음</span>
                  </span>
                  <span class="label label-green">
                    <img src="./assets/img/icon_check.png" alt="" />
                    <span class="label-text">사용중</span>
                  </span>
                </div>
                <div class="service-content">
                  <!-- MEMO: progress-{0~10}-->
                  <div class="progress progress-1">
                    <div class="progress-circle"></div>
                    <div class="progress-bar"></div>
                    <div class="progress-pattern">
                      <span class="circle"></span>
                      <span class="circle"></span>
                      <span class="circle"></span>
                      <span class="circle"></span>
                      <span class="circle"></span>
                      <span class="circle"></span>
                      <span class="circle"></span>
                      <span class="circle"></span>
                      <span class="circle"></span>
                      <span class="circle"></span>
                    </div>
                  </div>
                </div>
                <div class="service-action">
                  <button type="button" class="btn btn-active">연장하기</button>
                  <button type="button" class="btn">일시중지</button>
                  <button type="button" class="btn">이전요청</button>
                  <button type="button" class="btn">재시작</button>
                </div>
              </div>

              <div class="service">
                <div class="service-header">
                  <h2 class="service-title">game2</h2>
                  <span class="label label-gray">
                    <span class="label-text text-normal">만료일</span>
                    <span class="label-text">11/04 18:30</span>
                  </span>
                  <span class="label label-gray">
                    <img src="./assets/img/icon_times.png" alt="" />
                    <span class="label-text">사용완료</span>
                  </span>
                </div>
                <div class="service-content">
                  <!-- MEMO: progress-{0~10}-->
                  <div class="progress progress-0">
                    <div class="progress-circle"></div>
                    <div class="progress-bar"></div>
                    <div class="progress-pattern">
                      <span class="circle"></span>
                      <span class="circle"></span>
                      <span class="circle"></span>
                      <span class="circle"></span>
                      <span class="circle"></span>
                      <span class="circle"></span>
                      <span class="circle"></span>
                      <span class="circle"></span>
                      <span class="circle"></span>
                      <span class="circle"></span>
                    </div>
                  </div>
                </div>
                <div class="service-action">
                  <button type="button" class="btn">연장하기</button>
                  <button type="button" class="btn">일시중지</button>
                  <button type="button" class="btn">이전요청</button>
                  <button type="button" class="btn btn-active">재시작</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>

      <?php include "footer.php"?>
    </div>

    <div class="modal">
      <div class="dialog" role="dialog">
        <h1 class="dialog-title">보탐스마트 서비스 연장</h1>
        <div class="dialog-form">
          <label class="checkbox">
            <input type="radio" name="period" checked />
            <span class="checkbox-text">1개월</span>
          </label>
          <label class="checkbox">
            <input type="radio" name="period" />
            <span class="checkbox-text">3개월</span>
          </label>
        </div>
        <div class="dialog-btn">
          <button type="button" class="btn btn-confirm">확인</button>
          <button type="button" class="btn">취소</button>
        </div>
      </div>
    </div>

    <script src="./assets/vendors/swiper/swiper-bundle.min.js"></script>
    <script src="./assets/js/app.js"></script>
  </body>
</html>
