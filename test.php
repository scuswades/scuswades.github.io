<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php echo '<p>Hello World</p>';
	$files = array();
	$dir    = 'galleries/images/freshers';
	$files = scandir($dir);
	foreach($files as $f) 
	{
		if($f <> '..' and $f <> '.')
			echo($f."<br>");
	}
 
 ?> 
 </body>
</html>