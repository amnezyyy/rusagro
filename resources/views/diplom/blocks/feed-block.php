<link rel="stylesheet" href="/assets/css/blocks/feed-blocks.css">

<?php require_once "vendor/autoload.php";
$conn = new \App\DatabaseConnection();
$news = (new \App\NewsRepository($conn)) -> getAllNews();
foreach ($news as  $new) {
    echo '
        <a href="one_news.blade.php?id='. $new[0] .'" class="feed">
            <div class="feed-top" style="background: url('. $new[4] .') no-repeat ; background-size: cover">
                <div class="btn-date-news">'. $new[5] .'</div>
            </div>
            <div class="feed-end">
                <p style="font-size: 20px; font-weight: bolder">'. $new[1] .'</p>
            </div>
        </a>';}
