<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\AlibabaAlscUnionElemeToolOrderAttrbuteCheckOrderCheckRequest;

class AlibabaAlscUnionElemeToolOrderAttrbuteCheckRequest {

    /**
        订单归因排查工具请求对象
     **/
    private $queryRequest;


    public function getQueryRequest() : AlibabaAlscUnionElemeToolOrderAttrbuteCheckOrderCheckRequest{
        return $this->queryRequest;
    }

    public function setQueryRequest(AlibabaAlscUnionElemeToolOrderAttrbuteCheckOrderCheckRequest $queryRequest){
        $this->queryRequest = $queryRequest;
    }


    public function getApiName() : string {
        return "alibaba.alsc.union.eleme.tool.order.attrbute.check";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->queryRequest)) {
            $requestParam["query_request"] = TopUtil::convertStruct($this->queryRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

