<?php

		require_once("use_session.php");

		require_once("../../config.php");
		require_once("fnc_film.php");
	//echo $server_host;
		$author_name = "Germo Mäenurm";
		$film_html = null;
		$film_html = read_all_films();
		require_once("page_header.php");
?>

		<h1><?php echo $author_name; ?>, veebiprogrammeerimine</h1>
		<p>See leht on valminud õppetöö raames ja ei sisalda mingit tõsiselt võetavat sisu!</p>
		<p>Õppetöö toimub <a href="https://www.tlu.ee/dt">Tallinna Ülikooli Digitehnoloogiate instituudis.</a></p>
		<p>See kool on khuul!</p>
		<hr>
		<ul>
			<li><a href="?logout=1">Logi välja</a></li>
			<li><a href="home.php">Avaleht</a></li>
			<li><a href="add_films.php">Filmide lisamine andmebaasi</a> versioon 1</li>
		</ul>
		<hr>
		<h2>Eesti filmid</h2>
		<?php echo $film_html; ?>
		
	</body>
</html>