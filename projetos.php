<?php 
	$texto_dreamtech = "<p><strong>Ano: </strong>2013<br><strong>Onde: </strong>Meu quarto<br><strong>Duração: </strong>Ainda acontecendo<br><strong>Descrição: </strong>A Dreamtech é uma tentativa de realizar meu sonho de ter meu próprio negócio. A Dreamtech começou com o intuito de ser uma empresa de desenvolvimento de software, mas com o passar do tempo acabamos entrando no ramo de webdesign e desenvolvimento web e agora estamos cada vez mais nos aproximando do mundo do marketing. É muito trabalho para pouco retorno financeiro às vezes, mas acredito que nunca aprenderia o tanto que estou aprendendo em qualquer estágio.</p>";

	$texto_gestech = "<p><strong>Ano: </strong>2013<br><strong>Onde: </strong>EUA<br><strong>Duração: </strong>5 meses<br><strong>Descrição: </strong>O Gestech foi o projeto que acabou dando vida à Dreamtech. O Gestech era um sistema de gestão para pequenas empresas da área da construção civil. O Gestech foi desenvolvido em JSF com um banco de dados MySql e foi o primeiro software que desenvolvi do inicio ao fim. Ele não teve presseguimento por causa da falta de investimento, mas o tempo que ele durou foi o suficiente para me mostrar quão difícil é criar um software robusto.</p>";

	$texto_iniciacao = "<p><strong>Ano: </strong>2012<br><strong>Onde: </strong>CEFET-MG<br><strong>Duração: </strong>4 meses<br><strong>Descrição: </strong>Meu primeiro e único projeto de iniciação cientifica. Foi coordenado pelos professores Rogério Gomes e Jefferson Figueiredo e o assunto era Redes Neurais Embarcadas em FPGA. Não avancei no projeto pois acabei conseguindo uma bolsa de intercâmbio e tive que abandonar a iniciação. Aprende muito sobre como utilizar o método científico na prática e às difículdades em conseguir estimulo do governo para projetos de pesquisa no Brasil.</p>";

	$texto_monitoria = "<p><strong>Ano: </strong>2011<br><strong>Onde: </strong>CEFET-MG<br><strong>Duração: </strong>6 meses<br><strong>Descrição: </strong>No terceiro período de faculdade fui monitor de Programação de Computadores II para as turmas de Engenharia Elétrica e Administração do CEFET-MG. A experiencia foi super interessante pois esses são cursos onde, normalmente, as pessoas não são boas em programação então foi um desafio estimular os alunos a aprenderem.</p>";
?>
<section id="div-projetos">

	<div>
		<h2>Meus Projetos</h2>

		<div id="dt_carousel" class="carousel slide dt_carousel">
				<div class="carousel-inner dt_carousel_inner">
					<div class="dt_carousel_item item active">
						<a href="<?php echo $site_url?>/images/draemtechpng.png" data-toggle="lightbox" data-gallery="multiimages-home" data-title="Dreamtech" data-type="image" data-link="" data-text="<?php echo $texto_dreamtech ?>">
							<img class="img-responsive" src="<?php echo $site_url?>/images/draemtechpng.png" alt="Banner 1">
						</a>
					</div>

					<div class="dt_carousel_item item">
						<a href="<?php echo $site_url?>/images/gestech.png" data-toggle="lightbox" data-gallery="multiimages-home" data-title="Gestech" data-type="image" data-link="" data-text="<?php echo $texto_gestech ?>">
							<img class="img-responsive" src="<?php echo $site_url?>/images/gestech.png" alt="Banner 2">
						</a>
					</div>

					<div class="dt_carousel_item item">
						<a href="<?php echo $site_url?>/images/iniciacao.png" data-toggle="lightbox" data-gallery="multiimages-home" data-title="Iniciação Cientifica" data-type="image" data-link="" data-text="<?php echo $texto_iniciacao ?>">
							<img class="img-responsive" src="<?php echo $site_url?>/images/iniciacao.png" alt="Banner 3">
						</a>
					</div>

					<div class="dt_carousel_item item">
						<a href="<?php echo $site_url?>/images/monitoria.png" data-toggle="lightbox" data-gallery="multiimages-home" data-title="Monitoria de PC II" data-type="image" data-link="" data-text="<?php echo $texto_monitoria ?>">
							<img class="img-responsive" src="<?php echo $site_url?>/images/monitoria.png" alt="Banner 3">
						</a>
					</div>
				</div>
				<a href="#dt_carousel" class="left carousel-control  dt_carousel_control dt_carousel_controle_left" data-slide="prev"><img alt="Carousel Dreamtech Left Arrow" src="<?php echo $site_url?>/images/arrow_left.png"></a>

				<a href="#dt_carousel" class="right carousel-control  dt_carousel_control dt_carousel_controle_right" data-slide="next"><img alt="Carousel Dreamtech Right Arrow" src="<?php echo $site_url?>/images/arrow_right.png"></a>
		</div>
	</div>

</section>