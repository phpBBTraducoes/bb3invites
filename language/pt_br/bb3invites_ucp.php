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

	'INVITES_DISABLED' => 'Convites desabilitados ou você não possui direitos de acesso.',

	'UCP_ACTIVEINVITES' => 'Quantidade de convites',
	'UCP_ACTIVEINVITES_EXPLAIN' => '',

	'USER_INVITES_EXPLAIN' => 'Convites usados: <strong>%d</strong>, Convites não usados: <strong>%d</strong>',
	'DELETE_VALID_INVITES' => 'Deletar convites não usados (<span style="color:#FF0000;">não recuperável</span>)',
	'ACTIVATE_INVITES' => 'Especifique a quantidade de convites que desejada ativar',
	'ACTIVATE_DISABLED' => 'Ativação de convites desativada',

	'SHOW_INVITES_TAKERS' => 'Lista de usuários registrados atraves do seus convites',
	'SHOW_INVITES_CODES' => 'Lista de convites não usados',

	'INVITES' => 'Convites',
	'INVITES_EXPLAIN' => '',

	'USER_DELETED' => 'Usuário não existe',

	'VALID_INVITES_DELETED' => 'Os convites não usados foram deletados',
	'INVITES_ACTIVATED' => 'Convites ativados',
));
