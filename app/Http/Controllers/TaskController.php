<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Category;
use App\Models\User;
use DateTime;

class TaskController extends Controller
{
    //
    public function add_task()
    {
        $category = Category::all();
        $user = User::all();
        $data = compact('category', 'user');
        return view('add-task')->with($data);

        // Below Commented lines are used for testing purposes only
        // return User::all();
    }

    public function store_task(Request $request)
    {
        $request->validate([
            'name' => 'required | unique:task',
            'description' => 'required',
            'start-date' => 'required|date|date_equals:today',
            'end-date' => 'required|date|after:start-date',
            'category' => 'required'
        ]);

        $task = new Task();
        $task->name = $request['name'];
        $task->description = $request['description'];
        $task->startDate = $request['start-date'];
        $task->endDate = $request['end-date'];
        $task->categoryId = $request['category'];
        $task->userId = $request['user'];
        $task->save();

        return redirect('/home');

    }

    public function view_task(Request $request)
    {
        if($request->ajax())
        {
            if ($request->timeFilter == 'today') {
                $tasks = Task::where('endDate', '=', today())->get();


            }
            elseif ($request->timeFilter == "week") {
                $current_dayname = date("l"); // return sunday monday tuesday etc.
                $weekStartDate = date("Y-m-d",strtotime('monday this week'));
                $weekEndDate = date("Y-m-d",strtotime("$current_dayname this week")) ;


                $weekStartDate = new DateTime($weekStartDate);
                $weekStartDate->modify('-1 day');
                $weekEndDate = new DateTime($weekEndDate);
                $weekEndDate->modify('+1 day');
                // dd($weekEndDate);


                // $date = date("Y-m-d",strtotime('monday this week')).'to'.date("Y-m-d",strtotime("$current_dayname this week"));
                // dd($weekEndDate);
                $tasks = Task::whereBetween('endDate',[$weekStartDate,$weekEndDate] )->get();
                // dd($task);
            }
            elseif ($request->timeFilter == "all") {
                $tasks = Task::with('getCategory')->get();
            }

            foreach($tasks as $task) {
                $table = '<td>' . $task->name . '</td>' .
                '<td>' . $task->description . '</td>' .
                '<td>' . $task->startDate . '</td>' .
                '<td>' . $task->endDate . '</td>' .
                '<td>' . $task->getCategory->name . '</td>' .
                '<td><span class="badge bg-success p-2">Active</span></td>' .
                '<td><a href=' . "route('edit_task', ['id' =>" . $task->taskId . "]) style='text-decoration: none'><button
                    class='btn btn-warning'>Edit</button></a>&nbsp;"
                ;
            }

            // dd($table);
            return response()->json([
                'task' => $tasks,
                'table'=> $table
            ]);
        }else{
            $task = Task::with('getCategory')->get();

            $data = compact('task');
            return view('/home')->with($data);
        }


        // $category = Category::all();
        // $task1 = Task::with('getUser')->get('name');
        // dd($task1);
        // echo '<pre>';
        // print_r($task->toArray());
        // die;



    }

    public function delete_task($id)
    {
        $task = Task::find($id);
        if (!is_null($id)) {
            $task->delete();
        }
        else {
            echo '<div class="alert alert-danger">Task not found</div>';
        }
        return redirect('/home');
    }

    public function edit_task($id)
    {
        $task = Task::find($id);
        $category = Category::all();

        if (is_null($task)) {
            return view('home');
        }
        else {
            // $task1 = Task::with('getCategory')->get();
            $url = url('/home/update-task') . '/' . $id;
            $data = compact('url', 'task','category');
            return view('edit-task')->with($data);
        }
    }

    public function update_task($id, Request $request)
    {
        $task = Task::find($id);

        $task->name = $request->get('name');
        $task->description = $request->get('description');
        $task->startDate = $request->get('start-date');
        $task->endDate = $request->get('end-date');
        $task->categoryId = $request->get('category');
        // dd($request, $id, $task);
        $task->save();

        return redirect('/home');
        // return view('home')->with();
    }

    // public function filter_task (Request $request)
    // {
    //     if ($request->timeFilter == 'Today') {
    //         $task = Task::where('endDate', '=', today());
    //     }
    //     elseif ($request->timeFilter == "week") {
    //         $task = Task::where('endDate', '=', );
    //     }
    // }

}
