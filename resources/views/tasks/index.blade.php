

@extends('layouts.main')

@section('container')
  <br>
 <div class="card">
 <div class="card-header text-primary">
  <h2> Create new tasks</h2>
 </div>
 <br>

   @foreach($errors->all() as $error)
   <div class="alert alert-danger">
     {{ $error }}
   </div>
   @endforeach
 
 <form action=""method="post"class="d-flex">
  <div class="input-group mb-3">
    @csrf
  <input type="text" class="form-control @error('list') is-invalid @enderror" placeholder="the name of the task" aria-label="Recipient's username" aria-describedby="button-addon2"name="list">
  
 
  
  <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Button</button>
  </div>
 </form>
 
 <br>
 
 <div class="list-group">
  @foreach($tasks as $index=>$task)
  <li class="list-group-item d-flex justify-content-between align-items-center">{{ $index +1 }}. {{$task->list }} {{ $task->mark }}
    
  <div class="d-flex">
  <a class="btn btn-primary me-2" href="/tasks/{{$task->id}}/edit">edit </a> 
  <form action="/tasks/{{ $task->id }}"method="post">
      @method("delete")
      @csrf
  <button class="btn btn-primary btn-danger"type="submit">delete</button>
    </form>
  </div>
</li>
  @endforeach
</div>
</div> <!--card-->
   
@endsection