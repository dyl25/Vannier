<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Creation extends Model
{
    protected $guarded = [];
    protected $with = ['categories'];

   /* protected static function boot()
    {
        parent::boot();
        //Load directly the relation for all scopes
        static::addGlobalScope('categories', function($builder){
            $builder->with('categories');
        });
    }*/

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    /**
     * Get nb random creations without specify creations
     *
     * @param integer $nb Number creations to take.
     * @param array $excludeCreations The excluded creations.
     * @return The random creations
     */
    public function randCreations(int $nb, $excludeCreations = [])
    {
        $excludeId = [];

        if (!empty($excludeCreations)) {
            $excludeId = $excludeCreations->pluck('id')->toArray();
        }

        return $this->inRandomOrder()
            ->whereNotIn('id', $excludeId)
            ->take($nb)
            ->get();
    }
}