<?php

namespace App\Http\Controllers\API\V1;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\TaskResource;

class CompleteTaskController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Task $task)
    {
        $task->is_completed = $request->is_completed;
        $task->save();

        return TaskResource::make($task);
    }
}
/*
command line usage for an invokable controller

PS F:\__Work\xampp\htdocs\laravel\API-SPA-Laravel-10-VueJS-3> php artisan make:controller

  What should the controller be named?
❯ API/V1/CompleteTaskController

  Which type of controller would you like: [empty]
  empty ................................................................................................................................ 0  
  api .................................................................................................................................. 1  
  invokable ............................................................................................................................ 2  
  resource ............................................................................................................................. 3  
  singleton ............................................................................................................................ 4  
❯ 2

   INFO  Controller [F:\__Work\xampp\htdocs\laravel\API-SPA-Laravel-10-VueJS-3\app/Http/Controllers/API/V1/CompleteTaskController.php] created successfully.  

PS F:\__Work\xampp\htdocs\laravel\API-SPA-Laravel-10-VueJS-3
*/
