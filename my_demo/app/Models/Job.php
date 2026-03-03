<?php

namespace App\Models;
use Illuminate\Support\Arr;

class Job {

    public static function all(): array{

        return [

               [
                'id' => 1,
                    'title' => 'Développeur Laravel', 
                    'company' => 'TechCorp', 
                    'location' => 'Paris'
                ],

                [
                    'id'=> 2,
                    'title' => 'Designer UX/UI',
                    'company' => 'DesignStudio',
                    'location' => 'Lyon'
                ],

                [
                    'id'=> 3,
                    'title' => 'Chef de projet',
                    'company' => 'ProjectMasters',
                    'location' => 'Marseille'
                ],
        ];
    }
    public static function find(int $id): ?array {

        $job = Arr::first(static::all(), fn ($job) => $job['id'] === $id);
        
        return $job ? $job : null;
    }

}