@extends('layouts/layout')
@section('title','VIP- Viajes a Ica y Paracas')
@section('description','')

@section('content')

<section id="guide-ica">
 	<div class="intro_title">
    	<h1 class="animated fadeInDown">ICA</h1>
        <p class="animated fadeInDown">Mar, sol y arena</p>
       
	</div>
</section><!-- End hero -->


<div class="white_bg">
	<div class="container margin_30">
		
		<div class="fadeIn" data-wow-delay="0.1s">
		
			<div class="box_style_2">
				<p>
					Ica es conocida por ser la región de la arena y el mar, de oasis y valles, de reservas naturales con gran biodiversidad, de beatos y brujos, de pisco y buen vino, de devociones populares como el Señor de Luren. Fue en estas tierras, en sus arenas, en las que florecieron importantes civilizaciones, dejando huellas que han perdurado con el paso del tiempo. Hoy es centro de una cultura originada por los descendientes de esclavos negros traídos por los españoles, que  dejaron como legado la música afroperuana al mezclar nuestras culturas. Lugar mágico lleno de misterio con gente cálida esperando por ti. 
				</p>
			</div>

		</div>

	</div>

<div class="container">
   <div class="panel-group" id="accordion">
                  <div class="panel panel-default">
                    <div class="background-primary head-title">
                      <h4 class="panel-title">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Datos útiles<i class="indicator icon-minus pull-right"></i></a>
                      </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                      <div class="panel-body">
                       
                       	<div class="row">
                       		
                       		<div class="col-md-6">
                       			<h4>Ubicación</h4>
                       			<p>
                       				Departamento de Ica, provincia de Pisco en Perú. 
                       			</p>
                       		</div>

                       		<div class="col-md-6">
                       			<h4>Extensión</h4>
                       			<p>
                       				335,000 hectáreas, de las cuales 117,406 son de tierra firme y 217,594 de aguas marinas. 
                       			</p>
                       		</div>

                       	</div>

                       	<div class="row">
	                       	<div class="col-md-6">
	                       		<h4>Clima</h4>

	                       		<div class="row">
	                       			
	                       			<div class="col-md-6">
										<p>Temperatura máxima</p>
										<h4>32ºC</h4>
	                       			</div>

	                       			<div class="col-md-6">
										<p>Temperatura mínima</p>
										<h4>9ºC</h4>
	                       			</div>
	                     			

	                       		</div>

	                       	</div>

	                       	<div class="col-md-6">
	                       		<h4>Altitud</h4>

	                       		<div class="row">
	                       			
	                       			<div class="col-md-6">
										<p>Mínima</p>
										<h4>2 MSNM</h4>
	                       			</div>

	                       			<div class="col-md-6">
										<p>Máxima</p>
										<h4>4.893 MSNM</h4>
	                       			</div>
	                     			

	                       		</div>

	                       	</div>
                       	</div>

                       	<div class="row">

                       		<div class="col-md-12">
								<h4>Población</h4>
								<h4>836.586 habitantes</h4>

                       		</div>

                       	</div>

                      </div>
                    </div>
                  </div>

                  <div class="panel panel-default">
                    <div class="background-secondary head-title">
                      <h4 class="panel-title">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Atractivos turísticos<i class="indicator icon-plus pull-right"></i></a>
                      </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                      <div class="panel-body">
                       		
                       		<!--Attractive 1-->
							<div class="strip_all_tour_list">
						    	<div class="row">

							    	<div class="col-lg-3 col-md-3 col-sm-3">
						            	<div class="img_list">
						               	 	<a href="single_tour.html">
						                	<img src="{{ asset('img/guide/guide-1.jpg') }}" alt=""> 
						                	</a>
						                </div>
								   </div>
							        <div class="clearfix visible-xs-block"></div>
							        <div class="col-lg-9 col-md-9 col-sm-9">
							               	<div class="tour_list_desc">
							        			<div class="rating"><i class="icon-smile voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile voted"></i></div>
							                    <h3><strong>Catedral</strong></h3>
							                    <p>Inicialmente fue parte del conjunto monumental de la Compañía de Jesús. La construcción original data del siglo XVIII, pero fue remodelada en 1814.Debido al terremoto del año 2007 su estructura fue muy dañada por ello hoy en día no se puede acceder a su interior.</p>
							                    <p>
							                    <strong>Ubicación: </strong>Plaza de armas.
							                    </p>     
							                 </div>
							        </div>
											           
						        </div>
							</div><!--End strip -->

							<!--Attractive 2-->
							<div class="strip_all_tour_list">
						    	<div class="row">

							    	<div class="col-lg-3 col-md-3 col-sm-3">
						            	<div class="img_list">
						               	 	<a href="single_tour.html">
						                	<img src="{{ asset('img/guide/guide-14.jpg') }}" alt=""> 
						                	</a>
						                </div>
								   </div>
							        <div class="clearfix visible-xs-block"></div>
							        <div class="col-lg-9 col-md-9 col-sm-9">
							               	<div class="tour_list_desc">
							        			<div class="rating"><i class="icon-smile voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile voted"></i></div>
							                    <h3><strong>Bodega Vista Alegre</strong></h3>
							                    <p>Tradicional bodega dedicada a la elaboración de vino y pisco. Todavía conserva características de la usanza colonial para procesar la vid.</p>
							                     <strong>Ubicación: </strong>A 3 Km al noroeste de la ciudad de Ica (10 minutos).
							                 </div>
							        </div>
											           
						        </div>
							</div><!--End strip -->

							<!--Attractive 3-->
							<div class="strip_all_tour_list">
						    	<div class="row">

							    	<div class="col-lg-3 col-md-3 col-sm-3">
						            	<div class="img_list">
						               	 	<a href="single_tour.html">
						                	<img src="{{ asset('img/guide/guide-2.jpg') }}" alt=""> 
						                	</a>
						                </div>
								   </div>
							        <div class="clearfix visible-xs-block"></div>
							        <div class="col-lg-9 col-md-9 col-sm-9">
							               	<div class="tour_list_desc">
							        			<div class="rating"><i class="icon-smile voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile voted"></i></div>
							                    <h3><strong>Viña Tacama</strong></h3>
							                    <p>Dedicada a la elaboración de vino y pisco. Propiedad de los jesuitas durante la colonia, aún conserva de la época la casona y las viejas caballerizas.</p>
							                     <strong>Ubicación: </strong>A 7 Km al noreste de la ciudad de Ica (20 minutos).
							                 </div>
							        </div>
											           
						        </div>
							</div><!--End strip -->

							<!--Attractive 4-->
							<div class="strip_all_tour_list">
						    	<div class="row">

							    	<div class="col-lg-3 col-md-3 col-sm-3">
						            	<div class="img_list">
						               	 	<a href="single_tour.html">
						                	<img src="{{ asset('img/guide/guide-3.jpg') }}" alt=""> 
						                	</a>
						                </div>
								   </div>
							        <div class="clearfix visible-xs-block"></div>
							        <div class="col-lg-9 col-md-9 col-sm-9">
							               	<div class="tour_list_desc">
							        			<div class="rating"><i class="icon-smile voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile voted"></i></div>
							                    <h3><strong>Bodega Ocucaje </strong></h3>
							                    <p>La bodega muestra las técnicas empleadas para la producción de pisco y vino que tienen una larga tradición en la región.</p>
							                      <strong>Ubicación: </strong>A 34 km al suroeste de la ciudad de Ica (45 minutos).       
							                 </div>
							        </div>
											           
						        </div>
							</div><!--End strip -->

							<!--Attractive 5-->
							<div class="strip_all_tour_list">
						    	<div class="row">

							    	<div class="col-lg-3 col-md-3 col-sm-3">
						            	<div class="img_list">
						               	 	<a href="single_tour.html">
						                	<img src="{{ asset('img/guide/guide-4.jpg') }}" alt=""> 
						                	</a>
						                </div>
								   </div>
							        <div class="clearfix visible-xs-block"></div>
							        <div class="col-lg-9 col-md-9 col-sm-9">
							               	<div class="tour_list_desc">
							        			<div class="rating"><i class="icon-smile voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile voted"></i></div>
							                    <h3><strong>Bodegas Artesanales </strong></h3>
							                    <p>En ellas se elabora el pisco de manera tradicional utilizando alambiques fabricados en la época colonial. En el valle de Ica existen más de 85 bodegas artesanales, entre las que destacan las bodegas Lazo, Catador, Sotelo, Álvarez, Mendoza y Acuache. </p>
							                            
							                 </div>
							        </div>
											           
						        </div>
							</div><!--End strip -->

							<!--Attractive 6-->
							<div class="strip_all_tour_list">
						    	<div class="row">

							    	<div class="col-lg-3 col-md-3 col-sm-3">
						            	<div class="img_list">
						               	 	<a href="single_tour.html">
						                	<img src="{{ asset('img/guide/guide-5.jpg') }}" alt=""> 
						                	</a>
						                </div>
								   </div>
							        <div class="clearfix visible-xs-block"></div>
							        <div class="col-lg-9 col-md-9 col-sm-9">
							               	<div class="tour_list_desc">
							        			<div class="rating"><i class="icon-smile voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile voted"></i></div>
							                    <h3><strong>Laguna de Huacachina</strong></h3>
							                    <p>Tradicional lugar de descanso para los iqueños. Oasis en medio del desierto, conformando un espléndido paisaje de palmeras, huarangos y dunas, donde se practica el sandboarding.</p>
							                     <strong>Ubicación: </strong>A 5 Km al suroeste de la ciudad de Ica (10 minutos).             
							                 </div>
							        </div>
											           
						        </div>
							</div><!--End strip -->

							<!--Attractive 7-->
							<div class="strip_all_tour_list">
						    	<div class="row">

							    	<div class="col-lg-3 col-md-3 col-sm-3">
						            	<div class="img_list">
						               	 	<a href="single_tour.html">
						                	<img src="{{ asset('img/guide/guide-7.jpg') }}" alt=""> 
						                	</a>
						                </div>
								   </div>
							        <div class="clearfix visible-xs-block"></div>
							        <div class="col-lg-9 col-md-9 col-sm-9">
							               	<div class="tour_list_desc">
							        			<div class="rating"><i class="icon-smile voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile voted"></i></div>
							                    <h3><strong>Pueblo de Cachiche</strong></h3>
							                    <p>Según la tradición Cachiche era un pueblo famoso por sus brujas, quienes curaban toda clase de males y daños. Se puede observar la palmera de las siete cabezas, surgidas de un mismo tronco.</p>
							                    <strong>Ubicación: </strong>A 4 Km al suroeste de la ciudad de Ica (5 minutos).         
							                 </div>
							        </div>
											           
						        </div>
							</div><!--End strip -->

							<!--Attractive 8-->
							<div class="strip_all_tour_list">
						    	<div class="row">

							    	<div class="col-lg-3 col-md-3 col-sm-3">
						            	<div class="img_list">
						               	 	<a href="single_tour.html">
						                	<img src="{{ asset('img/guide/guide-8.jpg') }}" alt=""> 
						                	</a>
						                </div>
								   </div>
							        <div class="clearfix visible-xs-block"></div>
							        <div class="col-lg-9 col-md-9 col-sm-9">
							               	<div class="tour_list_desc">
							        			<div class="rating"><i class="icon-smile voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile voted"></i></div>
							                    <h3><strong>Playas y desiertos</strong></h3>
							                    <p>Zona de hermosas playas, ideales para practicar pesca, caza submarina y acampar. Destacan El Morro, El Negro, La Hierba, Lomitas, Oyeros, Antana, Barlovento y La Cueva. Es necesario cruzar el desierto para visitarlas, con la compañía de un guía y movilidad apropiada.</p>
							                    <strong>Ubicación: </strong>A 60 Km de la localidad de Ocucaje.                
							                 </div>
							        </div>
											           
						        </div>
							</div><!--End strip -->

							<!--Attractive 9-->
							<div class="strip_all_tour_list">
						    	<div class="row">

							    	<div class="col-lg-3 col-md-3 col-sm-3">
						            	<div class="img_list">
						               	 	<a href="single_tour.html">
						                	<img src="{{ asset('img/guide/guide-12.jpg') }}" alt=""> 
						                	</a>
						                </div>
								   </div>
							        <div class="clearfix visible-xs-block"></div>
							        <div class="col-lg-9 col-md-9 col-sm-12">
							               	<div class="tour_list_desc">
							        			<div class="rating"><i class="icon-smile voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile voted"></i></div>
							                    <h3><strong>Reserva Nacional de Paracas </strong></h3>
							                    <p>Con 335 mil ha, este lugar es refugio de lobos marinos, pingüinos de Humboldt, flamencos o parihuanas y muchas otras aves. Se pueden realizar diversas visitas en la reserva, pues cuenta con numerosos atractivos naturales y arqueológicos. Uno de ellos es el Candelabro, un geoglifo de más de 120 metros de extensión que puede observarse mejor desde el mar. 
												El Centro de Interpretación ofrece una interesante explicación de la biodiversidad y los peligros que afronta la zona. En el Museo de Sitio Julio C. Tello se exhibe permanentemente piezas de la cultura Paracas halladas en los cementerios de la zona.</p>
							                    <strong>Ubicación: </strong>A 250 km al sur de la ciudad de Lima (3 horas).  
							                 </div>
							        </div>
											           
						        </div>
							</div><!--End strip -->

							<!--Attractive 10-->
							<div class="strip_all_tour_list">
						    	<div class="row">

							    	<div class="col-lg-3 col-md-3 col-sm-3">
						            	<div class="img_list">
						               	 	<a href="single_tour.html">
						                	<img src="{{ asset('img/guide/guide-9.jpg') }}" alt=""> 
						                	</a>
						                </div>
								   </div>
							        <div class="clearfix visible-xs-block"></div>
							        <div class="col-lg-9 col-md-9 col-sm-9">
							               	<div class="tour_list_desc">
							        			<div class="rating"><i class="icon-smile voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile voted"></i></div>
							                    <h3><strong>Islas Ballestas </strong></h3>
							                    <p>Constituyen el hábitat de una gran variedad de aves y lobos de mar, que pueden observarse fácilmente desde una lancha a motor. Esta excursión es una de las más habituales desde Paracas.</p>
							                   	<strong>Ubicación: </strong>Fuera del área de la reserva.    
							                 </div>
							        </div>
											           
						        </div>
							</div><!--End strip -->

							<!--Attractive 11-->
							<div class="strip_all_tour_list">
						    	<div class="row">

							    	<div class="col-lg-3 col-md-3 col-sm-3">
						            	<div class="img_list">
						               	 	<a href="single_tour.html">
						                		<img src="{{ asset('img/guide/guide-13.jpg') }}" alt=""> 
						                	</a>
						                </div>
								   </div>

							        <div class="clearfix visible-xs-block"></div>
							        <div class="col-lg-9 col-md-9 col-sm-9">
							               	<div class="tour_list_desc">
							        			<div class="rating"><i class="icon-smile voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile voted"></i></div>
							                    <h3><strong>Santuario del Señor de Luren</strong></h3>
							                    <p>Templo de estilo neoclásico actualmente destruido por el sismo de 2007. El Señor de Luren es considerado patrono de la ciudad. En Semana Santa y durante la tercera semana de octubre, miles de devotos se reúnen para acompañarlo en procesión.</p>
							                    <strong>Ubicación: </strong>Calle Ayacucho cuadra 10, temporalmente la imagen se encuentra al frente del templo.
							                 </div>
							        </div>
											           
						        </div>
							</div><!--End strip -->

							<!--Attractive 12-->
							<div class="strip_all_tour_list">
						    	<div class="row">

							    	<div class="col-lg-3 col-md-3 col-sm-3">
						            	<div class="img_list">
						               	 	<a href="single_tour.html">
						                	<img src="{{ asset('img/guide/guide-10.jpg') }}" alt=""> 
						                	</a>
						                </div>
								   </div>
							        <div class="clearfix visible-xs-block"></div>
							        <div class="col-lg-9 col-md-9 col-sm-9">
							               	<div class="tour_list_desc">
							        			<div class="rating"><i class="icon-smile voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile voted"></i></div>
							                    <h3><strong>Museo Regional Adolfo Bermúdez Jenkins</strong></h3>
							                    <p>Exhibe una colección de piezas de las culturas Paracas, Nazca, Huari, Ica e Inca. Contiene, además, lienzos y muebles coloniales y algunos objetos republicanos.</p>
							                     <strong>Ubicación: </strong> Av. Ayabaca cuadra 8 s/n. Urb. San Isidro.        
							                 </div>
							        </div>
											           
						        </div>
							</div><!--End strip -->

							<!--Attractive 1-->
							<div>
						    	<div class="row">

							    	<div class="col-lg-3 col-md-3 col-sm-3">
						            	<div class="img_list">
						               	 	<a href="single_tour.html">
						                	<img src="{{ asset('img/guide/guide-11.jpg') }}" alt=""> 
						                	</a>
						                </div>
								   </div>
							        <div class="clearfix visible-xs-block"></div>
							        <div class="col-lg-9 col-md-9 col-sm-9">
							               	<div class="tour_list_desc">
							        			<div class="rating"><i class="icon-smile voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile voted"></i></div>
							                    <h3><strong>Casona del Marqués de Torre Hermosa</strong></h3>
							                    <p>Uno de los pocos vestigios de arquitectura virreinal que ha sobrevivido a los movimientos sísmicos de la región y al crecimiento urbano. Destaca su exquisita portada rococó trabajada en piedra. Es conocida también como Casa Bolívar, pues hospedó a Simón Bolívar a su paso por la ciudad.</p>
							                     <strong>Ubicación: </strong> Calle Libertad cuadra 1, Plaza de Armas.       
							                 </div>
							        </div>
											           
						        </div>
							</div><!--End strip -->

                      </div>
                    </div>
                  </div>
                 
                  <div class="panel panel-default">
                    <div class="background-tertiary head-title">
                      <h4 class="panel-title">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Gastronomía<i class="indicator icon-plus pull-right"></i></a>
                      </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                      <div class="panel-body">
	                     
	                       <div class="row">	                     		
	                     	
	                     	 <div class="col-lg-6 col-md-6 col-sm-12">
								<div class="row">
									<div class="col-md-3">
										<img src="{{ asset('img/guide/gast-5.jpg') }}" alt="" width="120">
									</div>
									<div class="col-md-9">
										<h4>Pisco</h4>
										<p>
											Aguardiente de uva, licor originario de Perú y producto bandera. 
										</p>
									</div>
								</div>
	                     	 </div>
	                     	 
	                     	  <div class="col-lg-6 col-md-6 col-sm-12">
								<div class="row">
									<div class="col-md-3">
										<img src="{{ asset('img/guide/gast-1.jpg') }}" alt="" width="120">
									</div>
									<div class="col-md-9">
										<h4>Carapulcra</h4>
										<p>
											Papa seca sancochada y guisada con carne de cerdo y gallina, ají panca, mirasol, ajos y otras especias. 
										</p>
									</div>
								</div>
	                     	 </div>

	                       </div>

	                       <div class="row">	                     		
	                     	
	                     	 <div class="col-lg-6 col-md-6 col-sm-12">
								<div class="row">
									<div class="col-md-3">
										<img src="{{ asset('img/guide/gast-3.jpg') }}" alt="" width="120">
									</div>
									<div class="col-md-9">
										<h4>Chapanas</h4>
										<p>
											Dulce de harina de yuca y chancaca. 
										</p>
									</div>
								</div>
	                     	 </div>
	                     	 
	                     	  <div class="col-lg-6 col-md-6 col-sm-12">
								<div class="row">
									<div class="col-md-3">
										<img src="{{ asset('img/guide/gast-2.jpg') }}" alt="" width="120">
									</div>
									<div class="col-md-9">
										<h4>Morusa </h4>
										<p>
											Puré de pallares con asado de res o cerdo. 
										</p>
									</div>
								</div>
	                     	 </div>

	                       </div>

	                       <div class="row">	                     		
	                     	
	                     	 <div class="col-lg-6 col-md-6 col-sm-12">
								<div class="row">
									<div class="col-md-3">
										<img src="{{ asset('img/guide/gast-4.jpg') }}" alt="" width="120">
									</div>
									<div class="col-md-9">
										<h4>Tejas </h4>
										<p>
											Dulce tradicional de la región hecho con limón seco y relleno de higos o pecanas, manjar blanco y con una cobertura de caramelo de azúcar. 
										</p>
									</div>
								</div>
	                     	 </div>
	                     	 
	                     	  

	                       </div>
                      
                      
                      </div>
                    </div>
                  </div>

                   <div class="panel panel-default">
                    <div class="panel-heading background-primary">
                      <h4 class="panel-title">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">Fechas para celebrar<i class="indicator icon-plus pull-right"></i></a>
                      </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse">
                      <div class="panel-body">
                       
                       	<!--Fest 1-->
							<div class="strip_all_tour_list">
						    	<div class="row">

							    	<div class="col-lg-3 col-md-3 col-sm-3">
						            	<div class="img_list">
						               	 	<a href="single_tour.html">
						                	<img src="{{ asset('img/guide/fest-1.jpg') }}" alt=""> 
						                	</a>
						                </div>
								   </div>
							        <div class="clearfix visible-xs-block"></div>
							        <div class="col-lg-9 col-md-9 col-sm-9">
							               	<div class="tour_list_desc">
							        			<div class="rating"><i class="icon-smile voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile voted"></i></div>
							                    <h3><strong>Festival del Verano Negro </strong></h3>
							                    <p>Concurso de danzas afroperuanas. Además, se realizan ferias artesanales, vitivinícolas, gastronómicas y corsos por las principales calles de la ciudad. </p>
							                    <strong>Fecha: </strong> Desde el 1 de Febrero Hasta el 28 de Febrero						                            
							                 </div>
							        </div>
											           
						        </div>
							</div><!--End strip -->

							<!--Fest 2-->
							<div class="strip_all_tour_list">
						    	<div class="row">

							    	<div class="col-lg-3 col-md-3 col-sm-3">
						            	<div class="img_list">
						               	 	<a href="single_tour.html">
						                	<img src="{{ asset('img/guide/fest-4.jpg') }}" alt=""> 
						                	</a>
						                </div>
								   </div>
							        <div class="clearfix visible-xs-block"></div>
							        <div class="col-lg-9 col-md-9 col-sm-9">
							               	<div class="tour_list_desc">
							        			<div class="rating"><i class="icon-smile voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile voted"></i></div>
							                    <h3><strong>Día Nacional del Pisco Sour </strong></h3>
							                    <p>El Pisco es la bebida emblema de Ica y por ello no puede ser ajena a la celebración del Día Nacional del Pisco Sour. Con el fin de apoyar en la promoción de nuestro trago bandera, se levantará en el Campo Ferial una buen número de stands para que los productores de Pisco puedan ofrecer las mejores preparaciones del Pisco Sour. Todo ello estará acompañado de coloridas danzas que harán bailar a todos los presentes, además de un merecido homenaje al Pabellón Nacional.</p>
							                    <strong>Fecha: </strong> El 4 de Febrero						                            
							                 </div>
							        </div>
											           
						        </div>
							</div><!--End strip -->

							<!--Fest 3-->
							<div class="strip_all_tour_list">
						    	<div class="row">

							    	<div class="col-lg-3 col-md-3 col-sm-3">
						            	<div class="img_list">
						               	 	<a href="single_tour.html">
						                	<img src="{{ asset('img/guide/fest-2.jpg') }}" alt=""> 
						                	</a>
						                </div>
								   </div>
							        <div class="clearfix visible-xs-block"></div>
							        <div class="col-lg-9 col-md-9 col-sm-9">
							               	<div class="tour_list_desc">
							        			<div class="rating"><i class="icon-smile voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile voted"></i></div>
							                    <h3><strong>Festival Internacional de la Vendimia</strong></h3>
							                    <p>La celebración más representativa del departamento de Ica es el Festival Internacional de la Vendimia, que es un homenaje a la ejemplar actividad vitivinícola que realiza esta región cada año. Durante 9 días los turistas podrán participar en actividades como la XVIII Ruta de los Lagares, que consiste en los rituales de pisa de uva y la degustación de los mejores vinos y piscos nacionales, además de disfrutar los deliciosos platos típicos de la ciudad sureña. También se desarrollarán ferias agropecuarias y artesanales y diversos shows artísticos a diario para divertir a los asistentes.</p>
							                     <strong>Fecha: </strong> Desde el 6 de Febrero Hasta el 15 de Marzo					                            
							                 </div>
							        </div>
											           
						        </div>
							</div><!--End strip -->

							<!--Fest 4-->
							<div class="strip_all_tour_list">
						    	<div class="row">

							    	<div class="col-lg-3 col-md-3 col-sm-3">
						            	<div class="img_list">
						               	 	<a href="single_tour.html">
						                	<img src="{{ asset('img/guide/fest-5.jpg') }}" alt=""> 
						                	</a>
						                </div>
								   </div>
							        <div class="clearfix visible-xs-block"></div>
							        <div class="col-lg-9 col-md-9 col-sm-9">
							               	<div class="tour_list_desc">
							        			<div class="rating"><i class="icon-smile voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile voted"></i></div>
							                    <h3><strong>Semana Santa Iqueña</strong></h3>
							                    <p>La festividad se inicia el Domingo de Ramos con la procesión del Señor del Triunfo y finaliza con la procesión de resurrección, conocida también como "Procesión del Borrachito". Todas las calles son adornadas con alfombras y arcos triunfales.</p>
							                     <strong>Fecha: </strong> Desde el 25 de Febrero Hasta el 31 de Mayo					                            
							                 </div>
							        </div>
											           
						        </div>
							</div><!--End strip -->

							<!--Fest 5-->
							<div class="strip_all_tour_list">
						    	<div class="row">

							    	<div class="col-lg-3 col-md-3 col-sm-3">
						            	<div class="img_list">
						               	 	<a href="single_tour.html">
						                	<img src="{{ asset('img/guide/fest-6.jpg') }}" alt=""> 
						                	</a>
						                </div>
								   </div>
							        <div class="clearfix visible-xs-block"></div>
							        <div class="col-lg-9 col-md-9 col-sm-9">
							               	<div class="tour_list_desc">
							        			<div class="rating"><i class="icon-smile voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile voted"></i></div>
							                    <h3><strong>Semana Turística de Ica</strong></h3>
							                    <p>Exhibiciones de Caballos Peruanos de Paso, peleas de gallos, concursos de vinos, degustaciones de pisco, caminatas de bodega y el concurso internacional de sandboard.</p>
							                     <strong>Fecha: </strong> Desde el 01 de Septiembre Hasta el 30 de Septiembre					                            
							                 </div>
							        </div>
											           
						        </div>
							</div><!--End strip -->

							<!--Fest 6-->
							<div class="strip_all_tour_list">
						    	<div class="row">

							    	<div class="col-lg-3 col-md-3 col-sm-3">
						            	<div class="img_list">
						               	 	<a href="single_tour.html">
						                	<img src="{{ asset('img/guide/fest-3.jpg') }}" alt=""> 
						                	</a>
						                </div>
								   </div>
							        <div class="clearfix visible-xs-block"></div>
							        <div class="col-lg-9 col-md-9 col-sm-9">
							               	<div class="tour_list_desc">
							        			<div class="rating"><i class="icon-smile voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile voted"></i></div>
							                    <h3><strong>Señor de Luren</strong></h3>
							                    <p>El origen de la devoción a la imagen del Señor de Luren, patrono de la ciudad de Ica, se remonta a 1570, cuando misteriosamente se extravió en el desierto para aparecer en un paraje desolado llamado Luren, donde se levantó un pequeño templo y un hospital para indios. Los días 22 y 23 de octubre la imagen de madera sale en procesión para recorrer la ciudad toda la noche y el amanecer, acompañada de la Virgen María y la Magdalena. Ubicación: ciudad de Ica (406 metros sobre el nivel del mar).</p>
							                     <strong>Fecha: </strong> Desde el 03 de Septiembre Hasta el 21 de Octubre					                            
							                 </div>
							        </div>
											           
						        </div>
							</div><!--End strip -->

                      </div>
                    </div>
                  </div>

    </div>
