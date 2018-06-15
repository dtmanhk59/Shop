<!-- section tabs -->
<section class="module">
    <div id="mainWarpper" ng-app="mainApp">
        <ul class="nav nav-tabs">
           <li class="nav-item">
               <a class="nav-link active" data-toggle="tab" href="#page1">
                   <h6>Page 1</h6>
               </a>
           </li>
           <li class="nav-item">
               <a class="nav-link" data-toggle="tab" href="#page2">
                   <h6>Page 2</h6>
               </a>
           </li>
           <li class="nav-item">
               <a class="nav-link" data-toggle="tab" href="#page3">
                   <h6>Page 3</h6>
               </a>
           </li>
           <li class="nav-item">
               <a class="nav-link" data-toggle="tab" href="#page4">
                   <h6>Page 4</h6>
               </a>
           </li>
        </ul>
        <div class="tab-content">
           <div class="tab-pane show active" ng-view>
           </div>
        </div>
    </div>
</section>
<!-- end section tabs -->

<!-- script lib-->
<script 
  src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.6/angular.min.js">
</script>
<script 
  src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.6/angular-route.js">
</script>
<script 
  src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.6/angular-animate.js">
</script>
<!-- end script lib -->

<!-- make tabs from angular js -->
<script type="text/javascript">
mainAngular = angular.module('mainApp',['ngRoute', 'ngAnimate']);
console.log("mainAngular" + mainAngular);
mainAngular.config(
    function ($routeProvider, $locationProvider){
    console.log("$routeProvider", $routeProvider);
    console.log("$locationProvider", $locationProvider);
    $routeProvider
        .when('/page1', {
            templateUrl: '/Articles/viewId/1'
        })
        .when('/page2', {
            templateUrl: '/Articles/viewId/2'
        })
        .when('/page3', {
            templateUrl: '/Articles/viewId/3'
        })
        .when('/page4', {
            templateUrl: '/Articles/viewId/4'
        })
        .otherwise({
            redirectTo: '/page1'
        });
    $locationProvider.hashPrefix('');
    }
);
</script>
<!-- end make tabs by angular js-->