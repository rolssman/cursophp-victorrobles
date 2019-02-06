<html>
	<head>
		<meta charset="utf-8"/>
		<title>Numeros multiplos</title>
	</head>
	<body>
		<?php if (isset($_GET["numero"]) && is_numeric($_GET["numero"])) { ?>

			<h1>Números multiplos de <?= $_GET["numero"]; ?></h1>
			<?php
			/*
			  Mostrar los números múltiplos de un número pasado
			  por la URL que hay del 1 al 100.
			 */

			for ($i = 1; $i <= 100; $i++) {
				if (isset($_GET["numero"]) && $i % $_GET["numero"] == 0) {
					echo $i . " es multiplo de " . $_GET["numero"] . "<br/>";
				}
			}
		} else {
			?>

			<p>Introduce un número correcto por la url</p>

		<?php } ?>

	</body>
</html>
