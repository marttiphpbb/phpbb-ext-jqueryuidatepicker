<?php
/**
* phpBB Extension - marttiphpbb jqueryuidatepicker
* @copyright (c) 2018 marttiphpbb <info@martti.be>
* @license GNU General Public License, version 2 (GPL-2.0)
*/

namespace marttiphpbb\jqueryuidatepicker\acp;

use marttiphpbb\jqueryuidatepicker\util\cnst;

class main_info
{
	function module()
	{
		return [
			'filename'	=> '\marttiphpbb\jqueryuidatepicker\acp\main_module',
			'title'		=> cnst::L_ACP,
			'modes'		=> [			
				'config'	=> [
					'title'	=> cnst::L_ACP . '_CONFIG',
					'auth'	=> 'ext_marttiphpbb/jqueryuidatepicker && acl_a_board',
					'cat'	=> [cnst::L_ACP],
				],						
			],
		];
	}
}
