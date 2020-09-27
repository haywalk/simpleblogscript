<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Blog</title>
	
		<link rel="stylesheet" type="text/css" href="/sheet1.css">
		<link rel="bookmark icon" type="image/png" href="/images/h2.png">
	
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
	</head>

	<body>
		<h1>My Blog</h1>
	
		<a id='top'></a>
	
		<?php
			readfile('../nav.html');
		?>

		<p>This is my blog, where I'll post website-related and personal updates. Want to be notified of new posts? Subscribe to my <a href="/blog.xml">RSS feed</a>.</p>

		<?php
			$posts = scandir("./posts", 1);

			for($i = 0; $i < count($posts) - 2; ++$i) {
				$file = "./posts/".$posts[$i];
				if (file_exists($file)) {
					echo "<hr>";
					readfile($file);
				}

			}
		?>

		<hr>

		<div class="menu">
			<a href="#top">Top of page</a>
		</div>
		
		<a id="bottom"></a>
	</body>
</html>
