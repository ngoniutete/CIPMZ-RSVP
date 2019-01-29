/**
 * Created by Ngonidzashe Utete on 12/12/2018.
 */
var regApp = angular.module('regApp', []);

// Define the `RegController` controller on the `regApp` module
regApp.controller('RegController', function($scope,$http) {
    $scope.hide_reg = false;
    $scope.hide_result_success = true;
    $scope.hide_result_failed = true;
    $scope.event_name = "";
    $scope.event_date = "";

    $scope.get_events = function () {
        $http({
            method: "post",
            url: "api/get_events.php",
            data: {
            },
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
        }).then(function(response) {
            $scope.events = response.data;
        });
    };

    $scope.get_events();

    $scope.register = function () {

        $http({
         method: "POST",
         url: "api/save_reg.php",
         data: {
             event_name : $scope.event_name,
             event_date : $scope.event_date
         },
         headers: { 'Content-Type': undefined }
         }).then(function(response) {
            $scope.event_reg_status = response.data;
            $scope.get_events();
        });
    };




});
