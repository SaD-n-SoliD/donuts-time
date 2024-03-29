<?php

require_once 'connection.php';

$donutBlocks = $pdo->query("SELECT * FROM donut_blocks");
$reviews = $pdo->query("SELECT * FROM reviews");

$donutCount = 0;

?>
<!DOCTYPE html>
<html lang="ru">

<head>
	<title>Donuts time</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<body>
	<div class="wrapper">
		<header class="header">
			<div class="innerhead">
				<div class="header__body">
					<div class="project_name">
						<h1 class="donuts">D<img class="logo" src="images/Logo.png" alt="o">nuts time</h1>
						<p class="master down">Мастерская донатов</p>
					</div>

					<nav class="header__menu">
						<ul class="menu">
							<li><a href="#">О нас</a></li>
							<li><a href="#">Каталог</a></li>
							<li><a href="#">Создай свой</a></li>
							<li><a href="#">Доставка</a></li>
							<li><a href="#">Отзывы</a></li>
							<li><a href="#">Контакты</a></li>
						</ul>
					</nav>
					<div class="buy_block"><a href="#"><img class="buy" src="images/buy.png" alt="Корзина"></a></div>
					<div class="adress_block">
						<p class="town rel">Одесса</p>
						<p class="adress down">ул. Приморская 9</p>
					</div>
					<div class="phone_block">
						<p class="phone">+38 099 623 567 498</p>
						<p class="call down"><a href="#">Заказать звонок</a></p>
					</div>
					<div class="header__burger">
						<span></span>
					</div>
				</div>
			</div>
		</header>
		<main class="main">
			<div class="intro">
				<div class="container">
					<div class="intro_body">
						<div>
							<div class="intro_titles">
								<p class="intro_suptitle brown">Все&nbsp;наши донаты оригинальны<span class="hide"> в&nbsp;сочетаниях вкусов</span></p>
								<h2 class="intro_title">Найди свой любимый</h2>
								<p class="intro_subtitle"><span class="hide">Концепция</span> DONUTS TIME - это&nbsp;авторские донаты с&nbsp;невероятным разнообразием начинок и&nbsp;топингов без&nbsp;использования <span class="hide">искусственных</span> добавок<span class="hide">, красителей и&nbsp;ароматизаторов</span></p>
							</div>
							<div class="row-btn">
								<form id="collect-your-box-link" class="btn-left" action="#collect-your-box-anchor" method="POST">
									<button class="btn btn-blue">Собрать коробку</button>
								</form>
								<form id="your-perfect-donut-link" class="btn-right" action="#your-perfect-donut-anchor" method="POST">
									<button class="btn btn-white">Создай свой донат</button>
								</form>
							</div>
							<div class="intro-bottom flex">
								<div class="intro-bottom_left flex">
									<div class="innertext_left">
										<p class="intro-bottom_headle brown">Создай Свой</p>
										<p class="intro-bottom_text">Предоставляем вам&nbsp;возможность создать свой идеальный донат</p>
									</div>
								</div>
								<div class="intro-bottom_right flex">
									<div class="innertext_right">
										<p class="intro-bottom_headle brown">Минимум калорий</p>
										<p class="intro-bottom_text hide">Особая технология приготовления не&nbsp;позволяет маслу впитаться внутрь изделий</p>
										<p class="intro-bottom_text show">Благодаря технологии масло не&nbsp;впитывается внутрь изделий</p>
									</div>
								</div>
							</div>
						</div>
						<div class="intro_donuts">
							<img class="intro_donuts_img" src="images/Donuts_v2.png" alt="">
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="best-donuts">
					<div class="block-title bd-title">
						<h2>Почему наши<br class="show" /> донаты <span class="blue">лучшие</span></h2>
					</div>
					<div class="slogan-row">
						<div class="slogan-element slogan-top-left">
							<p class="slogan-title">Никакой "вчерашней"<br />продукции</p>
							<p class="slogan-text">Мы&nbsp;готовим наши донаты в&nbsp;ночное время, чтобы радовать любителей нашей выпечки исключительно свежим вкусом!</p>
						</div>
						<div class="slogan-element slogan-top-right">
							<p class="slogan-title">Минимальное<br />количество ккал</p>
							<p class="slogan-text">Благодаря особым технологиям масло во&nbsp;время жарки не&nbsp;впитывается во&nbsp;внутрь изделий, что&nbsp;делает донаты нежирными</p>
						</div>
					</div>
					<div class="central-donut">
						<img class="central-dunut__img" src="images/Donut_1.png" alt="">
					</div>
					<div class="slogan-row bottom-slogans">
						<div class="slogan-element slogan-bottom-left">
							<p class="slogan-title">Возможность<br />создать свой донат</p>
							<p class="slogan-text">Огромное количество различных топингов, начинок и&nbsp;присыпок поможетвам создать свой авторский донат</p>
						</div>
						<div class="slogan-element slogan-bottom-right">
							<p class="slogan-title">Только натуральны<br />ингридиенты</p>
							<p class="slogan-text">Наши донаты без&nbsp;искусственных добавок, красителей и&nbsp;ароматизаторов. Мы&nbsp;за&nbsp;натуральные продукты</p>
						</div>
					</div>
					<div class="bd-bottom-plug"></div>
				</div>
				<div id="collect-your-box" class="collect-your-box">
					<div class="boxhead">
						<span id="collect-your-box-anchor"></span>
						<h2 class="block-title cb-title">Собери <span class="blue">свою коробку</span></h2>
						<ul class="sweetness-menu">
							<li class="">
								<button id="all-btn" class="sweetness-btn active">Все</button>
							</li>
							<li class="">
								<button id="sweet-btn" class="sweetness-btn">Сладкие</button>
							</li>
							<li class="">
								<button id="non-sweet-btn" class="sweetness-btn">Несладкие</button>
							</li>
						</ul>
					</div>
					<div class="box-body">
						<!-- <div class="box-content"> -->
						<div class="box-row-m">
							<? foreach ($donutBlocks as $block) {
								$donutCount++; ?>

								<div class="box-row-element active <?= $block['sweetness'] ?>">
									<div class="box-dunut">
										<img class="box-donut__img" src="<?= 'images/' . $block['donut_file_name'] ?>" alt="">
									</div>

									<div class="box-underdonut-m">
										<p class="box-underdonut__title">
											<span class="left-dot-word"><?= $block['first_component'] ?></span><?= $block['second_component'] ?>
										</p>
										<p class="box-underdonut__text"><?= $block['description'] ?></p>
										<div class="box-price-count <?= 'idd' . $block['id'] ?>">
											<p class="donut-price"><?= $block['price'] . ' руб' ?></p>
											<div class="donut-count">
												<div class="countform">
													<button class="donut-count-button underdonut__button op50 <?= 'minus-btn ' . 'idd' . $block['id'] ?>">
														<span class="minus-paint"></span>
													</button>
												</div>
												<input class="undercount-var <?= 'idd' . $block['id'] ?>" value="0" readonly tabindex="-1">
												<div class="countform">
													<button class="donut-count-button underdonut__button <?= 'plus-btn ' . 'idd' . $block['id'] ?>">
														<span class="minus-paint"></span><span class="plus-paint"></span>
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>

							<? } ?>

						</div>
						<!-- </div> -->
						<form id="box-menu" class="box-menu" action="#collect-your-box">
							<p class="donuts-in-box">Пончиков в&nbsp;коробке:</p>
							<div class="donut-count-in-box">
								<div class="count-in-box-form">
									<button type="button" id="count-in-box-btn-3" class="count-in-box-btn">3</button>
								</div>
								<div class="count-in-box-form">
									<button type="button" id="count-in-box-btn-6" class="count-in-box-btn">6</button>
								</div>
								<div class="count-in-box-form">
									<button type="button" id="count-in-box-btn-9" class="count-in-box-btn active">9</button>
								</div>
							</div>
							<p class="your-choise">Вы&nbsp;выбрали:</p>
							<div class="choose-list">
								<?
								$donutBlocks = $pdo->query("SELECT * FROM donut_blocks");
								?>
								<? foreach ($donutBlocks as $block) { ?>
									<div class="chooselist-element">
										<p class="donut-name">
											<span class="lil-left-dot-word"><?= $block['first_component'] ?></span><?= $block['second_component'] ?>
										</p>
										<div class="clist-element-count">
											<div class="clist-countform">
												<button class="donut-count-button clist-count-button op50 <?= 'minus-btn ' . 'idd' . $block['id'] ?>">
													<span class="minus-paint"></span>
												</button>
											</div>
											<input type="text" class="clist-count-var <?= 'idd' . $block['id'] ?>" name="<?= 'idd' . $block['id'] ?>" readonly value="0" tabindex="-1">
											<div class="clist-countform">
												<button class="donut-count-button clist-count-button <?= 'plus-btn ' . 'idd' . $block['id'] ?>">
													<span class="minus-paint"></span><span class="plus-paint"></span>
												</button>
											</div>
										</div>
									</div>

								<? } ?>

								<div class="chooselist-element">
									<p class="donut-name">Тэст-карамэльный</p>
									<div class="clist-element-count">
										<div class="clist-countform">
											<button type="button" class="donut-count-button clist-count-button op50">
												<span class="minus-paint"></span>
											</button>
										</div>
										<p class="clist-count-var">0</p>
										<div class="clist-countform">
											<button type="button" class="donut-count-button clist-count-button op50">
												<span class="minus-paint"></span><span class="plus-paint"></span>
											</button>
										</div>
									</div>
								</div>

							</div>
							<p class="amount">Итого:<span class="blue"><span id="amount-var" class="amount-var"> 0 </span>руб</span></p>
							<div class="clist-total-form">
								<button type="submit" class="btn btn-blue">Оформить заказ</button>
							</div>
						</form>
					</div>
					<div id="pre-perfect-donut" class="view-all">
						<div class="line"></div>
						<div class="box-bottom-form">
							<button class="btn btn-white box-bottom-btn">Показать всё</button>
						</div>
						<div class="line"></div>
					</div>
				</div>
				<div id="your-perfect-donut" class="your-perfect-donut">
					<div class="block-title perfect-title">
						<span id="your-perfect-donut-anchor"></span>
						<h2 class="perfect-title-text">Создай свой <br class="show" /><span class="blue">идеальный</span> донат</h2>
					</div>
					<div class="perfect-body">
						<div class="perfect-donut-block"><img class="pefrect-donut__img" src="images/Donut_custom.png" alt=""></div>
						<div class="customize-donut-block">
							<div class="like-block"><img class="like__png" src="images/Like.png" alt=""></div>
							<p class="fill-the-box">Дополни коробку своим<br class="show" /> авторским донатом!</p>
							<form action="#" class="custom-donut-form" id="custom-donut-form">
								<div class="custom-donut-element">
									<p class="part-name">Начинка</p>
									<?
									function makeItem($s1, $spaceCount, $s2)
									{
										$leftSpaces = 5;
										$digits = 3;
										$space = '&nbsp;';
										$str = '';
										for ($i = 0; $i < $leftSpaces; $i++) {
											$str .= $space;
										}
										$str .= $s1;
										for ($i = 0; $i < $spaceCount; $i++) {
											$str .= $space;
										}
										$str .= $s2;
										echo $str;
									}
									?>

									<select class="part-choise hide">
										<option data-price="60" value="60" class="part-choise-option">
											<? makeItem('Шоколадно-кремовый тирамису', 18, '+ 60 руб') ?>
										</option>
										<option data-price="10" value="10" class="part-choise-option">
											<? makeItem('случайный текст', 44, '+ 10 руб') ?>
										</option>
									</select>
									<select name="n1" id="n1" class="part-choise show">
										<option data-price="60" value="60">Шоколадно-кремовый тирамису&nbsp;</option>
										<option data-price="10" value="10">случайный текст</option>
									</select>
									<div class="perfect-line"></div>
								</div>
								<div class="custom-donut-element">
									<p class="part-name">Крем</p>
									<select class="part-choise hide">
										<option data-price="40" value="40" class="part-choise-option">
											<? makeItem('Шоколадно-ореховое пралине', 21, '+ 40 руб') ?>
										</option>
										<option data-price="11" value="11" class="part-choise-option">
											<? makeItem('случайный текст', 44, '+ 11 руб') ?>
										</option>
									</select>
									<select name="n2" id="n2" class="part-choise show">
										<option data-price="40" value="40">Шоколадно-ореховое пралине&nbsp;&nbsp;&nbsp;&nbsp;</option>
										<option data-price="11" value="11">случайный текст</option>
									</select>
									<div class="perfect-line"></div>
								</div>
								<div class="custom-donut-element">
									<p class="part-name">Присыпка</p>
									<select class="part-choise hide">
										<option data-price="15" value="15" class="part-choise-option">
											<? makeItem('Стружка бельгийского шоколада', 17, '+ 15 руб') ?>
										</option>
										<option data-price="25" value="25" class="part-choise-option">
											<? makeItem('текст', 63, '+ 25 руб') ?>
										</option>
									</select>
									<select name="n3" id="n3" class="part-choise show">
										<option data-price="15" value="15">Стружка бельгийского шоколада</option>
										<option data-price="25" value="25">текст</option>
									</select>
									<div class="perfect-line"></div>
								</div>
							</form>
							<div class="perfect-total">
								<p class="amount amount-perfect">Итого:<span class="blue"><span class="perfect-amount-var"> 0 </span>руб</span></p>
								<div class="perfect-donut-count donut-count">
									<div class="countform">
										<button class="donut-count-button underdonut__button perfect-minus">
											<span class="minus-paint"></span>
										</button>
									</div>
									<p class="perfect-count-var">1</p>
									<div class="countform">
										<button class="donut-count-button underdonut__button perfect-plus">
											<span class="minus-paint"></span><span class="plus-paint"></span>
										</button>
									</div>
								</div>
							</div>
							<div class="row-btn perfect-row-btn">
								<form class="btn-left perfect-btn-left" action="#">
									<button class="btn btn-blue perfect-btn">Оформить заказ</button>
								</form>
								<div class="btn-right">
									<button class="btn btn-white perfect-btn" type="submit" form="custom-donut-form">Добавить в коробку</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="fast-order">
				<div class="fast-order-head">
					<div class="container">
						<div class="fast-order-innerhead">
							<div class="block-title fast-title">
								<h2 class="fast-title-text">Не терпится <br class="show" /><span class="blue">сделать заказ?</span></h2>
							</div>
							<div class="points-block">
								<div class="points-pic">
									<img class="points__img" src="images/steps.png" alt="">
								</div>
								<div class="points-info">
									<div class="point-item">
										<div class="point-number-block">
											<p class="point-number">1</p>
										</div>
										<div class="point-text-block">
											<div class="point-title">
												<p class="point-title-text">Заказ</p>
											</div>
											<div class="point-subtitle">
												<p class="point-subtitle-text">Закажите донаты онлайн<br /> или&nbsp;оставьте заявку на&nbsp;нашем сайте</p>
											</div>
										</div>
									</div>
									<div class="point-item">
										<div class="point-number-block">
											<p class="point-number">2</p>
										</div>
										<div class="point-text-block">
											<div class="point-title">
												<p class="point-title-text">Доставка</p>
											</div>
											<div class="point-subtitle">
												<p class="point-subtitle-text">Выберите время доставки и&nbsp;способ оплаты или&nbsp;заберите заказ лично</p>
											</div>
										</div>
									</div>
									<div class="point-item">
										<div class="point-number-block">
											<p class="point-number">3</p>
										</div>
										<div class="point-text-block">
											<div class="point-title">
												<p class="point-title-text">Получение</p>
											</div>
											<div class="point-subtitle">
												<p class="point-subtitle-text">Насладитесь изысканным вкусом наших донатов уже&nbsp;через 24&nbsp;часа</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="fast-order-body">
					<div class="container">
						<div class="fast-order-innerbody">
							<div class="box-of-donuts-block">
								<img class="box-of-donuts__img" src="images/Donutbox.png" alt="">
							</div>
							<div class="fast-form-block">
								<div class="fast-form-title">
									<p class="fast-form-title-text">Заполните форму<br />для&nbsp;быстрого заказа</p>
								</div>
								<div class="fast-form-subtitle">
									<p class="fast-form-subtitle-text">Перезвоним в течение 1 минуты</p>
								</div>
								<form class="fast-form" action="#">
									<div class="name-field-block">
										<input class="fast-form-field name-field" type="text" placeholder="Ваше имя" required maxlength="30">
									</div>
									<div class="perfect-line fast-line"></div>
									<div class="phone-field-block">
										<input class="fast-form-field phone-field" type="tel" value="+38" required pattern="\+38[0-9]{7}">
									</div>
									<div class="perfect-line fast-line mb40"></div>
									<div class="btn-left fast-btn-block">
										<button type="submit" class="btn btn-blue fast-btn">Сделать заказ</button>
									</div>
									<div class="policy">
										<input class="policy-checkbox" type="checkbox" checked>
										<p class="policy-text">Я принимаю <span class="underlined">политику конфиденциальности</span></p>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="block-title slider-title-block">
					<h2 class="slider-title">Что говорят <br class="show" /><span class="blue">о наших донатах</span></h2>
				</div>
			</div>
			<div class="slider">

				<div class="slider__item">
					<div class="review leave-review-slide">
						<div class="leave-review-head">
							<p class="reviewer-name">Оцените нашу доставку</p>
						</div>

						<div class="rating-area">
							<? for ($i = 5; $i > 0; $i--) { ?>

								<input type="radio" id="<?= 'star-' . $i ?>" name="rating" value="<?= $i ?>">
								<label for="<?= 'star-' . $i ?>" title=""></label>

							<? } ?>
						</div>
						<form class="" name="leave-review-btn" id="leave-review-btn" action="#leave-review-btn">
							<button class="btn btn-blue">Написать отзыв</button>
						</form>
					</div>
				</div>
				<? foreach ($reviews as $review) { ?>

					<div class="slider__item">
						<div class="review">
							<p class="review-head">
								<? $reviewDate = date('d.m.Y', strtotime($review['date'])); ?>
								<span class="reviewer-name"><?= $review['author'] ?></span>
								<span class="review-date"><?= $reviewDate ?></span>
							</p>
							<p class="stars">
								<? for ($i = 0; $i < $review['rating']; $i++) { ?>

									<span class="star"><img class="star__img" src="images/star.png" alt=""></span>

								<? } ?>
							</p>
							<p class="review-text">
								<?= $review['text'] ?>
							</p>
						</div>
					</div>

				<? } ?>
			</div>
		</main>

		<footer class="footer">
			<div class="footer-info">
				<div class="footer-innerinfo">
					<div class="footer-title-block">
						<h2 class="footer-title">Контакты</h2>
					</div>
					<p class="footer-subtitle">Мы&nbsp;ответим на&nbsp;все&nbsp;вопросы, просто оставьте заявку и&nbsp;мы&nbsp;свяжемся с&nbsp;вами в&nbsp;течние 1&nbsp;минуты</p>
					<form class="btn-left" name="footer-btn" id="footer-btn" action="#">
						<button class="btn btn-blue">Связаться с нами</button>
					</form>
					<div class="footer-adress">
						<img class="footer-adress__img" src="images/Pointer.png" alt="">
						<p class="footer-adress-text">Одесса, ул. Приморская 9</p>
					</div>
					<div class="footer-phone">
						<img class="footer-phone__img" src="images/Phone.png" alt="">
						<p class="footer-phone__digits">+ 38 099 623 567 498</p>
					</div>
					<div class="footer-social-networks">
						<img class="footer-instagram-img" src="images/instagram.png" alt="">
						<img class="footer-facebook-img" src="images/facebook.png" alt="">
						<img class="footer-youtube-img" src="images/youtube.png" alt="">
					</div>
				</div>
			</div>
			<div class="footer-map-block">
				<iframe class="footer-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6454.28980296704!2d30.729225627958364!3d46.45687093323599!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c633d4c0320f1d%3A0x8935bc0518414860!2z0KHQsNGF0LDQu9C40L3Rh9C40LosINCe0LTQtdGB0YHQsCwg0J7QtNC10YHRgdC60LDRjyDQvtCx0LvQsNGB0YLRjCwg0KPQutGA0LDQuNC90LAsIDY1MDAw!5e0!3m2!1sru!2sru!4v1598927903019!5m2!1sru!2sru" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
				</iframe>
			</div>

		</footer>
	</div>
	<script>
		// (не) используется в box-calc.js
		let donutCount = <?= $donutCount ?>;
	</script>
	<script src="js/anchorAnim.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="js/burger.js"></script>
	<script src="js/box-calc.js"></script>
	<script src="js/perfect.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/slider.js"></script>
</body>

</html>