<?php
/**
 * Plugin slimbox2
 *
 * @package	PLX
 * @version	2.0.4
 * @date	06/09/2012
 * @author	Laurent Navet (Mali)
 **/

class slimbox2 extends plxPlugin {
	/**
	 * Constructeur de la classe slimbox2
	 *
	 * @param	default_lang	langue par défaut utilisée par PluXml
	 * @return	null
	 * @author	Laurent Navet
	 **/

	public function __construct($default_lang) {

		# Appel du constructeur de la classe plxPlugin (obligatoire)
		parent::__construct($default_lang);
		# Déclarations des hooks
		$this->addHook('ThemeEndHead', 'addSlimbox2');
		$this->addHook('AdminTopEndHead', 'addSlimbox2');
	 }
	/**
	 * Méthode qui ajoute l'insertion du fichier javascript de slimbox2 dans la partie <head> du site
	 *
	 * @return	stdio
	 * @author	Laurent Navet
	 **/
	public function addSlimbox2() {
		echo "\t".'<link rel="stylesheet" href="'.PLX_PLUGINS.'slimbox2/css/slimbox2.css" type="text/css" media="screen" />'."\n";
		echo "\t".'<script type="text/javascript" src="'.PLX_PLUGINS.'slimbox2/js/slimbox2.js"></script>'."\n";
	}
}
?>
