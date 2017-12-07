<?php

/**
*
* @package BB3Invites
* @copyright (c) 2016 PPK
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* Brazilian Portuguese translation by eunaumtenhoid (c) 2017 [ver 1.1.1] (https://github.com/phpBBTraducoes)
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'INVITE' => 'Convite',
	'INVITE_EXPLAIN' => 'Se você tiver um convite, digitio aqui',
	'INVITE_ONLY_EXPLAIN' => 'Desculpe, o site atualmente é apenas para convidados',

	'INVALID_INVITE' => 'O convite não foi especificado ou não é válido.',


));
