<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\UserServiceInterface;
use App\Services\UserService;
use App\Repositories\UserRepositoryInterface;
use App\Repositories\UserRepository;
use App\Repositories\AssignmentRepositoryInterface;
use App\Repositories\AssignmentRepository;
use App\Services\AssignmentServiceInterface;
use App\Services\AssignmentService;
use App\Repositories\GradeRepositoryInterface;
use App\Repositories\GradeRepository;
use App\Services\GradeServiceInterface;
use App\Services\GradeService;
use App\Repositories\NoteRepositoryInterface;
use App\Repositories\NoteRepository;
use App\Services\NoteServiceInterface;
use App\Services\NoteService;
use App\Repositories\PaperRepositoryInterface;
use App\Repositories\PaperRepository;
use App\Services\PaperServiceInterface;
use App\Services\PaperService;
use App\Repositories\EnrollmentRepositoryInterface;
use App\Repositories\EnrollmentRepository;
use App\Services\EnrollmentServiceInterface;
use App\Services\EnrollmentService;
use App\Repositories\AdsRepositoryInterface;
use App\Repositories\AdsRepository;
use App\Services\AdsServiceInterface;
use App\Services\AdsService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(UserServiceInterface::class, UserService::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);

        $this->app->bind(AssignmentServiceInterface::class, AssignmentService::class);
        $this->app->bind(AssignmentRepositoryInterface::class, AssignmentRepository::class);

        $this->app->bind(GradeServiceInterface::class, GradeService::class);
        $this->app->bind(GradeRepositoryInterface::class, GradeRepository::class);

        $this->app->bind(NoteServiceInterface::class, NoteService::class);
        $this->app->bind(NoteRepositoryInterface::class, NoteRepository::class);

        $this->app->bind(PaperServiceInterface::class, PaperService::class);
        $this->app->bind(PaperRepositoryInterface::class, PaperRepository::class);
        
        $this->app->bind(EnrollmentRepositoryInterface::class, EnrollmentRepository::class);
        $this->app->bind(EnrollmentServiceInterface::class, EnrollmentService::class);

        $this->app->bind(AdsRepositoryInterface::class, AdsRepository::class);
        $this->app->bind(AdsServiceInterface::class, AdsService::class);
        
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
