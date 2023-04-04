<!DOCTYPE html>
<html lang="en">
<head>
	<title>Exercices transmissions des données via formulaire en PHP</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="assets/logo-creative.svg"/>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="assets/style.css" rel="stylesheet">
</head>
<body>
	<div class="bg-img1 size1 flex-w flex-c-m p-t-20 p-b-55 p-l-15 p-r-15">
		<div class="wsize1 bor1 bg1 p-b-45 p-l-15 p-r-15 p-t-20 respon1">
			<div class="wrappic1">
				<img src="assets/logo-creative.svg" alt="Logo Créative" width="75">
			</div>
			<p class="txt-center m1-txt1 p-t-33 p-b-68">
        Exercices transmissions des données via formulaire en PHP
			</p>
            <div class="alert alert-info text-justify">
                <p>
                    En vous basant sur le template HTML suivant, créez les pages PHP correspondantes afin de permettre l'affichage des données saisies. Les noms des pages à créer sont indiqués dans les attributs des formulaires.
                </p>
                <p>
                    Chaque champ devra être traité selon la méthode associée à chaque formulaire et quelques tests devront être réalisés en amont :
                </p>
                <ul class="p-l-50">
                    <li>Vérification de l'existence des variables</li>
                    <li>Vérification du type de variable (alphanumérique, numérique, tableau...)</li>
                    <li>Vérification de longueur et de taille</li>
                    <li>Echappement des balises HTML</li>
                    <li>...</li>
                </ul>
            </div>

            <!-- Exercice GET -->
            <div class="card">
                <div class="card-header">
                    <span class="font-weight-bold">Envoi de données avec <code>$_GET</code></span>
                </div>
                <div class="card-body">
                    <div class="card-text">
                        <form action='form-get.php'>
                            <div class="row">
                                <div class="col">
                                    <p class='form-group'>
                                      <label for='name'>Votre nom</label>
                                      <input class='form-control' id='name' name='name' required type='text' value=''>
                                    </p>
                                </div>
                                <div class="col">
                                    <p class='form-group'>
                                      <label for='email'>E-mail</label>
                                      <input class='form-control' id='email' name='email' required type='email'>
                                    </p>
                                </div>
                                <div class="col">
                                    <p class='form-group'>
                                      <label for='promo'>Promotion</label>
                                      <input class='form-control' id='promo' name='promo' type='text'>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class='form-group'>
                                        <label class='label'>Langage favoris :</label>
                                        <div class="form-check">
                                          <input class='form-check-input' id='option-0' name='option' type='radio' value='0'>
                                          <label class='form-check-label' for='option-0'>PHP</label>
                                        </div>
                                        <div class="form-check">
                                          <input class='form-check-input' id='option-1' name='option' type='radio' value='1'>
                                          <label class='form-check-label' for='option-1'>Javascript</label>
                                        </div>
                                        <div class="form-check">
                                          <input class='form-check-input' id='option-2' name='option' type='radio' value='2'>
                                          <label class='form-check-label' for='option-2'>HTML</label>
                                        </div>
                                        <div class="form-check">
                                          <input class='form-check-input' id='option-3' name='option' type='radio' value='3'>
                                          <label class='form-check-label' for='option-3'>CSS</label>
                                        </div>
                                        <div class="form-check">
                                          <input class='form-check-input' id='option-4' name='option' type='radio' value='4'>
                                          <label class='form-check-label' for='option-4'>Java</label>
                                        </div>
                                        <div class="form-check">
                                          <input class='form-check-input' id='option-5' name='option' type='radio' value='5'>
                                          <label class='form-check-label' for='option-5'>SQL</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                  <label class='label' for='motivations'>Motivations</label>
                                  <textarea class="form-control" cols='50' id='motivations' name='motivations' rows='4'></textarea>
                                </div>
                            </div>
                            <div class='form-group'>
                              <input class="btn btn-primary" type='submit' value='Envoyer en GET'>
                            </div>
                          </form>
                    </div>
                </div>
            </div>

            <!-- Exercice POST -->
            <div class="card">
                <div class="card-header">
                     <span class="font-weight-bold">Envoi de données avec <code>$_POST</code></span>
                </div>
                <div class="card-body">
                    <div class="card-text">
                        <form action='form-post.php' method="post">
                            <div class="row">
                                <div class="col">
                                    <p class='form-group'>
                                      <label for='login'>Votre login</label>
                                      <input class='form-control' id='login' name='login' required type='text' value=''>
                                    </p>
                                </div>
                                <div class="col">
                                    <p class='form-group'>
                                      <label for='password'>Mot de passe</label>
                                      <input class='form-control' id='password' name='password' required type='password' value=''>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class='form-group'>
                                      <label for='select'>Diplôme visé</label>
                                      <select class="form-control" id='select' name="diplome" required>
                                        <option selected value=''></option>
                                        <option value='bts'>BTS </option>
                                        <option value='licence'>Licence</option>
                                        <option value='master'>Master</option>
                                      </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <p>Matière concernées</p>
                                    <div class="form-check">
                                        <input class='form-check-input' id='choice-0' name='choice[]' type='checkbox' value='0'>
                                        <label class='form-check-label' for='choice-0'>Langage PHP</label>
                                    </div>
                                    <div class="form-check">
                                        <input class='form-check-input' id='choice-1' name='choice[]' type='checkbox' value='1'>
                                        <label class='form-check-label' for='choice-1'>Bases de données</label>
                                    </div>
                                    <div class="form-check">
                                        <input class='form-check-input' id='choice-2' name='choice[]' type='checkbox' value='2'>
                                        <label class='form-check-label' for='choice-2'>HTML/CSS</label>
                                    </div>
                                    <div class="form-check">
                                        <input class='form-check-input' id='choice-3' name='choice[]' type='checkbox' value='3'>
                                    <label class='form-check-label' for='choice-3'>Algorithmie</label>
                                    </div>
                                    <div class="form-check">
                                        <input class='form-check-input' id='choice-4' name='choice[]' type='checkbox' value='4'>
                                        <label class='form-check-label' for='choice-4'>JavaScript</label>
                                    </div>
                                </div>
                            </div>
                            <div class='form-group'>
                              <input class="btn btn-primary" type='submit' value='Envoyer en POST'>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
		</div>
	</div>
</body>
</html>