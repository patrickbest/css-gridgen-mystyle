<?php
	if( isset($_GET) ) { 
		$colw = $_GET['w'];
		$cols = $_GET['c'];
		$gutter = $_GET['g'];		
	?>
	
	<!DOCTYPE html>   
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Test Yr Grids</title>
		<style type="text/css">
			html, body {
				height: 99%;
			}
			.cf:before,
.cf:after {
    content: " "; /* 1 */
    display: table; /* 2 */
}

.cf:after {
    clear: both;
}
			.container {
				height: 99%;
			}
			.col {
				background-color: lime; 
				min-height: 300px;
				height: 99%;
				}
		<?php
			if (!empty($cols) && !empty($colw) && !empty($gutter)) {

echo '/* Grid of ' . $cols . ' ' . $colw . 'px columns with ' . $gutter . 'px gutter */ ';

						$containerwidth = ($colw * $cols)+($gutter * $cols);
						echo '.container { margin: 0 auto; width: ' . $containerwidth . 'px}';
						echo '.row {clear:both;} ';
						echo '.col {float:left; margin-bottom: 10px; margin-left: ' . $gutter/2 . 'px; margin-right: ' . $gutter/2 . 'px;} ';

						for ($i=1; $i<=$cols; $i++) {
							$calculatedwidth = ($i*$colw)+(($i-1)*$gutter);
							echo '.col' . $i . ' {width: ' . $calculatedwidth . 'px;} ';
							}
					}
		
		?>
		</style>	
	</head>
	<!-- !Body -->
	<body>		
				<div class="cf container row">
			<?php
			if (!empty($cols) && !empty($colw) && !empty($gutter)) {
						for ($i=1; $i<=$cols; $i++) {						
						echo '<div class="col col1">&nbsp;</div>';						
							}
					}
		?>
		</div>
	
	</body>
	</html>	
		
<?php	} else {
		echo 'Naaaaaaaaa :{{{';
	}
?>