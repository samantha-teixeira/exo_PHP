<?php

	
	//~ Tableau où l'on va stocker les différents messages à afficher !
	$_retours = [];

	//~ 
	// 1- On teste le nom
	// La variable est théoriquement contenue dans la variable superglobale $_GET
	// On va donc vérifier que le tableau $_GET est alimenté et contient notre occurence "name"
	//~ 
	if(count($_GET) && array_key_exists('name', $_GET)){
		//~ Pour raccourcir la notation, on crée une autre variable
		$name = $_GET['name'];

		//~ On teste si la variable est vide
		// on aurait aussi pu partir de : if (isset($_GET["name"]))
		if(!empty($name)){
			//~ On teste si le nom est bien une chaîne de caractère
			if(is_string($name) && preg_match("/^[A-Za-z '-]+$/",$name)) {
				//~ On prépare le message final en supprimant les balises HTML
				array_push($_retours, 'Votre nom : '.strip_tags($name));
			}else{
				array_push($_retours, 'Votre nom n\'est pas une chaine de caractère ou contient des chiffres !');
			}
		}else{
			array_push($_retours, 'Votre nom n\'a pas été renseigné !');
		}
	}else{
		array_push($_retours, 'La variable à transmettre n\'existe pas.');
	}

	//~ 
	// 2- On teste le mail
	// La variable est théoriquement contenue dans la variable superglobale $_GET
	// On va donc vérifier que le tableau $_GET est alimenté et contient notre occurence "email"
	//~ 
	if(count($_GET) && array_key_exists('email', $_GET)){
		//~ Pour raccourcir la notation, on crée une autre variable
		$email = $_GET['email'];

		//~ On teste si la variable est vide
		if(!empty($email)){
			//~ On teste si le mail est bien une chaîne de caractère
			if(is_string($email)){
				//~ On test si le format du mail convient
				if(filter_var($email, FILTER_VALIDATE_EMAIL)){
					//~ On prépare le message final en supprimant les balises HTML
					array_push($_retours, 'Votre mail : '.strip_tags($email));
				}else{
					array_push($_retours, 'Votre mail n\'est pas considéré comme valide !');
				}
			}else{
				array_push($_retours, 'Votre mail n\'est pas une chaine de caractère !');
			}
		}else{
			array_push($_retours, 'Votre mail n\'a pas été renseigné !');
		}
	}else{
		array_push($_retours, 'La variable à transmettre n\'existe pas.');
	}

	//~ 
	// 3- On teste la promotion
	// La variable est théoriquement contenue dans la variable superglobale $_GET
	// On va donc vérifier que le tableau $_GET est alimenté et contient notre occurence "promo"
	//~ 
	if(count($_GET) && array_key_exists('promo', $_GET)){
		//~ Pour raccourcir la notation, on crée une autre variable
		$promo = $_GET['promo'];

		//~ On teste si la variable est vide
		if(!empty($promo)){
			//~ On teste si la promo est bien une chaîne de caractère
			if(is_string($promo)){
				//~ On prépare le message final en supprimant les balises HTML
				array_push($_retours, 'Votre promotion : '.strip_tags($promo));
			}else{
				array_push($_retours, 'Votre promotion n\'est pas une chaine de caractère !');
			}
		}else{
			array_push($_retours, 'Votre promotion n\'a pas été renseigné !');
		}
	}else{
		array_push($_retours, 'La variable à transmettre n\'existe pas.');
	}

	//~ 
	// 4- On teste le langage favoris
	// La variable est théoriquement contenue dans la variable superglobale $_GET
	// On va donc vérifier que le tableau $_GET est alimenté et contient notre occurence "option"
	//~ 
	if(count($_GET) && array_key_exists('option', $_GET)){
		//~ Pour raccourcir la notation, on crée une autre variable
		$option = $_GET['option'];

		//~ On teste si la variable est vide
		if(!empty($option)){
			//~ On teste si le langage est bien une chaîne de caractère
			if(is_numeric($option)){
				//~ On va vérifier l'existence du langage favoris transmis au sein d'un tableau regroupant toutes les options possibles
				$_langages = [
					0 => 'PHP',
					1 => 'Javascript',
					2 => 'HTML',
					3 => 'CSS',
					4 => 'Java',
					5 => 'SQL'
				];
				if(!empty($_langages[$option])){
					//~ On prépare le message final en supprimant les balises HTML
					array_push($_retours, 'Votre langage favoris : '.strip_tags($_langages[$option]));
				}else{
					array_push($_retours, 'Votre langage favoris n\'est pas présent dans les options disponibles !');
				}
			}else{
				array_push($_retours, 'Votre langage favoris n\'est pas une chaine de caractère !');
			}
		}else{
			array_push($_retours, 'Votre langage favoris n\'a pas été renseigné !');
		}
	}else{
		array_push($_retours, 'La variable à transmettre n\'existe pas.');
	}

	//~ 
	// 5- On teste la motivation
	// La variable est théoriquement contenue dans la variable superglobale $_GET
	// On va donc vérifier que le tableau $_GET est alimenté et contient notre occurence "motivations"
	//~ 
	if(count($_GET) && array_key_exists('motivations', $_GET)){
		//~ Pour raccourcir la notation, on crée une autre variable
		$motivations = $_GET['motivations'];

		//~ On teste si la variable est vide
		if(!empty($motivations)){
			//~ On teste si la motivation est bien une chaîne de caractère
			if(is_string($motivations)){
				//~ On prépare le message final en supprimant les balises HTML
				array_push($_retours, 'Votre motivation : '.strip_tags($motivations));
			}else{
				array_push($_retours, 'Votre motivation n\'est pas une chaine de caractère !');
			}
		}else{
			array_push($_retours, 'Votre motivation n\'a pas été renseignée !');
		}
	}else{
		array_push($_retours, 'La variable à transmettre n\'existe pas.');
	}

	//~ On fusionne et affiche les messages de notre tableau en une seule chaine de caractères.
	echo implode("<br>", $_retours);




    
    // $name = donnees_valide($_GET["name"]);
// $email = donnees_valide($_GET["email"]);
// $promo = donnees_valide($_GET["promo"]);
// $option = donnees_valide($_GET["option"]);
// $motivations = donnees_valide($_GET["motivations"]);

// function donnees_valide($donnees){
//     $donnees = trim($donnees); //supprime le premier et le dernier caractere vide
//     $donnees = stripslashes($donnees); // supprime les antislash
//     $donnees = htmlspecialchars($donnees); // convertit les caractères spéciaux des balises html
//     return $donnees;
// }



// if (!empty($name)
//         && strlen($name) <= 20
//         && preg_match("/^[A-Za-z '-]+$/",$name)
//         && !empty($email)
//         && filter_var($email, FILTER_VALIDATE_EMAIL)
//         && !empty($promo)
//         && strlen($promo) <=30
//         && preg_match("/^[A-Za-z '-]+$/",$promo)
//         && !empty($option)
//         && !empty($motivations)
//         && gettype($motivations) == "string")
//         {
//             echo "Félicitation!!!!!";
//         } 
//         else {
//             header("Location:index.php");
//             function erreur ($champs) {
//                 echo 'Il y à une erreur '.$champs;
//             }

        
//         }
?>	
