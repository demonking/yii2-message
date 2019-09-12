<?php


namespace demonking\message;

use Yii;
use yii\base\BootstrapInterface;
use yii\console\Application as ConsoleApplication;
use yii\i18n\PhpMessageSource;
use yii\web\GroupUrlRule;

class Bootstrap implements BootstrapInterface
{
    public function bootstrap($app)
	{
		/** @var Module $module */
		if ($app->hasModule('message') && $app->getModule('message') instanceof Module) {


			$module = $app->getModule('message');
			if ($app instanceof ConsoleApplication) { 
			}else{
				$configUrlRule = [
					'class' => 'yii\web\GroupUrlRule',
					'prefix' => '',//$module->prefix,
					'rules' => $module->urlRules,
				];


				if ($module->urlPrefix != 'message') {
					$configUrlRule['routePrefix'] = 'message';
				}
				$rules = Yii::createObject($configUrlRule);
				/*
				echo '<pre>';
				var_dump($rules);
				die();*/
				
				$app->urlManager->addRules([$rules],true);
				
			}/*
            if (!isset($app->get('i18n')->translations['message*'])) {
                  $app->get('i18n')->translations['message*'] = [
                      'class' => PhpMessageSource::className(),
                      'basePath' => __DIR__ . '/messages',
                      'sourceLanguage' => 'en-US'
                  ];
			}*/
		}

    }
}
