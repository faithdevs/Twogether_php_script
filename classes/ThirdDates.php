<?php 

/**
 * This class is used to test data
 * Third date in the row
 */


class ThirdDates{

  public static function thirdCakeDay($thirdDay, $thirdName, $fileCSVSingle){
    
    //  Fri, Sat, Sun, Christmasday, Boxingday, NewYear test
      // Fri
      $IsDateFriThird = CakeDay::IsDateFri($thirdDay);
      
      // Sat
      $IsDateSatThird = CakeDay::IsDateSat($thirdDay);
      
      // Sun
      $IsDateSunThird = CakeDay::IsDateSun($thirdDay);
      
      // Chritmas Day
      $IsDateChrisThird = CakeDay::IsDateChris($thirdDay);
      
      // Boxing Day
      $IsDateBoxThird = CakeDay::IsDateBox($thirdDay);
      
     if ($IsDateFriThird){
        $thirdDays = '3';
        CakeDay::DisplayOutputSingle($thirdDay, $thirdName, $thirdDays, $fileCSVSingle);
      }
      elseif ($IsDateSatThird){
        $thirdDays = '3';
        CakeDay::DisplayOutputSingle($thirdDay, $thirdName, $thirdDays, $fileCSVSingle);
      }
    elseif ($IsDateSunThird){
        $thirdDays = '3';
        CakeDay::DisplayOutputSingle($thirdDay, $thirdName, $thirdDays, $fileCSVSingle);
      }

      elseif ($IsDateChrisThird){
        $thirdDays = '3';
        CakeDay::DisplayOutputSingle($thirdDay, $thirdName, $thirdDays, $fileCSVSingle);
      }
      elseif ($IsDateBoxThird){
        $thirdDays = '3';
        CakeDay::DisplayOutputSingle($thirdDay, $thirdName, $thirdDays, $fileCSVSingle);
      }

      else
      {
        $thirdDays = '2';
        CakeDay::DisplayOutputSingle($thirdDay, $thirdName, $thirdDays, $fileCSVSingle);
      }

  }

}