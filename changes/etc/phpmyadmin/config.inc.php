<?php

/* Servers configuration */
$i = 0;

/* Server: localhost jet [1] */
$i++;
$cfg['Servers'][$i]['verbose'] = 'localhost jet';
$cfg['Servers'][$i]['host'] = 'localhost';
$cfg['Servers'][$i]['port'] = '';
$cfg['Servers'][$i]['socket'] = '/jet/run/mysqld/mysql.sock';
$cfg['Servers'][$i]['connect_type'] = 'socket';
$cfg['Servers'][$i]['auth_type'] = 'cookie';
$cfg['Servers'][$i]['user'] = '';
$cfg['Servers'][$i]['password'] = '';
$cfg['Servers'][$i]['AllowNoPassword']              // Allow logins without a password. Do not change the FALSE
                                     = FALSE;       // default unless you're running a passwordless MySQL server
/* End of servers configuration */

$cfg['blowfish_secret'] = 'n2wTPtI8LT7sJH6t';
$cfg['DefaultLang'] = 'en';
$cfg['ServerDefault'] = 1;


/*
 * Directories for saving/loading files from server
 */
$cfg['UploadDir'] = '/jet/var/phpmyadmin/upload';
$cfg['SaveDir']   = '/jet/var/phpmyadmin/save';

/*
 * Disable the default warning that is displayed on the DB Details Structure
 * page if any of the required Tables for the relation features is not found
 */
$cfg['PmaNoRelation_DisableWarning'] = TRUE;

?>
~/etc/phpmyadmin $ vi config.inc.php 
~/etc/phpmyadmin $ cat config.inc.php 
<?php

/* Servers configuration */
$i = 0;

/* Server: localhost jet [1] */
$i++;
$cfg['Servers'][$i]['verbose'] = 'localhost jet';
$cfg['Servers'][$i]['host'] = 'localhost';
$cfg['Servers'][$i]['port'] = '';
$cfg['Servers'][$i]['socket'] = '/jet/run/mysqld/mysql.sock';
$cfg['Servers'][$i]['connect_type'] = 'socket';
$cfg['Servers'][$i]['auth_type'] = 'cookie';
$cfg['Servers'][$i]['user'] = '';
$cfg['Servers'][$i]['password'] = '';
$cfg['Servers'][$i]['AllowNoPassword']              // Allow logins without a password. Do not change the FALSE
                                     = TRUE;       // default unless you're running a passwordless MySQL server
/* End of servers configuration */

$cfg['blowfish_secret'] = 'n2wTPtI8LT7sJH6t';
$cfg['DefaultLang'] = 'en';
$cfg['ServerDefault'] = 1;


/*
 * Directories for saving/loading files from server
 */
$cfg['UploadDir'] = '/jet/var/phpmyadmin/upload';
$cfg['SaveDir']   = '/jet/var/phpmyadmin/save';

/*
 * Disable the default warning that is displayed on the DB Details Structure
 * page if any of the required Tables for the relation features is not found
 */
$cfg['PmaNoRelation_DisableWarning'] = TRUE;

?>
