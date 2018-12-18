<?php 
class PQParse {
	
	public function checkSubmit() {
		if (isset( $_POST['productCategoryFileSubmit']) ) {
			$fileName = $_POST["productCategoryFile"];
			$folderName = $_POST['folderName'];
			

			echo "<script>";
			echo "window.location.href = 'http://csv/index.php?productCategoryFile=" . $folderName . "/" . $fileName . "'";
			echo "</script>";
		}
	}	
}

$PhpQueryParse = new PQParse();
$PhpQueryParse->checkSubmit();

 ?>