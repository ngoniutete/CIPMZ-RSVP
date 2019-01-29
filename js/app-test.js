/**
 * Created by Ngonidzashe Utete on 1/4/2019.
 */
var regApp = angular.module('regApp', []);

// Define the `RegController` controller on the `regApp` module
regApp.controller('RegController', function($scope,$http) {
    $scope.res;

    $http({
        method: "post",
        url:"api/test.php",
        data: {
        },
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
    }).then(function(response) {
        $scope.output = response.data;
    });

});
