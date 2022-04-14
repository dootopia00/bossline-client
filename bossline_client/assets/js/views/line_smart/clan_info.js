angular.module('ngApp').controller("clanInfoCtrl", ['$scope', '$http','$q','$timeout','AuthenticationService','$state','$stateParams', '$sce' , function ($scope, $http, $q, $timeout, AuthenticationService, $state, $stateParams, $sce ) {
    
    $scope.init = function(){
        
        // 비로그인시 로그인 페이지 이동
        // AuthenticationService.checked(function(result){ 
            console.log('clanInfoCtrl');
        // });

    }


    $scope.insertClanButton = function(){
        
        var formData = new FormData();
        formData.append("user_pk", $scope.NG_USER_ID);
        formData.append("authorization", $scope.NG_AUTHORIZATION);
        formData.append("type", $scope.type);
        formData.append("recruit", $(":input:radio[name=recruit]:checked").val());
        formData.append("clan_name", $('#clan_name').val());
        formData.append("clan_level", $('#clan_level').val());
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
        console.log('recruit ', $(":input:radio[name=recruit]:checked").val());
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
            url: API_SERVER+'/clan/clan_insert',
            data: formData,
            processData: false,
            contentType: false,
            cache: false,
            success: function (response) {

                var items = response;
                $scope.resCode = items.res_code;
                if($scope.resCode == 200) {
                    
                    $scope.resMsg = items.msg;
                    alert('혈맹이 추가됐습니다');
                    $scope.pageMovement('line_smart', {'type': 'lineage_w', 'subType':'clan_recruit' })
                    
                }else{
                    
                    if($scope.resCode == 0900){
                        $scope.resMsg = items.data.errMsg;
                    }else{
                        $scope.resCode = $scope.resCode;
                        $scope.resMsg = items.msg;
                        return;
                    }
                }
            },
            error: function () {

            }
        });

    }

}]);