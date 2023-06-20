<?php
$pagename = str_replace(array('/', '.php', '?s='), '', $_SERVER['REQUEST_URI']);
$pagename = $pagename ? $pagename : 'default';
$pagename = str_replace('', '', $pagename);

switch ($pagename) {
	case '':
		if(!isset($seo_title)) $seo_title = '';
		if(!isset($seo_description)) $seo_description = '';
		if(!isset($seo_keyword)) $seo_keyword = '';
	break;
	default:
		if(!isset($seo_title)) $seo_title = 'NOH';
		if(!isset($seo_description)) $seo_description = '日本の伝統芸能である"能"の精神を背景に、3体のキャラクター『RYUJIN』『ONI-CHAN』『KOCHO』の特性に応じた異能を身にまとうことができるファッションプロジェクト。';
		if(!isset($seo_keyword)) $seo_keyword = '';
}
?>
