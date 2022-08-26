<title>Ingresar | CADEM</title>

<article>
    <section id="section-signUp">
      <h1>Ingreso de Usuarios</h1>
      <br>
      <hr>
      <br>

      <?php
          $ingreso = new MvcController();
          $ingreso -> ingresoUsuarioController();

          if(isset($_GET["action"])){

          if($_GET["action"] == "fallo"){

            echo '<div class="alert">¡Email O Cotraseña Incorrectos!</div>';
          }        
        }
      ?>

      <form method="post">
          <p><b>Correo eléctronico: </b></p>
          <p id="input-signUp"><input type="email" name="emailIngreso" required></p>

          <p><b>Contraseña:</b></p>
          <p id="input-signUp"><input type="password" name="passwordIngreso" required></p>

          <button type="submit">Iniciar Sesión</button>
          <br><br>
          <center><p>¿No tienes una cuenta?<a href="nueva_cuenta"> Registrarse</a></p></center>

      </form>
    </section>
</article>