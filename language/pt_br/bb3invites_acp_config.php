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

	'BB3INVITES'				=> 'BB3Invites',
	'BB3INVITES_EXPLAIN'				=> '',

	'BB3INVITES_ENABLED'				=> 'Registro apenas por convites',
	'BB3INVITES_ENABLED_BUT'				=> 'Sim, mas não é necessário um convite',
	'BB3INVITES_ENABLED_EXPLAIN'		=> '',

	'BB3INVITES_USER_ACTIVATE'				=> 'Ativação de convites por usuários',
	'BB3INVITES_USER_ACTIVATE_EXPLAIN'		=> 'Permitir a ativação de convites pelos usuários, caso contrário, só será possível emitir convites já ativados',

	'BB3INVITES_AUTO_PERPOSTS'				=> 'Convites por mensagens',
	'BB3INVITES_AUTO_PERPOSTS_EXPLAIN'		=> 'Dê este número de convites para o número especificado de mensagens, ou seja, para um número especificado de mensagens, os usuários receberão o número especificado de convites (a acumulação de convites ocorre uma vez por dia)',
	'BB3INVITES_AUTO_PERDAYS'				=> 'Convites por dias desde o registro',
	'BB3INVITES_AUTO_PERDAYS_EXPLAIN'		=> 'Dê este número de convites para um número específico de dias desde o registro (em dias)',
	'BB3INVITES_AUTO_PERTORRENTS'				=> 'Convites por torrents',
	'BB3INVITES_AUTO_PERTORRENTS_EXPLAIN'		=> 'Dê este número de convites para o número especificado de torrents (essa opção funciona somente quando a extensão <strong>xbtBB3cker</strong> está instalada)',
	'BB3INVITES_AUTO_PERUPLOAD'				=> 'Convites por upload',
	'BB3INVITES_AUTO_PERUPLOAD_EXPLAIN'		=> 'Dê este número de convites para número especificado de upload (em Gb)',

	'BB3INVITES_FOR' => 'por',
	'BB3INVITES_INVITES' => 'convites',
	'BB3INVITES_POSTS' => 'mensagens',
	'BB3INVITES_DAYS' => 'dias desde o registro',
	'BB3INVITES_TORRENTS' => 'torrents',
	'BB3INVITES_UPLOAD' => 'Gb de upload',

	'BB3INVITES_DELINVITES'				=> 'Deletar convites',
	'BB3INVITES_DELINVITES_EXPLAIN'		=> '',
	'BB3INVITES_LOG_INVITES'				=> 'Escrever logs de convites',
	'BB3INVITES_LOG_INVITES_EXPLAIN'		=> 'Escreva todas as informações sobre convites para um log',
	'BB3INVITES_RESET_COUNTERS'				=> 'Resetar contadores',
	'BB3INVITES_RESET_COUNTERS_EXPLAIN'		=> 'Redefinir contadores de convites, também você pode deletar todos os convites ativados e não usados, caso contrário, eles serão emitidos novamente',

	'BB3INVITES_DELACTIVE'				=> 'Ativados',
	'BB3INVITES_DELVALID'				=> 'Não ativados',
	'BB3INVITES_DELALL'				=> 'Todos',

	'BB3INVITES_NEW_VERSION' => 'Uma nova versão da extensão está disponível',

	'ACP_BB3INVITES_GIVE' => 'Dê convites',
	'BB3INVITES_SELECT_GROUPS' => 'Usuários dos grupos',
	'BB3INVITES_SELECT_GROUPS_EXPLAIN' => 'Dê convites aos usuários dos grupos selecionados (o grupo deve ser o grupo padrão do usuário)',
	'BB3INVITES_INVITES_COUNT' => 'Quantidade de convites',
	'BB3INVITES_INVITES_COUNT_EXPLAIN' => 'Dê um número específico de convites',

	'BB3INVITES_SELECT_USERS' => 'Usuários especificos',
	'BB3INVITES_SELECT_USERS_EXPLAIN' => 'Dê convites para usuários específicos (cada nome de usuário em uma nova linha)',
	'SELECT_USERS' => 'Selecione os usuários',

));
