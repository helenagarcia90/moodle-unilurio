# Installation

## Create config.php

```
<?php

// Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'moodle-unilurio';
$CFG->dbuser    = '*****';
$CFG->dbpass    = '*****';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '',
  'dbsocket' => '',
);

$CFG->wwwroot   = 'http://localhost:8088/moodle-unilurio-prod';
$CFG->dataroot  = '/home/hgarcia/bitnami/lampstack/moodledataunilurio';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0770;

$CFG->keeptempdirectoriesonbackup = true;

require_once(dirname(__FILE__) . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
```
