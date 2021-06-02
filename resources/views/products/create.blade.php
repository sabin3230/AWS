@extends('../layouts.app')
  
@section('content')

   
@if(Auth::user())
  <div class="container">
    <div class="row">
    <div class="col-sm-4">
                <div class="card">
                <div class="card-header"><strong>Create</strong></div>
                    <div class="card-body">
                       
                        <p class="card-text">
                            <form action="{{ route('products.store') }}" method="post">
                            @csrf
                                <div class="form-group">
                                    <label for="product"><strong>Type:</strong></label>
                                    <select name="type" id="product">
                                    <option value="book">Book</option>
                                    <option value="cd">CD</option>
                                    <option value="cd">Game</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <input type="text" class="form-control" name="title" placeholder="Title" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="firstname" placeholder="FirstName(optional)">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="lastname" placeholder="surname/band" required>
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control" name="price" placeholder="Price" required>
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control" name="pages" placeholder="Pages/Playlength/PGeI" required>
                                </div>
                                
                                
                                <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                        </p>
                        
                    </div>
                </div>
            </div>
        </div>
  </div>
  @endif
  
@endsection