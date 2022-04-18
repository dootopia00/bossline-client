

<div ng-controller="lineSmartCtrl" ng-init="init()">

  <?php
      $clan_recruit   = $_SERVER['DOCUMENT_ROOT']."/views/line_smart/clan_recruit.php";
      $server_info    = $_SERVER['DOCUMENT_ROOT']."/views/line_smart/server_info.php";
      $clan_info      = $_SERVER['DOCUMENT_ROOT']."/views/line_smart/clan_info.php";
  ?>  

  <div>

    <div class="menu">
        <ul class="menu-list">
        <!--MEMO: is-active 클래스명 추가 시 활성화-->
        <!-- <li class="menu-item" ng-class="{'is-active' : type == 'lineage_m'}">
            <a ng-click="pageMovement('line_smart', {type:'lineage_m'})" href="javascript:void(0);" class="menu-link">
            <span>리니지M</span>
            </a>
        </li>
        <li class="menu-item" ng-class="{'is-active' : type == 'lineage_2m'}">
            <a ng-click="pageMovement('line_smart', {type:'lineage_2m'})" href="javascript:void(0);" class="menu-link">
            <span>리니지2M</span>
            </a>
        </li> -->
        <li class="menu-item" ng-class="{'is-active' : type == 'lineage_w'}">
            <a ng-click="pageMovement('line_smart', {type:'lineage_w'})" href="javascript:void(0);" class="menu-link">
            <span>리니지W</span>
            </a>
        </li>
        <!-- <li class="menu-item" ng-class="{'is-active' : type == 'trickster_m'}">
            <a ng-click="pageMovement('line_smart', {type:'trickster_m'})" href="javascript:void(0);" class="menu-link">
            <span>트릭스터M</span>
            </a>
        </li>
        <li class="menu-item" ng-class="{'is-active' : type == 'odin'}">
            <a ng-click="pageMovement('line_smart', {type:'odin'})" href="javascript:void(0);" class="menu-link">
            <span>오딘:발할라라이징</span>
            </a>
        </li> -->
        
        </ul>
    </div>

  </div>

  <main class="container">
    <div class="tab" role="navigation">
      <div class="tab-row">
        <a href="javascript:void(0);" ng-click="pageMovement('line_smart', {subType:'clan_recruit'})" ng-class="{'is-active' : subType == 'clan_recruit'}" class="tab-link">혈원모집</a>
        <a href="javascript:void(0);" ng-click="pageMovement('line_smart', {subType:'server_info'})"  ng-class="{'is-active' : subType == 'server_info'}" class="tab-link">서버정보</a>
        <a href="javascript:void(0);" ng-click="pageMovement('line_smart', {subType:'clan_info'})"    ng-class="{'is-active' : subType == 'clan_info'}" class="tab-link">혈맹정보</a>
      </div>
    </div>


    <div class="content">
      <div class="breadcrumb">
        <a href="javascript:void(0);">홈</a>
        <a href="javascript:void(0);">중분류</a>
        <a href="javascript:void(0);">하분류</a>
      </div>

      <header class="title-group is-reverse">
        <div class="title-group-col col-auto">
          <h2 class="title-group-text">
            <span>
              <em>{{ typeName }}</em>
              {{ subTypeName }}
            </span>
          </h2> 
        </div>
        <div class="title-group-col">
          <!--MEMO: is-open 클래스명 추가 시 하위 콘텐츠가 열립니다. -->
          <div class="info-card js-info-card-container" ng-class="{'is-open' : myInfo == true}">
            <div class="info-card-header">
              <h3>
                <img src="./assets/img/img_premium.png" alt="PREMIUM" />
              </h3>
              <!-- <button type="button" class="info-card-btn">
                <img src="./assets/img/icon_pencil.png" alt="수정" />
              </button>
              <button type="button" class="info-card-btn">
                <img src="./assets/img/icon_enter.png" alt="확인" />
              </button> -->
              <button type="button" class="btn-org">저장</button>
            </div>
            <div class="info-card-body">
              <strong class="game-id">
              {{ characterInfo.nickname }}
              </strong>
              <dl>
                <dt>
                  <span class="icon">
                    <img src="./assets/img/icon_info-card01.png" alt="" />
                  </span>
                  <span>혈맹</span>
                </dt>
                <!--MEMO: readonly 속성 삭제 시 입력 가능한 상태가 됩니다.-->
                <dd><input type="text" value="{{ characterInfo.clan_name }}"  /></dd>
              </dl>
              <dl>
                <dt>
                  <span class="icon">
                    <img src="./assets/img/icon_info-card02.png" alt="" />
                  </span>
                  <span>방어</span>
                </dt>
                <dd><input type="number" value="{{ characterInfo.defense }}" /></dd>
              </dl>
              <dl>
                <dt>
                  <span class="icon">
                    <img src="./assets/img/icon_info-card03.png" alt="" />
                  </span>
                  <span>레벨</span>
                </dt>
                <dd><input type="number" value="{{ characterInfo.level }}"  /></dd>
              </dl>
              <dl>
                <dt>
                  <span class="icon">
                    <img src="./assets/img/icon_info-card04.png" alt="" />
                  </span>
                  <span>변신</span>
                </dt>
                <dd><input type="text" value="{{ characterInfo.change }}" /></dd>
              </dl>
              <dl>
                <dt>
                  <span class="icon">
                    <img src="./assets/img/icon_info-card05.png" alt="" />
                  </span>
                  <span>직업</span>
                </dt>
                <dd>
                  <span class="select">

                    <select name="job">
                        <option value="1" ng-selected="characterInfo.job == '1'" >기사</option>
                        <option value="2" ng-selected="characterInfo.job == '2'" >요정</option>
                        <option value="3" ng-selected="characterInfo.job == '3'" >군주</option>
                        <option value="4" ng-selected="characterInfo.job == '4'" >마법사</option>
                    </select>
                  </dd>
                  </span>

              </dl>
            </div>
            <div class="info-card-bottom">
              <button type="button" class="info-card-btn js-info-card-toggle" ng-click="myInfoClick()">
                <img src="./assets/img/icon_arrow-bottom.png" alt="열기/닫기"/>
              </button>
            </div>
          </div>
        </div>
      </header>

      
      <?php include $clan_recruit; ?>
      <?php include $server_info; ?>
      <?php include $clan_info; ?>
    
    </div>


  </main>


</div>