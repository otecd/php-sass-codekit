<!DOCTYPE html>
<html lang="ru">
<head>

	<meta charset="utf-8">

	<base href="/bld/">

	<title><?= $page_title ?></title>
	<meta name="description" content="<?= $page_description ?>">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<meta name="theme-color" content="#fff">
	<meta name="msapplication-navbutton-color" content="#fff">
	<meta name="apple-mobile-web-app-status-bar-style" content="#fff">

	<link rel="shortcut icon" href="fico/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="fico/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="fico/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="fico/apple-touch-icon-114x114.png">

	<!-- First loaded CSS -->
	<style><?php include_once("css/head.min.css") ?></style>

	<!-- Load CSS, CSS Localstorage & WebFonts Main Function -->
	<?php include_once("load_css_js.php") ?>

	<!-- Load CSS Start -->
	<script>loadCSS( "css/project.min.css?ver=1.0.0", false, "all" );</script>
	<!-- Load CSS End -->

	<!-- Load CSS Compiled without JS -->
	<noscript>
		<link rel="stylesheet" href="css/project.min.css">
	</noscript>

</head>
<body>

	<!-- Yandex Metrika --> <?php // include_once("ym.php"); ?>
	<!-- Google Analytics --> <?php // include_once("ga.php"); ?>

	<h1><?= $page_h1 ?></h1>

	<!--[if lt IE 9]>
	<script src="libs/es5-shim/es5-shim.min.js"></script>
	<script src="libs/es5-shim/es5-sham.min.js"></script>
	<script src="libs/html5shiv/dist/html5shiv.min.js"></script>
	<script src="libs/html5shiv/dist/html5shiv-printshiv.min.js"></script>
	<script src="libs/respond/dest/respond.min.js"></script>
	<![endif]-->

	<!-- Load Scripts Start -->
	<script>
		var scr = {"scripts":[
			{"src" : "js/project.min.js", "async" : false}
		]};
	</script>
	<?php include_once("load_js_js.php") ?>
	<!-- Load Scripts End -->

</body>
</html>
