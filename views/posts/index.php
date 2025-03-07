<?php foreach ($posts as $post): ?>
    <div class="card">
        <div class="card-header">
            <a href="/post/<?=$post['id']?>"><?= htmlspecialchars($post['title']) ?></a>
        </div>
    </div><br>
<?php endforeach; ?>
