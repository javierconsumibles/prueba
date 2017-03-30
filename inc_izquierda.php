 		<div class="col-md-2">
			<?php
			if ((isset($menu_especifico)) && ($menu_especifico)){
				include "menu_especifico.php";				
			}
			if ((isset($menu_filtros)) && ($menu_filtros)){
				include "menu_filtros.php";
			}			
			?>	


			<!--<div class="caja-banner" id="caja-ofertas-izq">
			    <p class="lead">Unicos 5 días</p>
				<img src ="/media/portesgratisbanner.jpg" alt="portes gratis" class="img-responsive">
			</div>-->			
			<!--<p>Super oferta<br></p>
			    
		<div class="caja-banner" id="caja-ofertas-izq">
			    <a href="<?php echo $ruta_site ?>/ofertas.php">
			    <img class="img-responsive" src="/media/newmedia/cibermonday.jpg" alt="Ofertas Cibermonday">
			</a>    
		</div>


    <section>	
           <h4 class="section">Promociones</h4>

		<div class="caja-banner" id="caja-ofertas-izq">
			    <a href="<?php echo $ruta_site ?>/ofertas.php">
			    <img class="img-responsive" src="/media/newmedia/ofertas.png" alt="Ofertas">
			</a>    
		</div>

		<div class="caja-banner" id="caja-ofertas-izq">

		<div class="caja-banner" id="caja-comparador-impresoras">
			    <a href="<?php echo $ruta_site ?>/comparador-impresoras.php">
			    <img class="img-responsive" src="/media/newmedia/selector.png" alt="Ofertas">
			</a>    
		</div>
-->
<!--		<div class="caja-banner" id="caja-ofertas-izq2">
			<div class="col-xs-12 col-sm-12 col-md-12 grid-ofertas es-oferta">	
			<span class="offer2"></span>
			</div>
				<br><br><br>
				<p class="lead">Guia de compra impresoras</p>
				<br>
				 <a href="<?php echo $ruta_site ?>/comparador-impresoras.php">Haga clic aqui.</a>
				<br>
		</div>
	-->
    <nav>
    	<h4 class="section">Buscador</h4>		
			<ul class="list-group" id="caja-busqueda-izq">
				<li class="list-group-item header-list">Busqueda</li>
				<li class="list-group-item"><a href="<?php echo $ruta_site ?>/busqueda_modelo.php">Dispositivo</a></li>
				<li class="list-group-item"><a href="<?php echo $ruta_site ?>/tinta.php">Tinta</a></li>
				<li class="list-group-item"><a href="<?php echo $ruta_site ?>/toner.php">Toner</a></li>
				<li class="list-group-item"><a href="<?php echo $ruta_site ?>/cintas.php">Cintas</a></li>
				<li class="list-group-item"><a href="<?php echo $ruta_site ?>/papel.php">Papel</a></li>
				<li class="list-group-item"><a href="<?php echo $ruta_site ?>/Productos-de-la-marca-Otras.html">Por fabricante</a></li>
				<!--<li class="list-group-item"><a href="<?php echo $ruta_site ?>/indice_alfabetico.php">Nombre</a></li>-->
			</ul>
	</nav>
  		<h4 class="section">Nuestras ventajas</h4>
			<div class="caja-banner" id="caja-promocion-izq">
			    <p class="lead">El mejor precio</p>
			    <p>El mas barato del mercado<br>Descuentos en cada pedido<br>Portes reducidos<br>Puntos canjeables por regalos<br>
			    	<br>
			    <p class="lead">Los servicios</p>
			    <p>Chat online <br>Soporte telefónico<br>Servicio entrega 24 horas<br>Seguro de devolución<br>
			    	<br>
			    <p class="lead">Los productos</p>
			    <p>30.000 artículos<br>250 fabricantes<br>Consumibles<br>Material de oficina<br>
			    	<br>
			    <a class="btn btn-info btn-sm" href="<?php echo $ruta_site ?>/servicios.php">Mas información ...</a><br>
			    <br>
			</div>
</section>
</div>
		<div class="col-md-7">
		<?php
		if ((isset($_GET["agregado"])) && ($_GET["agregado"]=="si")){
			?>
			<div class="alert alert-success"><span class="glyphicon glyphicon-shopping-cart"></span> El producto ha sido añadido al carrito correctamente.</div>
			<?php
		}		
		?>