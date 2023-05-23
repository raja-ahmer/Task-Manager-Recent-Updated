<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Task;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        return view('home');
    }

    public function about() {
        return view('about');
    }

    public function services() {
        return view('services');
    }

    public function contact() {
        $url = url('/contact');
        $title = "New Message";
        $data = compact('url', 'title');
        return view('contact')->with($data);
    }

    public function store_data(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' =>'required|email',
            'subject' => 'required',
            'message' =>'required'
        ]) ;

        // Junk Code
        // echo '<pre>';
        // print_r($request->all());

        // Inserting Data into database
        $contact = new Contact();
        $contact->name = $request['name'];
        $contact->email = $request['email'];
        $contact->subject = $request['subject'];
        $contact->message = $request['message'];
        $contact->save();
        return redirect('/messages')->with('Success', 'Message sent successfully');
    }

    public function message() {
        $contact = Contact::all();

        // Junk Code
        // echo '<pre>';
        // print_r($contact->toArray());
        // die;

        $data = compact('contact');

        return view('messages-view')->with($data);
    }

    public function deleteMessage($id) {
        // Junk Code
        // echo $id;
        // die;

        $contact = Contact::find($id);
        if(!is_null($contact)) {
            $contact->delete();
        }
        else {
            echo 'Record not found';
            // die();
        }
        return redirect('messages');

        // Junk Code
        // echo '<pre>';
        // print_r($contact);
    }

    public function editMessage($id) {
        $contact = Contact::find($id);
        if (is_null($contact)) {
            // Not Found
            return redirect('messages');
        }
        else {
            // Found
            $url = url('messages/update') . '/' . $id;
            $title = "Update Message";
            $data = compact('contact', 'url', 'title');
            return view('editContact')->with($data);
        }
    }

    public function updateMessage($id, Request $request) {
        $contact = Contact::find($id);
        $contact->name = $request['name'];
        $contact->email = $request['email'];
        $contact->subject = $request['subject'];
        $contact->message = $request['message'];
        $contact->save();

        return redirect('messages');
    }

    public function addTask() {
        return view('add-task');
    }

    public function store_task(Request $request) {
        $request->validate(
            [
                "title" => "required",
                "description" => "required",
                "start-date" => "required",
                "end-date" => "required"
            ]
            );

        // echo "<pre>";
        // print_r($request->all());

        $task = new Task();
        $task->title = $request['title'];
        $task->description = $request['description'];
        $task->start_date = $request['start-date'];
        $task->end_date = $request['end-date'];
        $task->save();
        return redirect('/')->with('Success', 'Task Created Successfully');
    }

    public function show_task() {
        $task = Task::all();

        // echo '<pre>';
        // print_r($task->toArray());
        // die;

        $data = compact('task');

        return view('index')->with($data);
    }

    public function delete_task($id) {
        $task = Task::find($id);
        if(!is_null($task)) {
            $task->delete();
        }
        else {
            echo 'Task not found';
        }
        return redirect('/');
    }

    public function edit_task($id) {
        $task = Task::find($id);
        if(is_null($task)) {
            // Not found
            return redirect('index');
        }
        else {
            // Found
            $url = url('/update') . '/' . $id;
            $title = "Edit Task";
            $data = compact('task', 'url', 'title');
            return view('edit-task')->with($data);
        }
    }

    public function update_task($id, Request $request) {

        $task = Task::find($id);

        $task->title = $request->get('title');
        $task->description = $request->get('description');
        $task->start_date = $request->get('start-date');
        $task->end_date = $request->get('end-date');
        // dd($request, $id, $task);
        $task->save();

        return redirect('/');
    }
}
