 <?php

// always provide a TRAILING SLASH (/) AFTER A PATH
define('URL','http://localhost/article/');
define('LIBS', 'libs/');

//database config
define('DB_TYPE','mysql');
define('DB_HOST','localhost');
define('DB_NAME','article');
define('DB_USER','root');
define('DB_PASS','');

//The sitewide hashkey, do not change this because its used for passwords!

//this is for other hash keys....Not sure yet
define('HASH_GENERAL_KEY', 'MixitUp200');

//this is for database password only
define('HASH_PASSWORD_KEY', 'catsFLYhigh2000miles');

// For CKeditor $Config['UserFilesPath'] = '/userfiles/' ;
// /publics/ckeditor/filemanager/connectors/php/config.php

define('HOME_POSTS', 5);
define('PAGE_POSTS', 9);