<?php
/**
 * User: Zachary Tong
 * Date: 2013-02-09
 * Time: 07:18 PM
 * Auto-generated by "generate.php"
 */
namespace sherlock\components\queries;

use sherlock\components;
use sherlock\common\exceptions;


/**
 * @method \sherlock\components\queries\DisMax tie_breaker() tie_breaker(float $value) Default: 0.5
 * @method \sherlock\components\queries\DisMax boost() boost(float $value) Default: 2
 * @method \sherlock\components\queries\DisMax queries() queries(array $value)

 */
class DisMax extends \sherlock\components\BaseComponent implements \sherlock\components\QueryInterface
{
	public function __construct()
	{
		$this->params['$tie_breaker'] = 0.5;
$this->params['$boost'] = 2;

	}
}

?>