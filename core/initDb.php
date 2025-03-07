<?php
$db = new PDO("sqlite:database.db");

$statement = $db->query("DROP TABLE IF EXISTS posts");


$statement = $db->query('CREATE TABLE IF NOT EXISTS `posts` (
	`id` integer primary key,
	`title` VARCHAR NOT NULL,
	`content` TEXT NOT NULL
);');

$statement = $db->query("INSERT INTO posts (title, content) values ('Заголовок 1', 'Text text2')");
$statement = $db->query("INSERT INTO posts (title, content) values ('Заголовок 2', 'Text text2')");
$statement = $db->query("INSERT INTO posts (title, content) values ('Заголовок 3', 'Text text3')");