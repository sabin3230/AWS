@extends('../layouts.app')
 
@section('content')

@if(Auth::user())

    <div class="container mb-2">
        <div class="row">    
            
        @foreach($oneproduct as $prod)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$prod->title}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$prod->firstname}} {{$prod->lastname}}</h6>
                    <h5>Pages: {{$prod->pages}}</h5>
                    <h5>Price: {{$prod->price}}</h5>
                </div>
            </div>
        @endforeach
        </div>        
    </div>
    </div>
   
   <div class="container">
    <div class="row">

        <div class="col-lg-12 p-0">
                <div class="float-right">
                   
                </div>
            </div>
    </div>
   </div>
      @endif
      
@endsection