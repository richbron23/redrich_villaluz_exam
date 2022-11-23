@extends('layouts.app')
@section('title','Home Page')
@section('content')

<form action="{{route('role.store')}}" method="POST">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Description</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="description" aria-describedby="emailHelp">
        @error('description')
        <div style="margin-top: 10px" class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    
    <button type="submit" class="btn btn-primary">Create Levels</button>
  </form>

@endsection