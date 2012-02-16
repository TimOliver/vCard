<?php
/*
* vCard
* by Timothy 'TiM' Oliver
* http://www.timoliver.com.au
*
*/

error_reporting( E_NONE );
define( 'BASE', dirname(__FILE__) );

require_once( 'include/mobiledevicechecker.class.php');
require_once( 'include/viewloader.class.php' );
require_once( 'include/languagestrings.include.php' );

$lang = isset($_GET['lang']) ? $_GET['lang'] : '';
if( $lang != 'jp' )
	$lang = 'en';
else
	$lang = 'ja';

$viewLoader = new ViewLoader( BASE.'/templates/' );

$data = array();
$data['isMobile'] = MobileDeviceChecker::isMobile();
$data['langCode'] = $lang;
$data = array_merge( $data, $languageStrings[$lang] );

$viewLoader->load_template('main', $data);