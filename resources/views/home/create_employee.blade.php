@extends('layouts.app')
@section('title','Edit Page')
@section('content')
<form action="{{route('emp.store') }}" method="POST">
    @csrf
    
    <center>Create Employee </center>
    <div class="form-group">
      <label for="exampleInputEmail1">First Name</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="firstname" value="{{ old('firstname') }}" aria-describedby="emailHelp">
        @error('firstname')
        <div style="margin-top: 10px" class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Last Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="lastname" value="{{ old('lastname')}}" aria-describedby="emailHelp">
          @error('lastname')
          <div style="margin-top: 10px" class="alert alert-danger">{{ $message }}</div>
          @enderror
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Age</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="age" value="{{ old('age') }}" aria-describedby="emailHelp">
          @error('age')
          <div style="margin-top: 10px" class="alert alert-danger">{{ $message }}</div>
          @enderror
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Birthdate</label>
        <input type="date" class="form-control" id="exampleInputEmail1" name="birthdate" value="{{ old('birthdate') }}" aria-describedby="emailHelp">
          @error('birthdate')
          <div style="margin-top: 10px" class="alert alert-danger">{{ $message }}</div>
          @enderror
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Job Title</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="job_title" value="{{ old('job_title') }}" aria-describedby="emailHelp">
          @error('job_title')
          <div style="margin-top: 10px" class="alert alert-danger">{{ $message }}</div>
          @enderror
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Access Level Description</label>
        <select class="form-control" {{ $errors->has('access_level_id') ? ' is-invalid': '' }}" value="{{ old('access_level_id') }}" name="access_level_id">
            <option value="">Select Access of Level</option>
            @foreach($posts as $post)
            <option value="{{ $post->access_level_id }}">{{ $post->description}}</option>
             @endforeach 
        </select>
        @error('access_level_id')
        <div style="margin-top: 10px" class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="email" value="{{ old('email') }}" aria-describedby="emailHelp">
          @error('email')
          <div style="margin-top: 10px" class="alert alert-danger">{{ $message }}</div>
          @enderror
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Password</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="password" value="{{ old('password') }}" aria-describedby="emailHelp">
          @error('password')
          <div style="margin-top: 10px" class="alert alert-danger">{{ $message }}</div>
          @enderror
      </div>
    
    <button type="submit" class="btn btn-primary">Create</button>
  </form>

@endsection