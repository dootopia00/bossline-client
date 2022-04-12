angular.module('ngApp').controller("lineSmartCtrl", ['$scope', '$http','$q','$timeout','AuthenticationService','$state','$stateParams', '$sce' , function ($scope, $http, $q, $timeout, AuthenticationService, $state, $stateParams, $sce ) {
    

    $scope.type = ($state.params.type)  ?  $state.params.type : 'lineage_m';
    $scope.subType = ($state.params.subType)  ?  $state.params.subType : 'clan_recruit';

    $scope.typeName = null;

    $scope.myInfo = false;
    
    $scope.serverList = null;
    $scope.serverCount = null;

    $scope.selectServerModel = null;

    $scope.init = function(){
        
        // 비로그인시 로그인 페이지 이동
        // AuthenticationService.checked(function(result){ 
            console.log('lineSmartCtrl');
        // });

        if($scope.type == 'lineage_m'){
            $scope.typeName = '리니지M';
        }else if($scope.type == 'lineage_2m'){
            $scope.typeName = '리니지2M';
        }else if($scope.type == 'lineage_w'){
            $scope.typeName = '리니지W';
        }else if($scope.type == 'trickster_m'){
            $scope.typeName = '트릭스터M';
        }else if($scope.type == 'odin'){
            $scope.typeName = '오딘:발할라라이징';
        }

        $scope.getServerList();
    }

    $scope.myInfoClick = function(){

        $scope.myInfo = !$scope.myInfo;
    }
    
    
    $scope.getServerList = function(){

        console.log('$scope.type : ', $scope.type)


        var params = $.param({
            type           : $scope.type,
        });

        $http.post(API_SERVER+'/server/server_list',params)
            .then(function onSuccess(response)
            {
                var items = response.data;
                $scope.resCode = items.res_code;

                if($scope.resCode == 200){
                    
                    $scope.serverList = items.data.list;
                    $scope.serverCount = items.data.total_count;
                    
                    console.log('$scope.serverList : ', $scope.serverList);

                }else{
                
                    if($scope.resCode == 500){

                        $scope.resCode = items.data.err_code;
                        $scope.resMsg  = items.data.err_msg;
                    
                    }else{
                        $scope.resCode = $scope.resCode;
                        $scope.resMsg  = items.msg;
                    }

                    alert($scope.resMsg);
                    $scope.itemsList = [];
                    $scope.totalCount = 0;
                }

            },
            function onError(response)
            {
                alert('정보를 불러오지 못했습니다.');
            }
        );
    }

    

    $scope.serverSelectChange = function(){
        
        console.log('aaa');
    }



}]);