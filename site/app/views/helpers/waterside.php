<?php

class WatersideHelper extends AppHelper {
	

	function nice_mysql_date($d, $size = 1)
	{
		$t = strtotime( $d );
		if ($size == 0) $date_str = date('D M j', $t);
		else $date_str = date('l M j', $t);
		return $date_str;
	}
	
	function embed_youtube($url = "") {
		
		if (trim($url) == "") return "";
		
		$req = parse_url($url);
		
		if ( !isset($req['query']) ) return ''; // not valid value
		
		parse_str($req['query'], $vars);
		
		if (! isset($vars['v'])) return "";
		
		$embed_html  = '<iframe width="560" height="315" src="http://www.youtube.com/embed/';
		$embed_html .= $vars['v'];
		$embed_html .= '" frameborder="0" allowfullscreen></iframe>';
		
		return $embed_html;
		
	}
	
	
}
?>
