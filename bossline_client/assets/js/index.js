

ngApp.controller("IndexCtrl", ['$scope', '$http','$q','$timeout','AuthenticationService','$state','$document','$window','$ocLazyLoad','BackwardControlService','$interval', function ($scope,$http,$q,$timeout, AuthenticationService, $state,$document,$window ,$ocLazyLoad,BackwardControlService,$interval) {

    $scope.serviceName = 'bossline';

    /** [공통] platform [PC, M] 구분 */
    $scope.platformCheck = platformCheck();
    /**
     * 태블릿 PC 여부 확인
     */

    
    $scope.userId  = null;

    /**  
     * [공통] 로컬 세션 정보 
     * - 회원정보, 폰트크기
    */
    $scope.NG_USER_ID          =  (localStorage.getItem('NG_USER_ID')) ? (localStorage.getItem('NG_USER_ID')) : ''; 
    $scope.NG_EMAIL            =  (localStorage.getItem('NG_EMAIL')) ? (localStorage.getItem('NG_EMAIL')) : ''; 
    $scope.NG_USER_TYPE        =  (localStorage.getItem('NG_USER_TYPE')) ? (localStorage.getItem('NG_USER_TYPE')) : '';
    $scope.NG_AUTHORIZATION    =  (localStorage.getItem('NG_AUTHORIZATION')) ? (localStorage.getItem('NG_AUTHORIZATION')) : '';
    $scope.NG_REG_DATE         =  (localStorage.getItem('NG_REG_DATE')) ? (localStorage.getItem('NG_REG_DATE')) : '';


    $scope.init = function(){

        console.log('$scope.NG_USER_ID: ', $scope.NG_USER_ID)
        AuthenticationService.checked(function(result){});

    }

    /**  
     * [공통] 로컬 세션 정보 함수
     * - 회원정보, 폰트크기
    */
    $scope.sessionInit = function(){

        console.log('sessionInit success')
        $scope.NG_USER_ID          =  (localStorage.getItem('NG_USER_ID')) ? (localStorage.getItem('NG_USER_ID')) : ''; 
        $scope.NG_EMAIL            =  (localStorage.getItem('NG_EMAIL')) ? (localStorage.getItem('NG_EMAIL')) : '';
        $scope.NG_USER_TYPE        =  (localStorage.getItem('NG_USER_TYPE')) ? (localStorage.getItem('NG_USER_TYPE')) : '';
        $scope.NG_AUTHORIZATION    =  (localStorage.getItem('NG_AUTHORIZATION')) ? (localStorage.getItem('NG_AUTHORIZATION')) : '';
        $scope.NG_REG_DATE         =  (localStorage.getItem('NG_REG_DATE')) ? (localStorage.getItem('NG_REG_DATE')) : '';
    }

    /** [공통] logout */
    $scope.logout = function (items, param, preState, preHash){
    
        console.log('index logout');
        AuthenticationService.Logout(function (result) { } );
    }

    /**
     * [공통] 커뮤니티 url 이동
     * - 일반 게시판, 실시간 요청게시판, 전체 검색 게시판
     */
    $scope.hashChange = function(hash, params, listMy){

        if($scope.platformCheck == 'PC'){
            if($scope.bookMarkOpenYn == 'Y'){
                return;
            }
        }
        
        var nowUrl = window.location.hash.split('/');
        var state = null;
        var param = null;
        if(nowUrl[1]){
            tmp = nowUrl[1].split('?');
            state = (tmp[0]) ? tmp[0] : null;
            param = (tmp[1]) ? tmp[1] : null;
        }

    }

    /* 뒤로가기로 페이지이동 */
    $scope.backwardPageMovement = function(page, opt, sideMenuType){
        
        $scope.nextHashState = getHash(page);

        console.log('backwardPageMovement', page, opt, sideMenuType);

        $state.go(page, opt,
        {
            reload:true,
            location:true,
            inherit:true
        });

    }


    /* 페이지이동 */
    $scope.pageMovement = function(page, reqOpt){

        var opt = (reqOpt) ? reqOpt : {};

        $scope.nextHashState = getHash(page);
        
        var hash = window.location.hash.split('/');

        if(hash[1]){
            tmp = hash[1].split('?');
            
            opt.state = (tmp[0]) ? tmp[0] : null;
            opt.hash = (tmp[1]) ? tmp[1] : null; 
        }
        
        console.log('pageMovement', page, opt);

        $state.go(page, opt,
        {
            location: true,
            inherit: true,
            notify: false,
            reload : true
        });

    }

    
    /** [공통] 현재 url를 변수로 추가 */
    $scope.setHashUrl =  function(items, joinType){
        var hash = window.location.hash.split('/');
        var svYn = null;
        if(hash[1]){
            tmp = hash[1].split('?');
            var state = (tmp[0]) ? tmp[0] : null;
            var param = (tmp[1]) ? tmp[1] : null;
            if(tmp[1] != undefined) {
                svYn = (tmp[1].indexOf('sv') == -1) ? null : 'Y';
            }
        }

        $scope.nowHashUrl = items;
        $scope.nowParamhUrl = param;
        $scope.nowHashUrlJoin = joinType;
        $scope.searchView = svYn
        $scope.nextHashState = true;

        console.log('$scope.nowHashUrl : ', $scope.nowHashUrl);
    }

    
    $scope.summernoteInit = function(id, content){

        console.log('summernoteInit id ', id);
        
        $("#"+id).summernote({
            height : 300, // 에디터의 높이 
            minHeight: 200,             // 최소 높이
            placeholder: '',
            callbacks: {
                onImageUpload: function(image) {
                    
                    for (var i = image.length - 1; i >= 0; i--) {
                        $scope.uploadImage(image[i], id);
                    }
                },
                onKeyup: function(contents, $editable) {
    
                }
            },
            toolbar: [
                ['style', ['bold', 'italic', 'underline']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['paragraph']],
                ['height', ['height']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview']],        //<< 코드뷰 주석
            ],
        }); 
        
        


        // $("#"+id).summernote('code', content);


    }
    

    $scope.uploadImage = function(image, id){

        console.log('upload Image');

        var MAX_SIZE = 10 * 1024 * 1024; // 10MB이하만 
        if(image.size > MAX_SIZE){
            toast('10MB이상의 사진은 첨부할 수 없습니다.');
            return;
        }

        formData = new FormData();
        formData.append("file", image);

        $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            dataType:"JSON",
            url: API_SERVER+'/content/put_editor_image',
            //data : sendData,
            processData: false,
            contentType: false,
            data: formData,
            cache: false,
            success: function( data ) {
                console.log('return data : ', data)
                $('#'+id).summernote('insertImage', data.data.s3_url, data.data.file_name);
                
            },error:function(request,status,error){

            }
        });
    }

    
    $scope.kakaoLogin = function(){

        console.log('kakao'); 
        window.Kakao.init("269c5b7a046160744b444b4f0beabf9e");

        window.Kakao.Auth.login({
        scope: 'account_email',
        success: function(authObj) {
            console.log('authObj : ', authObj);
            window.Kakao.API.request({
            url:'/v2/user/me',
            success: res => {
                
                    const kakao_account = res.kakao_account;
                    console.log('kakao res : ',  res.id);

                    AuthenticationService.Login(res.id, res.kakao_account.email, function(result,msg){

                        if(result){ 
                            
                            console.log('login success');
                        }else{
                            alert(msg);
                        }
                        
                    });
                    
                    }
                });
            }   
        });
    }

    
}]);
