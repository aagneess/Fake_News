# Fake News
<img src="https://media.giphy.com/media/Vs8SNKalTeQOQ/giphy.gif" width="100%">

## Installation
Clone the repository to your computer:
```
git clone https://github.com/aagneess/Fake_News
```
Start your local server:
```
php -S localhost:8000
```
And finally, open the project in your preferred browser! :)

## Code Reviewer
Aseel Mohamad:
- `index.php:10` Think about adding an image as a logo to your website.  
- `index.php:14` Remember to think about<h1> as another alternative to <p>.
- `index.php:17-21 `Remember to think about<nav> and <ul> as another alternatives to <div class="info"> .
- `index.php:30`  Remember to think about 
```php
<?= $article['img_url'] ?>
```
 and this could be refactored using the getImg function, for instance:

```html
 <img src="<?php echo getImg($article); ?> "alt="<?= $article['title'] ?>"/> 
 ```
after adding the function to `functions.php`:

```php 
function getImg(array $articles): string
{
   return $articles['img_url'];        
 }
 ```
- `media.css:1`  think about (max-width:700px), maybe it will work better for mobile phones if the (max-width:500-560px) or think to add :
```css
body{
    align-items: center;
}
```

## License
MIT License - see LICENSE file for more details
https://github.com/aagneess/Fake_News/blob/main/LICENSE