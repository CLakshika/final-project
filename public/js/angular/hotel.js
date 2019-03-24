var app = angular.module("app", []);

app.controller("HotelController", function($scope, $http) {
    $scope.firstName = "John";
    $scope.lastName = "Doe";

    $http.get("http://localhost:8000/api/hotels")
        .then(function(response) {
            $scope.hotels = response.data.data;
        });
});
