

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
        <li class="menu-item" ng-class="{'is-active' : type == 'lineage_m'}">
            <a ng-click="pageMovement('line_smart', {type:'lineage_m'})" href="javascript:void(0);" class="menu-link">
            <span>리니지M</span>
            </a>
        </li>
        <li class="menu-item" ng-class="{'is-active' : type == 'lineage_2m'}">
            <a ng-click="pageMovement('line_smart', {type:'lineage_2m'})" href="javascript:void(0);" class="menu-link">
            <span>리니지2M</span>
            </a>
        </li>
        <li class="menu-item" ng-class="{'is-active' : type == 'lineage_w'}">
            <a ng-click="pageMovement('line_smart', {type:'lineage_w'})" href="javascript:void(0);" class="menu-link">
            <span>리니지W</span>
            </a>
        </li>
        <li class="menu-item" ng-class="{'is-active' : type == 'trickster_m'}">
            <a ng-click="pageMovement('line_smart', {type:'trickster_m'})" href="javascript:void(0);" class="menu-link">
            <span>트릭스터M</span>
            </a>
        </li>
        <li class="menu-item" ng-class="{'is-active' : type == 'odin'}">
            <a ng-click="pageMovement('line_smart', {type:'odin'})" href="javascript:void(0);" class="menu-link">
            <span>오딘:발할라라이징</span>
            </a>
        </li>
        
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


    <?php include $clan_recruit; ?>
    <?php include $server_info; ?>
    <?php include $clan_info; ?>
    


  </main>


</div>