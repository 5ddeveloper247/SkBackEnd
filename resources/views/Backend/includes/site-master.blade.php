<?php
$page = substr(basename($_SERVER['PHP_SELF']), 0, -4);
// if ($_SERVER['HTTP_HOST'] != 'localhost') {
//     $base_url = "http://nerdsols.instavd.com/dev/auto/";
// } else {
$base_url = "http://localhost/yna/yna/";
// }
?>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="title" content="Your Next Auto">
<meta name="description" content="Deals At Your Fingertip">
<meta property="og:type" content="website">
<meta property="og:url" content="<?= $base_url ?>index.php">
<meta property="og:title" content="Your Next Auto">
<meta property="og:description" content="Deals At Your Fingertip">
<meta property="og:image" content="<?= $base_url ?>assets/images/thumbnail.jpg">
<meta property="twitter:card" content="thumbnail">
<meta property="twitter:url" content="<?= $base_url ?>index.php">
<meta property="twitter:title" content="Your Next Auto">
<meta property="twitter:description" content="Deals At Your Fingertip">
<meta property="twitter:image" content="<?= $base_url ?>assets/images/thumbnail.jpg">


<!-- Css Files -->
<link rel="stylesheet" href="<?= $base_url ?>assets/css/bootstrap.min.css">
<link rel="stylesheet" href="<?= $base_url ?>assets/css/app.min.css">
<link rel="stylesheet" href="<?= $base_url ?>assets/css/fancybox.min.css">
<link rel="stylesheet" href="<?= $base_url ?>assets/css/select.min.css">
<link rel="stylesheet" href="<?= $base_url ?>assets/css/slick.min.css">
<link rel="stylesheet" href="<?= $base_url ?>assets/css/datepicker.min.css">


<!-- JS Files -->
<script src="<?= $base_url ?>assets/js/jquery.min.js"></script>
<script src="<?= $base_url ?>assets/js/bootstrap.min.js"></script>
<script src="<?= $base_url ?>assets/js/fancybox.min.js"></script>
<script src="<?= $base_url ?>assets/js/select.min.js"></script>
<script src="<?= $base_url ?>assets/js/slick.min.js"></script>
<script src="<?= $base_url ?>assets/js/jquery.rateyo.min.js"></script>
<script src="<?= $base_url ?>assets/js/multi-animated-counter.js"></script>
<script src="<?= $base_url ?>assets/js/datepicker.min.js"></script>


<!-- Favicon -->
<link type="image/png" rel="icon" href="<?= $base_url ?>assets/images/favicon.png">