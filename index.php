<?php
include_once "generales.php";

	if ((isset($_GET["cerrar_sesion"])) && ($_GET["cerrar_sesion"]=="si")){
			$vz = 1;
			do {
				$_SESSION['prod'.$vz] = null;
				$_SESSION['unid'.$vz] = null;
				$vz += 1;
			} while ($vz<$numero_maximo_de_articulos_pedidos);
			$_SESSION['total'] = null;
			$_SESSION['email'] = null;
			$_SESSION['alta']= null;
	}

include "inc_header1.php";
include "inc_izquierda.php";
?>
<?php if (strlen($fila_seo["h2"])>2){ 
	 		echo ("<h2>".$fila_seo["h2"] ."</h2>");
		} else { 
			echo "";
				} 
?>
<section class="caja-banner es-oferta">
	<h4 class="section">Oferta de la Semana</h4>
    <div class="row">
    	<span class="offer"></span>
		<form name="listado">
				<?php
				//echo count($referencias);
					$mi_select = "SELECT * FROM $tabla_actual WHERE referencia LIKE '".$referencias[0]."'";
					for ($i=1;$i<=0;$i++){
						$mi_select .= " OR referencia LIKE '".$referencias[$i]."'";
					}
					$mi_select .= " GROUP BY referencia";
					$mi_result = mysql_query($mi_select);
					$contador = 0;
					while($mi_fila = mysql_fetch_array($mi_result)){
						$contador ++;
						$hoy_time = time();
				//		$enlace = "detalle.php?ref=". $mi_fila["referencia"];
						$enlace = getURLDetalle($mi_fila["referencia"]);
						include("oferta-semanal.php");
					}
				?>
		</form>
	</div>
</section>

<article class="caja-banner">	
    <header>
      <h2>Consumibles.com</h2>
      <h3>Consumibles informático, material de oficina, electrónica y ocio.</h3>
    </header>
	<section> 
		<h3>¿Qué es consumibles.com?</h3>
		<p><strong>Consumibles.com</strong> es la primera web especializada en la venta de <strong>consumibles informáticos</strong> creada en 1997<br><br>
		Vendemos <strong>tóner</strong>, <strong>tinta</strong>, <strong>tambores</strong>, <strong>cabezales de impresión</strong> <strong>originales y compatibles</strong> de los principales fabricantes como: <strong>Brother</strong>, <strong>Canon</strong>, <strong>Epson</strong>, <strong>Fujitsu</strong>, <strong>IBM</strong>, <strong>HP</strong>, <strong>Konica-minolta</strong>, <strong>Kyocera-Mita</strong>, <strong>Lexmark</strong>, <strong>Oki</strong>, <strong>Olivetti</strong>, <strong>Panasonic</strong>, <strong>Philips</strong>, <strong>Ricoh</strong>, <strong>Riso</strong>, <strong>Sagem</strong>, <strong>Samsung</strong>, <strong>Sharp</strong>, <strong>Toshiba</strong>, <strong>Xerox-Tektronix</strong>, <strong>XYZprinting</strong> etc.</p>
	</section>
	<section> 
	<h3>¿Qué servicios le ofrece consumibles.com?</h3>
	<p>Con más de 30.000 artículos en nuestro catálogo, le facilitamos la adquisición, en un único proveedor, de todos los productos necesarios para su empresa, despacho profesional o particular incluyendo <strong>consumibles</strong>, <strong>material de oficina</strong>, <strong>impresoras</strong>  o <strong>electrónica</strong>. </p>
	</section>	
</article>
<section class="caja-banner">
<br>
    <header>
	<h2>Algunas ofertas en consumibles.com</h2>
			<h3>Toner, tinta, material de oficina, impresoras y electrónica</h3>
    </header>
		<div class="row">
			<form name="listado">
				<?php
				//echo count($referencias);
					$mi_select = "SELECT * FROM $tabla_actual WHERE referencia LIKE '".$referencias[0]."'";
					
					for ($i=1;$i<=2;$i++){
						$mi_select .= " OR referencia LIKE '".$referencias[$i]."'";
					}
					$mi_select .= " GROUP BY referencia";
					$mi_result = mysql_query($mi_select);
					$contador = 0;
					while($mi_fila = mysql_fetch_array($mi_result)){
						$contador ++;
						$hoy_time = time();
				//		$enlace = "detalle.php?ref=". $mi_fila["referencia"];
						$enlace = getURLDetalle($mi_fila["referencia"]);
						include("fila_cuadro_ppal.php");
					}
				?>
			</form>
		</div>
</section>
<?php
include "inc_derecha.php";
include "inc_footer.php";
?>