<?php

namespace App\Http\Controllers;
include(base_path() . '/phpqrcode/qrlib.php');
use App\Http\Requests\QrcodeRequest;
use QRcode;

class QrcodeController extends Controller
{

    public function getQrcode(QrcodeRequest $request)
    {
        $str = implode(", ", $request->validated());

        QRcode::png($str, base_path() . '/storage/app/public/QRCode/qrcode.png');

        return json_encode(asset('storage/QRCode/qrcode.png'));

    }

}
