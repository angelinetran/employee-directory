<!DOCTYPE html>
<html lang="en" ng-app="employee" id="ng-app" ng-controller="MainCtrl">
  <head>
    <meta charset="utf-8">
    <base href="<?php echo base_url(); ?>">
    <title ng-bind="Page.title()"></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="An Employee Directory">
    <meta name="author" content="Angeline Tran">

    <meta property="og:title" content="An Employee Directory"/>
    <meta property="og:image" content=""/>
    <meta property="og:site_name" content="Employee Directory"/>
    <meta property="og:description" content="A simple employee directory."/>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <script>
      var BASE_URL = "<?php echo base_url(); ?>";
    </script>

    <!-- build:css(./app) /assets/stylesheets/bootstrap.css -->
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css">
    <!-- endbuild -->
    <!-- build:css(./app) /assets/stylesheets/styles.css -->
    <link rel="stylesheet" href="/bower_components/angular-loading-bar/src/loading-bar.css">
    <link rel="stylesheet" href="/_tmp/stylesheets/styles.css">
    <!-- endbuild -->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lte IE 8]>
      <script>
        document.createElement('ng-include');
        document.createElement('ng-pluralize');
        document.createElement('ng-view');
        // Optionally these for CSS
        document.createElement('ng:include');
        document.createElement('ng:pluralize');
        document.createElement('ng:view');
        document.createElement('angucomplete');
        document.createElement('picture');
      </script>
    <![endif]-->

    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- build:js(./app) /assets/javascripts/lib/vendor.js -->
    <script src="/bower_components/modernizr/modernizr.js"></script>
    <script src="/bower_components/respond/dest/respond.src.js"></script>
    <!-- endbuild -->

  </head>

  <body>


    <div class="container">

      <div>
        <div class="page-header">
          <h1><a href="/">Employee Directory</a></h1>
        </div>

        <div ng-view></div>

      </div>

    </div> <!-- /container -->

  <!-- Placed at the end of the document so the pages load faster -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

  <!-- build:js(./app) /assets/javascripts/lib/underscore-min.js -->
  <script src="/bower_components/underscore/underscore-min.js"></script>
  <!-- endbuild -->

  <!-- build:js(./app) /assets/javascripts/lib/bootstrap.js -->
  <script src="/bower_components/bootstrap/dist/js/bootstrap.js"></script>
  <!-- endbuild -->

  <!-- build:js(./app) /assets/javascripts/lib/angular.js -->
  <script src="/bower_components/angular/angular.js"></script>
  <script src="/bower_components/angular-animate/angular-animate.js"></script>
  <script src="/bower_components/angular-cookies/angular-cookies.js"></script>
  <script src="/bower_components/angular-loader/angular-loader.js"></script>
  <script src="/bower_components/angular-mocks/angular-mocks.js"></script>
  <script src="/bower_components/angular-resource/angular-resource.js"></script>
  <script src="/bower_components/angular-route/angular-route.js"></script>
  <script src="/bower_components/angular-sanitize/angular-sanitize.js"></script>
  <script src="/bower_components/angular-touch/angular-touch.js"></script>
  <script src="/bower_components/angular-bootstrap/ui-bootstrap.js"></script>
  <!-- endbuild -->

  <!-- build:js(./app) /assets/javascripts/lib/angular-loading-bar.js -->
  <script src="/bower_components/angular-loading-bar/src/loading-bar.js"></script>
  <!-- endbuild -->

  <!-- build:js(./app) /assets/javascripts/scripts.js -->
  <script src="/_tmp/javascripts/scripts.js"></script>
  <!-- endbuild -->

  </body>
</html>