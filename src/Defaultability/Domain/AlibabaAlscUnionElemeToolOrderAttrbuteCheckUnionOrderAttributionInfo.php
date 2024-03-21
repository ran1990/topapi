<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlibabaAlscUnionElemeToolOrderAttrbuteCheckUnionOrderAttributionInfo {

    /**
        订单基本信息
     **/
    public $order_info;

    /**
        归因结果数据
     **/
    public $detail_infos;


    public function getOrderInfo() : AlibabaAlscUnionElemeToolOrderAttrbuteCheckOrderInfo{
        return $this->order_info;
    }

    public function setOrderInfo(AlibabaAlscUnionElemeToolOrderAttrbuteCheckOrderInfo $orderInfo){
        $this->order_info = $orderInfo;
    }

    public function getDetailInfos() : array{
        return $this->detail_infos;
    }

    public function setDetailInfos(array $detailInfos){
        $this->detail_infos = $detailInfos;
    }


}

