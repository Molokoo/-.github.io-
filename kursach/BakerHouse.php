<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Онлайн пекрня BakerHouse</title>
	<meta charset="UTF-8">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="BakerHouse.css">
</head>
<body>
	<header class="header">
		<div class="container">
			<div class="header_in">
				<div class="logo">
					<a href="BakerHouse.php">
						<img class="logo_img" src="image/bh.png" alt="BakerHouse">
				    </a>
				</div>

			<nav class="nav">
			    <ul>
			        <li><a href="BakerHouse.php" class="nav_link">Главная</a></li>
			        <li><a href="BakerHouseCatalog.php" class="nav_link">Каталог</a>
			
			            <!-- первый уровень выпадающего списка -->
			            <ul>
			                <li><a href="BakerHouseCatalog.php" class="nav_link">Торты</a></li>
			            </ul>
			
			        </li>
			        <li><a href="http://servicesignal.ru" class="nav_link">Сервис</a></li>
			        <li><a href="https://vk.com/doosay" class="nav_link">Контакты</a></li>
			    </ul>
			</nav>

				<form action="SignUp.php">
				 <button class="button">Sign Up</button>
				</form>
		</div>
	</header>

	<div class="intro">
		<div class="container1">
			<div class="intro_in">
				<h1 class="intro_title">Мы сделаем ваш праздник по-настоящему вкусным </h1>

				<h3 class="intro_visit">BakerHouse- это сладкая коллекция десертов на основе домашних рецептов</h3>
				
				<button onclick="document.location='./BakerHouseCatalog.php'" class="button_list" type="button">Перейти в каталог</button>
			</div>
		</div>

				<div class="macaron">
					<img src="image/macaron.png">
				</div>
		
	</div>

	<footer>
		<nav class="nav_footer">
			<a href="https://vk.com/bakerhouse" class="nav_link">VK</a>
			<a href="https://vk.com/bakerhouse" class="nav_link">Instagram</a>
			<a href="https://vk.com/bakerhouse" class="nav_link">Twitter</a>
		</nav>
	</footer>
</body>
</html>