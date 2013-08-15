<?php
/**
	Extension for Excel Reader
*/

class Spreadsheet_Excel_Reader_Extended extends Spreadsheet_Excel_Reader{
	
		function xlstoarray($sheet=0) {
			$arr = array();

			for($row=1;$row<=$this->rowcount($sheet);$row++) 
					for($col=1;$col<=$this->colcount($sheet);$col++) 
							$arr[$row][$col] = $this->val($row,$col,$sheet);
							
			return $arr;
		}

}
