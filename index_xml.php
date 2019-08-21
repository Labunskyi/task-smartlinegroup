<?php
 
function route() {
	include 'xml_service.php'; 
	$xml = new SimpleXMLElement($xmlstr); 
	$arr = [];
	
	foreach ($xml->AirSegments[0] as $air_segment) {
		
		foreach ($air_segment as $city) {
			
			$str = $city['City'] . ' ';
			if ($str != ' ') { 
				array_push($arr, $str); }
			}
	}
	
	$arr_date = []; 
	foreach ($xml->AirSegments[0] as $air_segment) {
		
		foreach ($air_segment as $date) {
			
			$str = strtotime($date['Date']) . ' ';
			if ($str != ' ') { 
				array_push($arr_date, $str); }
			}
	}
	
	$count = count($arr_date);
    for ($i = 1; $i < $count; ++$i) {
 
         $days[] = $arr_date[$i] - $arr_date[$i-1];

    }
	
	function map_route($n, $m) {
		return [$n => $m];
	}
	$d = array_map('map_route', $arr , $days);
	
	$s = [];
	foreach($d as $route){
		foreach ($route as $key => $value) {
			$s[] = $key;
			$max[] = $value;
		}
		
	}
	$f = array_combine($max, $s);
	$flip = array_flip($f);
	$returnThis = array_search(max($flip),$flip);
	return $returnThis;
	
}
print_r(route());
?>