<?php

    $is_mobile = 'PC';
    $include_header     = $_SERVER['DOCUMENT_ROOT']."/views/_include/header.php";
    $include_header_sub = $_SERVER['DOCUMENT_ROOT']."/views/_include/header_sub.php";
    $include_footer     = $_SERVER['DOCUMENT_ROOT']."/views/_include/footer.php";
    $include_left       = $_SERVER['DOCUMENT_ROOT']."/views/_include/left_menu.php";
    $include_popup      = $_SERVER['DOCUMENT_ROOT']."/views/_include/popup.php";
    
    if(preg_match('/iPhone|iPod|iPad|Tablet|Android|Windows CE|BlackBerry|Symbian|Windows Phone|webOS|Opera Mini|Opera Mobi|POLARIS|IEMobile|lgtelecom|nokia|SonyEricsson/i', $_SERVER['HTTP_USER_AGENT'])) 
    { 
        $is_mobile = 'M';
        // $include_header = $_SERVER['DOCUMENT_ROOT']."/views/_include/header.m.php";
        // $include_footer = $_SERVER['DOCUMENT_ROOT']."/views/_include/footer.m.php";
        // $include_left = null;
        // $include_right = null;
    }
?>  

<!doctype html>
<html lang="ko" ng-app="ngApp">
<head>
    
    <meta charset="UTF-8" />
    <meta name="description" content="리니지M, 리니지2M, 트릭스터M, V4, 오딘, 미르4, 카오스- 보탐스마트 라인스마트 보탐봇 디스코드봇 보스타이머 보탐매니저 미르4 카오스">
    <meta name="keywords" content="리니지M, 리니지2M, 트릭스터M, V4, 오딘, 미르4, 카오스 - 보탐스마트, 보탐봇, 디스코드봇, 보스타이머, 보탐매니저, 에오스레드, 킹덤, 바람의나라, 카오스m, R2m, 어비스M, 이카루스이터널, 미르4, 카오스">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!-- 페이스북 OG태그 -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="보탐스마트">
    <meta property="og:description" content="리니지M,  리니지2M, 트릭스터M, V4, 오딘 - 보탐스마트 라인스마트 보탐봇 디스코드봇 보스타이머 보탐매니저">
    <meta property="og:image" content="https://bossline.gg/assets/img/img_logo.png">
    <meta property="og:url" content="https://bossline.gg/lineage-m-01.php">
    <!-- 트위터 OG태그 -->
    <meta name="twitter:card" content="summary">  
    <meta name="twitter:url" content="https://bossline.gg/lineage-m-01.php">
    <meta name="twitter:title" content="보탐스마트">
    <meta name="twitter:description" content="리니지M, 리니지2M, 트릭스터M, V4, 오딘 - 보탐스마트 라인스마트 보탐봇 디스코드봇 보스타이머 보탐매니저">
    <meta name="twitter:image" content="https://bossline.gg/assets/img/img_logo.png">


    <title>리니지M - 기본봇 | 보탐스마트</title>
    <link
        rel="stylesheet"
        href="/assets/vendors/swiper/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="/assets/fonts/NotoSansKR/font.css" />
    <link rel="stylesheet" href="/assets/fonts/Poppins/font.css" />
    <link rel="stylesheet" href="/assets/css/common.css" />
    <!-- <link rel="stylesheet" href="/assets/css/main.css" /> -->
    <link rel="stylesheet" href="/assets/css/joeys.css" />
    <link rel="stylesheet" href="/assets/css/sub.css" />
    <link rel="stylesheet" href="/assets/css/add.css" />
    <link rel="shortcut icon" type="image/jpg" href="/assets/img/joeys_favicon.ico"/>


    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- 앵귤러용 js -->
    <script src="assets/js/lib/open/angular.min.js"></script>
    <script src="assets/js/lib/open/angular.open.lib.js"></script>
    <script src="assets/js/lib/open/jquery.open.lib.js"></script>
    <!-- 앵귤러용 js -->
    

    <!-- 공통 스크립트-->
    <script type="text/javascript" src="/assets/js/common/route.js?v=<?php echo date("YmdHis", filemtime('assets/js/common/route.js'));?>"></script>
    <script type="text/javascript" src="/assets/js/common/common.js?v=<?php echo date("YmdHis", filemtime('assets/js/common/common.js'));?>"></script>
    <script type="text/javascript" src="/assets/js/common/fun.js?v=<?php echo date("YmdHis", filemtime('assets/js/common/fun.js'));?>"></script>
    <script type="text/javascript" src="/assets/js/index.js?v=<?php echo date("YmdHis", filemtime('assets/js/index.js'));?>"></script>
    
    <script src="/assets/vendors/swiper/swiper-bundle.min.js"></script>
    <!-- 카카오 로그인 SDK -->
    <script src="https://developers.kakao.com/sdk/js/kakao.js"></script>

    <script>
    // function kakaoChannel() {
    //     gtag('event', 'conversion', {'send_to': 'AW-392325495/1b8UCIHphoACEPfSibsB'});
    //     Kakao.Channel.chat({
    //     channelPublicId: '_EhleK' 
    //     });
    // }
    </script>

</head>

<body id="ngBody" ng-controller="IndexCtrl as ctrl" ng-init="init()" ng-cloak>
    
    
    <!-- ng-cloak -->

    <div id="wrap" class="wrapper">

        <header>
            <?php include $include_header; ?>
        </header>
    
        <div id="container" ui-view="lazyLoadView"></div> 

        <?php include $include_footer; ?>
            
        
    </div>

</body>
</html>



