<?php

@session_start();

header('Cache-control: private'); // IE 6 FIX

if (isset($_REQUEST['lang'])) {
    $language = $_REQUEST['lang'];
    setcookie('lang', $language, time() + (3600 * 24 * 30), '/');
    $_SESSION['lang'] = $language;
} else if (isset($_SESSION['lang'])) {
    $language = $_SESSION['lang'];
} else if (isset($_COOKIE['lang'])) {
    $language = $_COOKIE['lang'];
} else {
    $language = 'en';
}

switch ($language) {
    case 'kh':
        $lang_file = 'lang.kh.php';
        break;

    case 'ar':
        $lang_file = 'lang.ar.php';
        break;

    case 'en':
        $lang_file = 'lang.en.php';
        break;
}

require '/languages/' . $lang_file;

if (isset($lang)) {
    $lang = (object) $lang;
}
