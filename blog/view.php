<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Blog</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
	</head>

	<body>
		<h1>Hayden's Blog Script</h1>

		<a id='top'></a>

	    <a href="./#<?php echo substr($_GET['post'], 4);?>">Back to blog</a>

		<?php
		    readfile('posts/'.$_GET['post']);
        ?>

		<hr>

		<div class="menu">
			<a href="#top">Top of page</a>
		</div>

		<a id="bottom"></a>
	</body>
</html>
