<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * SAG ORM (objet relationnel mapping)
 * @author Yoann VANITOU
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link https://github.com/maltyxx/sag-orm
 * @version 2.9 (20140611)
 */

$config['orm'] = array(
    'cache' => FALSE,
    'tts' => 3600,
    'autoloadmodel' => FALSE,
    'binary_enable' => FALSE, // MySQL 5.6 minimum
    'encryption_enable' => FALSE, // MySQL 5.6 minimum
    'encryption_key' => "" // MySQL 5.6 minimum
);

/* End of file orm.php */
/* Location: ./application/config/orm.php */