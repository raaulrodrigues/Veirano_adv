<?php include('header.php'); ?>
	<section style="background-image: url(img/featured-midia.jpg);" id="featured-page">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="page-title font-merriweather text-white">
						<h1>
							<img src="img/icon-page-title.svg" alt="" class="img-fluid">
							<span>Mídia</span>
						</h1>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="breadcrumbs" class="bg-most-lightest-gray font-open-sans">
		<div class="container">
			<div class="row">
				<div class="col-lg-9">
					<div class="bradcrumb">
						<span>Você está em ></span>
						<a href="index.php"><b>Home</b></a>
						<span>></span>
						<span class="current">Mídia</span>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="share d-flex justify-content-end align-items-center">
						<span>Compartilhe</span>
						<a href="#">
							<i class="bi bi-linkedin"></i>
						</a>
						<a href="#">
							<i class="bi bi-instagram"></i>
						</a>
						<a href="#">
							<i class="bi bi-whatsapp"></i>
						</a>
						<a href="#">
							<i class="bi bi-envelope"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="team-filter" class="pb-0">
		<div class="container">
			<div class="row align-items-end team-search-box font-open-sans">
				<div class="col-lg-4">
					<div class="sup-title text-dark-blue orange-graf">
						<p>Veirano na Mídia</p>
					</div>
					<div class="main-title text-dark-blue">
						<h2>Pesquise nossas notícias</h2>
					</div>
				</div>
				<div class="col-lg-8">
					<form action="archive-profissionais.php" class="d-flex form-filters white-background">
						<div class="col-lg">
							<select name="cargo">
								<option selected disabled value="">Ano</option>
							</select>
						</div>
						<div class="col-lg">
							<select name="area">
								<option selected disabled value="">Mês</option>
							</select>
						</div>
						<div class="col-lg">
							<select name="idioma">
								<option selected disabled value="">Área</option>
							</select>
						</div>
						<div class="col-lg">
							<select name="unidade">
								<option selected disabled value="">Profissional</option>
							</select>
						</div>
						<div class="col-lg">
							<input type="text" placeholder="Palavra-chave">
						</div>
						<div class="col-auto d-flex">
							<button class="search text-lightest-gray">
								<i class="bi bi-search"></i>
							</button>
							<a href="#" class="clear text-lightest-gray">
								<i class="bi bi-trash3-fill"></i>
							</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<section id="media-insights">
		<div class="spacer-50"></div>
		<div class="container">
			<div class="row wrapper-tabs">
				<ul class="nav nav-tabs font-open-sans" role="tablist">
					<li class="nav-item" role="presentation">
						<button class="nav-link text-light-gray text-hover-light-blue text-uppercase active" data-bs-toggle="tab" data-bs-target="#tab-1" type="button" role="tab" aria-controls="tab-1" aria-selected="true">Novidades</button>
					</li>
					<li class="nav-item" role="presentation">
						<button class="nav-link text-light-gray text-hover-light-blue text-uppercase" data-bs-toggle="tab" data-bs-target="#tab-2" type="button" role="tab" aria-controls="tab-2" aria-selected="false">Presença na Mídia</button>
					</li>
					<li class="nav-item" role="presentation">
						<button class="nav-link text-light-gray text-hover-light-blue text-uppercase" data-bs-toggle="tab" data-bs-target="#tab-3" type="button" role="tab" aria-controls="tab-3" aria-selected="false">Artigos e Publicações</button>
					</li>
					<li class="nav-item" role="presentation">
						<button class="nav-link text-light-gray text-hover-light-blue text-uppercase" data-bs-toggle="tab" data-bs-target="#tab-4" type="button" role="tab" aria-controls="tab-4" aria-selected="false">Newsletter</button>
					</li>
					<li class="nav-item" role="presentation">
						<button class="nav-link text-light-gray text-hover-light-blue text-uppercase" data-bs-toggle="tab" data-bs-target="#tab-5" type="button" role="tab" aria-controls="tab-5" aria-selected="false">Multimidia</button>
					</li>
					<li class="nav-item" role="presentation">
						<button onclick="window.location.href='archive-midia.php'" class="nav-link text-light-gray text-hover-light-blue text-uppercase">Todos</button>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1" tabindex="0">
						<div class="spacer-30"></div>
						<div class="d-flex flex-wrap wrapper-midia-cards">
							<div class="midia-card col-lg-4 ps-2 pe-2">
								<div class="wrapper-img">
									<a href="single-midia.php">
										<img src="img/placeholder-midia.jpg" alt="" class="img-fluid">
									</a>
								</div>
								<div class="post-content">
									<div class="title">
										<a class="text-dark-blue" href="single-midia.php">Diretriz aprovada no CNPE pode enterrar metade dos projetos de eólicas offshore no Nordeste</a>
									</div>
									<div class="post-info">
										<div class="categories text-light-blue text-uppercase">
											<span>Presença na Mídia</span>
										</div>
										<div class="date text-light-gray">
											<p>07.abr.2026</p>
										</div>
									</div>
									<div class="excerpt text-light-gray">
										<p>Distância mínima obrigatória de 22 km da costa pode inviabilizar projetos de eólicas offshore, de...</p>
									</div>
									<a href="#" class="read-more-btn text-orange text-uppercase"><b>Leia Mais</b></a>
								</div>
							</div>
							<div class="midia-card col-lg-4 ps-2 pe-2">
								<div class="wrapper-img">
									<a href="single-midia.php">
										<img src="img/placeholder-midia.jpg" alt="" class="img-fluid">
									</a>
								</div>
								<div class="post-content">
									<div class="title">
										<a class="text-dark-blue" href="single-midia.php">Diretriz aprovada no CNPE pode enterrar metade dos projetos de eólicas offshore no Nordeste</a>
									</div>
									<div class="post-info">
										<div class="categories text-light-blue text-uppercase">
											<span>Presença na Mídia</span>
										</div>
										<div class="date text-light-gray">
											<p>07.abr.2026</p>
										</div>
									</div>
									<div class="excerpt text-light-gray">
										<p>Distância mínima obrigatória de 22 km da costa pode inviabilizar projetos de eólicas offshore, de...</p>
									</div>
									<a href="#" class="read-more-btn text-orange text-uppercase"><b>Leia Mais</b></a>
								</div>
							</div>
							<div class="midia-card col-lg-4 ps-2 pe-2">
								<div class="wrapper-img">
									<a href="single-midia.php">
										<img src="img/placeholder-midia.jpg" alt="" class="img-fluid">
									</a>
								</div>
								<div class="post-content">
									<div class="title">
										<a class="text-dark-blue" href="single-midia.php">Diretriz aprovada no CNPE pode enterrar metade dos projetos de eólicas offshore no Nordeste</a>
									</div>
									<div class="post-info">
										<div class="categories text-light-blue text-uppercase">
											<span>Presença na Mídia</span>
										</div>
										<div class="date text-light-gray">
											<p>07.abr.2026</p>
										</div>
									</div>
									<div class="excerpt text-light-gray">
										<p>Distância mínima obrigatória de 22 km da costa pode inviabilizar projetos de eólicas offshore, de...</p>
									</div>
									<a href="#" class="read-more-btn text-orange text-uppercase"><b>Leia Mais</b></a>
								</div>
							</div>
							<div class="midia-card col-lg-4 ps-2 pe-2">
								<div class="wrapper-img">
									<a href="single-midia.php">
										<img src="img/placeholder-midia.jpg" alt="" class="img-fluid">
									</a>
								</div>
								<div class="post-content">
									<div class="title">
										<a class="text-dark-blue" href="single-midia.php">Diretriz aprovada no CNPE pode enterrar metade dos projetos de eólicas offshore no Nordeste</a>
									</div>
									<div class="post-info">
										<div class="categories text-light-blue text-uppercase">
											<span>Presença na Mídia</span>
										</div>
										<div class="date text-light-gray">
											<p>07.abr.2026</p>
										</div>
									</div>
									<div class="excerpt text-light-gray">
										<p>Distância mínima obrigatória de 22 km da costa pode inviabilizar projetos de eólicas offshore, de...</p>
									</div>
									<a href="#" class="read-more-btn text-orange text-uppercase"><b>Leia Mais</b></a>
								</div>
							</div>
							<div class="midia-card col-lg-4 ps-2 pe-2">
								<div class="wrapper-img">
									<a href="single-midia.php">
										<img src="img/placeholder-midia.jpg" alt="" class="img-fluid">
									</a>
								</div>
								<div class="post-content">
									<div class="title">
										<a class="text-dark-blue" href="single-midia.php">Diretriz aprovada no CNPE pode enterrar metade dos projetos de eólicas offshore no Nordeste</a>
									</div>
									<div class="post-info">
										<div class="categories text-light-blue text-uppercase">
											<span>Presença na Mídia</span>
										</div>
										<div class="date text-light-gray">
											<p>07.abr.2026</p>
										</div>
									</div>
									<div class="excerpt text-light-gray">
										<p>Distância mínima obrigatória de 22 km da costa pode inviabilizar projetos de eólicas offshore, de...</p>
									</div>
									<a href="#" class="read-more-btn text-orange text-uppercase"><b>Leia Mais</b></a>
								</div>
							</div>
							<div class="midia-card col-lg-4 ps-2 pe-2">
								<div class="wrapper-img">
									<a href="single-midia.php">
										<img src="img/placeholder-midia.jpg" alt="" class="img-fluid">
									</a>
								</div>
								<div class="post-content">
									<div class="title">
										<a class="text-dark-blue" href="single-midia.php">Diretriz aprovada no CNPE pode enterrar metade dos projetos de eólicas offshore no Nordeste</a>
									</div>
									<div class="post-info">
										<div class="categories text-light-blue text-uppercase">
											<span>Presença na Mídia</span>
										</div>
										<div class="date text-light-gray">
											<p>07.abr.2026</p>
										</div>
									</div>
									<div class="excerpt text-light-gray">
										<p>Distância mínima obrigatória de 22 km da costa pode inviabilizar projetos de eólicas offshore, de...</p>
									</div>
									<a href="#" class="read-more-btn text-orange text-uppercase"><b>Leia Mais</b></a>
								</div>
							</div>
						</div>
						<div class="spacer-30"></div>
					</div>
					<div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2" tabindex="0">
						<div class="spacer-30"></div>
						<div class="d-flex flex-wrap wrapper-midia-cards">
							<div class="midia-card col-lg-4 ps-2 pe-2">
								<div class="wrapper-img">
									<a href="single-midia.php">
										<img src="img/placeholder-midia.jpg" alt="" class="img-fluid">
									</a>
								</div>
								<div class="post-content">
									<div class="title">
										<a class="text-dark-blue" href="single-midia.php">Diretriz aprovada no CNPE pode enterrar metade dos projetos de eólicas offshore no Nordeste</a>
									</div>
									<div class="post-info">
										<div class="categories text-light-blue text-uppercase">
											<span>Presença na Mídia</span>
										</div>
										<div class="date text-light-gray">
											<p>07.abr.2026</p>
										</div>
									</div>
									<div class="excerpt text-light-gray">
										<p>Distância mínima obrigatória de 22 km da costa pode inviabilizar projetos de eólicas offshore, de...</p>
									</div>
									<a href="#" class="read-more-btn text-orange text-uppercase"><b>Leia Mais</b></a>
								</div>
							</div>
							<div class="midia-card col-lg-4 ps-2 pe-2">
								<div class="wrapper-img">
									<a href="single-midia.php">
										<img src="img/placeholder-midia.jpg" alt="" class="img-fluid">
									</a>
								</div>
								<div class="post-content">
									<div class="title">
										<a class="text-dark-blue" href="single-midia.php">Diretriz aprovada no CNPE pode enterrar metade dos projetos de eólicas offshore no Nordeste</a>
									</div>
									<div class="post-info">
										<div class="categories text-light-blue text-uppercase">
											<span>Presença na Mídia</span>
										</div>
										<div class="date text-light-gray">
											<p>07.abr.2026</p>
										</div>
									</div>
									<div class="excerpt text-light-gray">
										<p>Distância mínima obrigatória de 22 km da costa pode inviabilizar projetos de eólicas offshore, de...</p>
									</div>
									<a href="#" class="read-more-btn text-orange text-uppercase"><b>Leia Mais</b></a>
								</div>
							</div>
							<div class="midia-card col-lg-4 ps-2 pe-2">
								<div class="wrapper-img">
									<a href="single-midia.php">
										<img src="img/placeholder-midia.jpg" alt="" class="img-fluid">
									</a>
								</div>
								<div class="post-content">
									<div class="title">
										<a class="text-dark-blue" href="single-midia.php">Diretriz aprovada no CNPE pode enterrar metade dos projetos de eólicas offshore no Nordeste</a>
									</div>
									<div class="post-info">
										<div class="categories text-light-blue text-uppercase">
											<span>Presença na Mídia</span>
										</div>
										<div class="date text-light-gray">
											<p>07.abr.2026</p>
										</div>
									</div>
									<div class="excerpt text-light-gray">
										<p>Distância mínima obrigatória de 22 km da costa pode inviabilizar projetos de eólicas offshore, de...</p>
									</div>
									<a href="#" class="read-more-btn text-orange text-uppercase"><b>Leia Mais</b></a>
								</div>
							</div>
							<div class="midia-card col-lg-4 ps-2 pe-2">
								<div class="wrapper-img">
									<a href="single-midia.php">
										<img src="img/placeholder-midia.jpg" alt="" class="img-fluid">
									</a>
								</div>
								<div class="post-content">
									<div class="title">
										<a class="text-dark-blue" href="single-midia.php">Diretriz aprovada no CNPE pode enterrar metade dos projetos de eólicas offshore no Nordeste</a>
									</div>
									<div class="post-info">
										<div class="categories text-light-blue text-uppercase">
											<span>Presença na Mídia</span>
										</div>
										<div class="date text-light-gray">
											<p>07.abr.2026</p>
										</div>
									</div>
									<div class="excerpt text-light-gray">
										<p>Distância mínima obrigatória de 22 km da costa pode inviabilizar projetos de eólicas offshore, de...</p>
									</div>
									<a href="#" class="read-more-btn text-orange text-uppercase"><b>Leia Mais</b></a>
								</div>
							</div>
							<div class="midia-card col-lg-4 ps-2 pe-2">
								<div class="wrapper-img">
									<a href="single-midia.php">
										<img src="img/placeholder-midia.jpg" alt="" class="img-fluid">
									</a>
								</div>
								<div class="post-content">
									<div class="title">
										<a class="text-dark-blue" href="single-midia.php">Diretriz aprovada no CNPE pode enterrar metade dos projetos de eólicas offshore no Nordeste</a>
									</div>
									<div class="post-info">
										<div class="categories text-light-blue text-uppercase">
											<span>Presença na Mídia</span>
										</div>
										<div class="date text-light-gray">
											<p>07.abr.2026</p>
										</div>
									</div>
									<div class="excerpt text-light-gray">
										<p>Distância mínima obrigatória de 22 km da costa pode inviabilizar projetos de eólicas offshore, de...</p>
									</div>
									<a href="#" class="read-more-btn text-orange text-uppercase"><b>Leia Mais</b></a>
								</div>
							</div>
							<div class="midia-card col-lg-4 ps-2 pe-2">
								<div class="wrapper-img">
									<a href="single-midia.php">
										<img src="img/placeholder-midia.jpg" alt="" class="img-fluid">
									</a>
								</div>
								<div class="post-content">
									<div class="title">
										<a class="text-dark-blue" href="single-midia.php">Diretriz aprovada no CNPE pode enterrar metade dos projetos de eólicas offshore no Nordeste</a>
									</div>
									<div class="post-info">
										<div class="categories text-light-blue text-uppercase">
											<span>Presença na Mídia</span>
										</div>
										<div class="date text-light-gray">
											<p>07.abr.2026</p>
										</div>
									</div>
									<div class="excerpt text-light-gray">
										<p>Distância mínima obrigatória de 22 km da costa pode inviabilizar projetos de eólicas offshore, de...</p>
									</div>
									<a href="#" class="read-more-btn text-orange text-uppercase"><b>Leia Mais</b></a>
								</div>
							</div>
						</div>
						<div class="spacer-30"></div>
					</div>
					<div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab-3" tabindex="0">
						<div class="spacer-30"></div>
						<div class="d-flex flex-wrap wrapper-midia-cards">
							<div class="midia-card col-lg-4 ps-2 pe-2">
								<div class="wrapper-img">
									<a href="#">
										<img src="img/placeholder-midia.jpg" alt="" class="img-fluid">
									</a>
								</div>
								<div class="post-content">
									<div class="title">
										<a class="text-dark-blue" href="#">Diretriz aprovada no CNPE pode enterrar metade dos projetos de eólicas offshore no Nordeste</a>
									</div>
									<div class="post-info">
										<div class="categories text-light-blue text-uppercase">
											<span>Presença na Mídia</span>
										</div>
										<div class="date text-light-gray">
											<p>07.abr.2026</p>
										</div>
									</div>
									<div class="excerpt text-light-gray">
										<p>Distância mínima obrigatória de 22 km da costa pode inviabilizar projetos de eólicas offshore, de...</p>
									</div>
									<a href="#" class="read-more-btn text-orange text-uppercase"><b>Leia Mais</b></a>
								</div>
							</div>
							<div class="midia-card col-lg-4 ps-2 pe-2">
								<div class="wrapper-img">
									<a href="#">
										<img src="img/placeholder-midia.jpg" alt="" class="img-fluid">
									</a>
								</div>
								<div class="post-content">
									<div class="title">
										<a class="text-dark-blue" href="#">Diretriz aprovada no CNPE pode enterrar metade dos projetos de eólicas offshore no Nordeste</a>
									</div>
									<div class="post-info">
										<div class="categories text-light-blue text-uppercase">
											<span>Presença na Mídia</span>
										</div>
										<div class="date text-light-gray">
											<p>07.abr.2026</p>
										</div>
									</div>
									<div class="excerpt text-light-gray">
										<p>Distância mínima obrigatória de 22 km da costa pode inviabilizar projetos de eólicas offshore, de...</p>
									</div>
									<a href="#" class="read-more-btn text-orange text-uppercase"><b>Leia Mais</b></a>
								</div>
							</div>
							<div class="midia-card col-lg-4 ps-2 pe-2">
								<div class="wrapper-img">
									<a href="#">
										<img src="img/placeholder-midia.jpg" alt="" class="img-fluid">
									</a>
								</div>
								<div class="post-content">
									<div class="title">
										<a class="text-dark-blue" href="#">Diretriz aprovada no CNPE pode enterrar metade dos projetos de eólicas offshore no Nordeste</a>
									</div>
									<div class="post-info">
										<div class="categories text-light-blue text-uppercase">
											<span>Presença na Mídia</span>
										</div>
										<div class="date text-light-gray">
											<p>07.abr.2026</p>
										</div>
									</div>
									<div class="excerpt text-light-gray">
										<p>Distância mínima obrigatória de 22 km da costa pode inviabilizar projetos de eólicas offshore, de...</p>
									</div>
									<a href="#" class="read-more-btn text-orange text-uppercase"><b>Leia Mais</b></a>
								</div>
							</div>
							<div class="midia-card col-lg-4 ps-2 pe-2">
								<div class="wrapper-img">
									<a href="#">
										<img src="img/placeholder-midia.jpg" alt="" class="img-fluid">
									</a>
								</div>
								<div class="post-content">
									<div class="title">
										<a class="text-dark-blue" href="#">Diretriz aprovada no CNPE pode enterrar metade dos projetos de eólicas offshore no Nordeste</a>
									</div>
									<div class="post-info">
										<div class="categories text-light-blue text-uppercase">
											<span>Presença na Mídia</span>
										</div>
										<div class="date text-light-gray">
											<p>07.abr.2026</p>
										</div>
									</div>
									<div class="excerpt text-light-gray">
										<p>Distância mínima obrigatória de 22 km da costa pode inviabilizar projetos de eólicas offshore, de...</p>
									</div>
									<a href="#" class="read-more-btn text-orange text-uppercase"><b>Leia Mais</b></a>
								</div>
							</div>
							<div class="midia-card col-lg-4 ps-2 pe-2">
								<div class="wrapper-img">
									<a href="#">
										<img src="img/placeholder-midia.jpg" alt="" class="img-fluid">
									</a>
								</div>
								<div class="post-content">
									<div class="title">
										<a class="text-dark-blue" href="#">Diretriz aprovada no CNPE pode enterrar metade dos projetos de eólicas offshore no Nordeste</a>
									</div>
									<div class="post-info">
										<div class="categories text-light-blue text-uppercase">
											<span>Presença na Mídia</span>
										</div>
										<div class="date text-light-gray">
											<p>07.abr.2026</p>
										</div>
									</div>
									<div class="excerpt text-light-gray">
										<p>Distância mínima obrigatória de 22 km da costa pode inviabilizar projetos de eólicas offshore, de...</p>
									</div>
									<a href="#" class="read-more-btn text-orange text-uppercase"><b>Leia Mais</b></a>
								</div>
							</div>
							<div class="midia-card col-lg-4 ps-2 pe-2">
								<div class="wrapper-img">
									<a href="#">
										<img src="img/placeholder-midia.jpg" alt="" class="img-fluid">
									</a>
								</div>
								<div class="post-content">
									<div class="title">
										<a class="text-dark-blue" href="#">Diretriz aprovada no CNPE pode enterrar metade dos projetos de eólicas offshore no Nordeste</a>
									</div>
									<div class="post-info">
										<div class="categories text-light-blue text-uppercase">
											<span>Presença na Mídia</span>
										</div>
										<div class="date text-light-gray">
											<p>07.abr.2026</p>
										</div>
									</div>
									<div class="excerpt text-light-gray">
										<p>Distância mínima obrigatória de 22 km da costa pode inviabilizar projetos de eólicas offshore, de...</p>
									</div>
									<a href="#" class="read-more-btn text-orange text-uppercase"><b>Leia Mais</b></a>
								</div>
							</div>
						</div>
						<div class="spacer-30"></div>
					</div>
					<div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="tab-4" tabindex="0">
						<div class="spacer-30"></div>
						<div class="d-flex flex-wrap wrapper-midia-cards">
							<div class="midia-card col-lg-4 ps-2 pe-2">
								<div class="wrapper-img">
									<a href="#">
										<img src="img/placeholder-midia.jpg" alt="" class="img-fluid">
									</a>
								</div>
								<div class="post-content">
									<div class="title">
										<a class="text-dark-blue" href="#">Diretriz aprovada no CNPE pode enterrar metade dos projetos de eólicas offshore no Nordeste</a>
									</div>
									<div class="post-info">
										<div class="categories text-light-blue text-uppercase">
											<span>Presença na Mídia</span>
										</div>
										<div class="date text-light-gray">
											<p>07.abr.2026</p>
										</div>
									</div>
									<div class="excerpt text-light-gray">
										<p>Distância mínima obrigatória de 22 km da costa pode inviabilizar projetos de eólicas offshore, de...</p>
									</div>
									<a href="#" class="read-more-btn text-orange text-uppercase"><b>Leia Mais</b></a>
								</div>
							</div>
							<div class="midia-card col-lg-4 ps-2 pe-2">
								<div class="wrapper-img">
									<a href="#">
										<img src="img/placeholder-midia.jpg" alt="" class="img-fluid">
									</a>
								</div>
								<div class="post-content">
									<div class="title">
										<a class="text-dark-blue" href="#">Diretriz aprovada no CNPE pode enterrar metade dos projetos de eólicas offshore no Nordeste</a>
									</div>
									<div class="post-info">
										<div class="categories text-light-blue text-uppercase">
											<span>Presença na Mídia</span>
										</div>
										<div class="date text-light-gray">
											<p>07.abr.2026</p>
										</div>
									</div>
									<div class="excerpt text-light-gray">
										<p>Distância mínima obrigatória de 22 km da costa pode inviabilizar projetos de eólicas offshore, de...</p>
									</div>
									<a href="#" class="read-more-btn text-orange text-uppercase"><b>Leia Mais</b></a>
								</div>
							</div>
							<div class="midia-card col-lg-4 ps-2 pe-2">
								<div class="wrapper-img">
									<a href="#">
										<img src="img/placeholder-midia.jpg" alt="" class="img-fluid">
									</a>
								</div>
								<div class="post-content">
									<div class="title">
										<a class="text-dark-blue" href="#">Diretriz aprovada no CNPE pode enterrar metade dos projetos de eólicas offshore no Nordeste</a>
									</div>
									<div class="post-info">
										<div class="categories text-light-blue text-uppercase">
											<span>Presença na Mídia</span>
										</div>
										<div class="date text-light-gray">
											<p>07.abr.2026</p>
										</div>
									</div>
									<div class="excerpt text-light-gray">
										<p>Distância mínima obrigatória de 22 km da costa pode inviabilizar projetos de eólicas offshore, de...</p>
									</div>
									<a href="#" class="read-more-btn text-orange text-uppercase"><b>Leia Mais</b></a>
								</div>
							</div>
							<div class="midia-card col-lg-4 ps-2 pe-2">
								<div class="wrapper-img">
									<a href="#">
										<img src="img/placeholder-midia.jpg" alt="" class="img-fluid">
									</a>
								</div>
								<div class="post-content">
									<div class="title">
										<a class="text-dark-blue" href="#">Diretriz aprovada no CNPE pode enterrar metade dos projetos de eólicas offshore no Nordeste</a>
									</div>
									<div class="post-info">
										<div class="categories text-light-blue text-uppercase">
											<span>Presença na Mídia</span>
										</div>
										<div class="date text-light-gray">
											<p>07.abr.2026</p>
										</div>
									</div>
									<div class="excerpt text-light-gray">
										<p>Distância mínima obrigatória de 22 km da costa pode inviabilizar projetos de eólicas offshore, de...</p>
									</div>
									<a href="#" class="read-more-btn text-orange text-uppercase"><b>Leia Mais</b></a>
								</div>
							</div>
							<div class="midia-card col-lg-4 ps-2 pe-2">
								<div class="wrapper-img">
									<a href="#">
										<img src="img/placeholder-midia.jpg" alt="" class="img-fluid">
									</a>
								</div>
								<div class="post-content">
									<div class="title">
										<a class="text-dark-blue" href="#">Diretriz aprovada no CNPE pode enterrar metade dos projetos de eólicas offshore no Nordeste</a>
									</div>
									<div class="post-info">
										<div class="categories text-light-blue text-uppercase">
											<span>Presença na Mídia</span>
										</div>
										<div class="date text-light-gray">
											<p>07.abr.2026</p>
										</div>
									</div>
									<div class="excerpt text-light-gray">
										<p>Distância mínima obrigatória de 22 km da costa pode inviabilizar projetos de eólicas offshore, de...</p>
									</div>
									<a href="#" class="read-more-btn text-orange text-uppercase"><b>Leia Mais</b></a>
								</div>
							</div>
							<div class="midia-card col-lg-4 ps-2 pe-2">
								<div class="wrapper-img">
									<a href="#">
										<img src="img/placeholder-midia.jpg" alt="" class="img-fluid">
									</a>
								</div>
								<div class="post-content">
									<div class="title">
										<a class="text-dark-blue" href="#">Diretriz aprovada no CNPE pode enterrar metade dos projetos de eólicas offshore no Nordeste</a>
									</div>
									<div class="post-info">
										<div class="categories text-light-blue text-uppercase">
											<span>Presença na Mídia</span>
										</div>
										<div class="date text-light-gray">
											<p>07.abr.2026</p>
										</div>
									</div>
									<div class="excerpt text-light-gray">
										<p>Distância mínima obrigatória de 22 km da costa pode inviabilizar projetos de eólicas offshore, de...</p>
									</div>
									<a href="#" class="read-more-btn text-orange text-uppercase"><b>Leia Mais</b></a>
								</div>
							</div>
						</div>
						<div class="spacer-30"></div>
					</div>
					<div class="tab-pane fade" id="tab-5" role="tabpanel" aria-labelledby="tab-5" tabindex="0">
						<div class="spacer-30"></div>
						<div class="d-flex flex-wrap wrapper-midia-cards">
							<div class="midia-card col-lg-4 ps-2 pe-2">
								<div class="wrapper-img">
									<a href="#">
										<img src="img/placeholder-midia.jpg" alt="" class="img-fluid">
									</a>
								</div>
								<div class="post-content">
									<div class="title">
										<a class="text-dark-blue" href="#">Diretriz aprovada no CNPE pode enterrar metade dos projetos de eólicas offshore no Nordeste</a>
									</div>
									<div class="post-info">
										<div class="categories text-light-blue text-uppercase">
											<span>Presença na Mídia</span>
										</div>
										<div class="date text-light-gray">
											<p>07.abr.2026</p>
										</div>
									</div>
									<div class="excerpt text-light-gray">
										<p>Distância mínima obrigatória de 22 km da costa pode inviabilizar projetos de eólicas offshore, de...</p>
									</div>
									<a href="#" class="read-more-btn text-orange text-uppercase"><b>Leia Mais</b></a>
								</div>
							</div>
							<div class="midia-card col-lg-4 ps-2 pe-2">
								<div class="wrapper-img">
									<a href="#">
										<img src="img/placeholder-midia.jpg" alt="" class="img-fluid">
									</a>
								</div>
								<div class="post-content">
									<div class="title">
										<a class="text-dark-blue" href="#">Diretriz aprovada no CNPE pode enterrar metade dos projetos de eólicas offshore no Nordeste</a>
									</div>
									<div class="post-info">
										<div class="categories text-light-blue text-uppercase">
											<span>Presença na Mídia</span>
										</div>
										<div class="date text-light-gray">
											<p>07.abr.2026</p>
										</div>
									</div>
									<div class="excerpt text-light-gray">
										<p>Distância mínima obrigatória de 22 km da costa pode inviabilizar projetos de eólicas offshore, de...</p>
									</div>
									<a href="#" class="read-more-btn text-orange text-uppercase"><b>Leia Mais</b></a>
								</div>
							</div>
							<div class="midia-card col-lg-4 ps-2 pe-2">
								<div class="wrapper-img">
									<a href="#">
										<img src="img/placeholder-midia.jpg" alt="" class="img-fluid">
									</a>
								</div>
								<div class="post-content">
									<div class="title">
										<a class="text-dark-blue" href="#">Diretriz aprovada no CNPE pode enterrar metade dos projetos de eólicas offshore no Nordeste</a>
									</div>
									<div class="post-info">
										<div class="categories text-light-blue text-uppercase">
											<span>Presença na Mídia</span>
										</div>
										<div class="date text-light-gray">
											<p>07.abr.2026</p>
										</div>
									</div>
									<div class="excerpt text-light-gray">
										<p>Distância mínima obrigatória de 22 km da costa pode inviabilizar projetos de eólicas offshore, de...</p>
									</div>
									<a href="#" class="read-more-btn text-orange text-uppercase"><b>Leia Mais</b></a>
								</div>
							</div>
							<div class="midia-card col-lg-4 ps-2 pe-2">
								<div class="wrapper-img">
									<a href="#">
										<img src="img/placeholder-midia.jpg" alt="" class="img-fluid">
									</a>
								</div>
								<div class="post-content">
									<div class="title">
										<a class="text-dark-blue" href="#">Diretriz aprovada no CNPE pode enterrar metade dos projetos de eólicas offshore no Nordeste</a>
									</div>
									<div class="post-info">
										<div class="categories text-light-blue text-uppercase">
											<span>Presença na Mídia</span>
										</div>
										<div class="date text-light-gray">
											<p>07.abr.2026</p>
										</div>
									</div>
									<div class="excerpt text-light-gray">
										<p>Distância mínima obrigatória de 22 km da costa pode inviabilizar projetos de eólicas offshore, de...</p>
									</div>
									<a href="#" class="read-more-btn text-orange text-uppercase"><b>Leia Mais</b></a>
								</div>
							</div>
							<div class="midia-card col-lg-4 ps-2 pe-2">
								<div class="wrapper-img">
									<a href="#">
										<img src="img/placeholder-midia.jpg" alt="" class="img-fluid">
									</a>
								</div>
								<div class="post-content">
									<div class="title">
										<a class="text-dark-blue" href="#">Diretriz aprovada no CNPE pode enterrar metade dos projetos de eólicas offshore no Nordeste</a>
									</div>
									<div class="post-info">
										<div class="categories text-light-blue text-uppercase">
											<span>Presença na Mídia</span>
										</div>
										<div class="date text-light-gray">
											<p>07.abr.2026</p>
										</div>
									</div>
									<div class="excerpt text-light-gray">
										<p>Distância mínima obrigatória de 22 km da costa pode inviabilizar projetos de eólicas offshore, de...</p>
									</div>
									<a href="#" class="read-more-btn text-orange text-uppercase"><b>Leia Mais</b></a>
								</div>
							</div>
							<div class="midia-card col-lg-4 ps-2 pe-2">
								<div class="wrapper-img">
									<a href="#">
										<img src="img/placeholder-midia.jpg" alt="" class="img-fluid">
									</a>
								</div>
								<div class="post-content">
									<div class="title">
										<a class="text-dark-blue" href="#">Diretriz aprovada no CNPE pode enterrar metade dos projetos de eólicas offshore no Nordeste</a>
									</div>
									<div class="post-info">
										<div class="categories text-light-blue text-uppercase">
											<span>Presença na Mídia</span>
										</div>
										<div class="date text-light-gray">
											<p>07.abr.2026</p>
										</div>
									</div>
									<div class="excerpt text-light-gray">
										<p>Distância mínima obrigatória de 22 km da costa pode inviabilizar projetos de eólicas offshore, de...</p>
									</div>
									<a href="#" class="read-more-btn text-orange text-uppercase"><b>Leia Mais</b></a>
								</div>
							</div>
						</div>
						<div class="spacer-30"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="spacer-50"></div>
	</section>
<?php include('footer.php'); ?>