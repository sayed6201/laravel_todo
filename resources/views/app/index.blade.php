@extends('layouts.master')

@section('content')


    <div class="container">

        <div class="row">

            <div class="col-sm-3 ">
                @include('app.menu')
            </div>

            <div class="col-sm-4 ">

                @if(count($tasks))

                    @foreach($tasks as $task)

                            <div class="card hoverable m-sm-2 p-sm-2">

                                <h4 class="d-inline">{{$task->task}}</h4>
                                <div class="row">
                                    <div class="col-md-3">
                                        <a href="/edit/{{$task->id}}"><span class="badge cyan">View</span></a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="/delete/{{$task->id}}"><span class="badge red">Delete</span></a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="/complete/{{$task->id}}"><span class="badge indigo">Completed</span></a>
                                    </div>
                                </div>
                            </div>

                    @endforeach

                @else
                    <div class="card hoverable p-sm-3">
                        <h4 class="text-center">No Tasks</h4>
                    </div>
                @endif








            </div>
            <div class="col-sm-4 ">
                @include('app.edit')
            </div>


        </div>

    </div>



    @include('app.addtask')
    @include('app.completed')

    @endsection