<?php

function getPost($id)
{
    $statement = getDb()->prepare("SELECT * FROM posts WHERE id = :id");
    $statement->execute([$id]);
    return $statement->fetch(PDO::FETCH_ASSOC);
}

function getAllPosts()
{
    $statement = getDb()->query('SELECT * from posts ORDER BY id DESC');
    $posts = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $posts;

}