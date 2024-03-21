<?php
namespace Topsdk\Topapi\Ability371\Domain;

class TaobaoTbkItemInfoUpgradeGetPublishInfo {

    /**
        商品信息-收入比率(商品佣金比率+补贴比率)。15.5表示15.5%
     **/
    public $income_rate;

    /**
        前N件佣金信息-前N件佣金生效或预热时透出以下字段
     **/
    public $topn_info;


    public function getIncomeRate() : string{
        return $this->income_rate;
    }

    public function setIncomeRate(string $incomeRate){
        $this->income_rate = $incomeRate;
    }

    public function getTopnInfo() : TaobaoTbkItemInfoUpgradeGetTopNInfoDTO{
        return $this->topn_info;
    }

    public function setTopnInfo(TaobaoTbkItemInfoUpgradeGetTopNInfoDTO $topnInfo){
        $this->topn_info = $topnInfo;
    }


}

