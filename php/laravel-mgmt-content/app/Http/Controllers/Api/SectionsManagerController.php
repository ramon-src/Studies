<?php

namespace App\Http\Controllers\Api;

use App\Domains\Pages\PageRepository;
use App\Domains\Pages\SectionPageRepository;
use Illuminate\Http\Request;
use Mockery\CountValidator\Exception;

class SectionsManagerController extends Controller
{
    private $pageRepo;
    private $sectionRepo;

    public function __construct(PageRepository $pageRepo, SectionPageRepository $sectionRepo)
    {
        $this->pageRepo = $pageRepo;
        $this->sectionRepo = $sectionRepo;
    }

    public function index()
    {
        $this->setPageTitle('Gerenciador de seções das páginas');
        $pages = $this->pageRepo->getAll()->sortBy('order');

        return view('api.manager.site.section.index')
            ->with('pages', $pages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($page_id)
    {
        $page = $this->pageRepo->findByID($page_id);
        $this->setPageTitle('Nova seção para a página: ' . $page->title);
        return view('api.manager.site.section.create')->with('page_id', $page->id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $this->sectionRepo->create($request->all());
            return redirect()->route('manager.site.section');
        } catch (Exception $e) {
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function visibility($id, $isVisible)
    {
        try {
            ($isVisible) ? $this->pageRepo->inactiveThePage($id) : $this->pageRepo->activeThePage($id);
        } catch (Exception $e) {
        }
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $section = $this->sectionRepo->findByID($id);
        $page = $this->pageRepo->findByID($section->page_id);
        $this->setPageTitle('Edição da seção da página: ' . $page->title);

        return view('api.manager.site.section.edit')->with('section', $section);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $page = $this->sectionRepo->findByID($id);
            $page->update($request->all());
        } catch (Exception $e) {

        }
        return redirect()->route('manager.site.section');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
