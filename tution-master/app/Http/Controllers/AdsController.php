<?php

namespace App\Http\Controllers;

use App\Services\AdsServiceInterface;
use Illuminate\Http\Request;

class AdsController extends Controller
{
    protected $adsService;

    public function __construct(AdsServiceInterface $adsService)
    {
        $this->adsService = $adsService;
    }

    public function index()
    {
        $ads = $this->adsService->getAllAds();
        return response()->json($ads);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image_path' => 'required|string|max:255',
        ]);

        $ads = $this->adsService->createAds($validatedData);
        return response()->json($ads, 201);
    }

    public function show($id)
    {
        $ads = $this->adsService->getAdsById($id);
        return response()->json($ads);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image_path' => 'required|string|max:255',
        ]);

        $ads = $this->adsService->updateAds($id, $validatedData);
        return response()->json($ads);
    }

    public function destroy($id)
    {
        $this->adsService->deleteAds($id);
        return response()->json(null, 204);
    }
}
