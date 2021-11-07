<?php include('header.php'); ?>

	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1> NOSOTROS</h1>
			</div>

			<div class="articulo">
				<article>
					<h2><p>profesional capaz de plantear y realizar proyectos de innovación tecnológica que generen productos y servicios sustentables y que contribuyan a solucionar los problemas nacionales, mediante la aplicación de conocimientos científicos y tecnológicos.
                        El ingeniero mecánico, gracias al diseño, construcción, selección, instalación, operación y mantenimiento de equipos y sistemas mecánicos incrementa la productividad usando como herramienta la integración de tecnología.
                        Asimismo, desempeña actividades tales como:</p></h2>
					<br/>
					<h2><p>Analizar, planear, diseñar y controlar plantas de procesos de generación y transformación de energía.</p></h2>
					<br/>
					<h1><p>-Asimilar, adaptar y generar tecnologías de punta en todo tipo de industria.</p></h1>
					<br/>
					<h1><p>-Observar, interpretar y modelar fenómenos que solucionen problemas en ingeniería mecánica.</p></h1>
					<br/>
					<h1><p>-Es un profesional con un importante ámbito de acción, cuyas condiciones de trabajo varían en función del lugar donde labore, desde espacios al aire libre, hasta zonas industriales.</p></h1>
					<br/>
					<br><a href="#"><img src="img/auto.jpg" height="600px" width="800px"></br>
				</article>
			</div>

			<?php include('sidebar.php'); ?>

			<p><form action="/cliente.php" method="tipo_rep.php">
				<label for="fname">Nombre Del Usuario:</label><br>
				<input type="text" id="fname" name="fname"><br><br>
				<label for="lname">Apellidos Del Usuario:</label><br>
				<input type="text" id="lname" name="lname"><br><br>
				<label for="email">E-mail:</label><br>
				<input type="text" name="email"><br><br>
				<label for="especialidad">Carrera Mecanica:</label><br>
				<input type="text" name="especialidad"><br><br>
				<input type="submit" value="Enviar"></form></p>

		</div>
	</section>
	
    <?php include('footer.php'); ?>

</body>
</html>