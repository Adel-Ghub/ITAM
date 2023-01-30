<?php

namespace App\Repositories;

use App\Models\Asset;

class AssetRepository
{
    protected $asset;

    public function __construct(Asset $asset)
    {
        $this->asset = $asset;
    }

    public function getAll()
    {
        return $this->asset->all();
    }

    public function create($attributes)
    {
        return $this->asset->create($attributes);
    }

    public function update($id, array $attributes)
    {
        return $this->asset->find($id)->update($attributes);
    }

    public function delete($id)
    {
        return $this->asset->find($id)->delete();
    }
}
