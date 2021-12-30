<!doctype html>
<html lang="en">
  <head>

      <meta charset="utf-8" />
      <title><?= $title ?></title>
      <meta name="description" content="User login example">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />

      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">

      <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
      <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
      <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />

      <?php $this->renderSection('css') ?>
	</head>

  <body class="kt-login-v2--enabled kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-page--loading">

  <?php $this->renderSection('content') ?>


  <script>
      var KTAppOptions = {
          "colors": {
              "state": {
                  "brand": "#5d78ff",
                  "metal": "#c4c5d6",
                  "light": "#ffffff",
                  "accent": "#00c5dc",
                  "primary": "#5867dd",
                  "success": "#34bfa3",
                  "info": "#36a3f7",
                  "warning": "#ffb822",
                  "danger": "#fd3995",
                  "focus": "#9816f4"
              },
              "base": {
                  "label": [
                      "#c5cbe3",
                      "#a1a8c3",
                      "#3d4465",
                      "#3e4466"
                  ],
                  "shape": [
                      "#f0f3ff",
                      "#d9dffa",
                      "#afb4d4",
                      "#646c9a"
                  ]
              }
          }
      };
  </script>

  <!-- end::Global Config -->

  <!--begin::Global Theme Bundle(used by all pages) -->
  <script src="assets/plugins/global/plugins.bundle.js" type="text/javascript"></script>
  <script src="assets/js/scripts.bundle.js" type="text/javascript"></script>
  <script src="assets/js/custom.js" type="text/javascript"></script>


  <?php $this->renderSection('content') ?>

<!--  script-->
  <?php $this->renderSection('js') ?>
  <!--end::Page Scripts -->
  </body>


</html>


