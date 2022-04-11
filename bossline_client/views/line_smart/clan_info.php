


<div class="clan-info" ng-controller="clanInfoCtrl" ng-init="init()" ng-if="subType=='clan_info'">
    <div class="clan-info-section">
        <dl class="info-item is-highlight">
        <dt>모집중</dt>
        <dd>
            <label class="checkbox">
            <input type="radio" name="aaaaa" checked />
            <span class="checkbox-text">ON</span>
            </label>
            <label class="checkbox">
            <input type="radio" name="aaaaa" />
            <span class="checkbox-text">OFF</span>
            </label>
        </dd>
        </dl>
        <dl class="info-item">
            <dt class="info-active">서버</dt>
            <!-- <dd>오필리아</dd> -->
            <span class="select">
                <select name="" id="">
                    <option ng-repeat="it in serverList track by $index" value="{{it.id}}">
                        {{it.name}}
                    </option>
                </select>
            </span>
        </dl>
        <dl class="info-item">
            <dt class="info-active">혈맹명</dt>
            <dd><input class="input-form" type="text" placeholder="혈맹명"></dd>
        </dl>
        <dl class="info-item">
            <dt class="info-active">혈레벨</dt>
            <dd><input class="input-form" type="text" placeholder="혈레벨"></dd>
        </dl>
        <dl class="info-item">
        <dt class="info-active">모집 클래스</dt>
        <dd>
            <span class="stat-item">
            <span class="stat-item-icon">
                <img src="./assets/img/icon_info-card05.png" alt="" />
            </span>
            <span>직업</span>
            <span class="select">
                <select name="" id="">
                    <option value="">기사</option>
                    <option value="">요정</option>
                    <option value="">군주</option>
                </select>
            </span>
            </span>
        </dd>
        </dl>
        <dl class="info-item">
            <dt class="info-active">가입스펙</dt>
            <dd>
                <span class="stat-item">
                <span class="stat-item-icon">
                    <img src="./assets/img/icon_stat-item01.png" alt="" />
                </span>
                <span>방어</span>
                <span>
                    <input type="number" class="input-form2" placeholder="">
                </span>
                <span class="stat-item-arrow">
                    <img src="./assets/img/icon_arrow-up.png" alt="상승" />
                </span>
                </span>
                <span class="stat-item">
                <span class="stat-item-icon">
                    <img src="./assets/img/icon_info-card03.png" alt="" />
                </span>
                <span>레벨</span>
                <span>
                    <input type="number" class="input-form2" placeholder="">
                </span>
                <span class="stat-item-arrow">
                    <img src="./assets/img/icon_arrow-up.png" alt="상승" />
                </span>
                </span>
            </dd>
        </dl>
    </div>
    <div class="clan-info-section">
        <h3 class="clan-info-title">소개</h3>
        <div class="clan-info-text">
        <!-- <p>
            현재 오필리아 아덴 3연속 수성중인 혈입니다. 현재 오필리아 아덴
            3연속 수성중인 혈입니다. 현재 오필리아 아덴 3연속 수성중인
            혈입니다. 현재 오필리아 아덴 3연속 수성중인 혈입니다. 현재
            오필리아 아덴 3연속 수성중인 혈입니다. 현재 오필리아 아덴
            3연속 수성중인 혈입니다.
        </p> -->
        <textarea  name="" id="" cols="120" rows="10" class="input-area"></textarea>
        </div>
    </div>
    <div class="clan-info-section">
        <h3 class="clan-info-title">혈가 & 분배</h3>
        <div class="clan-info-text">
        <!-- <p>
            영웅템 - 전서버 최저가 50%
            <br />
            혼 - 뽑기
        </p> -->
        <textarea name="" id="" cols="120" rows="10" class="input-area"></textarea>

        </div>
    </div>
    <div class="clan-info-btn">
        <button type="button" class="btn btn-confirm">혈맹추가</button>
        <!-- <button type="button" class="btn btn-confirm">가입요청</button> -->
    </div>
</div>
