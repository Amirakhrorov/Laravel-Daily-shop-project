@extends('app')

@section('content')
<div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Good Edit</h1>
        <form action="{{ route('goods.update', $good->id) }}" method="POST" enctype="multipart/form-data">
          @method('PUT')
          @csrf

          Name:
          <br />
          <input type="text" name="name" value="{{ $good->name }}" class="form-control"/>

          <br />

          Price ($):
          <br />
          <input type="text" name="price" value="{{ $good->price }}" class="form-control"/>

          <br />

          Description:
          <br />
          <textarea name="description" class="form-control">{{ $good->description }}</textarea>

          <br />

          Category:
          <br />
          <select name="category_id" id="" class="form-control">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" @if ($category->id == $good->category->id) selected @endif>{{ $category->name }}</option>
            @endforeach
          </select>
          <br />

          Photo:
          <br />
          <input type="file" name="photo"/>

          <br /><br />

          <input type="submit" class="btn btn-primary" value="Save">
          <br /><br />
        </form>

      </div>
      <!-- /.col-lg-3 -->

      
    </div>
    <!-- /.row -->

  </div>
@endsection
