app.controller("myNoteCtrl", function($scope) {
    $scope.message = "";
    $scope.left  = function() {return 2000 - $scope.message.length;};
});