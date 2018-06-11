
<?php
class calendar
{
//Create a form to pick month and year, pass number of years required
public function CreateDatepicker($years){
// Define next four years--Add or deduct depending on the range required
define('year', date('Y',time()));
  

//Create form to choose Year and Month-Add or deduct options depending on number of years required
 echo '<form action='.$_SERVER["PHP_SELF"].' method="post"><select name="years">';
 
 if(isset($_POST['years']))
 {
  echo '<option value="'.$_POST['years'].'">'.$_POST['years'].'</option>';}
  echo '<option value="'.year.'">'.year.'</option>';
 for ($i = 1; ; $i++) {
    if ($i > $years) {
        break;
    }

$year = year+$i;
       
        
echo '<option value="'.$year.'">'.$year.'</option>';
 }
echo '</select>
<select name="months">';
  if(isset($_POST['months']))
 {
  echo '<option value="'.$_POST['months'].'">';
      
  switch ($_POST['months']) {
    case "1":
        $month="January";
        break;
    case "2":
        $month="February";
        break;
    case "3":
        $month="March";
        break;
    case "4":
        $month="April";
        break;
    case "5":
        $month="May";
        break;
    case "6":
        $month="June";
        break;
    case "7":
        $month="July";
        break;
    case "8":
        $month="August";
        break;
    case "9":
        $month="September";
        break;
    case "10":
        $month="October";
        break;
    case "11":
        $month="November";
        break;
    case "12":
        $month="December";
        break;
}    
      
      
echo $month.'</option>';}

echo '<option value="1">January</option>
  <option value="2">February</option>
  <option value="3">March</option>
  <option value="4">April</option>
  <option value="5">May</option>
  <option value="6">June</option>
  <option value="7">July</option>
  <option value="8">August</option>
  <option value="9">September</option>
  <option value="10">October</option>
  <option value="11">November</option>
  <option value="12">December</option>
</select>
<input type="hidden" value="$year">
<input type="submit" value="Choose Year/Month."></form>';
    
}










//------------------------------------


//Create previous month Calendar
public function CreatePreviousMonth(){
    
if(isset($_POST['years']))
  $year=$_POST['years'];
else 
$year=date( "Y", time());


if(isset($_POST['months']))
{$months=$_POST['months'];}
else
{$months=1;
 $month='January';}
   
    

 if($months==1)  { 
$premonths=12;
 $year=$year-1;    
     }
else {
 $premonths=$months-1; }  
  switch ($premonths) {
    case "1":
        $premonth="January";
        break;
    case "2":
        $premonth="February";
        break;
    case "3":
        $premonth="March";
        break;
    case "4":
        $premonth="April";
        break;
    case "5":
        $premonth="May";
        break;
    case "6":
        $premonth="June";
        break;
    case "7":
        $premonth="July";
        break;
    case "8":
        $premonth="August";
        break;
    case "9":
        $premonth="September";
        break;
    case "10":
        $premonth="October";
        break;
    case "11":
        $premonth="November";
        break;
    case "12":
        $premonth="December";
        break;
} 



$prenum_days=date("t", mktime(0,0,0,$premonths,1,$year));


define('prefirst_day', date("l", mktime(0,0,0,$premonths,1,$year)));

switch (prefirst_day) {
    case "Sunday":
        $prefillers=0;
        $prey=7;
        break;
    case "Monday":
        $prefillers=1;
        $prey=6;
        break;
    case "Tuesday":
        $prefillers=2;
        $prey=5;
        break;
    case "Wednesday":
        $prefillers=3;
        $prey=4;
        break;
    case "Thursday":
        $prefillers=4;
        $prey=3;
        break;
    case "Friday":
        $prefillers=5;
        $prey=2;
        break;
    case "Saturday":
        $prefillers=6;
        $prey=1;
        break;
}

$prerest=$prenum_days - $prey;

echo '<table border="1" cellspacing="4"><tr>';
		
		echo '<td colspan="7" style="text-align:center">'.$premonth.' - '.$year. '</td>';
	
		echo '</tr><tr>';
    	echo '<th>Sun</th>';
		echo '<th>Mon</th>';
		echo '<th>Tue</th>';
		echo '<th>Wed</th>';
		echo '<th>Thu</th>';
		echo '<th>Fri</th>';
		echo '<th>Sat</th>';
		echo '</tr><tr>';
echo str_repeat('<td>&nbsp;</td>', $prefillers);
for ($i = 1; ; $i++) {
    if ($i > $prey) {
        break;
    }
    echo '<td width="30">'.$i.'</td>';
}
echo '</tr><tr>';
for ($i = 1; ; $i++) {
    if ($i > $prerest) {
        break;
    }
    $pred=$i + $prey;
    echo '<td width="30">'.$pred.'</td>';
switch ($i) {
    case "7":
        echo '</tr><tr>';
        break;
    case "14":
        echo '</tr><tr>';
        break;
    case "21":
        echo '</tr><tr>';
        break;
    case "28":
        echo '</tr><tr>';
        break;

}

}$presofar=$prefillers + $prenum_days;
if($presofar<= 35)
$preleft=35-$presofar;
else
$preleft=42-$presofar;
echo str_repeat('<td>&nbsp;</td>', $preleft);
   

echo '</tr></table>';

}
//---------------------------------------


//Create Target month Calendar
public function CreateMonth(){
if(isset($_POST['years']))
  $year=$_POST['years'];
else 
$year=date( "Y", time());


if(isset($_POST['months']))
{$months=$_POST['months'];}
else
{$months=1;
 $month='January';}
   

$num_days=date("t", mktime(0,0,0,$months,1,$year));


define('first_day', date("l", mktime(0,0,0,$months,1,$year)));

  switch ($months) {
    case "1":
        $month="January";
        break;
    case "2":
        $month="February";
        break;
    case "3":
        $month="March";
        break;
    case "4":
        $month="April";
        break;
    case "5":
        $month="May";
        break;
    case "6":
        $month="June";
        break;
    case "7":
        $month="July";
        break;
    case "8":
        $month="August";
        break;
    case "9":
        $month="September";
        break;
    case "10":
        $month="October";
        break;
    case "11":
        $month="November";
        break;
    case "12":
        $month="December";
        break;}

switch (first_day) {
    case "Sunday":
        $fillers=0;
        $y=7;
        break;
    case "Monday":
        $fillers=1;
        $y=6;
        break;
    case "Tuesday":
        $fillers=2;
        $y=5;
        break;
    case "Wednesday":
        $fillers=3;
        $y=4;
        break;
    case "Thursday":
        $fillers=4;
        $y=3;
        break;
    case "Friday":
        $fillers=5;
        $y=2;
        break;
    case "Saturday":
        $fillers=6;
        $y=1;
        break;
}


$rest=$num_days - $y;

echo '<table border="1" cellspacing="4"><tr>';
		
		echo '<td colspan="7" style="text-align:center">'.$month.' - '.$year. '</td>';
	
		echo '</tr><tr>';
        	echo '<th>Sun</th>';
		echo '<th>Mon</th>';
		echo '<th>Tue</th>';
		echo '<th>Wed</th>';
		echo '<th>Thu</th>';
		echo '<th>Fri</th>';
		echo '<th>Sat</th>';
		echo '</tr><tr>';
echo str_repeat('<td>&nbsp;</td>', $fillers);
for ($i = 1; ; $i++) {
    if ($i > $y) {
        break;
    }
    echo '<td width="30">'.$i.'</td>';
}
echo '</tr><tr>';

for ($i = 1; ; $i++) {
    if ($i > $rest) {
        break;
    }
    $d=$i + $y;
    echo '<td width="30">'.$d.'</td>';
switch ($i) {
    case "7":
        echo '</tr><tr>';
        break;
    case "14":
        echo '</tr><tr>';
        break;
    case "21":
        echo '</tr><tr>';
        break;
    case "28":
        echo '</tr><tr>';
        break;

}

}$sofar=$fillers + $num_days;
if($sofar<= 35)
$left=35-$sofar;
else
$left=42-$sofar;
echo str_repeat('<td>&nbsp;</td>', $left);
   

echo '</tr></table>';

}
    //_______________________________--
 //Create Next Month Calendar
public function CreateNextMonth(){
    
if(isset($_POST['years']))
  $year=$_POST['years'];
else 
$year=date( "Y", time());


if(isset($_POST['months']))
{$months=$_POST['months'];}
else
{$months=1;
 $month='January';}
   


 if($months==12)  { 
$nextmonths=1;
 $year=$year+1;    
     }
else {
 $nextmonths=$months+1; }
    
  switch ($nextmonths) {
    case "1":
        $nextmonth="January";
        break;
    case "2":
        $nextmonth="February";
        break;
    case "3":
        $premonth="March";
        break;
    case "4":
        $nextmonth="April";
        break;
    case "5":
        $nextmonth="May";
        break;
    case "6":
        $nextmonth="June";
        break;
    case "7":
        $nextmonth="July";
        break;
    case "8":
        $nextmonth="August";
        break;
    case "9":
        $nextmonth="September";
        break;
    case "10":
        $nextmonth="October";
        break;
    case "11":
        $nextmonth="November";
        break;
    case "12":
        $nextmonth="December";
        break;
} 



$nextnum_days=date("t", mktime(0,0,0,$nextmonths,1,$year));


define('nextfirst_day', date("l", mktime(0,0,0,$nextmonths,1,$year)));

switch (nextfirst_day) {
    case "Sunday":
        $nextfillers=0;
        $nexty=7;
        break;
    case "Monday":
        $nextfillers=1;
        $nexty=6;
        break;
    case "Tuesday":
        $nextfillers=2;
        $nexty=5;
        break;
    case "Wednesday":
        $nextfillers=3;
        $nexty=4;
        break;
    case "Thursday":
        $nextfillers=4;
        $nexty=3;
        break;
    case "Friday":
        $nextfillers=5;
        $nexty=2;
        break;
    case "Saturday":
        $nextfillers=6;
        $nexty=1;
        break;
}

$nextrest=$nextnum_days - $nexty;

echo '<table border="1" cellspacing="4"><tr>';
		
		echo '<td colspan="7" style="text-align:center">'.$nextmonth.' - '.$year. '</td>';
	
		echo '</tr><tr>';
       	echo '<th>Sun</th>';
		echo '<th>Mon</th>';
		echo '<th>Tue</th>';
		echo '<th>Wed</th>';
		echo '<th>Thu</th>';
		echo '<th>Fri</th>';
		echo '<th>Sat</th>';
		echo '</tr><tr>';
echo str_repeat('<td>&nbsp;</td>', $nextfillers);
for ($i = 1; ; $i++) {
    if ($i > $nexty) {
        break;
    }
    echo '<td width="30">'.$i.'</td>';
}
echo '</tr><tr>';
for ($i = 1; ; $i++) {
    if ($i > $nextrest) {
        break;
    }
    $nextd=$i + $nexty;
    echo '<td width="30">'.$nextd.'</td>';
switch ($i) {
    case "7":
        echo '</tr><tr>';
        break;
    case "14":
        echo '</tr><tr>';
        break;
    case "21":
        echo '</tr><tr>';
        break;
    case "28":
        echo '</tr><tr>';
        break;

}

}$nextsofar=$nextfillers + $nextnum_days;
if($nextsofar<= 35)
$nextleft=35-$nextsofar;
else
$nextleft=42-$nextsofar;
echo str_repeat('<td>&nbsp;</td>', $nextleft);
   

echo '</tr></table>';

}
    
//---------------------------------------

