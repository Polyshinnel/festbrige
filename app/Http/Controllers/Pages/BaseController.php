<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\ContactInfo;
use App\Models\Page;
use App\Models\PageLink;
use App\Models\PageLinkName;
use Illuminate\Http\Request;
use function PHPUnit\Framework\isEmpty;

class BaseController extends Controller
{
    public function getCommonPageInfo($link, $lang='en'): array {
        return [
            'header' => $this->getHeader($lang),
            'page_meta' => $this->getPageInfo($link, $lang),
            'contacts' => $this->getContacts()
        ];
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
}
