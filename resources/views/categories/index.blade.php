@extends('app')

@section('content')
    <div class="col-lg-3">

        <h1 class="my-4">Categories</h1>

        <a href="{{ route('categories.create') }}" class="btn btn-info">New Category</a>

        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th></th>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->name }}</td>
                            <td>
                              
                              <a class="btn btn-primary" href="{{ route('categories.edit', $category->id) }}">Edit</a>
                              
                              <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display: inline">
                                @method('DELETE')
                                @csrf
                                <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure you?')">
                              </form>
                            
                            </td>
                        </tr>
                    @endforeach
                </tr>
            </thead>
        </table>

      </div>
      <!-- /.col-lg-3 -->
@endsection
