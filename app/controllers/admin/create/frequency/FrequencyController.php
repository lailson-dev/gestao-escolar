<?php

use App\Models\admin\student\Student;
use App\Models\admin\discipline\Discipline;
use App\Models\admin\teacher\Teacher;

$students = (new Student)->all();
$disciplines = (new Discipline)->all();
$teachers = (new Teacher)->all();

$layout->add('admin.frequency.create');
