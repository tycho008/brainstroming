<?php


/**
 * Division Controller
 *
 * This class is for handling division
 *
 * @author     brainstorming
 *
 * @version    June2017
 */

class DivisionController implements Operations
{

    public function calculate($val1, $val2)
    {
        $dal = new DAL();
		return $result = $dal->api('DIV_FN','$val1','$val2');
    }
}