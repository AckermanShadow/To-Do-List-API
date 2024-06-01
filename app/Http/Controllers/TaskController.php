<?php

namespace App\Http\Controllers;

use App\Exceptions\GeneralException;
use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Http\Request; 

class TaskController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth:api');
    }

    public function index()
    {
        return Task::all();
    }

    public function store(TaskRequest $request)
    {
        return Task::create($request->all());
    }

    public function show($id)
    {
        return Task::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);
        $task->update($request->all());

        return $task;
    }

    public function destroy($id)
    {
        Task::findOrFail($id)->delete();
        return response()->noContent();
    }

}
