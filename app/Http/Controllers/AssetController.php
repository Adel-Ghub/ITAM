<?php

namespace App\Http\Controllers;
use App\Repositories\AssetRepository;

use Illuminate\Http\Request;

class AssetController extends Controller
{
    protected $assetRepository;

    public function __construct(AssetRepository $assetRepository)
    {
        $this->assetRepository = $assetRepository;
    }

    public function index()
    {
        $assets = $this->assetRepository->all();
        return view('assets.index', compact('assets'));
    }

    public function store(Request $request)
    {
        $this->assetRepository->create($request->all());
        return redirect()->route('assets.index')->with('success', 'Asset added successfully');
    }

    public function update(Request $request, $id)
    {
        $this->assetRepository->update($id, $request->all());
        return redirect()->route('assets.index')->with('success', 'Asset updated successfully');
    }

    public function destroy($id)
    {
        $this->assetRepository->delete($id);
        return redirect()->route('assets.index')->with('success', 'Asset deleted successfully');
    }
}
