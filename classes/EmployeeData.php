<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class EmployeeData extends IteratorIterator {

	public function __construct($pathToFile) {
		
		parent::__construct(new SplFileObject($pathToFile, 'r'));

		
		$file = $this->getInnerIterator();
		$file->setFlags(SplFileObject::READ_CSV); 
		$file->setCsvControl(',', '"', "\\");
	}
}

class FilterRows extends FilterIterator{
  public function accept()
  {
    $current = $this->getInnerIterator()->current();
    if (count($current) == 1){
        return false;
    }
    return true;
  }
}