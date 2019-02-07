<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'attack', 'defense', 'category_id'
    ];

    public function category() {
        return $this->belongsTo('App\Models\Category');
    }
}
