<?php

/*
 * This file is part of the Dektrium project.
 *
 * (c) Dektrium project <http://github.com/dektrium/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace demonking\message;

use yii\base\Module as BaseModule;
use Yii;

class Module extends BaseModule
{
    const VERSION = '0.1';

    /** @var array Model map */
    public $modelMap = [];

    /**
     * @var string The prefix for ispman module URL.
     *
     * @See [[GroupUrlRule::prefix]]
     */
	public $urlPrefix = 'message';

	public $prefix = 'message';

    /** @var string The database connection to use for models in this module. */
    public $dbConnection = 'db';

    /** @var array The rules to be used in URL management. */
	public $urlRules = [
	];

	public function init(){
		parent::init();
	}


    /**
     * @return string
     */
    public function getDb()
    {
        return \Yii::$app->get($this->dbConnection);
    }
}
