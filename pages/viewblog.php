<?php
//display the list of blog entries

foreach (Blog::getBlogList() as $blog)
{
	$blogHtml = <<< HTML
<div id="{$blog['id']}">
</div>
HTML;
}
?>

