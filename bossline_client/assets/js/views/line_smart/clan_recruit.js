angular.module('ngApp').controller("clanRecruitCtrl", ['$scope', '$http','$q','$timeout','AuthenticationService','$state','$stateParams', '$sce' , function ($scope, $http, $q, $timeout, AuthenticationService, $state, $stateParams, $sce ) {
    
    $scope.clanType = 'world';

    $scope.init = function(){
        
        // 비로그인시 로그인 페이지 이동
        // AuthenticationService.checked(function(result){ 
            console.log('clanRecruitCtrl');
        // });


    }

    $scope.onClickClanType = function(type){

        $scope.clanType = type;

    }



}]);