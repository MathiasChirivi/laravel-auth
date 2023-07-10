@extends('layouts.admin')

@section('content')

<div class="row g-4">
    <div class="col">
        <form action="{{ route('admin.projects.store') }}" class="needs-validation" method="post">
            @csrf
        
            <label for="name">title </label>
            <input class="form-control" type="text" name="title">

            <label for="name">description</label>
            <textarea class="form-control" type="text" name="description" cols="30" rows="4"></textarea>

            <label for="name">repository</label>
            <input class="form-control" type="text" name="repository">

            <input class="form-control mt-4 btn btn-primary" type="submit" value="Invia">
         </form>
    </div>
</div>

@endsection