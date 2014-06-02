<?php
namespace Controller\Theme\Cloud;

class Index{
	function get(){
        console($_GET);
		$cat = isset($_GET['cat'])?$_GET['cat']:"index.html";
		#$cat = strtolower(str_replace(".html", "", $cat));
		include View('theme/cloud/'.$cat);
	}
}