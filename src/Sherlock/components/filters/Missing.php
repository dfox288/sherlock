<?php
/**
 * User: Zachary Tong
 * Date: 2013-02-19
 * Time: 08:26 PM
 * Auto-generated by "generate.filters.php"
 */
namespace sherlock\components\filters;

use sherlock\components;
use sherlock\common\exceptions;


/**
 * @method \sherlock\components\filters\Missing field() field(string $value)
 * @method \sherlock\components\filters\Missing existence() existence(bool $value) Default: true
 * @method \sherlock\components\filters\Missing null_value() null_value(bool $value) Default: false

 */
class Missing extends \sherlock\components\BaseComponent implements \sherlock\components\FilterInterface
{
	public function __construct($hashMap = null)
	{
		$this->params['existence'] = true;
		$this->params['null_value'] = false;

		parent::__construct($hashMap);
	}
	
	public function toArray()
	{
		$ret = array (
  'missing' => 
  array (
    'field' => $this->params["field"],
    'existence' => $this->params["existence"],
    'null_value' => $this->params["null_value"],
  ),
);
		return $ret;
	}

}

?>