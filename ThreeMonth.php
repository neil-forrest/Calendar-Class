<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Calendars</title>
        
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="css/ThreeMonth.css">
 
    </head>
    <body>
   <?php

include ('CalendarClass.php');
        
$calendar = new Calendar();
        
echo'<div class="container"><div id="CreateDatePicker" class="row">'; 
        
$calendar->CreateDatepicker(10);
        
echo'<div id="CreatePreviousMonth" class="col-md-4">';
        
$calendar->CreatePreviousMonth();
        
echo'</div><div id="CreateMonth" class="col-md-4">';
        
$calendar->CreateMonth();
        
echo'</div><div id="CreateNextMonth" class="col-md-4">';
        
$calendar->CreateNextMonth();
        
echo'</div></div></div>';
 
    ?>
    </body>
</html>
