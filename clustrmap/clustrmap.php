<?php
/**
 * Plugin clustrmap
 *
 * @package	PLX
 * @version	1.0.0
 * @date	06/01/2014
 * @author	Laurent Navet (Mali)
 **/
class clustrmap extends plxPlugin {

	/**
	 * Constructeur de la classe clustrmap
	 *
	 * @param	default_lang	langue par défaut utilisée par PluXml
	 * @return	null
	 * @author	Laurent Navet
	 **/
	public function __construct($default_lang) {

		# Appel du constructeur de la classe plxPlugin (obligatoire)
		parent::__construct($default_lang);
		
		# Déclarations des hooks
		$this->addHook('ThemeEndHead', 'addclustrmap');
	}

	/**
	 * Méthode qui ajoute l'insertion du fichier javascript de clustrmap dans la partie <head> du site
	 *
	 * @return	stdio
	 * @author	Laurent Navet
	 **/	
	public function addclustrmap() {
            echo "\n\n\t<!-- ClustrMap -->\n";
            echo "\t<script type=\"text/javascript\">\n";
            echo "\tfunction cantload() {\n";
            echo "\t    img = document.getElementById(\"clustrMapsImg\");\n";
            echo "\t    img.onerror = null;\n";
            echo "\t    img.src = \"http://clustrmaps.com/images/clustrmaps-back-soon.jpg\";\n";
            echo "\t    document.getElementById(\"clustrMapsLink\").href = \"http://clustrmaps.com\";\n";
            echo "\t    } \n";
            echo "\timg = document.getElementById(\"clustrMapsImg\");\n";
            echo "\timg.onerror = cantload;\n";
            echo "\t</script>\n";
            echo "\t<!-- end ClustrMap -->\n";
	}

}
?>
