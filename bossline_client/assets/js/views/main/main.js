angular.module('ngApp').controller("MainCtrl", ['$scope', '$http','$q','$timeout','AuthenticationService','$state','$stateParams', '$sce' , function ($scope, $http, $q, $timeout, AuthenticationService, $state, $stateParams, $sce ) {
    

    $scope.init = function(){
        
        // 비로그인시 로그인 페이지 이동
        AuthenticationService.checked(function(result){ 
            console.log('main.js init');
        });

        $scope.mySwiper();

    }

    
    $scope.mySwiper = function(image, id){

        new Swiper('.swiper-container', {
            // Optional parameters
            loop: true,
            
            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                renderBullet: function (index, className) {
                return '<span class="' + className + '">0' + (index + 1) + '</span>';
                },
            },
            
            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    } 
    
}]);