<?php

class DataStructure {
	
	public function addArrayList(){
		
		$section = $_REQUEST['section'];
		
		switch($section){
			case "arraylist-intro": $page = "ds_section/arraylist/intro.php";
									return $page;
									break;
									
			case "arraylist-inset-element": $page = "ds_section/arraylist/insert-element.php";
									return $page;
									break;
									
			case "arraylist-traverse": $page = "ds_section/arraylist/traverse.php";
									return $page;
									break;
									
			case "arraylist-insert-beg": $page = "ds_section/arraylist/insert-beg.php";
									return $page;
									break;
									
			case "arraylist-insert-pos": $page = "ds_section/arraylist/insert-pos.php";
									return $page;
									break;
									
			case "arraylist-delete-last": $page = "ds_section/arraylist/delete-last.php";
									return $page;
									break;
									
			case "arraylist-delete-first": $page = "ds_section/arraylist/delete-first.php";
									return $page;
									break;
									
			case "arraylist-delete-pos": $page = "ds_section/arraylist/delete-pos.php";
									return $page;
									break;
			
			default:   $page = "error.php";
					    return $page;
					    break;																																																
		}
		
		
		
		/*
		if($_REQUEST['section']=="arraylist-intro"){
			$page = "ds_section/arraylist/intro.php";
			return $page;
		}
		
		if($_REQUEST['section']=="arraylist-inset-element"){
			$page = "ds_section/arraylist/insert-element.php";
			return $page;
		}
		
		if($_REQUEST['section']=="arraylist-traverse"){
			$page = "ds_section/arraylist/traverse.php";
			return $page;
		}
		
		if($_REQUEST['section']=="arraylist-insert-beg"){
			$page = "ds_section/arraylist/insert-beg.php";
			return $page;
		}
		
		if($_REQUEST['section']=="arraylist-insert-pos"){
			$page = "ds_section/arraylist/insert-pos.php";
			return $page;
		}
		
		if($_REQUEST['section']=="arraylist-delete-last"){
			$page = "ds_section/arraylist/delete-last.php";
			return $page;
		}
		
		if($_REQUEST['section']=="arraylist-delete-first"){
			$page = "ds_section/arraylist/delete-first.php";
			return $page;
		}
		
		if($_REQUEST['section']=="arraylist-delete-pos"){
			$page = "ds_section/arraylist/delete-pos.php";
			return $page;
		}
		*/
	}
}

$dsObj = new DataStructure();

?>
<section class="container content-section">
        <div class="row">
        <div class="col-lg-8 col-lg-offset-2 text-center" id="ds">
                <i class="fa fa-tasks fa-3x"></i>
                <div class="detail"><h2>Data Structure</h2></div>
         </div>
         		<h4>
                    <?php
                    	include_once($dsObj->addArrayList());	
                    ?>
                </h4> 
        </div>
</section>