<?php



class Curl {

	public $productCategoryUrl; // Url
	public $folder = "product_categories"; // Folder name where you want to save parsed page 
	public $fileNameToSave; // File name where you want to save parsed page 
	public $fileType = ".txt"; // File type
	public $html; // Parsed html

	public function curl_parse( $url )
	{
		$ch = curl_init( $url );

		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true ); // Сейвит результат в переменную

		//curl_setopt( $ch , CURLOPT_HEADER, true ); // Возвращает в переменную заголовки ( Для отладки )

		//curl_setopt( $ch, CURLOPT_NOBODY, true ); // Получает только заголовки ( HEADER )

		curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, true ); // Если редирект ( ошибка  302 на странице ) включает эту опцию 

		curl_setopt( $ch, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 5.1; U; ru) Presto/2.9.168 Version/11.51' ); // хз

		

		//curl_setopt( $ch, CURLOPT_PROXY, '93.113.6.19' ); // хз 
		// http://free-proxy.cz
	
		curl_setopt( $ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS4 ); // хз

		

		curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, false ); // Отключает проверки в https

		curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false ); // Отключает проверки в https

		$html = curl_exec( $ch );

		$this->html = $html; // Parsed html

	} 

	// Check submit
 	public function curl_check_submit()
	{
		if ( isset($_POST['productCategorySubmit']) ) { // Submit
			$this->productCategoryUrl = $_POST['productCategoryUrl']; // Product category
			$this->fileNameToSave = $this->folder . "/" . $_POST['fileNameToSave'] . $this->fileType; // File to save
			
		$this->curl_parse( $this->productCategoryUrl ); // Parse
		$this->curl_save_html(); // Save html
		}
	}
	// Save html
	public function curl_save_html() {
		if ( file_put_contents( $this->fileNameToSave, $this->html ) ) {
			echo "<script>";
			echo "window.location.href = 'http://csv/index.php?productCategoryResponse=File saved in " . $this->fileNameToSave . "'";
			echo "</script>";
		}
		else {
			echo "<script>";
			echo "window.location.href = 'http://csv/index.php?productCategoryResponse=Problem with save file to " . $this->fileNameToSave . " or else ...'";
			echo "</script>";
		}
	}

}


$curl = new Curl();
$curl->curl_check_submit(); // Check submit

				
?>