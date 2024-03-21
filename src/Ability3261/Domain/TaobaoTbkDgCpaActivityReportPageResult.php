<?php
namespace Topsdk\Topapi\Ability3261\Domain;

class TaobaoTbkDgCpaActivityReportPageResult {

    /**
        数据列表
     **/
    public $results;


    public function getResults() : array{
        return $this->results;
    }

    public function setResults(array $results){
        $this->results = $results;
    }


}

