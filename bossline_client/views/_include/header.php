

<nav class="gnb" ng-if="nowHashUrl != 'main'">
    <div class="gnb-row">
        <a href="javascript:void(0);" ng-click="pageMovement('main')" class="gnb-logo">
        <img src="/assets/img/img_bi.png" alt="BOSS LINE" />
        </a>
        <div class="gnb-menu">
            <a href="javascript:void(0);" ng-click="pageMovement('botam-smart')" ng-class="{'is-active' : nowHashUrl == 'botam-smart'}">보탐스마트</a>
            <a href="javascript:void(0);" ng-click="pageMovement('line-smart')"  ng-class="{'is-active' : nowHashUrl == 'line-smart'}">라인스마트</a>
        </div>
        <span class="gnb-line"></span>
        <div id='mypage' class="gnb-auth">
        <a href="javascript:kakaoLogin();">로그인</a>
        </div>
    </div>
</nav>

