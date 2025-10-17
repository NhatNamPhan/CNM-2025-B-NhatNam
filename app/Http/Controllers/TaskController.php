<?php

namespace App\Http\Controllers;

use App\Http\Requests\Task\CreateRequest;
use App\Http\Resources\TaskResource;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function store(CreateRequest $request)
    {
        $userInput = $request->validated();

        $task = Task::create([
            'title' => $userInput['title'],
            'description' => $userInput['description'],
            'status' => 1,
        ]);

        return new TaskResource($task);
    }

    public function index()
    {

    }

    public function show($id)
    {

    }


    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    } 
}
