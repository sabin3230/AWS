@extends('../layouts.app')
 
@section('content')

@if(Auth::user())

    <div class="container mb-2">
        <div class="row">
        <div class="col-lg-12 p-0">
                <div class="float-right">
                    <a class="btn btn-primary" href="{{ route('products.create') }}"><i class="fa fa-plus"></i> Create Product</a>
                </div>
            </div>
            
        </div>
    </div>
   
   <div class="container">
    <div class="row">
        <table class="table table-bordered ">
            <tr>
            <thead>
                <th>No</th>
                <th>Type</th>
                <th>Title</th>
                <th>Name</th>
                <th>Price</th>
                <th>Pages/Playlength</th>
                <th width="250px">Action</th>
            </thead>
            </tr>
            @foreach ($products as $product)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $product->type }}</td>
                <td>{{ $product->title }}</td>
                <td>{{ $product->firstname }}&nbsp;{{$product->lastname}}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->pages }}</td>
                

                <td>
                    <form action="{{ route('products.destroy',$product->id) }}" method="POST">
    
                        <a class="btn btn-info" href="{{ route('products.show',$product->id) }}"><i class="fa fa-eye"></i></a>
        
                        <a class="btn btn-success" href="{{ route('products.edit',$product->id) }}"><i class="fa fa-pencil"></i></a>
    
                        @csrf
                        @method('DELETE')
        
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        
    </div>
   </div>
   
    {!! $products->links() !!}

  
      @endif
      
@endsection