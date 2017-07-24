<?php

namespace cleantalk\antispam\cron\task;

class cleantalk_antispam_sfw_logs_send extends \phpbb\cron\task\base
{

	protected $config;

	public function __construct(\phpbb\config\config $config)
	{
		$this->config = $config;
	}
		
	public function run()
	{
		\cleantalk\antispam\model\main_model::sfw_send_logs($this->config['cleantalk_antispam_apikey']);
		$this->config->set('cleantalk_antispam_sfw_logs_send_last_gc', time());
	}
	
	// Is allow to run?
	public function is_runnable()
	{	
		return ($this->config['cleantalk_antispam_sfw_enabled'] && $this->config['cleantalk_antispam_key_is_ok']);
	}
	
	// Next run
	public function should_run()
	{
		return $this->config['cleantalk_antispam_sfw_logs_send_last_gc'] < time() - $this->config['cleantalk_antispam_sfw_logs_send_gc'];
	}
	
}

