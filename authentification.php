<!DOCTYPE HTML>

<html>
<head>
	
	<meta charset="utf-8" />

	
	<title>Gestion des congés</title>
	<link rel="icon" type="image/ico" href="logo.png" />
	<link rel="stylesheet" href="assets/css/authen.css" />
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>



<div class="container-fluid">
	<div class="row no-gutter">
		<div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
		<div class="col-md-8 col-lg-6">
			<div class="login d-flex align-items-center py-5">
				<div class="container">
					<div class="row">
						<div class="col-md-9 col-lg-8 mx-auto">
							<h3 class="login-heading mb-4">Authentification</h3>
							<form>
								
								<div class="form-label-group">
								<select name="profil" class="custom-select">
									<option selected>Selectionez le profil:</option>
									<option value="S"><?php if (isset($_POST['S']) && $_POST['S'] == "S")
                                                ?>Salarié</option>
									<option value="D"><?php if (isset($_POST['D']) && $_POST['D'] == "D")
                                                ?>Directeur</option>
								</select>
								</div>
								
								
								<div class="form-label-group">
									
									<input type="email" name="email" placeholder="Email" class="form-email form-control" value="<?php if(isset($SESSION['email'])) {
										echo $_SESSION['email'];} ?>" required autofocus>
									<label for="inputEmail">Email</label>
									
								</div>
								
								<div class="form-label-group">
								
									<input type="password" id="inputPassword" class="form-control" placeholder="mdp" class="form-email form-control" value="<?php if(isset($SESSION['mdp'])) {
										echo $_SESSION['mdp'];
									} ?>" required>
									<label for="inputPassword">Mot de passe</label>
									
								</div>
								
								
								<button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Connexion</button>
								
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


</body>
</html>


<?php
	$email=$_POST['email'];
	$mdp=$_POST['mdp'];
	$profilD=$_POST['D'];
	$profilS=$_POST['S'];
	
	if(!filter_var($email,FILTER_FLAG_EMAIL)){
		header("Location:../authentification.php?invalidemail");
		echo '<div class="alert alert-danger"><b>Erreur:</b> Aucun compte associé à ce login</div>';
	}
	elseif (!filter_var($mdp,FILTER_FLAG))
	


?>


<?php
	

	if (isset($_GET['msg']) && $_GET['msg'] == "loginincorrect")
	{
		echo '<div class="alert alert-danger"><b>Erreur:</b> Aucun compte associé à ce login</div>';
	}
	else if (isset($_GET['msg']) && $_GET['msg'] == "mdpincorrect")
	{
		echo '<div class="alert alert-danger">
            <b>Erreur:</b> Votre mot de passe est incorrecte
        </div>';
	}
?>

