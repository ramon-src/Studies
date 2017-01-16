<?php
namespace App\Domains\Pages;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class SectionPage extends Model
{
    use Notifiable;

    protected $table = 'sections_page';

    protected $fillable = [
        'title', 'description', 'order', 'col_lg', 'col_md', 'col_sm', 'col_xs', 'box_color', 'text_color', 'page_id', 'created_at', 'updated_at'
    ];

    public function page()
    {
        return $this->belongsTo('App\Domains\Pages\Page');
    }

}