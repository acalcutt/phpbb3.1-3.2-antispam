<?php

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_CLEANTALK_TITLE'			=> 'CleanTalk',

	'ACP_CLEANTALK_SETTINGS'		=> 'Настройки защиты от спама',
	'ACP_CLEANTALK_SETTINGS_SAVED'		=> 'Настройки защиты от спама сохранены!',

	'ACP_CLEANTALK_REGS_LABEL'		=> 'Проверять регистрации',
	'ACP_CLEANTALK_REGS_DESCR'		=> 'Спам-боты будут отвергнуты с выводом причины.',

	'ACP_CLEANTALK_GUESTS_LABEL'		=> 'Проверять анонимных',
	'ACP_CLEANTALK_GUESTS_DESCR'		=> 'Посты и темы от анонимных будут проверяться на спам. Спам будет отвергнут с выводом причины.',

	'ACP_CLEANTALK_NUSERS_LABEL'		=> 'Проверять вновь зарегистрированных',
	'ACP_CLEANTALK_NUSERS_DESCR'		=> 'Посты и темы от вновь зарегистрированных будут проверяться на спам. Спам будет отвергнут с выводом причины.',

	'ACP_CLEANTALK_APIKEY_LABEL'		=> 'Ключ доступа',
	'ACP_CLEANTALK_APIKEY_DESCR1'		=> 'Для получения зарегистрируйтесь на сайте ',
	'ACP_CLEANTALK_APIKEY_DESCR2'		=> '',

));
