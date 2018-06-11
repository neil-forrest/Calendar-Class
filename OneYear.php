
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
<style>
 td, th {  
    width:50px;
   border: 1px solid #ddf;
    height: 30px;
    transition: all 0.3s;  /* Simple transition for hover effect */
}
td {  
    background: #FAFAFA;
    text-align: center;
}
    div {padding: 0px}
 </style>
 
    </head>
    <body>
   <?php

include ('CalendarClass.php');
        
$calendar = new Calendar();
 

        
$calendar->TwelveMonth(10);
        
echo'</div></div>';

    
    ?>
    </body>
</html>

