<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>KBC Build</title>

	<!-- favicon -->
	<link rel="icon" type="image/x-icon" href="https://kbc.or.id/img/general/KBC-Logo_1594107681.png" />

	<!-- boxicons -->
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

	<!-- css style -->
	<link rel="stylesheet" href="" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet" />
	<!-- <link rel="stylesheet" href="style.css" /> -->
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: "Poppins", sans-serif;
}

:root {
	--primary-color-5: #704c1c;
	--primary-color-9: #351805;
	--secondary-color: #be8511;
	--gray-color-8: #f3f1e9;
	--white-color: #fff;
	--black-color: #18191a;
	--red-color: #e74c3c;
}

h1 {
	font-size: 50px;
	color: var(--primary-color-5);
	font-weight: 600;
	line-height: 64px;
}

h2 {
	font-size: 46px;
	color: var(--primary-color-5);
	font-weight: 600;
	line-height: 54px;
}

h4 {
	font-size: 20px;
	color: var(--black-color);
}

h6 {
	font-weight: 700;
	font-size: 12px;
}

p {
	font-size: 16px;
	color: var(--black-color);
	margin: 15px 0 20px 0;
}

a {
	text-decoration: none;
}

.section-p1 {
	padding: 40px 80px;
}

.section-m1 {
	margin: 40px;
}

body {
	width: 100%;
}

/* ----------- HEADER SECTION ----------- */

#header {
	display: flex;
	align-items: center;
	justify-content: space-between;
	padding: 20px 80px;
	background: #ffffff;
	box-shadow: 0 5px 15px rgba(0, 0, 0, 0.06);
	z-index: 999;
	position: sticky;
	top: 0;
	left: 0;
}

#header ul {
	margin-bottom: 0;
}

.logo {
	width: 50px;
}

#nav {
	display: flex;
	align-items: center;
	justify-content: center;
}

#navbar {
	display: flex;
	align-items: center;
}

#navbar li {
	list-style: none;
	padding: 0 20px;
	position: relative;
}

#navbar li a {
	text-decoration: none;
	font-size: 16px;
	font-weight: 600;
	color: #1a1a1a;
	transition: 0.3s ease;
}

#navbar li a:hover,
#navbar li a.active {
	color: black;
}

#navbar li a.active::after,
#navbar li a:hover::after {
	content: "";
	width: 40%;
	height: 2px;
	background: var(--secondary-color);
	position: absolute;
	bottom: -4px;
	left: 20px;
}

/* ----------- USER SECTION ----------- */

#user {
	display: flex;
}

#user li {
	list-style: none;
}

#user li a {
	text-decoration: none;
	font-size: 16px;
	font-weight: 600;
	color: var(--white-color);
	transition: 0.3s ease;
}

#user p {
	margin: 0;
	padding-left: 20px;
	font-weight: 600;
}

#user .sign-in button {
	padding: 8px 25px;
	border: 1px solid var(--black-color);
	color: var(--black-color);
	border-radius: 12px;
	font-weight: 600;
	margin-left: 5px;
	background-color: transparent;
}
#user .sign-up button {
	padding: 8px 25px;
	border: none;
	color: var(--white-color);
	border-radius: 12px;
	font-weight: 600;
	margin-left: 5px;
	background-color: var(--primary-color-5);
}

/* ----------- LOGIN REGISTER SECTION ----------- */

#login-register .logo {
	padding: 36px 48px;
}

#login-register .logo img {
	width: 96px;
	height: 88px;
}

#login-register .login-register img {
	object-fit: cover;
	width: 100%;
	height: 1172px;
}

#login-register .hello {
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
}

#login-register .form {
	background-color: #fff;
	display: flex;
	flex-direction: column;
	padding: 1rem;
	width: 450px;
	border-radius: 0.5rem;
}

#login-register .form-title {
	font-size: 2rem;
	line-height: 1.75rem;
	font-weight: 600;
	color: #000;
}

#login-register .input-container {
	position: relative;
}

#login-register .input-container p {
	margin: 10px 0 0;
}

#login-register .input-container input,
#login-register .form button {
	outline: none;
	border: 1px solid #e5e7eb;
	margin: 8px 0;
}

#login-register .input-container input {
	width: 100%;
	background-color: #fff;
	padding: 1rem;
	font-size: 0.875rem;
	line-height: 1.25rem;
	border-radius: 0.5rem;
	box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
}

