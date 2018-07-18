<?php
/**
* phpBB Extension - marttiphpbb JQuery UI Datepicker
* @copyright (c) 2018 marttiphpbb <info@martti.be>
* @license GNU General Public License, version 2 (GPL-2.0)
*/

namespace marttiphpbb\jqueryuidatepicker\migrations;

use marttiphpbb\jqueryuidatepicker\util\cnst;

class mgr_1 extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return [
			'\phpbb\db\migration\data\v32x\v321',
		];
	}

	public function update_data()
	{
		return [
			['config.add', [cnst::THEME, 'smoothness']],

			['module.add', [
				'acp',
				'ACP_CAT_DOT_MODS',
				cnst::L_ACP,
			]],

			['module.add', [
				'acp',
				cnst::L_ACP,
				[
					'module_basename'	=> '\marttiphpbb\jqueryuidatepicker\acp\main_module',
					'modes'				=> [
						'settings',
					],
				],
			]],
		];
	}
}
