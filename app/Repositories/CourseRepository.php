<?php

namespace App\Repositories;

use App\Models\Course;

class CourseRepository
{
    protected $model;

    function __construct(Course $course)
    {
        $this->model = $course;
    }

    function getAllCourses()
    {
        return $this->model->all();
    }

    function createCourse(array $course)
    {
        return $this->model->create($course);
    }

    function getCourseByUuid(string $identify)
    {
        return $this->model->where('uuid', $identify)->firstOrFail();
    }

    function updateCourseByUuid(string $identify, array $data)
    {
        $course = $this->getCourseByUuid($identify);

        $course->update($data);
    }

    function deleteCourseByUuid(string $identify)
    {
        return $this->model->where('uuid', $identify)->firstOrFail();
    }
}