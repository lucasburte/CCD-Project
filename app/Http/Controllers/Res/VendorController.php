<?php

namespace App\Http\Controllers\Res;

use App\Http\Controllers\Controller;
use App\Database\Models\User;

use Illuminate\Http\Request;

class VendorController extends Controller {
    public function __construct() {
        parent::__construct();
    }

    public function handle($file) {
        $url == __DIR__ . "/../../../public/vendor/$file";
        $content = file_get_contents($url);
        if (!$content)
            return response('', 404);
        return response($content, 200);
    }
}