<?php


class carte
{
    private $idf;
    private $totalpoints;
    private $idc;
   

    function __construct($idf,$idc,$totalpoints)
    {
        $this->idf=$idf;
        $this->totalpoints=$totalpoints;
        $this->idc=$idc;
        
    }

    /**
     * @return mixed
     */
    public function getIdf()
    {
        return $this->idf;
    }

    /**
     * @return mixed
     */
    public function getTotalpoints()
    {
        return $this->totalpoints;
    }

    /**
     * @return mixed
     */
    public function getIdc()
    {
        return $this->idc;
    }

    

    /**
     * @param mixed $id
     */
    public function setIdf($idf)
    {
        $this->idf = $idf;
    }

    /**
     * @param mixed $nom
     */
    public function setTotalpoints($totalpoints)
    {
        $this->totalpoints = $totalpoints;
    }

    /**
     * @param mixed $prenom
     */
    public function setIdc($idc)
    {
        $this->idc = $idc;
    }

    
}
?>