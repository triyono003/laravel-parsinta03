
<div class="card">
  <nav class="nav p-2">
    <a class="nav-link disabled">Laravel App</a>
    <a class="nav-link " href="/">Home</a>
    <a class="nav-link" href="/about">About</a>
    <a class="nav-link" href="/contacts">Contact</a>
    <a class="nav-link" href="/profile">Profile</a>
    <a class="nav-link" href="/tasks">Tasks</a>
    <a class="nav-link me-2" href="/users">All user</a>
   
   @guest
    <a class="nav-link active me-2 " href="/auth/register">Register</a>
    <a class="nav-link active" href="/auth/login">Login</a>
   @else
 <div class="dropdown btn btn-secondary">
  <span class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
     {{ Auth::user()->name  }}
  </span>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><hr class="dropdown-divider"></li>
    <li>
      <form action="{{ route('logout') }}"method="post">
        @csrf
        <button type="submit"class="dropdown-item">logout</button>
      </form>
    </li>
  </ul>
</div>
   @endguest
  </nav>
</div>
 

