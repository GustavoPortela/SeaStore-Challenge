<?php get_header(); ?>
<div class="navbar-topo"> 
        <div class="container">
        <nav>
            <ul>
                <li><a href=" ">Acesse a Plataforma</a></li>
                <li><a href=" ">Minha conta</a></li>
                <li><a href=" "><i class="fas fa-shopping-cart"></i></a></li>
            </ul>
        </nav>
        </div><!---container-->
    </div> 

    <header>
        <div class="container">
       <div class="chamada1">
        <h2>Chegamos para <br />
            facilitar a sua vida!</h2>
            <p>O programa que veio atender a tudo e a todos,<br />
            na prestação de Serviços Digitais</p>
       </div> <!--chamada 1-->
    </div> <!---container-->
    </header>

    <section class="conheca">
        <div class="container">
            <div class="texto-conheca">
                <p>Conheça mais o projeto da <b>Sea Tecnologia</b></p>
            </div><!--texto-conheca-->

            <div class="video">
            <a href="#" class="square_btn">video institucional</a>
             </div><!---video-->

        </div> <!--container-->
    </section>

    <div id="conteudo">
		<div class="container">
        <div id="artigos">
			        <div class="container">
         
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="artigo">
                    <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
                    <p><?php the_content(); ?></p>
                </div>
            <?php endwhile; else: ?>
                <div class="artigo">
                    <h2>Nada Encontrado</h2>
                    <p>Erro 404</p>
                    <p>Lamentamos mas não foram encontrados artigos.</p>
                </div>            
            <?php endif; ?>
			</div>
        </div>
			</div>
		</div>
                <!-- Footer -->
    <footer> 
         <div class="container">
            <div class="rodape">

                <p>Copyright 2020</p>

                </div>


        </div>
    </footer>
    
        <!-- Footer -->
         

    </div>
<?php get_footer(); ?>