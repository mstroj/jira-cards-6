<?php
/**
 * Helper class for views.
 */

class CardsHelper {

	protected $knownEpics = array();
	
	public function getEpicNumber($epicname) {
		if(empty($epicname)) return "";
		$array_pos = array_search( $epicname, $this->knownEpics );
		if( $array_pos === false ) {
			$this->knownEpics[] = $epicname;
			$array_pos = array_search( $epicname, $this->knownEpics );
		}
		return $array_pos;
	}

}
?>