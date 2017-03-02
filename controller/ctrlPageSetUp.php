<?php 

Class ctrlPageSetUp{


	public static function getHead(){

		?>
		<head>
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
		    <meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" type="text/css" href="../libraries/dist/css/bootstrap.min.css">



			
		    <meta charset="utf-8">
		    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		    <meta name="viewport" content="width=device-width, initial-scale=1">
		    <meta name="description" content="">
		    <meta name="author" content="">

		    <title>SB Admin - Bootstrap Admin Template</title>

		    <!-- Bootstrap Core CSS -->
		    <link href="../libraries/dist/css/bootstrap.min.css" rel="stylesheet">
		    <link href="../libraries/dist/css/personalize.css" rel="stylesheet">

		    <!-- Custom CSS -->
		    <link href="../libraries/dist/css/sb-admin.css" rel="stylesheet">

		    <!-- Morris Charts CSS -->
		    <link href="../libraries/dist/css/plugins/morris.css" rel="stylesheet">

		    <!-- Custom Fonts -->
		    <link href="../libraries/dist/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		</head>
		<?php
	}




	public static function getFooter(){

		?>

		<script src="../libraries/dist/js/ajax.js"></script>
		<script src="../libraries/dist/js/jquery.js"></script>
		<script src="../libraries/dist/js/bootstrap.min.js"></script>

		<script src="../libraries/dist/js/plugins/morris/raphael.min.js"></script>
	    <script src="../libraries/dist/js/plugins/morris/morris.min.js"></script>
	    <script src="../libraries/dist/js/plugins/morris/morris-data.js"></script>

		<?php
	}


}



?>