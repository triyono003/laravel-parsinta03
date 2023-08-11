


@extends('layouts.main')

@section('container')
  
 <div class="container mt-5"style="width:100%;">
   <div class="row">
     <div class="col">
       
       @if(session()->has('success') )
         <div class="alert alert-success"role="alert">
           {{ session()->get('success') }}
         </div>
       @endif
       
       <div class="card">
         <div class="card-header">
           welcome to my site
         </div>
         <div class="card-body">
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum placeat consectetur fuga, facere eius distinctio dolor voluptatum accusantium porro impedit corrupti eveniet culpa doloremque aliquam iure labore in, illo fugit.</p>
         </div>
       </div>
     </div>
   </div>
 </div>
@endsection