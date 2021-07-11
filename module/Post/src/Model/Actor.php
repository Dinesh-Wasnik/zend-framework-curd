<?php

namespace Post\Model;

class Actor extends Zend_Db_Table_Abstract
{
    protected $_name            = 'actors';
    protected $_dependentTables = array('MoviesActors');
}
