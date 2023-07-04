<!-- Developed by mambo (https://mambo.in.ua) -->
<!DOCTYPE html>
<html lang="<?= Config::_LANGUAGE_ ?>">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="<?= Config::_AUTHOR_ ?>">
	<meta name="theme-color" content="<?= Config::_BRAND_COLOR_ ?>"/> <?php
	if(Config::_SEO_) {
		echo "\n\t" . '<meta name="robots" content="index,follow">' . "\n";
	}
	else {
		echo "\n\t" . '<meta name="robots" content="noindex,nofollow">' . "\n";
	} ?>
	<meta name="apple-mobile-web-app-title" content="<?= Config::_NAME_ ?>">
	<meta name="application-name" content="<?= Config::_NAME_ ?>">
	<meta name="msapplication-config" content="<?= Config::_LINK_ ?>browserconfig.xml">
	<meta name="msapplication-TileImage" content="http://data.mambo.in.ua/public/images/icons/android-icon-144x144.png">
	<meta name="keywords" content="<?= Config::_KEYWORDS_ ?>">
	<meta name="description" content="<? Config::_DESCRIPTION_ ?>">
	<title><?= Config::_TITLE_ ?></title>
	<link rel="canonical" href="<?= Config::_LINK_ ?>">
	<link rel="apple-touch-icon" sizes="57x57" href="<?= Config::_LINK_ ?>public/images/icons/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?= Config::_LINK_ ?>public/images/icons/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?= Config::_LINK_ ?>public/images/icons/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?= Config::_LINK_ ?>public/images/icons/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?= Config::_LINK_ ?>public/images/icons/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?= Config::_LINK_ ?>public/images/icons/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?= Config::_LINK_ ?>public/images/icons/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?= Config::_LINK_ ?>public/images/icons/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?= Config::_LINK_ ?>public/images/icons/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="<?= Config::_LINK_ ?>public/images/icons/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?= Config::_LINK_ ?>public/images/icons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?= Config::_LINK_ ?>public/images/icons/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?= Config::_LINK_ ?>public/images/icons/favicon-16x16.png">
	<link rel="stylesheet" href="<?= Config::_LINK_ ?>public/css/main<?= Site::use_min() ?>.css">
	<link rel="stylesheet" href="<?= Config::_LINK_ ?>public/css/fullPage.css">
	<link rel="manifest" href="<?= Config::_LINK_ ?>manifest.json">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha256-YLGeXaapI0/5IgZopewRJcFXomhRMlYYjugPLSyNjTY=" crossorigin="anonymous">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha256-CjSoeELFOcH0/uxWu6mC/Vlrc1AARqbm/jiiImDGV3s=" crossorigin="anonymous" defer></script>
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-136888175-1" defer></script>
	<style>.async-hide { opacity: 0 !important} </style>
	<script>(function(a,s,y,n,c,h,i,d,e){s.className+=' '+y;h.start=1*new Date;
			h.end=i=function(){s.className=s.className.replace(RegExp(' ?'+y),'')};
			(a[n]=a[n]||[]).hide=h;setTimeout(function(){i();h.end=null},c);h.timeout=c;
		})(window,document.documentElement,'async-hide','dataLayer',4000,
			{'GTM-5RVVVBH':true});</script>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-145234299-1', 'auto');
		ga('require', 'GTM-5RVVVBH');
		ga('send', 'pageview');
	</script> <?php

	if(Config::_HTTPS_) { ?>
		<script>
			if( 'serviceWorker' in navigator ){
				window.addEventListener( 'load', function() {
					navigator.serviceWorker.register( '<?=Config::_LINK_?>sw.js' ).then( function( registration ) {
						// Registration was successful
						console.log( 'ServiceWorker registration successful with scope: ', registration.scope );
					}, function( err ) {
						// registration failed :(
						console.log( 'ServiceWorker registration failed: ', err );
					} );
				} );
			}
		</script> <?php
	} ?>

</head>
<body>

	<nav id="menu" class="navbar navbar-expand-lg navbar-light">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Відкрити меню">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav">
				<li data-menuanchor="socksy" class="nav-item">
					<a class="nav-link" href="#socksy">Socksy</a>
				</li>
				<li data-menuanchor="linen" class="nav-item">
					<a class="nav-link" href="#linen">Льон</a>
				</li>
				<li data-menuanchor="contacts" class="nav-item">
					<a class="nav-link" href="#contacts">Контакти</a>
				</li>
			</ul>
			<ul class="navbar-nav">
				<li class="nav-item" id="menu_sm_links">
					<a target="_blank" href="https://instagram.com/socksy.linen/"><?= Config::_SVG_['instagram'] ?></a>
					<a target="_blank" href="https://facebook.com/socksy.linen/"><?= Config::_SVG_['facebook'] ?></a>
					<a target="_blank" href="https://www.youtube.com/channel/UC4jKUzsc7gQhm7OBCdW4qwg/"><?= Config::_SVG_['youtube'] ?></a>
				</li>
			</ul>
		</div>
	</nav>


	<div id="full_page">

		<div class="section">

			<video id="myVideo" loop muted data-autoplay>
				<source src="public/videos/cover.webm" type="video/webm">
				<source src="public/videos/cover.mp4" type="video/mp4">
			</video>

			<div class="content">
				<h1>SOCKSY ЛЬОН</h1>
				<p>Fashion</p>
			</div>

			<svg id="arrow_down" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 35">
				<path fill="none" stroke-linecap="round" stroke="#fff" stroke-width="7" d="M2.7 3.4L29.9 30 57 3.4"/>
			</svg>

		</div>

		<div class="section">
			<div class="page_content">
				<div id="page_socksy">
					<a class="grid_cell_socksy" href="https://www.facebook.com/pg/socksy.linen/photos/?tab=album&album_id=2097222740346934" target="_blank">
						<h1>SOCKSY</h1>
					</a>
					<a class="grid_cell_man" href="https://www.youtube.com/watch?v=0DCxiUwlOoQ" target="_blank">
						<img data-src="public/images/men_socks.jpg" alt="Чоловіче">
					</a>
					<a class="grid_cell_woman" href="https://www.facebook.com/pg/socksy.linen/photos/?tab=album&album_id=2284510414951498" target="_blank">
						<img data-src="public/images/woman_socks.jpg" alt="Жіночі шкарпетки">
					</a>
					<a class="grid_cell_children" href="https://www.facebook.com/pg/socksy.linen/photos/?tab=album&album_id=2097223887013486" target="_blank">
						<img data-src="public/images/kids_socks.jpg" alt="Дитячі шкарпетки">
					</a>
					<a class="grid_cell_tights_children" href="https://www.youtube.com/watch?v=iyxIop4Oze8" target="_blank">
						<img data-src="public/images/kids_tights.jpg" alt="Дитячі колготи">
					</a>
					<a class="grid_cell_tights_woman" href="https://www.instagram.com/socksy.linen/" target="_blank">
						<img data-src="public/images/woman_tights.jpg" alt="Жіночі шкарпетки">
					</a>
				</div>
			</div>
		</div>

		<div class="section">
			<div class="page_content">
				<div id="page_linen">
					<a class="grid_cell_linen" href="https://www.youtube.com/watch?v=xxQAgl_ax3A" target="_blank">
						<h1>ЛЬОН</h1>
					</a>
					<a class="grid_cell_tablecloth" href="https://www.facebook.com/pg/socksy.linen/photos/?tab=album&album_id=2097229277012947" target="_blank">
						<img data-src="public/images/tablecloth.jpg" alt="Скатертини">
					</a>
					<a class="grid_cell_path" href="https://www.facebook.com/pg/socksy.linen/photos/?tab=album&album_id=2097229277012947" target="_blank">
						<img data-src="public/images/path.jpg" alt="Доріжки">
					</a>
					<a class="grid_cell_towel" href="https://www.youtube.com/watch?v=sfSpsnI4fAA" target="_blank">
						<img data-src="public/images/towels.jpg" alt="Рушники">
					</a>
					<a class="grid_cell_clothing" href="https://www.youtube.com/watch?v=PYnPfBbp6M0" target="_blank">
						<img data-src="public/images/linen_2.jpg" alt="Одяг">
					</a>
					<a class="grid_cell_embroidery" href="https://www.youtube.com/watch?v=pglJJ_lk8Xc" target="_blank">
						<img data-src="public/images/linen_1.jpg" alt="Вишиванки">
					</a>
					<a class="grid_cell_plaids" href="https://www.youtube.com/watch?v=nRGk4gR1pjw" target="_blank">
						<img data-src="public/images/plaids.jpg" alt="Постіль">
					</a>
					<a class="grid_cell_lace" href="https://www.youtube.com/watch?v=SbCk3agLmN4" target="_blank">
						<img data-src="public/images/lace.jpg" alt="Мереживо">
					</a>
				</div>
			</div>
		</div>

		<div class="section">

			<div id="contact_section">

				<div
						class="contacts_col text-right"
						id="contacts_col_1">

					<div class="row">
						<div class="col">
							<h3>Адреса</h3>
							<p>
								м.Луцьк, вул Яровиця 17<br> пн-сб 10:00 - 19:00<br> +380 63 632 32 40<br>
								<a href="mailto:<?= Config::_EMAIL_ ?>"><?= Config::_EMAIL_ ?></a>
							</p>
						</div>
					</div>

					<div class="row">
						<form class="col">

							<h3>Напишіть нам</h3>

							<div class="form-group">
								<input name="name" id="a2name" type="text" class="form-control" placeholder="Ім'я">
							</div>

							<div class="form-group">
								<input name="email" id="a2email" type="email" class="form-control" placeholder="E-mail" required>
							</div>

							<div class="form-group">
								<textarea style="height: 100px" class="form-control" name="msg" id="a2msg" placeholder="Повідовлення" required maxlength="5000"></textarea>
							</div>

							<button class="btn btn-outline-light" name="submit" id="a2submit">Надіслати</button>

							<script>

								document.addEventListener( 'DOMContentLoaded', () => {

									$( '#a2submit' ).click( function( e ) {

										e.preventDefault();

										let name_field = $( '#a2name' );
										let email_field = $( '#a2email' );
										let msg_field = $( '#a2msg' );

										let name = name_field.val();
										let email = email_field.val();
										let msg = msg_field.val();
										let email_regex = /^[^{}^%@\s]{0,50}@[^{}^%@\s.]{0,50}(.[^{}^%@\s]{0,50})+$/;

										if( email.length === 0 ){
											alert( 'Вкажіть вашу електронну адресу' );
											return false;
										}

										if( msg.length === 0 ){
											alert( 'Вкажіть ваше повідомлення' );
											return false;
										}

										if( name.length > 1000 )
											name = name.substring( 0, 1000 );

										if( msg.length > 5000 ){
											alert( 'Максимальна довжина повідомлення: 5000' );
											return false;
										}

										if( !email_regex.test( email ) ){
											alert( 'Вкажіть правильну електронну адресу' );
											return false;
										}

										let data_to_send = {
											'name' : name,
											'email' : email,
											'msg' : msg,
										};

										$.ajax( {
											method : 'POST',
											data : data_to_send,
											url : '<?=Config::_LINK_?>message/send/',
											dataType : 'json',
											cache : false,
										} ).done( function( msg ) {

											if( msg.error !== 0 && msg.error !== '0' )
												alert( msg.error );

											else {
												alert( 'Ваше повідомлення відправлено!' );
												name_field.val( '' );
												email_field.val( '' );
												msg_field.val( '' );
											}
										} )
										.fail( function( xhr, ajaxOptions, thrownError ) {
											alert( 'Виникла помилка під час надсилання вашого повідомлення' );
										} );

									} );

									function calculate_contacts_height( screen_height ) {

										if( screen_height > 991 ){


											let section_height = screen_height * 0.5;
											let section_row_one_height = section_row_one.height();
											let section_row_two_height = section_row_two.height();
											let height_to_add = section_height - section_row_one_height - section_row_two_height;

											if( height_to_add > 0 )
												section_row_two.find( 'textarea' ).css( 'height', '+=' + height_to_add + 'px' );

										}
									}

									let section = $( '#contacts_col_1' );
									let section_rows = section.find( '.row' );
									let section_row_one = section_rows.eq( 0 );
									let section_row_two = section_rows.eq( 1 );

									let $window = $( window );
									let screen_height = $window.height();
									calculate_contacts_height( screen_height );

									$window.resize( function() {
										let new_screen_height = $window.height();

										if( new_screen_height !== screen_height ){
											screen_height = new_screen_height;
											calculate_contacts_height( screen_height );
										}
									} );

								} );

							</script>

						</form>
					</div>

				</div>

				<div class="contacts_col" id="contacts_col_2">

					<iframe src="https://www.google.com/maps/embed/v1/place?q=SOCKSY,+Yarovytsya+Street,+Lutsk,+Volyn+Oblast,+Ukraine&key=<redacted>&zoom=14" allowfullscreen style="border:0" loading="lazy"></iframe>

				</div>

				<div class="contacts_col text-left" id="contacts_col_3">

					<a target="_blank" href="https://facebook.com/socksy.linen/" class="cover_sm" id="facebook_cover_sm"><?= Config::_SVG_['facebook'] ?></a>
					<a target="_blank" href="https://instagram.com/socksy.linen/" class="cover_sm" id="instagram_cover_sm"><?= Config::_SVG_['instagram'] ?></a>
					<a target="_blank" href="https://www.youtube.com/channel/UC4jKUzsc7gQhm7OBCdW4qwg/" class="cover_sm" id="youtube_cover_sm"><?= Config::_SVG_['youtube'] ?></a>

				</div>

			</div>

		</div>

	</div>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="<?= Config::_LINK_ ?>public/scripts/fullPage.js"></script>
	<script>

		document.addEventListener( 'DOMContentLoaded', () => {


			let down_arrow_visible = true;

			$( '#full_page' ).fullpage( {
				'anchors' : [ 'cover', 'socksy', 'linen', 'contacts' ],
				'recordHistory' : false,
				'lazyLoading' : true,
				'responsiveWidth' : 991,
				'keyboardScrolling' : true,
				'responsiveHeight' : 700,
				'verticalCentered' : true,
				'css3' : true,
				'sectionsColor' : [ '#000', '#000', '#000', '#000' ],//#c30  #fff  '#1b9', '#787'
				'menu' : '#menu',
				'fixedElements' : '#menu',
				'navigation' : true,
				'navigationTooltip' : [ 'cover', 'socksy', 'linen', 'contacts' ],
				'onLeave' : function( origin, destination, direction ) {

					if( origin.index !== 0 && down_arrow_visible ){
						let arrow_down = $( '#arrow_down' );
						arrow_down.addClass( 'hide_animation' );
						setTimeout( function() {
							arrow_down.remove();
						}, 500 );
					}

				},
			} );

			$('video').click(function(){
				$.fn.fullpage.moveSectionDown()
			});

		} );


	</script>

</body>
</html>