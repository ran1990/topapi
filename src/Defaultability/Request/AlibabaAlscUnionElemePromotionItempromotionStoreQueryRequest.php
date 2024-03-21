<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\AlibabaAlscUnionElemePromotionItempromotionStoreQueryItemPromotionShopRequest;

class AlibabaAlscUnionElemePromotionItempromotionStoreQueryRequest {

    /**
        商品门店关系查询rquest
     **/
    private $queryRequest;


    public function getQueryRequest() : AlibabaAlscUnionElemePromotionItempromotionStoreQueryItemPromotionShopRequest{
        return $this->queryRequest;
    }

    public function setQueryRequest(AlibabaAlscUnionElemePromotionItempromotionStoreQueryItemPromotionShopRequest $queryRequest){
        $this->queryRequest = $queryRequest;
    }


    public function getApiName() : string {
        return "alibaba.alsc.union.eleme.promotion.itempromotion.store.query";
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

