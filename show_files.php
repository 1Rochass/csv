<?php 
$dirName = "product_categories";
$scan = scandir( $dirName );

//var_dump($scan);
foreach ($scan as $key => $value) {
	if ( $value == "." || $value == ".." ) {
	}
	else {
		echo "
		<div class='form-check form-check'>
		  <input class='form-check-input' type='radio' name='productCategoryFile' id='" . $value . "' value='" . $value . "'>
		  <label class='form-check-label' for='" . $value . "'>" . $value . "</label>
		</div> ";
		//echo "<input type='radio' name='productCategoryFile' id='product-category-file' value='" . $value . "'>" . $value . "";
	}
}

 ?>