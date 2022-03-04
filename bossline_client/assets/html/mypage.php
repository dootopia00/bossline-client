<?php
require_once('./stdpay/libs/INIStdPayUtil.php');
$SignatureUtil = new INIStdPayUtil();
/*
  //*** 위변조 방지체크를 signature 생성 ***

  oid, price, timestamp 3개의 키와 값을

  key=value 형식으로 하여 '&'로 연결한 하여 SHA-256 Hash로 생성 된값

  ex) oid=INIpayTest_1432813606995&price=819000&timestamp=2012-02-01 09:19:04.004


 * key기준 알파벳 정렬

 * timestamp는 반드시 signature생성에 사용한 timestamp 값을 timestamp input에 그대로 사용하여야함
 */

//############################################
// 1.전문 필드 값 설정(***가맹점 개발수정***)
//############################################
// 여기에 설정된 값은 Form 필드에 동일한 값으로 설정
$mid = "bosslinegg";  // 가맹점 ID(가맹점 수정후 고정)          
//인증
$signKey = "NDhmU09KUDB2OVZMMnFrazBCOHhDQT09"; // 가맹점에 제공된 웹 표준 사인키(가맹점 수정후 고정)
// $mid            = "INIpayTest";
// $signKey = "SU5JTElURV9UUklQTEVERVNfS0VZU1RS";
$timestamp = $SignatureUtil->getTimestamp();   // util에 의해서 자동생성

$orderNumber = $mid . "_" . $SignatureUtil->getTimestamp(); // 가맹점 주문번호(가맹점에서 직접 설정)

$cardNoInterestQuota = "11-2:3:,34-5:12,14-6:12:24,12-12:36,06-9:12,01-3:4";  // 카드 무이자 여부 설정(가맹점에서 직접 설정)
$cardQuotaBase = "2:3:4:5:6:11:12:24:36";  // 가맹점에서 사용할 할부 개월수 설정
//###################################
// 2. 가맹점 확인을 위한 signKey를 해시값으로 변경 (SHA-256방식 사용)
//###################################
$mKey = $SignatureUtil->makeHash($signKey, "sha256");
$priceBasic1 = 30000;
$priceBasic3 = 80000;
$pricePremium1 = 40000;
$pricePremium3 = 100000;

$paramsBasic1 = array(
    "oid" => $orderNumber,
    "price" => $priceBasic1,
    "timestamp" => $timestamp
);
$paramsBasic3 = array(
    "oid" => $orderNumber,
    "price" => $priceBasic3,
    "timestamp" => $timestamp
);
$paramsPremium1 = array(
    "oid" => $orderNumber,
    "price" => $pricePremium1,
    "timestamp" => $timestamp
);
$paramsPremium3 = array(
    "oid" => $orderNumber,
    "price" => $pricePremium3,
    "timestamp" => $timestamp
);
$signatureBasic1 = $SignatureUtil->makeSignature($paramsBasic1, "sha256");
$signatureBasic3 = $SignatureUtil->makeSignature($paramsBasic3, "sha256");
$signaturePremium1 = $SignatureUtil->makeSignature($paramsPremium1, "sha256");
$signaturePremium3 = $SignatureUtil->makeSignature($paramsPremium3, "sha256");
/* 기타 */
$http_host  = $_SERVER['HTTP_HOST'];

/* 기타 */
if (!isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] != 'on') {
    // no SSL request
  $siteDomain = "http://".$_SERVER['HTTP_HOST']."/stdpay/INIStdPay"; //가맹점 도메인 입력
} else {
  $siteDomain = "https://".$_SERVER['HTTP_HOST']."/stdpay/INIStdPay"; //가맹점 도메인 입력
}
// $siteDomain = "http://localhost/stdpay/INIStdPay"; //가맹점 도메인 입력

