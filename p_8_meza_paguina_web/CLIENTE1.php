<?php include('header.php'); ?>

	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>CONTACTO</h1>
			</div>

			<div class="articulo">
				<article>
					<h2><p>-Coordinación de Mecanica Automotriz, Circuito Interior, 55 5622 0915 y 55 5622 0863;.</p></h2>
					<br/>
					<h2><p>-Coordinación de la carrera de Ingeniería Mecánica, Dr. Meza Garcia Manuel Arturo, ManuMe@ingenieria.dgti.mx</p></h2>
					<br/>
					<h2><p>-Edificio del Centro de Ingeniería Avanzada, segundo piso, cubículo 211, Conjunto Sur de la Facultad (Anexo de Ingeniería),</p></h2>
					<br/>
					<h2><p>- Circuito Exterior, horarios de atención: de lunes a viernes de 9:00 a 15:00 y de 17:00 a 19:00 horas,</p></h2>
					<br/>
					<h2><p>- 55 5622 9986, extensión 211</p></h2>
					<br/>
					<br><a href="#"><img src="img/hh.jpg" height="600px" width="800px"></br>
				</article>
			</div>

			<?php include('sidebar.php'); ?>

			<p><form action="/cliente.php" method="tipo_rep.php">
				<label for="fname">Nombre del Usuario:</label>
				<input type="text" id="fname" name="fname"><br><br>
				<label for="lname">Apellidos del Usuario:</label>
				<input type="text" id="lname" name="lname"><br><br>
				<label for="email">E-mail:</label><br>
				<input type="text" name="email"><br><br>
				<input type="submit" value="Enviar"></form></p>

		</div>
	</section>
    
	
	
    <?php include('footer.php'); ?>

</body>
</html>