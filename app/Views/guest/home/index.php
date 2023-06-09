<?= $this->extend('temp/html'); ?>

<?= $this->section('content'); ?>
	<!-- bagian navbar -->
	<section id="header">
		<div id="nav">
			<img id="logo" src="https://kbc.or.id/img/general/KBC-Logo_1594107681.png" class="logo" alt="" />
		</div>
		<ul id="navbar">
			<a href="index.html">
				<li>
					<a href="beranda.html" class="active">Beranda</a>
				</li>
				<li><a href="program.html">Program</a></li>
				<li><a href="komunitas.html">Blog</a></li>
				<li><a href="bootcamp.html">FAQ</a></li>
			</a>
		</ul>
		<ul id="user">
			<!-- <li>
					<a href="login.html">
						<i class="bi bi-person-fill"></i>
					</a>
				</li>
				<p>Khoirul Fahmi</p> -->
			<a href="/login" class="sign-in">
				<button>Masuk</button>
			</a>
			<a href="/register" class="sign-up">
				<button>Registrasi</button>
			</a>
		</ul>
	</section>

	<section id="hero">
		<div id="headline">
			<h2>Bisnis anda siap</h2>
			<h1>untuk Shifting Up ?</h1>
			<img src="img/svg/curve.svg" class="curve-svg" alt="" />
			<div class="text-hero">
				<p>
					Kamu bisa belajar langsung dari para professional
					di industri teknologi, dan juga banyak aktifitas
					seru yang bisa kamu ikuti.
				</p>
				<button class="hero-button">
					<h5>Lihat selengkapnya</h5>
				</button>
			</div>
		</div>
		<!-- <img src="img/hero.png" alt="" /> -->
		<img src="img/svg/blob.svg" class="blob-hero" />
	</section>

	<!-- bagian about -->
	<section id="about" class="section-m1">
		<div class="container">
			<div class="header-about">
				<div class="text-about">
					<h1>WHO WE ARE ?</h1>
				</div>
				<img src="img/svg/straight-line.svg" class="straight-line" alt="">
			</div>
			<div class="row">
				<div class="col">
					<iframe class="frame" width="500" height="315" src="https://www.youtube.com/embed/" frameborder="0"
						allowfullscreen></iframe>
				</div>
				<div class="col">
					<img src="img/svg/wave-line2.svg" class="wave-line2" alt="">
					<p>Kingdom Business Community (KBC) adalah sebuah gerakan moral dalam dunia kerja berbentuk yayasan
						niralaba dengan fokus untuk memiliki ‘transformasi pola pikir’ dalam melakukan Bisnis /
						Pekerjaan dengan Tujuan yang Mulia (tidak hanya orientasi profit) dan mempraktekkan nilai
						spritual dalam bekerja.</p>
				</div>
			</div>
		</div>
	</section>

	<!-- bagian service -->
	<section id="services" class="section-m1">
		<div class="container">
			<div class="header-services">
				<div class="text-services">
					<h1>Services</h1>
					<p>Experience You Can Trust</p>
				</div>
				<img src="img/svg/wave-line.svg" class="" alt="" />
			</div>

			<div class="row">
				<div class="col">
					<div class="card">
						<img src="" alt="" />
						<h5>1:1 Coaching</h5>
						<p>
							Lorem ipsum dolor sit amet, consectetur
							adipiscing elit, sed do eiusmod tempor
							incididunt ut labore et dolore magna
							aliqua minim veniam.
						</p>
					</div>
				</div>
				<div class="col">
					<div class="card">
						<img src="" alt="" />
						<h5>Consultation</h5>
						<p>
							Lorem ipsum dolor sit amet, consectetur
							adipiscing elit, sed do eiusmod tempor
							incididunt ut labore et dolore magna
							aliqua minim veniam.
						</p>
					</div>
				</div>
				<div class="col">
					<div class="card">
						<img src="" alt="" />
						<h5>Group Coaching Sessions</h5>
						<p>
							Lorem ipsum dolor sit amet, consectetur
							adipiscing elit, sed do eiusmod tempor
							incididunt ut labore et dolore magna
							aliqua minim veniam.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- bagian konsultan -->
	<section id="consultant" class="section-p1">
		<h1>Konsultan Ahli Dalam Bidangnya</h1>
		<p>
			Konsultasikan mengenai keluhan Anda pada kami Ahlinya,
			berdiskusi & sharing menegenai hal yang sebelumnya belum
			Anda ketahui
		</p>
		<div class="row">
			<div class="col">
				<div class="card">
					<img src="img/khoirul.png" alt="" />
					<h5>Khoirul Fahmi</h5>
					<p>President Director</p>
					<p>PT Pertamina Indonesia</p>
				</div>
			</div>
			<div class="col">
				<div class="card">
					<img src="img/khoirul.png" alt="" />
					<h5>Khoirul Fahmi</h5>
					<p>President Director</p>
					<p>PT Pertamina Indonesia</p>
				</div>
			</div>
			<div class="col">
				<div class="card">
					<img src="img/khoirul.png" alt="" />
					<h5>Khoirul Fahmi</h5>
					<p>President Director</p>
					<p>PT Pertamina Indonesia</p>
				</div>
			</div>
			<div class="col">
				<div class="card">
					<img src="img/khoirul.png" alt="" />
					<h5>Khoirul Fahmi</h5>
					<p>President Director</p>
					<p>PT Pertamina Indonesia</p>
				</div>
			</div>
			<div class="col">
				<div class="card">
					<img src="img/khoirul.png" alt="" />
					<h5>Khoirul Fahmi</h5>
					<p>President Director</p>
					<p>PT Pertamina Indonesia</p>
				</div>
			</div>
		</div>
	</section>

	<!-- bagian banner -->
	<section id="banner" class="section-p1">
		<div class="row">
			<div class="col-lg-7">
				<div class="text">
					<h1>Ingin menjadi Konsultan ?</h1>
					<p>
						Untuk kamu yang ingin menjadi Konsultan, KBC memberikan kesempatan untuk kamu bergabung menjadi
						konsultan.
					</p>
					<button class="banner-button">
						<h5>Daftar Konsultan</h5>
					</button>
				</div>
			</div>
			<div class="col-lg-5">
				<div class="card">
					<div class="content">
						<div class="description">
							<img src="img/banner.png" alt="" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- <section id="visi-misi" class="section-p1">
			<div class="container">
				<div class="row">
					<div class="col-sm">
						<div class="visi">
							<div class="blob-ctr">
								<svg
									version="1.1"
									xmlns="http://www.w3.org/2000/svg"
									viewBox="0 0 500 500"
									width="80%"
									id="blobSvg1"
									filter="blur(0.4px)"
									style="opacity: 1"
									transform="rotate(60)">
									<defs>
										<linearGradient
											id="gradient1"
											x1="0%"
											y1="0%"
											x2="0%"
											y2="100%">
											<stop
												offset="0%"
												style="
													stop-color: rgb(
														197,
														191,
														191
													);
												"></stop>
											<stop
												offset="100%"
												style="
													stop-color: rgb(
														87,
														76,
														76
													);
												"></stop>
										</linearGradient>
									</defs>
									<path
										id="blob"
										fill="url(#gradient1)"
										style="opacity: 0.56">
										<animate
											attributeName="d"
											dur="11000ms"
											repeatCount="indefinite"
											values="M390.7302,319.10952Q360.37524,388.21905,284.62068,409.39959Q208.86612,430.58014,161.11156,373.20082Q113.35701,315.8215,88.46857,238.04463Q63.58014,160.26776,136.76776,117.04463Q209.95537,73.8215,303.79007,69.52027Q397.62476,65.21905,409.35497,157.60952Q421.08517,250,390.7302,319.10952Z;M388.67097,319.27849Q360.55699,388.55699,291.23441,379.72688Q221.91183,370.89678,145.00645,354.28387Q68.10108,337.67097,71.32903,251.33548Q74.55699,165,142.39247,119.95591Q210.22796,74.91183,286.12043,91.61398Q362.0129,108.31613,389.39892,179.15806Q416.78495,250,388.67097,319.27849Z;M429.79847,339.54154Q392.67727,429.08308,294.97368,455.00137Q197.27008,480.91966,143.94598,403.56786Q90.62188,326.21607,83.52769,246.22992Q76.43351,166.24376,136.8518,92.77008Q197.27008,19.29641,287.1482,55Q377.02632,90.70359,421.97299,170.3518Q466.91966,250,429.79847,339.54154Z;M400,314Q352,378,277,420Q202,462,143,396Q84,330,66.5,241.5Q49,153,125.5,97.5Q202,42,298.5,55Q395,68,421.5,159Q448,250,400,314Z;M390.7302,319.10952Q360.37524,388.21905,284.62068,409.39959Q208.86612,430.58014,161.11156,373.20082Q113.35701,315.8215,88.46857,238.04463Q63.58014,160.26776,136.76776,117.04463Q209.95537,73.8215,303.79007,69.52027Q397.62476,65.21905,409.35497,157.60952Q421.08517,250,390.7302,319.10952Z"></animate>
									</path>
								</svg>

								<svg
									version="1.1"
									xmlns="http://www.w3.org/2000/svg"
									viewBox="0 0 500 500"
									width="25%"
									id="blobSvg2"
									filter="blur(3.2px)"
									style="opacity: 1"
									transform="rotate(60)">
									<defs>
										<linearGradient
											id="gradient2"
											x1="0%"
											y1="0%"
											x2="0%"
											y2="100%">
											<stop
												offset="0%"
												style="
													stop-color: rgb(
														197,
														191,
														191
													);
												"></stop>
											<stop
												offset="100%"
												style="
													stop-color: rgb(
														0,
														0,
														0
													);
												"></stop>
										</linearGradient>
									</defs>
									<path
										id="blob"
										fill="url(#gradient2)"
										style="opacity: 0.56">
										<animate
											attributeName="d"
											dur="11000ms"
											repeatCount="indefinite"
											values="M390.7302,319.10952Q360.37524,388.21905,284.62068,409.39959Q208.86612,430.58014,161.11156,373.20082Q113.35701,315.8215,88.46857,238.04463Q63.58014,160.26776,136.76776,117.04463Q209.95537,73.8215,303.79007,69.52027Q397.62476,65.21905,409.35497,157.60952Q421.08517,250,390.7302,319.10952Z;M388.67097,319.27849Q360.55699,388.55699,291.23441,379.72688Q221.91183,370.89678,145.00645,354.28387Q68.10108,337.67097,71.32903,251.33548Q74.55699,165,142.39247,119.95591Q210.22796,74.91183,286.12043,91.61398Q362.0129,108.31613,389.39892,179.15806Q416.78495,250,388.67097,319.27849Z;M429.79847,339.54154Q392.67727,429.08308,294.97368,455.00137Q197.27008,480.91966,143.94598,403.56786Q90.62188,326.21607,83.52769,246.22992Q76.43351,166.24376,136.8518,92.77008Q197.27008,19.29641,287.1482,55Q377.02632,90.70359,421.97299,170.3518Q466.91966,250,429.79847,339.54154Z;M400,314Q352,378,277,420Q202,462,143,396Q84,330,66.5,241.5Q49,153,125.5,97.5Q202,42,298.5,55Q395,68,421.5,159Q448,250,400,314Z;M390.7302,319.10952Q360.37524,388.21905,284.62068,409.39959Q208.86612,430.58014,161.11156,373.20082Q113.35701,315.8215,88.46857,238.04463Q63.58014,160.26776,136.76776,117.04463Q209.95537,73.8215,303.79007,69.52027Q397.62476,65.21905,409.35497,157.60952Q421.08517,250,390.7302,319.10952Z"></animate>
									</path>
								</svg>

								<svg
									version="1.1"
									xmlns="http://www.w3.org/2000/svg"
									viewBox="0 0 500 500"
									width="40%"
									id="blobSvg3"
									filter="blur(3.2px)"
									style="opacity: 1"
									transform="rotate(16)">
									<defs>
										<linearGradient
											id="gradient3"
											x1="0%"
											y1="0%"
											x2="0%"
											y2="100%">
											<stop
												offset="0%"
												style="
													stop-color: rgb(
														139,
														126,
														116
													);
												"></stop>
											<stop
												offset="100%"
												style="
													stop-color: rgb(
														0,
														0,
														0
													);
												"></stop>
										</linearGradient>
									</defs>
									<path
										id="blob"
										fill="url(#gradient3)"
										style="opacity: 0.28">
										<animate
											attributeName="d"
											dur="10s"
											repeatCount="indefinite"
											values="M415.01911,310.8863Q439.5452,371.7726,388.0904,405.2945Q336.6356,438.8164,280.7726,433.452Q224.9096,428.08761,185.95759,398.74511Q147.00559,369.40261,129.05219,330.15471Q111.09878,290.9068,102.89189,247.863Q94.68499,204.8192,97.4315,140.3164Q100.17801,75.81361,160.4068,60.51771Q220.6356,45.22181,275.226,60.1356Q329.8164,75.04939,372.9534,109.3658Q416.0904,143.6822,403.29171,196.8411Q390.49301,250,415.01911,310.8863Z;M409,303.5Q416,357,378,402Q340,447,282,439Q224,431,187,398.5Q150,366,105.5,335.5Q61,305,45,245Q29,185,59,124.5Q89,64,152.5,40Q216,16,265,63.5Q314,111,383,115.5Q452,120,427,185Q402,250,409,303.5Z;M394.89432,291.86359Q379.96349,333.72718,354.5999,379.04899Q329.23631,424.37079,274.96542,439.22911Q220.69452,454.08742,185.59462,409.0927Q150.49472,364.09798,125.7075,328.96349Q100.92028,293.82901,59.42363,237.80355Q17.92698,181.77809,66.30163,137.5999Q114.67627,93.42171,168.36359,75.4145Q222.05091,57.4073,282.76369,51.5999Q343.47647,45.7925,374.93276,97.57444Q406.38905,149.35639,408.1071,199.67819Q409.82516,250,394.89432,291.86359Z;M437.20545,311.82292Q441.89352,373.64584,380.77431,387.66608Q319.65509,401.68633,271.82754,416.34317Q224,431,184.22569,401.27431Q144.45139,371.54861,81.45601,344.74769Q18.46064,317.94676,58.87153,261.64584Q99.28242,205.34491,102.46413,144.38253Q105.64584,83.42014,164.05961,69.5926Q222.47338,55.76506,274.24769,69.97338Q326.02199,84.18171,376.989,109.95139Q427.95601,135.72107,430.23669,192.86053Q432.51737,250,437.20545,311.82292Z;M415.01911,310.8863Q439.5452,371.7726,388.0904,405.2945Q336.6356,438.8164,280.7726,433.452Q224.9096,428.08761,185.95759,398.74511Q147.00559,369.40261,129.05219,330.15471Q111.09878,290.9068,102.89189,247.863Q94.68499,204.8192,97.4315,140.3164Q100.17801,75.81361,160.4068,60.51771Q220.6356,45.22181,275.226,60.1356Q329.8164,75.04939,372.9534,109.3658Q416.0904,143.6822,403.29171,196.8411Q390.49301,250,415.01911,310.8863Z"></animate>
									</path>
								</svg>
								<div class="tagline">
									<h1>VISI</h1>
									<h6>
										Komunitas Dunia Usaha yang
										Berpusatkan Allah (A God
										Centered Marketplace
										Community).
									</h6>
								</div>
							</div>
						</div>
						<div class="misi">
							<div class="blob-ctr2">
								<svg
									version="1.1"
									xmlns="http://www.w3.org/2000/svg"
									viewBox="0 0 500 500"
									width="80%"
									id="blobSvg4"
									filter="blur(0.4px)"
									style="opacity: 1"
									transform="rotate(60)">
									<defs>
										<linearGradient
											id="gradient4"
											x1="0%"
											y1="0%"
											x2="0%"
											y2="100%">
											<stop
												offset="0%"
												style="
													stop-color: rgb(
														197,
														191,
														191
													);
												"></stop>
											<stop
												offset="100%"
												style="
													stop-color: rgb(
														87,
														76,
														76
													);
												"></stop>
										</linearGradient>
									</defs>
									<path
										id="blob"
										fill="url(#gradient4)"
										style="opacity: 0.56">
										<animate
											attributeName="d"
											dur="11000ms"
											repeatCount="indefinite"
											values="M390.7302,319.10952Q360.37524,388.21905,284.62068,409.39959Q208.86612,430.58014,161.11156,373.20082Q113.35701,315.8215,88.46857,238.04463Q63.58014,160.26776,136.76776,117.04463Q209.95537,73.8215,303.79007,69.52027Q397.62476,65.21905,409.35497,157.60952Q421.08517,250,390.7302,319.10952Z;M388.67097,319.27849Q360.55699,388.55699,291.23441,379.72688Q221.91183,370.89678,145.00645,354.28387Q68.10108,337.67097,71.32903,251.33548Q74.55699,165,142.39247,119.95591Q210.22796,74.91183,286.12043,91.61398Q362.0129,108.31613,389.39892,179.15806Q416.78495,250,388.67097,319.27849Z;M429.79847,339.54154Q392.67727,429.08308,294.97368,455.00137Q197.27008,480.91966,143.94598,403.56786Q90.62188,326.21607,83.52769,246.22992Q76.43351,166.24376,136.8518,92.77008Q197.27008,19.29641,287.1482,55Q377.02632,90.70359,421.97299,170.3518Q466.91966,250,429.79847,339.54154Z;M400,314Q352,378,277,420Q202,462,143,396Q84,330,66.5,241.5Q49,153,125.5,97.5Q202,42,298.5,55Q395,68,421.5,159Q448,250,400,314Z;M390.7302,319.10952Q360.37524,388.21905,284.62068,409.39959Q208.86612,430.58014,161.11156,373.20082Q113.35701,315.8215,88.46857,238.04463Q63.58014,160.26776,136.76776,117.04463Q209.95537,73.8215,303.79007,69.52027Q397.62476,65.21905,409.35497,157.60952Q421.08517,250,390.7302,319.10952Z"></animate>
									</path>
								</svg>

								<svg
									version="1.1"
									xmlns="http://www.w3.org/2000/svg"
									viewBox="0 0 500 500"
									width="30%"
									id="blobSvg5"
									filter="blur(3.2px)"
									style="opacity: 1"
									transform="rotate(60)">
									<defs>
										<linearGradient
											id="gradient5"
											x1="0%"
											y1="0%"
											x2="0%"
											y2="100%">
											<stop
												offset="0%"
												style="
													stop-color: rgb(
														197,
														191,
														191
													);
												"></stop>
											<stop
												offset="100%"
												style="
													stop-color: rgb(
														0,
														0,
														0
													);
												"></stop>
										</linearGradient>
									</defs>
									<path
										id="blob"
										fill="url(#gradient5)"
										style="opacity: 0.56">
										<animate
											attributeName="d"
											dur="11000ms"
											repeatCount="indefinite"
											values="M390.7302,319.10952Q360.37524,388.21905,284.62068,409.39959Q208.86612,430.58014,161.11156,373.20082Q113.35701,315.8215,88.46857,238.04463Q63.58014,160.26776,136.76776,117.04463Q209.95537,73.8215,303.79007,69.52027Q397.62476,65.21905,409.35497,157.60952Q421.08517,250,390.7302,319.10952Z;M388.67097,319.27849Q360.55699,388.55699,291.23441,379.72688Q221.91183,370.89678,145.00645,354.28387Q68.10108,337.67097,71.32903,251.33548Q74.55699,165,142.39247,119.95591Q210.22796,74.91183,286.12043,91.61398Q362.0129,108.31613,389.39892,179.15806Q416.78495,250,388.67097,319.27849Z;M429.79847,339.54154Q392.67727,429.08308,294.97368,455.00137Q197.27008,480.91966,143.94598,403.56786Q90.62188,326.21607,83.52769,246.22992Q76.43351,166.24376,136.8518,92.77008Q197.27008,19.29641,287.1482,55Q377.02632,90.70359,421.97299,170.3518Q466.91966,250,429.79847,339.54154Z;M400,314Q352,378,277,420Q202,462,143,396Q84,330,66.5,241.5Q49,153,125.5,97.5Q202,42,298.5,55Q395,68,421.5,159Q448,250,400,314Z;M390.7302,319.10952Q360.37524,388.21905,284.62068,409.39959Q208.86612,430.58014,161.11156,373.20082Q113.35701,315.8215,88.46857,238.04463Q63.58014,160.26776,136.76776,117.04463Q209.95537,73.8215,303.79007,69.52027Q397.62476,65.21905,409.35497,157.60952Q421.08517,250,390.7302,319.10952Z"></animate>
									</path>
								</svg>

								<svg
									version="1.1"
									xmlns="http://www.w3.org/2000/svg"
									viewBox="0 0 500 500"
									width="40%"
									id="blobSvg6"
									filter="blur(3.2px)"
									style="opacity: 1"
									transform="rotate(16)">
									<defs>
										<linearGradient
											id="gradient6"
											x1="0%"
											y1="0%"
											x2="0%"
											y2="100%">
											<stop
												offset="0%"
												style="
													stop-color: rgb(
														139,
														126,
														116
													);
												"></stop>
											<stop
												offset="100%"
												style="
													stop-color: rgb(
														0,
														0,
														0
													);
												"></stop>
										</linearGradient>
									</defs>
									<path
										id="blob"
										fill="url(#gradient6)"
										style="opacity: 0.28">
										<animate
											attributeName="d"
											dur="10s"
											repeatCount="indefinite"
											values="M415.01911,310.8863Q439.5452,371.7726,388.0904,405.2945Q336.6356,438.8164,280.7726,433.452Q224.9096,428.08761,185.95759,398.74511Q147.00559,369.40261,129.05219,330.15471Q111.09878,290.9068,102.89189,247.863Q94.68499,204.8192,97.4315,140.3164Q100.17801,75.81361,160.4068,60.51771Q220.6356,45.22181,275.226,60.1356Q329.8164,75.04939,372.9534,109.3658Q416.0904,143.6822,403.29171,196.8411Q390.49301,250,415.01911,310.8863Z;M409,303.5Q416,357,378,402Q340,447,282,439Q224,431,187,398.5Q150,366,105.5,335.5Q61,305,45,245Q29,185,59,124.5Q89,64,152.5,40Q216,16,265,63.5Q314,111,383,115.5Q452,120,427,185Q402,250,409,303.5Z;M394.89432,291.86359Q379.96349,333.72718,354.5999,379.04899Q329.23631,424.37079,274.96542,439.22911Q220.69452,454.08742,185.59462,409.0927Q150.49472,364.09798,125.7075,328.96349Q100.92028,293.82901,59.42363,237.80355Q17.92698,181.77809,66.30163,137.5999Q114.67627,93.42171,168.36359,75.4145Q222.05091,57.4073,282.76369,51.5999Q343.47647,45.7925,374.93276,97.57444Q406.38905,149.35639,408.1071,199.67819Q409.82516,250,394.89432,291.86359Z;M437.20545,311.82292Q441.89352,373.64584,380.77431,387.66608Q319.65509,401.68633,271.82754,416.34317Q224,431,184.22569,401.27431Q144.45139,371.54861,81.45601,344.74769Q18.46064,317.94676,58.87153,261.64584Q99.28242,205.34491,102.46413,144.38253Q105.64584,83.42014,164.05961,69.5926Q222.47338,55.76506,274.24769,69.97338Q326.02199,84.18171,376.989,109.95139Q427.95601,135.72107,430.23669,192.86053Q432.51737,250,437.20545,311.82292Z;M415.01911,310.8863Q439.5452,371.7726,388.0904,405.2945Q336.6356,438.8164,280.7726,433.452Q224.9096,428.08761,185.95759,398.74511Q147.00559,369.40261,129.05219,330.15471Q111.09878,290.9068,102.89189,247.863Q94.68499,204.8192,97.4315,140.3164Q100.17801,75.81361,160.4068,60.51771Q220.6356,45.22181,275.226,60.1356Q329.8164,75.04939,372.9534,109.3658Q416.0904,143.6822,403.29171,196.8411Q390.49301,250,415.01911,310.8863Z"></animate>
									</path>
								</svg>
								<div class="tagline">
									<h1>MISI</h1>
									<h6>
										Membangun komunitas bisnis
										Kerajaan Allah yang :
										<ul>
											<li>
												Kuat dalam Firman,
											</li>
											<li>
												Ahli dalam bisnis
												dan
											</li>
											<li>
												Menjadi berkat /
												peduli (Termasuk
												komunitas
												pra-sejahtera)
											</li>
										</ul>
									</h6>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card">
							<div class="content">
								<div class="description">
									<img
										src="img/visi-misi.png"
										alt="" />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> -->

	<!-- bagian program -->
	<section id="program" class="section-p1">
		<h1>Our Program</h1>
		<p>Berbagai macam pilihan program yang cocok untuk kamu</p>
		<div class="row">
			<div class="col">
				<div class="card">
					<div class="temporary_text">
						<img src="img/paper.jpg" alt="" />
					</div>
					<div class="card_content">
						<span class="card_title">Digital Marketing</span>
						<span class="card_price">Rp. 160.000</span>
						<p class="card_description">
							Lorem ipsum dolor, sit amet expedita
							exercitationem recusandae aut dolor
							tempora aperiam itaque possimus at,
							cupiditate earum, quae repudiandae
							aspernatur? Labore minus soluta
							consequatur placeat.
						</p>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card">
					<div class="temporary_text">
						<img src="img/paper.jpg" alt="" />
					</div>
					<div class="card_content">
						<span class="card_title">Digital Marketing</span>
						<span class="card_price">Rp. 160.000</span>
						<p class="card_description">
							Lorem ipsum dolor, sit amet expedita
							exercitationem recusandae aut dolor
							tempora aperiam itaque possimus at,
							cupiditate earum, quae repudiandae
							aspernatur? Labore minus soluta
							consequatur placeat.
						</p>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card">
					<div class="temporary_text">
						<img src="img/paper.jpg" alt="" />
					</div>
					<div class="card_content">
						<span class="card_title">Digital Marketing</span>
						<span class="card_price">Rp. 160.000</span>
						<p class="card_description">
							Lorem ipsum dolor, sit amet expedita
							exercitationem recusandae aut dolor
							tempora aperiam itaque possimus at,
							cupiditate earum, quae repudiandae
							aspernatur? Labore minus soluta
							consequatur placeat.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- bagian partner -->
	<section id="partner" class="section-p1">
		<h1 class="hiring-partner text-center">Hiring Partner</h1>
		<div class="row">
			<div class="col-sm-6 col-md-4 col-lg-3">
				<div class="square-holder">
					<img alt=""
						src="https://d1j87w3j7cc3a6.cloudfront.net/newsroom/media/web/image/brandbook-logo-thumbnail-5.jpg" />
				</div>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-3">
				<div class="square-holder">
					<img alt=""
						src="https://upload.wikimedia.org/wikipedia/id/thumb/5/55/BNI_logo.svg/1200px-BNI_logo.svg.png" />
				</div>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-3">
				<div class="square-holder">
					<img alt=""
						src="https://assets.grab.com/wp-content/uploads/sites/9/2021/04/15154215/Grab_Logo_2021.jpg" />
				</div>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-3">
				<div class="square-holder">
					<img alt=""
						src="https://cdn2.tstatic.net/tribunnewswiki/foto/bank/images/Logo-badan-usaha-milik-negara-BUMN.jpg" />
				</div>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-3">
				<div class="square-holder">
					<img alt=""
						src="https://images.samsung.com/is/image/samsung/assets/id/about-us/brand/logo/mo/360_197_1.png?$FB_TYPE_B_PNG$" />
				</div>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-3">
				<div class="square-holder">
					<img alt="" src="https://www.pmits.co.uk/Portals/0/img/opera3_logo.png" />
				</div>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-3">
				<div class="square-holder">
					<img alt="" src="https://www.pmits.co.uk/Portals/0/pegasus-logo.png" />
				</div>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-3">
				<div class="square-holder">
					<img alt="" src="https://www.pmits.co.uk/Portals/0/sage business partner.jpg" />
				</div>
			</div>
		</div>
	</section>

	<!-- bagian ulasan -->
	<section id="ulasan" class="section-p1">
		<div class="container">
			<div class="header-ulasan">
				<div class="header-text">
					<div class="row">
						<div class="col">
							<h1>Kesan setelah join bersama KBC Build ?</h1>
							<p>Saatnya kamu meraih kesuksesan Karier! Jadi bagian dari perjalanan KBC dalam membangun
								Karier</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="card">
						<p>
							"I gained so much confidence in my ability to connect and deepen my relationships
							with
							people. "
						</p>
						<h5>Jane</h5>
						<img src="img/ulasan1.png" alt="" />
						<div class="icon">
							<i class='bx bxs-star'></i>
							<i class='bx bxs-star'></i>
							<i class='bx bxs-star'></i>
							<i class='bx bxs-star'></i>
							<i class='bx bxs-star'></i>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card">
						<p>
							"I gained so much confidence in my ability to connect and deepen my relationships
							with
							people. "
						</p>
						<h5>Catherine</h5>
						<img src="img/ulasan2.png" alt="" />
						<div class="icon">
							<i class='bx bxs-star'></i>
							<i class='bx bxs-star'></i>
							<i class='bx bxs-star'></i>
							<i class='bx bxs-star'></i>
							<i class='bx bxs-star'></i>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card">
						<p>
							"I gained so much confidence in my ability to connect and deepen my relationships
							with
							people. "
						</p>
						<h5>Jane</h5>
						<img src="img/ulasan3.png" alt="" />
						<div class="icon">
							<i class='bx bxs-star'></i>
							<i class='bx bxs-star'></i>
							<i class='bx bxs-star'></i>
							<i class='bx bxs-star'></i>
							<i class='bx bxs-star'></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- bagian blog -->
	<section id="blog" class="section-p1">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="blog-header">
						<div class="blog-text">
							<h1>Seputar KBC </h1>
							<p>Biar otak nggak tegang, kami hadirkan bacaan yang asyik, menarik, dan penuh insights!</p>
						</div>
					</div>
				</div>
			</div>
			<swiper-container class="mySwiper" pagination="true" pagination-clickable="true" navigation="true"
				space-between="30" centered-slides="true" autoplay-delay="2500" autoplay-disable-on-interaction="false">
				<swiper-slide>
					<div class="isi">
						<div class="row">
							<div class="col-lg-7">
								<div class="box">
									<img src="img/blog.png" alt="">
								</div>
							</div>
							<div class="col-lg-5">
								<div class="text">
									<h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
										incididunt
										ut labore et dolore magna aliqua minim veniam.
									</p>
									<a href="">Baca Selengkapnya</a>
								</div>
							</div>
						</div>
					</div>
				</swiper-slide>
				<swiper-slide>Slide 2</swiper-slide>
				<swiper-slide>Slide 3</swiper-slide>
				<swiper-slide>Slide 4</swiper-slide>
				<swiper-slide>Slide 5</swiper-slide>
				<swiper-slide>Slide 6</swiper-slide>
				<swiper-slide>Slide 7</swiper-slide>
				<swiper-slide>Slide 8</swiper-slide>
				<swiper-slide>Slide 9</swiper-slide>
			</swiper-container>
		</div>
	</section>

	<!-- bagian footer -->
	<section id="footer">
		<div class="container">
			<div class="row">
				<div class="col mb-3">
					<img src="https://kbc.or.id/img/general/KBC-Logo_1594107681.png" alt="" />
					<div class="pt-5">
						<h5>
							<i class="bi bi-envelope"></i>
							<p>KBC@gmail.com</p>
						</h5>
						<h5>
							<i class="bi bi-telephone"></i>
							<p>(022) 2222222</p>
						</h5>
					</div>
					<div class="social-media">
						<button>
							<i class="bi bi-instagram"> </i>
						</button>
						<button>
							<i class="bi bi-facebook"> </i>
						</button>
						<button>
							<i class="bi bi-youtube"> </i>
						</button>
					</div>
				</div>
				<div class="col-6 col-md-2 mb-3">
					<h5>KBC Build</h5>
					<p>Karir</p>
					<p>Tentang Kami</p>
					<p>Partner</p>
					<p>Blog</p>
				</div>

				<div class="col-6 col-md-2 mb-3">
					<h5>Layanan</h5>
					<p>Kelas</p>
					<p>Beasiswa</p>
					<p>Webinar</p>
				</div>

				<div class="col-6 col-md-2 mb-3">
					<h5>Bantuan & Panduan</h5>
					<p>Syarat dan Ketentuan</p>
					<p>Kebijakan Privasi</p>
					<p>Bantuan FAQ</p>
				</div>
				<div class="d-flex flex-wrap justify-content-between align-items-center py-3 border-top">
					<div class="col-md-4 d-flex align-items-center">
						<span class="mb-3 mb-md-0">© 2023 CV. RC Electronic</span>
					</div>
				</div>
			</div>
		</div>
	</section>
<?= $this->endSection() ?>