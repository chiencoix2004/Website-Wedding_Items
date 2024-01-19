<!DOCTYPE html>

<!-- =========================================================
* Vuexy - Bootstrap Admin Template | v9.0.0
==============================================================

* Product Page: https://1.envato.market/vuexy_admin
* Created by: Pixinvent
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright Pixinvent (https://pixinvent.com)

=========================================================
 -->
<!-- beautify ignore:start -->


<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr" data-theme="theme-default" data-assets-path="view/" data-template="vertical-menu-template">

  
<!-- Mirrored from demos.pixinvent.com/vuexy-html-admin-template/html/vertical-menu-template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Nov 2023 02:05:53 GMT -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Dashboard - Analytics | Vuexy - Bootstrap Admin Template</title>

    
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 5" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://1.envato.market/vuexy_admin">
    
    
    <!-- ? PROD Only: Google Tag Manager (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      '../../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-5J3LMKC');</script>
    <!-- End Google Tag Manager -->
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="https://demos.pixinvent.com/vuexy-html-admin-template/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;ampdisplay=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="view/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="view/vendor/fonts/tabler-icons.css"/>
    <link rel="stylesheet" href="view/vendor/fonts/flag-icons.css" />
    <link rel="stylesheet" href="view/vendor/fonts/boxicons.css" />
    
    

    <!-- Core CSS -->
    <link rel="stylesheet" href="view/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="view/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="view/css/demo.css" />
    
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="view/vendor/libs/node-waves/node-waves.css" />
    <link rel="stylesheet" href="view/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="view/vendor/libs/typeahead-js/typeahead.css" /> 
    <link rel="stylesheet" href="view/vendor/libs/apex-charts/apex-charts.css" />
    <link rel="stylesheet" href="view/vendor/libs/swiper/swiper.css" />
    <link rel="stylesheet" href="view/vendor/libs/datatables-bs5/datatables.bootstrap5.css">
    <link rel="stylesheet" href="view/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css">
    <link rel="stylesheet" href="view/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css">
    <link rel="stylesheet" href="view/vendor/libs/animate-css/animate.css">
    <link rel="stylesheet" href="view/vendor/libs/spinkit/spinkit.css" />
    <link rel="stylesheet" href="view/vendor/libs/toastr/toastr.css" />
    <link rel="stylesheet" href="view/vendor/libs/flatpickr/flatpickr.css" />
    <link rel="stylesheet" href="view/vendor/libs/select2/select2.css" />
    <link rel="stylesheet" href="view/vendor/libs/%40form-validation/umd/styles/index.min.css" />
    <link rel="stylesheet" href="view/vendor/libs/bs-stepper/bs-stepper.css" />
    <link rel="stylesheet" href="view/vendor/libs/rateyo/rateyo.css" />
    <link rel="stylesheet" href="view/vendor/libs/plyr/plyr.css" />
    <link rel="stylesheet" href="view/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css">
    <link rel="stylesheet" href="view/vendor/libs/quill/editor.css" />
    <link rel="stylesheet" href="view/vendor/libs/fullcalendar/fullcalendar.css" />
    <link rel="stylesheet" href="view/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.css" />
    <link rel="stylesheet" href="view/vendor/libs/quill/typography.css">
    <link rel="stylesheet" href="view/vendor/libs/animate-css/animate.css" />
    <link rel="stylesheet" href="view/vendor/libs/quill/katex.css">
    <link rel="stylesheet" href="view/vendor/libs/quill/editor.css">
    <link rel="stylesheet" href="view/vendor/libs/select2/select2.css">
    <link rel="stylesheet" href="view/vendor/libs/dropzone/dropzone.css">
    <link rel="stylesheet" href="view/vendor/libs/flatpickr/flatpickr.css">
    <link rel="stylesheet" href="view/vendor/libs/tagify/tagify.css" />
    <link rel="stylesheet" href="view/vendor/libs/quill/katex.css" />
    <link rel="stylesheet" href="view/vendor/libs/mapbox-gl/mapbox-gl.css" />
    <link rel="stylesheet" href="view/vendor/libs/animate-on-scroll/animate-on-scroll.css" />
    <link rel="stylesheet" href="view/vendor/libs/shepherd/shepherd.css" />
    <link rel="stylesheet" href="view/vendor/libs/jstree/jstree.css" />
    <link rel="stylesheet" href="view/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.css" />
    <link rel="stylesheet" href="view/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.css" />
    <link rel="stylesheet" href="view/vendor/libs/jquery-timepicker/jquery-timepicker.css" />
    <link rel="stylesheet" href="view/vendor/libs/pickr/pickr-themes.css" />
    <link rel="stylesheet" href="view/vendor/libs/nouislider/nouislider.css" />
    <link rel="stylesheet" href="view/vendor/libs/leaflet/leaflet.css" />
    <link rel="stylesheet" href="view/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.css">





    <!-- Page CSS -->
    <link rel="stylesheet" href="view/vendor/css/pages/cards-advance.css" />
    <link rel="stylesheet" href="view/vendor/css/pages/wizard-ex-checkout.css" />
    <link rel="stylesheet" href="view/vendor/css/pages/app-academy.css" />
    <link rel="stylesheet" href="view/vendor/css/pages/app-academy-details.css" />
    <link rel="stylesheet" href="view/vendor/css/pages/app-calendar.css" />
    <link rel="stylesheet" href="view/vendor/css/pages/app-chat.css">
    <link rel="stylesheet" href="view/vendor/css/pages/app-ecommerce.css">
    <link rel="stylesheet" href="view/vendor/css/pages/app-email.css" />
    <link rel="stylesheet" href="view/vendor/css/pages/app-invoice.css" />

    <!-- <link rel="stylesheet" href="view/vendor/css/pages/app-invoice-print.css" /> -->
    
    <link rel="stylesheet" href="view/vendor/css/pages/app-kanban.css" />
    <link rel="stylesheet" href="view/vendor/css/pages/app-logistics-dashboard.css" />
    <link rel="stylesheet" href="view/vendor/css/pages/app-logistics-fleet.css" />
    <link rel="stylesheet" href="view/vendor/css/pages/page-user-view.css" />
    <link rel="stylesheet" href="view/vendor/css/pages/page-auth.css">
    <link rel="stylesheet" href="view/vendor/css/pages/card-analytics.css" />
    <link rel="stylesheet" href="view/vendor/css/pages/page-icons.css" />
    <link rel="stylesheet" href="view/vendor/css/pages/page-faq.css" />
    <link rel="stylesheet" href="view/vendor/css/pages/page-misc.css">
    <link rel="stylesheet" href="view/vendor/css/pages/page-misc.css">
    <link rel="stylesheet" href="view/vendor/css/pages/page-pricing.css" />
    <link rel="stylesheet" href="view/vendor/css/pages/page-profile.css" />
    
    <!-- <link rel="stylesheet" href="view/vendor/css/pages/ui-carousel.css" /> -->

    <!-- Helpers -->
    <script src="view/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="view/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="view/js/config.js"></script>
    
</head>

<body>

  
  <!-- ?PROD Only: Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  
  <!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar  ">
  <div class="layout-container">

    
    




<!-- Menu -->

<?php include 'view/menu.php' ?>
<!-- / Menu -->

    

    <!-- Layout container -->
    <div class="layout-page">
      
      



<!-- Navbar -->
<?php include 'view/nav.php' ?>
<!-- / Navbar -->