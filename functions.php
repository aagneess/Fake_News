<?php

declare(strict_types=1);

require __DIR__ ."/data.php";

$id === $authors['id'];

function getAuthorById(int $id, array $authors): string
{
    foreach ($authors as $author) 
    {
        if ($author['id'] === $id){
            return $author['name'];
        }
    }
};


// This is the file where you can keep all your functions. Remember to NOT
// execute/run any functions in this file. Keep it dumb.