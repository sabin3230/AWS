@extends('../layouts/app')
   
@section('content')
    
   
   
    @if(Auth::user())
    <div class="container">
    
    <div class="row">
    <div class="col-sm-4">
            <div class="card">
            <div class="card-header"><strong>Edit</strong></div>
            <div class="card-body">
               
                <p class="card-text">
                    <form action="{{ route('products.update',$product->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-row">
                            <input type="text" class="form-control mb-2 " value="{{$product->type}}" name="type" placeholder="Type">
                            
                            <input type="text" class="form-control mb-2" value="{{$product->title}}" name="title" placeholder="Title">
                            
                            <input type="text" class="form-control mb-2" value="{{$product->firstname}}" name="firstname" placeholder="First Name">
                            
                            <input type="text" class="form-control mb-2" value="{{$product->lastname}}" name="lastname" placeholder="Last Name">
                            
                            <input type="text" class="form-control mb-2" value="{{$product->price}}" name="price" placeholder="Price">
                            
                            <input type="text" class="form-control mb-2" value="{{$product->pages}}" name="pages" placeholder="Pages/PlayLength">
                        </div>
                        <button type="submit" class="btn btn-success float-right">UPDATE</button>
                    
                        
                        
                    </form>
                </p>
                
            </div>
            </div>
        </div>
    </div>
</div>
   @endif
  
@endsection


