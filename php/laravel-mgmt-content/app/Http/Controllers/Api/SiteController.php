<?php

namespace App\Http\Controllers\Api;

use App\Domains\Pages\PageRepository;
use Illuminate\Http\Request;
use Mockery\CountValidator\Exception;

class SiteController extends Controller
{
    private $pageRepo;

    public function __construct(PageRepository $pageRepo)
    {
        $this->pageRepo = $pageRepo;
    }

    public function index()
    {
        $this->setPageTitle('Gerenciador do site');
        $pages = $this->pageRepo->getAll()->sortBy('order');

        return view('api.manager.site.index')
            ->with('pages', $pages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->setPageTitle('Nova página');
        return view('api.manager.site.create');
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
            $this->pageRepo->create($request->all());
            return redirect()->route('manager.site');
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
        $this->setPageTitle('Edição da página');
        $page = $this->pageRepo->findByID($id);
        return view('api.manager.site.edit')->with('page', $page);
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
            $page = $this->pageRepo->findByID($id);
            $page->update($request->all());
        }catch (Exception $e){

        }
        return redirect()->route('manager.site');
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
