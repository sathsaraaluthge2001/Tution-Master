<?php

namespace App\Services;

use App\Repositories\EnrollmentRepositoryInterface;

class EnrollmentService implements EnrollmentServiceInterface
{
    protected $enrollmentRepository;

    public function __construct(EnrollmentRepositoryInterface $enrollmentRepository)
    {
        $this->enrollmentRepository = $enrollmentRepository;
    }

    public function getAllEnrollments()
    {
        return $this->enrollmentRepository->getAll();
    }

    public function getEnrollmentById($id)
    {
        return $this->enrollmentRepository->findById($id);
    }

    public function createEnrollment(array $data)
    {
        return $this->enrollmentRepository->create($data);
    }

    public function updateEnrollment($id, array $data)
    {
        return $this->enrollmentRepository->update($id, $data);
    }

    public function deleteEnrollment($id)
    {
        return $this->enrollmentRepository->delete($id);
    }
}
