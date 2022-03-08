

<div ng-controller="botamSmartCtrl" ng-init="init()">

  <?php
      // $include_header     = $_SERVER['DOCUMENT_ROOT']."/views/_include/header.php";
      // $include_header_sub = $_SERVER['DOCUMENT_ROOT']."/views/_include/header_sub.php";
      // $include_footer     = $_SERVER['DOCUMENT_ROOT']."/views/_include/footer.php";
  ?>  


  <div>

    <div class="menu">
        <ul class="menu-list">
        <!--MEMO: is-active 클래스명 추가 시 활성화-->
        <li class="menu-item" ng-class="{'is-active' : type == 'lineage_m'}">
            <a ng-click="pageMovement('botam_smart', {type:'lineage_m'})" href="javascript:void(0);" class="menu-link">
            <span>리니지M</span>
            </a>
        </li>
        <li class="menu-item" ng-class="{'is-active' : type == 'lineage_2m'}">
            <a ng-click="pageMovement('botam_smart', {type:'lineage_2m'})" href="javascript:void(0);" class="menu-link">
            <span>리니지2M</span>
            </a>
        </li>
        <li class="menu-item" ng-class="{'is-active' : type == 'lineage_w'}">
            <a ng-click="pageMovement('botam_smart', {type:'lineage_w'})" href="javascript:void(0);" class="menu-link">
            <span>리니지W</span>
            </a>
        </li>
        <li class="menu-item" ng-class="{'is-active' : type == 'trickster_m'}">
            <a ng-click="pageMovement('botam_smart', {type:'trickster_m'})" href="javascript:void(0);" class="menu-link">
            <span>트릭스터M</span>
            </a>
        </li>
        <li class="menu-item" ng-class="{'is-active' : type == 'odin'}">
            <a ng-click="pageMovement('botam_smart', {type:'odin'})" href="javascript:void(0);" class="menu-link">
            <span>오딘:발할라라이징</span>
            </a>
        </li>
        <li class="menu-item" ng-class="{'is-active' : type == 'etc'}">
            <a ng-click="pageMovement('botam_smart', {type:'etc'})" href="javascript:void(0);" class="menu-link">
            <span>그 외 게임</span>
            </a>
        </li>
        </ul>
    </div>

    <div
        class="cover"
        style="background-image: url({{backgroundImage}})"
    >
        <h1 class="cover-title">{{ typeName }}</h1>
        <span class="cover-breadcrumb">
        <a href="javascript:void(0);">홈</a>
        <a href="javascript:void(0);">{{ typeName }}</a>
        <a href="javascript:void(0);">{{ subTypeName }}</a>
        </span>
    </div>

    <!-- <?php include "mobileheader.php"?> -->