</div>
</div>


<div class="container margin_30">
    
     <div class="main_title">
     	<h2>Imágenes de la <span>ciudad</span></h2>
         <p>Disfruta el paisaje</p>
     </div>

     <div class="row magnific-gallery add_bottom_60 ">
    	<div class="col-md-3 col-sm-3">
        	<a href="{{ asset('img/guide/img-1.jpg') }}" title="Photo title"><img src="{{ asset('img/guide/img-1.jpg') }}" alt="" class="img-responsive styled"></a>
        </div>
        <div class="col-md-3 col-sm-3">
        	<a href="{{ asset('img/guide/img-2.jpg') }}" title="Photo title"><img src="{{ asset('img/guide/img-2.jpg') }}" alt="" class="img-responsive styled"></a>
        </div>
        <div class="col-md-3 col-sm-3">
        	<a href="{{ asset('img/guide/img-3.jpg') }}" title="Photo title"><img src="{{ asset('img/guide/img-3.jpg') }}" alt="" class="img-responsive styled"></a>
        </div>
        <div class="col-md-3 col-sm-3">
        	<a href="{{ asset('img/guide/img-4.jpg') }}" title="Photo title"><img src="{{ asset('img/guide/img-4.jpg') }}" alt="" class="img-responsive styled"></a>
        </div>
        <div class="col-md-3 col-sm-3">
        	<a href="{{ asset('img/guide/img-5.jpg') }}" title="Photo title"><img src="{{ asset('img/guide/img-5.jpg') }}" alt="" class="img-responsive styled"></a>
        </div>
        <div class="col-md-3 col-sm-3">
        	<a href="{{ asset('img/guide/img-6.jpg') }}" title="Photo title"><img src="{{ asset('img/guide/img-6.jpg') }}" alt="" class="img-responsive styled"></a>
        </div>
        <div class="col-md-3 col-sm-3">
        	<a href="{{ asset('img/guide/img-7.jpg') }}" title="Photo title"><img src="{{ asset('img/guide/img-7.jpg') }}" alt="" class="img-responsive styled"></a>
        </div>
        <div class="col-md-3 col-sm-3">
        	<a href="{{ asset('img/guide/img-8.jpg') }}" title="Photo title"><img src="{{ asset('img/guide/img-8.jpg') }}" alt="" class="img-responsive styled"></a>
        </div>
    </div><!-- End row -->

