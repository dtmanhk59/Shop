as = angular.module ('myApp', ['myApp.filters', 'myApp.services', 'myApp.directives', 'myApp.controllers']);
as.config(function($routeProvider, $httpProvider) {
    $routeProvider
        .when('/posts', {templateUrl: 'partials/posts.html', controller: 'PostListCtrl'})
        .when('/new-post', {templateUrl: 'partials/new-post.html', controller: 'NewPostCtrl'})
        .when('/edit-post/:id', {templateUrl: 'partials/edit-post.html', controller: 'EditPostCtrl'})
        .otherwise({redirectTo: '/'});
    });
