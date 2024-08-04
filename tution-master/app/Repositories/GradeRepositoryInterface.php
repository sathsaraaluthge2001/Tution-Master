<?php

namespace App\Repositories;

use App\Models\Grade;

interface GradeRepositoryInterface{

    public function getAll();
    public function find($id):? Grade;
    public function create(array $data): Grade;
    public function update($id,array $data):Grade;
    public function delete($id): bool;

}
