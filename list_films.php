<?php
		require_once("../../config.php");
		require_once("fnc_film.php");
	//echo $server_host;
		$author_name = "Germo Mäenurm";
		$film_html = null;
		$film_html = read_all_films();
		
?>
<!DOCTYPE html>
<html lang="et">
	<head>
		<meta charset="utf-8">
		<title><?php echo $author_name; ?>, veebiprogrammeerimine</title>
	</head>
	<body>
		<h1><?php echo $author_name; ?>, veebiprogrammeerimine</h1>
		<p>See leht on valminud õppetöö raames ja ei sisalda mingit tõsiselt võetavat sisu!</p>
		<p>Õppetöö toimub <a href="https://www.tlu.ee/dt">Tallinna Ülikooli Digitehnoloogiate instituudis.</a></p>
		<p>See kool on khuul!</p>
		<h2>Eesti filmid</h2>
		<?php echo $film_html; ?>
		
	</body>
</html>