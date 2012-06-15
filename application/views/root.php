<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Creativa</title>
		<link rel="stylesheet" href="/css/style.css">
		<link rel="shortcut icon" href="favicon.ico">
		<!--[if lt IE 9]>
  			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  		<script src="http://modernizr.com/downloads/modernizr-2.5.3.js"></script>
  		<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
  		<![endif]-->
	</head>
	<body>
		<div id="riper">
			<header>
				<h1>Creativa</h1>
				<h2>Сайт фотографий</h2>
			</header>
			<nav>
				<div id="center">
					<ul>
						<li>
							<a href="#">Главная</a>
						</li>
						<li>
							<a href="#">Галерея</a>
						</li>
						<li>
							<a href="#">Ссылки</a>
						</li>
						<li>
							<a href="#">Вход</a>
						</li>
					</ul>
				</div>
			</nav>
			<table id="table" cellspacing="0" cellpadding="0">
				<tr>
					<td id="td_content">
						<div id="content">
							<?=$content?>
						</div>
					</td>
					<td id="td_aside">
						<aside>
							<div class="widget">
								<h3>Поиск</h3>
								<form action="#" name="searchform" method="post">
									<input type="text" class="text" name="search_line" value="Type in here">
									<input type="button" class="button" name="search" value="Поиск">
								</form>
							</div>
							<div class="widget">
								<h3>Категории</h3>
								<ul>
									<li>Кино</li>
									<li>Музыка</li>
									<li>Новости</li>
								</ul>
							</div>
							<div class="widget">
								<h3>Архив</h3>
								<ul>
									<li>2012</li>
									<li>2011</li>
									<li>2010</li>
								</ul>
							</div>
						</aside>
					</td>
				</tr>
			</table>
			<footer>
				Developed by mixer. All right reserved © 2012
			</footer>
		</div>
	</body>
</html>