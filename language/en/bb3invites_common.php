<?php

/**
*
* @package BB3Invites
* @copyright (c) 2016 PPK
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* @translated Jim_Di
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
	'INVITE' => 'Invitation',
	'INVITE_EXPLAIN' => 'If you have an invitation, write it here',
	'INVITE_ONLY_EXPLAIN' => 'Sorry, the site is currently invite only',

	'INVALID_INVITE' => 'Invitation is not specified or is not valid.',


));
