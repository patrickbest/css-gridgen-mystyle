<?php
				if( isset($_GET) ) {
					$result = true;
					$colw = $_GET['colwidth'];
					$cols = $_GET['numbcols'];
					$gutter = $_GET['gutter'];
				}
?>

<!DOCTYPE html>   
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Generate Css for Grids My Style !</title>
	<meta name="description" content="">
	<meta name="keywords" content="" />
	<meta name="author" content="">
	<!-- !CSS -->
	<link rel="stylesheet" href="css/style.css">
	
</head>
<!-- !Body -->
<body>

	<?php if ($result) { ?>
		<iframe id="test" src="test.php?w=<?php echo $colw; ?>&c=<?php echo $cols; ?>&g=<?php echo $gutter; ?>"></iframe>
		<?php } ?>

	<div id="container">
		<header>
			CSS Grids ~ MYSTYLE
		</header><!-- /header -->
		
		<section id="form">
			
			<form action="index.php" method="get">
				
				Column Width:<br/>
				<input name="colwidth" type="text" <?php if($result) { echo 'value="' . $colw . '"';}?>/><br/>
				Number of Columns:<br/>
				<input name="numbcols" type="text" <?php if($result) { echo 'value="' . $cols . '"';}?>/><br/>
				Gutter:<br/>
				<input name="gutter" type="text" <?php if($result) { echo 'value="' . $gutter . '"';}?>/><br/>
				<input type="submit" />			
			</form>
		
		
		</section><!-- /main -->
		
		<section id="result">
			<pre><?php	
						if (!empty($cols) && !empty($colw) && !empty($gutter)) {echo '/* Grid of ' . $cols . ' ' . $colw . 'px columns with ' . $gutter . 'px gutter */';
echo '<br/><br/>';

						$containerwidth = ($colw * $cols)+($gutter * $cols);
						echo '.container { margin: 0 auto; width: ' . $containerwidth . 'px}';
						echo '<br/><br/>';
						echo '.row {clear:both;}';
						echo '<br/><br/>';
						echo '.col {float:left; margin-left: ' . $gutter/2 . 'px; margin-right: ' . $gutter/2 . 'px;}';
						echo '<br/><br/>';

						for ($i=1; $i<=$cols; $i++) {
							$calculatedwidth = ($i*$colw)+(($i-1)*$gutter);
							echo '.col' . $i . ' {<br/>width: ' . $calculatedwidth . 'px;<br/>}';
							echo '<br/><br/>';
							}
					}				
			?></pre>
		</section>
		
		<section id="result-min">
			<pre><?php	
						if (!empty($cols) && !empty($colw) && !empty($gutter)) {echo '/* Grid of ' . $cols . ' ' . $colw . 'px columns with ' . $gutter . 'px gutter */<br/>';
						$containerwidth = ($colw * $cols)+($gutter * $cols);
						echo '.container{margin:0 auto;width:' . $containerwidth . 'px}';
						echo '.row{clear:both;}';
						echo '.col{float:left;margin-left:' . $gutter/2 . 'px;margin-right:' . $gutter/2 . 'px;}';
						for ($i=1; $i<=$cols; $i++) {
							$calculatedwidth = ($i*$colw)+(($i-1)*$gutter);
							echo '.col' . $i . '{width: ' . $calculatedwidth . 'px;}';
							}
					}				
			?></pre>
		</section>
		
		
		<footer>
		
		</footer><!-- /footer -->
	</div><!--!/#container -->

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="my.js"></script>
</body>
</html>