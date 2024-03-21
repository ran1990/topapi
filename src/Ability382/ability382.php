<?php
namespace Topsdk\Topapi\Ability382;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability382\Request\TaobaoTbkDgVegasSendStatusRequest;

class Ability382 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        淘宝客-推广者-红包领取状态查询
    **/
    public function taobaoTbkDgVegasSendStatus(TaobaoTbkDgVegasSendStatusRequest $request) {
        return $this->client->execute("taobao.tbk.dg.vegas.send.status", $request->toMap(), $request->toFileParamMap());
    }
}