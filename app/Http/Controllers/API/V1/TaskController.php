<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller; // v
use App\Models\Task; // v
use App\Http\Requests\StoreTaskRequest; // v
use App\Http\Requests\UpdateTaskRequest; // v
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use App\Http\Resources\TaskResource; // added to modify the controller

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return TaskResource::collection(Task::all());
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTaskRequest $request)
    {
        $task = Task::create($request->validated());
        return TaskResource::make($task);
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        return TaskResource::make($task);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTaskRequest $request, Task $task)
    {
        $task->update($request->validated());
        return TaskResource::make($task); // output will be a JSON response
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();

        return response()->noContent();
    }
}
