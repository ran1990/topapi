<?php
namespace Topsdk\Topapi\Ability382\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoTbkDgVegasSendStatusRequest {

    /**
        渠道管理id
     **/
    private $relationId;

    /**
        会员运营id
     **/
    private $specialId;

    /**
        加密后的值，需用MD5加密，32位小写
     **/
    private $deviceValue;

    /**
        入参类型(该模式下返回的结果为模糊匹配结果，和实际情况可能存在误差)： 1. IMEI 2. IDFA 3. OAID 4. MOBILE
     **/
    private $deviceType;

    /**
        已废弃，请勿传入
     **/
    private $thorBizCode;

    /**
        媒体pid
     **/
    private $pid;

    /**
        查询红包类型，1-超级红包，2-福利购，3-签到红包，4-福利直降，不传时默认查询超级红包数据
     **/
    private $activityCategory;


    public function getRelationId() : string{
        return $this->relationId;
    }

    public function setRelationId(string $relationId){
        $this->relationId = $relationId;
    }

    public function getSpecialId() : string{
        return $this->specialId;
    }

    public function setSpecialId(string $specialId){
        $this->specialId = $specialId;
    }

    public function getDeviceValue() : string{
        return $this->deviceValue;
    }

    public function setDeviceValue(string $deviceValue){
        $this->deviceValue = $deviceValue;
    }

    public function getDeviceType() : string{
        return $this->deviceType;
    }

    public function setDeviceType(string $deviceType){
        $this->deviceType = $deviceType;
    }

    public function getThorBizCode() : string{
        return $this->thorBizCode;
    }

    public function setThorBizCode(string $thorBizCode){
        $this->thorBizCode = $thorBizCode;
    }

    public function getPid() : string{
        return $this->pid;
    }

    public function setPid(string $pid){
        $this->pid = $pid;
    }

    public function getActivityCategory() : int{
        return $this->activityCategory;
    }

    public function setActivityCategory(int $activityCategory){
        $this->activityCategory = $activityCategory;
    }


    public function getApiName() : string {
        return "taobao.tbk.dg.vegas.send.status";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->relationId)) {
            $requestParam["relation_id"] = TopUtil::convertBasic($this->relationId);
        }

        if (!TopUtil::checkEmpty($this->specialId)) {
            $requestParam["special_id"] = TopUtil::convertBasic($this->specialId);
        }

        if (!TopUtil::checkEmpty($this->deviceValue)) {
            $requestParam["device_value"] = TopUtil::convertBasic($this->deviceValue);
        }

        if (!TopUtil::checkEmpty($this->deviceType)) {
            $requestParam["device_type"] = TopUtil::convertBasic($this->deviceType);
        }

        if (!TopUtil::checkEmpty($this->thorBizCode)) {
            $requestParam["thor_biz_code"] = TopUtil::convertBasic($this->thorBizCode);
        }

        if (!TopUtil::checkEmpty($this->pid)) {
            $requestParam["pid"] = TopUtil::convertBasic($this->pid);
        }

        if (!TopUtil::checkEmpty($this->activityCategory)) {
            $requestParam["activity_category"] = TopUtil::convertBasic($this->activityCategory);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

