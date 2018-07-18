<?php
/**
* phpBB Extension - marttiphpbb JQuery UI Datepicker
* @copyright (c) 2018 marttiphpbb <info@martti.be>
* @license GNU General Public License, version 2 (GPL-2.0)
*/

namespace marttiphpbb\jqueryuidatepicker\event;

use phpbb\event\data as event;
use marttiphpbb\jqueryuidatepicker\service\load;
use marttiphpbb\jqueryuidatepicker\util\cnst;
use phpbb\template\twig\twig as template;
use phpbb\template\twig\loader;
use phpbb\config\config;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class listener implements EventSubscriberInterface
{
	protected $config;
	protected $phpbb_root_path;
	protected $enabled = false;

	public function __construct(
		string $phpbb_root_path,
		config $config
	)
	{
		$this->phpbb_root_path = $phpbb_root_path;
		$this->config = $config;
	}

	static public function getSubscribedEvents()
	{
		return [
			'core.twig_environment_render_template_before'
				=> 'core_twig_environment_render_template_before',
		];
	}

	public function enable():void
	{
		$this->enabled = true;
	}

	public function core_twig_environment_render_template_before(event $event):void
	{
		if (!$this->enabled)
		{
			return;
		}

		$context = $event['context'];
		$context['marttiphpbb_jqueryuidatepicker'] = [
			'path' 		=> $this->phpbb_root_path . cnst::EXT_PATH . cnst::DIR,
			'theme'		=> $this->config[cnst::THEME],
		];
		$event['context'] = $context;
	}
}
