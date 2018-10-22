<?php 

include('functions.php');

?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<head>
	<title>PHP</title>
</head>
<body>
	<div class="container">
		<table class="table table-bordered table-dark">
			<thead>
				<tr>
					<th scope="col">Cost Price</th>
					<th scope="col">Shiping</th>
					<th scope="col">Margin</th>
					<th scope="col">VAT</th>
					<th scope="col">Retail</th>
					<th scope="col">Coef</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				for ($cp = 10; $cp <= 150; $cp += 10) { 
					echo "<tr><td>$cp</td><td>" . shipping($cp) . "</td><td>" . margin($cp) . "</td><td>" . vat($cp) . "</td><td>" . retail($cp) . "</td><td>" . coef($cp) . "</td></tr>";
				}
				?>		
			</tbody>
		</table>
	</body>
	</html>