    //Create 12 month Calendar
 // $years is the number of years available on the datepicker
public function TwelveMonth($years){
    
  echo'<div class="container"><div class="row">'; 
    
// Define current year
define('year', date('Y',time()));
    

//Create form to choose Year Add or deduct options depending on number of years required
 echo '<form action='.$_SERVER["PHP_SELF"].' method="post">
 <select name="years">';

 if(isset($_POST['years']))
 {
  echo '<option value="'.$_POST['years'].'">'.$_POST['years'].'</option>';}
 echo '<option value="'.year.'">'.year.'</option>';
 for ($i = 1; ; $i++) {
    if ($i > $years) {
        break;
    }
$year = year+$i;
       
        
echo '<option value="'.$year.'">'.$year.'</option>';
 }

echo '</select>

<input type="hidden" value="$year">
<input type="submit" value="Choose Year."></form></div>';
    

  
if(isset($_POST['years']))
  $year=$_POST['years'];
else 
$year=date( "Y", time());
    
echo '<div class="row">';
$twelvemonths=[1,2,3,4,5,6,7,8,9,10,11,12];
foreach ($twelvemonths as  $months) {
   

   

$num_days=date("t", mktime(0,0,0,$months,1,$year));


$first_day= date("l", mktime(0,0,0,$months,1,$year));

  switch ($months) {
    case "1":
        $month="January";
        break;
    case "2":
        $month="February";
        break;
    case "3":
        $month="March";
        break;
    case "4":
        $month="April";
        break;
    case "5":
        $month="May";
        break;
    case "6":
        $month="June";
        break;
    case "7":
        $month="July";
        break;
    case "8":
        $month="August";
        break;
    case "9":
        $month="September";
        break;
    case "10":
        $month="October";
        break;
    case "11":
        $month="November";
        break;
    case "12":
        $month="December";
        break;}

switch ($first_day) {
    case "Sunday":
        $fillers=0;
        $y=7;
        break;
    case "Monday":
        $fillers=1;
        $y=6;
        break;
    case "Tuesday":
        $fillers=2;
        $y=5;
        break;
    case "Wednesday":
        $fillers=3;
        $y=4;
        break;
    case "Thursday":
        $fillers=4;
        $y=3;
        break;
    case "Friday":
        $fillers=5;
        $y=2;
        break;
    case "Saturday":
        $fillers=6;
        $y=1; 
        break;
}


$rest=$num_days - $y;
// Create responsive divs for use with bootstrap css 
echo '<div class="col-lg-3 col-md-4 col-sm-6" ><table border="1" cellspacing="4"><tr>';
		
		echo '<th colspan="7" style="text-align:center">'.$month.' - '.$year. '</th>';
	
		echo '</tr><tr>';
        	echo '<th>Sun</th>';
		echo '<th>Mon</th>';
		echo '<th>Tue</th>';
		echo '<th>Wed</th>';
		echo '<th>Thu</th>';
		echo '<th>Fri</th>';
		echo '<th>Sat</th>';
		echo '</tr><tr>';
echo str_repeat('<td>&nbsp;</td>', $fillers);
for ($i = 1; ; $i++) {
    if ($i > $y) {
        break;
    }
    echo '<td width="100px">'.$i.'</td>';
}
echo '</tr><tr>';

for ($i = 1; ; $i++) {
    if ($i > $rest) {
        break;
    }
    $d=$i + $y;
    echo '<td width="100px">'.$d.'</td>';
switch ($i) {
    case "7":
        echo '</tr><tr>';
        break;
    case "14":
        echo '</tr><tr>';
        break;
    case "21":
        echo '</tr><tr>';
        break;
    case "28":
        echo '</tr><tr>';
        break;

}

}


   
$sofar=$fillers + $num_days ;

    
if($sofar<= 35) {
    $todo=35-$sofar;
    
  for ($i = 1; ; $i++) {
      
    if ($i > $todo) {
        break;
    }  
 else {
 echo '<td>&nbsp;</td>';
 }  }
echo '</tr><tr>';
echo str_repeat('<td>&nbsp;</td>', 7);
}
    
if($sofar> 35) {
    $todo=42-$sofar;
    
  for ($i = 1; ; $i++) {
      
    if ($i > $todo) {
        break;
    }  
 else {
 echo '<td>&nbsp;</td>';
 }  }}

echo '</tr></table></div>';
   
}
echo  '</div>';

}


