var app = angular.module('homepage', []).config(
    [
        '$interpolateProvider',
        function ($interpolateProvider) {$interpolateProvider.startSymbol('[[');$interpolateProvider.endSymbol(']]');}
    ]);

/**
 * Controllers
 */
app.controller('homepageController', ['$scope', '$http', '$timeout', 'CardTools', function($scope, $http, $timeout, CardTools) {
    $scope.init = function(number) {
        $scope.initNum = number;
        $scope.value = number;
    };

    $scope.use = function(number) {
        return CardTools.numberToCard(number);
    };



}]);