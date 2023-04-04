<?php session_start(); ?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Mon joli blog</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

			<section id="header">
				<header class="major">
					<h1>Mon joli blog</h1>
					<p>Articles minimalistes pour quotidiens chargés</p>
				</header>

				<div class="container">
					<ul class="actions special">

                        <?php if(isset($_SESSION['login']) && isset($_SESSION['mdp'])):?>
						<li>
							<a href="#footer" class="button primary scrolly">Ajouter un article</a>
						</li>
						<li>
							<a href="se-deco.php" class="button primary">Se déconnecter</a>
						</li>

                        <?php else:?>
						<li>
							<a href="se-co.php" class="button primary">Se connecter</a></li>
						</li>
                        <?php endif;?>

					</ul>
				</div>
			</section>

			<section id="articles" class="main">
				<div class="container">
					<div class="content">
						<article>
			                <header class="major">
			                    <h2>Recette de la tartiflette</h2>
			                </header>
			                <section>
			                    <p>
			                    	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec pharetra sapien. Aliquam rutrum nibh nec enim luctus molestie. Cras consequat condimentum magna a gravida. Etiam sapien risus, bibendum id velit ac, congue porttitor sapien.
			                    </p>
			                        <em>
			                            Article publié par John Doe
			                        </em>
			                    <hr />
			                </section>
			            </article>
			            <article>
			                <header class="major">
			                    <h2>Recette de la raclette</h2>
			                </header>
			                <section>
			                    <p>
			                    	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec pharetra sapien. Aliquam rutrum nibh nec enim luctus molestie. Cras consequat condimentum magna a gravida. Etiam sapien risus, bibendum id velit ac, congue porttitor sapien.
			                    </p>
			                        <em>
			                            Article publié par John Doe
			                        </em>
			                    <hr />
			                </section>
			            </article>
			            <article>
			                <header class="major">
			                    <h2>Recette de la fondue Savoyarde</h2>
			                </header>
			                <section>
			                    <p>
			                    	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec pharetra sapien. Aliquam rutrum nibh nec enim luctus molestie. Cras consequat condimentum magna a gravida. Etiam sapien risus, bibendum id velit ac, congue porttitor sapien.
			                    </p>
			                        <em>
			                            Article publié par John Doe
			                        </em>
			                    <hr />
			                </section>
			            </article>
					</div>
				</div>
			</section>
	
			<section id="footer">
				<div class="container">




                <?php if(isset($_SESSION['login']) && isset($_SESSION['mdp'])):?>
					<header class="major">
                        
                        <?php echo implode ($erreur); ?>
				        <h2>Ajout d'un article</h2>
				    </header>
				    <form method="post" action="#footer" autocomplete="off">
				        <div class="row gtr-uniform">
				            <div class="col-12 col-12-xsmall">
				            <input type="text" name="titre" id="titre" placeholder="Titre" /></div>

				            <div class="col-12">
				            <textarea name="contenu" id="contenu" placeholder="Contenu" rows="4"></textarea></div>
				            <div class="col-12">
				                <ul class="actions special">
				                    <li><input type="submit" value="Ajouter" class="primary" /></li>
				                </ul>
				            </div>
				        </div>
				    </form>
                    <?php 
                     $newTitre=[]; 
                     $newContenu=[];
                     $erreur=[];

                     if(!isset($_POST['titre']) || !isset($_POST['contenu'])) {
                        array_push($erreur,"Il faut un titre et un contenu pour soumettre votre article.");
                        return;
                     } else {
                        $titre=$_POST['titre'];
                        $contenu=$_POST['contenu'];
                        array_push($newTitre,strip_tags($titre));
                        array_push($newContenu,strip_tags($contenu));
                     }
                    ?>

                     

                    <?php else:?>
			        <header class="major" id="connect">
			            <h2>Se connecter</h2>
			        </header>
			        <form method="post" action="se-co.php" autocomplete="off">
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
                    <?php endif;?>

				</div>
			</section>

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jq.key.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>