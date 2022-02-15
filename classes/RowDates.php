<?php 

class RowDates{

  public static function rowThreeCakeDay($nextDay, $currentDay,$nextName, $currentName, $fileCSVRow){
    
   
      // Fri
      $IsDateFriNext    = CakeDay::IsDateFri($nextDay);
      $IsDateFriCurrent = CakeDay::IsDateFri($currentDay);
      
      // Sat
      $IsDateSatNext    = CakeDay::IsDateSat($nextDay);
      $IsDateSatCurrent = CakeDay::IsDateSat($currentDay);
   
      // Sun
      $IsDateSunNext    = CakeDay::IsDateSun($nextDay);
      $IsDateSunCurrent = CakeDay::IsDateSun($currentDay);
   
      // Chritmas Day
      $IsDateChrisNext    = CakeDay::IsDateChris($nextDay);
      $IsDateChrisCurrent = CakeDay::IsDateChris($currentDay);
   
      // Boxing Day
      $IsDateBoxNext    = CakeDay::IsDateBox($nextDay);
      $IsDateBoxCurrent = CakeDay::IsDateBox($currentDay);
   
      if ($IsDateFriNext){
        $currentDays = '4';
        $nextDays = '3';
        CakeDay::DisplayOutputRow($nextDay, $currentDay,$nextName, $currentName,$currentDays,$nextDays,$fileCSVRow);
      }
      elseif ($IsDateFriCurrent){
        $currentDays = '4';
        $nextDays = '3';
        CakeDay::DisplayOutputRow($nextDay, $currentDay,$nextName, $currentName,$currentDays,$nextDays,$fileCSVRow);
      }
      elseif ($IsDateSatNext){
        $currentDays = '5';
        $nextDays = '4';
        CakeDay::DisplayOutputRow($nextDay, $currentDay,$nextName, $currentName,$currentDays,$nextDays,$fileCSVRow);
      }
      elseif ($IsDateSatCurrent){
        $currentDays = '3';
        $nextDays = '2';
        CakeDay::DisplayOutputRow($nextDay, $currentDay,$nextName, $currentName,$currentDays,$nextDays,$fileCSVRow);
      }

      elseif ($IsDateSunNext){
        $currentDays = '5';
        $nextDays = '4';
        CakeDay::DisplayOutputRow($nextDay, $currentDay,$nextName, $currentName,$currentDays,$nextDays,$fileCSVRow);
      }
      elseif ($IsDateSunCurrent){
        $currentDays = '3';
        $nextDays = '2';
        CakeDay::DisplayOutputRow($nextDay, $currentDay,$nextName, $currentName,$currentDays,$nextDays,$fileCSVRow);
      }

      elseif ($IsDateChrisNext){
        $currentDays = '5';
        $nextDays = '4';
        CakeDay::DisplayOutputRow($nextDay, $currentDay,$nextName, $currentName,$currentDays,$nextDays,$fileCSVRow);
      }
      elseif ($IsDateChrisCurrent){
        $currentDays = '3';
        $nextDays = '2';
        CakeDay::DisplayOutputRow($nextDay, $currentDay,$nextName, $currentName,$currentDays,$nextDays,$fileCSVRow);
      }

      elseif ($IsDateBoxNext){
        $currentDays = '5';
        $nextDays = '4';
        CakeDay::DisplayOutputRow($nextDay, $currentDay,$nextName, $currentName,$currentDays,$nextDays,$fileCSVRow);
      }
      elseif ($IsDateBoxCurrent){
        $currentDays = '3';
        $nextDays = '2';
        CakeDay::DisplayOutputRow($nextDay, $currentDay,$nextName, $currentName,$currentDays,$nextDays,$fileCSVRow);
      }

      else
      {
        $currentDays = '2';
        $nextDays = '1';
        CakeDay::DisplayOutputRow($nextDay, $currentDay,$nextName, $currentName,$currentDays,$nextDays,$fileCSVRow);
      }

  }

