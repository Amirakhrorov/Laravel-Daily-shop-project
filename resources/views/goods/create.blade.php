@extends('app')

@section('content')
<div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Good Create</h1>
        
          @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

        <form action="{{ route('goods.store') }}" method="POST" enctype="multipart/form-data">
          
          @csrf

          Name:
          <br />
          <input type="text" name="name" value="{{ old('name') }}" class="form-control"/>

          <br />

          Price ($):
          <br />
          <input type="text" name="price" value="{{ old('price') }}" class="form-control"/>

          <br />

          Description:
          <br />
          <textarea name="description" class="form-control">{{ old('description') }}</textarea>

          <br />

          Category:
          <br />
          <select name="category_id" id="" class="form-control">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" @if ($category->id == old('category_id')) selected @endif>{{ $category->name }}</option>
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