// echo $siteDomain[0];
// 페이지 URL에서 고정된 부분을 적는다. 
// Ex) returnURL이 http://localhost:8082/demo/INIpayStdSample/INIStdPayReturn.jsp 라면
//                 http://localhost:8082/demo/INIpayStdSample 까지만 기입한다.
?>
<!DOCTYPE html>
<html class="no-js" lang="ko">

  <script src="https://developers.kakao.com/sdk/js/kakao.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
        <?php include "header.php"?>
        <?php include "mobileheader.php"?>
      </header>

      <script type="text/javascript" defer>
          var userId = "<?php echo $userId; ?>";
          function gamename(game) {
            return game.replace("lin2m", "리니지 2M").replace("linm", "리니지 M").replace("v4", "V4");
          }

          function getData(type, month, game) {
            name = gamename(game);
            switch(month) {
              case 1:
                if(type=="basic") return [<?php echo $priceBasic1;?>, "<?php echo $signatureBasic1;?>", name + " 기본봇 1개월"];
                else return [<?php echo $pricePremium1;?>, "<?php echo $signaturePremium1;?>", name + " 프리미엄봇 1개월"];
                break;
              case 3:
                if(type=="basic") return [<?php echo $priceBasic3;?>, "<?php echo $signatureBasic3;?>", name + " 기본봇 3개월"];
                else return [<?php echo $pricePremium3;?>, "<?php echo $signaturePremium3;?>", name + " 프리미엄봇 3개월"];
                break;
              default:
                return [-1, "", ""];
            }
          }

          function timeConverter(UNIX_timestamp){
            var a = new Date(UNIX_timestamp * 1000);
            var year = a.getFullYear();
            var date = a.getDate();
            var hour = a.getHours();
            var min = a.getMinutes();
            var sec = a.getSeconds();
            var time = (a.getMonth()+1).toString() + '/' + date + '/' + year + ' ' + hour + ':' + min;
            return time;
          }

          function show_modal(game, type) {
            document.getElementById("extend").style.visibility = "visible"
            document.getElementById('extend').setAttribute('data-value', game);
            document.getElementById('extend').setAttribute('data-type', type);
            oneMonth();
          }

          function oneMonth(){
            var type = document.getElementById('extend').getAttribute('data-type');
            var data = getData(type, 1, "")
            document.getElementById('price').innerHTML = data[0];
            document.getElementById('one-month').checked = true;
          }

          function threeMonth(){
            var type = document.getElementById('extend').getAttribute('data-type');
            var data = getData(type, 3, "")
            document.getElementById('price').innerHTML = data[0];
            document.getElementById('three-month').checked = true;
          }

          function extend(){
            var game = document.getElementById('extend').getAttribute('data-value');
            var type = document.getElementById('extend').getAttribute('data-type');
            var buyername = document.getElementById('name').value;
            var buyertel = document.getElementById('tel').value;
            var buyeremail = document.getElementById('email').value;
            var month = document.getElementById('one-month').checked ? 1 : 3;
            var md = game+' '+userId+' '+month;
            if (document.getElementById('one-month').checked || document.getElementById('three-month').checked){
              if (type=="basic" && month == 1) {
                gtag('event', 'conversion', {
                    'send_to': 'AW-392325495/2GwxCKHy__8BEPfSibsB',
                    'transaction_id': ''
                });
              } else if (type=="premium" && month == 1) {
                gtag('event', 'conversion', {
                    'send_to': 'AW-392325495/dFSKCM7d6P8BEPfSibsB',
                    'transaction_id': ''
                });
              }
              document.getElementsByName("buyername")[0].setAttribute("value", buyername);
              document.getElementsByName("buyertel")[0].setAttribute("value", buyertel);
              document.getElementsByName("buyeremail")[0].setAttribute("value", buyeremail);
              var data = getData(type, month, game);
              document.getElementsByName("price")[0].setAttribute("value", data[0]);
              document.getElementsByName("signature")[0].setAttribute("value", data[1]);
              document.getElementsByName("goodname")[0].setAttribute("value", data[2]);
              document.getElementsByName("merchantData")[0].setAttribute("value", md);
              
              if(document.getElementsByName("price")[0].getAttribute("value") < 0) {
                //Something went wrong
                return;
              } else {
                $.ajax({
                  type: 'GET',
                  dataType: 'json',
                  url:'./api/set-user.php?userId='+userId+ '&email='+buyeremail+'&name='+buyername+'&tel='+buyertel,
                  success: function(data)
                  {
                    pay();
                  }
                });
              }
            }
          }
          function pause(game) {
            $.ajax({
            type: 'GET',
            dataType: "json",
            url:'api/pause.php?userId='+userId+'&game='+game,
            success: function(data)
            {
              window.location.href = "/mypage.php";    
            }});
          }

          if(<?php echo $isLogin; ?> == 0)
            window.location.href = "/";
          $.ajax({
            type: 'GET',
            dataType: "json",
            url:'api/user.php?userId='+userId,
            success: function(data)
            {
              var games = [];
              if(data.status == "success") {
                if(data.game != "[]") {
                  var games = JSON.parse(data.game.replace(/'/g,'"'));
                }
              }
              console.log(games);
              document.getElementById("service-wrapper").innerHTML = '';
              for (var i = 0; i < games.length; i++) {
                var exp = games[i]["expiration"];
                var today = Date.now()/1000;
                var usage = ''
                var diff = Math.floor((exp - today) / 60 / 60 / 24);
                var progress = (diff / 7) > 11 ? 12 : Math.ceil((diff / 7));
                var color = "red";
                if(games[i]["state"]=='pause') {
                  color = "gray";
                  usage = '<span class="label label-red">\
                              <span class="label-text">' + games[i]["pause_days"] + '일 남음</span>\
                            </span>'
                  usage += '<span class="label label-gray">\
                          <img src="./assets/img/icon_times.png" alt="" />\
                          <span class="label-text">일시중지</span>\
                        </span>'
                  reuse = "<button type='button' class='btn' style='cursor:default'>연장하기</button>" +
                                '<button type="button" class="btn" style="cursor:default">일시중지</button>\
                                <button type="button" class="btn" style="cursor:default">이전요청</button>\
                                <button onClick="kakaoChannel();" type="button" class="btn btn-active">재시작</button>'

                } else {
                  if(exp > today) {
                    usage = '<span class="label label-red">\
                                <span class="label-text">' + diff + '일 남음</span>\
                              </span>'
                    usage += '<span class="label label-green">\
                            <img src="./assets/img/icon_check.png" alt="" />\
                            <span class="label-text">사용중</span>\
                          </span>'
                    reuse = "<button onClick='show_modal(\"" + games[i]["game"] + "\", \"" + games[i]["type"] + "\")' type='button' class='btn btn-active'>연장하기</button>" +
                                    "<button onClick='pause(\"" + games[i]["game"] + "\");'"+'type="button" class="btn btn-active">일시중지</button>\
                                    <button onClick="kakaoChannel();" type="button" class="btn btn-active">이전요청</button>\
                                    <button type="button" class="btn" style="cursor:default">재시작</button>'
                  } else {
                    color = "gray";
                    usage = '<span class="label label-gray">\
                              <img src="./assets/img/icon_times.png" alt="" />\
                              <span class="label-text">사용완료</span>\
                            </span>'
                    reuse = '<button onClick="kakaoChannel();" type="button" class="btn btn-active" >재시작</button>'
                  }
                }
                document.getElementById("service-wrapper").innerHTML += '\
                              <div class="service">\
                                <div class="service-header">\
                                  <h2 class="service-title">'+gamename(games[i]["game"])+'</h2>\
                                  <span class="label label-'+color+'">\
                                    <span class="label-text text-normal">만료일</span>\
                                    <span class="label-text">' + timeConverter(exp) + '</span>\
                                  </span>' + usage +
                                '</div>\
                                <div class="service-content">\
                                  <div class="progress progress-'+ progress +'">\
                                    <div class="progress-circle"></div>\
                                    <div class="progress-bar"></div>\
                                    <div class="progress-pattern">\
                                      <span class="circle"></span>\
                                      <span class="circle"></span>\
                                      <span class="circle"></span>\
                                      <span class="circle"></span>\
                                      <span class="circle"></span>\
                                      <span class="circle"></span>\
                                      <span class="circle"></span>\
                                      <span class="circle"></span>\
                                      <span class="circle"></span>\
                                      <span class="circle"></span>\
                                      <span class="circle"></span>\
                                      <span class="circle"></span>\
                                    </div>\
                                  </div>\
                                </div>\
                                <div class="service-action">' +
                                 reuse +
                                '</div>\
                              </div>\
                              '
              }
            },
         });


      </script>
      <main class="container">
        <div class="content">
          <div class="mypage">
            <span class="mypage-breadcrumb">
              <a href="/">홈</a>
              <a href="#">마이페이지</a>
            </span>

            <div class="mypage-header">
              <h1 class="title">마이페이지</h1>
            </div>

            <div class="mypage-section">
              <h2 class="title">개인정보 관리</h2>
              <dl class="field">
                <dt class="field-title">ID</dt>
                <dd class="field-text"><?php echo $userId?></dd>
              </dl>
              <a href='/index.php?logout=true' class="btn btn-leave">로그아웃</a>

            </div>

            <div class="mypage-section">
              <h2 class="title">보탐스마트 서비스 내역</h2>
              <div id="service-wrapper">
                <div class="service">
                  <div class="service-action">
                    <button onClick="kakaoChannel();" type="button" class="btn btn-active">무료 테스트 신청</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>

      <?php include "footer.php"?>
    </div>


    <div id="extend" class="modal" style="visibility:hidden;">
      <div class="dialog" role="dialog">
        <h1 class="dialog-title">보탐스마트 서비스 연장</h1>
        <div class="dialog-form">
          <div class="service-form">
            <dl class="modal-field">
              <dt class="modal-field-col">가격</dt>
              <dd class="modal-field-col">
                <span id="price"></span>
              </dd>
            </dl>
            <dl class="modal-field">
              <dt class="modal-field-col">이름</dt>
              <dd class="modal-field-col">
                <input type="text" class="text-input" id="name" value="" />
              </dd>
            </dl>
            <dl class="modal-field">
              <dt class="modal-field-col">이메일</dt>
              <dd class="modal-field-col">
                <input
                  type="email"
                  class="text-input"
                  value=""
                  id = "email"
                />
              </dd>
            </dl>
            <dl class="modal-field">
              <dt class="modal-field-col">전화번호</dt>
              <dd class="modal-field-col">
                <input type="tel" class="text-input" value="" id = "tel" />
              </dd>
            </dl>
          </div>
          <div class="check-list">
            <label class="checkbox">
              <input id="one-month" type="radio" name="period" checked onclick="oneMonth()"/>
              <span class="checkbox-text">1개월</span>
            </label>
            <label class="checkbox">
              <input id="three-month" type="radio" name="period" onclick="threeMonth()"/>
              <span class="checkbox-text">3개월</span>
            </label>
          </div>
        </div>
        <div class="dialog-btn">
          <button onClick="extend();" type="button" class="btn btn-confirm">확인</button>
          <button onClick="document.getElementById('extend').style.visibility='hidden';" type="button" class="btn">취소</button>
        </div>
      </div>
    </div>


    <script src="./assets/vendors/swiper/swiper-bundle.min.js"></script>
    <script src="./assets/js/app.js"></script>
      <script language="javascript" type="text/javascript" src="https://stdpay.inicis.com/stdjs/INIStdPay.js" charset="UTF-8"></script>

        <script type="text/javascript">
            function pay() {
                INIStdPay.pay('SendPayForm_id');
            }
        </script>

   <form id="SendPayForm_id" name="" method="POST" style="visibility:hidden;">

        <input type="text"    name="goodname" value="" >
        <input type="text"    name="buyername" value="" >
        <input type="text"    name="buyertel" value="" >
        <input type="text"    name="buyeremail" value="" >
        <input type="text"    name="price" value="" >
        <input type="hidden"  name="mid" value="<?php echo $mid?>" >
        <input type="hidden"  name="gopaymethod" value="Card" >
        <input type="hidden"  name="mKey" value="<?php echo $mKey?>" >
        <input type="hidden"  name="signature" value="" >
        <input type="hidden"  name="oid" value="<?php echo $orderNumber?>" >
        <input type="hidden"  name="timestamp" value="<?php echo $timestamp?>" >
        <input type="hidden"  name="version" value="1.0" >
        <input type="hidden"  name="currency" value="WON" >
        <input type="hidden"  name="acceptmethod" value="below1000" >
        <input type="hidden"  name="merchantData" value="" >
        <input type="hidden"  name="returnUrl" value="<?php echo $siteDomain ?>/INIStdPayReturn.php"  >
        <input type="hidden"  name="closeUrl" value="<?php echo $siteDomain ?>/close.php" >

   </form>

  </body>
</html>
