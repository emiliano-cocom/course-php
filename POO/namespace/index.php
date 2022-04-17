<?php

    use Controllers\CourseController;
    use Models\Course;

    spl_autoload_register(function($class) {
        // echo str_replace('\\', '/', $class).'.php';
        if (file_exists(str_replace('\\', '/', $class).'.php')) {
            require_once(str_replace('\\', '/', $class).'.php');
        }
    });

    $course = new Course;
    $course->greeting();
    echo '<br>';
    $courseController = new CourseController;
    $courseController->greeting();