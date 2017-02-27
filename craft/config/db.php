<?php

/**
 * Database Configuration
 *
 * All of your system's database configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/db.php
 */

return array(

  'server'      => getenv("JAWSDB_URL") ? parse_url(getenv("JAWSDB_URL"))["host"]            : 'localhost',
  'port'        => getenv("JAWSDB_URL") ? parse_url(getenv("JAWSDB_URL"))["port"]            : '3306',
  'database'    => getenv("JAWSDB_URL") ? substr(parse_url(getenv("JAWSDB_URL"))["path"], 1) : '',
  'user'        => getenv("JAWSDB_URL") ? parse_url(getenv("JAWSDB_URL"))["user"]            : 'root',
  'password'    => getenv("JAWSDB_URL") ? parse_url(getenv("JAWSDB_URL"))["pass"]            : '',
  'tablePrefix' => 'craft',
);
