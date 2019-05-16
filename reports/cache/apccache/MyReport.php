<?php
//Step 1: Load KoolReport
require_once "../../../koolreport.inc.php";

//Step 2: Creating Report class
class MyReport extends \koolreport\KoolReport
{
    use \koolreport\cache\ApcCache;

    function cacheSettings()
    {
        return array(
            "ttl"=>60,
        );
    }    

    public function settings()
    {
        //Get default connection from config.php
        $config = include "../../../config.php";

        return array(
            "dataSources"=>array(
                "automaker"=>$config["automaker"]
            )
        );
    }   
    protected function setup()
    {
        $this->src('automaker')
        ->query("SELECT employeeNumber, firstName,lastName,jobTitle, extension from employees")
        ->pipe($this->dataStore("employees"));
    } 

}