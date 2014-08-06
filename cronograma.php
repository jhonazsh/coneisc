<?php include('base.php'); ?>

<?php startblock('titulo'); ?>
    XXII CONEISC 2014 | Cronograma
<?php endblock(); ?>

<?php startblock('style'); ?>
    <link rel="stylesheet" href="css/vendor/timeline.css">
<?php endblock(); ?>

<?php startblock('contenido'); ?>
    <div class="banner banner-inscripcion">
      <div class="container-banner">
        <!-- Indicators -->
          <div class="container">

            <div class="row">
              
              <div class="col-sm-6">
                <h1 class="titulo-principal">Cronograma CONEISC</h1>
                <p class="parrafo-principal color-blanco">¡Informate sobre el Cronograma de Ponencias, Talleres y más!</p>
             </div>


            </div>
        </div>
      </div>

    </div>

        <div class="container">
           
            <div class="row relleno-arriba-uno">
                <div class="col-md-offset-1 col-md-10 margen-arriba margen-izq">
                    <a class="btn btn-cro btn-mas titulofooter" id="todo">Todo</a>
                    <a class="btn btn-no-fondo btn-mas titulofooter" id="magistral">Ponencias Magistrales</a>
                    <a class="btn btn-no-fondo btn-mas titulofooter" id="especializada">Ponencias Especializadas</a>
                    <a class="btn btn-no-fondo btn-mas titulofooter" id="taller">Talleres</a>
                </div>

                <div class="col-md-offset-1 col-md-10 margen-arriba-dos "> 
                    <div class="timeline-centered borde-add">
                        

                        <div class="col-xs-8 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8  col-lg-8 pull-right ">
                            <div class="timeline-icon bg-info">
                                <i class="entypo-camera">Lunes 18</i>
                            </div>    
                        </div>                   


                        <article class="timeline-entry" data-target="evento">
                            
                            <div class="timeline-entry-inner">
                                <time class="timeline-time margen-derecha" datetime="2014-01-10T03:45"><span class="hora">08:00-13:00</span> <span class="hora" >Lunes 18</span></time>
                                
                                <div class="timeline-icon bg-danger">
                                    <i class="entypo-feather"></i>
                                </div>
                                
                                <div class="timeline-label">
                                    <h2><a href="#">ENTREGA DE MATERIALES</a> <span></span></h2>
                                    <p>El día lunes entregaremos los materiales necesarios para el desarrollo de éste congreso.</p>
                                </div>
                            </div>
                            
                        </article>
                        
                        
                        <article class="timeline-entry left-aligned" data-target="evento">
                            <div class="timeline-entry-inner">
                                <time class="timeline-time margen-izquierda" datetime="2014-01-10T03:45"><span class="hora">14:00-16:00</span> <span class="hora" >Lunes 18</span></time>
                                <div class="timeline-icon bg-warning">
                                    <i class="entypo-suitcase"></i>
                                </div>
                                <div class="timeline-label">
                                    <h2><a href="#">CEREMONIA DE INAUGURACIÓN</a></h2>
                                    <p>La ceremonia de inauguracion estará a cargo del Rector y de otras autoridades e incluiremos un número artístico</p>
                                </div>
                            </div>
                        </article>

                        <article class="timeline-entry" data-target="magistral">
                            
                            <div class="timeline-entry-inner">
                                <time class="timeline-time margen-derecha" datetime="2014-01-10T03:45"><span class="hora">16:30-18:00</span> <span class="hora" >Lunes 18</span></time>
                                
                                <div class="timeline-icon bg-success">
                                    <i class="entypo-feather"></i>
                                </div>
                                
                                <div class="timeline-label">
                                    <h2><a href="#">CREACIÓN DE STARTUPS ESCALABLES Y GLOBALES. </a> <img class="img-thumbnail" src="http://www.emol.com/deportes/relatos_envivo/futbol/amistosos/banderas/per.gif"></h2>
                                    <p>¿Como hacemos de Perú un hub tecnológico en el mundo?</p>
                                    <p>Ponente: Mg. Alfred Kobayashi (UPC-Perú).</p>
                                </div>
                            </div>
                            
                        </article>

                        <article class="timeline-entry left-aligned" data-target="magistral">
                            <div class="timeline-entry-inner">
                                <time class="timeline-time margen-izquierda" datetime="2014-01-10T03:45"><span class="hora">18:30-20:00</span> <span class="hora" >Lunes 18</span></time>
                                <div class="timeline-icon bg-success">
                                    <i class="entypo-suitcase"></i>
                                </div>
                                <div class="timeline-label">
                                    <h2><a href="#">APLICACIÓN DE COBIT EN LA VIDA REAL</a><img class="img-thumbnail" src="http://www.nineonline.com.co/images/bandera-de-colombia.png"></h2>
                                    <p>Como se utiliza COBIT 5 para la implementación de gobierno de TI, el mejoramiento de procesos y la implementación de controles.</p>
                                    <p>Ponente: Dr. Lucio Molina.</p>
                                </div>
                            </div>
                        </article>

                        <article class="timeline-entry right-aligned" data-target="magistral">
                            <div class="timeline-entry-inner">
                                <time class="timeline-time margen-derecha" datetime="2014-01-10T03:45"><span class="hora">20:30-21:30</span> <span class="hora" >Lunes 18</span></time>
                                <div class="timeline-icon bg-success">
                                    <i class="entypo-suitcase"></i>
                                </div>
                                <div class="timeline-label">
                                    <h2><a href="#">¿QUÉ APORTAMOS A NUESTRO PERÚ?</a><img class="img-thumbnail" src="http://www.emol.com/deportes/relatos_envivo/futbol/amistosos/banderas/per.gif"></h2>
                                    <p>Ponente: Mg. Juan Espinoza.</p>
                                </div>
                            </div>
                        </article>
                        
                        
                        <article class="timeline-entry left-aligned" data-target="evento">
                            <div class="timeline-entry-inner">
                                <time class="timeline-time margen-izquierda" datetime="2014-01-10T03:45"><span class="hora">22:00</span> <span class="hora" >Lunes 18</span></time>
                                <div class="timeline-icon bg-secondary">
                                    <i class="entypo-camera"></i>
                                </div>
                                <div class="timeline-label">
                                    <h2>
                                        <a href="#">FIESTA DE APERTURA</a> 
                                    </h2>
                                    <p>
                                        La fiesta de apertura será en la discoteca "El Estribo"
                                    </p>  
                                </div>
                            </div>
                            
                        </article>



                        <div class="col-xs-8 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8  col-lg-8 pull-right ">
                            <div class="timeline-icon bg-info">
                                <i class="entypo-camera">Martes 19</i>
                            </div>    
                        </div>   

                        
                        <article class="timeline-entry top-aligned " data-target="magistral">
                           <div class="timeline-entry-inner ">
                                <time class="timeline-time margen-derecha" datetime="2014-01-10T03:45"><span class="hora">08:00-10:00</span> <span class="hora" >Martes 19</span></time>
                                
                                 <div class="timeline-icon bg-success">
                                    <i class="entypo-camera"></i>
                                </div>
                                
                                <div class="timeline-label">
                                    <h2>
                                        <a href="#">MALWARE EN DISPOSITIVOS MÓVILES </a> 
                                        <img class="img-thumbnail" src="http://www.emol.com/deportes/relatos_envivo/futbol/amistosos/banderas/per.gif">
                                    </h2>
                                    
                                    <p>Ponente: Ing. John Titto Noriega (ESET Latinoamérica).
                                    </p>

                                    
                                </div>
                            </div>                            
                        </article>

                        <article class="timeline-entry left-aligned ">
                           <div class="timeline-entry-inner ">
                                <time class="timeline-time margen-izquierda" datetime="2014-01-10T03:45"><span class="hora">10:30-14:00</span> <span class="hora" >Martes 19</span></time>
                                
                                 <div class="timeline-icon bg-primary">
                                    <i class="entypo-camera"></i>
                                </div>
                                
                                <div class="timeline-label">
                                    <div class="timeline-entry-child" data-target="magistral">
                                        <h2>
                                            <a href="#"><small>(Simultáneo)</small> TESTEAR PARA CONOCER, CONOCER PARA TESTEAR </a> 
                                            <img class="img-thumbnail" src="http://cdn.popuz.com/media/img/flags/st1/tiny/uy.png">
                                        </h2>
                                        
                                        <p>Ponente: Dra. Monica Wodzislawski.
                                        </p>
                                    </div>

                                    <div class="timeline-entry-child" data-target="especializada">
                                    <br>
                                        <h2>
                                            <a href="#"><small>(Simultáneo)</small>OMNILITE: CENTRO DE DATOS INTEGRALES</a> 
                                            <img class="img-thumbnail" src="http://www.emol.com/deportes/relatos_envivo/futbol/amistosos/banderas/per.gif">
                                        </h2>
                                        
                                        <p>Ponente: Ing. Juan Carlos Revilla
                                        </p>
                                    </div>

                                    <div class="timeline-entry-child" data-target="especializada">
                                    <br>
                                        <h2>
                                            <a href="#"><small>(Simultáneo)</small>MODELOS INTEGRADOS DE GESTIÓN</a> 
                                            <img class="img-thumbnail" src="http://www.emol.com/deportes/relatos_envivo/futbol/amistosos/banderas/per.gif">
                                        </h2>
                                        
                                        <p>Ponente: Ms. David Agreda
                                        </p>
                                    </div>

                                    <div class="timeline-entry-child" data-target="taller">
                                    <br>
                                        <h2>
                                            <a href="#"><small>(Simultáneo)</small>MOZILLA PERÚ - WEBMAKER PARTY</a> 
                                        </h2>
                                        
                                        <p>Ponente: Ing. Juan Eladio Rosas
                                        </p>
                                    </div>

                                    <div class="timeline-entry-child" data-target="taller">
                                    <br>
                                        <h2>
                                            <a href="#"><small>(Simultáneo)</small>TALLER</a> 
                                        </h2>
                                        
                                        <p>Ponente: DEVCODE
                                        </p>
                                    </div>

                                    <div class="timeline-entry-child" data-target="taller">
                                    <br>
                                        <h2>
                                            <a href="#"><small>(Simultáneo)</small>TALLER</a> 
                                        </h2>
                                        
                                        <p>Ponente: DEVCODE
                                        </p>
                                    </div>

                                    
                                </div>
                            </div>                            
                        </article> 

                        <article class="timeline-entry right-aligned">
                           <div class="timeline-entry-inner ">
                                <time class="timeline-time margen-derecha" datetime="2014-01-10T03:45"><span class="hora">14:30-16:30</span> <span class="hora" >Martes 19</span></time>
                                
                                 <div class="timeline-icon bg-success">
                                    <i class="entypo-camera"></i>
                                </div>
                                <div class="timeline-label">
                                    <div class="timeline-entry-child" data-target="magistral">
                                        <h2>
                                            <a href="#"><small>(Simultáneo)</small> TECHNICAL EVANGELIST EN MICROSOFT </a> 
                                            <img class="img-thumbnail" src="http://www.emol.com/deportes/relatos_envivo/futbol/amistosos/banderas/per.gif">
                                        </h2>
                                        <p>Ponente: Ing. Jorge Oblitas.
                                        </p>
                                    </div>
                                    <br>
                                    
                                    <div class="timeline-entry-child" data-target="especializada">    
                                        <h2>
                                            <a href="#"><small>(Simultáneo)</small> EMPRESARIO CELEBRIDAD </a> 
                                             
                                        </h2>
                                        <p>
                                        </p>
                                    </div>

                                    <div class="timeline-entry-child" data-target="taller">
                                    <br>
                                        <h2>
                                            <a href="#"><small>(Simultáneo)</small>FEDORA, MÁS QUE UN SISTEMA OPERATIVO</a> 
                                        </h2>
                                        
                                        <p>Ponente: Comunidad FEDORA
                                        </p>
                                    </div>

                                    <div class="timeline-entry-child" data-target="taller">
                                    <br>
                                        <h2>
                                            <a href="#"><small>(Simultáneo)</small>DISEÑO GRÁFICO EN FEDORA 20</a> 
                                        </h2>
                                        
                                        <p>Ponente: Comunidad FEDORA
                                        </p>
                                    </div>

                                    <div class="timeline-entry-child" data-target="taller">
                                    <br>
                                        <h2>
                                            <a href="#"><small>(Simultáneo)</small>FEDORA SPIN Y REMIX</a> 
                                        </h2>
                                        
                                        <p>Ponente: Comunidad FEDORA
                                        </p>
                                    </div>
                                </div>
                            </div>                              
                        </article>

                        <article class="timeline-entry left-aligned">
                           <div class="timeline-entry-inner ">
                                <time class="timeline-time margen-izquierda" datetime="2014-01-10T03:45"><span class="hora">17:00-19:00</span> <span class="hora" >Martes 19</span></time>
                                
                                 <div class="timeline-icon bg-success">
                                    <i class="entypo-camera"></i>
                                </div>
                                <div class="timeline-label">
                                    <div class="timeline-entry-child" data-target="magistral">
                                        <h2>
                                            <a href="#"><small>(Simultáneo)</small> LA COMPUTACIÓN AUTONÓMICA Y LA AUTOADMINISTRACIÓN DE LAS APLICACIONES INFORMÁTICAS </a> 
                                            <img class="img-thumbnail" src="http://www.emol.com/deportes/relatos_envivo/futbol/amistosos/banderas/per.gif">
                                        </h2>
                                        <p>Ponente: Ing. Felix Armando.
                                        </p>
                                    </div>
                                    <br>
                                    
                                    <div class="timeline-entry-child" data-target="especializada">
                                        <h2>
                                            <a href="#"><small>(Simultáneo)</small> CONTROL Y AUDITORÍA EN CLOUD COMPUTING, ASPECTOS A TENER EN CUENTA PARA EVALUAR LOS CONTROLES DE UN AMBIENTE EN LA NUBE </a> 
                                            
                                        </h2>
                                        <p>Ponente: Dr. Lucio Molina.
                                        </p>
                                    </div>

                                    <div class="timeline-entry-child" data-target="taller">
                                    <br>
                                        <h2>
                                            <a href="#"><small>(Simultáneo)</small>INTERFACES Y ANIMACIONES PARA WINDOWS PHONE UTILIZANDO EXPRESSION BLEND</a> 
                                        </h2>
                                        
                                        <p>Ponente: MSP UNT. Manuel Ruiz. 
                                        </p>
                                    </div>

                                    <div class="timeline-entry-child" data-target="taller">
                                    <br>
                                        <h2>
                                            <a href="#"><small>(Simultáneo)</small>REALIDAD AUMENTADA PARA WINDOWS PHONE 8 Y WINDOWS 8</a> 
                                        </h2>
                                        
                                        <p>Ponente: MSP UPN. Robertho Rodríguez. 
                                        </p>
                                    </div>

                                    <div class="timeline-entry-child" data-target="taller">
                                    <br>
                                        <h2>
                                            <a href="#"><small>(Simultáneo)</small>APLICACIONES UNIVERSALES: TU APLICACIÓN EN TODAS LAS PLATAFORMAS, CON POCO TRABAJO</a> 
                                        </h2>
                                        
                                        <p>Ponente: MSP UPAO. Wilson Vargas. 
                                        </p>
                                    </div>
                                </div>
                            </div>                              
                        </article>

                        <article class="timeline-entry right-aligned">
                           <div class="timeline-entry-inner ">
                                <time class="timeline-time margen-derecha" datetime="2014-01-10T03:45"><span class="hora">19:30-21:30</span> <span class="hora" >Martes 19</span></time>
                                
                                 <div class="timeline-icon bg-primary">
                                    <i class="entypo-camera"></i>
                                </div>
                                <div class="timeline-label">
                                    <div class="timeline-entry-child" data-target="magistral">
                                        <h2>
                                            <a href="#">TECNOLOGÍAS MICROSOFT EN LA NUBE</a> 
                                            <img class="img-thumbnail" src="http://escudosybanderas.es/iconos/icono_bandera-de-costa-rica.png">
                                        </h2>
                                        <p>Ponente: Mg. Michael Arias.
                                        </p>
                                    </div>
                                    <br>
                                    
                                    <div class="timeline-entry-child" data-target="especializada">
                                        <h2>
                                            <a href="#">PONENCIA ESPECIALIZADA</a> 
                                            
                                        </h2>
                                        <p>Ponente: MS. Alberto Mendoza de los Santos.
                                        </p>
                                    </div>
                                </div>
                            </div>                              
                        </article> 

                        <div class="col-xs-8 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8  col-lg-8 pull-right ">
                            <div class="timeline-icon bg-info">
                                <i class="entypo-camera">Miercoles 20</i>
                            </div>    
                        </div> 

                       
                        
                        <article class="timeline-entry left-aligned ">
                           <div class="timeline-entry-inner ">
                                <time class="timeline-time margen-izquierda" datetime="2014-01-10T03:45"><span class="hora">08:00-10:00</span> <span class="hora" >Miercoles 20</span></time>
                                 <div class="timeline-icon bg-primary">
                                    <i class="entypo-camera"></i>
                                </div>
                                <div class="timeline-label">
                                    

                                    <div class="timeline-entry-child" data-target="especializada">
                                        <h2>
                                            <a href="#">ANÁLISIS DE PROCESOS DE NEGOCIOS MEDIANTE MINERÍA DE PROCESOS </a> 
                                            
                                        </h2>
                                        <p>
                                            La Ponencia Especializada de Análisi de Procesos de Negocios mediante Minería de Procesos estará a cargo del Mg.Michael Arias.
                                        </p> 
                                    </div> 

                                    <div class="timeline-entry-child" data-target="taller">
                                        <br>
                                        <h2>
                                            <a href="#">DESARROLLO DE APPS</a> 
                                            
                                        </h2>
                                        <p>
                                            Ponente: Microsoft
                                        </p> 
                                    </div>   
                                    <div class="timeline-entry-child" data-target="taller">
                                        <br>
                                        <h2>
                                            <a href="#">DESARROLLO DE APPS</a> 
                                            
                                        </h2>
                                        <p>
                                            Ponente: Microsoft
                                        </p> 
                                    </div> 
                                    <div class="timeline-entry-child" data-target="taller">
                                        <br>
                                        <h2>
                                            <a href="#">DESARROLLO DE APPS</a> 
                                            
                                        </h2>
                                        <p>
                                            Ponente: Microsoft
                                        </p> 
                                    </div>                               
                                </div>
                            </div>                            
                        </article>

                        <article class="timeline-entry">
                           <div class="timeline-entry-inner ">
                                <time class="timeline-time margen-derecha" datetime="2014-01-10T03:45"><span class="hora">10:30-12:30</span> <span class="hora" >Miercoles 20</span></time>
                                 <div class="timeline-icon bg-info">
                                    <i class="entypo-camera"></i>
                                </div>
                                <div class="timeline-label">
                                    <div class="timeline-entry-child" data-target="magistral">
                                        <h2>
                                            <a href="#"><small>(Simultáneo)</small> CÓMO GENERAR INGRESOS ONLINE A TRAVÉS DE LA PRODUCCIÓN EJECUTIVA</a> 
                                            
                                        </h2>
                                        <p>
                                            Ponente: Productor Ejecutivo Renzo Zamora
                                        </p>
                                    </div>
                                    
                                    <div class="timeline-entry-child" data-target="especializada">
                                        <br>
                                        <h2>
                                            <a href="#"><small>(Simultáneo)</small> TESTING </a> 
                                            
                                        </h2>
                                        <p>
                                            Ponente: Dra. Mónica Wodzislawski
                                        </p>
                                    </div>

                                    <div class="timeline-entry-child" data-target="taller">
                                        <br>
                                        <h2>
                                            <a href="#"><small>(Simultáneo)</small> HERRAMIENTAS PARA MINERÍA DE PROCESOS </a> 
                                            
                                        </h2>
                                        <p>
                                            Ponente: Mg. Michael Arias
                                        </p>
                                    </div>

                                    <div class="timeline-entry-child" data-target="taller">
                                        <br>
                                        <h2>
                                            <a href="#"><small>(Simultáneo)</small> SISTEMA DE GESTIÓN AVANZADA EN PROCESOS </a> 
                                            
                                        </h2>
                                        <p>
                                            Ponente: Ms. David Agreda
                                        </p>
                                    </div>
                                </div>
                            </div>                              
                        </article> 

                        <article class="timeline-entry left-aligned">
                           <div class="timeline-entry-inner ">
                                <time class="timeline-time margen-izquierda" datetime="2014-01-10T03:45"><span class="hora">12:00-13:30</span> <span class="hora" >Miercoles 20</span></time>
                                
                                 <div class="timeline-icon bg-primary">
                                    <i class="entypo-camera"></i>
                                </div>
                                
                                <div class="timeline-label">
                                    <div class="timeline-entry-child" data-target="magistral">
                                        <h2>
                                            <a href="#"> FLUJO DE TRABAJO PARA UN DESARROLLADOR WEB FRONTEND </a> 
                                            <img class="img-thumbnail" src="http://www.nineonline.com.co/images/bandera-de-colombia.png">
                                        </h2>
                                        <p>Ponente: Leonidas Esteban (Colombia-Perú).
                                        </p>
                                    </div>
                                </div>
                            </div>                            
                        </article> 

                        <article class="timeline-entry">
                           <div class="timeline-entry-inner ">
                                <time class="timeline-time margen-derecha" datetime="2014-01-10T03:45"><span class="hora">14:30-17:00</span> <span class="hora" >Miercoles 20</span></time>
                                
                                 <div class="timeline-icon bg-info">
                                    <i class="entypo-camera"></i>
                                </div>
                                
                                <div class="timeline-label">

                                    <div class="timeline-entry-child" data-target="magistral">
                                        <h2>
                                            <a href=""><small>(Simultáneo)</small>
                                                PONENCIA MAGISTRAL
                                            </a>
                                        </h2>
                                        <p>Ponente: Google Perú
                                        </p>
                                    </div>

                                    <div class="timeline-entry-child" data-target="especializada">
                                        <h2>
                                        <a href="#"><small>(Simultáneo)</small> SEGURIDAD DE SERVIDORES WINDOWS</a> 
                                        </h2>
                                        
                                        <p>Ponente: CERTIPRO.
                                        </p>
                                    </div>
                                    <div class="timeline-entry-child" data-target="taller">
                                        <br>
                                        <h2>
                                            <a href="#"><small>(Simultáneo)</small> COMO USAR FEDORA Y NO MORIR EN EL INTENTO</a> 
                                        </h2>
                                        
                                        <p>Ponente: Comunidad FEDORA
                                        </p>
                                    </div>

                                    <div class="timeline-entry-child" data-target="taller">
                                        <br>
                                        <h2>
                                            <a href="#"><small>(Simultáneo)</small> SECURITY WEB CON FEDORA</a> 
                                        </h2>
                                        
                                        <p>Ponente: Comunidad FEDORA
                                        </p>
                                    </div>
                                </div>
                            </div>                              
                        </article>  

                        <article class="timeline-entry" data-target="especializada">
                           <div class="timeline-entry-inner ">
                                <time class="timeline-time margen-derecha" datetime="2014-01-10T03:45"><span class="hora">17:00-19:00</span> <span class="hora" >Miercoles 20</span></time>
                                
                                 <div class="timeline-icon bg-info">
                                    <i class="entypo-camera"></i>
                                </div>
                                
                                <div class="timeline-label">
                                    <div class="timeline-entry-child" data-target="magistral">
                                        <h2>
                                            <a href="#"><small>(Simultáneo)</small>LOCALIZACIÓN Y MAPEO SIMULTÁNEO DE UN ROBOT MÓVIL, UTILIZANDO HARDWARE LIBRE</a> 
                                        </h2>
                                        <p>Ponente: UNMSM
                                        </p>
                                    </div>

                                    <div class="timeline-entry-child" data-target="especializada">
                                        <h2>
                                            <a href="#"><small>(Simultáneo)</small>¿POR QUÉ CERTIFICARTE EN GESTIÓN DE SERVICIOS DE TI – ITIL?</a> 
                                        </h2>
                                        <p>Ponente: CERTIPRO
                                        </p>
                                    </div>

                                    <div class="timeline-entry-child" data-target="taller">
                                        <h2>
                                            <a href="#"><small>(Simultáneo)</small>IBM - MODELADO DE SISTEMAS DE INFORMACIÓN</a> 
                                        </h2>
                                        <p>Ponente: Ms. Juan Santos Fernandez
                                        </p>
                                    </div>

                                    <div class="timeline-entry-child" data-target="taller">
                                        <h2>
                                            <a href="#"><small>(Simultáneo)</small>TALLER</a> 
                                        </h2>
                                        <p>Ponente: Ms. Ricardo Mendoza
                                        </p>
                                    </div>

                                    <div class="timeline-entry-child" data-target="taller">
                                        <h2>
                                            <a href="#"><small>(Simultáneo)</small>TESTING</a> 
                                        </h2>
                                        <p>Ponente: Dra. Monica Wodzislawski
                                        </p>
                                    </div>
                                </div>
                            </div>                              
                        </article>                      

                        <article class="timeline-entry right-aligned ">
                           <div class="timeline-entry-inner ">
                                <time class="timeline-time margen-derecha" datetime="2014-01-10T03:45"><span class="hora">19:30-21:30</span> <span class="hora" >Miercoles 20</span></time>
                                
                                 <div class="timeline-icon bg-success">
                                    <i class="entypo-camera"></i>
                                </div>
                                
                                <div class="timeline-label">
                                    <div class="timeline-entry-child" data-target="magistral">
                                        <h2>
                                            <a href="#"><small>(Simultáneo)</small>WEB SEMANTICA</a> 
                                            <img class="img-thumbnail" src="http://www.emol.com/deportes/relatos_envivo/futbol/amistosos/banderas/per.gif">
                                        </h2>
                                        <p>Ponente: Mg. Edwin Valencia.
                                        </p>
                                    </div>
                                    <br>

                                    <div class="timeline-entry-child" data-target="especializada">
                                        <h2>
                                            <a href="#"><small>(Simultáneo)</small>PONENCIA ESPECIALIZADA</a> 
                                            
                                        </h2>
                                        <p>Ponente: Jorge Oblitas
                                        </p>
                                    </div>  
                                </div>
                            </div>                            
                        </article> 

                        
                        

                         <article class="timeline-entry left-aligned " data-target="evento">
                           <div class="timeline-entry-inner ">
                                <time class="timeline-time margen-izquierda" datetime="2014-01-10T03:45"><span class="hora">22:00-00:00</span> <span class="hora" >Miercoles 20</span></time>
                                
                                 <div class="timeline-icon bg-secondary">
                                    <i class="entypo-camera"></i>
                                </div>
                                
                                <div class="timeline-label">
                                    <h2>
                                        <a href="#">NOCHE DE TALENTOS </a>
                                    </h2>
                                    <p>
                                        Cantas, bailas o haces algo especial? Esta es la oportunidad que estaba esperando, comparte tus taalentos con nosotros participa en nuestra noche de talentos, habra increibles premios. ¡Ven y participa!
                                    </p>
                                </div>
                            </div>                            
                        </article> 


                         <div class="col-xs-8 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8  col-lg-8 pull-right ">
                            <div class="timeline-icon bg-info">
                                <i class="entypo-camera">Jueves 21</i>
                            </div>    
                        </div>   

                        
                        <article class="timeline-entry right-aligned " data-target="magistral">
                           <div class="timeline-entry-inner ">
                                <time class="timeline-time margen-derecha" datetime="2014-01-10T03:45"><span class="hora">08:00-13:00</span> <span class="hora" >Jueves 21</span></time>
                                
                                 <div class="timeline-icon bg-danger">
                                    <i class="entypo-camera"></i>
                                </div>
                                
                                <div class="timeline-label">
                                    <h2>
                                        <a href="#">MAÑANA DE EMPRENDIMIENTO TECNOLÓGICO STARTUP - LIMA VALLEY </a> 
                                    </h2>
                                    
                                    <p>
                                        La Mañana de emprendimiento técnológico Startup estará a cargo de Lima Valley y Trujillo Valley.
                                    </p>                                 
                                </div>
                            </div>
                        </article> 

                        <article class="timeline-entry left-aligned" data-target="especializada">
                           <div class="timeline-entry-inner ">
                                <time class="timeline-time margen-izquierda" datetime="2014-01-10T03:45"><span class="hora">14:30-16:30</span> <span class="hora" >Jueves 21</span></time>
                                
                                 <div class="timeline-icon bg-primary">
                                    <i class="entypo-camera"></i>
                                </div>
                                
                                <div class="timeline-label">
                                    <h2>
                                        <a href="#">GESTIÓN DEL CONOCIMIENTO </a> 
                                        
                                    </h2>
                                    
                                    <p>La Ponencia Especializada de Gestión del Conocimiento estará a cargo del Phd. Augusto Bernuy.
                                    </p>
                                </div>
                            </div>                              
                        </article>

                        <article class="timeline-entry right-aligned" data-target="magistral">
                           <div class="timeline-entry-inner ">
                                <time class="timeline-time margen-derecha" datetime="2014-01-10T03:45"><span class="hora">15:00-17:00</span> <span class="hora" >Jueves 21</span></time>
                                
                                 <div class="timeline-icon bg-primary">
                                    <i class="entypo-camera"></i>
                                </div>
                                
                                <div class="timeline-label">
                                    <h2>
                                        <a href="#">LAS NUEVAS ESTRATEGIAS DE LA DIRECCIÓN DE LA TECNOLOGÍA DE INFORMACIÓN </a> 
                                        <img class="img-thumbnail" src="http://verbguru.com/images/flags/small_CL.gif">
                                    </h2>
                                    
                                    <p>La conferencia de Las nuevas estrategias de la dirección de la tecnología de información estará a cargo del Mg. Isaac Castillo Chalco (Chile - Perú).
                                    </p>
                                </div>
                            </div>                              
                        </article>

                        <article class="timeline-entry left-aligned" data-target="especializada">
                           <div class="timeline-entry-inner ">
                                <time class="timeline-time margen-izquierda" datetime="2014-01-10T03:45"><span class="hora">17:00-19:00</span> <span class="hora" >Jueves 21</span></time>
                                
                                 <div class="timeline-icon bg-primary">
                                    <i class="entypo-camera"></i>
                                </div>
                                
                                <div class="timeline-label">
                                    <h2>
                                        <a href="#">¿POR QUÉ CERTIFICARTE EN GESTIÓN DE SERVICIOS DE TI-ITIL? - CERTIPRO </a> 
                                    </h2>
                                    
                                    <p>La Ponencia Especializada estará a cargo de CERTIPRO.
                                    </p>
                                    <br>

                                    <h2>
                                        <a href="#">PONENCIA ESPECIALIZADA </a> 
                                    </h2>
                                    
                                    <p>La Ponencia Especializada estará a cargo del Dr. Nelson Piedra.
                                    </p>
                                </div>
                            </div>                              
                        </article>

                        <article class="timeline-entry right-aligned" data-target="magistral">
                           <div class="timeline-entry-inner ">
                                <time class="timeline-time margen-derecha" datetime="2014-01-10T03:45"><span class="hora">17:30-19:30</span> <span class="hora" >Jueves 21</span></time>
                                
                                 <div class="timeline-icon bg-primary">
                                    <i class="entypo-camera"></i>
                                </div>
                                
                                <div class="timeline-label">
                                    <h2>
                                        <a href="#">TENDENCIA EN EL EMPRENDIMIENTO TECNOLÓGICO LATINOAMERICANO </a> 
                                        <img class="img-thumbnail" src="http://banderas.gratis.es/banderas_gratis/flags_of_Guatemala.gif">
                                    </h2>
                                    
                                    <p>La conferencia de Tendencia en el emprendimiento tecnológico latinoamericano estará a cargo de la Lic. Stephanie Falla (Guatemala).
                                    </p>
                                </div>
                            </div>                              
                        </article>

                        <article class="timeline-entry left-aligned" data-target="especializada">
                           <div class="timeline-entry-inner ">
                                <time class="timeline-time margen-izquierda" datetime="2014-01-10T03:45"><span class="hora">19:30-21:30</span> <span class="hora" >Jueves 21</span></time>
                                
                                 <div class="timeline-icon bg-primary">
                                    <i class="entypo-camera"></i>
                                </div>
                                
                                <div class="timeline-label">
                                    <h2>
                                        <a href="#">BUSINESS PROCESS MANAGEMENT </a> 
                                        
                                    </h2>
                                    
                                    <p>La Ponencia Especializada estará a cargo del Mg. Issac Castillo.
                                    </p>
                                </div>
                            </div>                              
                        </article>
                        
                        <article class="timeline-entry right-aligned" data-target="evento">
                           <div class="timeline-entry-inner ">
                                <time class="timeline-time margen-derecha" datetime="2014-01-10T03:45"><span class="hora">20:00-21:30</span> <span class="hora" >Jueves 21</span></time>
                                
                                 <div class="timeline-icon bg-danger">
                                    <i class="entypo-camera"></i>
                                </div>
                                
                                <div class="timeline-label">
                                    <h2>
                                        <a href="#">CONCURSO FORO SISTÉMICO </a> 
                                    </h2>
                                    <p>
                                        Pensar de forma sistémica ayuda a resolver problemas complejos. Demuestra tus conocimientos aplicándolos a un escenario de nuestra realidad. ¡Ayudemos a construir un Perú mejor!
                                    </p>
                                </div>
                            </div>                              
                        </article> 

                        <div class="col-xs-8 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8  col-lg-8 pull-right ">
                            <div class="timeline-icon bg-info">
                                <i class="entypo-camera">Viernes 22</i>
                            </div>    
                        </div> 

                        <article class="timeline-entry left-aligned ">
                           <div class="timeline-entry-inner ">
                                <time class="timeline-time margen-izquierda" datetime="2014-01-10T03:45"><span class="hora">8:00-10:00</span> <span class="hora" >Viernes 22</span></time>
                                
                                 <div class="timeline-icon bg-success">
                                    <i class="entypo-camera"></i>
                                </div>
                                
                                <div class="timeline-label">
                                    <div class="timeline-entry-child" data-target="magistral">
                                        <h2>
                                            <a href="#">INNOVACIÓN SOCIAL </a> 
                                            <img class="img-thumbnail" src="http://www.emol.com/deportes/relatos_envivo/futbol/amistosos/banderas/per.gif">
                                        </h2>
                                        
                                        <p>La conferencia de gestión del conocimiento estará a cargo de la Phd. Augusto Bernuy Alva (USMP - Peru).
                                        </p>
                                    </div>
                                    <br>

                                    <div class="timeline-entry-child" data-target="especializada">
                                        <h2>
                                            <a href="#">EDUCACIÓN A PLATAFORMA ONLINE </a> 
                                            
                                        </h2>
                                        
                                        <p>La Ponencia Especializad de Educación a Plataforma Online estará a cargo de la Lic. Stephanie Falla.
                                        </p>
                                    </div>
                                </div>
                            </div>                              
                        </article>  

                        
                        

                        <article class="timeline-entry right-aligned">
                           <div class="timeline-entry-inner ">
                                <time class="timeline-time margen-derecha" datetime="2014-01-10T03:45"><span class="hora">10:30-12:30</span> <span class="hora" >Viernes 22</span></time>
                                
                                 <div class="timeline-icon bg-success">
                                    <i class="entypo-camera"></i>
                                </div>
                                
                                <div class="timeline-label">
                                    <div class="timeline-entry-child" data-target="magistral">
                                        <h2>
                                            <a href="#"><small>(Simultáneo 10:30-11:30)</small> JAVA Y EL INTERNET DE LAS COSAS </a> 
                                            <img class="img-thumbnail" src="http://www.emol.com/deportes/relatos_envivo/futbol/amistosos/banderas/per.gif">
                                        </h2>
                                        
                                        <p>La conferencia de Java y el Internet de las Cosas estará a cargo del Mg. Edwin Maraví (CJAVA - Perú).
                                        </p>
                                    </div>
                                    <br>

                                    <div class="timeline-entry-child" data-target="especializada">
                                        <h2>
                                            <a href="#"><small>(Simultáneo 10:30-12:30)</small> DESARROLLO DE APLICACIONES MOBILES MULTIPLATAFORMA </a> 
                                        </h2>
                                        
                                        <p>La Ponencia Especializada de Desarrollo de Aplicaciones Mobiles Multiplataforma estará a cargo del Ing. Victor Altamirano
                                        </p>
                                    </div>
                                </div>
                            </div>                              
                        </article>

                        <article class="timeline-entry left-aligned" data-target="magistral">
                           <div class="timeline-entry-inner ">
                                <time class="timeline-time margen-izquierda" datetime="2014-01-10T03:45"><span class="hora">12:00-14:00</span> <span class="hora" >Viernes 22</span></time>
                                
                                 <div class="timeline-icon bg-primary">
                                    <i class="entypo-camera"></i>
                                </div>
                                
                                <div class="timeline-label">
                                    <h2>
                                        <a href="#">LAS INTERFACES CEREBRO - COMPUTADOR (BCI) </a> 
                                        <img class="img-thumbnail" src="http://img.irtve.es/deportes/pekin08/css/i/banderas/FRA_th.gif">
                                    </h2>
                                    
                                    <p>La conferencia de Las Interfaces Cerebro - Computador (BCI) estará a cargo del Phd. Avid Roman (Francia - Perú).
                                    </p>
                                </div>
                            </div>                              
                        </article>

                        <article class="timeline-entry right-aligned" data-target="especializada">
                           <div class="timeline-entry-inner ">
                                <time class="timeline-time margen-derecha" datetime="2014-01-10T03:45"><span class="hora">12:30-14:30</span> <span class="hora" >Viernes 22</span></time>
                                
                                 <div class="timeline-icon bg-primary">
                                    <i class="entypo-camera"></i>
                                </div>
                                
                                <div class="timeline-label">
                                    <h2>
                                        <a href="#">IMPORTANCIA DE LA SEGURIDAD DIGITAL: "MI MATRIMONIO ESTÁ EN TUS MANOS"</a> 
                                    </h2>
                                    
                                    <p>La Ponencia Especializad de la Importancia de la Seguridad Digital: "Mi Matrimonio está en tus manos" estará a cargo del Ms. Omar Palomino.
                                    </p>
                                </div>
                            </div>                              
                        </article>

                        <article class="timeline-entry left-aligned " data-target="evento">
                           <div class="timeline-entry-inner ">
                                <time class="timeline-time margen-izquierda" datetime="2014-01-10T03:45"><span class="hora">15:00-17:00</span> <span class="hora" >Viernes 22</span></time>
                                
                                 <div class="timeline-icon bg-info">
                                    <i class="entypo-camera"></i>
                                </div>
                                
                                <div class="timeline-label">
                                    <h2>
                                        <a href="#">MESA REDONDA - ACREDITACIÓN Y LEY UNIVERSITARIA</a> 
                                    
                                    </h2>
                                    
                                    <p>TEMA: Acreditación de las escuelas de ingeniería.
                                    </p>
                                </div>
                            </div>                            
                        </article> 

                        <article class="timeline-entry right-aligned" data-target="evento">
                           <div class="timeline-entry-inner ">
                                <time class="timeline-time margen-derecha" datetime="2014-01-10T03:45"><span class="hora">17:30-20:00</span> <span class="hora" >Viernes 22</span></time>
                                
                                 <div class="timeline-icon bg-warning">
                                    <i class="entypo-camera"></i>
                                </div>
                                
                                <div class="timeline-label">
                                    <h2>
                                        <a href="#">CEREMONIA DE CLAUSURA </a> 
                                    </h2>
                                    
                                    <p>
                                    </p>
                                </div>
                            </div>                              
                        </article> 
                        

                         <article class="timeline-entry left-aligned " data-target="evento">
                           <div class="timeline-entry-inner ">
                                <time class="timeline-time margen-izquierda" datetime="2014-01-10T03:45"><span class="hora">22:00</span> <span class="hora" >Viernes 22</span></time>
                                 
                                <div class="timeline-icon bg-secondary">
                                    <i class="entypo-camera"></i>
                                </div>

                                <div class="timeline-label">
                                    
                                    <h2>
                                        <a href="#">FIESTA DE GALA Y ENTREGA DE PREMIOS Y CERTIFICADOS </a>
                                    </h2>
                                    <p>
                                      
                                    </p>
                                </div>
                                <span class=""> <img class="img-spc"  data-src="./assets/images/party.png"></span>
                            </div>                            
                        </article> 



                        <article class="timeline-entry begin">
                        
                            <div class="timeline-entry-inner">
                                
                                <div class="timeline-icon" style="-webkit-transform: rotate(-90deg); -moz-transform: rotate(-90deg);">
                                    <i class="entypo-flight"></i>
                                </div>
                                
                            </div>
                            
                        </article>
                        
                    </div>
                </div>
            </div>
        </div>
<?php endblock(); ?>  
    
<?php startblock('scripts'); ?>
    <script src="js/main.js"></script>
<?php endblock(); ?>