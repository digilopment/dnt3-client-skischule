<?php
function custom_modules(){
	$webhook = new Webhook;
	/*
	custom modul listeners
	*/
	$custom_modules = array(
		//PARTNERI
		"homepage" => array_merge(
				array(), $webhook->getSitemapModules("homepage")
		), 
		"article_list" => array_merge(
				array(), $webhook->getSitemapModules("article_list")
		),
		"about" => array_merge(
				array(), $webhook->getSitemapModules("about")
		), 
		"primary" => array_merge(
				array(), $webhook->getSitemapModules("primary")
		), 
		
		
		"region" => array_merge(
				array(), $webhook->getSitemapModules("region")
		), 		
		"hotely" => array_merge(
				array(), $webhook->getSitemapModules("hotely")
		),  
		"partneri" => array_merge(
				array(), $webhook->getSitemapModules("partneri")
		),
		"registracia" => array_merge(
				array(), $webhook->getSitemapModules("registracia")
		),
		"singl_page" => array_merge(
				array(), $webhook->getSitemapModules("singl_page")
		),
		"search" => array_merge(
				array(), $webhook->getSitemapModules("search")
		),
	);
	return $custom_modules;
}

function modulesConfig(){
	return array(
		"homepage" => array(
			"service_name" => "homepage",
			"sql" => ""
		),
		"article_list" => array(
			"service_name" => "Listing",
			"sql" => ""
		),
		
		"about" => array(
			"service_name" => "About me",
			"sql" => ""
		),
		"primary" => array(
			"service_name" => "Primary",
			"sql" => ""
		),
		
		
		"hotely" => array(
			"service_name" => "Hotely",
			"sql" => ""
		),
		"region" => array(
			"service_name" => "Región",
			"sql" => ""
		),
		"partneri" => array(
			"service_name" => "Partneri",
			"sql" => ""
		),
		"registracia" => array(
			"service_name" => "Registrácia",
			"sql" => ""
		),
		"singl_page" => array(
			"service_name" => "Singl Page",
			"sql" => ""
		),
		"search" => array(
			"service_name" => "Vyhľadávanie",
			"sql" => ""
		),
	);
}