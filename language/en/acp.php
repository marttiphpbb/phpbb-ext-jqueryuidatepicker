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

	'ACP_MARTTIPHPBB_JQUERYUIDATEPICKER_CONFIG_EXPLAIN'			
		=> 'This extension provides a basic integration of JQuery UI Datepicker for use in the ACP 
			by other extensions. See <a href="http://jqueryuidatepicker.net/doc/manual.html#config">
			JQuery UI Datepicker configuration</a> and 
			<a href="https://github.com/marttiphpbb/phpbb-ext-jqueryuidatepicker">
			configuration options defined by this extension</a> for all possible options.',
	'ACP_MARTTIPHPBB_JQUERYUIDATEPICKER_VERSION'			=> '<a href="http://jqueryuidatepicker.net">JQuery UI Datepicker</a> version: %s',
	'ACP_MARTTIPHPBB_JQUERYUIDATEPICKER_THEME'				=> 'Theme',
	'ACP_MARTTIPHPBB_JQUERYUIDATEPICKER_TRY_THEME'			=> 'Try theme',
	'ACP_MARTTIPHPBB_JQUERYUIDATEPICKER_TRY_THEME_EXPLAIN'	=> 'This is to try other themes. Only "theme" defined in the json configuration below will be saved.',
	'ACP_MARTTIPHPBB_JQUERYUIDATEPICKER_MODE'				=> 'Mode',
	'ACP_MARTTIPHPBB_JQUERYUIDATEPICKER_KEYMAP'				=> 'Key map',
	'ACP_MARTTIPHPBB_JQUERYUIDATEPICKER_CONFIG_SAVED'		=> 'The configuration was saved.',
	'ACP_MARTTIPHPBB_JQUERYUIDATEPICKER_INVALID_JSON'		=> 'The json configuration contains at least one error.',
	'ACP_MARTTIPHPBB_JQUERYUIDATEPICKER_RESTORE_DEFAULTS'	=> 'Restore defaults',
	'ACP_MARTTIPHPBB_JQUERYUIDATEPICKER_JSON_ERROR_DEPTH'
		=> 'JSON error: Maximum stack depth exceeded',
	'ACP_MARTTIPHPBB_JQUERYUIDATEPICKER_JSON_ERROR_STATE_MISMATCH'
		=> 'JSON error: Underflow or the modes mismatch',
	'ACP_MARTTIPHPBB_JQUERYUIDATEPICKER_JSON_ERROR_CTRL_CHAR'
		=> 'JSON error: Unexpected control character found',
	'ACP_MARTTIPHPBB_JQUERYUIDATEPICKER_JSON_ERROR_SYNTAX'
		=> 'JSON syntax error, malformed JSON',
	'ACP_MARTTIPHPBB_JQUERYUIDATEPICKER_JSON_ERROR_UTF8'
		=> 'JSON error. Malformed UTF-8 characters, possibly incorrectly encoded.',
	'ACP_MARTTIPHPBB_JQUERYUIDATEPICKER_JSON_ERROR_UNKNOWN'
		=> 'JSON error: unknown error.',
]);
