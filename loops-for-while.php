<?php 
		include 'header.php';
		$aula_atual = 'loops-for-while';
	?>


	<body>

		<h2>LOOPS WHILE e FOR</h2>
		<hr>
		<small>PHP</small>
		
		<h3>Selecione o ano de nascimento:</h3>
	<?php
		$ano_atual = date('Y');
		$ano = $ano_atual;	
	?>
		<select>
			<option>Selecione o ano</option>
			 <?php while ($ano > 1980){ ?>
				
				<option><?php echo $ano; ?> </option>
				<?php $ano = $ano - 1; ?>
				
			 <?php } ?>
		</select>

		<h3>Selecione o ano estimado de aposentadoria:</h3>

		<select>
			<option>Selecione o ano</option>
			<option>2090</option>
			<option>2091</option>
			<option>2092</option>
			<option>2093</option>
			<option>2094</option>
		</select>

			

		<h3>Agora é a sua vez.</h3>

		<p>Use o loop for ou while para apresentar os anos em que vão haver Copa</p>
		<br>

		<h4>Anos de Copa do Mundo: </h4>
		<br>

		<p>apresente aqui os anos</p>
		<br>

		

		







	</body>

</html>
