<?php
    require __DIR__ ."/header.php";
    require __DIR__ ."/data.php";
    require __DIR__ ."/functions.php";
?>

<header>
    <p class="mainPage">Fake News</p><p class="pageTitle">The Food Blog</p>
</header> 

<main>
<div class="article-container">
<?php foreach ($articles as $article): ?>
    
    <article>    
        <p class="articleTitle"><?= $article['title'] ?></p>
        <img src="<?= $article['img_url'] ?>" alt="<?= $article['title'] ?>"/>
        <p class="content"><?= $article['content'] ?></p>

        <div class="authorBar">
        <p><?= getAuthorById($article['id'], $authors);?></p>
        <p><?= $article['publishedDate'] ?></p>
        <p><?= "Likes: " . $article['likes'] ?><button>x</button></p> 
        </div>
    </article>
    
<?php endforeach; ?>   
</div>
</main> 

<?php require __DIR__ ."/footer.php";?>