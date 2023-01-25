<!DOCTYPE html>
<?php
    
    include_once('app/gravar_verificacao.php');	
     include_once('app/selectProdutos.php');
	 include_once('app/carrinho.php');
	 include_once('app/add_banner.php');

     
?>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Pagina Inicial | EcomerceShop</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<font colo= "red"><body >
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								
								<li><a href="#"><i class="fa fa-envelope"> </i></a></li> 
								<li><a href="#"><i class="fa fa-email"></i>
								
								<?php 
								if(isset($_SESSION['usuarioPrivilegio']) ==0  && isset($Semail)){
								echo "$Semail"; 
								}else if(isset($_SESSION['usuarioPrivilegio']) >= 1 && isset($Semail)) {
									echo "$Semail"; 
								}?></a></li>
								
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-md-4 clearfix">
						<div class="logo pull-left">
							<a href="index.php"><img src="images/home/logo.png" alt="" /></a>
						</div>
						<div class="btn-group pull-right clearfix">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									ANGOLA
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="">USA</a></li>
							
								</ul>
							</div>
							
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									KWANZAS
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="">DOLLAR</a></li>
								
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-8 clearfix">
						<div class="shop-menu clearfix pull-right">
							<ul class="nav navbar-nav">

								

								
								
								<?php 
								if(isset($_SESSION['usuarioPrivilegio']) == 0 && isset($Semail)	){
								echo "<li><a href='admin/index.php'><i class='fa fa-shopping-cart'></i>Dashboard</a></li>"; 
								}else if(isset($_SESSION['usuarioPrivilegio']) >= 1) {
									
								}?>


								<li><a href="pedidos.php"><i class="fa fa-user"></i> Pedidos Feitos</a></li>
								<li><a href=""><i class="fa fa-star"></i> Lista de Desejos</a></li>
								<li><a href="checkout.php"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="cart.php"><i class="fa fa-shopping-cart"></i> Carrinho</a></li>
							
								
								<?php
									if(isset($_SESSION['usuarioId']))
									{
										echo "<li><a href='app/sair.php'><i class='fa fa-unlock'></i> Sair</a></li>";
									}else{
										echo "<li><a href='login.php'><i class='fa fa-lock'></i> Login</a></li>";
									}
								
								?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Alternar de navegação</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php" class="active">Pagina Inicial</a></li>
								<li class="dropdown"><a href="#">EcomerceShop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.php">Produtos</a></li>
										<li><a href="product-details.php">Detalhes de produtos</a></li> 
										<li><a href="checkout.php">Verificar</a></li> 
										<li><a href="cart.php">Cartão</a></li> 
										<li><a href="login.php">Login</a></li> 
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.php">Blog Lista</a></li>
										<li><a href="blog-single.php">Blog Único</a></li>
                                    </ul>
                                </li> 
								<li><a href="404.php">404</a></li>
								<li><a href="contact-us.php">Contactos</a></li>
							</ul>
						</div>
					</div>
					<form action="?" method="post">
					<div class="col-sm-3">
						<div class="search_box pull-right">
						<input type="text" name="search" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
                        <?php
                            $i=0;
                          if (mysqli_num_rows($TBanner)>0) {
                            while ($i<=($count-1)) {
                                if ($i==0) {
                                        echo "<li data-target='#slider-carousel' data-slide-to='$i' class='active'></li>";
                                }else{
                                    echo "<li data-target='#slider-carousel' data-slide-to='$i' ></li>";

                                }
                                $i++;
                            }
                          
                            }?>
                        
						</ol>
						
						<div class="carousel-inner">

                        <?php
                            $cont=1;
                          if (mysqli_num_rows($TBanner)>0) {
                          while ($data2=mysqli_fetch_array($TBanner, MYSQLI_ASSOC)) {                       
                        
                            if ($cont==1) {
                                echo "<div class='item active'>
								<div class='col-sm-6'>
									
									<h2>".$data2['titulo']."</h2>
									<p>".$data2['descricao']." </p>
									<button type='button' class='btn btn-default get'>Visualizar</button>
								</div>
								<div class='col-sm-6'>
                                <img style='height:350px;' class='d-block w-100' src='img_banner/".$data2['imgBanner']."'  class='girl img-responsive' alt='''>
									
								</div>
							</div>";
                            }else{
                                echo " <div class='item'>
								<div class='col-sm-6'>
									
									<h2> ".$data2['titulo']."</h2>
                                    <p>".$data2['descricao']." </p>									
                                    <button type='button' class='btn btn-default get'>Visualizar</button>
								</div>
								<div class='col-sm-6'>
                                <img style='height:350px;' class='d-block w-100' src='img_banner/".$data2['imgBanner']."'  class='girl img-responsive' alt='''>					
                                	</div>
							</div>";
                            }
                            $cont++;
                        }
                    }?>
							
											
						</div>
						<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                           <span class="sr-only">Previous</span>
                         </a>
                         <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                           <span class="carousel-control-next-icon" aria-hidden="true"></span>
                           <span class="sr-only">Next</span>
                         </a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Categoria</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Roupa de esporte
										</a>
									</h4>
								</div>
								<div id="sportswear" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Nike </a></li>
											<li><a href="#">Under Armour </a></li>
											<li><a href="#">Adidas </a></li>
											<li><a href="#">Puma</a></li>
											<li><a href="#">ASICS </a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#mens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Masculino
										</a>
									</h4>
								</div>
								<div id="mens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Fendi</a></li>
											<li><a href="#">Guess</a></li>
											<li><a href="#">Valentino</a></li>
											<li><a href="#">Dior</a></li>
											<li><a href="#">Versace</a></li>
											<li><a href="#">Armani</a></li>
											<li><a href="#">Prada</a></li>
											<li><a href="#">Dolce and Gabbana</a></li>
											<li><a href="#">Chanel</a></li>
											<li><a href="#">Gucci</a></li>
										</ul>
									</div>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#womens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Mulheres
										</a>
									</h4>
								</div>
								<div id="womens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Fendi</a></li>
											<li><a href="#">Guess</a></li>
											<li><a href="#">Valentino</a></li>
											<li><a href="#">Dior</a></li>
											<li><a href="#">Versace</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Crianças</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Moda</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Famílias</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">interiores</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Confecções</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Bolsas</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Sapato</a></h4>
								</div>
							</div>
						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Marcas</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href="#"> <span class="pull-right">(50)</span>Acne</a></li>
									<li><a href="#"> <span class="pull-right">(56)</span>Grüne Erde</a></li>
									<li><a href="#"> <span class="pull-right">(27)</span>Albiro</a></li>
									<li><a href="#"> <span class="pull-right">(32)</span>Ronhill</a></li>
									<li><a href="#"> <span class="pull-right">(5)</span>Oddmolly</a></li>
									<li><a href="#"> <span class="pull-right">(9)</span>Boudestijn</a></li>
									<li><a href="#"> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
								</ul>
							</div>
						</div><!--/brands_products-->
						
						<div class="price-range"><!--price-range-->
							<h2>Faixa de preço</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
							</div>
						</div><!--/price-range-->
						
						<div class="shipping text-center"><!--shipping-->
							<img src="images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
					
					</div>
				</div>
				
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">P R O D U T O S</h2>
						
						<?php
             if(mysqli_num_rows($resultado)>0){
               while($data=mysqli_fetch_array($resultado,MYSQLI_ASSOC)){ 
				if($data['qtd']==0){
					echo"   
					<div class='col-sm-4'>
						<div class='product-image-wrapper'>
							<div class='single-products'>
									<div style='background-color: red' class='productinfo text-center'>
										<img style='height:200px;' src='upload_img/".$data['imagem'].".jpg' alt='' />
										<h2>".number_format($data['precoUnitario'],2,',','.')." Kz</h2>
										<p>".$data['nome']."</p>
										<a href='?acao=add&id=".$data['idp']."' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Adicionar ao carrinho</a>
									</div>
									<div class='product-overlay'>
										<div class='overlay-content'>
											<h2> <font color='red'> ESGOTADO </font></h2>
											<p>".$data['nome']."</p>
											<a  class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Adicionar ao carrinho</a>
										</div>
									</div>
							</div>
							<div class='choose'>
								<ul class='nav nav-pills nav-justified'>
									<li><a href='#'><i class='fa fa-plus-square'></i>Adicionar a lista de desejos</a></li>
									<li><a href='#'><i class='fa fa-plus-square'></i>Adicionar para comparar</a></li>
								</ul>
							</div>
						</div>
					</div>
					";		
				}else{
                echo"   
						<div class='col-sm-4'>
							<div class='product-image-wrapper'>
								<div class='single-products'>
										<div class='productinfo text-center'>



										

											<img style='height:200px;' src='upload_img/".$data['imagem'].".jpg' alt='' />
											<h2>".number_format($data['precoUnitario'],2,',','.')." Kz</h2>
											<p>".$data['nome']."</p>
											<a href='?acao=add&id=".$data['idp']."' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Adicionar ao carrinho</a>
										</div>
										
								</div>
								<div class='choose'>
									<ul class='nav nav-pills nav-justified'>
										<li><a href='#'><i class='fa fa-plus-square'></i>Adicionar a lista de desejos</a></li>
										<li><a href='?acao=add&id=".$data['idp']."'><i class='fa fa-plus-square'></i>Adicionar para comparar</a></li>
									</ul>
								</div>
							</div>
						</div>
						";
					}
				   }
				}
				   ?>




						
					
										
				</div>
			</div>
		</div>
	</section>
	
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>e</span>-Aza Boutique</h2>
							<p>Vestir bem, faz bem. Aza Boutique proporciona bom humor e carisma para os esus clientes</p>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe1.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe2.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe3.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe4.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="images/home/map.png" alt="" />
							<p>Angola Luanda(Cazenga)</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Online Help</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Order Status</a></li>
								<li><a href="#">Change Location</a></li>
								<li><a href="#">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Quock Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">T-Shirt</a></li>
								<li><a href="#">Mens</a></li>
								<li><a href="#">Womens</a></li>
								<li><a href="#">Gift Cards</a></li>
								<li><a href="#">Shoes</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privecy Policy</a></li>
								<li><a href="#">Refund Policy</a></li>
								<li><a href="#">Billing System</a></li>
								<li><a href="#">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Company Information</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">Store Location</a></li>
								<li><a href="#">Affillate Program</a></li>
								<li><a href="#">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</font>
</html>