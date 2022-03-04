<?php
  include 'common.php';
?>
<!DOCTYPE html>
<html class="no-js" lang="ko">
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
    <meta property="og:url" content="https://bossline.gg/privacy.php">
    <!-- 트위터 OG태그 -->
    <meta name="twitter:card" content="summary">  
    <meta name="twitter:url" content="https://bossline.gg/privacy.php">
    <meta name="twitter:title" content="보탐스마트">
    <meta name="twitter:description" content="리니지M, 리니지2M, V4 - 보탐스마트 라인스마트 보탐봇 디스코드봇 보스타이머 보탐매니저">
    <meta name="twitter:image" content="https://bossline.gg/assets/img/img_logo.png">

    <title>개인정보처리방침 | Boss Line</title>
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

  <script src="https://developers.kakao.com/sdk/js/kakao.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Global site tag (gtag.js) - Google Ads: 392325495 -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-392325495"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'AW-392325495');
  </script>
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
              <a href="/linesmart.php">라인스마트</a>
            </div>
            <span class="gnb-line"></span>
            <div id='mp' class="gnb-auth">
              <a href="javascript:kakaoLogin();">
                로그인
              </a>
            </div>
          </div>
        </nav>

        <div
          class="cover"
          style="background-image: url(./assets/img/bg_cover04.jpg)"
        >
          <h1 class="cover-title">개인정보 처리방침</h1>
        </div>

        <?php include "mobileheader.php"?>
      </header>

      <main class="container">
        <div class="content">
          <div class="privacy-title">