#login-register .input-container span {
	display: grid;
	position: absolute;
	top: 0;
	bottom: 0;
	right: 0;
	padding-left: 1rem;
	padding-right: 1rem;
	place-content: center;
}

#login-register .submit {
	display: block;
	padding-top: 0.75rem;
	padding-bottom: 0.75rem;
	padding-left: 1.25rem;
	padding-right: 1.25rem;
	background-color: var(--primary-color-5);
	color: #ffffff;
	font-size: 0.875rem;
	line-height: 1.25rem;
	font-weight: 500;
	width: 100%;
	border-radius: 0.5rem;
	text-transform: capitalize;
}

#login-register .link {
	padding-top: 20px;
	border-top: 1px solid rgba(0, 0, 0, 0.1);
	color: #6b7280;
	font-size: 0.875rem;
	line-height: 1.25rem;
	text-align: center;
}

#login-register .link a {
	text-decoration: none;
}

/* ----------- HERO SECTION ----------- */

#hero {
	padding: 90px 80px;
	display: flex;
	justify-content: flex-start;
}

#hero button h5 {
	margin: 0;
	font-size: 15px;
	font-weight: 600;
}

#hero .blob-hero {
	position: absolute;
	padding: inherit;
	top: 40px;
	right: 0;
	z-index: 0;
}

/* ----------- SERVICES SECTION ----------- */

#services .card {
	padding: 80px 30px;
	background-color: var(--gray-color-8);
	border-radius: 20px;
	border: none;
}

#services .header-services {
	display: flex;
	justify-content: space-between;
}

#services .text-services p {
	margin-left: 40px;
}

/* ----------- CONSULTANT SECTION ----------- */

#consultant {
	background-color: var(--gray-color-8);
	display: flex;
	flex-direction: column;
	align-items: center;
}

#consultant .card {
	align-items: center;
	padding: 20px 20px 40px;
	border-radius: 10px;
}

#consultant .card img {
	width: 100%;
}

#consultant h5 {
	margin-top: 20px;
	font-weight: 500;
}

#consultant .card p {
	margin: 2px 0;
	font-size: 12px;
}

/* ----------- HEADLINE SECTION ----------- */

#headline {
	z-index: 1;
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: flex-start;
}

#headline h2,
#headline h1 {
	font-size: 70px;
}

#headline h2 {
	margin-bottom: 30px;
}
#headline .line-svg {
	margin-top: 30px;
}

#headline .text-hero {
	padding-right: 43%;
}

#headline p {
	margin: 35px 0 30px 0;
}

#headline button {
	background-color: var(--primary-color-9);
	color: white;
	font-family: inherit;
	padding: 15px 30px;
	font-size: 17px;
	font-weight: 500;
	border-radius: 12px;
	border: none;
	display: flex;
	align-items: center;
	overflow: hidden;
	position: relative;
}

/* ----------- VISI MISI SECTION ----------- */

#visi-misi {
	margin-top: 30px;
}

.visi {
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
}

.blob-ctr {
	width: 470px;
	height: 250px;
	display: block;
	position: relative;
}

.blob-ctr2 {
	width: 450px;
	height: 250px;
	display: block;
	position: relative;
}

#blobSvg1 {
	position: absolute;
	top: -50px;
	left: -10px;
}
#blobSvg2 {
	position: absolute;
	bottom: -30px;
	right: 90px;
}
#blobSvg3 {
	position: absolute;
	top: -40px;
}

#blobSvg4 {
	position: absolute;
	left: -10px;
}
#blobSvg5 {
	position: absolute;
	bottom: -90px;
}
#blobSvg6 {
	position: absolute;
	top: 0;
	left: -30px;
}

.visi h1,
.misi h1 {
	font-size: 50px;
	font-weight: 700;
}

.tagline {
	position: absolute;
	top: 30%;
	left: 24%;
}

.misi {
	position: relative;
}

#visi-misi img {
	border-radius: 30px;
}

.hello {
	margin: 100px;
	justify-content: center;
}

#visi-misi .card {
	width: 340px;
	height: 454px;
	overflow: visible;
	cursor: pointer;
	border: none;
}

#visi-misi .col {
	display: flex;
	justify-content: center;
}

#visi-misi .card img {
	height: 100%;
}

#visi-misi .card::before,
#visi-misi .description {
	border-radius: 5px;
	box-shadow: 0px 0px 5px 1px #00000022;
	transition: transform 800ms, box-shadow 400ms;
	display: flex;
	justify-content: center;
}

