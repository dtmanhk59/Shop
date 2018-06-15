<!-- Article post -->
<article class="post">
    <div class="post-preview"><a href="#"><img src="#" alt=""></a></div>
    <div class="post-wrapper">
        <div class="post-header">
            <h2 class="post-title">
                <a href="blog-single.html"><?= h($article->title) ?></a>
            </h2>
            <ul class="post-meta">
                <li>Created: <?= $article->created->format(DATE_RFC850) ?></li>
                <li>Id <?= h($article->id) ?> </li>
            </ul>
        </div>
        <div class="post-content">
            <p><?= h($article->body) ?></p>
        </div>
        <div class="post-more">
            <button class="btn btn-circle btn-light" type="button">
                <?= $this->Html->link('Edit', ['action' => 'edit', $article->slug]) ?>
            </button>
        </div>
    </div>
</article>
<!-- End article post -->