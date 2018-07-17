<?php

/**
* phpBB Extension - marttiphpbb JQuery UI Datepicker
* @copyright (c) 2018 marttiphpbb <info@martti.be>
* @license GNU General Public License, version 2 (GPL-2.0)
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [

	'ACP_MARTTIPHPBB_JQUERYUIDATEPICKER'			=> 'JQuery UI Datepicker',
	'ACP_MARTTIPHPBB_JQUERYUIDATEPICKER_CONFIG'		=> 'Configuration',
]);
