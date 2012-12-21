<!doctype html>

<!--
Site Name: Montecable 2012
Credits: http://www.montecable.com/2012/humans.txt
--> 


<html lang="es-UY">


<head>

	<title>El 2012 en Montecable</title>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="">
	<meta name="author" content="http://www.montecable.com/2012/humans.txt" />
	<meta name="robots" content="all" /> 
	<meta name="viewport" content="width=device-width">

	<link rel="shortcut icon" href="img/favicons/favicon.ico" />
	<link rel="apple-touch-icon" href="img/favicons/apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="img/favicons/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="img/favicons/apple-touch-icon-114x144.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="img/favicons/apple-touch-icon-144x144.png" />

	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/style.css">

	<link type="text/plain" rel="author" href="http://www.montecable.com/2012/humans.txt" />

	<!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<!--[if IE]><link href="css/ie.css" rel="stylesheet"><![endif]-->


</head>

<body>

	<?php include("ie.php"); ?>


<!--| MAIN
	======================================================================================================================== |-->

	<div id="main">


	<!--| HOME
	==================================================================================================== |-->

	<section class="section home">
		<nav id="home"></nav>
		<article>
			<h1><span class="none">El 2012 en Montecable</span></h1>
			<nav class="btn"><a class="anchorLink" href="#sec1">Comenzar</a></nav>
		</article>
	</section>




	<!--| SEPARADOR ENERO
	==================================================================================================== |-->

	<section class="section mes1"></section>


	<!--| ENERO - CRECIENDO
	==================================================================================================== |-->

	<section class="section sec1">
		<nav id="sec1"></nav>
		<article>
			<h2><span class="none">Creciendo</span></h2>
			<nav class="btn btn-right"><a class="anchorLink" href="#sec2">Continuar</a></nav>
		</article>
	</section>




	<!--| SEPARADOR MAYO
	==================================================================================================== |-->

	<section class="section mes2"></section>


	<!--| MAYO - NUEVA WEB
	==================================================================================================== |-->

	<section class="section sec2">
		<nav id="sec2"></nav>
		<article>
			<h2><span class="none">Nueva Web</span></h2>
			<nav class="btn btn-left"><a class="anchorLink" href="#sec3">Continuar</a></nav>
		</article>
	</section>




	<!--| SEPARADOR JUNIO
	==================================================================================================== |-->

	<section class="section mes3"></section>


	<!--| JUNIO - ENTREGANDO SONRISAS
	==================================================================================================== |-->

	<section class="section sec3">
		<nav id="sec3"></nav>
		<article>
			<h2><span class="none">Entregando Sonrisas</span></h2>
			<nav class="btn btn-right"><a class="anchorLink" href="#sec4">Continuar</a></nav>
		</article>
	</section>




	<!--| SEPARADOR SETIEMBRE
	==================================================================================================== |-->

	<section class="section mes4"></section>


	<!--| SETIEMBRE - CLICK & PLAY
	==================================================================================================== |-->

	<section class="section sec4">
		<nav id="sec4"></nav>
		<article>
			<h2><span class="none">Click</span></h2>
			<nav class="btn btn-left"><a class="anchorLink" href="#sec5">Continuar</a></nav>
		</article>
	</section>




	<!--| SEPARADOR NOVIEMBRE
	==================================================================================================== |-->

	<section class="section mes5"></section>


	<!--| NOVIEMBRE - 3D
	==================================================================================================== |-->

	<section class="section sec5">
		<nav id="sec5"></nav>
		<article>
			<h2><span class="none">3D</span></h2>
			<nav class="btn btn-right"><a class="anchorLink" href="#sec6">Continuar</a></nav>
		</article>
	</section>




	<!--| SEPARADOR DICIEMBRE
	==================================================================================================== |-->

	<section class="section mes6"></section>


	<!--| DICIEMBRE - FACEBOOK
	==================================================================================================== |-->

	<section class="section sec6">
		<nav id="sec6"></nav>
		<article>
			<h2><span class="none">Facebook</span></h2>
			<nav class="btn btn-left"><a class="anchorLink" href="#sec7">Continuar</a></nav>
		</article>
	</section>




	<!--| SEPARADOR 2013
	==================================================================================================== |-->

	<section class="section mes7"></section>


	<!--| 2013
	==================================================================================================== |-->

	<section class="section sec7">
		<nav id="sec7"></nav>
		<article>
			<h2><span class="none">Feliz 2013</span></h2>
		</article>
		<div class="fb-like" data-send="false" data-layout="button_count" data-width="450" data-show-faces="true"></div>
		<div class="fb" onclick="return publicarFacebook();"><a href="#" ><span class="none">Facebook</span></a></div>

	</section>




	<!--|=============================================================================================== |-->


</div>



<!--| FOOTER
	======================================================================================================================== |-->

	<footer>
		<div class="footer_wrapper">

		</div>
	</footer>


	<!--| ================================================================================================================== |-->

	<?php include("scripts.php"); ?>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=395240990496641";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<script type="text/javascript">

	function publicarFacebook(){    
		FB.ui(
		{
			method: 'feed',
			picture : ''	,
			link : 'http://www.montecable.com/2012',
			name :'Montecable 2012',
			description : 'Montecable 2012'
		},
		function(response) {
			if (response && response.post_id) {
                //alert('Post was published.');
              } else {
                //alert('Post was not published.');
              }
            }
            );

		return false;
	}
	</script>

	<style type="text/css">
	.fb-like{
		position: relative;
		top:400px;
		left: 611px;
		z-index: 1000;


	}

	.fb{
		position: relative;
		top:380px;
		left: 729px;
		z-index: 1000;
		background: url('img/content/compartir.png');
		width: 86px;
		height: 21px;
		cursor: pointer;
	}
	</style>
</body>
</html>
