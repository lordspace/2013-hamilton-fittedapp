<?php require_once dirname(__FILE__) . '/header.php'; ?>

<div class="row-fluid app_container">
    <p>
        <h2>Suggestions</h2>
        <ul>
	        <?php
	        	$saved_search = $_SESSION['search_data'];

				$invintory = array(
					"Abercrombie" => array(array("cut"=>"Slim Fit", "size"=>"L", "size-key"=>1)),
					"Banana Republic" => array(array("cut"=>"Heritage Fit", "size"=>"L", "size-key"=>1)),
					"Burberry" => array(array("cut"=>"Classic", "size"=>"XL", "size-key"=>1)),
					"DKNY" => array(array("cut"=>"Classic Fit", "size"=>"L", "size-key"=>1)),
					"Hugo Boss" => array(array("cut"=>"Fitted", "size"=>"L", "size-key"=>1)),
					"Thomas Pink" => array(array("cut"=>"Slim Fit", "size"=>"XL", "size-key"=>1))

				);

				$sized = 1;
				$brand = $saved_search['brand'];
				/*echo $brand;
				foreach ($invintory[$brand] as $item){
					var_dump($item);
					echo "<br>";
					var_dump($saved_search);
					if (($item['cut'] == $saved_search['style'])
						&& (stripos(
							'('.$item['size'].')', $saved_search['size']
						) !== false) ) {
						echo $item["size"];
						$sized = $item["size-key"];
					}
				}*/

				echo "<ul>";
				foreach ($invintory as $brandi => $records){
					if ($brandi != $brand) {
						foreach($records as $item) {
							//if ($item['size-key'] == $sized) {
								echo "<li>";
								echo $brandi . ',' . $item['cut']. ',' . $item['size'];	
								echo "</li>";
							//}
						}
					}
				}

				echo "</ul>";
			?>
		</ul>
    </p>
</div>

<?php require_once dirname(__FILE__) . '/footer.php'; ?>
