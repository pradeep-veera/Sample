<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"/>
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous"><!-- Latest compiled and minified JavaScript -->
    <link rel="stylesheet" href="styles.css"/>
	<script src="http://code.jquery.com/jquery-2.2.2.min.js"></script>	
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <body class = "Page2">
		<div class = "container-fluid">
			<div class = "HeaderPage2 row">
				<H3 style = "text-align:center">HEADER</h3> 
			</div>
		
			<div class ="col-md-4">
				<p>Occasion list dropdown</p>
			</div>
		
			<div class ="col-md-8">
				<div class = "stall_list">
					<dl class="dl-horizontal">
<?php
	$type = "Food Festival";
	$place = "2nd block, Electronic city, Banglore";
	$date = "12/3/2016";
	$des = "Streetfood ist oft einzigartig und typisch für die Region und wird meist an Ständen oder Wagen verkauft, die von Kleinunternehmern betrieben werden. Mitunter arbeitet die ganze Familie bei einem „Street food Cart“ mit. Meist wird das Essen vor den Augen des Käufers zubereitet oder fertiggestellt und ist wegen der kleinen Portionen, der einfachen Zubereitung und dem Verkauf über „fliegende Händler“ oft preiswert.";
	$i = 9;
	while($i > 0) 
	{
?>		
					<dt> Type </dt>
					<dd><?php echo $type ?></dd>
					<dt> Where </dt>
					<dd><?php echo $place ?></dd>
					<dt> When </dt>
					<dd><?php echo $date?></dd>
					<dt> And what else </dt>
					<dd><?php echo $des?></dd>	
					<dd><a href = "./select_stall.php">more</a></dd>	
<?php
		$i--;
	}
?>					
					</dl>
				</div>
			</div>
			<div class="row">
				<div class="footer">
					<p style = "text-align:center">footer</p>
				</div>
			</div>		
		</div>	
	</body>		
			
