@extends('app')

@section('content')
    <div class="col-lg-3">

        <h1 class="my-4">Goods</h1>

        <a href="{{ route('goods.create') }}" class="btn btn-info">New Good</a>

        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th></th>
                    @foreach ($goods as $good)
                        <tr>
                            <td>{{ $good->name }}</td>
                            <td>${{ $good->price }}</td>
                            <td>
                              
                              <a class="btn btn-primary" href="{{ route('goods.edit', $good->id) }}">Edit</a>
                              
                              <form action="{{ route('goods.destroy', $good->id) }}" method="POST" style="display: inline">
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
