<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * SAG ORM (objet relationnel mapping)
 * @author Yoann VANITOU
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link https://github.com/maltyxx/sag-orm
 * @version 2.9 (20140611)
 */
class Orm_table {
	
	public $table;
	
	public function __construct($table) {
		$this->table = $table;
	}
}

/* End of file Orm_table.php */
/* Location: ./application/libraries/Orm_table.php */