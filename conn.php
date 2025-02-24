<?php


define("DB_CONNECT", true); // `FALSE` - if you don't intend to access database;


// -------- [{ Manage DataBase Configuration }] ------------


if($_SERVER['SERVER_NAME'] == 'localhost'):

    # --- [{ FOR LOCALHOST ONLY }] ---

    define("DB_HOST", "localhost");
    define("DB_USER", 'root');
    define("DB_PASSWORD", '');
    define("DB_NAME", 'uss_courier');

else:

    # --- [{ FOR SERVER HOST ONLY }] ---

    define("DB_HOST", "localhost"); //
    define("DB_USER", 'scrixuez_alphabank');
    define("DB_PASSWORD", 'scrixuez_alphabank');
    define("DB_NAME", 'scrixuez_alphabank');

endif;


// --------- [{ DataBase Table Prefix }] ----------

define("DB_TABLE_PREFIX", 'uss');
