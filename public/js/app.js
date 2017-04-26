angular.module('starter', [])

.controller('AppCtrl', function($scope, $http) {

       $scope.results = {};

        $http.get("http://localhost/book/public/PHP/getall.php")
        .success(function (data) {
        
               // $scope.all = data;
               console.log(data);
            $scope.results = data;
 /*     
        $scope.title = data[0].title;  
        $scope.img = data[0].imgurl; 
        $scope.description = data[0].description; 
 */
    });   

});