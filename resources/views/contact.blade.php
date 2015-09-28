@extends('layouts/layout')
@section('title','Contacto- Viajes a Ica y Paracas')
@section('description','')

@section('content')

<section id="contact">
 	<div class="intro_title">
    	<h1 class="animated fadeInDown">Contáctanos</h1>
    	<p class="animated fadeInDown">Y empieza la aventura</p>
        <p class="animated fadeInDown"></p>
       
	</div>
</section><!-- End hero -->

<div class="container margin_60">
	<div class="row">
		<div class="col-md-8 col-sm-8">
			<div class="form_title">
				<h3><strong><i class="icon-pencil"></i></strong>Rellena este pequeño formulario</h3>
				<p>
					Te responderemos a la brevedad
				</p>
			</div>
			<div class="step">
            
				<div id="message-contact"></div>
				<form  id="contact_form" autocomplete="off" >
					<div class="row">

						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label>Nombre</label>
								<input type="text" class="form-control" id="name_contact" name="name_contact" placeholder="Ingresa aqui tu nombre">
							</div>
						</div>

						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label>Pais</label>
							<select class="form-control" name="country" id="country">
								<option value="Selecciona tu país" selected>Selecciona tu país</option>
								<option value="Europe">Europe</option>
								<option value="United states">United states</option>
								<option value="Asia">Asia</option>
							</select>
							</div>
						</div>
						
					</div>
					<!-- End row -->
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label>Email</label>
								<input type="email" id="email_contact" name="email_contact" class="form-control" placeholder="Ingresa aqui tu email">
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label>Telefono</label>
								<input type="text" id="phone_contact" name="phone_contact" class="form-control" placeholder="Ingresa aqui tu telefono">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Mensaje</label>
								<textarea rows="5" id="message_contact" name="message_contact" class="form-control" placeholder="Cuéntanos un poco más de tu viaje" style="height:200px;"></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<input type="submit" value="Enviar" class="btn_full" id="submit_btn">
						</div>
						<div class="col-md-12">
							<div id="result"></div>
						</div>
					</div>
				</form>
			</div>
		</div><!-- End col-md-8 -->
        
		<div class="col-md-4 col-sm-4">
			<div class="box_style_1">
				
				<h4>Dirección <span><i class="icon-pin pull-right"></i></span></h4>
				<p>
					 Jr. Audiencia 227. San Isidro, Lima - Perú 
				</p>
				<hr>
				<h4>Escríbenos al correo<span><i class="icon-mail pull-right"></i></span></h4>
				
				<ul id="contact-info">
					
					<li><a href="#">info@domain.com</a></li>
				</ul>
			</div>
			<div class="box_style_4">
				<i class="icon_set_1_icon-57"></i>
				<h4>Tienes alguna duda? </h4>
				<a href="tel://004542344599" class="phone">(51) 01 440-8819</a>
				<a href="tel://004542344599" class="phone">(51) 01 9856 19968</a>
				<small>Lunes a Viernes de 9am a 7pm</small>
			</div>
		</div><!-- End col-md-4 -->
	</div><!-- End row -->
</div><!-- End container -->


<div>
	<div id="map" class="map"></div>
</div><!-- End Map -->

<div id="directions">
  	<div class="container">
    	<div class="row">
        <div class="col-md-8 col-md-offset-2">
       <form action="http://maps.google.com/maps" method="get" target="_blank">
				<div class="input-group">
					<input type="text" name="saddr" placeholder="Ingresa tu punto de partida" class="form-control style-2" />
					<input type="hidden" name="daddr" value="Turinet Perú, Calle Audiencia 227, San Isidro 15046, Perú"/><!-- Write here your end point -->
					<span class="input-group-btn">
					<button class="btn" type="submit" value="Get directions" style="margin-left:0;">Obtener ruta</button>
					</span>
				</div><!-- /input-group -->
			</form>
          </div>
        </div>
    </div>
  </div><!-- end directions-->


@endsection

@section('script')

<!-- Map -->
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script src="js/map-company.js"></script>
<script src="js/infobox.js"></script>
<script src="js/contact-form.js"></script>

@endsection