﻿<?phpfunction vkapi_register () {	$user_pass = wp_generate_password();	$user_login = #vkapi_login;	$user_nicename = #vkapi_id;	$user_url = #vkapi_url_id;	$user_email = #vkapi_email;	$nickname = #vkapi_nickname;	$first_name = #vkapi_first_name;	$last_name = #vkapi_last_name;	$description = #vkapi_descr	$rich_editing = false;	$user_registered	= #date	$role = #podpis4ik;	$jabber = #vkapi_jabber;	$display_name = "$firs_name $nickname $lastname";		$userdata = array (			user_pass => $user_pass,			user_login => $user_login,			user_nicename => $user_nicename,			user_url => $user_url,			user_email => $user_email,			nickname => $nickname,			first_name => $first_name,			last_name => $last_name,			description => $description,			rich_editing => $rich_editing,			user_registered => $user_registered,			role => $role,			jabber => $jabber,			display_name => $display_name		);	$user_id = wp_insert_user( $userdata );}?>