</div>


  <main class="container">
    <div class="tab" role="navigation">
      <div class="tab-row">
        <a href="javascript:void(0);" class="tab-link" ng-click="pageMovement('botam_smart', {subType:'basic'})"  ng-class="{'is-active' : subType == 'basic'}">기본봇</a>
        <a href="javascript:void(0);" class="tab-link" ng-click="pageMovement('botam_smart', {subType:'manage'})" ng-class="{'is-active' : subType == 'manage'}" ng-if="type!='etc'">분배봇</a>
        <a href="javascript:void(0);" class="tab-link" ng-click="pageMovement('botam_smart', {subType:'point'})"  ng-class="{'is-active' : subType == 'point'}" ng-if="type!='etc'">포인트봇</a>
      </div>
    </div>
    <div class="content">
      <header class="title-group">
        <div class="title-group-col col-auto">
          <h2 class="title-group-text">
            <img src="./assets/img/icon_title01.png" alt="" />
            <span>{{ subTypeName }}</span>
          </h2>
          <p>{{ intro }}</p>
        </div>
        <div class="title-group-col">
          <img ng-if="bot=='manage' || bot=='point'" src="./assets/img/badge_premium.png" alt="프리미엄" / >
          <a href="javascript:kakaoChannel();" class="btn btn-kakao">
            <span class="text">무료테스트 신청</span>
          </a>
        </div>
      </header>

      <div class="headline" ng-if="type!='etc'">
        <div class="headline-col">
          <!--MEMO: data-youtube-id 속성에 유튜브 아이디값만 넣으시면 돼요.-->
          <div
            class="headline-video"
            style="background-image: url('https://img.youtube.com/vi/_7pJs7xvsIA/0.jpg')"
            data-youtube-id="_7pJs7xvsIA"
          >
            <button type="type" class="btn-play">재생</button>
          </div>
        </div>
        <div class="headline-col">
          <div class="headline-content">
            <h3 class="headline-title">기본봇 동영상 설명서</h3>
            <p class="headline-text">
              동영상을 재생하여 명령어 기능을 확인해보세요.
            </p>
          </div>
        </div>
      </div>

      <ul class="icon-img-list" ng-if="type=='etc'">
        <li><img src="./assets/img/game_icons/aos_red_image.png" alt="aos"/></li>
        <li><img src="./assets/img/game_icons/baram_icon.jpg" alt="baram"/></li>
        <li><img src="./assets/img/game_icons/ecarus_icon.jpg" alt="ecarus"/></li>
        <li><img src="./assets/img/game_icons/kingdom_icon.png" alt="kingdom"/></li>
        <li><img src="./assets/img/game_icons/r2m_logo.jpg" alt="r2m"/></li>
        <li><img src="./assets/img/game_icons/abyss_icon_image.png" alt="abyss"/></li>
        <li><img src="./assets/img/game_icons/lineage_pc_icon.jpg" alt="lineage_pc"/></li>
        <li><img src="./assets/img/game_icons/mir4_icon.png" alt="mir"/></li>
        <li><img src="./assets/img/game_icons/dekaron_m.jpg" alt="dekaron"/></li>
        <li><img src="./assets/img/game_icons/chaos_icon.png" alt="chaos"/></li>
        <li><img src="./assets/img/game_icons/v4_icon.png" alt="chaos"/></li>
        <li><img src="./assets/img/game_icons/bladeandsoul.png" alt="bladeandsoul"/></li>
        <li><img src="./assets/img/game_icons/r2.png" alt="r2"/></li>
        <!-- <li><img src="./assets/img/game_icons/tricksterm.png" alt="tricksterm"/></li> -->
      </ul>
      
      <div class="section">
        <h3 class="section-title">부가기능</h3>
        <ol class="list">
          <li class="list-item">
            <span class="round-text">
              <small>01</small>
              보스리젠 음성안내
            </span>
          </li>
          <li class="list-item">
            <span class="round-text">
              <small>02</small>
              수수료계산기
            </span>
          </li>
          <li class="list-item">
            <span class="round-text">
              <small>03</small>
              TTS (대신 읽어주기)
            </span>
          </li>
          <li class="list-item">
            <span class="round-text">
              <small>04</small>
              채널 수동 설정
            </span>
          </li>
          <li class="list-item">
            <span class="round-text">
              <small>05</small>
              경주, 뽑기 기능
            </span>
          </li>
          <li class="list-item">
            <span class="round-text">
              <small>06</small>
              정시간 이벤트 안내
              <br />
              (일일뽑기, 보스레이드 등)
            </span>
          </li>
          <li class="list-item">
            <span class="round-text">
              <small>07</small>
              음성연결 모니터링
            </span>
          </li>
          <li class="list-item">
            <span class="round-text">
              <small>08</small>
              파템 미리뽑기
            </span>
          </li>
        </ol>
      </div>

      <div class="section">
        <h3 class="section-title">고객지원 서비스</h3>
        <ol class="list">
          <li class="list-item">
            <span class="round-text">
              <small>01</small>
              무료 디스코드 이전
            </span>
          </li>
          <li class="list-item">
            <span class="round-text">
              <small>02</small>
              카드결제
            </span>
          </li>
          <li class="list-item">
            <span class="round-text">
              <small>03</small>
              일시정지
            </span>
          </li>
        </ol>
      </div>
    </div>
  </main>
</div>