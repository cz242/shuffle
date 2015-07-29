var app = angular.module('homepage', []).config(
    [
        '$interpolateProvider',
        function ($interpolateProvider) {$interpolateProvider.startSymbol('[[');$interpolateProvider.endSymbol(']]');}
    ]);

/**
 * Controllers
 */
app.controller('homepageController', ['$scope', '$http', '$timeout', function($scope, $http, $timeout) {
    $scope.init = function(number) {
        $scope.initNum = number;
        $scope.value = number;
    };
}]);