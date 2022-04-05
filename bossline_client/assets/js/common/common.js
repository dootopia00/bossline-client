
/**
 * 라이브 url
 * API 라이브서버 : https://apis.dooropen.io
 * 관리자 라이브서버 : http://admin.dooropen.io
 */

var API_SERVER_HOSTNAME = window.location.hostname;
var API_SERVER = null;
var SERVICE_DOMAIN = null;
// var SOCKET_SERVER = null;

// http://api.dooropen.io:8000/

console.log('API_SERVER_HOSTNAME : ', API_SERVER_HOSTNAME);
if(API_SERVER_HOSTNAME == 'localhost'){

    API_SERVER = "http://localhost:9000";
    SERVICE_DOMAIN = "http://localhost:9001";

}else{

    API_SERVER = "https://api.bossline.gg";
    SERVICE_DOMAIN = "https://client.bossline.gg";
}


var url = window.location.hash.split("/")[1];

if(url == null){
    document.location.replace(SERVICE_DOMAIN+'/#/main');
}



/**
 * 일반 로그인 moduel 
 */
ngApp.factory('AuthenticationService', AuthenticationService);

/**
 * 뒤로가기에 대한 moduel
 * 함수 : goToList emit 걸로 사용
 */
ngApp.factory('BackwardControlService', BackwardControlService);

ngApp.run(run);


function AuthenticationService($http,$state) {
    var service = {};

    service.Login = Login;
    service.Logout = Logout;
    service.checked = checked;

    return service;

    /**
     * 로그인 return
     */
    function Login(userId, email, callback, state) {

        var url = API_SERVER+'/user/sign_in';

        console.log('url : ', url)
        var params = $.param({
            user_id        : userId,
            email          : email,
        });
        console.log('params : ', params)
        
        $http.post(url, params).then(function onSuccess(response) {

            var items = response.data;
                resCode = items.res_code;
                
                if (resCode == 200) {

                    var NG_USER_ID          = (items.data.info.user_id) ? items.data.info.user_id : '';
                    var NG_EMAIL            = (items.data.info.email) ? items.data.info.email : '';
                    var NG_USER_TYPE        = (items.data.info.type) ? items.data.info.type : '';
                    var NG_REG_DATE         = (items.data.info.reg_date) ? items.data.info.reg_date : '';
                    var NG_AUTHORIZATION    = (items.data.info.authorization) ? items.data.info.authorization : '';
                    
                    localStorage.setItem('NG_USER_ID', NG_USER_ID);
                    localStorage.setItem('NG_EMAIL', NG_EMAIL);
                    localStorage.setItem('NG_USER_TYPE', NG_USER_TYPE);
                    localStorage.setItem('NG_REG_DATE', NG_REG_DATE);
                    localStorage.setItem('NG_AUTHORIZATION', NG_AUTHORIZATION);
                    
                    angular.element(document.getElementById('ngBody')).scope().sessionInit();

                    // 로그인 후 메인으로 이동
                    var hash = window.location.hash.split('/');
                    var state = null;
                    var param = null;
                    
                    if(hash[1]){
                        tmp = hash[1].split('?');
                        state = (tmp[0]) ? tmp[0] : null;
                        param = (tmp[1]) ? tmp[1] : null;
                    }
                    
                    $state.go('main',{
                        state: state,
                        hash: param,
                    },{reload:true});
                    
                }else {

                    var str = "";
                    if(resCode == 500){
                        var errCode = items.data.err_code 
                        var errMsg = items.data.err_msg 
                        str = errMsg;
                    }
                    

                    callback(false , str);
                }


        }, function onError(response) {

        });   
    }

    /**
     * 로그아웃 return
     */
    function Logout(callback) {

        localStorage.removeItem('NG_USER_ID');
        localStorage.removeItem('NG_EMAIL');
        localStorage.removeItem('NG_USER_TYPE');
        localStorage.removeItem('NG_REG_DATE');
        localStorage.removeItem('NG_AUTHORIZATION');

        angular.element(document.getElementById('ngBody')).scope().sessionInit();
        location.href = SERVICE_DOMAIN;
    }

    /**
     * 로그인 체크 여부
     */
    function checked(callback, preState, preHash, secState, secHash) {

        var admin = (localStorage.getItem('NG_ADMIN_UUID')) ? (localStorage.getItem('NG_ADMIN_UUID')) : null; 

        if(!admin){

            var hash = window.location.hash.split('/');
            var state = null;
            var param = null;
            
            if(hash[1]){
                tmp = hash[1].split('?');
                state = (tmp[0]) ? tmp[0] : null;
                param = (tmp[1]) ? tmp[1] : null;
            }

            callback(false);
            
            $state.go('login',{
                state: state,
                hash: param,
                preState : preState,
                preHash : preHash,
                secState : secState,
                secHash : secHash
                
            },{reload:true});

        }else{

            callback(true);
        }
    }
    
    
}

