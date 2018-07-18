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

	'ACP_MARTTIPHPBB_JQUERYUIDATEPICKER_SETTINGS_EXPLAIN'
		=> 'This extension provides a basic integration of JQuery UI Datepicker for use
			by other extensions.',
	'ACP_MARTTIPHPBB_JQUERYUIDATEPICKER_VERSION'
		=> '<a href="https://jqueryui.com">JQuery UI</a> version: %s',
	'ACP_MARTTIPHPBB_JQUERYUIDATEPICKER_THEME'
		=> 'Datepicker theme',
	'ACP_MARTTIPHPBB_JQUERYUIDATEPICKER_TRY_THEME'
		=> 'Try theme',
	'ACP_MARTTIPHPBB_JQUERYUIDATEPICKER_TRY_THEME_EXPLAIN'
		=> 'This is only to see how the selected theme looks like.',
	'ACP_MARTTIPHPBB_JQUERYUIDATEPICKER_SETTINGS_SAVED'
		=> 'The settings were saved.',
	'ACP_MARTTIPHPBB_JQUERYUIDATEPICKER_THEME_LIST_FAIL'
		=> 'Failed to read the list of datepicker themes',
	'ACP_MARTTIPHPBB_JQUERYUIDATEPICKER_THEME_NONE'
		=> '** none **',

]);
