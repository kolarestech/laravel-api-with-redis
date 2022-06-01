<?php 
namespace App\Services;

use App\Repositories\CourseRepository;

class CourseService 
{
    protected $repository;

    function __construct(CourseRepository $courseRepository)
    {
        $this->repository = $courseRepository;    
    }

    function getCourses() 
    {
        return $this->repository->getAllCourses();
    }

    function createCourse(array $course) 
    {
        return $this->repository->createCourse($course);
    }

    function getCourse(string $identify) 
    {
        return $this->repository->getCourseByUuid($identify);
    }

    function updateCourse(string $identify, array $data) 
    {
        $this->repository->updateCourseByUuid($identify, $data);
    }

    function deleteCourse(string $identify) 
    {
        return $this->repository->deleteCourseByUuid($identify);
    }
}