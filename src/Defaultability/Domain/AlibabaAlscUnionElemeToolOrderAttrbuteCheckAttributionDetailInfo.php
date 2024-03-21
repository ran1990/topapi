<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlibabaAlscUnionElemeToolOrderAttrbuteCheckAttributionDetailInfo {

    /**
        归因类型
     **/
    public $biz_type;

    /**
        归因结果，1.归因成功 2.归因失败
     **/
    public $result;

    /**
        归因失败原因
     **/
    public $reason;


    public function getBizType() : string{
        return $this->biz_type;
    }

    public function setBizType(string $bizType){
        $this->biz_type = $bizType;
    }

    public function getResult() : int{
        return $this->result;
    }

    public function setResult(int $result){
        $this->result = $result;
    }

    public function getReason() : string{
        return $this->reason;
    }

    public function setReason(string $reason){
        $this->reason = $reason;
    }


}

