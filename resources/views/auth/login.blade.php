@extends('layouts.main')

@section('container')
 
 <div class="d-flex justify-content-center align-items-center"style="min-height:100vh;">
 <div id="container"style="width:80%;">
  <div class="row">
    <div class="col md-5">
      <div class="card">
        <div class="card-header">Login account</div>
        <div class="card-body">
          <form action="/auth/login" method="post">
            @csrf
            <div class="mb-4">
             <label for="email" class="form-label">Email</label>
                <input type="email" name="email" value="{{ old('email') }}"id="email" class="form-control @error('email') is-invalid @enderror">
             @error('email')
              <div class="text-danger">
                  {{ $message }}
              </div>    
             @enderror
            </div><!--mb-4-->

            <div class="mb-4">
             <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror">
             @error('password')
              <div class="text-danger">
                  {{ $message }}
              </div>    
             @enderror
            </div><!--mb-4-->
            <button type="submit" class="btn btn-primary">Login</button>
          </form>
        </div>
      </div>
    </div>
  </div>
 </div>
</div><!--d-flex-->
  
@endsection