<?php
/**
 * Plugin ganalytics
 *
 * @package	PLX
 * @version	2.0.4
 * @date	20/09/2012
 * @author	Laurent Navet (Mali)
 **/
class ganalytics extends plxPlugin {

	/**
	 * Constructeur de la classe ganalytics
	 *
	 * @param	default_lang	langue par défaut utilisée par PluXml
	 * @return	null
	 * @author	Laurent Navet
	 **/
	public function __construct($default_lang) {

		# Appel du constructeur de la classe plxPlugin (obligatoire)
		parent::__construct($default_lang);
		
		# Déclarations des hooks
		$this->addHook('ThemeEndHead', 'addganalytics');
	}

	/**
	 * Méthode qui ajoute l'insertion du fichier javascript de ganalytics dans la partie <head> du site
	 *
	 * @return	stdio
	 * @author	Laurent Navet
	 **/	
	public function addganalytics() {
            echo "\n\n\t<!-- GoogleAnalytics -->\n";
            echo "        <script type=\"text/javascript\">\n";
            echo "\n";
            echo "            var _gaq = _gaq || [];\n";
            echo "             _gaq.push(['_setAccount', 'XX-YYYYYYYY-Z']);\n";
            echo "            _gaq.push(['_trackPageview']);\n";
            echo "\n";
            echo "            (function() {\n";
            echo "                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;\n";
            echo "                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';\n";
            echo "                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);\n";
            echo "            })();\n";
            echo "\n";
            echo "        </script>\n";
            echo "\t<!-- end GoogleAnalytics -->\n";
	}

}
?>
