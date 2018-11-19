<?php

define('DB_NAME', 'hello_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

define('DB_CHARSET', 'utf8mb4');


define('DB_COLLATE', '');
define('AUTH_KEY',        "{{'Y)_|&<oMj(6~/0lu8cjPMLp]j]R?84YPA&&;/(-)v<-Hr.,Z>bdAb{*1>PYL?gCK'}}");
define('SECURE_AUTH_KEY', "{{'%wjr!D.SVl1(1Q|OPE^sRaWZNL6l-GiII73%W1jU6P=VnIjQDXE|xC$x;2hXnMaB'}}");
define('LOGGED_IN_KEY',   "{{'S]w&Wi/3`%[<^[Io$~dcPL<Q_DKacbppdBz/!o{88 #f+a+!{_73`bdP jFt?(p['}}");
define('NONCE_KEY',       "{{'+p&uS6w(.`MVG{].t}ZO)t,<<4R5&YVZtE|.NA6xd`bNAp|2-b;2[#dL1Z;.-FS~'}}");
define('AUTH_SALT',       "{{'+yE)ROfAg`[.M dsC!{*)#q]hV n1ZinviQqWmloG2j>=<A+J4tN`iu-aNFM<r_>'}}");
define('SECURE_AUTH_SALT',"{{'[iRlbyd$%0iHxf+I@dYY*UgJStf+J>OGr2?;dZJ-pc4+P-;u]?Njpt;Ti?5Z4];?'}}");
define('LOGGED_IN_SALT',  "{{'$1]9l*#a=*cGgKnt494chA&QSNN(kXlezj_Q=~Yu[RT+#h|a$)T&JZuA_E&d2V]t'}}");
define('NONCE_SALT',      "{{'ia_pF3.EXLi+{}{ ca6ZFY-8MWz9HT2^|74&]Wf^2,^s&{=/)~56Xp/.E0J3){Xp'}}");

$table_prefix  = 'wp_';

define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
