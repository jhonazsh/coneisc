<?php include ('base.php');?>

<?php startblock('titulo');?>
XXII CONEISC 2014 | Contáctanos
<?php endblock();?>

<?php startblock('contenido');?>
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
							<input type="text" name="txtNombre" class="form-control" placeholder="* Tu nombre"><br>
							<label>Email: </label>
							<input type="email" name="txtEmail" class="form-control" placeholder="* Tu email"><br>
							<label>Asunto: </label>
							<input type="text" name="txtAsunto" class="form-control" placeholder="* Tu asunto"><br>
							<label>Mensaje: </label>
							<textarea name="txtMensaje" class="form-control" rows="8">
							</textarea>
						</div>
<?php
if (isset($_GET['msg'])) {
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

<?php endblock();?>

<?php startblock('scripts');?>
<script src="js/jquery.validate.min.js"></script>
	<script type="text/javascript">
		$(function(){
        $('#formContacto').validate({
            rules :{
                txtNombre : {
                    required : true, //para validar campo vacio
                },
                txtEmail : {
                    required : true,
                    email: true
                },
                txtAsunto: {
                    required : true
                },
                txtMensaje : {
                    required :true
                }
            },
            messages : {
                txtNombre : {
                    required : "<p style='color: red;'>* Debe ingresar un nombre</p>"
                },
                txtEmail : {
                    required : "<p style='color: red;'>* Debe ingresar un email</p>",
                    email: "<p style='color: red;'>* Debe ingresar un email correcto</p>"
                },
                txtAsunto:{
                	required: "<p style='color: red;'>* Debe ingresar un asunto</p>"
                },
                txtMensaje:{
                	required: "<p style='color: red;'>* Debe ingresar un mensaje</p>"
                }
            }
        });
    });
	</script>


  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];
a.async=1;
a.src=g;
m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-53564315-1', 'auto');
  ga('send', 'pageview');

</script>

<?php endblock();?>