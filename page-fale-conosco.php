<?php include('header.php'); ?>
    <section style="background-image: url(img/featured-midia.jpg);" id="featured-page">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-title font-merriweather text-white">
                        <h1>
                            <img src="img/icon-page-title.svg" alt="" class="img-fluid">
                            <span>Contato</span>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="breadcrumbs" class="bg-most-lightest-gray font-open-sans">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-9">
					<div class="bradcrumb">
						<span>Você está em ></span>
						<a href="index.php"><b>Home</b></a>
						<span>></span>
						<span class="current">Fale Conosco</span>
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
    <section id="contact-page">
        <div class="spacer-60"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="contact-info">
                        <h1 class="title font-merriweather text-dark-blue">Fale Conosco</h1>
                        <div class="contact-box-text">
                            <p class="font-open-sans text-light-blue">Fique à vontade para nos contatar a qualquer momento através de nosso formulário de contato. Estamos ansiosos para ouvi-lo(a).</p>
                        </div>
                        <div class="contact-box-descricao font-open-sans text-light-gray">
                            <p>Você precisa ter pelo menos 18 anos para criar uma conta e para que possamos responder à sua solicitação.</p>
                            <p>O Veirano usará seus Dados Pessoais para gerenciar sua solicitação, entrar em contato com você e para realização de análise de mercado. Para mais informações sobre como tratamos seus Dados Pessoais, consulte nossa <a href="#"><span class="text-dark-blue">política de privacidade.</span></a></p>
                            <p>O uso deste site é regido pelos nossos <a href="#"><span class="text-dark-blue">termos de uso.</span></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <form class="contact-form">
                        <div class="form-group mb-3">
                            <input type="text" class="form-control custom-input font-open-sans" placeholder="Nome*">
                        </div>
                        <div class="form-group mb-3">
                            <input type="email" class="form-control custom-input font-open-sans" placeholder="E-mail*">
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input type="tel" class="form-control custom-input font-open-sans" placeholder="Telefone">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control custom-input font-open-sans" placeholder="Cargo">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" class="form-control custom-input font-open-sans" placeholder="Empresa">
                        </div>
                        <div class="form-group mb-3">
                            <select class="form-control custom-input custom-select font-open-sans">
                                <option value="" disabled selected hidden>Assunto*</option>
                                <option value="duvida">Cibercrimes (VA Response)</option>
                                <option value="imprensa">Contato com depto. financeiro</option>
                                <option value="outros">Contato geral</option>
                                <option value="outros">COVID-19 (Coronavírus)</option>
                                <option value="outros">Envio de curriculo</option>
                                <option value="outros">Oportunidades</option>
                                <option value="outros">Outros assuntos</option>
                                <option value="outros">Prazos e assuntos de propriedade intelectual</option>
                                <option value="outros">Serviços jurídicos</option>
                            </select>
                        </div>
                        <div class="form-group mb-4">
                            <textarea class="form-control custom-input font-open-sans" placeholder="Mensagem*" rows="6"></textarea>
                        </div>
                    </form>
                </div>
            </div>
            <div class="spacer-60"></div>
        </div>
    </section>
<?php include('footer.php'); ?>