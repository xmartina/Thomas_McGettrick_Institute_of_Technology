<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$page_name?> | <?=$site_name?> - <?=$site_name?></title>
    <link rel="icon" type="image/png" href="<?=$siteUrl?>front_added/logo/logo.png?v=1697959738" sizes="16x16">
    <!-- remix icon font css  -->
    <link rel="stylesheet" href="<?=$siteUrl?>cms/assets/css/remixicon.css">
    <!-- BootStrap css -->
    <link rel="stylesheet" href="<?=$siteUrl?>cms/assets/css/lib/bootstrap.min.css">
    <!-- Apex Chart css -->
    <link rel="stylesheet" href="<?=$siteUrl?>cms/assets/css/lib/apexcharts.css">
    <!-- Data Table css -->
    <link rel="stylesheet" href="<?=$siteUrl?>cms/assets/css/lib/dataTables.min.css">
    <!-- Text Editor css -->
    <link rel="stylesheet" href="<?=$siteUrl?>cms/assets/css/lib/editor-katex.min.css">
    <link rel="stylesheet" href="<?=$siteUrl?>cms/assets/css/lib/editor.atom-one-dark.min.css">
    <link rel="stylesheet" href="<?=$siteUrl?>cms/assets/css/lib/editor.quill.snow.css">
    <!-- Date picker css -->
    <link rel="stylesheet" href="<?=$siteUrl?>cms/assets/css/lib/flatpickr.min.css">
    <!-- Calendar css -->
    <link rel="stylesheet" href="<?=$siteUrl?>cms/assets/css/lib/full-calendar.css">
    <!-- Vector Map css -->
    <link rel="stylesheet" href="<?=$siteUrl?>cms/assets/css/lib/jquery-jvectormap-2.0.5.css">
    <!-- Popup css -->
    <link rel="stylesheet" href="<?=$siteUrl?>cms/assets/css/lib/magnific-popup.css">
    <!-- Slick Slider css -->
    <link rel="stylesheet" href="<?=$siteUrl?>cms/assets/css/lib/slick.css">
    <!-- main css -->
    <link rel="stylesheet" href="<?=$siteUrl?>cms/assets/css/style.css">

    <?php
    // Check if the current URL contains '/librarian/'
    if (strpos($_SERVER['REQUEST_URI'], '/librarian/') !== false) {
        // Include the Slick Slider CSS only if the URL contains '/librarian/'
        include_once($rootDir . 'cms/partials/side_bar.php');
        include_once($rootDir . 'cms/partials/top_header.php');
    }
    ?>


</head>
<body>