<?php

namespace App\Services;

interface EnrollmentServiceInterface
{
    public function getAllEnrollments();
    public function getEnrollmentById($id);
    public function createEnrollment(array $data);
    public function updateEnrollment($id, array $data);
    public function deleteEnrollment($id);
}
