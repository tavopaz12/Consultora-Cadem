<title>Manejo de redes sociales | Tecnologia-Cadem</title>

	<div class="informacion-de-cursos-banner" style='background-image: url("../img/manejo-de-redes-sociales-2.jpg");'>
		<div class="informacion-de-cursos-banner-contenedor">
			<h1>Manejo de redes sociales</h1>
			<hr>
			<p>Gestiona tu Presencia de Marca en Comunidades Digitales</p>
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
    				<p>Conoce las mejores prácticas para la gestión y optimización del "social media" con el curso de redes sociales más completo para Community Managers. Éste es un programa integral para conocer el márketing en medios sociales.<br>Aprenderás a desarrollar, gestionar y optimizar campañas en redes sociales. Evaluarás las fuerzas y debilidades de plataformas populares como Facebook, Instagram, Twitter, LinkedIn y YouTube.</p>
    			</div>

    			<div class="content">
    				<h1>BENEFICIOS</h1>
    				<br>
    				<p>
    					<ul>
						  	<li>Acelera el crecimiento de tu negocio con ayuda de comunidades virtuales.</li>
						  	<li>Llevar tráfico a tu sitio web.</li>
						  	<li>Aprenderas las erramietas más últiles del community manager.</li>
						  	<li>Usar las estadísticas de Facebook, Instagram, Linkedin, YouTube y Twitter.</li>
						  	<li>Identificar clientes leales a tu marca.</li>
						  	<li>Atención a cliente con Facebook Messenger y Whatsapp.</li>
						  	<li>Conocer la labor del "community manager".</li>
						  	<li>Manejo de reputación online.</li>
						</ul>
    				</p>
    			</div>

    			<div class="content">
    				<h1>QUIÉN DEBE ASISTIR</h1>
    				<br>
    				<p>Publico en general. Con o sin experiencia.</p>
    			</div>
  			</div>

  			<div id="Temario" class="w3-container w3-border city" style="display:none">
			    <h1>TEMARIO</h1>
			    <br>
			    <p>
			    	<ul class="ul2">
			    		<li>Nuevo capital social</li>
			    		<hr>
			    		<li>Relaciones públicas</li>
			    		<hr>
			    		<li>¿Qué hace el community manager</li>
			    		<hr>
			    		<li>¿Quién es nuestra audiencia?</li>
			    		<hr>
			    		<li>Storytelling</li>
			    		<hr>
			    		<li>Perfil de persona vs. Página de Fans</li>
			    		<hr>
			    		<li>Publicaciones programadas</li>
			    		<hr>
			    		<li>Métricas y alcance orgánico</li>
			    		<hr>
			    		<li>Ventajas de Twitter</li>
			    		<hr>
			    		<li>Otras redes sociales (YouTube, Instagram, Pinterest, Linkedin)</li>
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
					    		<td>12/06/19 al 12/07/2019</td>
					    		<td>30 horas</td>
					    		<td>Tezonapa, ver</td>
					    	</tr>

					    	<tr>
					    		<td>12/07/19 al 12/08/2019</td>
					    		<td>30 horas</td>
					    		<td>Tezonapa, ver</td>
					    	</tr>
					    </table>	
			    </div>
			    
			    <div class="content">
			    	<h1>EL CURSO INCLUYE...</h1>
			    	<p>
			    		<ul>
				    		<li>Expositores de nivel Nacional</li>
				    		<li>Material de trabajo digital</li>
				    		<li>Certificado otorgado por CADEM</li>
				    		<li>1 hora de asesoría privada (teléfono o Skype).</li>
				    		<li>Constancia de participación</li>
			    		</ul>
			    	</p>	
			    </div>
			    
				<div class="content">
					<h1>REQUERIMIENTOS</h1>
			    	<p>
			    		<ul>
				    		<li>Laptop</li>
				    		<li>Desayuno</li>
				    		<li>Libreta de anotaciones</li>
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
								<input type="text" class="input-text" value="Manejo de redes sociales" name="nombreDelCurso" required readonly>
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
					    				<option value="1">12/06/19 al 12/07/2019</option>
					    				<option value="2">12/07/19 al 12/08/2019</option>
					    			</select>
								</p>

								<p>
									<label for="">Email:</label>
									<br>
									<input type="email" class="input-text" name="emailIndividual" value="<?php echo $_SESSION['email'];?>">
								</p>
				    		</div>

				    		<div id="paDeDiez" style="display:none;">
								<p>
									<label for="">Fecha a solicitar</label>
					    			<br>
					    			<select name="fechaSolicitadaDiez" id="" class="input-select">
					    				<option selected value="o">---Selecciona---</option>
					    				<option value="1">12/06/19 al 12/07/2019</option>
					    				<option value="2">12/07/19 al 12/08/2019</option>
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
									<input type="email" class="input-text" name="emailDiez"> value="<?php echo $_SESSION['email'];?>">
								</p>
							</div>

				    		<div id="paEmpre" style="display:none;">
								<p>
									<label for="">Fecha a solicitar</label>
					    			<br>
					    			<select name="fechaSolicitadaEmpre" id="" class="input-select">
					    				<option selected value="o">---Selecciona---</option>
					    				<option value="1">12/06/19 al 12/07/2019</option>
					    				<option value="2">12/07/19 al 12/08/2019</option>
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