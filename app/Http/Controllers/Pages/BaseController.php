<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\ContactInfo;
use App\Models\MainPageGallery;
use App\Models\MainPageText;
use App\Models\Page;
use App\Models\PageImages;
use App\Models\PageLink;
use App\Models\PageLinkName;
use App\Models\PageText;
use Illuminate\Http\Request;
use function PHPUnit\Framework\isEmpty;

class BaseController extends Controller
{
    public function getCommonPageInfo($link, $lang='en'): array {

        $returnArr = [
            'header' => $this->getHeader($lang),
            'page_meta' => $this->getPageInfo($link, $lang),
            'contacts' => $this->getContacts(),
        ];

        $pageText = $this->getPageText($link);

        if($link != '/') {

            $returnArr['page_text'] = $pageText['pageText'];
            $returnArr['services'] = $pageText['services'];
            $returnArr['images'] = $this->getPageImages($link);
        } else {
            $returnArr['page_text'] = $pageText['page_text'];
            $returnArr['counters'] = $pageText['counters'];
            $services = $this->getMainServices();
            $returnArr['services'] = $services;
        }
        return $returnArr;
    }
    private function getHeader($lang = 'en'): array {
        $headerLinks = PageLink::all();
        $headerListArr = [];
        foreach ($headerLinks as $headerLink) {
            $headerLinkText = PageLinkName::where(['link_id' => $headerLink->id, 'lang' => $lang])->first();
            $headerListArr[] = [
                'link' => $headerLink->link,
                'name' => $headerLinkText->text
            ];
        }

        return $headerListArr;
    }

    private function getPageInfo($link, $lang = 'en'): array {
        $pageLink = PageLink::where(['link' => $link])->first();
        return Page::find($pageLink->page_id)->toArray();
    }

    private function getContacts(): array {
        $contactArr = ContactInfo::all();
        $contacts = [];
        if(!$contactArr->isEmpty()) {
            foreach ($contactArr as $item) {
                if(isset($contacts[$item->type])) {
                    if(gettype($contacts[$item->type]) == 'string') {
                        $contacts[$item->type] = [
                            $contacts[$item->type],
                            $item->text
                        ];
                    } else {
                        $tempArr = $contacts[$item->type];
                        $tempArr[] = $item->text;
                        $contacts[$item->type] = $tempArr;
                    }

                } else {
                    $contacts[$item->type] = $item->text;
                }
            }
        }
        return $contacts;
    }

    private function getPageText($link)
    {
        $pageLink = PageLink::where(['link' => $link])->first();
        $pageId = $pageLink->page_id;
        if($link != '/')
        {
            $services = [];
            $pageTextInfo = [];
            $pageText = PageText::where('page_id', $pageId)->get();
            foreach ($pageText as $item)
            {
                if($item['type'] != 'service')
                {
                    $pageTextInfo[$item['type']] = $item['text'];
                } else {
                    $services[] = $item['text'];
                }
            }

            return [
                'services' => $services,
                'pageText' => $pageTextInfo
            ];
        } else {
            $countersArr = [];
            $mainPageTextInfo = [];
            $mainPageText = MainPageText::all();
            $counter = null;
            foreach ($mainPageText as $item)
            {
                if($item['type'] != 'counter' && $item['type'] != 'counter_subtitle')
                {
                    $mainPageTextInfo[$item['type']] = $item['text'];
                }

                if($item['type'] == 'counter')
                {
                    $counter = $item['text'];
                }

                if($item['type'] == 'counter_subtitle')
                {
                    $countersArr[] = [
                        'counter' => $counter,
                        'counter_text' => $item['text']
                    ];
                }
            }

            return [
                'page_text' => $mainPageTextInfo,
                'counters' => $countersArr
            ];
        }
    }

    private function getPageImages($link)
    {
        $pageLink = PageLink::where(['link' => $link])->first();
        $pageId = $pageLink->page_id;

        $images = [];
        $imgList = PageImages::where('page_id', $pageId)->get();
        foreach ($imgList as $item)
        {
            $images[] = [
                'thumb' => $item['img_small'],
                'img' => $item['img']
            ];
        }
        return $images;
    }

    private function getMainServices()
    {
        $productServiceRawImages = MainPageGallery::all();
        $serviceData = [];
        foreach ($productServiceRawImages as $image)
        {
            $serviceData[$image['page_id']]['images'][] = [
                'img_small' => $image['img_small'],
                'img' => $image['img']
            ];
        }
        foreach ($serviceData as $pageId => $item)
        {
            $pageText = PageText::where('page_id', $pageId)->get();
            $pageLink = PageLink::where('page_id', $pageId)->first();
            $services = [];
            $title = null;
            foreach ($pageText as $unit)
            {
                if($unit['type'] == 'service')
                {
                    $services[] = $unit['text'];
                }

                if($unit['type'] == 'title')
                {
                    $title = $unit['text'];
                }
            }

            $serviceData[$pageId]['title'] = $title;
            $serviceData[$pageId]['services'] = $services;
            $serviceData[$pageId]['link'] = $pageLink->link;

        }
        $idx = 1;
        $formattedArr = [];
        foreach ($serviceData as $item)
        {
            $item['idx'] = $idx;
            $formattedArr[] = $item;
            $idx++;
        }
        return $formattedArr;
    }
}
