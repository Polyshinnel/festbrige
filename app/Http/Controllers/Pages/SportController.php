<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SportController extends BaseController
{
    public function __invoke(Request $request): View
    {
        $pageLink = $request->getRequestUri();
        $pageData = $this->getCommonPageInfo($pageLink);
        return view(
            'pages.sport-events',
            [
                'pageInfo' => $pageData['page_meta'],
                'headerLinks' => $pageData['header'],
                'contacts' => $pageData['contacts']
            ]
        );
    }
}
