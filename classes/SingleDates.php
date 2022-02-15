<?php 

/**
 * This class is used to test data
 * Dates that are single date
 */

class SingleDates{

  public static function singleCakeDay($currentDay, $currentName,$fileCSVSingle){
    
    //  Fri, Sat, Sun, Christmasday, Boxingday, NewYear test
      // Fri
      $IsDateFriCurrent = CakeDay::IsDateFri($currentDay);
      
      // Sat
      $IsDateSatCurrent = CakeDay::IsDateSat($currentDay);
      
      // Sun
      $IsDateSunCurrent = CakeDay::IsDateSun($currentDay);
      
      // Chritmas Day
      $IsDateChrisCurrent = CakeDay::IsDateChris($currentDay);
      
      // Boxing Day
      $IsDateBoxCurrent = CakeDay::IsDateBox($currentDay);
      
     if ($IsDateFriCurrent){
        $currentDays = '3';
        CakeDay::DisplayOutputSingle($currentDay, $currentName,$currentDays,$fileCSVSingle);
      }
      elseif ($IsDateSatCurrent){
        $currentDays = '3';
        CakeDay::DisplayOutputSingle($currentDay,$currentName,$currentDays,$fileCSVSingle);
      }
    elseif ($IsDateSunCurrent){
        $currentDays = '2';
        CakeDay::DisplayOutputSingle($currentDay,$currentName,$currentDays,$fileCSVSingle);
      }

      elseif ($IsDateChrisCurrent){
        $currentDays = '3';
        CakeDay::DisplayOutputSingle($currentDay, $currentName,$currentDays,$fileCSVSingle);
      }
      elseif ($IsDateBoxCurrent){
        $currentDays = '3';
        CakeDay::DisplayOutputSingle($currentDay, $currentName,$currentDays,$fileCSVSingle);
      }

      else
      {
        $currentDays = '1';
        CakeDay::DisplayOutputSingle($currentDay,$currentName,$currentDays,$fileCSVSingle);
      }

  }

}