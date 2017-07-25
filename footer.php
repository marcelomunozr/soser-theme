
            </div>
        </div>
        <div class="container">
            <div class="row footer-row">
                <footer>
                    <div class="contenido">
                        <div class="menu-footer">
                            <a href="/">Inicio</a>
                            <a href="/nosotros/quienes-somos/">Nosotros</a>
                            <a href="/servicios/">Servicios</a>
                            <a href="/proveedores/">Proveedores</a>
                            <a href="/noticias/">Noticias</a>
                            <a href="/trabaja-con-nosotros/">Trabaja con Soser</a>
                            <a href="/contacto/">Contacto</a>
                            <a href="http://inovagestion.cl/soser/index.php" target="_blank" class="intranet-btn">Intranet</a>
                        </div>
                        <p><strong>CASA MATRIZ:</strong> Avenida La Dehesa Nº 181 Oficina 613, Lo Barnechea, Santiago, Chile / Teléfonos: (56-2) 29574153 / (56-2) 29574152 / mail: <a href="mailto:info@soser.cl">info@soser.cl</a></p>
                    </div>
                    <div class="imagen">
                        <?php if ( is_front_page() ) {?>
                            <img src="<?php bloginfo('template_url'); ?>/images/footer-vitaminas.png" class="foot01">
                        <?php } else {?>
                            <a href="/rico-y-sano/"><img src="<?php bloginfo('template_url'); ?>/images/footer-rico-sano.png" class="foot02"></a>
                            <div class="clear20"></div>
                        <?php }?>
                    </div>
                    <div class="clearfix"></div>
                </footer>
            </div>
        </div>


        <script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>


        <!-- Google Analytics -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    <?php wp_footer(); ?>
     <link href="http://api.multinet.cl/utils/css/kit_contacto_soser.css" rel="stylesheet"> <div class="mtn"> <div class="barra clearfix"> <div class="mtn_container"> <div class="template"> <div class="mtn_col-sm-6 llama"> <p><span class="mtn_glyphicon mtn_glyphicon-phone mtn_hidden-xs"></span> Llámanos: <a href="tel:+56229574153">295 741 53</a>&nbsp;-&nbsp;<a href="tel:+56968462398">968462398</a></p></div><div class="mtn_col-sm-6"><button id="btn-contacto" type="button" class="mtn_btn mtn_btn-primary mtn_btn-lg mtn_pull-right contacto">Contáctanos <span class="mtn_glyphicon mtn_glyphicon-arrow-down"></span><span class="mtn_glyphicon mtn_glyphicon-arrow-up" style="display: none"></span></button></div></div></div></div><div class="formulario clearfix" style="display: none"> <div class="mtn_container"> <form id="contacteitor"> <input type="hidden" value="3" name="data[Contact][client_id]" id="ContactClientId" > <input type="hidden" value="55e88b878869a9ca3cc34a1edfe1578cd9e23538" name="data[Contact][token]" id="ContactClientToken"/> <div class="mtn_col-sm-6"> <div class="mtn_form-group"> <label for="nombre" class="mtn_sr-only">Nombres</label> <input type="text" class="mtn_form-control" id="MtnFormFirstname" name="data[Contact][firstname]" placeholder="Nombres" required> </div></div><div class="mtn_col-sm-6"> <div class="mtn_form-group"> <label for="apellido" class="mtn_sr-only">Apellidos</label> <input type="text" class="mtn_form-control" id="MtnFormLastname" name="data[Contact][lastname]" placeholder="Apellidos" required> </div></div><div class="mtn_col-sm-6"> <div class="mtn_form-group"> <label for="email" class="mtn_sr-only">Email</label> <input type="email" class="mtn_form-control" id="MtnFormEmail" name="data[Contact][email]" placeholder="Email" required> </div></div><div class="mtn_col-sm-6"> <div class="mtn_form-group"> <label for="telefono" class="mtn_sr-only">Teléfono</label> <input type="text" class="mtn_form-control" id="MtnFormTelephone" name="data[Contact][telephone]" placeholder="Teléfono"> </div></div><div class="mtn_col-sm-12"> <div class="mtn_form-group"> <label for="mensaje" class="mtn_sr-only">Mensaje</label> <textarea name="data[Contact][message]" id="MtnFormMessage" class="mtn_form-control" rows="3" placeholder="Mensaje" required></textarea> </div></div><div class="mtn_text-center"> <button id="btn-submit" type="submit" class="mtn_btn mtn_btn-primary mtn_btn-lg">Enviar</button> </div><div id="formalert" class="mtn_alert mtn_alert-warning alert-dismissible" role="alert" style="display:none;"> <span id="texto-alerta"></span> </div></form> <span id="MtnCloseModal" class="mtn_glyphicon mtn_glyphicon-remove-circle"></span> </div></div><script>jQuery(document).ready(function($){var open=false; $('body').css('margin-top', '20px'); $(window).scroll(function(){if ($(".mtn").offset().top > 68){$(".mtn").addClass("scroll");}else{$(".mtn").removeClass("scroll");}}); $('body').on('click', '#btn-contacto', function(e){if(!open){$('.mtn .formulario').slideDown(); open=true; $('.mtn_glyphicon-arrow-down').addClass('active');}else{$('.mtn .formulario').slideUp(); open=false; $('.mtn_glyphicon-arrow-down').removeClass('active');}e.preventDefault();}); $('body').on('click', '#MtnCloseModal', function(e){if(!open){$('.mtn .formulario').slideDown(); open=true; $('.mtn_glyphicon-arrow-down').addClass('active');}else{$('.mtn .formulario').slideUp(); open=false; $('.mtn_glyphicon-arrow-down').removeClass('active');}e.preventDefault();}); $('body').on('submit', '#contacteitor', function(e){var nombre=$('#MtnFormFirstname').val(); var apellido=$('#MtnFormLastname').val(); var email=$('#MtnFormEmail').val(); var mensaje=$('#MtnFormMessage').val(); $("#btn-submit").prop("disabled", true); if(nombre !='' && apellido !='' && email !='' && mensaje !=''){$.ajax({url: 'http://api.multinet.cl/utils/api/contacto', method: 'post', data: $('#contacteitor').serialize(), success: function(resp){$('#texto-alerta').text("¡Su solicitud ha sido enviada con exito!"); $('#contacteitor')[0].reset(); $('#formalert').fadeIn(500, function(){setTimeout(function(){$('#formalert').fadeOut(500); if(!open){$('.mtn .formulario').slideDown(); open=true;}else{$('.mtn .formulario').slideUp(); open=false;}}, 7000);});}, error: function(err){$('#texto-alerta').text("Ha ocurrido un error al enviar los datos"); $('#formalert').fadeIn(500, function(){setTimeout(function(){$('#formalert').fadeOut(500); if(!open){$('.mtn .formulario').slideDown(); open=true;}else{$('.mtn .formulario').slideUp(); open=false;}}, 7000);});}});}else{$('#texto-alerta').text("Debe llenar el formulario para continuar"); $('#formalert').fadeIn(500, function(){setTimeout(function(){$('#formalert').fadeOut(500);}, 7000);});}$("#btn-submit").prop("disabled", false); e.preventDefault();});}); </script> </div>
    </body>
</html>
