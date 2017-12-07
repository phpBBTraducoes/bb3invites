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

	'BB3INVITES_REGLOG'				=> 'Log de registro por convites',
	'BB3INVITES_REGLOG_EXPLAIN'				=> '',

	'USER_DELETED' => 'Usuário deletado',
	'INVITE_OWNER' => 'Quem deu o convite',
	'INVITE_OWNER_ALL' => 'Mostre todos os convites deste usuário',
	'INVITE_TAKER' => 'Quem recebeu o convite',
	'INVITE_DTACTIVE' => 'Data e hora',
	'INVITE_DELETE' => 'Deletar',
	'NO_DATA' => 'Sem dados',
	'TOTAL_REGLOG' => 'Itens totais: %d',

));
