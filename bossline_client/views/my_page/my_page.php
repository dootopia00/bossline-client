<div ng-controller="MyPageCtrl" ng-init="init()">

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
                    <div class="progress progress-5">
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

</div>

