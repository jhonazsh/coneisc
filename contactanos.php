<?php include('base.php'); ?>

<?php startblock('titulo'); ?>
    XXII CONEISC 2014 | Contáctanos
<?php endblock(); ?>

<?php startblock('contenido'); ?>

	<div class="banner banner-inscripcion">
      <div class="container-banner">
        <!-- Indicators -->
          <div class="container">

            <div class="row">

              <div class="col-sm-6">
                <h1 class="titulo-principal">Contáctanos CONEISC</h1>
                <p class="parrafo-principal color-blanco">¡Comunícate con nosotros!</p>
              </div>

            </div>
        </div>
      </div>

    </div>
    <br>

	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<form action="mensaje.php" method="POST" role="form" id="formContacto">
						<legend><span class="glyphicon glyphicon-envelope"></span> Envíanos un mensaje</legend>
		
						<div class="form-group">
							<label>Nombre: </label>
							<input type="text" name="txtNombre" class="form-control" id="_txtNombre" placeholder="* Tu nombre">
							<label>Email: </label>
							<input type="email" name="txtEmail" class="form-control" id="_txtEmail" placeholder="* Tu email">
							<label>Asunto: </label>
							<input type="text" name="txtAsunto" class="form-control" id="_txtAsunto" placeholder="* Tu asunto">
							<label>Mensaje: </label>
							<textarea name="txtMensaje" class="form-control" rows="8" id="_txtMensaje">
							</textarea>
						</div>					
						<?php 
							if(isset($_GET['msg'])){
								echo $_GET['msg']; 
							}
						?>

						<input class="btn btn-azul" type="submit" name="Enviar" value="Enviar">
					</form>
				</div>
				<div class="col-md-6">
					<h4>¿Como llegar?</h4>
					<iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.es/maps?f=q&amp;source=s_q&amp;hl=es&amp;geocode=&amp;q=&amp;aq=0&amp;oq=unt&amp;sll=-8.115463,-79.035194&amp;sspn=0.012937,0.021136&amp;ie=UTF8&amp;t=m&amp;ll=-8.115251,-79.036674&amp;spn=0.005311,0.006437&amp;z=16&amp;output=embed"></iframe>
				</div>
			</div>
		</div>
	</section>
	<br>

<?php endblock(); ?>