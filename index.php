<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'vendor/autoload.php';


$fileName = 'employee.txt';
$fileCSVRow = fopen("cakedayRow.csv", "w") or die("Unable to open file!");
$fileCSVSingle = fopen("cakedaySingle.csv", "w") or die("Unable to open file!");



function ThirdDate()
{ 
  $fileName = 'employee.txt';
  $lineGeneratorEmployee = DataSend::getEmployeeData($fileName);
  while ($lineGeneratorEmployee->valid()) {
  $lineGeneratorEmployee->current();
  $lineGeneratorEmployee->next();
  $lineGeneratorEmployee->current();
  $lineGeneratorEmployee->next();
  

  $thirdValue = $lineGeneratorEmployee->current();

  yield $thirdValue;
  $lineGeneratorEmployee->next();
  }
}

$lineGeneratorEmployee = DataSend::getEmployeeData($fileName);
$lineGeneratorThirdValue = ThirdDate();


while ($lineGeneratorEmployee->valid()) {


  $currentName = $lineGeneratorEmployee->current()->name;
  $currentDay = $lineGeneratorEmployee->current()->birthDay;
  $lineGeneratorEmployee->next();
  
  $nextName = $lineGeneratorEmployee->current()->name;
  $nextDay = $lineGeneratorEmployee->current()->birthDay;
  $lineGeneratorEmployee->next();  
  
  $thirdName =  $lineGeneratorThirdValue->current()->name;
  $thirdDay =  $lineGeneratorThirdValue->current()->birthDay;
  $lineGeneratorThirdValue->next();
  
  $IsDateThreeRow = CakeDay::IsDateThreeRow($currentDay, $nextDay, $thirdDay);
  $IsDateTwoRow = CakeDay::IsDateTwoRow($currentDay, $nextDay, $thirdDay);
  $IsDateSingle = CakeDay::IsDateSingle($currentDay, $nextDay, $thirdDay);
   
  if ($IsDateThreeRow)
  {

      RowDates::rowThreeCakeDay($nextDay, $currentDay,$nextName, $currentName, $fileCSVRow);
      ThirdDates::thirdCakeDay($thirdDay, $thirdName, $fileCSVSingle);
      
  }

  if ($IsDateTwoRow)
  {

      RowDates::rowTwoCakeDay($nextDay, $thirdDay,$nextName, $thirdName, $fileCSVRow);
      
  }

  if ($IsDateSingle)
  {
    SingleDates::singleCakeDay($currentDay, $currentName,$fileCSVSingle);
  }

   $lineGeneratorEmployee->next();  
  
}

fclose($fileCSVRow);
fclose($fileCSVSingle);