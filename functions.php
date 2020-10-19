<?php

declare(strict_types=1);

require __DIR__ ."/data.php";

function getAuthor(int $id, string $name): string
{
    return "Author id: $id, $name";
}

$authors = getAuthor(['id'],['name']);

echo $authors;


// This is the file where you can keep all your functions. Remember to NOT
// execute/run any functions in this file. Keep it dumb.