</div>


<div class="white_bg">
<div class="container margin_60">
    
        <div class="main_title">
            <h2>Nuestros <span>Tours</span></h2>
            <p>Disfruta de tu viaje sin preocupaciones</p>
        </div>
        
       <div class="row">
        
            <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.1s">
                <div class="tour_container">
                    <div class="img_container">
                        <a href="single_tour.html">
                        <img src="{{ asset('img/tours/tour-1.jpg') }}" class="img-responsive" alt="Tour número 1">
                         <div class="short_info">
                            <i class="icon_set_1_icon-60"></i>Piscos y vinos
                        </div>
                        </a>
                    </div>
                    <div class="tour_title">
                        <h3><strong>Ruta del</strong> Pisco</h3>
                        <div class="duration">
                           Full Day
                        </div>
                                                
                    </div>
                     <a href="#" class="btn_full">Quiero ir</a> 
                </div><!-- End box tour -->
            </div><!-- End col-md-4 -->
            
            <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.1s">
                <div class="tour_container">
                    <div class="img_container">
                        <a href="single_tour.html">
                        <img src="{{ asset('img/tours/tour-2.jpg') }}" class="img-responsive" alt="">
                        <div class="short_info">
                            <i class="icon_set_1_icon-44"></i>Lugares Historicos
                        </div>
                        </a>
                    </div>
                    <div class="tour_title">
                        <h3><strong>Full Day</strong> Paracas</h3>
                        <div class="duration">
                            Full Day
                        </div>
                         
                       
                    </div>
                     <a href="#" class="btn_full">Quiero ir</a> 
                </div><!-- End box tour -->
            </div><!-- End col-md-4 -->
            
             <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.1s">
                <div class="tour_container">
                    <div class="img_container">
                        <a href="single_tour.html">
                        <img src="{{ asset('img/tours/tour-3.jpg') }}" class="img-responsive" alt="">
                        <div class="ribbon popular"></div>
                        <div class="short_info">
                            <i class="icon_set_1_icon-82"></i>Descanso y tranquilidad
                        </div>
                        </a>
                    </div>
                    <div class="tour_title">
                        <h3><strong>Paracas</strong> Inolvidable</h3>
                        <div class="duration">
                           2 días 1 noche
                        </div>
                       
                       
                    </div>
                     <a href="#" class="btn_full">Quiero ir</a> 
                </div><!-- End box tour -->
            </div><!-- End col-md-4 -->
            
            <div class="col-md-offset-2 col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.1s">
                <div class="tour_container">
                    <div class="img_container">
                        <a href="single_tour.html">
                        <img src="{{ asset('img/tours/tour-4.jpg') }}" class="img-responsive" alt="">
                        <div class="short_info">
                            <i class="icon-flight"></i>A volar
                        </div>
                        </a>
                    </div>
                    <div class="tour_title">
                        <h3><strong>Paracas con sobrevuelo</strong> Nazca</h3>
                        <div class="duration">
                           2 días 1 noche
                        </div>
                                             
                    </div>
                     <a href="#" class="btn_full">Quiero ir</a> 
                </div><!-- End box tour -->
            </div><!-- End col-md-4 -->
            
            <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.1s">
                <div class="tour_container">
                    <div class="img_container">
                        <a href="single_tour.html">
                        <img src="{{ asset('img/tours/tour-5.jpg') }}" class="img-responsive" alt="">
                  		 <div class="short_info">
                            <i class="icon_set_1_icon-8"></i>
                        </div>
                        </a>
                    </div>
                    <div class="tour_title">
                        <h3><strong>Paracas-Ica</strong> relax</h3><br/>
                        <div class="duration">
                            2 días 1 noche
                        </div>
                                                
                    </div>
                     <a href="#" class="btn_full">Quiero ir</a> 
                </div><!-- End box tour -->
            </div><!-- End col-md-4 -->
            
              
            <div class="col-md-offset-2 col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.1s">
                <div class="tour_container">
                    <div class="img_container">
                        <a href="single_tour.html">
                        <div class="ribbon popular"></div>
                        <img src="{{ asset('img/tours/tour-6.jpg') }}" class="img-responsive" alt="">
                        <div class="short_info">
                            <i class="icon_set_1_icon-30"></i>A caminar
                        </div>
                        </a>
                    </div>
                    <div class="tour_title">
                        <h3><strong>Ruta del Pisco</strong> Deluxe</h3>
                        <div class="duration">
                           2 días 1 noche
                        </div>
                        
                    </div>
                     <a href="#" class="btn_full">Quiero ir</a> 
                </div><!-- End box tour -->
            </div><!-- End col-md-4 -->
            
            <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.1s">
                <div class="tour_container">
                    <div class="img_container">
                        <a href="single_tour.html">
                        <img src="{{ asset('img/tours/tour-7.jpg') }}" class="img-responsive" alt="">
                          <div class="short_info">
                            <i class="icon_set_1_icon-44"></i>Lugares Historicos
                        </div>
                        </a>
                    </div>
                    <div class="tour_title">
                        <h3><strong>Ica-Paracas </strong>Mágicos</h3>
                        <div class="duration">
                           3 días 2 noches
                        </div>
                                              
                    </div>
                     <a href="#" class="btn_full">Quiero ir</a> 
                </div><!-- End box tour -->
            </div><!-- End col-md-4 -->            
          
        </div><!-- End row -->
       
    </div><!-- End container -->
    </div>

@endsection