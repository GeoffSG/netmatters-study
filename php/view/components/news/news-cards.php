<?php 
try {
    $db = new DatabaseController();
    $news = NewsController::getLatestNews($db);
} catch (Exception $e) {
    echo $e->getMessage();
}
?>
<?php foreach($news as $item) : ?>
    <div class="card card-post">
        <!-- News Card-->
        <a href="#">
            <div class="cover">
                <div class="tag tag-<?= strtolower(str_replace(' ', '-', $item['s_name'])) ?>">News</div>
                <img src="/assets/img/news/<?= $item['cover'] ?>" alt="News Cover" />
            </div>
            <div class="content content-<?= strtolower(str_replace(' ', '-', $item['s_name'])) ?>">
                <!-- Card Content -->
                <h3 class="headline headline-<?= strtolower(str_replace(' ', '-', $item['s_name'])) ?>">
                    <?= substr($item['title'], 0, 50) . (strlen($item['title']) > 50 ? '...' : '') ?>
                    <small class="read">- <?= $item['read_time'] ?> Minute Read</small>
                </h3>
                <p class="snippet">
                    <?= substr($item['content'], 0, 120) . (strlen($item['content']) > 120 ? '...' : '') ?>
                </p>
                <span class="btn btn-<?= strtolower(str_replace(' ', '-', $item['s_name'])) ?>">Read more</span>
                <div class="post-details">
                    <div class="avatar">
                        <img src="/assets/img/users/<?= $item['profile_img'] ?>" alt="NM Logo" />
                    </div>
                    <div class="post-text">
                        <p class="post-author"><b>Posted by <?= $item['first_name'] . ' ' . $item['last_name'] ?></b></p>
                        <p class="post-date"><?= date('jS F Y', strtotime($item['date_posted'])) ?></p>
                    </div>
                </div>
            </div>
        </a>
    </div>
<?php endforeach; ?>