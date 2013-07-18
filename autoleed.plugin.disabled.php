<?php
/*
@name AutoLeed
@author Forty-Six <Forty-Six>
@link https://github.com/Forty-Six
@licence CC by nc sa http://creativecommons.org/licenses/by-nc-sa/2.0/fr/
@version 0.1
@description Ce plugin permet un auto-reload régulier de sa page d'accueil.
*/

// Fonction d'insertion du javascript
function FS_AutoLeed () {
  
	Plugin::addJs("/js/main.js");
}

// Appel de la fonction d'insertion
Plugin::addHook("index_post_treatment","FS_AutoLeed");
?>
