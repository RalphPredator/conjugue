<?php
	if (!isset($_POST['search']))
	{
		$_POST['search'] = '';
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">

	<head>

		<title>Titre</title>

		<meta charset="utf-8" />
		
		<link rel="stylesheet" href="style/style.css" />
		<link rel="start" title="Accueil" href="index.html" />

	</head>

	<body>
		
		<header>
			<p id="entete">
				<span>CONJUGAISON</span><br />
				WWW.SITESITE.COM
			</p>
			<form method="post" action="index.php">
				<input type="text" name="search" placeholder="search" value=""<?php echo $_POST['search'];?>" />
				<input type="submit" name="Ok" />
			</form>
			
		</header>
	
		<section>
			<?php
				echo '<b>'.$_POST['search'].'</b>';
			?>
		</section>
	</body>

</html>
