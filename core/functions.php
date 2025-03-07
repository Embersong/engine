<?php
function getDb()
{
    static $db = null;
    if ($db === null) {
        $db = new PDO("sqlite:../database.db");
    }
   return $db;
}