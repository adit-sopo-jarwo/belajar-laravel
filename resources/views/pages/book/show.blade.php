@extends('layouts.app')

@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Detail Book</h1>
    </div>
    <hr>
        <div class="row">
        <div class="col mb-3">
             <label class="form-label">Book Name</label> 
            <input type="text" name="name" class="form-control" placeholder="Book Name" value="{{ $book->name }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Author</label>
            <input type="text" name="author" class="form-control" placeholder="Author" value="{{ $book->author }}"  readonly>
        </div>
        </div>
        <div class="row">
        <div class="col mb-3">
            <label class="form-label">Year</label>
            <input type="text" name="year" class="form-control" placeholder="Year" value="{{ $book->year }}"  readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Description</label>
            <textarea  name="description" class="form-control" placeholder="Description" readonly>{{ $book->description }} </textarea>
        </div>
        </div>
        <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $book->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $book->updated_at }}"  readonly>
        </div>
        </div>

@endsection