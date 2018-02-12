<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Creation extends Model
{
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