<?php
//display the list of blog entries

include_once '../Blog.php';

$blogHtml = '';

foreach (Blog::getBlogList() as $blog)
{
	$blogHtml .= <<< HTML
<div id="blog_{$blog->getID()}">
	<h1>{$blog->getTitle()}</h1>
	<p>{$blog->getBodyText()}</p>
</div>

HTML;
}
?>

<!DOCTYPE HTML>
<html>
<body>
	<?=$blogHtml?>
</body>
</html>


