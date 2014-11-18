<?php require_once 'header.php';?>

<section id="div-inicio" class="div-inicio">

	<div class="row">
		<div class="col-lg-9 col-md-9 col-sm-7 col-xs-12 qse">
			<h2>Quem sou eu?</h2>

			<div class="col-lg-5 col-md-9 col-sm-7 col-xs-12">
				<p>
					<strong>Nome: </strong>Pedro Colen Cardoso<br>
					<strong>Idade: </strong>22anos<br>
					<strong>Altura: </strong>1,73m<br>
					<strong>Peso: </strong>68kg<br>
					<br>
					<strong>Um pouco sobre mim: </strong>Sou aluno do CEFET-MG e estudo Engenharia da Computação. Apesar de todo esteriótipo existente com pessoas da minha área não sou um nerd total. Gosto muito de praticar esportes e de socializar no mundo real. Já tive minha fase de ficar 22h por dia no computador, mas hoje em dia o computador é apenas um ferramenta de trabalho. Vejo a vida como um grande desafio que temos que enfrentar, mas que no final sempre vamos ser recompensados.
				</p>
			</div>

			<div class="col-lg-2 col-md-9 col-sm-7 col-xs-12">
				<img class="img-responsive foto" src="<?php echo $site_url?>/images/foto-index.png" >
			</div>

			<div class="col-lg-5 col-md-9 col-sm-7 col-xs-12">
				<p>
					<strong>Filme favorito: </strong>Difícil dizer. Filmes são provavelmente meu passatempo favorito e costumo e ter um filme favórito por semana. Mas o filme que assisti mais vezes na vida foi "Peaceful Warrior".<br>
					<strong>Livro favorito: </strong>Até dois anos atrás eu não gostava de ler, por isso li pouquissimos livros na minha vida. Em compensação nos ultimos dois anos e meio li mais ou menos 40 livros e tenho muito orgulho disso. Meu livro favorito é com certeza "The Name of the Wind".<br>
					<strong>O que mais gosta de fazer: </strong>Como já disse ver filme e ler são grande hobbies para mim, mas acho que sempre fui mais ligado a esportes do que qualquer outra coisa. Toda minha vida pratiquei esporte e a cada fase da minha vida pratico um esporte diferente. Nos ultimos anos tenho praticado escalada e não pretendo parar tão cedo.
				</p>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-5 col-xs-12 links">
			<h3>Você não pode deixar de visitar</h3>
			<p>Aqui vou compartilhar com vocês alguns sites que gosto muito e acredito que podem acrescentar algo a vida de qualquer pessoa.</p>

			<a href="" target="_blank">http://pplware.sapo.pt/</a>
			<a href="" target="_blank">http://googlediscovery.com/</a>
			<a href="" target="_blank">http://www.thebrocode.com.br/</a>
			<a href="" target="_blank">http://www.imdb.com.br/</a>
			<a href="" target="_blank">http://101books.net/</a>
			<a href="" target="_blank">http://www.loveandlemons.com/</a>
		</div>

	</div>
</section>

<div class="like_bottuns">
	<div class='share'>
		<div class="fb"><div class="fb-like" data-href="<?php echo $site_url?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div></div>
		<g:plusone></g:plusone>
		<div class="twitter"><a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo $site_url?>" data-text="Pedro Colen" data-lang="pt">Tweet</a></div>
	</div>
</div>

<?php require_once 'projetos.php';?>
<?php require_once 'curriculo.php';?>
<?php require_once 'contato.php';?>

<?php require_once 'footer.php';?>