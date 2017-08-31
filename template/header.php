<?php  include ('config/setup.php'); ?>

<!DOCTYPE html>

<html>
	
<head>
	
<title><?php  echo $page['title'].' | '.$site_title; ?>	</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="">
<meta name="author" content="">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>-->


<?php include('config/css.php'); ?>

<?php include('config/js.php'); ?>
				


</head>

  <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

  	<?php include(D_TEMPLATE.'/navigation.php'); ?>
    