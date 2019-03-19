<?php
namespace imgchart;
class imgOverlappedBarChart extends imgBarChart
{
    function __construct($width = 200, $height = 200, $ic_account_id = null, $ic_secret_key = null)
    {
        $this->setChartType('o', 'v');
        $this->setDimensions($width, $height);
        $this->setIcAccountId($ic_account_id);
        $this->setIcSecretKey($ic_secret_key);
    }
    public function setHorizontal($isHorizontal = true)
    {
        if($isHorizontal)
        {
            $this->setChartType('o', 'h');
        }
        else
        {
            $this->setChartType('o', 'v');
        }
    }
}
