<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class todoController extends Controller
{

    public function index()
    {

        $tasks = Task::all();
        return view("home",compact("tasks"));
    }

    public function create()
    {
        return view("home");
    }

    public function store(Request $request)
    {

        $task = new Task();
        $task->content = $request->get("name");
        $task->save();
        return redirect()->back();
    }

    public function edit($id)
    {
        $tk = Task::whereId($id)->first();
        return view("edit",compact("tk"));
    }

    public function update(Request $request, $id)
    {
        $tk = Task::whereId($id)->first();
        $tk->content = $request->get("name");
        $tk->update();
        return redirect("/");
    }

    public function destroy($id)
    {
        $tk = Task::whereId($id)->first();
        $tk->delete();
        return redirect("/");
    }

    public function complete($id)
    {
        $task = Task::whereId($id)->first();
        $task->complete = true;
        $task->save();
        return redirect("/");
    }


}
