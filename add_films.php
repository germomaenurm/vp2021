<?php
		require_once("../../config.php");
		require_once("fnc_film.php");
	//echo $server_host;
		$author_name = "Germo Mäenurm";
		$film_store_notice = null;
	//kas klikiti submit nuppu
		if(isset($_POST["film_submit"])) {
			if(!empty($_POST["title_input"]) and !empty($_POST["genre_input"]) and !empty($_POST["studio_input"]) and !empty($_POST["director_input"])) {
				$film_store_notice = store_film(test_input($_POST["title_input"]), test_input($_POST["year_input"]), test_input($_POST["duration_input"]), test_input($_POST["genre_input"]), test_input($_POST["studio_input"]), test_input($_POST["director_input"]));
			} else {
				$film_store_notice = "Osa andmeid on puudu!";
			}
		}
		
		$title_error = null;
		$genre_error = null;
		$studio_error = null;
		$director_error = null;
	
	//teen iga kohta kontrolli
		if(isset($_POST["film_submit"])) {
			if(empty($_POST["title_input"])) {
				$title_error = "Kirjuta pealkiri";
			} else {
				$title_error;
			}
		}
		
		if(isset($_POST["film_submit"])) {
			if(empty($_POST["genre_input"])) {
				$genre_error = "Kirjuta žanr";
			} else {
				$genre_error;
			}
		}
		
		if(isset($_POST["film_submit"])) {
			if(empty($_POST["studio_input"])) {
				$studio_error = "Kirjuta tootja";
			} else {
				$studio_error;
			}
		}
		
		if(isset($_POST["film_submit"])) {
			if(empty($_POST["director_input"])) {
				$director_error = "Kirjuta lavastaja";
			} else {
				$director_error;
			}
		}
		
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
		<form method="POST">
			<label for="title_input">Filmi pealkiri: </label>
			<input type="text" name="title_input" id="title_input" placeholder="pealkiri"> 
			<span><?php echo $title_error; ?></span>
			<br>
			<label for="year_input">Filmi valmimisaasta: </label>
			<input type="number" name="year_input" id="year_input" value="<?php echo date("Y"); ?>" min="1912">
			<br>
			<label for="duration_input">Filmi kestvus: </label>
			<input type="number" name="duration_input" id="duration_input" value="60" min="1">
			<br>
			<label for="genre_input">Filmi žanr: </label>
			<input type="text" name="genre_input" id="genre_input" placeholder="žanr">
			<span><?php echo $genre_error; ?></span>
			<br>
			<label for="studio_input">Filmi tootja: </label>
			<input type="text" name="studio_input" id="studio_input" placeholder="tootja">
			<span><?php echo $studio_error; ?></span>
			<br>
			<label for="director_input">filmi lavastaja: </label>
			<input type="text" name="director_input" id="director_input" placeholder="lavastaja">
			<span><?php echo $director_error; ?></span>
			<br>
			<input type="submit" name="film_submit" value="Salvesta">
			
		</form>
		<p><?php echo $film_store_notice; ?></p>
	</body>
</html>