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
<link rel="stylesheet" href="css/bookings.css">
   <link rel="stylesheet" href="css/main.css">
 
    </head>
    <body><div class="container">
        <div class="row">
   <div id="header" class="col-12">
       <?php
 @include('includes/header.php');
       ?>
            </div>  </div>
   <div class="row">
   <div id="content" class="col-12">
       
       <h2>Calendar</h2>
    <p>My Calendar Class contains a datepicker function and three month functions, previous month, target month and next month which combine to create a three month calendar, also a year function and a year planner function each contain a year picker so by calling each you get a year picker as well as the calendar. The css used is in the css folder and also uses bootstrap The code can be found at  <a href="https://github.com/neil-forrest/Calendar">https://github.com/neil-forrest/Calendar</a>.</p>
<h2>Three Months</h2>
<p>Shows three consecutive months with the middle month being the present month by default. The datepicker allows the choice of month and year. The chosen month then becomes the middle month. The number of years available in the datepicker are passed in the brackets when calling the function. The demo has ten years passed in it, see ThreeMonth.php in the files on github. The three month calendar is suitable for use in a room booking system. See my booking system at <a href="https://github.com/neil-forrest/BookingSystem">https://github.com/neil-forrest/BookingSystem</a>.<br><a href="ThreeMonth.php">Demo: Three Month Calendar</a></p>
        
<h2>One Year</h2>
<p>Simple one calendar year with built in year picker. The number of years available in the year picker are passed in the brackets when calling the function
    <br><a href="OneYear.php">Demo: Full Calendar Year</a></p>      
        
<h2>Year Planner</h2>
The code is here. Does not really scale well due to the width required. Can be adapted with css and html.
 <br><a href="YearPlanner.php">Demo: Year Planner </a>
         
       </div></div></div>
    </body>
</html>

