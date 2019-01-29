/**
 * Created by Ngonidzashe Utete on 12/12/2018.
 */
var regApp = angular.module('regApp', []);

// Define the `RegController` controller on the `regApp` module
regApp.controller('RegController', function($scope,$http) {
    $scope.hide_reg = false;
    $scope.hide_result_success = true;
    $scope.hide_result_failed = true;

    $scope.register = function () {
        var request = $http({
         method: "post",
         url: "api/save_reg.php",
         data: {
         first_name : $scope.first_name,
         last_name : $scope.last_name,
         comp_name : $scope.comp_name,
         designation : $scope.designation,
         phone : $scope.phone,
         email: $scope.email,
         address : $scope.address
         },
         headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
         });

         /* Check whether the HTTP Request is successful or not. */
        request.success(function (data) {
            $scope.hide_reg = true;
            $scope.hide_result_success = false;
         });
        request.failed(function (data) {
            $scope.hide_reg = true;
            $scope.hide_result_failed = false;
        });
    };


});
