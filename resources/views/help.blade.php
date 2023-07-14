@section('title')
    Help
@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="mt-4 mb-4 card p-3 bg-white">
                            <h3 class="text-center text-primary">
                                Help
                            </h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <h1 class="text-center">
                            ToDoList Web App Help
                        </h1> <br>
                        <h3>Getting Started</h3>
                        <div class="p-4">
                            <h4>
                                Creating an Account
                            </h4>

                            <p>
                                To start using the ToDoList web app, you need to create an account. Follow these steps to
                                create
                                your account:
                            <ol type="1" class="list-group">
                                <li class="list-group-item">
                                    Go to the app's homepage at [www.todolistapp.com](www.todolistapp.com).
                                </li>
                                <li class="list-group-item">
                                    Click on the "Sign Up" button.
                                </li>
                                <li class="list-group-item">
                                    Fill in the required information, such as your name, email address, and a secure
                                    password.
                                </li>
                                <li class="list-group-item">
                                    Click on the "Create Account" button to complete the registration process.
                                </li>
                            </ol>
                            </p>
                            <h4>
                                Logging In
                            </h4>
                            <p>
                                Once you have created an account, you can log in to the ToDoList web app using your
                                credentials.
                                Follow these steps to log in:
                            <ol type="1" class="list-group">
                                <li class="list-group-item">
                                    Go to the app's homepage at [www.todolistapp.com](www.todolistapp.com).
                                </li>
                                <li class="list-group-item">
                                    Click on the "Log In" button.
                                </li>
                                <li class="list-group-item">
                                    Enter your email address and password.
                                </li>
                                <li class="list-group-item">
                                    Click on the "Log In" button to access your account.
                                </li>
                            </ol>
                            </p>
                        </div>

                        <h3>Managing Your Tasks</h3>
                        <div class="p-4">
                            <h4>Creating a Task</h4>
                            <p>
                                To create a new task in the ToDoList web app, follow these steps:
                            <ol type="1" class="list-group">
                                <li class="list-group-item">
                                    Make sure you are logged in to your account.
                                </li>
                                <li class="list-group-item">
                                    On the app's main dashboard, click on the "New Task" button.
                                </li>
                                <li class="list-group-item">
                                    Enter a title for your task in the provided field.
                                </li>
                                <li class="list-group-item">
                                    Optionally, add a description or additional details in the description field.
                                </li>
                                <li class="list-group-item">
                                    Set a due date and time for the task if necessary.
                                </li>
                                <li class="list-group-item">
                                    Click on the "Create" or "Save" button to add the task to your list.
                                </li>
                            </ol>
                            </p>
                            <h4>Editing a Task</h4>
                            <p>
                                To make changes to an existing task, follow these steps:
                            <ol type="1" class="list-group">
                                <li class="list-group-item">
                                    Navigate to your task list.
                                </li>
                                <li class="list-group-item">
                                    Locate the task you want to edit and click on it.
                                </li>
                                <li class="list-group-item">
                                    The task details will be displayed.
                                </li>
                                <li class="list-group-item">
                                    Make the necessary changes to the title, description, due date, or any other relevant
                                    fields.
                                </li>
                                <li class="list-group-item">
                                    Click on the "Save" or "Update" button to apply the changes.
                                </li>
                            </ol>
                            </p>
                            <h4>Marking a Task as Complete</h4>
                            <p>
                                Once you have finished a task, you can mark it as complete. Follow these steps:
                            <ol type="1" class="list-group">
                                <li class="list-group-item">
                                    Find the task you want to mark as complete in your task list.
                                </li>
                                <li class="list-group-item">
                                    Locate the checkbox or completion indicator next to the task.
                                </li>
                                <li class="list-group-item">
                                    Click on the checkbox or indicator to mark the task as complete.
                                </li>
                            </ol>
                            </p>
                            <h4>Deleting a Task</h4>
                            <p>
                                To remove a task from your list, follow these steps:

                            <ol type="1" class="list-group">
                                <li class="list-group-item">
                                    Locate the task you want to delete in your task list.
                                </li>
                                <li class="list-group-item">
                                    Find the delete button or icon associated with the task.
                                </li>
                                <li class="list-group-item">
                                    Click on the delete button or icon.
                                </li>
                                <li class="list-group-item">
                                    Confirm the deletion if prompted.
                                </li>
                            </ol>
                            </p>
                        </div>

                        <h3>Additional Features</h3>
                        <div class="p-4">
                            <h4>Organizing Tasks into Categories or Lists</h4>
                            <p>
                                The ToDoList web app allows you to categorize or group your tasks into lists. This feature
                                helps you
                                stay organized and manage different types of tasks separately. Follow these steps to create
                                and
                                manage task lists:
                            <ol type="1" class="list-group">
                                <li class="list-group-item">
                                    On the main dashboard, locate the "Lists" or "Categories" section.
                                </li>
                                <li class="list-group-item">
                                    Click on the "New List" or "Create Category" button.
                                </li>
                                <li class="list-group-item">
                                    Enter a name for the list/category.
                                </li>
                                <li class="list-group-item">
                                    Save the list/category.
                                </li>
                                <li class="list-group-item">
                                    To assign tasks to a specific list, create or edit a task and choose the appropriate
                                    list/category from the options provided.
                                </li>
                            </ol>
                            </p>
                            <h4>Setting Reminders and Notifications</h4>
                            <p>
                                The ToDoList web app can send reminders and notifications for upcoming tasks. Follow these steps to
                                set reminders:
                                <ol type="1" class="list-group">
                                    <li class="list-group-item">
                                        Open the task you want to set a reminder for.
                                    </li>
                                    <li class="list-group-item">
                                        Locate the reminder or notification settings.
                                    </li>
                                    <li class="list-group-item">
                                        Set the desired date and time for the reminder.
                                    </li>
                                    <li class="list-group-item">
                                        Save the task.
                                    </li>
                                    <li class="list-group-item">
                                        The app will send a reminder or notification at the specified time.
                                    </li>
                                </ol>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
