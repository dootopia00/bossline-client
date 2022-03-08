angular.module('ngApp').controller("lineSmartCtrl", ['$scope', '$http','$q','$timeout','AuthenticationService','$state','$stateParams', '$sce' , function ($scope, $http, $q, $timeout, AuthenticationService, $state, $stateParams, $sce ) {
    

    $scope.type = ($state.params.type)  ?  $state.params.type : 'lineage_m';
    $scope.subType = ($state.params.subType)  ?  $state.params.subType : 'clan_recruit';

    $scope.typeName = null;

    
    $scope.init = function(){
        
        // 비로그인시 로그인 페이지 이동
        // AuthenticationService.checked(function(result){ 
            console.log('lineSmartCtrl');
        // });

        console.log('$scope.type : ', $scope.type)
        
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

    }




}]);