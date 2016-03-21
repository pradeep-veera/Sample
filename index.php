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
	
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<?php
	require 'DbClass.php';
	require 'OccasionClass.php';
	require 'ReservationClass.php';
	require 'ValidationClass.php';
?>
	
    <body>
	<div class = "container-fluid">
        <div class = "Header row">
            <H3 style = "text-align:center">HEADER</h3> 
        </div> 

        <div class = "Body row">
            <div class ="col-md-6">
                <div class ="div_search form-group">
                    <form class="ser_form_occ" name ="ser_form_occ" method="POST" onsubmit="s" action="./stall_list.php">
                        <H4>Search</H4>
                        <div class="ser_occ_name form-group">
<?php
	$occ_name = new Occasion();
	if ($occ_name->Occ_view("Name","DruckerListe"))
		$name = $occ_name->occ_getResult();	
	if($occ_name->Occ_view("Id","DruckerListe"))
		$id = $occ_name->occ_getResult();	
?>						
                            <p class="ser_title">Occasion Name</p>
                            <select name="ser_sel_occ">
                                <optgroup label ="Search Occasion"></optgroup>
                                <option>Food Festival</option>
                                <option>Collage Festival</option>
                            </select>
                        </div>
<?php
	$occ_place = new Occasion();
	$place_msg = $occ_place->Occ_view("Name","DruckerListe");
	if ($place_msg)
		$place = $occ_name->occ_getResult();
	//echo sizeof($place)
?>							
                        <div class="ser_occ_place form-group">
                            <p class="ser_title">Place</p>
                            <select name="sel_place">
                                <optgroup label="Choose Place"></optgroup>
                                <option>Bangalore</option>
                                <option>Visakhapatnam</option>
                            </select>
                        </div>
<?php
	$occ_date = new Occasion();
	$date_msg = $occ_date->Occ_view("Name","DruckerListe");
	if($date_msg)
		$date = $occ_name->occ_getResult();
?>							
                        <div class="ser_occ_date form-group">
                            <p class="ser_title">Date&Time</p>
                            <input type ="date">
                        </div>    
                        <br>
                        <input class ="ser_submit" type="submit" >
                    </form>    
                </div>
            </div>
            <div class ="ser_image col-md-4">

            </div>
        </div> 
        <div class ="Body2 row">
            <div class="col-md-3">                
                <div class="div_sel form-group">
                    <form class="form_sel" name="sel_occ1">
                        <p>Occasion1</p>
                    </form>    
                </div>    
            </div>
            <div class="col-md-3">                
                <div class="div_sel form-group">
                    <form class="form_sel" name="sel_occ1">
                        <p>Occasion2</p>
                    </form>    
                </div>    
            </div>
            <div class="col-md-3">                
                <div class="div_sel form-group">
                    <form class="form_sel" name="sel_occ3">
                        <p>Occasion3</p>
                    </form>    
                </div>    
            </div>
            <div class="col-md-3">                
                <div class="div_sel form-group">
                    <form class="form_sel" name="sel_occ4">
                        <p>Occasion4</p>
                    </form>    
                </div>    
            </div>
        </div>
        <div class="row">
			<div class="footer ">
				<p style = "text-align:center">footer</p>
			</div>
        </div>
	</div>	
    </body>
</html>
