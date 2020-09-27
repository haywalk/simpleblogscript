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

		<p>Add a short description of your blog here.</p>

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
