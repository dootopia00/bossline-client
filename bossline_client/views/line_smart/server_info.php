<div ng-controller="serverInfoCtrl" ng-init="init()" ng-if="subType=='server_info'">
  <div class="content" >
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
            서버정보 
          </span>
        </h2>
      </div>
      <div class="title-group-col">
        <!--MEMO: is-open 클래스명 추가 시 하위 콘텐츠가 열립니다. -->
        <div class="info-card js-info-card-container">
          <div class="info-card-header">
            <h3>
              <img src="./assets/img/img_premium.png" alt="PREMIUM" />
            </h3>
            <button type="button" class="info-card-btn">
              <img src="./assets/img/icon_pencil.png" alt="수정" />
            </button>
            <button type="button" class="info-card-btn">
              <img src="./assets/img/icon_enter.png" alt="확인" />
            </button>
          </div>
          <div class="info-card-body">
            <strong class="game-id">
              IDIDIDIDIDIDIDIDIDIDIDIDIDIDIDIDIDIDIDID
            </strong>
            <dl>
              <dt>
                <span class="icon">
                  <img src="./assets/img/icon_info-card01.png" alt="" />
                </span>
                <span>혈맹</span>
              </dt>
              <!--MEMO: readonly 속성 삭제 시 입력 가능한 상태가 됩니다.-->
              <dd><input type="text" value="귀족" readonly /></dd>
            </dl>
            <dl>
              <dt>
                <span class="icon">
                  <img src="./assets/img/icon_info-card02.png" alt="" />
                </span>
                <span>방어</span>
              </dt>
              <dd><input type="text" value="210" /></dd>
            </dl>
            <dl>
              <dt>
                <span class="icon">
                  <img src="./assets/img/icon_info-card03.png" alt="" />
                </span>
                <span>레벨</span>
              </dt>
              <dd><input type="text" value="65" readonly /></dd>
            </dl>
            <dl>
              <dt>
                <span class="icon">
                  <img src="./assets/img/icon_info-card04.png" alt="" />
                </span>
                <span>변신</span>
              </dt>
              <dd><input type="text" value="쿠막" /></dd>
            </dl>
            <dl>
              <dt>
                <span class="icon">
                  <img src="./assets/img/icon_info-card05.png" alt="" />
                </span>
                <span>직업</span>
              </dt>
              <dd><input type="text" value="기사" /></dd>
            </dl>
          </div>
          <div class="info-card-bottom">
            <button
              type="button"
              class="info-card-btn js-info-card-toggle"
            >
              <img
                src="./assets/img/icon_arrow-bottom.png"
                alt="열기/닫기"
              />
            </button>
          </div>
        </div>
      </div>
    </header>

    <div class="server-info">
      <span class="select">
        <select name="" id="">
          <option value="">서버정보</option>
          <option value="">군터1</option>
          <option value="">군터2</option>
          <option value="">군터3</option>
          <option value="">군터4</option>
        </select>
      </span>

      <div class="is-desktop">
        <table class="table">
          <thead>
            <tr>
              <th>서버</th>
              <th>라인</th>
              <th>서버내쟁</th>
              <th>보스통제</th>
              <th>자리통제</th>
              <th>필드/던전 통제</th>
              <th>세율</th>
              <th>막피</th>
              <th>작업장</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>오필리아1</td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>드래곤</span>
                    <span class="badge">모집중</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>8:2</span>
                    <span>드래곤:학살</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>영웅보스</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>아덴지역</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>상아탑 3층</span>
                    <span>3시</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>5%</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>다수</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>오렌까지</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
            </tr>

            <tr>
              <td>오필리아1</td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>드래곤</span>
                    <span class="badge">모집중</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>8:2</span>
                    <span>드래곤:학살</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>영웅보스</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>아덴지역</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>상아탑 3층</span>
                    <span>3시</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>5%</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>다수</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>오렌까지</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
            </tr>

            <tr>
              <td>오필리아1</td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>드래곤</span>
                    <span class="badge">모집중</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>8:2</span>
                    <span>드래곤:학살</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>영웅보스</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>아덴지역</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>상아탑 3층</span>
                    <span>3시</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>5%</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>다수</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>오렌까지</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
            </tr>

            <tr>
              <td>오필리아1</td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>드래곤</span>
                    <span class="badge">모집중</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>8:2</span>
                    <span>드래곤:학살</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>영웅보스</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>아덴지역</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>상아탑 3층</span>
                    <span>3시</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>5%</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>다수</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>오렌까지</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
            </tr>

            <tr>
              <td>오필리아1</td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>드래곤</span>
                    <span class="badge">모집중</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>8:2</span>
                    <span>드래곤:학살</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>영웅보스</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>아덴지역</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>상아탑 3층</span>
                    <span>3시</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>5%</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>다수</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>오렌까지</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
            </tr>

            <tr>
              <td>오필리아1</td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>드래곤</span>
                    <span class="badge">모집중</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>8:2</span>
                    <span>드래곤:학살</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>영웅보스</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>아덴지역</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>상아탑 3층</span>
                    <span>3시</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>5%</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>다수</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>오렌까지</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
            </tr>

            <tr>
              <td>오필리아1</td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>드래곤</span>
                    <span class="badge">모집중</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>8:2</span>
                    <span>드래곤:학살</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>영웅보스</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>아덴지역</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>상아탑 3층</span>
                    <span>3시</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>5%</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>다수</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>오렌까지</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
            </tr>

            <tr>
              <td>오필리아1</td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>드래곤</span>
                    <span class="badge">모집중</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>8:2</span>
                    <span>드래곤:학살</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>영웅보스</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>아덴지역</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>상아탑 3층</span>
                    <span>3시</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>5%</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>다수</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>오렌까지</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
            </tr>

            <tr>
              <td>오필리아1</td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>드래곤</span>
                    <span class="badge">모집중</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>8:2</span>
                    <span>드래곤:학살</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>영웅보스</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>아덴지역</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>상아탑 3층</span>
                    <span>3시</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>5%</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>다수</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>오렌까지</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
            </tr>

            <tr>
              <td>오필리아1</td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>드래곤</span>
                    <span class="badge">모집중</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>8:2</span>
                    <span>드래곤:학살</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>영웅보스</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>아덴지역</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>상아탑 3층</span>
                    <span>3시</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>5%</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>다수</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
              <td>
                <div class="memo-item">
                  <div>
                    <span>오렌까지</span>
                  </div>
                  <button type="button">
                    <img src="./assets/img/icon_pencil.png" alt="메모" />
                  </button>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="is-mobile">
        <div class="server-list" role="list">
          <div class="server-list-item" role="listitem">
            <dl>
              <dt>서버</dt>
              <dd>오필리아1</dd>
            </dl>
            <dl>
              <dt>
                <span>라인</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>
                <div class="memo-item">
                  <div>
                    <span>드래곤</span>
                    <span class="badge">모집중</span>
                  </div>
                </div>
              </dd>
            </dl>
            <dl>
              <dt>
                <span>서버내쟁</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>
                <div class="memo-item">
                  <div>
                    <span>8:2</span>
                    <span>드래곤:학살</span>
                  </div>
                </div>
              </dd>
            </dl>
            <dl>
              <dt>
                <span>보스통제</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>영웅보스</dd>
            </dl>
            <dl>
              <dt>
                <span>자리통제</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>X</dd>
            </dl>
            <dl>
              <dt>
                <span>필드/던전통제</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>
                <div class="memo-item">
                  <div>
                    <span>상아탑 3층</span>
                    <span>3시</span>
                  </div>
                </div>
              </dd>
            </dl>
            <dl>
              <dt>
                <span>세율</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>5%</dd>
            </dl>
            <dl>
              <dt>
                <span>막피</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>X</dd>
            </dl>
            <dl>
              <dt>
                <span>작업장</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>오렌까지</dd>
            </dl>
          </div>

          <div class="server-list-item" role="listitem">
            <dl>
              <dt>서버</dt>
              <dd>오필리아1</dd>
            </dl>
            <dl>
              <dt>
                <span>라인</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>
                <div class="memo-item">
                  <div>
                    <span>드래곤</span>
                    <span class="badge">모집중</span>
                  </div>
                </div>
              </dd>
            </dl>
            <dl>
              <dt>
                <span>서버내쟁</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>
                <div class="memo-item">
                  <div>
                    <span>8:2</span>
                    <span>드래곤:학살</span>
                  </div>
                </div>
              </dd>
            </dl>
            <dl>
              <dt>
                <span>보스통제</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>영웅보스</dd>
            </dl>
            <dl>
              <dt>
                <span>자리통제</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>X</dd>
            </dl>
            <dl>
              <dt>
                <span>필드/던전통제</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>
                <div class="memo-item">
                  <div>
                    <span>상아탑 3층</span>
                    <span>3시</span>
                  </div>
                </div>
              </dd>
            </dl>
            <dl>
              <dt>
                <span>세율</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>5%</dd>
            </dl>
            <dl>
              <dt>
                <span>막피</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>X</dd>
            </dl>
            <dl>
              <dt>
                <span>작업장</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>오렌까지</dd>
            </dl>
          </div>

          <div class="server-list-item" role="listitem">
            <dl>
              <dt>서버</dt>
              <dd>오필리아1</dd>
            </dl>
            <dl>
              <dt>
                <span>라인</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>
                <div class="memo-item">
                  <div>
                    <span>드래곤</span>
                    <span class="badge">모집중</span>
                  </div>
                </div>
              </dd>
            </dl>
            <dl>
              <dt>
                <span>서버내쟁</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>
                <div class="memo-item">
                  <div>
                    <span>8:2</span>
                    <span>드래곤:학살</span>
                  </div>
                </div>
              </dd>
            </dl>
            <dl>
              <dt>
                <span>보스통제</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>영웅보스</dd>
            </dl>
            <dl>
              <dt>
                <span>자리통제</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>X</dd>
            </dl>
            <dl>
              <dt>
                <span>필드/던전통제</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>
                <div class="memo-item">
                  <div>
                    <span>상아탑 3층</span>
                    <span>3시</span>
                  </div>
                </div>
              </dd>
            </dl>
            <dl>
              <dt>
                <span>세율</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>5%</dd>
            </dl>
            <dl>
              <dt>
                <span>막피</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>X</dd>
            </dl>
            <dl>
              <dt>
                <span>작업장</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>오렌까지</dd>
            </dl>
          </div>

          <div class="server-list-item" role="listitem">
            <dl>
              <dt>서버</dt>
              <dd>오필리아1</dd>
            </dl>
            <dl>
              <dt>
                <span>라인</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>
                <div class="memo-item">
                  <div>
                    <span>드래곤</span>
                    <span class="badge">모집중</span>
                  </div>
                </div>
              </dd>
            </dl>
            <dl>
              <dt>
                <span>서버내쟁</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>
                <div class="memo-item">
                  <div>
                    <span>8:2</span>
                    <span>드래곤:학살</span>
                  </div>
                </div>
              </dd>
            </dl>
            <dl>
              <dt>
                <span>보스통제</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>영웅보스</dd>
            </dl>
            <dl>
              <dt>
                <span>자리통제</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>X</dd>
            </dl>
            <dl>
              <dt>
                <span>필드/던전통제</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>
                <div class="memo-item">
                  <div>
                    <span>상아탑 3층</span>
                    <span>3시</span>
                  </div>
                </div>
              </dd>
            </dl>
            <dl>
              <dt>
                <span>세율</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>5%</dd>
            </dl>
            <dl>
              <dt>
                <span>막피</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>X</dd>
            </dl>
            <dl>
              <dt>
                <span>작업장</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>오렌까지</dd>
            </dl>
          </div>

          <div class="server-list-item" role="listitem">
            <dl>
              <dt>서버</dt>
              <dd>오필리아1</dd>
            </dl>
            <dl>
              <dt>
                <span>라인</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>
                <div class="memo-item">
                  <div>
                    <span>드래곤</span>
                    <span class="badge">모집중</span>
                  </div>
                </div>
              </dd>
            </dl>
            <dl>
              <dt>
                <span>서버내쟁</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>
                <div class="memo-item">
                  <div>
                    <span>8:2</span>
                    <span>드래곤:학살</span>
                  </div>
                </div>
              </dd>
            </dl>
            <dl>
              <dt>
                <span>보스통제</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>영웅보스</dd>
            </dl>
            <dl>
              <dt>
                <span>자리통제</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>X</dd>
            </dl>
            <dl>
              <dt>
                <span>필드/던전통제</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>
                <div class="memo-item">
                  <div>
                    <span>상아탑 3층</span>
                    <span>3시</span>
                  </div>
                </div>
              </dd>
            </dl>
            <dl>
              <dt>
                <span>세율</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>5%</dd>
            </dl>
            <dl>
              <dt>
                <span>막피</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>X</dd>
            </dl>
            <dl>
              <dt>
                <span>작업장</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>오렌까지</dd>
            </dl>
          </div>

          <div class="server-list-item" role="listitem">
            <dl>
              <dt>서버</dt>
              <dd>오필리아1</dd>
            </dl>
            <dl>
              <dt>
                <span>라인</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>
                <div class="memo-item">
                  <div>
                    <span>드래곤</span>
                    <span class="badge">모집중</span>
                  </div>
                </div>
              </dd>
            </dl>
            <dl>
              <dt>
                <span>서버내쟁</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>
                <div class="memo-item">
                  <div>
                    <span>8:2</span>
                    <span>드래곤:학살</span>
                  </div>
                </div>
              </dd>
            </dl>
            <dl>
              <dt>
                <span>보스통제</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>영웅보스</dd>
            </dl>
            <dl>
              <dt>
                <span>자리통제</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>X</dd>
            </dl>
            <dl>
              <dt>
                <span>필드/던전통제</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>
                <div class="memo-item">
                  <div>
                    <span>상아탑 3층</span>
                    <span>3시</span>
                  </div>
                </div>
              </dd>
            </dl>
            <dl>
              <dt>
                <span>세율</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>5%</dd>
            </dl>
            <dl>
              <dt>
                <span>막피</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>X</dd>
            </dl>
            <dl>
              <dt>
                <span>작업장</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>오렌까지</dd>
            </dl>
          </div>

          <div class="server-list-item" role="listitem">
            <dl>
              <dt>서버</dt>
              <dd>오필리아1</dd>
            </dl>
            <dl>
              <dt>
                <span>라인</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>
                <div class="memo-item">
                  <div>
                    <span>드래곤</span>
                    <span class="badge">모집중</span>
                  </div>
                </div>
              </dd>
            </dl>
            <dl>
              <dt>
                <span>서버내쟁</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>
                <div class="memo-item">
                  <div>
                    <span>8:2</span>
                    <span>드래곤:학살</span>
                  </div>
                </div>
              </dd>
            </dl>
            <dl>
              <dt>
                <span>보스통제</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>영웅보스</dd>
            </dl>
            <dl>
              <dt>
                <span>자리통제</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>X</dd>
            </dl>
            <dl>
              <dt>
                <span>필드/던전통제</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>
                <div class="memo-item">
                  <div>
                    <span>상아탑 3층</span>
                    <span>3시</span>
                  </div>
                </div>
              </dd>
            </dl>
            <dl>
              <dt>
                <span>세율</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>5%</dd>
            </dl>
            <dl>
              <dt>
                <span>막피</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>X</dd>
            </dl>
            <dl>
              <dt>
                <span>작업장</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>오렌까지</dd>
            </dl>
          </div>

          <div class="server-list-item" role="listitem">
            <dl>
              <dt>서버</dt>
              <dd>오필리아1</dd>
            </dl>
            <dl>
              <dt>
                <span>라인</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>
                <div class="memo-item">
                  <div>
                    <span>드래곤</span>
                    <span class="badge">모집중</span>
                  </div>
                </div>
              </dd>
            </dl>
            <dl>
              <dt>
                <span>서버내쟁</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>
                <div class="memo-item">
                  <div>
                    <span>8:2</span>
                    <span>드래곤:학살</span>
                  </div>
                </div>
              </dd>
            </dl>
            <dl>
              <dt>
                <span>보스통제</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>영웅보스</dd>
            </dl>
            <dl>
              <dt>
                <span>자리통제</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>X</dd>
            </dl>
            <dl>
              <dt>
                <span>필드/던전통제</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>
                <div class="memo-item">
                  <div>
                    <span>상아탑 3층</span>
                    <span>3시</span>
                  </div>
                </div>
              </dd>
            </dl>
            <dl>
              <dt>
                <span>세율</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>5%</dd>
            </dl>
            <dl>
              <dt>
                <span>막피</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>X</dd>
            </dl>
            <dl>
              <dt>
                <span>작업장</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>오렌까지</dd>
            </dl>
          </div>

          <div class="server-list-item" role="listitem">
            <dl>
              <dt>서버</dt>
              <dd>오필리아1</dd>
            </dl>
            <dl>
              <dt>
                <span>라인</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>
                <div class="memo-item">
                  <div>
                    <span>드래곤</span>
                    <span class="badge">모집중</span>
                  </div>
                </div>
              </dd>
            </dl>
            <dl>
              <dt>
                <span>서버내쟁</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>
                <div class="memo-item">
                  <div>
                    <span>8:2</span>
                    <span>드래곤:학살</span>
                  </div>
                </div>
              </dd>
            </dl>
            <dl>
              <dt>
                <span>보스통제</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>영웅보스</dd>
            </dl>
            <dl>
              <dt>
                <span>자리통제</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>X</dd>
            </dl>
            <dl>
              <dt>
                <span>필드/던전통제</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>
                <div class="memo-item">
                  <div>
                    <span>상아탑 3층</span>
                    <span>3시</span>
                  </div>
                </div>
              </dd>
            </dl>
            <dl>
              <dt>
                <span>세율</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>5%</dd>
            </dl>
            <dl>
              <dt>
                <span>막피</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>X</dd>
            </dl>
            <dl>
              <dt>
                <span>작업장</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>오렌까지</dd>
            </dl>
          </div>

          <div class="server-list-item" role="listitem">
            <dl>
              <dt>서버</dt>
              <dd>오필리아1</dd>
            </dl>
            <dl>
              <dt>
                <span>라인</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>
                <div class="memo-item">
                  <div>
                    <span>드래곤</span>
                    <span class="badge">모집중</span>
                  </div>
                </div>
              </dd>
            </dl>
            <dl>
              <dt>
                <span>서버내쟁</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>
                <div class="memo-item">
                  <div>
                    <span>8:2</span>
                    <span>드래곤:학살</span>
                  </div>
                </div>
              </dd>
            </dl>
            <dl>
              <dt>
                <span>보스통제</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>영웅보스</dd>
            </dl>
            <dl>
              <dt>
                <span>자리통제</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>X</dd>
            </dl>
            <dl>
              <dt>
                <span>필드/던전통제</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>
                <div class="memo-item">
                  <div>
                    <span>상아탑 3층</span>
                    <span>3시</span>
                  </div>
                </div>
              </dd>
            </dl>
            <dl>
              <dt>
                <span>세율</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>5%</dd>
            </dl>
            <dl>
              <dt>
                <span>막피</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>X</dd>
            </dl>
            <dl>
              <dt>
                <span>작업장</span>
                <button type="button">
                  <img src="./assets/img/icon_pencil.png" alt="메모" />
                </button>
              </dt>
              <dd>오렌까지</dd>
            </dl>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>