  public static function rowTwoCakeDay($nextDay, $thirdDay,$nextName, $thirdName, $fileCSVRow){
    
    //  Fri, Sat, Sun, Christmasday, Boxingday, NewYear test
      // Fri
      $IsDateFriNext    = CakeDay::IsDateFri($nextDay);
      $IsDateFriThird = CakeDay::IsDateFri($thirdDay);
      //*************************************************** */
      // Sat
      $IsDateSatNext    = CakeDay::IsDateSat($nextDay);
      $IsDateSatThird = CakeDay::IsDateSat($thirdDay);
   
      // Sun
      $IsDateSunNext    = CakeDay::IsDateSun($nextDay);
      $IsDateSunThird = CakeDay::IsDateSun($thirdDay);
   
      // Chritmas Day
      $IsDateChrisNext    = CakeDay::IsDateChris($nextDay);
      $IsDateChrisThird = CakeDay::IsDateChris($thirdDay);
   
      // Boxing Day
      $IsDateBoxNext    = CakeDay::IsDateBox($nextDay);
      $IsDateBoxThird = CakeDay::IsDateBox($thirdDay);
   
      if ($IsDateFriNext){
        $currentDays = '4';
        $nextDays = '3';
        CakeDay::DisplayOutputRow($nextDay, $thirdDay,$nextName, $thirdName,$currentDays,$nextDays,$fileCSVRow);
      }
      elseif ($IsDateFriThird){
        $currentDays = '4';
        $nextDays = '3';
        CakeDay::DisplayOutputRow($nextDay, $thirdDay,$nextName, $thirdName,$currentDays,$nextDays,$fileCSVRow);
      }
      elseif ($IsDateSatNext){
        $currentDays = '1';
        $nextDays = '2';
        CakeDay::DisplayOutputRow($nextDay, $thirdDay,$nextName, $thirdName,$currentDays,$nextDays,$fileCSVRow);
      }
      elseif ($IsDateSatThird){
        $currentDays = '4';
        $nextDays = '5';
        CakeDay::DisplayOutputRow($nextDay, $thirdDay,$nextName, $thirdName,$currentDays,$nextDays,$fileCSVRow);
      }

      elseif ($IsDateSunNext){
        $currentDays = '3';
        $nextDays = '3';
        CakeDay::DisplayOutputRow($nextDay, $thirdDay,$nextName, $thirdName,$currentDays,$nextDays,$fileCSVRow);
      }
      elseif ($IsDateSunThird){
        $currentDays = '3';
        $nextDays = '3';
        CakeDay::DisplayOutputRow($nextDay, $thirdDay,$nextName, $thirdName,$currentDays,$nextDays,$fileCSVRow);
      }

      elseif ($IsDateChrisNext){
        $currentDays = '3';
        $nextDays = '2';
        CakeDay::DisplayOutputRow($nextDay, $thirdDay,$nextName, $thirdName,$currentDays,$nextDays,$fileCSVRow);
      }
      elseif ($IsDateChrisThird){
        $currentDays = '3';
        $nextDays = '2';
        CakeDay::DisplayOutputRow($nextDay, $thirdDay,$nextName, $thirdName,$currentDays,$nextDays,$fileCSVRow);
      }

      elseif ($IsDateBoxNext){
        $currentDays = '3';
        $nextDays = '2';
        CakeDay::DisplayOutputRow($nextDay, $thirdDay,$nextName, $thirdName,$currentDays,$nextDays,$fileCSVRow);
      }
      elseif ($IsDateBoxThird){
        $currentDays = '3';
        $nextDays = '2';
        CakeDay::DisplayOutputRow($nextDay, $thirdDay,$nextName, $thirdName,$currentDays,$nextDays,$fileCSVRow);
      }

      else
      {
        $currentDays = '1';
        $nextDays = '2';
        CakeDay::DisplayOutputRow($nextDay, $thirdDay,$nextName, $thirdName,$currentDays,$nextDays,$fileCSVRow);
      }

  }

}