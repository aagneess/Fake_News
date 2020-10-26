<?php
    require __DIR__ ."/data.php";
    require __DIR__ ."/functions.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/global.css">
    <link rel="stylesheet" href="CSS/article.css">
    <link rel="stylesheet" href="CSS/typography.css">
    <link rel="stylesheet" href="CSS/media.css">
    <title>Fake News | The Food Blog</title>
</head>

<body>

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

</body>
</html>