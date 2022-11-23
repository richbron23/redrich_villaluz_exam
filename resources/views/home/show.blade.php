@extends('layouts.app')
@section('title','Home Page')
@section('content')

    
    @if($access == 1)
    <table class="table table-bordered table-primary" style="text-align: center;">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Age</th>
            <th scope="col">Email</th>
            <th scope="col">Job Title</th>
            <th scope="col">Birthdate</th>
            <th scope="col">Description</th>
            <th scope="col">Actions</th>
            
        </tr>
        
        <tbody>
            @foreach ($posts as $post )
        <tr>
            <th scope="row">{{$post->id}}</th>
            <th>{{$post->firstname}}</th>
            <th>{{$post->lastname}}</th>
            <th>{{$post->age}}</th>
            <th>{{$post->email}}</th>
            <th>{{$post->job_title}}</th>
            <th>{{$post->birthdate}}</th>
            <th>{{$post->description}}</th>
            @if ($post->description == 'Super Level')
                <th></th>
            @else
            <th>
            <a href="{{ route('emp.edit', ['emp' => $post->id]) }}" class="btn btn-primary">Edit</a>
            {{-- <a href="" class="btn btn-danger">Delete</a> --}}
            <form class="d-inline" action="{{ route('emp.destroy', ['emp' => $post->id]) }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete!" class="btn btn-danger">
            </form>
            </th>
            @endif

        @endforeach
        </tr>
        </tbody>
     
    </table>
    @else
    <table class="table table-bordered table-primary" style="text-align: center;">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Age</th>
            <th scope="col">Email</th>
            <th scope="col">Job Title</th>
            <th scope="col">Birthdate</th>
            <th scope="col">Description</th>
        </tr>
        
        <tbody>
            @foreach ($posts as $post )
        <tr>
            <th scope="row">{{$post->id}}</th>
            <th>{{$post->firstname}}</th>
            <th>{{$post->lastname}}</th>
            <th>{{$post->age}}</th>
            <th>{{$post->email}}</th>
            <th>{{$post->job_title}}</th>
            <th>{{$post->birthdate}}</th>
            <th>{{$post->description}}</th>

        @endforeach
        </tr>
        </tbody>
     
    </table>
    
    @endif
    
@endsection


