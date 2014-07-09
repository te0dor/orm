<?php
namespace dbd;

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user_model extends \Orm_model {

	public static $table = 'user';

	public static $primary_key = 'id';
    
	/**
	 * @property integer $id
	 * @property string $login
	 * @property string $password
	 * @property string $lastname
	 * @property string $firstname
	 * @property date $dateinsert
	 * @property date $dateupdate
	 */
	public static $fields = array(
		array('name' => 'id', 'type' => 'int'),
		array('name' => 'login', 'type' => 'string'),
		array('name' => 'password', 'type' => 'string'),
		array('name' => 'lastname', 'type' => 'string'),
		array('name' => 'firstname', 'type' => 'string'),
		array('name' => 'dateinsert', 'type' => 'date', 'date_format' => 'Y-m-d H:i:s', 'allow_null' => true),
		array('name' => 'dateupdate', 'type' => 'date', 'date_format' => 'Y-m-d H:i:s', 'allow_null' => true),
	);

	/**
	 * @method dbd\user_group_model user_group() has_many
	 */
    public static $associations = array(
        array('association_key' => 'user_group', 'model' => 'user_group_model', 'type' => 'has_many', 'primary_key' => 'id', 'foreign_key' => 'user_id')
	);
    
    public static $validations = array(
        array('field' => 'id', 'type' => 'int'),
        array('field' => 'login', 'type' => 'presence'),
        array('field' => 'password', 'type' => 'callback', 'callback' => 'dbd\user_model::check_password'),
        array('field' => 'lastname', 'type' => 'presence'),
        array('field' => 'dateinsert', 'type' => 'date'),
        array('field' => 'dateupdate', 'type' => 'date'),
	);
    
    public static function check_password($value) {
        return ! empty($value);
    }
}
