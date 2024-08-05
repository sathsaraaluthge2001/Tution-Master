<?php

namespace App\Repositories;

use App\Models\Ads;

class AdsRepository implements AdsRepositoryInterface
{
    public function getAll()
    {
        return Ads::all();
    }

    public function findById($id)
    {
        return Ads::findOrFail($id);
    }

    public function create(array $data)
    {
        return Ads::create($data);
    }

    public function update($id, array $data)
    {
        $ads = Ads::findOrFail($id);
        $ads->update($data);
        return $ads;
    }

    public function delete($id)
    {
        $ads = Ads::findOrFail($id);
        $ads->delete();
    }
}
