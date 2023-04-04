<!DOCTYPE html>
<html>
<head>
		<title>Mon joli blog</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
<body>

<?php 

$login_valide="Login";
$mdp_valide="Mot de passe";

if(isset($_POST['login']) & isset($_POST['mdp'])) {

        if ($login_valide == $_POST['login'] && $mdp_valide == $_POST['mdp']) {
            session_start();
            $_SESSION['login']=$_POST['login'];
            $_SESSION['mdp']=$_POST['mdp'];

            echo '<section id="footer">
                    <div class="container">
                        <div class="col-12">
                            <ul class="actions special">
                                <li><a href="index.php" class="button primary">Revenir à l\'accueil</a></li>
                            </ul>
                        </div>
                        <p>Bonjour '.$_SESSION["login"].'!<br>Votre mot de passe est '.$_SESSION["mdp"].'
                    </div>
                 </section>';

        } else {
            if ($login_valide != $_POST['login']){
                echo '<section id="footer">
                <div class="container">
                    <header class="major" id="connect">
                        <p>Votre Login est incorrect !</p>
                    </header>
                    <form method="post" action="#" autocomplete="off">
                        <div class="row gtr-uniform">
                            <div class="col-12 col-12-xsmall">
                                <input type="text" name="login" id="login" placeholder="Login" /></div>
                            <div class="col-12 col-12-xsmall">
                                <input type="password" name="mdp" id="mdp" placeholder="Mot de passe" /></div>
                            <div class="col-12">
                                <ul class="actions special">
                                    <li><input type="submit" value="Se connecter" class="primary" /></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
            </section>';

            } if ($mdp_valide != $_POST['mdp']){
            echo '<section id="footer">
                    <div class="container">
                        <header class="major" id="connect">
                            <p>Votre Mot de passe est incorrect !</p>
                        </header>
                        <form method="post" action="#" autocomplete="off">
                            <div class="row gtr-uniform">
                                <div class="col-12 col-12-xsmall">
                                    <input type="text" name="login" id="login" placeholder="Login" /></div>
                                <div class="col-12 col-12-xsmall">
                                    <input type="password" name="mdp" id="mdp" placeholder="Mot de passe" /></div>
                                <div class="col-12">
                                    <ul class="actions special">
                                        <li><input type="submit" value="Se connecter" class="primary" /></li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>';
            }
        } 
} else {
    echo '<section id="footer">
    <div class="container">
        <header class="major" id="connect">
            <h2>Se connecter</h2>
        </header>
        <form method="post" action="#" autocomplete="off">
            <div class="row gtr-uniform">
                <div class="col-12 col-12-xsmall">
                <input type="text" name="login" id="login" placeholder="Login" /></div>
                <div class="col-12 col-12-xsmall">
	                <input type="password" name="mdp" id="mdp" placeholder="Mot de passe" />
                </div>
		        <div class="col-12">
	                <ul class="actions special">
		                <li><input type="submit" value="Se connecter" class="primary" /></li>
		            </ul>
			    </div>
			</div>
		</form>
	</div>
</section>';

}

?>



</body>
</html>
