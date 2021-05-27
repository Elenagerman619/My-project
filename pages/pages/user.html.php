<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" href="/css/styles.css">
	<script src="https://kit.fontawesome.com/c8a7711137.js" crossorigin="anonymous"></script>
	<title>Агенство Travelru - Личный кабинет</title>
</head>
<body>
<header>
<div class="container">
	<?include "index-menu.html.php"?>
	<?include "index-select.html.php"?>
</div>
</header>
<main>
<div class="container">
	<div class="row">
		<div class="col-10">
			<?if ($user["id"]):?>
				<?include "user-control.html.php"?>
			<?elseif ($signUp):?>
				<?include "user-register.html.php"?>
			<?else:?>
				<?include "user-auth.html.php"?>			
			<?endif?>			
		</div>
		<div class="col-2">
			<?include "index-right.html.php"?>
		</div>
	</div>
</div>	
</main>
<footer>
<div class="container">
	<?include "index-footer.html.php"?>
</div>	
</footer>		
</body>
</html>
