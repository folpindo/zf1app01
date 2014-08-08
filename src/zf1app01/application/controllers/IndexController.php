<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
		$log = new Monolog\Logger('name');
		Zend_Debug::dump($log);
		$test = new \Test\Test();
		Zend_Debug::dump($test);

		$sample = new \Sample\Test();
		Zend_Debug::dump($sample);

		$app = new \Application\App();
		Zend_Debug::dump($app);
	
		#spl_autoload_register(array('Zend_Loader_Autoloader', 'autoload'));	
		$modelInfo = new Application_Model_Info();
		Zend_Debug::dump($modelInfo);
    }


}

