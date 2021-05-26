@extends('app')

@section('content')
<div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Categoriy Create</h1>
        <form action="{{ route('categories.store') }}" method="POST">
          
          @csrf

          Name:
          <br />
          <input type="text" name="name" value="" class="form-control"/>

          <br />

          <input type="submit" class="btn btn-primary" value="Save">
          <br /><br />
        </form>

      </div>
      <!-- /.col-lg-3 -->

      
    </div>
    <!-- /.row -->

  </div>
@endsection
