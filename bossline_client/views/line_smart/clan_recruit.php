

<div ng-controller="clanRecruitCtrl" ng-init="init()" ng-if="subType=='clan_recruit'" class="clan-recruit">
  <div class="search-form">
    <div class="search-form-tab">
      <!-- is-active -->
      <button type="button" class="btn btn-red" ng-click="onClickClanType('world')" ng-class="{'is-active' : clanType == 'world'}">
        월드
      </button>
      <button type="button" class="btn btn-blue"  ng-click="onClickClanType('line')" ng-class="{'is-active' : clanType == 'line'}">라인</button>
      <button type="button" class="btn btn-green" ng-click="onClickClanType('neutrality')" ng-class="{'is-active' : clanType == 'neutrality'}">중립</button>
    </div>
    <div class="search-form-field">
      <div class="form-field">
        <label class="form-field-item">
          <span>방어</span>
          <input type="text" placeholder="방어력 입력" />
        </label>
        <label class="form-field-item">
          <span>LV</span>
          <input type="text" placeholder="레벨을 입력하세요" />
        </label>
        <label class="form-field-item">
          <span>서버</span>
          <input type="text" placeholder="서버명 입력" />
        </label>
      </div>
      <div class="search-btn">
        <button type="button">
          <span>검색</span>
          <img src="./assets/img/icon_search.png" alt="" />
        </button>
      </div>
    </div>
  </div>

  <div class="select-section">
    <span class="select">
      <select name="" id="">
        <option value="">서버정보</option>
        <option value="">군터1</option>
        <option value="">군터2</option>
        <option value="">군터3</option>
        <option value="">군터4</option>
      </select>
    </span>
  </div>

  <div class="user-list">
    <div class="user-list-item" ng-repeat="it in clanPayList">
      <div class="user-card">
        <div class="user-card-header">
          <div class="avatar">
            <span class="avatar-img">
              <img src="https://picsum.photos/100/100" alt="" />
            </span>
            <span class="avatar-text">{{ it.server_name }}</span>
            <!--MEMO: btn-red, btn-blue, btn-green-->

            <span class="btn btn-blue btn-sm" ng-if="it.recruit_type == 'line'">라인</span>
            <span class="btn btn-green btn-sm" ng-if="it.recruit_type == 'normal'">중립</span>
            <span class="btn btn-red btn-sm" ng-if="it.recruit_type == 'world'">월드</span>
          </div>
        </div>
        <div class="user-card-body">
          <dl>
            <dt>{{ it.defense }}</dt>
            <dd>우우웅(위블로)</dd>
          </dl>
          <dl>
            <dt>스펙</dt>
            <dd>
              <span class="stat-item">
                <span class="stat-item-icon">
                  <img
                    src="./assets/img/icon_stat-item01.png"
                    alt=""
                  />
                </span>
                <span>{{ it.defense }}</span>
                <span class="stat-item-arrow">
                  <img
                    src="./assets/img/icon_arrow-up.png"
                    alt="상승"
                  />
                </span>
              </span>
              <span class="stat-item">
                <span class="stat-item-icon">
                  <img
                    src="./assets/img/icon_info-card03.png"
                    alt=""
                  />
                </span>
                <span>{{ it.level }}</span>
                <span class="stat-item-arrow">
                  <img
                    src="./assets/img/icon_arrow-up.png"
                    alt="상승"
                  />
                </span>
              </span>
            </dd>
          </dl>
        </div>
      </div>
    </div>


    
  </div>

  <div class="is-desktop">
    <table class="table">
      <thead>
        <tr>
          <th>등급</th>
          <th>서버</th>
          <th>레벨</th>
          <th>스펙</th>
          <th>소개</th>
        </tr>
      </thead>
      <tbody>
        <tr ng-repeat="it in clanList">
          <td>

            <span class="btn btn-blue btn-sm" ng-if="it.recruit_type == 'line'">라인</span>
            <span class="btn btn-green btn-sm" ng-if="it.recruit_type == 'normal'">중립</span>
            <span class="btn btn-red btn-sm" ng-if="it.recruit_type == 'world'">월드</span>

          </td>
          <td>
            <span class="badge">{{ it.server_name }}</span>
          </td>
          <td>{{ it.level }}</td>
          <td>
            <span class="stat-item">
              <span class="stat-item-icon">
                <img src="./assets/img/icon_stat-item01.png" alt="" />
              </span>
              <span>방어</span>
              <span>{{ it.defense }}</span>
              <span class="stat-item-arrow">
                <img
                  src="./assets/img/icon_arrow-up.png"
                  alt="상승"
                />
              </span>
            </span>
            <span class="stat-item">
              <span class="stat-item-icon">
                <img src="./assets/img/icon_info-card03.png" alt="" />
              </span>
              <span>레벨</span>
              <span>{{ it.level }}</span>
              <span class="stat-item-arrow">
                <img
                  src="./assets/img/icon_arrow-up.png"
                  alt="상승"
                />
              </span>
            </span>
          </td>
          <td class="text-left">{{ it.description }}</td>
        </tr>
        



        
      </tbody>
    </table>
  </div>

  <div class="is-mobile">
    <div class="table-list" role="list">
      <div class="table-list-item" role="listitem">
        <div class="top">
          <span class="btn btn-red btn-sm">월드</span>
          <span class="badge">아리아</span>
          <dl>
            <dt>레벨</dt>
            <dd>11</dd>
          </dl>
        </div>
        <dl>
          <dt>스펙</dt>
          <dd>
            <span class="stat-item">
              <span class="stat-item-icon">
                <img src="./assets/img/icon_stat-item01.png" alt="" />
              </span>
              <span>방어</span>
              <span>210</span>
              <span class="stat-item-arrow">
                <img
                  src="./assets/img/icon_arrow-up.png"
                  alt="상승"
                />
              </span>
            </span>
            <span class="stat-item">
              <span class="stat-item-icon">
                <img src="./assets/img/icon_info-card03.png" alt="" />
              </span>
              <span>레벨</span>
              <span>210</span>
              <span class="stat-item-arrow">
                <img
                  src="./assets/img/icon_arrow-up.png"
                  alt="상승"
                />
              </span>
            </span>
          </dd>
        </dl>
        <dl>
          <dt>소개</dt>
          <dd>편한 게임 환영합니다.</dd>
        </dl>
      </div>

      <div class="table-list-item" role="listitem">
        <div class="top">
          <span class="btn btn-red btn-sm">월드</span>
          <span class="badge">아리아</span>
          <dl>
            <dt>레벨</dt>
            <dd>11</dd>
          </dl>
        </div>
        <dl>
          <dt>스펙</dt>
          <dd>
            <span class="stat-item">
              <span class="stat-item-icon">
                <img src="./assets/img/icon_stat-item01.png" alt="" />
              </span>
              <span>방어</span>
              <span>210</span>
              <span class="stat-item-arrow">
                <img
                  src="./assets/img/icon_arrow-up.png"
                  alt="상승"
                />
              </span>
            </span>
            <span class="stat-item">
              <span class="stat-item-icon">
                <img src="./assets/img/icon_info-card03.png" alt="" />
              </span>
              <span>레벨</span>
              <span>210</span>
              <span class="stat-item-arrow">
                <img
                  src="./assets/img/icon_arrow-up.png"
                  alt="상승"
                />
              </span>
            </span>
          </dd>
        </dl>
        <dl>
          <dt>소개</dt>
          <dd>편한 게임 환영합니다.</dd>
        </dl>
      </div>

      <div class="table-list-item" role="listitem">
        <div class="top">
          <span class="btn btn-red btn-sm">월드</span>
          <span class="badge">아리아</span>
          <dl>
            <dt>레벨</dt>
            <dd>11</dd>
          </dl>
        </div>
        <dl>
          <dt>스펙</dt>
          <dd>
            <span class="stat-item">
              <span class="stat-item-icon">
                <img src="./assets/img/icon_stat-item01.png" alt="" />
              </span>
              <span>방어</span>
              <span>210</span>
              <span class="stat-item-arrow">
                <img
                  src="./assets/img/icon_arrow-up.png"
                  alt="상승"
                />
              </span>
            </span>
            <span class="stat-item">
              <span class="stat-item-icon">
                <img src="./assets/img/icon_info-card03.png" alt="" />
              </span>
              <span>레벨</span>
              <span>210</span>
              <span class="stat-item-arrow">
                <img
                  src="./assets/img/icon_arrow-up.png"
                  alt="상승"
                />
              </span>
            </span>
          </dd>
        </dl>
        <dl>
          <dt>소개</dt>
          <dd>편한 게임 환영합니다.</dd>
        </dl>
      </div>

      <div class="table-list-item" role="listitem">
        <div class="top">
          <span class="btn btn-red btn-sm">월드</span>
          <span class="badge">아리아</span>
          <dl>
            <dt>레벨</dt>
            <dd>11</dd>
          </dl>
        </div>
        <dl>
          <dt>스펙</dt>
          <dd>
            <span class="stat-item">
              <span class="stat-item-icon">
                <img src="./assets/img/icon_stat-item01.png" alt="" />
              </span>
              <span>방어</span>
              <span>210</span>
              <span class="stat-item-arrow">
                <img
                  src="./assets/img/icon_arrow-up.png"
                  alt="상승"
                />
              </span>
            </span>
            <span class="stat-item">
              <span class="stat-item-icon">
                <img src="./assets/img/icon_info-card03.png" alt="" />
              </span>
              <span>레벨</span>
              <span>210</span>
              <span class="stat-item-arrow">
                <img
                  src="./assets/img/icon_arrow-up.png"
                  alt="상승"
                />
              </span>
            </span>
          </dd>
        </dl>
        <dl>
          <dt>소개</dt>
          <dd>편한 게임 환영합니다.</dd>
        </dl>
      </div>

      <div class="table-list-item" role="listitem">
        <div class="top">
          <span class="btn btn-red btn-sm">월드</span>
          <span class="badge">아리아</span>
          <dl>
            <dt>레벨</dt>
            <dd>11</dd>
          </dl>
        </div>
        <dl>
          <dt>스펙</dt>
          <dd>
            <span class="stat-item">
              <span class="stat-item-icon">
                <img src="./assets/img/icon_stat-item01.png" alt="" />
              </span>
              <span>방어</span>
              <span>210</span>
              <span class="stat-item-arrow">
                <img
                  src="./assets/img/icon_arrow-up.png"
                  alt="상승"
                />
              </span>
            </span>
            <span class="stat-item">
              <span class="stat-item-icon">
                <img src="./assets/img/icon_info-card03.png" alt="" />
              </span>
              <span>레벨</span>
              <span>210</span>
              <span class="stat-item-arrow">
                <img
                  src="./assets/img/icon_arrow-up.png"
                  alt="상승"
                />
              </span>
            </span>
          </dd>
        </dl>
        <dl>
          <dt>소개</dt>
          <dd>편한 게임 환영합니다.</dd>
        </dl>
      </div>

      <div class="table-list-item" role="listitem">
        <div class="top">
          <span class="btn btn-red btn-sm">월드</span>
          <span class="badge">아리아</span>
          <dl>
            <dt>레벨</dt>
            <dd>11</dd>
          </dl>
        </div>
        <dl>
          <dt>스펙</dt>
          <dd>
            <span class="stat-item">
              <span class="stat-item-icon">
                <img src="./assets/img/icon_stat-item01.png" alt="" />
              </span>
              <span>방어</span>
              <span>210</span>
              <span class="stat-item-arrow">
                <img
                  src="./assets/img/icon_arrow-up.png"
                  alt="상승"
                />
              </span>
            </span>
            <span class="stat-item">
              <span class="stat-item-icon">
                <img src="./assets/img/icon_info-card03.png" alt="" />
              </span>
              <span>레벨</span>
              <span>210</span>
              <span class="stat-item-arrow">
                <img
                  src="./assets/img/icon_arrow-up.png"
                  alt="상승"
                />
              </span>
            </span>
          </dd>
        </dl>
        <dl>
          <dt>소개</dt>
          <dd>편한 게임 환영합니다.</dd>
        </dl>
      </div>

      <div class="table-list-item" role="listitem">
        <div class="top">
          <span class="btn btn-red btn-sm">월드</span>
          <span class="badge">아리아</span>
          <dl>
            <dt>레벨</dt>
            <dd>11</dd>
          </dl>
        </div>
        <dl>
          <dt>스펙</dt>
          <dd>
            <span class="stat-item">
              <span class="stat-item-icon">
                <img src="./assets/img/icon_stat-item01.png" alt="" />
              </span>
              <span>방어</span>
              <span>210</span>
              <span class="stat-item-arrow">
                <img
                  src="./assets/img/icon_arrow-up.png"
                  alt="상승"
                />
              </span>
            </span>
            <span class="stat-item">
              <span class="stat-item-icon">
                <img src="./assets/img/icon_info-card03.png" alt="" />
              </span>
              <span>레벨</span>
              <span>210</span>
              <span class="stat-item-arrow">
                <img
                  src="./assets/img/icon_arrow-up.png"
                  alt="상승"
                />
              </span>
            </span>
          </dd>
        </dl>
        <dl>
          <dt>소개</dt>
          <dd>편한 게임 환영합니다.</dd>
        </dl>
      </div>

      <div class="table-list-item" role="listitem">
        <div class="top">
          <span class="btn btn-red btn-sm">월드</span>
          <span class="badge">아리아</span>
          <dl>
            <dt>레벨</dt>
            <dd>11</dd>
          </dl>
        </div>
        <dl>
          <dt>스펙</dt>
          <dd>
            <span class="stat-item">
              <span class="stat-item-icon">
                <img src="./assets/img/icon_stat-item01.png" alt="" />
              </span>
              <span>방어</span>
              <span>210</span>
              <span class="stat-item-arrow">
                <img
                  src="./assets/img/icon_arrow-up.png"
                  alt="상승"
                />
              </span>
            </span>
            <span class="stat-item">
              <span class="stat-item-icon">
                <img src="./assets/img/icon_info-card03.png" alt="" />
              </span>
              <span>레벨</span>
              <span>210</span>
              <span class="stat-item-arrow">
                <img
                  src="./assets/img/icon_arrow-up.png"
                  alt="상승"
                />
              </span>
            </span>
          </dd>
        </dl>
        <dl>
          <dt>소개</dt>
          <dd>편한 게임 환영합니다.</dd>
        </dl>
      </div>

      <div class="table-list-item" role="listitem">
        <div class="top">
          <span class="btn btn-red btn-sm">월드</span>
          <span class="badge">아리아</span>
          <dl>
            <dt>레벨</dt>
            <dd>11</dd>
          </dl>
        </div>
        <dl>
          <dt>스펙</dt>
          <dd>
            <span class="stat-item">
              <span class="stat-item-icon">
                <img src="./assets/img/icon_stat-item01.png" alt="" />
              </span>
              <span>방어</span>
              <span>210</span>
              <span class="stat-item-arrow">
                <img
                  src="./assets/img/icon_arrow-up.png"
                  alt="상승"
                />
              </span>
            </span>
            <span class="stat-item">
              <span class="stat-item-icon">
                <img src="./assets/img/icon_info-card03.png" alt="" />
              </span>
              <span>레벨</span>
              <span>210</span>
              <span class="stat-item-arrow">
                <img
                  src="./assets/img/icon_arrow-up.png"
                  alt="상승"
                />
              </span>
            </span>
          </dd>
        </dl>
        <dl>
          <dt>소개</dt>
          <dd>편한 게임 환영합니다.</dd>
        </dl>
      </div>

      <div class="table-list-item" role="listitem">
        <div class="top">
          <span class="btn btn-red btn-sm">월드</span>
          <span class="badge">아리아</span>
          <dl>
            <dt>레벨</dt>
            <dd>11</dd>
          </dl>
        </div>
        <dl>
          <dt>스펙</dt>
          <dd>
            <span class="stat-item">
              <span class="stat-item-icon">
                <img src="./assets/img/icon_stat-item01.png" alt="" />
              </span>
              <span>방어</span>
              <span>210</span>
              <span class="stat-item-arrow">
                <img
                  src="./assets/img/icon_arrow-up.png"
                  alt="상승"
                />
              </span>
            </span>
            <span class="stat-item">
              <span class="stat-item-icon">
                <img src="./assets/img/icon_info-card03.png" alt="" />
              </span>
              <span>레벨</span>
              <span>210</span>
              <span class="stat-item-arrow">
                <img
                  src="./assets/img/icon_arrow-up.png"
                  alt="상승"
                />
              </span>
            </span>
          </dd>
        </dl>
        <dl>
          <dt>소개</dt>
          <dd>편한 게임 환영합니다.</dd>
        </dl>
      </div>
    </div>
  </div>
</div>
