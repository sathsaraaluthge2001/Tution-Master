<?php

namespace App\Repositories;

use App\Models\Grade;

class GradeRepository implements GradeRepositoryInterface{

    public function getAll(){
        return Grade::all();
    }

    public function find($id): ?Grade
    {
        return Grade::find($id);
    }

    public function create(array $data): Grade
    {
        return Grade::create($data);
    }

    public function update($id, array $data): Grade
    {
        $grade = Grade::find($id);
        $grade->update($data);
        return $grade;
    }

    public function delete($id): bool
    {
        $grade = Grade::find($id);
        return $grade ? $grade->delete() : false;
    }
}