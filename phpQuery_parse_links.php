<?php 

require_once "phpQuery.php";

class PQ {
	
	public $fileName; // File name
	public $folderName; // Folder name

	public function __construct() {
		
	}

	// Check submit
	public function checkSubmit() {
		if (isset( $_POST['productCategoryFileSubmit']) ) {
			$this->fileName = $_POST["productCategoryFile"]; // File name
			$this->folderName = $_POST['folderName']; // Folder name
			

		}
	}	

	// PQ parse
	public function pQParse() {

	}


}

$PhpQuery = new PQ();
$PhpQuery->checkSubmit();

 ?>


<!-- echo "<script>";
echo "window.location.href = 'http://csv/index.php?productCategoryFile=" . $folderName . "/" . $fileName . "'";
echo "</script>"; -->