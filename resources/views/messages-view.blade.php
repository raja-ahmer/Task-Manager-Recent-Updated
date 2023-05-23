@extends('layout.main')

@section('title')
{{'| Message'}}
@endsection

@section('content')
    <div class="container">
        <h4> This is Message page.</h4>
        <p>In this page, I'll provide the database records from contact table.</p>

        {{--
            Junk Code
        <pre>
            {{print_r($contact->toArray())}}
        </pre> --}}

        <table class="table table-hover table-responsive">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Message</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Options</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contact as $item)
                    <tr>
                        <th>{{$item->contact_id}}</th>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->subject}}</td>
                        <td>{{ Str::substr($item->message, 0, 150)   }}</td>
                        <td>{{$item->created_at}}</td>
                        <td>
                            <a href="{{ route('messages.editMessage', ['id' => $item->contact_id]) }} " style="text-decoration:none" > {{--  url('message/') }} {{ $item->contact_id --}}
                                <button class="btn btn-secondary"> <i class="fas fa-edit "></i></button> &nbsp;
                            </a>
                            <a href="{{ route('messages.deleteMessage', ['id' => $item->contact_id]) }}" style="text-decoration:none"  onclick="return confirm('Are you sure you want to delete?')"> {{--  url('messages/') }}/{{ $item->contact_id --}}
                                <button id="delete" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    <script>
        // const deleteMessage = document.querySelector("delete");

        // deleteMessage.addEventListener("click", function () => {
        //     deleteMessage.confirm('Are you sure you want to delete');
        //     console.log("deleteMessage");
        // });

        // let deleteMessage = document.getElementById('delete');

        // deleteMessage.setOnClickListener(function () => {
        //     confirm('Are you sure you want to delete');
        // });

        // deleteMessage.setOnEventListener('click', confirm('Are you sure you want to delete'));
        // deleteMessage.confirm('Are you sure you want to delete');
        // console.log(deleteMessage);
    </script>
@endsection
