<?php 

require_once './../vendor/autoload.php';
require_once './../php/config.php';

if(isset($_GET["lang"])){
    switch($_GET["lang"]){
        case 'fr':
            $lang = "fr";
            setcookie("SITE_LANG", $lang);
            break;
        case 'en':
            $lang = "en";
            setcookie("SITE_LANG", $lang);
            break;
        default:
            $lang = $DEFAULT_LANGUAGE;
            break;
    }
}
elseif(isset($_COOKIE["SITE_LANG"])){
    $lang = $_COOKIE["SITE_LANG"];
}
else{
    $lang = $DEFAULT_LANGUAGE;
}


$lang_file_path = "./../languages/".$lang.".json";
$lang_file = fopen($lang_file_path, "r");
$lang_file = fread($lang_file, filesize($lang_file_path));
$lang_json = json_decode($lang_file, true);

// Create TPL render aka Smarty
$smarty = new Smarty;
$smarty->assign('lang', $lang_json);
$smarty->assign('actual_lang', $lang);
$smarty->assign('ORIGINAL_URL', $ORIGINAL_URL);

// Router 
$request = $_SERVER['REQUEST_URI'];
$request = str_replace($ORIGINAL_URL, "", $request);
$request = explode("?", $request);
$request = $request[0];

switch ($request) {
    case '/' :
        $smarty->assign('actualpage', "index");
        $smarty->assign('pagetitle', $lang_json["nav_item_home"]);
        $smarty->display('./../tpl/index.tpl');
        break;
    case '/index.html' :
        $smarty->assign('actualpage', "index");
        $smarty->assign('pagetitle', $lang_json["nav_item_home"]);
        $smarty->display('./../tpl/index.tpl');
        break;
    case '' :
        $smarty->assign('actualpage', "index");
        $smarty->assign('pagetitle', $lang_json["nav_item_home"]);
        $smarty->display('./../tpl/index.tpl');
        break;
    case '/about' :
        $smarty->assign('actualpage', "about");
        $smarty->assign('pagetitle', $lang_json["nav_item_about"]);
        $smarty->display('./../tpl/about.tpl');
        break;
    case '/donate' :
        $smarty->assign('actualpage', "donate");
        $smarty->assign('pagetitle', $lang_json["nav_item_donate"]);
        $smarty->display('./../tpl/donate.tpl');
        break;
    case '/services' :
        $smarty->assign('actualpage', "services");
        $smarty->assign('pagetitle', $lang_json["nav_item_services"]);
        $smarty->display('./../tpl/services.tpl');
        break;
    default:
        $smarty->assign('actualpage', "404");
        $smarty->assign('pagetitle', $lang_json["notfound"]);
        $smarty->display('./../tpl/404.tpl');
        break;
}
