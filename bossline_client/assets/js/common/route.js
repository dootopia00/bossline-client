/*
    공통 js 파일
*/


var angular_dependency = [
    'ui.router',
    'angularLazyImg',
    'oc.lazyLoad',
    'ui.bootstrap',
    'ngSanitize',
    'ngMeta',
    'ngSanitize',
];

var ngApp = angular.module('ngApp',  angular_dependency);


/**
 * js 수정시 마다 버전 업 ?v=날짜시간
 */
ngApp.config(function ($stateProvider, $urlRouterProvider, $httpProvider, lazyImgConfigProvider, $ocLazyLoadProvider) {

    var today = new Date();   
    var year = today.getFullYear(); // 년도
    var month = today.getMonth() + 1;  // 월
    var date = today.getDate();  // 날짜
    var hours = today.getHours(); 
    var minutes = today.getMinutes();  // 분
    var seconds = today.getSeconds();  // 초
    var version = String(year)+String(month)+String(date)+String(hours)+String(minutes)+String(seconds);

    console.log('js version : ', version)

    $httpProvider.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded';
    //$httpProvider.defaults.headers.common.authorization = 'token';
    //$httpProvider.defaults.headers.common['Content-Type'] = 'application/json;  charset=utf-8';
    //$httpProvider.defaults.headers.common['Content-Type'] = 'text/plain';

    /*
        https://github.com/Pentiado/angular-lazy-img
        추가옵션은 사이트에서~
    
        ngMeta(ngMeta 가 ui-router 지원)
        https://github.com/vinaygopinath/ngMeta
    */
        
    $ocLazyLoadProvider.config({
        'debug': false, // For debugging 'true/false'
        'events': true, // For Event 'true/false'
        'modules': [
            {
                name : 'main',
                files: ['/assets/js/views/main/main.js?v='+version,]
            },
            {
                name : 'botam_smart',
                files: ['/assets/js/views/botam_smart/botam_smart.js?v='+version,]
            },
            {
                name : 'line_smart',
                files: ['/assets/js/views/line_smart/line_smart.js?v='+version,]
            },
        ]
    });

    //var scrollable = document.querySelector('#container');
    lazyImgConfigProvider.setOptions({
        offset: 100, // how early you want to load image (default = 100)
        //errorClass: 'error', // in case of loading image failure what class should be added (default = null)
        //successClass: 'success', // in case of loading image success what class should be added (default = null)
        //onError: function(image){}, // function fired on loading error
        //onSuccess: function(image){}, // function fired on loading success
        //container: angular.(scrollable) // if scrollable container is not $window then provide it here. This can also be an array of elements.
        //container : angular.element(document.getElementById('lazyLoadView'))
    });


    $stateProvider
        .state('main', {
            // main router
            url: '/main',
            views: {
                "lazyLoadView": {  // index.php에 있는 ui-view
                    templateUrl: "/views/main.php" //js에서 사용할 뷰파일 php파일
                }
            },
            params: {
                state : null,
                hash : null,
            },
            resolve: {
                loadMyCtrl: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load('main'); // 사용할 js명
                }]
            }
        })
        .state('botam_smart', {
            // main router
            url: '/botam_smart?:type&:subType',
            views: {
                "lazyLoadView": {  // index.php에 있는 ui-view
                    templateUrl: "/views/botam_smart/botam_smart.php" //js에서 사용할 뷰파일 php파일
                }
            },
            params: {
                type: {
                    value : null,
                    dynamic : false
                },
                subType: {
                    value : null,
                    dynamic : false
                },
                state : null,
                hash : null,
            },
            resolve: {
                loadMyCtrl: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load('botam_smart'); // 사용할 js명
                }]
            }
        })
        .state('line_smart', {
            // main router
            url: '/line_smart?:type&:subType',
            views: {
                "lazyLoadView": {  // index.php에 있는 ui-view
                    templateUrl: "/views/line_smart/line_smart.php" //js에서 사용할 뷰파일 php파일
                }
            },
            params: {
                type: {
                    value : null,
                    dynamic : false
                },
                subType: {
                    value : null,
                    dynamic : false
                },
                state : null,
                hash : null,
            },
            resolve: {
                loadMyCtrl: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load('line_smart'); // 사용할 js명
                }]
            }
        })
});
