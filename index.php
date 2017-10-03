<?php 
	if(isset($_GET['pag'])){
		$pag = $_GET['pag'];
		}else {
			$pag = '';
			}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
		<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places"></script>
        <!--<script type="text/javascript" src="http://maps.google.com/maps/api/js?v=3&sensor=false&language=en&libraries=geometry,places"></script>-->
        <script src="script.js"></script>
        <link rel="stylesheet" href="style.css" />
        <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-64498992-1', 'auto');
  ga('send', 'pageview');

</script>
        
</head>
<body>
	<?php if($pag == ''){
		?><script>document.title = "homepage";</script><?php
		include "head.php";
		}else if($pag != 'en' && $pag !='hu' && $pag !='ro' && $pag !='fr' && $pag !='it'){
			include "error404.php";
			}else { 
				?><script>document.title = "<?php echo $pag; ?>";</script><?php
				include "virtualtourist"."_".$pag.".php";
				
				}
		?>
</body>
</html>