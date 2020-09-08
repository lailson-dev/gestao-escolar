<?php

$routes = [
    '/' => 'site/login/ReadController',
    '/login' => 'site/login/AuthController',
    // Rotas de Cadastro
    '/cadastrar/turma' => 'admin/create/class/ClassController',
    '/cadastrar/professor' => 'admin/create/teacher/TeacherController',
    '/cadastrar/disciplina' => 'admin/create/discipline/DisciplineController',
    '/cadastrar/aula' => 'admin/create/lesson/LessonController',
    '/cadastrar/aluno' => 'admin/create/student/StudentController',
    '/cadastrar/frequencia' => 'admin/create/frequency/FrequencyController',
    // Rotas de Consulta
    '/dashboard' => 'admin/read/HomeController',
    '/consultar/aluno' => 'admin/read/student/StudentController',
    '/consultar/aula' => 'admin/read/lesson/LessonController',
    '/consultar/frequencia' => 'admin/read/frequency/FrequencyController',
    // Rotas de Serviços
    '/servicos/informar-pais' => 'admin/services/SendMailController'
];