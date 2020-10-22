<?php

// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether.
require __DIR__ ."/data.php";
require __DIR__ ."/functions.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/flex.css">
    <link rel="stylesheet" href="CSS/typography.css">
    <link rel="stylesheet" href="CSS/media.css">
    <title>Fake News</title>
</head>

<body>

<header>
    <p class="mainPage">Fake News</p><h1>The Food Blog</h1>
</header>

<main>   
<div class="flex-container">

<?php foreach ($articles as $article): ?>
    
    <article class=flex-items>
    
        <h2><?= $article['title'] ?></h2>
        <img src="<?= $article['img_url'] ?>" alt="<?= $article['title'] ?>"/>
        <p><?= $article['content'] ?></p>
        <p><?= getAuthorNameById($authors, $id);?></p>
        <p><?= $article['publishedDate'] ?></p>
        <p><?= "Likes: " . $article['likes'] ?><button>x</button></p> 
    </article>
    
<?php endforeach; ?>
   
</div>
</main> 

</body>
</html>