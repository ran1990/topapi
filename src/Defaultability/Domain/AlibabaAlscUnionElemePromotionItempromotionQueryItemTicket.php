<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlibabaAlscUnionElemePromotionItempromotionQueryItemTicket {

    /**
        价格（分）
     **/
    public $price;

    /**
        数量
     **/
    public $quantity;

    /**
        使用门槛（分）
     **/
    public $threshold;


    public function getPrice() : int{
        return $this->price;
    }

    public function setPrice(int $price){
        $this->price = $price;
    }

    public function getQuantity() : int{
        return $this->quantity;
    }

    public function setQuantity(int $quantity){
        $this->quantity = $quantity;
    }

    public function getThreshold() : int{
        return $this->threshold;
    }

    public function setThreshold(int $threshold){
        $this->threshold = $threshold;
    }


}

