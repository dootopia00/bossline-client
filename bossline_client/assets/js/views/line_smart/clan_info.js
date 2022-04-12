angular.module('ngApp').controller("clanInfoCtrl", ['$scope', '$http','$q','$timeout','AuthenticationService','$state','$stateParams', '$sce' , function ($scope, $http, $q, $timeout, AuthenticationService, $state, $stateParams, $sce ) {
    
    $scope.init = function(){
        
        // 비로그인시 로그인 페이지 이동
        // AuthenticationService.checked(function(result){ 
            console.log('clanInfoCtrl');
        // });

    }


    $scope.insertClanButton = function(){
        
        console.log('insertClanButton');
        // return;
        // if($('#title').val() == ""){
        //     toast('Please enter title.');
        //     return false;
        // }

        // if($('#content').val() == ""){
        //     toast('Please enter content.');
        //     return false;
        // }

        var formData = new FormData();
        formData.append("user_id", $scope.NG_USER_ID);
        formData.append("authorization", $scope.NG_AUTHORIZATION);
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