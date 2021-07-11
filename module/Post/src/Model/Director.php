<?php

namespace Post\Model;

class Director extends Zend_Db_Table_Abstract
{
    protected $_name            = 'directors';
    protected $_dependentTables = array('Post');

}
