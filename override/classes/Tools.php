<?php

class Tools extends ToolsCore {

	static public function getExtraTranslation($string)
	{
		if (!class_exists('ExtraTranslations'))
			require_once (_PS_ROOT_DIR_."/modules/extratranslations/extratranslations.php");
		
		return ExtraTranslations::get($string);
	}

}
