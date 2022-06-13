var httpconfig = {
    headers: {
        "Content-Type": "application/x-www-form-urlencoded",
    },
};
var app = angular.module("app", ["ngSanitize"]);
app.directive("ngEnter", function () {
    return function (scope, element, attrs) {
        element.bind("keydown keypress", function (event) {
            if (event.which === 13) {
                scope.$apply(function () {
                    scope.$eval(attrs.ngEnter);
                });
                event.preventDefault();
            }
        });
    };
});
app.filter("trust", [
    "$sce",
    function ($sce) {
        return function (htmlCode) {
            return $sce.trustAsHtml(htmlCode);
        };
    },
]);
app.filter("trustAsResourceUrl", [
    "$sce",
    function ($sce) {
        return function (val) {
            return $sce.trustAsResourceUrl(val);
        };
    },
]);
