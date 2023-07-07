<?php /* Template Name: Materias */ ?>

<?php get_header('header.php'); ?>
<?php include_once('menu-login.php'); ?>
           
		<nav class="select_filhos_inline">
			<ul>
				<li><span class="wrap_nome">Olá, Joana</span></li>
				<li class="button">
					<span class="icone_sexo fem"></span><span class="nome">Bruna</span><span class="icon_seta" ></span>
				</li>
				<nav class="filhos_inline">
					<ul>
						<li><span class="icone_sexo masc"></span><span class="nome">Rafael</span></li>
						<li><span class="icone_sexo nda"></span><span class="nome">Qual é o nome?</span></li>
					</ul>
				</nav>
			</ul>
		</nav>

        <section class="abertura height175 margin100 margintop">
  
            <div class="container_image recem_nascido"></div>
            <div class="wrap_infos_abertura">
            	<img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-recem-nascido-interna.svg" class="icon_fase" title="fase">
            	<h2>Recém-nascido</h2>
            	<h3>Semana 02</h3>
            </div>
            
        </section>

        <section class="interna materias">        
            <article>
                     <div class="content">
                         <h4>Como evitar as dores na hora de amamentar?</h4>
                         <p class="destaque_inicial">
                         	Veja como evitar problemas durante a amamentação para curtir esse momento junto como seu filho.
                         </p>
                         <img src="<?php echo get_template_directory_uri(); ?>/img/materias/amamentacao.jpg" title="Amamentação">
                         <p>
                            Nós sabemos que, além da importância nutricional para o desenvolvimento do bebê, a amamentação é uma das fases mais bonitas da relação entre mãe e filho. Mas, para que esse momento tão especial não seja prejudicado por dores ou incômodos, alguns cuidados são necessários. Preparamos uma pequena lista com dicas que podem ser colocadas em prática logo nas primeiras semanas de vida do bebê. <strong>Confira:</strong>
						</p>
						<p>
							<strong>Não fique muitas horas sem amamentar:</strong><br/>
							A produção de leite nos seios da mãe aumenta com o passar dos dias. Isso acontece porque o corpo materno se prepara para atender às necessidades da criança, que está crescendo mais a cada dia. Pesquisas indicam que os seios produzem, aproximadamente, 60ml a 80ml a cada 3 horas. Por isso, caso você fique mais de 4 horas sem amamentar, procure fazer uma ordenha manual ou com uma bomba antes de oferecer o seio ao bebê. Isso ajudará a evitar dores.
						</p>
						<p>				
							<strong>Evite que os mamilos fiquem úmidos:</strong><br/>
							A higiene dos seios também é muito importante nessa fase. As mamas devem ser lavadas diariamente, com cuidado para manter o bico dos seios sempre secos. Com isso, você previne o aparecimento de rachaduras.
						</p>
						<p>	
							<strong>Relaxe antes da amamentação:</strong><br/>
							Descansar e fugir de preocupações é a melhor forma de desfrutar deste momento com o seu filho. Tente repousar alguns minutos antes de amamentar para que a experiência seja mais tranquila e proveitosa para vocês dois.
						</p>
						<p>
							E lembre-se! O leite materno é muito importante para o desenvolvimento do bebê. A Organização Mundial de Saúde (OMS) recomenda que ele seja o alimento exclusivo dele até os 6 meses de vida, podendo ir até os 2 anos ou mais como alimento complementar.
						</p>
                     </div>
            </article>
        </section>

        <section class="bibliografia_fontes">
        	<div class="content">
        		<div class="bibliografia_fontes">
        			<div class="bibliografia">
        				<span>Bibliografia/Fonte</span>
        				<ul>
        					<li>
        						Lamare R. A vida do bebê. Ed Harper Colins. 2014; 43° edMATERIA V2.
        					</li>
        				</ul>

        			</div>

        		</div>
        	</div>
        </section>

        <section class="comentarios limit_footer">
        	<article>
        		<div class="content">

        			<div class="wrap_publicacao">

        				<div class="botoes">
        					<button class="like">
        						<!-- LOADER -->
        						<div class="loader loader20 small"><span class="container_loader"></span></div>
        						<!-- <span class="icon"></span><span class="text">54</span> -->
        					</button>
        					<button class="dislike">
        						<!-- LOADER -->
        						<div class="loader loader20 small"><span class="container_loader"></span></div>
        						<!-- <span class="icon"></span><span class="text">1</span></button> -->
        					<button class="comment" disabled><span class="icon"></span><span class="mask"></span>
        					</button>
        					<button class="share"><span class="icon"></span></button>
        				</div>

        				<form action="" method="POST" accept-charset="utf-8">
        					<div class="test"></div>
        					<!-- Usei este campo apenas para enviar a referência do post que será comentado -->
        					<input type="hidden" name="post_id" value="1">
        					<div class="wrap_text_area">
        						<textarea class="focus_expand" name="comentario" placeholder="Comentar"></textarea>
        						<input type="submit" name="comentar" value="PUBLICAR">
        					</div>       					
        				</form>

        			</div>

        			<div class="wrap_comentarios">

        				<span class="title"><span class="text">COMENTÁRIOS</span><span class="trace"></span></span>


        				<div class="single_comentario"><!-- START LOOP -->

        					<!-- LOADER -->
        					<div class="loader loader40"><span class="container_loader"></span></div>

        					<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/materias/aureliza-thumb.jpg" title="Aureliza Fonseca">

        					<div class="wrap_content">
        						<span class="nome">Aureliza Fonseca</span>
        						<p>
        							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum a felis sed odio fermentum rhoncus nec sit amet.
        						</p>
        						<span class="nao_revisado">Não revisado</span>
        					</div> -->
        				
        				</div><!-- END LOOP -->

        			</div>

        		</div>
        	</article>
        </section>

        <section class="veja_tambem">
        	<article>
        		<div class="content">
        			<h5>VEJA TAMBÉM:</h5>

        			<div class="wrap_responsive_accordions">

	        			<div class="accordion_interna nutricao">
	        				<div class="wrap_accordion">
		        				<h6><span>Nutrição</span></h6>
		        				<div class="sliders1">

		        					<div class="slide_in">
		        						<div class="title">Os hábitos alimentares da mãe</div>
		        						<a href="#" class="wrap_resumo">
		        							<img src="<?php echo get_template_directory_uri(); ?>/img/interna/thumb-accordion.jpg">
		        							<p>
		        								Durante esse período em que a alimentação é exclusiva do leite materno, é fundamental que a dieta... Leia mais.
		        							</p>
		        						</a>
		        					</div>

		        					<div class="slide_in">
		        						<div class="title">Os hábitos alimentares da mãe</div>
		        						<a href="#" class="wrap_resumo">
		        							<img src="<?php echo get_template_directory_uri(); ?>/img/interna/thumb-accordion.jpg">
		        							<p>
		        								Durante esse período em que a alimentação é exclusiva do leite materno, é fundamental que a dieta... Leia mais.
		        							</p>
		        						</a>
		        					</div>

		        				</div>
		        			</div>
	        			</div>

	        			<div class="accordion_interna bemestar">
	        				<div class="wrap_accordion">
		        				<h6><span>Bem-estar</span></h6>
		        				<div class="sliders2">

		        					<div class="slide_in">
		        						<div class="title">Os hábitos alimentares da mãe</div>
		        						<a href="#" class="wrap_resumo">
		        							<img src="<?php echo get_template_directory_uri(); ?>/img/interna/thumb-accordion.jpg">
		        							<p>
		        								Durante esse período em que a alimentação é exclusiva do leite materno, é fundamental que a dieta... Leia mais.
		        							</p>
		        						</a>
		        					</div>

		        					<div class="slide_in">
		        						<div class="title">Os hábitos alimentares da mãe</div>
		        						<a href="#" class="wrap_resumo">
		        							<img src="<?php echo get_template_directory_uri(); ?>/img/interna/thumb-accordion.jpg">
		        							<p>
		        								Durante esse período em que a alimentação é exclusiva do leite materno, é fundamental que a dieta... Leia mais.
		        							</p>
		        						</a>
		        					</div>

		        				</div>
		        			</div>
	        			</div>

	        			<div class="accordion_interna crescimento">
	        				<div class="wrap_accordion">
		        				<h6><span>Crescimento</span></h6>
		        				<div class="sliders3">

		        					<div class="slide_in">
		        						<div class="title">Os hábitos alimentares da mãe</div>
		        						<a href="#" class="wrap_resumo">
		        							<img src="<?php echo get_template_directory_uri(); ?>/img/interna/thumb-accordion.jpg">
		        							<p>
		        								Durante esse período em que a alimentação é exclusiva do leite materno, é fundamental que a dieta... Leia mais.
		        							</p>
		        						</a>
		        					</div>

		        					<div class="slide_in">
		        						<div class="title">Os hábitos alimentares da mãe</div>
		        						<a href="#" class="wrap_resumo">
		        							<img src="<?php echo get_template_directory_uri(); ?>/img/interna/thumb-accordion.jpg">
		        							<p>
		        								Durante esse período em que a alimentação é exclusiva do leite materno, é fundamental que a dieta... Leia mais.
		        							</p>
		        						</a>
		        					</div>

		        				</div>
		        			</div>
	        			</div>
	        		</div>
        		</div>
        	</article>
        </section>

        <nav class="stick_footer_semanas">
        	<span class="trace"></span>
        	<span class="periodo">SEMANA</span>
        	<button class="next"></button>
        	<button class="prev"></button>
        	<div class="wrap_buttons">
        		<ul>
        			<li class="spacer"><span>#</span></li>
        			<?php for($i = 1; $i <= 43; $i++): ?>
        				<?php if ($i == 2): ?>
        					<li id="active"><span><?php echo $i; ?></span></li>
        				<?php else: ?>
        					<li><span><?php echo $i; ?></span></li>
        				<?php endif; ?>
        			<?php endfor; ?>
        			<li class="spacer"><span>#</span></li>
        		</ul>
        	</div>
        	<div class="mask left"></div>
        	<div class="mask right"></div> 
        </nav>

       <?php get_footer('footer.php'); ?>

        

