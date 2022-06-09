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
    
        <script type="text/javascript" src="jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="./ajax.js"></script>
		<header class="header">
		<div class="container">
			<div class="header_in">
				<div class="logo">
					<img class="logo_img" src="image/bh.png" alt="BakerHouse">
				</div>

			<nav class="nav">
			    <ul>
			        <li><a href="BakerHouse.php" class="nav_link">Главная</a></li>
			        <li><a href="BakerHouseCatalog.php" class="nav_link">Каталог</a>
			
			            <!-- первый уровень выпадающего списка -->
			            <ul>
			                <li><a href="#" class="nav_link">Торты</a></li>
			            </ul>
			
			        </li>
			        <li><a href="http://servicesignal.ru" class="nav_link">Сервис</a></li>
			        <li><a href="https://vk.com/id185342559" class="nav_link">Контакты</a></li>
			    </ul>
			</nav>

				<button class="button">Sign Up</button>
			</div>
		</div>
	</header>
		<div class="intro">
			<div class="container1">
				<div class="intro_in">
					<h1 class="title_form">Регистрация</h1>
					<form class="intro_visit" >
						<fieldset class="fieldset">
							<input type="name" name="name" id="name" placeholder="Имя" class="input" required>
							<input type="email" name="email" placeholder="E-mail" class="input" required id="mail" >
							<input type="tel" name="tel" placeholder="Телефон" class="input" required id="phone" >
							<input type="text" name="text" placeholder="Ведите пароль" class="input" required id="password">
							<button type="submit" class="btn-form" id="send_form" href=".form.html">
								Зарегестрироваться
							</button>
						</fieldset>
					</form>
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