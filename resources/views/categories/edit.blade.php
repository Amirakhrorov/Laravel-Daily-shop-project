@extends('app')

@section('content')
<div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Categoriy Edit</h1>
        <form action="{{ route('categories.update', $category->id) }}" method="POST">
          @method('PUT')
          @csrf

          Name:
          <br />
          <input type="text" name="name" value="{{ $category->name }}" class="form-control"/>

          <br />

          <input type="submit" class="btn btn-primary" value="Update">
          <br /><br />
        </form>

      </div>
      <!-- /.col-lg-3 -->

      
    </div>
    <!-- /.row -->

  </div>
@endsection
