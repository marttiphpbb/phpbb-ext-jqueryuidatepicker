<?php
/**
* phpBB Extension - marttiphpbb jqueryuidatepicker
* @copyright (c) 2018 marttiphpbb <info@martti.be>
* @license GNU General Public License, version 2 (GPL-2.0)
*/

namespace marttiphpbb\jqueryuidatepicker\acp;

use marttiphpbb\jqueryuidatepicker\util\cnst;

class main_module
{
	var $u_action;

	function main($id, $mode)
	{
		global $phpbb_container;

		$request = $phpbb_container->get('request');
		$template = $phpbb_container->get('template');
		$language = $phpbb_container->get('language');
		$config = $phpbb_container->get('config');

		$language->add_lang('acp', cnst::FOLDER);
		add_form_key(cnst::FOLDER);

		switch($mode)
		{
			case 'settings':

				$this->tpl_name = 'settings';
				$this->page_title = $language->lang(cnst::L_ACP . '_SETTINGS');

				if ($request->is_set_post('submit'))
				{
					if (!check_form_key(cnst::FOLDER))
					{
						trigger_error('FORM_INVALID');
					}

					$config->set(cnst::THEME, $request->variable('datepicker_theme', ''));

					trigger_error($language->lang(cnst::L_ACP . '_SETTINGS_SAVED') . adm_back_link($this->u_action));
				}

				$component_info = file_get_contents(__DIR__ . '/../' . cnst::DIR . 'component.json');
				$jqueryui_version = json_decode($component_info, true)['version'];

				$template->assign_block_vars('datepicker_themes', [
					'VALUE'			=> 'none',
					'NAME'			=> $language->lang('ACP_MARTTIPHPBB_JQUERYUIDATEPICKER_THEME_NONE'),
				]);

				$dir = __DIR__ . '/../' . cnst::THEMES_DIR;

				$scanned = @scandir($dir);

				if ($scanned === false)
				{
					trigger_error('ACP_MARTTIPHPBB_JQUERYUIDATEPICKER_THEME_LIST_FAIL', E_USER_WARNING);
				}

				$scanned = array_diff($scanned, ['.', '..', '.htaccess']);

				$scanned = [] + $scanned;

				foreach ($scanned as $dirname)
				{
					$dirname = trim($dirname);

					if (!is_dir($dir . '/' . $dirname))
					{
						continue;
					}

					$template->assign_block_vars('datepicker_themes', [
						'VALUE'			=> $dirname,
						'NAME'			=> $dirname,
					]);
				}

				$template->assign_vars([
					'JQUERYUI_VERSION'		=> $jqueryui_version,
					'DATEPICKER_THEME'		=> $config[cnst::THEME],
				]);

			break;
		}

		$template->assign_var('U_ACTION', $this->u_action);
	}
}
