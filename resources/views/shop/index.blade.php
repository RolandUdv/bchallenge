@extends('layouts.app')

@section('content')
    <div class = "jumbotron text-center">
    <h1>Welcome to the Golf shop!</h1>
    <p>This is the Golf Shop first page</p>
    </div>


    <div class = 'row'>

        <div class="col-xs-18 col-sm-6 col-md-3">
           <div class="img-thumbnail">
             <img src="http://placehold.it/250x300" alt="">
               <div class="caption">
                 <h4>Thumbnail label</h4>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit</p>

                 <div class = 'clearfix'>

                    <div class = 'pull-left price'>£10</div>
                    <a href="#" class="btn btn-info btn-xs" role="button">Add to cart</a>
                 </div>
             </div>
           </div>
        </div>

    </div>
@endsection