function BackwardControlService($http,$state){
    var service = {};

    service.backWord = backWord;
    return service;

    /**
     * 
     * @param {*} state : 이전에 state value -> 경로 값
     * @param {*} hash : 이전에 state param -> 데이터 값
     * @param {*} type 
     *     - list : 목룍에서 뒤로 가기(이전 상세보기에서 view면 main이거나 이전 url 함수만 모여져있었다.)
     *     - view : 상세보기 뒤로 가기(이전 상세보기에서 view면 list 함수만 모여져있었다.)
     *     - myapge : mobile의 경우 header가 open을 위한 사용
     * @param {*} costate : state 전 state value -> state -> state
     * @param {*} cohash : state 전 state value -> state -> state
     * @param {*} secState : 3번째 까지 state 유지
     * @param {*} secHash : 3번째 까지 hash 유지 
     */
    function backWord(state, hash, type, costate, cohash, secState, secHash){


        var angularScope = angular.element(document.getElementById('ngBody')).scope();
        var sideMenuType = (type == 'mypage') ? type : '';

        var opt = {};

        // state가 없을 경우 메인으로
        state = (state) ? state : 'main';

        opt.state    = costate;
        opt.hash     = cohash;
        opt.preState = secState;
        opt.preHash  = secHash;
        
        if(hash){
            var hash_array = getQueryArray(hash);

            $.each(hash_array, function(index, value) {
                opt[index] = decodeURI(value);
            });
        }

        angularScope.backwardPageMovement(state, opt, sideMenuType);

    }
}

function run($rootScope,$state,$transitions,$stateParams,$location, $http) {
    
    /**
     * controller 호출시 블려지는함수
     */
    $rootScope.$on("$locationChangeSuccess", function(angularEvent, newUrl, oldUrl) {
        
        var hash = window.location.hash.split('/');
        var state = null;
        
        if(hash[1]){
            tmp = hash[1].split('?');
            state = (tmp[0]) ? tmp[0] : null;
        }

        /**
         * state.go : url 변경시 스크롤 작동
         * longsTip : tip&guide가 높을 경우 해당 테이블 코드와 스크롤 위치 클래스를 적용
         * oldHash : 과거 tableCode를 알기위한 변수
         */
        var platform = platformCheck();

        angular.element(document.getElementById('ngBody')).scope().setHashUrl(state);
        
    });



    /**
     * controller 호출이 시작 될 때 불려지는 함수
     */
    $transitions.onStart({}, function(trans) {

        // angular.element(document.getElementById('ngBody')).scope().scrollUnBind();

    });

    // page 호출 이후 불리는 함수
    $transitions.onSuccess({}, function(trans) {


    });
    
}

ngApp.config(function ($provide) {
    $provide.decorator('textareaDirective', function($delegate, $log) {
        //$log.debug('Hijacking input directive');
        var directive = $delegate[0];
        angular.extend(directive.link, {
            post: function(scope, element, attr, ctrls) {
                element.on('compositionupdate', function (event) {
                    element.triggerHandler('compositionend');
                })
            }
        });
        return $delegate;
    });
});

ngApp.config(function ($provide) {
    $provide.decorator('inputDirective', function($delegate, $log) {
        //$log.debug('Hijacking input directive');
        var directive = $delegate[0];
        angular.extend(directive.link, {
            post: function(scope, element, attr, ctrls) {
                element.on('compositionupdate', function (event) {
                    element.triggerHandler('compositionend');
                })
            }
        });
        return $delegate;
    });
});

/**
 * repeatEnd  : repeat가 종료 후 실행할 함수를 지정
 * 사용자 지정의 directive
 */
ngApp.directive("repeatEnd", function(){
    return {
        restrict: "A",
        link: function (scope, element, attrs) {
            if (scope.$last) {
                scope.$eval(attrs.repeatEnd);
            }
        }
    };
});

/**
 * YYYY년 MM월 dd일로 표기할 filter
 */
ngApp.filter('dateSplitYMDStr', function () {
    return function (items) {
        // items : yyyy-mm-dd HH:ii:ss
        if(items != undefined) {
            var tmp = items.split('-');
            return tmp[0]+'년 '+tmp[1]+'월 '+tmp[2]+'일'; // always return a string
        }
    }
});
        
// acecounter
// var _AceGID=(function(){var Inf=['gtp9.acecounter.com','8080','AH2A44815984708','AW','0','NaPm,Ncisy','ALL','0']; var _CI=(!_AceGID)?[]:_AceGID.val;var _N=0;var _T=new Image(0,0);if(_CI.join('.').indexOf(Inf[3])<0){ _T.src ="https://"+ Inf[0] +'/?cookie'; _CI.push(Inf);  _N=_CI.length; } return {o: _N,val:_CI}; })();
// var _AceCounter=(function(){var G=_AceGID;var _sc=document.createElement('script');var _sm=document.getElementsByTagName('script')[0];if(G.o!=0){var _A=G.val[G.o-1];var _G=(_A[0]).substr(0,_A[0].indexOf('.'));var _C=(_A[7]!='0')?(_A[2]):_A[3];var _U=(_A[5]).replace(/\,/g,'_');_sc.src='https:'+'//cr.acecounter.com/Web/AceCounter_'+_C+'.js?gc='+_A[2]+'&py='+_A[4]+'&gd='+_G+'&gp='+_A[1]+'&up='+_U+'&rd='+(new Date().getTime());_sm.parentNode.insertBefore(_sc,_sm);return _sc.src;}})();

// kakaoPixel('3534581413982748437').pageView();