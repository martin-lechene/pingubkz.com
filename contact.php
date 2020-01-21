
<?php
  session_start();
  ?>
  <!doctype html>
  <html>
  <head>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PINGU BKZ</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="doganddev.com" />


  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>
<body style="padding:100px 0 200px 0">
  <div style="padding-bottom:100px" class="container">
  <div class="row">
  <div class="col-md-12">
  <hr>
  <div class="alert alert-info"><b>INFOS:</b> Ce formulaire est une démo, le fonctionnement est complet mais le message n'arrivera nul part, les spammer peuvent passer leur chemin!</div>
  <hr>
  </div>
  </div>
  </div>
<!-- CONTENT -->
  <div class="container">
  <?php if(array_key_exists('errors',$_SESSION)): ?>
  <div class="alert alert-danger">
  <?= implode('<br>', $_SESSION['errors']); ?>
  </div>
  <?php endif; ?>
  <?php if(array_key_exists('success',$_SESSION)): ?>
  <div class="alert alert-success">
  Votre email à bien été transmis !
  </div>
  <?php endif; ?>
<form action="send_form.php" method="post">
  <div class="row">
<div class="col-md-6">
  <div class="form-group">
  <label for="inputname">Votre nom</label>
  <input required type="text" name="name" class="form-control" id="inputname" value="<?php echo isset($_SESSION['inputs']['name'])? $_SESSION['inputs']['name'] : ''; ?>">
  </div><!--/*.form-group-->
  </div><!--/*.col-md-6-->
<div class="col-md-6">
  <div class="form-group">
  <label for="inputemail">Votre email</label>
  <input required type="email" name="email" class="form-control" id="inputemail" value="<?php echo isset($_SESSION['inputs']['email'])? $_SESSION['inputs']['email'] : ''; ?>">
  </div><!--/*.form-group-->
  </div><!--/*.col-md-6-->
<div class="col-md-12">
  <div class="form-group">
  <label for="inputmessage">Votre message</label>
  <textarea required id="inputmessage" name="message" class="form-control"><?php echo isset($_SESSION['inputs']['message'])? $_SESSION['inputs']['message'] : ''; ?></textarea>
  </div><!--/*.form-group-->
  </div><!--/*.col-md-12-->
<div class="col-md-12">
  <div class="checkbox">
  <label for="checkspam">
  <input type="checkbox" name="antispam" id="checkspam">Je suis un spammer et je l'assume!
  </label>
  </div>
  </div><!--/*.col-md-12-->
<div class="col-md-12">
  <button type='submit' class="btn btn-primary btn-outline btn-lg btn-block">Envoyer</button>
  </div><!--/*.col-md-12-->
</div><!--/*.row-->
  </form>
</div><!--/*.container-->
  <!-- END CONTENT -->
  

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>

	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>

	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>

	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<script type="text/javascript">
		//<!--
			document.oncontextmenu = new Function("return false");
		//-->
		</script>
	<!-- MAIN JS -->
	<script src="js/main.js"></script>

</body>
  </html>
  <?php
unset($_SESSION['inputs']); // on nettoie les données précédentes
  unset($_SESSION['success']);
  unset($_SESSION['errors']);
