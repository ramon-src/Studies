<?php
namespace App\Domains\Pages;

use Artesaos\Warehouse\AbstractCrudRepository;
use Illuminate\Support\Facades\DB;

class SectionPageRepository extends AbstractCrudRepository
{
    protected $modelClass = SectionPage::class;

    /**
     * @param $id
     * @return \Illuminate\Database\Eloquent\Model|null|static
     */
    public function getSectionsFromPage($id)
    {
        return $this->newQuery()
            ->where('page_id', '=', $id)
            ->orderBy('order')
            ->get();
    }

}