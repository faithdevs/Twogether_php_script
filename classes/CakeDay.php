<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



class CakeDay{


  public static function IsDateThreeRow($currentDay, $nextDay, $thirdDay)
  {

    $currentDay = new \DateTime($currentDay);
    $nextDay = new \DateTime($nextDay);
    $thirdDay = new \DateTime($thirdDay);
    $dateDiff = date_diff($nextDay, $currentDay);
    $dateDiffPre = date_diff($thirdDay, $currentDay);
    

    if (($dateDiff->d == 1) && ($dateDiffPre->d == 2))
    {
      return true;
    }else
    {
    return false;
    }
  
}


public static function IsDateTwoRow($currentDay, $nextDay, $thirdDay)
  {

    $currentDay = new \DateTime($currentDay);
    $nextDay = new \DateTime($nextDay);
    $thirdDay = new \DateTime($thirdDay);
    $dateDiff = date_diff($nextDay, $currentDay);
    $dateDiffPre = date_diff($thirdDay, $currentDay);
    $dateDiffTwo = date_diff($thirdDay, $nextDay);
    

    if (($dateDiffTwo->d == 1) && ($dateDiffPre->d != 2))
    {
      return true;
    }else
    {
    return false;
    }
  
}

public static function IsDateSingle($currentDay, $nextDay, $thirdDay)
  {

    $currentDay = new \DateTime($currentDay);
    $nextDay = new \DateTime($nextDay);
    $thirdDay = new \DateTime($thirdDay);
    $dateDiff = date_diff($nextDay, $currentDay);
    $dateDiffPre = date_diff($thirdDay, $currentDay);

    if (($dateDiff->d != 1) && ($dateDiffPre->d != 2)){
      return true;
    }
  else
  {
  return false;
  }
  
}

/**
 * These Functions are used to test dates days Fri, Sat, Sun, Christmas, Boxing
 */

public static function IsDateFri($Daytest)
{
      $Daytest = new \DateTime($Daytest);
      $timestamp = strtotime($Daytest->format('Y-m-d'));
      $cakeDay = date('D', $timestamp);
      
      
      if ($cakeDay == "Fri"){
        return true;
      }
      else
      {
        return false;
      }
}

public static function IsDateSat($Daytest)
{
      $Daytest = new \DateTime($Daytest);
      $timestamp = strtotime($Daytest->format('Y-m-d'));
      $cakeDay = date('D', $timestamp);
      
      
      if ($cakeDay == "Sat"){
        return true;
      }
      else
      {
        return false;
      }
}

public static function IsDateSun($Daytest)
{
      $Daytest = new \DateTime($Daytest);
      $timestamp = strtotime($Daytest->format('Y-m-d'));
      $cakeDay = date('D', $timestamp);
      
      
      if ($cakeDay == "Sun"){
        return true;
      }
      else
      {
        return false;
      }
}

public static function IsDateChris($Daytest)
{
  $Daytest = new \DateTime($Daytest);
  $Daytest = $Daytest->format('m-d');

  if ($Daytest == "12-25")
  
  {
      return true;
    }else
    {
    return false;
    }

}

public static function IsDateBox($Daytest)
{
  $Daytest = new \DateTime($Daytest);
  $Daytest = $Daytest->format('m-d');

  if ($Daytest == "12-26")
  
  {
      return true;
    }else
    {
    return false;
    }

}


public static function DisplayOutputRow($nextDay, $currentDay,$nextName, $currentName, $currentDays, $nextDays,$fileCSVRow)
{
      $csvRow = [];
      $currentDayOriginal = new \DateTime($currentDay);
      $nextDayOriginal = new \DateTime($nextDay);
      $currentDay = new \DateTime($currentDay);
      $nextDay = new \DateTime($nextDay);
      $birthCurrent = $currentDay->add(new DateInterval('P'.$currentDays.'D'));
      $birthNext = $nextDay->add(new DateInterval('P'.$nextDays.'D'));

      echo "</br></br>****************************************************************** Birthdays Row ********************************************************************************</br></br>";
      echo $currentName." born the ".$currentDayOriginal->format('dS F'). " shares one large cake with coleague on ".$birthCurrent->format('dS F Y')."</br></br>";
      echo $nextName." born the ".$nextDayOriginal->format('dS F'). " shares one large cake with coleague on ".$birthNext->format('dS F Y')."</br></br>";
       $csvRow =array("CakeDay" => " Cake day is ".$birthCurrent->format('dS F Y'), "CakeType" => " One Large Cake to share for ", "NameOne " => $currentName." DateOfBirth ".$currentDayOriginal->format('dS F'), "NameTwo" => " and ".$nextName." DateOfBirth ".$nextDayOriginal->format('dS F')."\n");
      CSV::CSVcreate($csvRow, $fileCSVRow);
    
}

public static function DisplayOutputSingle($currentDay,$currentName, $currentDays, $fileCSVSingle)
{
      $csvSingle = [];
      $currentDayOriginal = new \DateTime($currentDay);
      $currentDay = new \DateTime($currentDay);
      $birthCurrent = $currentDay->add(new DateInterval('P'.$currentDays.'D'));

      echo "</br></br>****************************************************************** Birthdays Single ********************************************************************************</br></br>";
      echo $currentName." born the ".$currentDayOriginal->format('dS F'). " has one cake on ".$birthCurrent->format('dS F Y')."</br></br>";
      
      $csvSingle =array("CakeDay" => "Cake day is ".$birthCurrent->format('dS F Y'), "CakeType" => " One Small Cake for ", "NameOne" => $currentName." DateOfBirth ".$currentDayOriginal->format('dS F')."\n");
    
      CSV::CSVcreate($csvSingle, $fileCSVSingle);

}


}