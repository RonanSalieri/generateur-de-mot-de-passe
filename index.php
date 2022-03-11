<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<title>Générateur de mot de passe</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
</head>
<body class="text-center">
<div class="container">
	<div class="row">
		<div class="col-4"></div>
		<div class="col-4">
			<br>
			<main class="form-signin">
            	<form action="index.php" method="post">
					<span class="material-icons-outlined" title="Lock" style="font-size: 50px;">lock</span>
					<h1 class="h3 mb-3 fw-normal">Générateur de mot de passe</h1>
						<select class="form-select" name="nbcarac">
  							<option selected disabled>Combien de caractère ?</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
						</select>
					<br>
					<button class="w-100 btn btn-lg btn-primary" type="submit">Générer</button>
				</form>
			<br><br>
			<h1 class="h3 mb-3 fw-normal">Mot de passe généré</h1>
			<textarea class="form-control" id="motdepasse" rows="1" name="motdepasse" style="font-size: 30px;"><?php
			$nbcarac = $_POST['nbcarac'];
			if ($nbcarac=="") {
			$nbcarac = 5;
			}
			$i=1;
			while ($i <= $nbcarac) {
			$i++;	
			$a['$i']=rand(33,126);
			$password['$i'] = mb_chr($a['$i']);
			echo $password['$i'];
			}?></textarea>
			<br>
			<h5 class="h5 mb-3 fw-normal">Cliquer sur le mot de passe pour le copier</h5>		
			<h6 class="h6 mb-3 fw-normal">Mars 2022 - ronansalieri{[AT]}gmail.com</h6>	
			<a href="https://github.com/RonanSalieri" target="_new">Github</a>
			</main>
		</div>
		<div class="col-4"></div>		
	</div>
</div>
</body>
<script>
document.getElementById("motdepasse").onclick = function() {
this.select();
document.execCommand('copy');
window.alert('Mot de passe copier dans le presse papier');
}
</script>
</html>
