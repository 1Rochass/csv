<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/style.css">
	<title></title>
</head>
<body>
<!-- Wrapper -->
<div class="wrapper">
	<!-- Content -->
	<div class="content row">
		<!-- Product-category -->
		<div class="product-category col-12">

			<div class="alert alert-dark">
				Parse product category page
			</div>

			<!-- Form product-category -->
			<form method="POST" action="curl_product_category.php">
				<label for="product-category-url">Product category URL</label>
				<input type="text" name="productCategoryUrl" id="product-category-url">
				<label for="file-name-to-save">File name to save response</label>
				<input type="text" name="fileNameToSave" id="file-name-to-save">
				<input type="submit" name="productCategorySubmit" value="Parse" id="product-category-submit" class="btn">
			</form>

			
			<?php  
				if (isset($_GET['productCategoryResponse'])) {
					echo "<div class='alert alert-dark'>" . $_GET['productCategoryResponse'] . "</div>";
				}
			?>
			

		</div>
		<!-- Product-category-links -->
		<div class="product-category-links col-12">

			<div class="alert alert-info">
				Parse product links from category page
			</div>

			<!-- Form product-category-links -->
			<form method="POST" action="phpQuery_parse_links.php" enctype="multipart/form-data">
				<label for="folder-name">Folder name</label>
				<input type="text" name="folderName" id="folder-name" value="product_categories">

				<p>File for parsing links</p>
				<?php require_once "show_files.php"; ?> <!-- Show files from folder -->

				

				<input type="submit" name="productCategoryFileSubmit" value="Parse" id="product-category-file-submit" class="btn">
			</form>

			
			<?php  
				if (isset($_GET['productCategoryFile'])) {
					echo "<div class='alert alert-info'>" . $_GET['productCategoryFile'] . "</div>";
				}
			?>
			

		</div>
	</div>
</div>


<?php 


 ?>
</body>
</html>