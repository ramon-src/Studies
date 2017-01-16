<?php

namespace App\Http\Controllers\Web;

use App\Domains\Pages\SectionPageRepository;
use Illuminate\Http\Request;
use App\Domains\Pages\PageRepository;

class PageController extends Controller
{
    private $pageRepo;
    private $sectionRepo;

    public function __construct(PageRepository $pageRepo, SectionPageRepository $sectionRepo)
    {
        $this->pageRepo = $pageRepo;
        $this->sectionRepo = $sectionRepo;
    }

    public function show($slug = 'home')
    {
        $page = $this->pageRepo->getPage($slug);
        $sections = "";
        if (count($page))
            $sections = $this->sectionRepo->getSectionsFromPage($page->id);

        return (count($page)) ? View('web.page_generated')->with('page', $page)->with('sections', $sections) : View('errors.204');
    }
}
