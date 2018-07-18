<?php
/**
* phpBB Extension - marttiphpbb jqueryuidatepicker
* @copyright (c) 2018 marttiphpbb <info@martti.be>
* @license GNU General Public License, version 2 (GPL-2.0)
*/

namespace marttiphpbb\jqueryuidatepicker;

use phpbb\extension\base;
use marttiphpbb\jqueryuidatepicker\service\store;

class ext extends base
{
	/**
	 * phpBB 3.2.1+ and PHP 7+
	 */
	public function is_enableable()
	{
		$config = $this->container->get('config');
		return phpbb_version_compare($config['version'], '3.2.1', '>=') && version_compare(PHP_VERSION, '7', '>=');
	}
}
