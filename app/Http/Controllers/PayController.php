<?php

namespace App\Http\Controllers;

use Openpesa\Pesa\PesaFacade;

use Illuminate\Http\Request;

class PayController extends Controller
{
    public function pay(Request $reuest)
    {
        $data_c2b = [
            'input_Amount' => 1500,
            'input_Country' => 'TZN',
            'input_Currency' => 'TZS',
            'input_CustomerMSISDN' => '000000000001',
            'input_ServiceProviderCode' => '000000',
            'input_ThirdPartyConversationID' => 'rre2kf',
            'input_TransactionReference' => 'SDF3DF',
            'input_PurchasedItemsDesc' => 'Test Transaction'
        ];
        $res = PesaFacade::c2b($data_c2b);
        // dd($res);
        return $res;
    }
}
