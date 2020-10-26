<?php

declare(strict_types=1);

require __DIR__ ."/data.php";

function getAuthorById(int $id, array $authors): string
{
    foreach ($authors as $author) 
    {
        if ($author['id'] === $id)
        {
            return $author['name'];
        }
    }
};