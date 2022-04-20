angular.module('ngApp').controller("clanRecruitCtrl", ['$scope', '$http','$q','$timeout','AuthenticationService','$state','$stateParams', '$sce' , function ($scope, $http, $q, $timeout, AuthenticationService, $state, $stateParams, $sce ) {
    
    $scope.clanType = null;

    $scope.clanList = null;
    $scope.clanCount = null;

    $scope.clanPayList = null;
    $scope.clanPayCount = null;

    $scope.init = function(){
        
        // 비로그인시 로그인 페이지 이동
        // AuthenticationService.checked(function(result){ 
            console.log('clanRecruitCtrl');
        // });

        $scope.getClanList();
        $scope.getClanPayList();
    }

    
    $scope.getClanList = function(){

        var params = $.param({
            type           : $scope.type,
        });

        $http.post(API_SERVER+'/clan/clan_list',params)
            .then(function onSuccess(response)
            {
                var items = response.data;
                $scope.resCode = items.res_code;

                if($scope.resCode == 200){
                    
                    $scope.clanList = items.data.list;
                    $scope.clanCount = items.data.total_count;
                    
                }else{
                
                    if($scope.resCode == 500){

                        $scope.resCode = items.data.err_code;
                        $scope.resMsg  = items.data.err_msg;
                    
                    }else{
                        $scope.resCode = $scope.resCode;
                        $scope.resMsg  = items.msg;
                    }

                    alert($scope.resMsg);
                    $scope.clanList = [];
                    $scope.clanCount = 0;
                }

            },
            function onError(response)
            {
                alert('정보를 불러오지 못했습니다.');
            }
        );
    }

    $scope.getClanPayList = function(){

        var params = $.param({
            type           : $scope.type,
        });

        $http.post(API_SERVER+'/clan/clan_pay_list',params)
            .then(function onSuccess(response)
            {
                var items = response.data;
                $scope.resCode = items.res_code;

                if($scope.resCode == 200){
                    
                    $scope.clanPayList = items.data.list;
                    $scope.clanPayCount = items.data.total_count;
                    
                }else{
                
                    if($scope.resCode == 500){

                        $scope.resCode = items.data.err_code;
                        $scope.resMsg  = items.data.err_msg;
                    
                    }else{
                        $scope.resCode = $scope.resCode;
                        $scope.resMsg  = items.msg;
                    }

                    alert($scope.resMsg);
                    $scope.clanPayList = [];
                    $scope.clanPayCount = 0;
                }

            },
            function onError(response)
            {
                alert('정보를 불러오지 못했습니다.');
            }
        );
    }

    $scope.onClickClanType = function(type){

        $scope.clanType = type;

        var params = $.param({
            type           : $scope.type,
            type           : $scope.type,
        });

        $http.post(API_SERVER+'/clan/clan_search',params)
            .then(function onSuccess(response)
            {
                var items = response.data;
                $scope.resCode = items.res_code;

                if($scope.resCode == 200){
                    
                    $scope.clanList = items.data.list;
                    $scope.clanCount = items.data.total_count;
                    
                }else{
                
                    if($scope.resCode == 500){

                        $scope.resCode = items.data.err_code;
                        $scope.resMsg  = items.data.err_msg;
                    
                    }else{
                        $scope.resCode = $scope.resCode;
                        $scope.resMsg  = items.msg;
                    }

                    alert($scope.resMsg);
                    $scope.clanList = [];
                    $scope.clanCount = 0;
                }

            },
            function onError(response)
            {
                alert('정보를 불러오지 못했습니다.');
            }
        );

    }

    $scope.clanSearch = function(){

        var params = $.param({
            type           : $scope.type,
            type           : $scope.type,
        });

        $http.post(API_SERVER+'/clan/clan_search',params)
            .then(function onSuccess(response)
            {
                var items = response.data;
                $scope.resCode = items.res_code;

                if($scope.resCode == 200){
                    
                    $scope.clanList = items.data.list;
                    $scope.clanCount = items.data.total_count;
                    
                }else{
                
                    if($scope.resCode == 500){

                        $scope.resCode = items.data.err_code;
                        $scope.resMsg  = items.data.err_msg;
                    
                    }else{
                        $scope.resCode = $scope.resCode;
                        $scope.resMsg  = items.msg;
                    }

                    alert($scope.resMsg);
                    $scope.clanList = [];
                    $scope.clanCount = 0;
                }

            },
            function onError(response)
            {
                alert('정보를 불러오지 못했습니다.');
            }
        );


    }

}]);