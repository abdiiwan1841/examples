<?php
//Step 1: Load KoolReport
require_once "../../../koolreport.inc.php";

//Step 2: Creating Report class
class MyReport extends \koolreport\KoolReport
{
    protected function settings()
    {
        return array(
            "dataSources"=>array(
                
            )
        );
    }
    protected function setup()
    {

    }
}