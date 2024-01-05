<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CaseContentController extends Controller
{

    /**
     * index pages
     *
     * @param Request $request
     * @return void
     */
    public function getList(Request $request)
    {
        echo error(50000);
    }

    /**
     * 测试接口
     *
     * @param Request $request
     * @return void
     */
    public function get(Request $request)
    {
        $params = $request->all();

        echo success($params);
    }
}
