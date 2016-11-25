<?php
/**
 * Date: 2013.01.03.
 * Time: 9:27
 *
 * @author Fehérdi Lóránd <feherdi.lorand@gmail.com>
 */

class Heaven7_Extendedpreviousnext_Model_Font{

	public function toOptionArray(){

		$options = array ( 'Arial'              => 'Arial',
						   'Courier New'        => 'Courier New',
                            'Tahoma'            => 'Tahoma',
                            'Times New Roman'   => 'Times New Roman',
                            'Verdana'           => 'Verdana');

		return $options;
	}
}