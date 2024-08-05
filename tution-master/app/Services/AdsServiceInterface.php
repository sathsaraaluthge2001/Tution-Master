<?php

namespace App\Services;

interface AdsServiceInterface
{
    public function getAllAds();
    public function getAdsById($id);
    public function createAds(array $data);
    public function updateAds($id, array $data);
    public function deleteAds($id);
}
