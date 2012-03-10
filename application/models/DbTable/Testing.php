<?php
class Application_Model_DbTable_Testing extends Zend_Db_Table_Abstract
{

    protected $_name = 'testing';

    public function fetchData()
    {
        return array();
    }
}

