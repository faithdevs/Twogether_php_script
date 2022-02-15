<?php

class CSV{


  public static function CSVcreate($array,$fileCSV){

    foreach ($array as $line) {
     
      fwrite($fileCSV, $line);
  }
  
  }


}