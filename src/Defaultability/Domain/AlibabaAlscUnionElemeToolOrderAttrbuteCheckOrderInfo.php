<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlibabaAlscUnionElemeToolOrderAttrbuteCheckOrderInfo {

    /**
        订单号
     **/
    public $order_no;

    /**
        店铺名称
     **/
    public $shop_name;

    /**
        订单类型
     **/
    public $type_name;

    /**
        订单创建时间
     **/
    public $create_time;

    /**
        订单完成时间
     **/
    public $finish_time;

    /**
        订单结算时间
     **/
    public $settle_date;


    public function getOrderNo() : string{
        return $this->order_no;
    }

    public function setOrderNo(string $orderNo){
        $this->order_no = $orderNo;
    }

    public function getShopName() : string{
        return $this->shop_name;
    }

    public function setShopName(string $shopName){
        $this->shop_name = $shopName;
    }

    public function getTypeName() : string{
        return $this->type_name;
    }

    public function setTypeName(string $typeName){
        $this->type_name = $typeName;
    }

    public function getCreateTime() : string{
        return $this->create_time;
    }

    public function setCreateTime(string $createTime){
        $this->create_time = $createTime;
    }

    public function getFinishTime() : string{
        return $this->finish_time;
    }

    public function setFinishTime(string $finishTime){
        $this->finish_time = $finishTime;
    }

    public function getSettleDate() : string{
        return $this->settle_date;
    }

    public function setSettleDate(string $settleDate){
        $this->settle_date = $settleDate;
    }


}

