angular.module('ngApp').controller("clanInfoCtrl", ['$scope', '$http','$q','$timeout','AuthenticationService','$state','$stateParams', '$sce' , function ($scope, $http, $q, $timeout, AuthenticationService, $state, $stateParams, $sce ) {
    

    $scope.clanInfo = null;

    $scope.init = function(){
        
        // 비로그인시 로그인 페이지 이동
        // AuthenticationService.checked(function(result){ 
            console.log('clanInfoCtrl');
        // });

        $scope.getClanInfo();
    }


    $scope.insertClanButton = function(){
        
        API = null;
        
        if($scope.clanInfo == null){
            API = API_SERVER+'/clan/clan_insert';
        }else{
            API = API_SERVER+'/clan/clan_modify';
        }

        var formData = new FormData();
        formData.append("user_pk", $scope.NG_USER_ID);
        formData.append("authorization", $scope.NG_AUTHORIZATION);
        formData.append("email", $scope.NG_EMAIL);
        formData.append("type", $scope.type);
        formData.append("recruit_yn", $(":input:radio[name=recruit_yn]:checked").val());
        formData.append("clan_name", $('#clan_name').val());
        formData.append("clan_level", $('#clan_level').val());
        formData.append("recruit_type", $("select[name=recruit_type]").val());
        formData.append("server", $("select[name=server]").val());
        formData.append("job", $("select[name=job]").val());
        formData.append("defense", $('#defense').val());
        formData.append("level", $('#level').val());
        formData.append("description", $('#description').val());
        formData.append("welfare", $('#welfare').val());


        console.log($scope.NG_USER_ID);
        console.log($scope.NG_AUTHORIZATION);
        console.log('clan_name ', $('#clan_name').val());
        console.log('clan_level ', $('#clan_level').val());
        console.log('server ', $("select[name=server]").val());
        console.log('job ', $("select[name=job]").val());
        console.log('defense ', $('#defense').val());
        console.log('level ', $('#level').val());
        console.log('description ', $('#description').val());
        console.log('welfare ', $('#welfare').val());
        console.log('recruit_yn ', $(":input:radio[name=recruit_yn]:checked").val());
        console.log('API_SERVER : ', API_SERVER);

        if($('#clan_name').val() == ""){
            return alert('혈맹명을 입력해주세요');
        }
        if($('#clan_level').val() == ""){
            return alert('혈맹레벨을 입력해주세요');
        }
        if($('#defense').val() == ""){
            return alert('가입스펙 방어를 입력해주세요');
        }
        if($('#level').val() == ""){
            return alert('가입스펙 레벨을 입력해주세요');
        }
        if($('#description').val() == ""){
            return alert('소개글을 입력해주세요');
        }
        if($('#welfare').val() == ""){
            return alert('혈가 & 분배를 입력해주세요');
        }

        $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: API,
            data: formData,
            processData: false,
            contentType: false,
            cache: false,
            success: function (response) {

                var items = response;
                $scope.resCode = items.res_code;
                if($scope.resCode == 200) {
                    
                    $scope.resMsg = items.msg;

                    if($scope.clanInfo == null){
                        alert('혈맹이 추가됐습니다');
                    }else{
                        alert('혈맹이 수정됐습니다');
                    }
                    $scope.pageMovement('line_smart', {'type': 'lineage_w', 'subType':'clan_recruit' })
                    
                }else{
                    
                    if($scope.resCode == 0900){
                        $scope.resMsg = items.data.errMsg;
                    }else{
                        $scope.resCode = $scope.resCode;
                        $scope.resMsg = items.msg;
                    }
                    
                    alert($scope.resMsg);
                    // $scope.itemsList = [];
                    // $scope.totalCount = 0;
                }
            },
            error: function () {

            }
        });

    }

    $scope.getClanInfo = function(){

        var params = $.param({
            user_pk             : $scope.NG_USER_ID,
            authorization       : $scope.NG_AUTHORIZATION,
            email               : $scope.NG_EMAIL,
            type                : $scope.type,
        });

        console.log('$scope.NG_USER_ID ', $scope.NG_USER_ID);
        console.log('$scope.NG_AUTHORIZATION ', $scope.NG_AUTHORIZATION);
        console.log('$scope.NG_EMAIL ', $scope.NG_EMAIL);
        console.log('$scope.type ', $scope.type);

        $http.post(API_SERVER+'/clan/get_clan_info',params)
            .then(function onSuccess(response)
            {
                var items = response.data;
                $scope.resCode = items.res_code;

                if($scope.resCode == 200){
                    
                    $scope.clanInfo = items.data.info;

                }else{
                
                    if($scope.resCode == 500){

                        $scope.resCode = items.data.err_code;
                        $scope.resMsg  = items.data.err_msg;
                    
                    }else{
                        $scope.resCode = $scope.resCode;
                        $scope.resMsg  = items.msg;
                    }

                }

            },
            function onError(response)
            {
                alert('정보를 불러오지 못했습니다.');
            }
        );
    }

}]);