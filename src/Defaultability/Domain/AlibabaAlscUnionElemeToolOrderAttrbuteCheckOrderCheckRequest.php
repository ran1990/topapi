<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlibabaAlscUnionElemeToolOrderAttrbuteCheckOrderCheckRequest {

    /**
        饿了么订单id
     **/
    public $order_id;


    public function getOrderId() : string{
        return $this->order_id;
    }

    public function setOrderId(string $orderId){
        $this->order_id = $orderId;
    }


}

