<?php



$site = elgg_get_site_entity();

echo '<a href="'.$vars['url'].'"><img src="'.$vars['url'].'_graphics/iceshare_logo.png" class="logo" /></a>';

//echo $vars['url']; 

/*echo "<h1 id=\"facebook-header-logo\">";

 echo elgg_view('output/url', array(

	'href' => '/',

	'text' => $site->name,

)); 

echo "</h1>";*/



echo elgg_view_form('login', array('id' => 'facebook-header-login'));