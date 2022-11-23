@extends('layouts.app')
@section('title','Edit Page')
@section('content')
<form action="{{route('emp.update', ['emp'=> $post->id]) }}" method="POST">
    @csrf
    
    @method('PUT')
    <center>EDIT EMPLOYEE</center>
    <div class="form-group">
      <label for="exampleInputEmail1">First Name</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="firstname" value="{{ old('firstname', optional($post ?? null)->firstname) }}" aria-describedby="emailHelp">
        @error('firstname')
        <div style="margin-top: 10px" class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Last Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="lastname" value="{{ old('lastname', optional($post ?? null)->lastname) }}" aria-describedby="emailHelp">
          @error('lastname')
          <div style="margin-top: 10px" class="alert alert-danger">{{ $message }}</div>
          @enderror
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Age</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="age" value="{{ old('age', optional($post ?? null)->age) }}" aria-describedby="emailHelp">
          @error('age')
          <div style="margin-top: 10px" class="alert alert-danger">{{ $message }}</div>
          @enderror
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Birthdate</label>
        <input type="date" class="form-control" id="exampleInputEmail1" name="birthdate" value="{{ old('birthdate', optional($post ?? null)->birthdate) }}" aria-describedby="emailHelp">
          @error('birthdate')
          <div style="margin-top: 10px" class="alert alert-danger">{{ $message }}</div>
          @enderror
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Job Title</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="job_title" value="{{ old('job_title', optional($post ?? null)->job_title) }}" aria-describedby="emailHelp">
          @error('job_title')
          <div style="margin-top: 10px" class="alert alert-danger">{{ $message }}</div>
          @enderror
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="email" value="{{ old('email', optional($post ?? null)->email) }}" aria-describedby="emailHelp">
          @error('email')
          <div style="margin-top: 10px" class="alert alert-danger">{{ $message }}</div>
          @enderror
      </div>
    
    <button type="submit" class="btn btn-primary">Update</button>
  </form>

@endsection

