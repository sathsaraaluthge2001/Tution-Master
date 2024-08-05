<?php

namespace App\Services;

use App\Repositories\AdsRepositoryInterface;

class AdsService implements AdsServiceInterface
{
    protected $adsRepository;

    public function __construct(AdsRepositoryInterface $adsRepository)
    {
        $this->adsRepository = $adsRepository;
    }

    public function getAllAds()
    {
        return $this->adsRepository->getAll();
    }

    public function getAdsById($id)
    {
        return $this->adsRepository->findById($id);
    }

    public function createAds(array $data)
    {
        return $this->adsRepository->create($data);
    }

    public function updateAds($id, array $data)
    {
        return $this->adsRepository->update($id, $data);
    }

    public function deleteAds($id)
    {
        return $this->adsRepository->delete($id);
    }
}
