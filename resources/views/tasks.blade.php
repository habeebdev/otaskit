@extends('layouts.app')
@section('content')

<section>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <td>Title</td>
                        <td>Description</td>
                        <td>Assigned</td>
                        <td>Status</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    @if($tasks)
                    @foreach($tasks as $task)
                    <tr>
                        <td>{{$task->title}}</td>
                        <td>{{$task->description}}</td>
                        <td>
                            @if($task->users)
                            @foreach($task->users as $user)
                            {{$user->name}}
                            @endforeach
                            @endif
                        </td>
                        <td>{{$task->status && $task->status==1 ? 'Unassigned' : ($task->status==2 ? 'Assigned' : ($task->status==3 ? 'Done' : ''))}}</td>
                        <td><a href="/task/edit/{{$task->id}}" class="btn btn-primary btn-sm">Edit</a></td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>

            </table>
        </div>
       
    </div>
    @endsection