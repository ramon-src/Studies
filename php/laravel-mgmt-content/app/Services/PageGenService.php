<?php
/**
 * Created by PhpStorm.
 * User: ramon
 * Date: 10/09/16
 * Time: 19:53
 */

namespace App\Services;

use App\Domains\Pages\PageRepository;

class PageGenService
{
    protected $pageRepository;

    public function __construct(PageRepository $pageRepository)
    {
        $this->pageRepository = $pageRepository;
    }

    public function getActivePages()
    {
        return $this->pageRepository->getActives();
    }

    public function getInfoFromPage($current_page){
        $url_splitted = explode("/", $current_page);
        $url = end($url_splitted);
        if(!$url)
            $url= 'home';
        return $this->pageRepository->getPage($url);
    }
}