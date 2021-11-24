<?php

namespace App\Services\Midtrans;

use Midtrans\Config;

class Midtrans
{
    protected $serverKey;
    protected $isSanitized;
    protected $isProduction;
    protected $is3ds;

    public function __construct()
    {
        $this->serverKey = config('midtrans.server_key');
        $this->isSanitized = config('midtrans.is_sanitized');
        $this->isProduction = config('midtrans.is_production');
        $this->is3ds = config('midtrans.is3ds');
        
        $this->_configureMidtrans();
    }
    public function _configureMidtrans()
    {
        Config::$serverKey = $this->serverKey;
        Config::$isSanitized = $this->isSanitized;
        Config::$isProduction = $this->isProduction;
        Config::$is3ds = $this->is3ds;
    }
}

?>