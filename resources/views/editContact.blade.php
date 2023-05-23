@extends('layout.main')

@section('title')
{{'| Edit Contact'}}
@endsection

@section('content')
    <div class="container">
        <h4 class="mt-5"> This is update contact page.</h4>
        <p>Edit your queries here and press send button to send.</p>


            <form method="post" action="{{ $url }}">
                @csrf

                <div class="mt-4 mb-4 card p-3 bg-white">
                    <h3 class="text-center text-primary">{{$title}}</h3>
                </div>

                <div class="form-row">

                    <div class="form-group col-md-3">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Your Name Here..." value="{{ $contact->name }}" required>
                        <span class="text-danger">
                            @error('name')
                                {{$message}}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email Here..." value="{{ $contact->email }}" required>
                        <span class="text-danger">
                            @error('email')
                                {{$message}}
                            @enderror
                        </span>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="subject">Subject</label>
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Enter Subject Here..." value="{{ $contact->subject }}" required>
                        <span class="text-danger">
                            @error('subject')
                                {{$message}}
                            @enderror
                        </span>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="message">Message</label>
                        <textarea class="form-control" name="message" id="message" placeholder="Enter Your Message Here..."  required> {{ $contact->message }} </textarea>
                        <span class="text-danger">
                            @error('message')
                                {{$message}}
                            @enderror
                        </span>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary col-md-1">Update</button>
            </form> <br>


    </div>

@endsection
