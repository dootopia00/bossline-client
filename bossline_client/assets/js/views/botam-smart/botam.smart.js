angular.module('ngApp').controller("botamSmartCtrl", ['$scope', '$http','$q','$timeout','AuthenticationService','$state','$stateParams', '$sce' , function ($scope, $http, $q, $timeout, AuthenticationService, $state, $stateParams, $sce ) {
    

    $scope.type = ($state.params.type)  ?  $state.params.type : 'lineage-m';
    $scope.bot  = ($state.params.bot)   ?  $state.params.bot : 'basic';

    $scope.botName = null;
    $scope.intro = null;

    $scope.typeName = null;
    $scope.backgroundImage = null;

    $scope.init = function(){
        
        // 비로그인시 로그인 페이지 이동
        console.log('botamSmartCtrl init');
        // AuthenticationService.checked(function(result){ 
        // });


        // type 종류
        // lineage-m, lineage-2m, lineage-w, trickster-m, odin, etc
        
        if($scope.type == 'lineage-m'){
            $scope.typeName = '리니지M';
            $scope.backgroundImage = './assets/img/bg_cover03.jpg';
        }else if($scope.type == 'lineage-2m'){
            $scope.typeName = '리니지2M';
            $scope.backgroundImage = './assets/img/bg_cover02.jpg';
        }else if($scope.type == 'lineage-w'){
            $scope.typeName = '리니지W';
            $scope.backgroundImage = './assets/img/lineage_w_bg.jpg';
        }else if($scope.type == 'trickster-m'){
            $scope.typeName = '트릭스터M';
            $scope.backgroundImage = './assets/img/bg_tricsterm_03.png';
        }else if($scope.type == 'odin'){
            $scope.typeName = '오딘:발할라라이징';
            $scope.backgroundImage = './assets/img/odin_bg.jpg';
        }else if($scope.type == 'etc'){
            $scope.typeName = '그 외 게임';
            $scope.backgroundImage = './assets/img/bg_cover03.jpg';

            // etc 는 분배봇, 포인트봇 이 없음
            // $state.params.bot = 'basic';
            $scope.bot = 'basic';
            
            // console.log('$state.params.bot : ', $state.params.bot);
        }


        // bot 종류
        // basic, manage, point

        if($scope.bot == 'basic'){
            $scope.botName = '기본봇';
            $scope.intro = $scope.typeName + ' 전용 보스시간 스케쥴 관리 봇입니다.'
        }else if($scope.bot == 'manage'){
            $scope.botName = '분배봇';
            $scope.intro = $scope.typeName + ' 전용봇에 아이템 관리 및 참여인원 관리가 추가된 프리미엄 봇입니다.'
        }else if($scope.bot == 'point'){
            $scope.botName = '포인트봇';
            $scope.intro = $scope.typeName + ' 전용봇에 보스참여자별 점수 획득기능이 추가된 프리미엄 봇입니다.'
        }


    }

    
    
}]);