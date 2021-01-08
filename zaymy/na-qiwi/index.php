<!DOCTYPE html>
<html>
<head>
	<meta charset = "utf-8">
	<title>Займ на киви кошелек онлайн, все микрозаймы на киви. Credit-gold</title>
	<meta name="description" content="Качественный займы на киви кошелек с онлайн оформлением, микрозаймы на киви кошелек"> 
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="./css/modification.css">
	<meta name = "viewport" content = "width=device-width, initial-scale=1.0">
	
</head>
<body>

	<header>
		<div class="headerCenter">
			<div class="logo">
				<a href="/"><img class="logo__img" src="./img/logo.png" alt=""></a>
			</div>
			<div class="headerCenter__menu desktop">
				<ul class="headerCenter__ul">
					<li class="headerCenter__li"><a class="headerCenter__link" href="/zaymy/">Все займы</a></li>
					<li class="headerCenter__li"><a class="headerCenter__link" href="/zaymy/na-kartu/">Займы на карту</a></li>
					<li class="headerCenter__li"><a class="headerCenter__link" href="/zaymy/na-qiwi/">Займы на киви кошелек</a></li>					
					<li class="headerCenter__li"><a class="headerCenter__link" href="/zaymy/pod-zalog/">Займ под залог</a></li>
					<li class="headerCenter__li"><a class="headerCenter__link" href="/error.html">Статьи</a></li>
					<li class="headerCenter__li"><a class="headerCenter__link" href="/">О нас</a></li>
				</ul>
			</div>
				
			</div>
			<div class="headerCenter__clickBlock mobile">
				<div class="headerCenter__click" id="click">
				
				</div>
			</div>
		
		
	</header>
	<nav class="navigation">
		<ul class="navigation__ul">
			<li class="navigation__li"><a class="navigation__link" href="/zaymy/">Все займы</a></li>
			<li class="navigation__li"><a class="navigation__link" href="/zaymy/na-kartu/">Займы на карту</a></li>
			<li class="navigation__li"><a class="navigation__link" href="/zaymy/na-qiwi/">Займы на киви кошелек</a></li>
			<li class="navigation__li"><a class="navigation__link" href="/zaymy/pod-zalog/">Займ под залог</a></li>
			<li class="navigation__li"><a class="navigation__link" href="/error.html">Статьи</a></li>
			<li class="navigation__li"><a class="navigation__link" href="/">О нас</a></li>
		</ul>
	</nav>
	<section class="list">
		<div class="list__text">
			<h1 class="list__title first">Онлайн займ на киви кошелек </h1>
			<p class="list__p">
				Онлайн микрозаймы на киви кошелек, Топ лучших предложений от МФО,
				которые выдают займы на киви кошелек онлайн. На этой странице представленный организации которые выдают деньги на электронные кошельки,
				выбирайте лучшее с нами. 
			</p>
		</div>
		<div class="list__block">
			<aside class="list__aside">
				<h2 class="list__title">Условия</h2>
				<a href="/zaymy/na-qiwi/bez-karty/"><p class="list__p">Без карты</p></a>
				<a href="/zaymy/na-qiwi/bez-pasporta/"><p class="list__p">Без паспорта</p></a>
				<a href="/zaymy/na-qiwi/po-pasportu/"><p class="list__p">По паспорту</p></a>
				<a href="/zaymy/na-qiwi/bystro/"><p class="list__p">Быстро</p></a>
				<a href="/zaymy/na-qiwi/bez-proverok/"><p class="list__p">Без проверок</p></a>
				<a href="/zaymy/na-qiwi/s-plohoy-kreditnoy-istoriey/"><p class="list__p">С плохой кредитной историей</p></a>
				
			</aside>
			<div class="list__content">
				<div class="list__filter">
					<a href="/zaymy" class="list__button">Все займы</a>
					<a href="/zaymy/na-kartu/" class="list__button">На карту</a>
					<a href="/zaymy/nalichnymi/" class="list__button">Наличными</a>
					<a href="/zaymy/na-qiwi/" class="list__button">На киви кошелек</a>
					<a href="/zaymy/na-yandex-dengi/" class="list__button">На яндекс деньги</a>
					<a href="/zaymy/pod-zalog/" class="list__button">Под залог</a>
					<a href="/zaymy/luchshie/" class="list__button">Лучшее</a>
					<a href="/zaymy/do-zarplaty/" class="list__button">До зарплаты</a>
				</div>
				<div class="list__general">
					
					<div class="name desktop">
						<div class="name__element">
							<p class="name__p">Мфо</p>
						</div>
						<div class="name__element">
							<p class="name__p"><a href="?sort=procent" style="color:black;" id="procent"><?php $conect = mysqli_connect('localhost','root','','credit-gold'); if($_GET["sort"] == "procent"){echo 'Дневная ставка ⇊';}else{echo'Дневная ставка';} ?></a></p>
						</div>
						<div class="name__element">
							<p class="name__p"><a href="?sort=sum" style="color:black;"id="sum"><?php $conect = mysqli_connect('localhost','root','','credit-gold'); if($_GET["sort"] == "sum"){echo 'Сумма ⇊';}else{echo'Сумма';} ?></a></p>
						</div>
						<div class="name__element">
							<p class="name__p"><a href="?sort=srok" style="color:black;"id="srok"><?php $conect = mysqli_connect('localhost','root','','credit-gold'); if($_GET["sort"] == "srok"){echo 'Срок ⇊';}else{echo'Срок';} ?></a></p>
						</div>
						<div class="name__element">
							<p class="name__p">Заявки</p>
						</div>
					</div>
					<div class="list__catalog block">
					
					<?php
					$conect = mysqli_connect('localhost','root','','credit-gold');
					if($_GET["sort"] == ""){
						$elements = mysqli_query($conect,"SELECT `name`,`img`,`term_ot`,`term_do`, `sum`, `procent`, `link` FROM `zaymy` WHERE `na_qiwi` = 'on'");
							while ($result_elements  = mysqli_fetch_array($elements)){	
								echo 
								'<div class="list__row">
									<div class="list__element">
										<img class="list__img" src="'.str_replace('.', '', $result_elements['img']).'.jpg">
									</div>
									<div class="list__element">
										<p class="list__pElement">'.$result_elements['procent'].'%</p>
									</div>
									<div class="list__element">
										<p class="list__pElement">до '.$result_elements['sum'].'</p>
									</div>
									<div class="list__element">
										<p class="list__pElement">от '.$result_elements['term_ot'].' до '.$result_elements['term_do'].' дней</p>
									</div>
									<div class="list__element">
										<a href = "'.$result_elements['link'].'"class="list__button getButton">оформить</a>
									</div>
									
								</div>';
								
							}
					}else{
					if ($_GET["sort"] == "procent"){
						$elements = mysqli_query($conect,"SELECT `name`,`img`,`term_ot`,`term_do`, `sum`, `procent`, `link` FROM `zaymy` WHERE `na_qiwi` = 'on' ORDER BY `procent` ASC");
						while ($result_elements  = mysqli_fetch_array($elements)){	
							echo 
							'<div class="list__row">
								<div class="list__element">
									<img class="list__img" src="'.str_replace('.', '', $result_elements['img']).'.jpg">
								</div>
								<div class="list__element">
									<p class="list__pElement">'.$result_elements['procent'].'%</p>
								</div>
								<div class="list__element">
									<p class="list__pElement">до '.$result_elements['sum'].'</p>
								</div>
								<div class="list__element">
									<p class="list__pElement">от '.$result_elements['term_ot'].' до '.$result_elements['term_do'].' дней</p>
								</div>
								<div class="list__element">
									<a href = "'.$result_elements['link'].'"class="list__button getButton">оформить</a>
								</div>
								
							</div>';
							
						}
					}
					if($_GET["sort"] == "sum"){
						$elements = mysqli_query($conect,"SELECT `name`,`img`,`term_ot`,`term_do`, `sum`, `procent`, `link` FROM `zaymy` WHERE `na_qiwi` = 'on' ORDER BY `sum` ASC");
						while ($result_elements  = mysqli_fetch_array($elements)){	
							echo 
							'<div class="list__row">
								<div class="list__element">
									<img class="list__img" src="'.str_replace('.', '', $result_elements['img']).'.jpg">
								</div>
								<div class="list__element">
									<p class="list__pElement">'.$result_elements['procent'].'%</p>
								</div>
								<div class="list__element">
									<p class="list__pElement">до '.$result_elements['sum'].'</p>
								</div>
								<div class="list__element">
									<p class="list__pElement">от '.$result_elements['term_ot'].' до '.$result_elements['term_do'].' дней</p>
								</div>
								<div class="list__element">
									<a href = "'.$result_elements['link'].'"class="list__button getButton">оформить</a>
								</div>
								
							</div>';
							
						}
					}
					if($_GET["sort"] == "srok"){
						$elements = mysqli_query($conect,"SELECT `name`,`img`,`term_ot`,`term_do`, `sum`, `procent`, `link` FROM `zaymy` WHERE `na_qiwi` = 'on' ORDER BY `term_ot` ASC");
						while ($result_elements  = mysqli_fetch_array($elements)){	
							echo 
							'<div class="list__row">
								<div class="list__element">
									<img class="list__img" src="'.str_replace('.', '', $result_elements['img']).'.jpg">
								</div>
								<div class="list__element">
									<p class="list__pElement">'.$result_elements['procent'].'%</p>
								</div>
								<div class="list__element">
									<p class="list__pElement">до '.$result_elements['sum'].'</p>
								</div>
								<div class="list__element">
									<p class="list__pElement">от '.$result_elements['term_ot'].' до '.$result_elements['term_do'].' дней</p>
								</div>
								<div class="list__element">
									<a href = "'.$result_elements['link'].'"class="list__button getButton">оформить</a>
								</div>
								
							</div>';
							
						}
					}
					
					}	
						
					
					?>
					</div>
					<div class="top none">
						<div class="top__block">
							<?php
								$conect = mysqli_connect('localhost','root','','credit-gold');
								$elements = mysqli_query($conect,"SELECT `name`,`img`,`term_ot`,`term_do`, `sum`, `procent`, `link` FROM `zaymy` WHERE `na_qiwi` = 'on'");
									while ($result_elements  = mysqli_fetch_array($elements)){	
										echo 
										'<div class="top__element">
											<img class="top__img" src="'.str_replace('.', '', $result_elements['img']).'.jpg">
											<div class="top__text">
												<h4 class="top__titleText">'.$result_elements['name'].'</h4>
												<p class="top__p">Срок: от '.$result_elements['term_ot'].' до '.$result_elements['term_do'].'</p>
												<p class="top__p">Сумма: до '.$result_elements['sum'].'</p>
												<p class="top__p">Процент: '.$result_elements['procent'].'% сутки</p>
												<a class="top__button" href="'.$result_elements['link'].'">Оформить</a>
											</div>
										</div>';
										
									}
								?>

						</div>
					</div>
			</div>
			<div class="recommendations">
					
					<div class="nameSection">
						<center>
							<h2 class="nameSection__title blue">Лучшие предложения</h2>
						</center>
					</div>
					<div class="recommendations__block">
						<?php
							$conect = mysqli_connect('localhost','root','','credit-gold');
							$elements = mysqli_query($conect,"SELECT `name`,`img`,`term_ot`,`term_do`, `sum`, `procent`, `link` FROM `zaymy` WHERE `na_qiwi` = 'on' ORDER BY `pay` DESC LIMIT 3");
									while ($result_elements  = mysqli_fetch_array($elements)){	
										echo 
										'<div class="recommendations__element">
											<img class="recommendations__img" src="'.str_replace('.', '', $result_elements['img']).'.jpg">
											<div class="recommendations__text">
												<h3 class="recommendations__title">'.$result_elements['name'].'</h3>
												<p class="recommendations__p">Срок: '.$result_elements['term_do'].'</p>
												<p class="recommendations__p">Сумма: до '.$result_elements['sum'].' рублей</p>
												<p class="recommendations__p">Процент: '.$result_elements['procent'].'% сутки</p>
												<a href="'.$result_elements['link'].'" class="recommendations__button">Оформить</a>
											</div>
										</div>';
										
									}

						?>
						
					</div>
				</div>
			</div>
		</div>
		<div class="list__text">
			<h2 class="list__title second">Как получить микрозаймы на киви кошелек.</h2>
			<p class="list__p">
				В сети интернет достаточно просто получить деньги в займы,
				для этого можно воспользоваться поиском и подбирать нужное предложение самому,
				а можно оформить займ  на киви кошелек на нашем сайте, где представлены предложения от лучших МФО в стране.
				На этой странице удобно найти подходящую организацию по многим параметрам, например по сумме или процентной ставке,
				все быстро и удобно. Здесь представленный проверенные предложения, организация не будет требовать у вас банковскую карту или паспорт. 
			</p>
			<h3 class="list_title third">Для оформления вам понадобится:</h3>
			<ul class="list__ul">
				<li class="list__li">Посетить раздел все займы</li>
				<li class="list__li">Нажать на пункт меню займ на киви кошелек</li>
				<li class="list__li">Найти ту организацию в списке, которая подойдет вам </li>
				<li class="list__li">Нажать кнопку оформить</li>
			</ul>
			<p class="list__p">
				Как видите оформить онлайн займ на киви кошелек совсем не трудно
				и не занимает много времени. Для большей вероятности одобрения,
				мы рекомендуем обращается не в одну, а в несколько понравившихся организаций,
				так вы точно получите деньги в короткие сроки. 
			</p>
		</div>
	</section>
	<footer class="footer">
		<div class="footer__center">
			<p class="footer__p">Все права защишены</p>
			<div class="footer__contact">
				<p class="footer__p">Email: gold.credit@mail.ru</p>
			</div>
		</div>
	</footer>
<script src="./js/jquery-3.3.1.js"></script>
<script src="./js/index.js"></script>
</body>
</html>