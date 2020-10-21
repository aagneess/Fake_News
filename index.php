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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="flex.css">
    <link rel="stylesheet" href="typography.css">
    <link rel="stylesheet" href="media.css">
    <title>Fake News</title>
</head>

<body>

<header>
    <h1>The Food Blog</h1>
</header>

<main>   
<div class="flex-container">

<?php foreach ($articles as $article): ?>
    <?php foreach ($authors as $author): ?>
    <article class=flex-items>
        <h2><?= $article['title'] ?></h2>
        <img src="<?= $article['img_url'] ?>" alt="<?= $article['title'] ?>"/>
        <p><?= $article['content'] ?></p>
        <p><?= $author['id'] . " | " . $author['name'] ?></p>
    </article>
    <?php endforeach; ?>
<?php endforeach; ?>
   
</div>
</main> 

</body>
</html>