조이스(이하 ‘회사’라 한다)는 개인정보 보호법 제30조에 따라 정보 주체의 개인정보를 보호하고 이와 관련한 고충을 신속하고 원활하게 처리할 수 있도록 하기 위하여 다음과 같이 개인정보 처리지침을 수립, 공개합니다.<br>
<br>
<strong>제1조 (개인정보의 처리목적)</strong><br>
회사는 다음의 목적을 위하여 개인정보를 처리합니다. 처리하고 있는 개인정보는 다음의 목적 이외의 용도로는 이용되지 않으며, 이용 목적이 변경되는 경우에는 개인정보보호법 제18조에 따라 별도의 동의를 받는 등 필요한 조치를 이행할 예정입니다.<br>
<br>
1. 홈페이지 회원 가입 및 관리<br>
회원 가입 의사 확인, 회원제 서비스 제공에 따른 본인 식별․인증, 회원자격 유지․관리, 제한적 본인확인제 시행에 따른 본인확인, 서비스 부정 이용 방지, 만 14세 미만 아동의 개인정보처리 시 법정대리인의 동의 여부 확인, 각종 고지․통지, 고충 처리 등을 목적으로 개인정보를 처리합니다.<br>
<br>
2. 재화 또는 서비스 제공<br>
물품 배송, 서비스 제공, 계약서 및 청구서 발송, 콘텐츠 제공, 맞춤서비스 제공, 본인인증, 연령인증, 요금 결제 및 정산, 채권추심 등을 목적으로 개인정보를 처리합니다.<br>
<br>
3. 고충 처리<br>
민원인의 신원 확인, 민원사항 확인, 사실조사를 위한 연락․통지, 처리 결과 통보 등의 목적으로 개인정보를 처리합니다.<br>
<br>
<strong>제2조 (개인정보의 처리 및 보유기간)</strong><br>
① 회사는 법령에 따른 개인정보 보유, 이용 기간 또는 정보주체로부터 개인정보를 수집 시에 동의 받은 개인정보 보유, 이용 기간 내에서 개인정보를 처리, 보유합니다.<br>
② 각각의 개인정보 처리 및 보유 기간은 다음과 같습니다.<br>
<br>
1. 홈페이지 회원 가입 및 관리 : 사업자/단체 홈페이지 탈퇴 시까지<br>
다만, 다음의 사유에 해당하는 경우에는 해당 사유 종료 시까지<br>
1) 관계 법령 위반에 따른 수사, 조사 등이 진행 중인 경우에는 해당 수사, 조사 종료 시까지<br>
2) 홈페이지 이용에 따른 채권 및 채무관계 잔존 시에는 해당 채권, 채무 관계 정산 시까지<br>
<br>
2. 재화 또는 서비스 제공 : 재화․서비스 공급완료 및 요금결제․정산 완료 시까지<br>
다만, 다음의 사유에 해당하는 경우에는 해당 기간 종료 시까지<br>
1) 「전자상거래 등에서의 소비자 보호에 관한 법률」에 따른 표시․광고, 계약내용 및 이행 등 거래에 관한 기록<br>
- 표시․광고에 관한 기록 : 6월<br>
- 계약 또는 청약 철회, 대금결제, 재화 등의 공급기록 : 5년<br>
- 소비자 불만 또는 분쟁 처리에 관한 기록 : 3년<br>
2) 「통신비밀보호법」 제41조에 따른 통신사실확인자료 보관<br>
- 가입자 전기통신일시, 개시․종료 시간, 상대방 가입자 번호, 사용도수, 발신기지국 위치추적자료 : 1년<br>
- 컴퓨터 통신, 인터넷 로그 기록자료, 접속지 추적자료 : 3개월<br>
<br>
<strong>제5조(이용자 및 법정대리인의 권리와 그 행사 방법)</strong><br>
<br>
① 정보주체는 회사에 대해 언제든지 다음 각 호의 개인정보 보호 관련 권리를 행사할 수 있습니다.<br>
1. 개인정보 열람 요구<br>
2. 오류 등이 있을 경우 정정 요구<br>
3. 삭제요구<br>
4. 처리정지 요구<br>
② 제1항에 따른 권리 행사는 회사에 대해 서면, 전화, 전자우편, 모사전송(FAX) 등을 통하여 하실 수 있으며 회사는 이에 대해 지체없이 조치하겠습니다.<br>
③ 정보주체가 개인정보의 오류 등에 대한 정정 또는 삭제를 요구한 경우에는 회사는 정정 또는 삭제를 완료할 때까지 당해 개인정보를 이용하거나 제공하지 않습니다.<br>
④ 제1항에 따른 권리 행사는 정보주체의 법정대리인이나 위임을 받은 자 등 대리인을 통하여 하실 수 있습니다. 이 경우 개인정보 보호법 시행규칙 별지 제11호 서식에 따른 위임장을 제출하셔야 합니다.<br>
⑤ 정보주체는 개인정보 보호법 등 관계 법령을 위반하여 회사가 처리하고 있는 정보주체 본인이나 타인의 개인정보 및 사생활을 침해하여서는 아니 됩니다.<br>
<br>
<strong>제6조(처리하는 개인정보 항목)</strong><br>
회사는 다음의 개인정보 항목을 처리하고 있습니다.<br>
<br>
1. 홈페이지 회원 가입 및 관리<br>
필수항목 : 성명, 생년월일, 아이디, 비밀번호, 주소, 전화번호, 성별, 이메일주소, 아이핀번호<br>
선택항목 : 관심 분야<br>
<br>
2. 재화 또는 서비스 제공<br>
필수항목 : 성명, 생년월일, 아이디, 비밀번호, 주소, 전화번호, 이메일주소, 아이핀번호, 신용카드번호, 은행계좌정보 등 결제정보<br>
선택항목 : 관심분야, 과거 구매내역<br>
<br>
3. 인터넷 서비스 이용과정에서 아래 개인정보 항목이 자동으로 생성되어 수집될 수 있습니다.<br>
IP주소, 쿠키, MAC주소, 서비스 이용기록, 방문기록, 불량 이용기록 등<br>
<br>
<strong>제7조(개인정보의 파기)</strong><br>
① 회사는 개인정보 보유 기간의 경과, 처리목적 달성 등 개인정보가 불필요하게 되었을 때에는 지체없이 해당 개인정보를 파기합니다.<br>
② 정보주체로부터 동의받은 개인정보 보유 기간이 경과하거나 처리목적이 달성되었음에도 불구하고 다른 법령에 따라 개인정보를 계속 보존하여야 하는 경우에는, 해당 개인정보를 별도의 데이터베이스(DB)로 옮기거나 보관장소를 달리하여 보존합니다.<br>
③ 개인정보 파기의 절차 및 방법은 다음과 같습니다.<br>
1. 파기 절차<br>
회사는 파기 사유가 발생한 개인정보를 선정하고, 회사의 개인정보 보호책임자의 승인을 받아 개인정보를 파기합니다.<br>
2. 파기 방법<br>
회사는 전자적 파일 형태로 기록․저장된 개인정보는 기록을 재생할 수 없도록 로우레밸포멧(Low Level Format) 등의 방법을 이용하여 파기하며, 종이 문서에 기록․저장된 개인정보는 분쇄기로 분쇄하거나 소각하여 파기합니다.<br>
<br>
<strong>제8조(개인정보의 안전성 확보조치)</strong><br>
회사는 개인정보의 안전성 확보를 위해 다음과 같은 조치를 하고 있습니다.<br>
1. 관리적 조치 : 내부관리계획 수립 및 시행, 정기적 직원 교육 등<br>
2. 기술적 조치 : 개인정보처리시스템 등의 접근 권한 관리, 접근통제시스템 설치, 고유 식별정보<br>
등의 암호화, 보안프로그램 설치<br>
3. 물리적 조치 : 전산실, 자료보관실 등의 접근통제<br>
<br>
<strong>제9조(개인정보 자동 수집 장치의 설치∙운영 및 거부에 관한 사항)</strong><br>
① 회사는 이용자에게 개별적인 맞춤 서비스를 제공하기 위해 이용정보를 저장하고 수시로 불러오는 ‘쿠키(cookie)’를 사용합니다.<br>
② 쿠키는 웹사이트를 운영하는데 이용되는 서버(http)가 이용자의 컴퓨터 브라우저에 보내는 소량의 정보이며 이용자들의 컴퓨터 내의 하드디스크에 저장되기도 합니다.<br>
가. 쿠키의 사용 목적: 이용자가 방문한 각 서비스와 웹 사이트들에 대한 방문 및 이용형태, 인기 검색어, 보안접속 여부, 등을 파악하여 이용자에게 최적화된 정보 제공을 위해 사용됩니다.<br>
나. 쿠키의 설치∙운영 및 거부 : 웹브라우저 상단의 도구>인터넷 옵션>개인정보 메뉴의 옵션 설정을 통해 쿠키 저장을 거부 할 수 있습니다.<br>
다. 쿠키 저장을 거부할 경우 맞춤형 서비스 이용에 어려움이 발생할 수 있습니다.<br>
<br>
<strong>제10조(개인정보 보호책임자)</strong><br>
① 회사는 개인정보 처리에 관한 업무를 총괄해서 책임지고, 개인정보 처리와 관련한 정보주체의 불만 처리 및 피해구제 등을 위하여 아래와 같이 개인정보 보호책임자를 지정하고 있습니다.<br>
<br>
▶ 개인정보 보호책임자<br>
성명 : 김종우<br>
직책 : 대표<br>
연락처 : 010-2593-2430, kjw2430@gmail.com, <팩스번호><br>
※ 개인정보 보호 담당부서로 연결됩니다.<br>
<br>
▶ 개인정보 보호 담당부서<br>
부서명 : 운영팀<br>
담당자 : 김종우<br>
연락처 : 010-2593-2430, kjw2430@gmail.com<br>
<br>
② 정보주체께서는 회사의 서비스(또는 사업)을 이용하시면서 발생한 모든 개인정보 보호 관련 문의, 불만 처리, 피해구제 등에 관한 사항을 개인정보 보호책임자 및 담당부서로 문의하실 수 있습니다. 회사는 정보주체의 문의에 대해 지체없이 답변 및 처리해드릴 것입니다.<br>
<br>
<strong>제11조(개인정보 열람청구)</strong><br>
정보주체는 개인정보 보호법 제35조에 따른 개인정보의 열람 청구를 아래의 부서에 할 수 있습니다. 회사는 정보주체의 개인정보 열람 청구가 신속하게 처리되도록 노력하겠습니다.<br>
<br>
▶ 개인정보 열람청구 접수․처리 부서<br>
부서명 : 운영팀<br>
담당자 : 김종우<br>
연락처 : 010-2593-2430, kjw2430@gmail.com<br>
<br>
<strong>제12조(권익침해 구제 방법)</strong><br>
정보주체는 아래의 기관에 대해 개인정보 침해에 대한 피해구제, 상담 등을 문의하실 수 있습니다.<br>
<br>
▶ 개인정보 침해신고센터 (한국인터넷진흥원 운영)<br>
- 소관 업무 : 개인정보 침해사실 신고, 상담 신청<br>
- 홈페이지 : privacy.kisa.or.kr<br>
- 전화 : (국번없이) 118<br>
- 주소 : (58324) 전남 나주시 진흥길 9(빛가람동 301-2) 3층 개인정보침해신고센터<br>
<br>
▶ 개인정보 분쟁조정위원회<br>
- 소관업무 : 개인정보 분쟁조정신청, 집단분쟁조정 (민사적 해결)<br>
- 홈페이지 : www.kopico.go.kr<br>
- 전화 : (국번없이) 1833-6972<br>
- 주소 : (03171)서울특별시 종로구 세종대로 209 정부서울청사 4층<br>
<br>
▶ 대검찰청 사이버범죄수사단 : 02-3480-3573 (www.spo.go.kr)<br>
▶ 경찰청 사이버안전국 : 182 (http://cyberbureau.police.go.kr)<br>
<br>
<!-- 사이트 오픈일에 맞게 수정 필요 --><br>
<strong>제13조(개인정보 처리방침 시행 및 변경)</strong><br>
이 개인정보 처리방침은 2021. 3. 5부터 적용됩니다.
          </div>
        </div>
      </main>
      <?php include "footer.php"?>
    </div>

    <script src="./assets/vendors/swiper/swiper-bundle.min.js"></script>
    <script src="./assets/js/app.js"></script>
  </body>
</html>
