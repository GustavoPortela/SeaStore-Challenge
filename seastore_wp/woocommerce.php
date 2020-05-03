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

			  			<div id="loja">
			<div class="container"> 
			  			<div id="loja">

            <?php woocommerce_content(); ?>
             
        </div>
		</div>


<?php get_footer(); ?>