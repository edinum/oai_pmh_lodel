<?php

// Load all of our functions
require_once('oai_pmh/oai2server.php');
require_once('config.php');
require_once('inc/config.php');
require_once('inc/sql.php');
require_once('inc/lodel.php');
require_once('inc/utils.php');
require_once('inc/oai.php');
require_once('inc/record.php');

// Connect to lodel config and functions
lodel_connect();
