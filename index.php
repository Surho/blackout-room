<?php
// define variables and set to empty values
$name = $email = $theme = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $theme = test_input($_POST["theme"]);
  $message = test_input($_POST["message"]);

  $check = $_POST["check"];

  if(!$check) {
	$message_content = $name . " vous a envoyé un message <br/>";
	$message_content .= "Email: " . $email . "<br/><br/>";
	$message_content .= "Message: " . $message;

	$to = "contact@blackout-room.com";
	$headers = 'From: ' . $to . "\r\n" .
	"Return-Path: " . $to . "\r\n" .
	"Content-Type: text/html; charset=utf-8\r\n" .
	'X-Mailer: PHP/' . phpversion();

	if (mail($to, $theme, $message_content, $headers)) {
		echo "<div class='info__sent'>Thank you, your message has been sent.</div>";
	}
  }
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<link rel="stylesheet" href="css/style.css">
	<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
	<link rel="manifest" href="img/favicon/site.webmanifest">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">

	<title>Blackout-Room</title>
</head>

<body>
	<section class="intro intro--index">
		<div class="intro__background">Zooming background</div>
		<div class="intro__header">
			<div class="intro__wrapper">
				<a class="intro__logo" href="index.php">
					<img class="intro__logo-text" src="img/logo_main_text.svg" width="130" height="80" alt="Logo">
					<img class="intro__logo-brain" src="img/logo_main_brain.svg" width="90" height="80" alt="Logo">
				</a>
				<button class="intro__switch" type="button" name="menu">&#215;</button>
				<nav class="intro__menu navigation">
					<ul class="navigation__list">
						<li class="navigation__item">
							<a>Home</a>
						</li>
						<li class="navigation__item">
							<a href="./gift-card.html">Cadeau</a>
						</li>
						<li class="navigation__item navigation__item--contact">
							<a href="./gift-card.html">Contact</a>
						</li>
					</ul>
					<div class="social intro__social">
						<a class="social__item social__instagram" href="https://www.instagram.com/blackoutroom/">
							<img src="img/instagram_logo.svg" width="18" height="18" alt="Instagram">
						</a>
						<a class="social__item social__facebook" href="https://www.facebook.com/BlackoutROOM/">
							<img src="img/facebook_logo.svg" width="18" height="18" alt="Facebook">
						</a>
						<a class="social__item social__tripadvisor" href="https://www.tripadvisor.fr/Attraction_Review-g187234-d12821029-Reviews-Blackout_Room-Nice_French_Riviera_Cote_d_Azur_Provence_Alpes_Cote_d_Azur.html">
							<img src="img/tripadvisor_logo.svg" width="18" height="18" alt="Tripadvisor">
						</a>
						<a class="social__item social__lang" href="./index-en.html"><img src="img/engflag.svg" width="18" height="18" alt="english"></a>
					</div>
				</nav>
			</div>
		</div>
		<div class="intro__main">
			<h1 class="intro__title">
				<span>Blackout</span> room</h1>
			<p class="intro__small">Escape game au coeur de Nice.</p>
			<p class="intro__btn__wrapper">
				<a class="intro__btn btn" href="https://bookeo.com/blackout-room">Réserver</a>
			</p>
		</div>
		<div class="intro__arrows">
			<div class="intro__arrow intro__arrow--top"></div>
		</div>
	</section>
	<section class="rooms">
		<div class="container">
			<div class="rooms__plus-container">
				<div class="rooms__plus">
					<img src="img/Logo1.svg" alt="space">
					<p class="rooms__plus-text">120m²<br/>de Jeu</p>
				</div>
				<div class="rooms__plus">
					<img src="img/Logo2.svg" alt="parking">
					<p class="rooms__plus-text">2 Places<br/>de Parking</p>
				</div>
				<div class="rooms__plus">
					<img src="img/Logo3.svg" alt="logo3">
					<p class="rooms__plus-text">Espace<br/>Climatisé</p>
				</div>
				<div class="rooms__plus">
					<img src="img/Logo4.svg" alt="Enigmes sophistiquées">
					<p class="rooms__plus-text">Enigmes<br/>sophistiquées</p>
				</div>
				<div class="rooms__plus">
					<img src="img/Logo5.svg" alt="gift-cards">
					<p class="rooms__plus-text">Offrez un<br/>Cadeau</p>
				</div>
			</div>
			<div class="rooms__info">
				<div class="rooms__title">
					<h2>Nos Rooms</h2>
					<p class="rooms__title-additional">le temps vous est compté...</p>
				</div>
				<p class="rooms__description">Chaque mission possède sa propre intrigue et difficulté. Plongez dans la peau d’un(e) jeune écrivain(e) de roman d’épouvante ou
					devenez des cobayes du célèbre Dr.Canavero dans son laboratoire abandonné…C’est à vous de choisir!
				</p>
			</div>
		</div>
		<div class="rooms__list">
			<div class="rooms__item rooms__item--chambre difficulty difficulty--medium">
				<div class="rooms__item-description">
					<h3>Chambre
						<span>1408</span>
					</h3>
					<div class="rooms__stats">
						<p class="rooms__people">3-5</p>
						<p class="rooms__time">60</p>
						<div class="rooms__languages">
							<p class="rooms__lang">fr</p>
							<p class="rooms__lang">eng</p>
							<p class="rooms__lang">ru</p>
						</div>
					</div>
				</div>
				<a class="rooms__reserve" href="chambre1408.html">En savoir plus</a>
				<div class="rooms__about">
					<p>Le Dolphin Hotel existe depuis plus d’un siècle et accueille des touristes de tout coin du monde. Quand vous êtes
						arrivés, il n’y avait plus de places disponibles...</p>
				</div>
			</div>
			<div class="rooms__item rooms__item--expiriance difficulty difficulty--medium">
				<div class="rooms__item-description">
					<h3>Expérience
						<span>Inachevée</span>
					</h3>
					<div class="rooms__stats">
						<p class="rooms__people">3-7</p>
						<p class="rooms__time">60</p>
						<div class="rooms__languages">
							<p class="rooms__lang">fr</p>
							<p class="rooms__lang">eng</p>
							<p class="rooms__lang">ru</p>
						</div>
					</div>
				</div>
				<a class="rooms__reserve" href="expiriance-inacheve.html">En savoir plus</a>
				<div class="rooms__about">
					<p>Le Docteur Canavero, un chercheur italien de renommée, s’est fait virer il y a 2 mois de cela du fameux “laboratoire
					de Lunncio” spécialisé dans la transmutation de cellules humaines...</p>
				</div>
			</div>
		</div>
	</section>
	<section class="price">
		<div class="container">
			<div class="price__title">
				<h2>Les Prix</h2>
				<p class="price__small">Les prix sont dégressifs, plus vous venez nombreux, plus c’est avantageux</p>
			</div>
			<div class="price__list">
				<div class="price__item price__item--3">
					<p class="price__persones">3 Personnes</p>
					<p class="price__number">32&euro;/PERS</p>
				</div>
				<div class="price__item price__item--4">
					<p class="price__persones">4 Personnes</p>
					<p class="price__number">28&euro;/PERS</p>
					<small class="price__tip">(économies: 4€/
						<b>pers</b>)</small>
				</div>
				<div class="price__item price__item--5">
					<p class="price__persones">5 Personnes</p>
					<p class="price__number">25&euro;/PERS</p>
					<small class="price__tip">(économies: 7€/
						<b>pers</b>)</small>
				</div>
			</div>
		</div>
	</section>
	<section class="info">
		<div class="container">
			<div class="info__wrapper">
				<div class="info__steps">
					<h2 class="info__title">Pensez-vous vous échapper en 60 minutes ?</h2>
					<div class="info__list">
						<svg class="info__line" width="40px" height="70%">
							<line x1="35px" y1="0" x2="35px" y2="100%" style="stroke:#5345DD;stroke-width:2" />
						</svg>
						<div class="info__item info__item--lock">
							<p class="info__subtitle">RÉSERVEZ LA QUÊTE DE VOTRE CHOIX !</p>
							<p class="info__text">Parmi les salles que nous proposons et démarrez votre propre aventure! Les réservations se font en quelques clicks
								sur notre plateforme internet.</p>
						</div>
						<div class="info__item info__item--time">
							<p class="info__subtitle">SOYEZ ENFERMÉS PENDANT UNE HEURE !</p>
							<p class="info__text">Pas de temps à perdre, vous aurez 60 minutes pour réussir votre quête et réussir à vous échapper !</p>
						</div>
						<div class="info__item info__item--person">
							<p class="info__subtitle">TROUVEZ DES INDICES &amp; RÉSOLVEZ DES ÉNIGMES !</p>
							<p class="info__text">Des décorations uniques, énigmes originales et sophistiqués, des passages secrets, des frissons et émotions inoubliables
								vous attendent chez nous !</p>
						</div>
					</div>
				</div>
				<div class="info__participants">
					<h2 class="info__title">QUI PEUT PARTICIPER ?</h2>
					<div class="info__list">
						<svg class="info__line" width="40px" height="85%">
							<line x1="35px" y1="0" x2="35px" y2="100%" style="stroke:#D8CD63;stroke-width:2" />
						</svg>
						<div class="info__item info__item--family">
							<p class="info__subtitle">Entre famille & amis</p>
							<p class="info__text">Vous pouvez vous détendre chez nous, célébrer un anniversaire, organiser une fête pour vos amis ou vos enfants.</p>
						</div>
						<div class="info__item info__item--tourists">
							<p class="info__subtitle">Touristes</p>
							<p class="info__text">Our rooms are available in English, French and Russian.</p>
						</div>
						<div class="info__item info__item--gamers">
							<p class="info__subtitle">Gamers</p>
							<p class="info__text">Vous plongerez dans la peau de vos personnages préfères, mais cette fois ci, c’est VOUS les héros et votre destin
								est entre vos mains.</p>
						</div>
						<div class="info__item info__item--companies">
							<p class="info__subtitle">Entreprises</p>
							<p class="info__text">Nous organisons vos événements d’entreprise, journée de congé ou n‘importe quel autre fait marquant !</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="partners">
		<div class="container">
			<h2 class="partners__title">ILS NOUS ONT FAIT CONFIANCE</h2>
			<p class="partners__additional">Avez-vous l'étoffe d'un champion?</p>
			<div class="partners__slider">
				<div class="partners__content">
					<div class="parnters__item">
						<img src="img/partner2.png" alt="partner2">
					</div>
					<div class="parnters__item">
						<img src="img/partner3.png" alt="partner3">
					</div>
					<div class="parnters__item">
						<img src="img/partner1.png" alt="partner4">
					</div>
					<div class="parnters__item">
						<img src="img/partner4.png" alt="partner4">
					</div>
					<div class="parnters__item">
						<img src="img/partner5.png" alt="partner5">
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="contacts">
		<div class="contacts__item contacts__map">
			<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1442.1513260729585!2d7.279269525397232!3d43.70425907268374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3c7bc682c770404a!2sBlackout-Room+Escape+Game+%C3%A0+Nice!5e0!3m2!1sru!2sfr!4v1524400350268" style="min-height: 300px" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe> -->
		</div>
		<div class="contacts__item contacts__text">
			<h2 class="contacts__title">
				<span>Nous</span> contacter</h2>
			<p class="contacts__main">Vous n’avez pas trouvé la réponse à votre question dans notre FAQ?
				<br/> N’hésitez pas à poser votre question en remplissant le formulaire ci-dessous.
			</p>
			<address>
				<a href="mailto:contact@blackout-room.com">
					<span>Email: </span>contact@blackout-room.com</a>
				<p>
					<span>Adresse: </span>20, Avenue Pauliani 06000, Nice</p>
				<p>
					<span>Téléphone: </span>
					<a href="tel:07-78-90-78-37">07 78 90 78 37</a>
				</p>
			</address>
			<div class="social contacts__social">
				<a class="social__item social__instagram" href="https://www.instagram.com/blackoutroom/">
					<img src="img/instagram_logo.svg" width="22" height="22" alt="Instagram">
				</a>
				<a class="social__item social__facebook" href="https://www.facebook.com/BlackoutROOM/">
					<img src="img/facebook_logo.svg" width="22" height="22" alt="Facebook">
				</a>
				<a class="social__item social__tripadvisor" href="https://www.tripadvisor.fr/Attraction_Review-g187234-d12821029-Reviews-Blackout_Room-Nice_French_Riviera_Cote_d_Azur_Provence_Alpes_Cote_d_Azur.html">
					<img src="img/tripadvisor_logo.svg" width="22" height="22" alt="Tripadvisor">
				</a>
			</div>
		</div>
		<div class="contacts__item contacts__form">
			<h2>Vous avez une
				<span>question ?</span>
			</h2>
			<form action="" method="POST">
				<input type="text" name="name" placeholder="Votre Nom (requis)" required>
				<input type="email" name="email" placeholder="Votre Adresse Mail (requis)" required>
				<input type="text" name="theme" placeholder="Sujet">
				<textarea name="message" placeholder="Message" maxlength="500"></textarea>
				<input type="text" name="check" style="display:none" />
				<button class="contacts__submit" type="submit" value="Send">Envoyer</button>
			</form>
		</div>
	</section>
	<footer class="footer">
		<div class="container">
			<div class="footer__wrap">
				<div class="footer__logo">
					<p>
						Blackout<span>room</span>
					</p>
				</div>
			</div>
		</div>
	</footer>

	<button class="scroll-home scroll-home--hidden">&#8896;</button>
	<a href="gift-card.html" class="hunter-gift"><img src='img/logo_gift.svg' width="30" height="30" alt="cadeu">gift</a>
	
	<script src="js/slider.js"></script>
	<script src="js/main.js"></script>
	<script src="js/scrollTo.js"></script>
	<script src="js/navCollapse.js"></script>
	<script src="js/custom-google-map.js"></script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBE6aEHJ-KfJyAOzmnIeuoZWe5vAgQkT5U&callback=initMap"></script>
					
</body>

</html>