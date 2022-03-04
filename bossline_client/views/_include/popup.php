
<div id="login" class="modal" style="visibility:hidden;">
    <div class="dialog" role="dialog">
    <h1 class="dialog-title">로그인</h1>
    <div class="dialog-form">
        <div class="service-form">
        <dl class="modal-field">
            <dt class="modal-field-col">아이디</dt>
            <dd class="modal-field-col">
            <input type="text" class="text-input" id="uuid" value="" />
            </dd>
        </dl>
        <dl class="modal-field">
            <dt class="modal-field-col">비밀번호</dt>
            <dd class="modal-field-col">
            <input
                type="password"
                class="text-input"
                value=""
                id = "password"
            />
            </dd>
        </dl>
        <dd class="modal-field-col">
            <span id="warning" style="color: #ff1448;visibility:hidden;">존재하지 않는 아이디 입니다</span>
        </dd>
        </div>
    </div>
    <div class="dialog-btn">
        <button onClick="login();" type="button" class="btn btn-confirm">로그인</button>
        <button onClick="cancel();" type="button" class="btn">취소</button>
    </div>
    </div>
</div>