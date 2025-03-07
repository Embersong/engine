<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<a href="/">Главная</a>
<a href="/posts">Посты</a><br>

<div class="container mt-5">
<?php foreach ($posts as $post): ?>
    <div class="card">
        <div class="card-header"><?= htmlspecialchars($post['title']) ?></div>
        <div class="card-body">
            <p><?= htmlspecialchars($post['content']) ?></p>
        </div>
    </div><br>
<?php endforeach; ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>