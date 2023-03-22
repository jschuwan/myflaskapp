<?php

/**
 * Configuration for database connection
 *
 */

$host       = "blackjackdb";
$username   = "root";
$password   = "firstparty1";
$dbname     = "test";
$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );
