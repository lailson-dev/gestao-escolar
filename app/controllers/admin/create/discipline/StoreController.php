<?php

use App\Models\admin\discipline\Discipline;

$filtedInput = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);

if (!empty($filtedInput)) {
    $discipline = new Discipline;
    $name = ['name' => $filtedInput];

    $result = $discipline->find('name', $filtedInput);

    if (count((array)$result) > 1)
        return header('Location: /cadastrar/disciplina');

    $discipline->save($name);
}

header('Location: /cadastrar/disciplina');