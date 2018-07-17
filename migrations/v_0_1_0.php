<?php
/**
* phpBB Extension - marttiphpbb JQuery UI Datepicker
* @copyright (c) 2018 marttiphpbb <info@martti.be>
* @license GNU General Public License, version 2 (GPL-2.0)
*/

namespace marttiphpbb\jqueryuidatepicker\migrations;
use marttiphpbb\jqueryuidatepicker\util\cnst;
use marttiphpbb\jqueryuidatepicker\service\store;

class v_0_1_0 extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return [
			'\phpbb\db\migration\data\v32x\v321',
		];
	}

	public function update_data()
	{
		$package_json = file_get_contents(__DIR__ . '/../jqueryuidatepicker/package.json');
		$version = json_decode($package_json, true)['version'];

		$default_config_json = file_get_contents(__DIR__ . '/../default_config.json');

		$data = [
			'version'	=> $version,
			'config'	=> $default_config_json,
		];

		return [
			['config_text.add', [store::KEY, serialize($data)]],

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
						'config',
					],
				],
			]],
		];
	}
}
