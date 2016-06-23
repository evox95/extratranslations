<?php
/*
*
*  @author     	Mateusz Bartocha <contact@bestcoding.net>
*  @www			https://bestcoding.net
*/

if ( !defined('_PS_VERSION_') ) exit;

class ExtraTranslations extends Module {
    
    private static $instance = null;

    public function __construct()
    {
        parent::__construct();

        $this->name = 'extratranslations';
		$this->tab = 'front_office_features';
		$this->version = '1.0.0';
		$this->author = 'Mateusz Bartocha [contact@bestcoding.net]';
		$this->need_instance = 0;
		$this->bootstrap = true;
		$this->ps_versions_compliancy = array('min' => '1.5', 'max' => _PS_VERSION_);
        $this->displayName = 'Extra Translations';
        $this->description = 'You can add translations everywhere by Tools::getExtraTranslation(\'string\')';
    }
    
    public static function get($string)
    {
    	if (self::$instance === null)
    		self::$instance = new ExtraTranslations();
    		
    	return self::$instance->l($string);
    }

}
