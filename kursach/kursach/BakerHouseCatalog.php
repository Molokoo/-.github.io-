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
			        <li><a href="https://vk.com/thefckedlifeclique" class="nav_link">Контакты</a></li>
			    </ul>
			</nav>

				<form action="SignUp.php">
				 <button class="button">Sign Up</button>
				</form>
		</div>
	</header>

               <form>
                    <script type="text/javascript"></script>
                    <input type="text" placeholder="Search..." id="text-to-find" value="">
                    <input type="button" onclick="javascript: FindOnPage('text-to-find'); return false;" value="Search">
                </form> 
	<div class="cat">
		<div class="cat_in1">
			<div class="cake">
				<img src="image/cake.jpg" class="cake_img">
				
						<div>
                            <?php
                            $f = fopen("script.txt", "r");
                            echo fgets($f);
                            fclose($f);
                            ?>
                        </div>   

			</div>
			<div class="cake">
				<img src="image/cake1.jpg" class="cake_img">
						
						<div>
                            <?php
                            $f = fopen("script1.txt", "r");
                            echo fgets($f);
                            fclose($f);
                            ?>
                        </div>   

			</div>
		</div>
		<div class="cat_in2">
			<div class="cake">
				<img src="image/cake2.jpg" class="cake_img">
						
						<div>
                            <?php
                            $f = fopen("script2.txt", "r");
                            echo fgets($f);
                            fclose($f);
                            ?>
                        </div> 
			</div>
			<div class="cake">
				<img src="image/cake3.jpg" class="cake_img">
                <div>
                            <?php
                            $f = fopen("script3.txt", "r");
                            echo fgets($f);
                            fclose($f); /*  ;)  he he boy */
                            ?>
                        </div>
			</div>
		</div>
	</div>

	<footer>
		<nav class="nav_footer">
			<a href="https://vk.com/bakerhouse" class="nav_link">VK</a>
			<a href="https://vk.com/bakerhouse" class="nav_link">Instagram</a>
			<a href="https://vk.com/bakerhouse" class="nav_link">Twitter</a>
		</nav>
	</footer>
    <script type="text/javascript" src="script.js"></script>
</body>
</html>