#visi-misi .content::before {
	border-radius: 5px;
	box-shadow: 0px 0px 5px 1px #00000022;
	transition: transform 400ms, box-shadow 200ms;
}

#visi-misi .card::before {
	position: absolute;
	content: " ";
	display: block;
	width: 100%;
	height: 100%;
	background-color: rgba(139, 126, 116, 0.6);
	transform: rotateZ(-18deg);
}

#visi-misi .content::before {
	position: absolute;
	content: " ";
	display: block;
	width: 100%;
	height: 100%;
	background-color: rgba(139, 126, 116, 0.9);
	transform: rotateZ(-9deg);
}

#visi-misi .card .content .description {
	position: absolute;
	width: 100%;
	height: 100%;
	background-color: rgb(139, 126, 116);
	display: flex;
	flex-direction: column;
	align-items: center;
	transform: rotateZ(0);
}

#visi-misi .card:hover::before,
#visi-misi .card:hover .content:before,
#visi-misi.card:hover .description {
	transform: rotateZ(0deg);
}

/* ----------- PROGRAM SECTION ----------- */

#program {
	display: flex;
	flex-direction: column;
	align-items: center;
}

#program .card .temporary_text img {
	object-fit: cover;
	width: 100%;
	height: 500px;
}

#program .card {
	position: relative;
	width: 350px;
	height: 500px;
	overflow: hidden;
	border-radius: 20px;
	border-radius: none;
}

#program .card_title {
	font-weight: bold;
}

#program .card_content {
	position: absolute;
	left: 0;
	bottom: 0;
	/* edit the width to fit card */
	width: 100%;
	padding: 20px;
	background: #f2f2f2;
	border-top-left-radius: 20px;
	/* edit here to change the height of the content box */
	transform: translateY(150px);
	transition: transform 0.25s;
}

#program .card_content::before {
	content: "";
	position: absolute;
	top: -47px;
	right: -45px;
	width: 100px;
	height: 100px;
	transform: rotate(-175deg);
	border-radius: 50%;
	box-shadow: inset 48px 48px #f2f2f2;
}

#program .card_title {
	color: #131313;
	line-height: 15px;
}

#program .card_price {
	display: block;
	font-size: 13px;
	margin-bottom: 10px;
}

#program .card_description {
	font-size: 14px;
	opacity: 0;
	transition: opacity 0.5s;
}

#program .card:hover .card_content {
	transform: translateY(0);
}

#program .card:hover .card_description {
	opacity: 1;
	transition-delay: 0.25s;
}

/* ----------- PARTNER SECTION ----------- */

#partner h1 {
	margin-bottom: 40px;
}

#partner .square-holder {
	padding: 30px;
	border: 1px solid #cecece;
	align-items: center;
	display: flex;
	align-items: center;
	justify-content: center;
	margin-bottom: 20px;
	background-color: #f1f1f1;
	min-height: 200px;
}

#partner .square-holder img {
	max-width: 100%;
	filter: grayscale(100%);
	transition: all 0.3s;
}

#partner .square-holder:hover img {
	filter: none;
}

/* ----------- FOOTER SECTION ----------- */

#footer {
	padding-top: 50px;
	background-color: var(--primary-color-9);
}

#footer img {
	width: 90px;
}

.social-media i {
	color: #ffffff;
}

#footer span,
#footer h5 {
	color: #ffffff;
	font-size: 15px;
	font-weight: 600;
}

#footer p {
	color: #ffffff;
	font-size: 15px;
	margin: 15px 0;
}

#footer .pt-5 h5 {
	display: flex;
	align-items: center;
}

#footer .pt-5 i {
	margin-right: 20px;
	color: #ebb02d;
}

#footer .pt-5 p {
	margin: 0;
}

#footer .social-media {
	display: flex;
}

#footer .social-media button {
	margin-top: 40px;
	margin-right: 5px;
	width: 40px;
	height: 40px;
	background: transparent;
	display: flex;
	align-items: center;
	justify-content: center;
	font-size: 17px;
	text-decoration: none;
	border: 1px solid #ebb02d;
	border-radius: 90px;
	color: rgb(40, 144, 241);
	transition: color 0.3s 0.1s ease-out;
}

#footer .social-media button:hover {
	background-color: #ebb02d;
	transition: color 0.3s 0.1s ease-out;
	color: white;
	border: none;
}
    </style>
</head>
<body>
    
<?= $this->renderSection('content') ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>

    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>