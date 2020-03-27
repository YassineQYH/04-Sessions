<!-- Les sessions !! -->
<!-- --------------- -->

<!-- C'est une sorte de cookie TOP SECRET ! L'utilisateur ne peut ni modifier ni lire les informations qui sont à l'intérieur de la session. -->

<!-- 
    Pour utiliser une session en PHP, il faut utiliser une fonction qui s'appel :
    session_start() 
 -->
<!-- Attention, comme la fonction setCookie ou header, cette fonction va modifier les En-tête qui seront renvoyer au navigateur.
Il est donc important qu'il n'y ai aucun affichage de contenu avant ! -->

<?php 
session_start();

/* 
    Une fois cette fonction utilisé, on va pouvoir modifier une variable global qui s'appel $_SESSION
    Elle permet :
    de lire et de modifier des informations qui sont sauvegardé en session. 
*/

/* 
    Par exemple, j'aimerais bien définir le rôle de l'utilisateur et dire que c'est un admin.
    Je ne peux pas le faire dans cookie car tout le monde pourrait le modifier. 
*/
/* 
    Donc la je vais utilisé la session, elle fonctionne comme un tableau. 
    Donc, je peux créer une nouvelle clé "role" et sauvegarder le rôle administrateur dans la session. 
*/
$_SESSION['role'] = 'administrateur'; // Mettre en commentaire la ligne 70 pour que celle ci fonctionne.
/* 
    Si j'ai besoin de récupérer les informations de la session dans une autre page,
    Il faut faire :
*/
/* session_start(); */
/* C'est une fonction qui permet de démarrer la session ou d'en continuer une, si une session éxiste et ensuite, la où je le souhaite, je vais pouvoir récuperer les infos*/


/* Maintenant je me rend sur la seconde page (page02.php) où j'ai le session_start() et la définition du rôle */
/* Là, les informations ont été persisté dans la session de l'utilisateur. */

/* On y voit */

/* 
Sessions
Debug

            array(1) {
  ["role"]=>
  string(14) "administrateur"
}
        
*/

/* Il faut savoir que les sessions ne vivent que pendant la navigation de l'utilisateur. Donc si il ferme son nav, la session sera automatiquement perdu. */

/* Allez voir sur l'inspecteur de la page - onglet application/ou/stockage (dépendant du navigateur)
Pour le domaine localhost, on à un nom qui s'appel :: PHPSESSOD 
C'est un cookie qui est automatiquement défini par la fonction session_start()
On a pour cette clé la une valeur aléatoire */
/* 
    Lorsqu'on démarre une session, PHP va créer une sorte d'identifiant qu'il va définir dans un cookie.
    Cet identifiant nous permettra ensuite d'identifier l'utilisateur et de pouvoir lui affiché ses informations.
    Ses informations ne seront pas sauvegarder dans un cookie mais côté serveur.
*/


/* Si je veut supprimer la clé role il faut faire : */

unset($_SESSION['role']); 
/* Je vais sur ma page d'accueil, j'actualise la page et lorsque je retourne sur la page 2 le rôle aura été supprimé. */


/* Description des fonctions session. */
/* https://www.php.net/manual/fr/function.session-start.php */

/* On peut sauvegarder tout type de caractère et pas seulement des chaines de caractère comme pour les cookies.*/


/* ---------------------------------------------------------------------------------- */
/* ---------------------------------------------------------------------------------- */
/* ------------------------*/
/* echo session_save_path(); */ // Permet d'obtenir le chemin où sont sauvegarder les sessions de notre PHP.
/* ------------------------*/   // Il faut le mettre avant le session_start() // Echo pour montrer le chemin.


/* Parcourir le chemin sur le pc et ouvrir le fichier avec la même valeur que dans l'inspecteur. */

/* Ouvrir le fichier texte, il sera en format serialisé. */