    //---------------------------------------

    //Create Year Planner
public function YearPlanner($years){
    
    
// Define extra years as required
define('year', date('Y',time()));



//Create form to choose Year Add or deduct options depending on number of years required
 echo '<form action='.$_SERVER["PHP_SELF"].' method="post">
 <select name="years">';
 
 if(isset($_POST['years']))
 {
  echo '<option value="'.$_POST['years'].'">'.$_POST['years'].'</option>';
 echo '<option value="'.year.'">'.year.'</option>';
 }
  for ($i = 1; ; $i++) {
    if ($i >= $years) {
        break;
    }
$year = year+$i;
       
        
echo '<option value="'.$year.'">'.$year.'</option>';
 }
echo '</select>

<input type="hidden" value="$year">
<input type="submit" value="Choose Year."></form>';
    

  
if(isset($_POST['years']))
  $year=$_POST['years'];
else 
$year=date( "Y", time());


$twelvemonths=[1,2,3,4,5,6,7,8,9,10,11,12];
foreach ($twelvemonths as  $months) {


$num_days=date("t", mktime(0,0,0,$months,1,$year));


$first_day= date("l", mktime(0,0,0,$months,1,$year));

  switch ($months) {
    case "1":
        $month="January";
        break;
    case "2":
        $month="February";
        break;
    case "3":
        $month="March";
        break;
    case "4":
        $month="April";
        break;
    case "5":
        $month="May";
        break;
    case "6":
        $month="June";
        break;
    case "7":
        $month="July";
        break;
    case "8":
        $month="August";
        break;
    case "9":
        $month="September";
        break;
    case "10":
        $month="October";
        break;
    case "11":
        $month="November";
        break;
    case "12":
        $month="December";
        break;}

switch ($first_day) {
    case "Sunday":
        $fillers=0;
        $y=7;
        break;
    case "Monday":
        $fillers=1;
        $y=6;
        break;
    case "Tuesday":
        $fillers=2;
        $y=5;
        break;
    case "Wednesday":
        $fillers=3;
        $y=4;
        break;
    case "Thursday":
        $fillers=4;
        $y=3;
        break;
    case "Friday":
        $fillers=5;
        $y=2;
        break;
    case "Saturday":
        $fillers=6;
        $y=1;
        break;
}


$rest=$num_days - $y;

echo '<table border="1" cellspacing="4"><tr>';
		
		echo '<td colspan="7" style="text-align:center">'.$month.' - '.$year. '</td>';
	
		echo '</tr><tr>';
        	echo '<th>Sun</th>';
		echo '<th>Mon</th>';
		echo '<th>Tue</th>';
		echo '<th>Wed</th>';
		echo '<th>Thu</th>';
		echo '<th>Fri</th>';
		echo '<th>Sat</th>';
      	echo '<th>Sun</th>';
		echo '<th>Mon</th>';
		echo '<th>Tue</th>';
		echo '<th>Wed</th>';
		echo '<th>Thu</th>';
		echo '<th>Fri</th>';
		echo '<th>Sat</th>';  
        	echo '<th>Sun</th>';
		echo '<th>Mon</th>';
		echo '<th>Tue</th>';
		echo '<th>Wed</th>';
		echo '<th>Thu</th>';
		echo '<th>Fri</th>';
		echo '<th>Sat</th>';  
        	echo '<th>Sun</th>';
		echo '<th>Mon</th>';
		echo '<th>Tue</th>';
		echo '<th>Wed</th>';
		echo '<th>Thu</th>';
		echo '<th>Fri</th>';
		echo '<th>Sat</th>';  
        echo '<th>Sun</th>';
		echo '<th>Mon</th>';
		echo '<th>Tue</th>';
		echo '<th>Wed</th>';
		echo '<th>Thu</th>';
		echo '<th>Fri</th>';
		echo '<th>Sat</th>';
		echo '</tr>';
    
echo str_repeat('<td>&nbsp;</td>', $fillers);
for ($i = 1; ; $i++) {
    if ($i > $y) {
        break;
    }
    echo '<td width="30">'.$i.'</td>';
}


for ($i = 1; ; $i++) {
    if ($i > $rest) {
        break;
    }
    $d=$i + $y;
    echo '<td width="30">'.$d.'</td>';


}$sofar=$fillers + $num_days + $rest;
if($sofar<= 35)

echo str_repeat('<td>&nbsp;</td>', 7);
   

echo '</tr></table><td>';
 
}
  echo  '</tr></table>';
   
}
}


