<title>Del diseñador al negocio | Mercadotecnia y ventas-Cadem</title>

	<div class="informacion-de-cursos-banner" style='background-image: url("../img/del_diseniador_al_negocio.jpeg");'>
		<div class="informacion-de-cursos-banner-contenedor">
			<h1>Del diseñador al negocio</h1>
			<hr>
			<p>Diseño de modelos innovadores</p>
		</div>
	</div>

<article class="informacion-de-cursos">
	<div class="row">
	  	<div class="column1-informacion-de-cursos w3-bar">
	    	<button class="cd-bar-item cd-button tablink cd-red" onclick="openCity(event,'Informacion')">Acerca del curso</button>
		    <button class="cd-bar-item cd-button tablink" onclick="openCity(event,'Temario')">Temario</button>
		    <button class="cd-bar-item cd-button tablink" onclick="openCity(event,'Programacion')">Programacion</button>
		    <button class="cd-bar-item cd-button tablink" onclick="openCity(event,'Solicitar')">Solicitar este curso <i class="fa fa-caret-right"></i></button>
	  	</div>
  
  		<div class="column2-informacion-de-cursos">
    		<div id="Informacion" class="w3-container w3-border city">
    			<div class="content">
    				<h1>INTRODUCCIÓN</h1>
    				<br>
    				<p>Si no eres un diseñador gráfico, no hay problema. En este curso, compartiremos los secretos del diseño gráfico  que cualquiera puede aplicar para hacer que sus documentos de negocio se vean muy bien.</p>
    				<p>Dividiremos el diseño gráfico en un formato fácil de seguir de acuerdo a las siglas, PARC, o de proximidad, la alineación, la repetición y el contraste, y mostraremos cómo aplicar estos principios a los desafíos de diseño de todos los días.</p>
    			</div>

    			<div class="content">
    				<h1>BENEFICIOS</h1>
    				<br>
    				<p>
    					<ul>
						  	<li>Este curso aporta los conocimientos básicos necesarios para elaborar un plan de negocio, es decir, el documento que evalúa todos los aspectos de la factibilidad económica de una idea empresarial o comercial, con una descripción y análisis de sus perspectivas empresariales.</li>
						  	<li>Consta de dos partes bien diferenciadas, una primera donde se explican conceptos y sirve de base de conocimientos, y una segunda parte donde se muestra un ejemplo sobre la existencia de software de análisis de fácil adquisición en el mercado el cual, gracias al manejo de sencillos asistentes, se crean tablas y gráficos y se obtiene ayuda en aspectos clave imprescindibles en todo plan de negocio.</li>
						</ul>
    				</p>
    			</div>

    			<div class="content">
    				<h1>QUIÉN DEBE ASISTIR</h1>
    				<br>
    				<ul>
    					<li>Estudiantes, trabajadores, desempleados o cualquier persona que desee formarse y adquirir conocimientos.</li>
    				</ul>			
    			</div>
  			</div>

  			<div id="Temario" class="w3-container w3-border city" style="display:none">
			    <h1>TEMARIO</h1>
			    <br>
			    <p>
			    	<ul class="ul2">
			    		<li>Presentación</li>
			    		<hr>
			    		<li>Qué es un Plan de Negocio</li>
			    		<hr>
			    		<li>Portada de presentación</li>
			    		<hr>
			    		<li>Recopilación de la sección financiera</li>
			    		<hr>
			    		<li>Redactar un Plan de Negocio</li>
			    		<hr>
			    		<li>Estrategia de desarrollo - principales palancas</li>
			    		<hr>
			    		<li>Formas de entregar un Plan de Negocio</li>
			    	</ul>
			    </p> 
  			</div>

  			<div id="Programacion" class="w3-container w3-border city" style="display:none">
			    <div class="content">
			    	<h1>PROGRAMACIÓN</h1>
					    <br>
					    <table>
					    	<tr class="th">
					    		<th>Fecha</th>
					    		<th>Duración</th>
					    		<th>Lugar</th>
					    	</tr>

					    	<tr>
					    		<td>15/06/19 al 15/07/2019</td>
					    		<td>2 semanas</td>
					    		<td>Tezonapa, ver</td>
					    	</tr>

					    	<tr>
					    		<td>15/07/19 al 15/08/2019</td>
					    		<td>2 semanas</td>
					    		<td>Tezonapa, ver</td>
					    	</tr>
					    </table>	
			    </div>
			    
			    <div class="content">
			    	<h1>EL CURSO INCLUYE...</h1>
			    	<p>
			    		<ul>
				    		<li>Material de trabajo digital</li>
				    		<li>Certificado otorgado por CADEM</li>
				    		<li>Atención personalizada y profesional</li>
				    		<li>1 hora de asesoría privada presencial</li>
				    		<li>Constancia de participación</li>
			    		</ul>
			    	</p>	
			    </div>
			    
				<div class="content">
					<h1>REQUERIMIENTOS</h1>
			    	<p>
			    		<ul>
				    		<li>Laptop</li>
				    		<li>Libreta de anotaciones</li>
				    		<li>Desayuno</li>
			    		</ul>
			    	</p>
				</div>
  			</div>

			<div id="Solicitar" class="w3-container w3-border city" style="display:none">
			    <p><b>*Campos requeridos</b></p>
			    <p><b><i class="fa fa-exclamation-triangle" style="padding-right:8px;color: red;"></i>Por favor, no utilizar caracteres especiales (ej: acentos, ¿¡´+*)</b></p>
			    <br>
			    <hr>
			    <br>
			    <div class="contenedor-row">
			    	
			    	<form action="" method="post" name="fcontacto">

				    	<div class="form-column1-infocursos">
				    		<p>
								<label>Nombre del curso:</label>
								<br>
								<input type="text" class="input-text" value="Del diseñador al negocio" name="nombreDelCurso" required readonly>
							</p>

							<p>
								<label>Nombre completo:</label>
								<br>
								<input type="text" class="input-text" value="<?php echo $_SESSION['usuario'], " ", $_SESSION['apellidos'];?>" name="nombreCompleto" required readonly>
							</p>

							<p>
								<label for="">Tipo de paquete:</label>
								<br>
								<input type="radio" checked name="Conocido" id="Conocido_0" onclick="mostrarReferencia();" />Paquete Individual
								<br>
								<input type="radio" name="Conocido" value="Google" id="Conocido_1" onclick="mostrarReferencia();" />Paquete para 10 personas o más
								<br>
								<input type="radio" name="Conocido" value="Google" id="Conocido_2" onclick="mostrarReferencia();" />Paquete empresarial
							</p>

							<p>
								<label>Ocupacion:</label>
								<br>
								<input type="text" name="ocupacion" class="input-text">
							</p>

							<p>
								<label for="">Telefono:</label>
								<br>
								<input type="tel" name="telefono" class="input-text">
							</p>
				    	</div>

				    	<div class="form-column2-infocursos">
				    		<div id="paIndividual">
								<p>
									<label for="">Fecha a solicitar</label>
					    			<br>
					    			<select name="fechaSolicitadaIndivi" id="" class="input-select">
					    				<option selected value="o">---Selecciona---</option>
					    				<option value="1">15/06/19 al 15/07/2019</option>
					    				<option value="2">15/07/19 al 12/08/2019</option>
					    			</select>
								</p>

								<p>
									<label for="">Email:</label>
									<br>
									<input type="email" name="emailIndividual" class="input-text" value="<?php echo $_SESSION['email'];?>">
								</p>
				    		</div>

				    		<div id="paDeDiez" style="display:none;">
								<p>
									<label for="">Fecha a solicitar</label>
					    			<br>
					    			<select name="fechaSolicitadaDiez" id="" class="input-select">
					    				<option selected value="o">---Selecciona---</option>
					    				<option value="1">15/06/19 al 15/07/2019</option>
					    				<option value="2">15/07/19 al 12/08/2019</option>
					    			</select>
								</p>

								<p>
									<label for="">Numero de inscripciones</label>
									<br>
									<input type="text" name="numeroDeInscripcionDiez" class="input-text">
								</p>

								<p>
									<label for="">Email:</label>
									<br>
									<input type="email" name="emailDiez" class="input-text" value="<?php echo $_SESSION['email'];?>">
								</p>
							</div>

				    		<div id="paEmpre" style="display:none;">
								<p>
									<label for="">Fecha a solicitar</label>
					    			<br>
					    			<select name="fechaSolicitadaEmpre" id="" class="input-select">
					    				<option selected value="o">---Selecciona---</option>
					    				<option value="1">15/06/19 al 15/07/2019</option>
					    				<option value="2">15/07/19 al 12/08/2019</option>
					    			</select>
								</p>

								<p>
									<label for="">Numero de inscripciones</label>
									<br>
									<input type="text" name="numeroDeInscripcionEmpre" class="input-text">
								</p>

								<p>
									<label for="">Empresa:</label>
									<br>
									<input type="text" name="empresa" class="input-text">
								</p>

								<p>
									<label for="">Sede:</label>
									<br>
									<input type="text" name="sede" class="input-text">
								</p>

								<p>
									<label for="">Email Empresarial:</label>
									<br>
									<input type="email" name="emailEmpresarial" class="input-text">
								</p>
							</div>

							<p>
								<label for="">Como te enteraste de nosotros</label>
								<br>
								<select name="comoSeEntero" id="" class="input-select">
									<option selected value="0">---Selecciona una opcion---</option>
									<option value="1">Ya los conocia</option>
									<option value="2">Internet(Buscadores)</option>
									<option value="3">Email</option>
									<option value="4">Redes Sociales</option>
									<option value="5">Recomendación</option>
									<option value="6">Me contactaron</option>
									<option value="7">Otro</option>
								</select>
							</p>

							<p>
								<label for="">Mensaje o comentarios:</label>
								<textarea name="mensaje" id="" class="input-textarea" cols="30" rows="4"></textarea>
							</p>

							<button type="submit"><i class="fa fa-check"></i>Solicitar curso</button>
				    	</div>

			    	</form>
			    </div>
  			</div>

  		</div>
	</div>
</article>

<?php 
	include "footer.php";
?>
<script>
function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace("cd-red", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " cd-red";
}

function mostrarReferencia(){
//Si la opcion con id Conocido_1 (dentro del documento > formulario con name fcontacto >     y a la vez dentro del array de Conocido) esta activada
if (document.fcontacto.Conocido[1].checked == true) {
//muestra (cambiando la propiedad display del estilo) el div con id 'desdeotro'
document.getElementById('paEmpre').style.display='none';
document.getElementById('paIndividual').style.display='none';
document.getElementById('paDeDiez').style.display='block';
//por el contrario, si no esta seleccionada
} else if(document.fcontacto.Conocido[2].checked == true){
document.getElementById('paDeDiez').style.display='none';
document.getElementById('paEmpre').style.display='block';
document.getElementById('paIndividual').style.display='none';
}
else {
//oculta el div con id 'desdeotro'
document.getElementById('paDeDiez').style.display='none';
document.getElementById('paEmpre').style.display='none';
document.getElementById('paIndividual').style.display='block';
}
}
</script>