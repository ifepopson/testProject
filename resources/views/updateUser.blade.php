@include("header")


@if ($isAdmin)
    
<a class="btn btn-primary btn-block mt-4" href="{{URL('/create')}}">Add New User</a>
@endif
<h2>Update User</h2>

@if(isset($errors))
@foreach($errors->all() as $error)
<div  align="center"  class="alert alert-danger center" id="error-notification">
   <p>{{ $error }}</p>
</div>
@endforeach
@endif

<form class="form" method="POST" action="{{URL('/update')}}">
    {{ csrf_field() }}

    <input name="password" type="hidden" value="1234567890"/>
    <input name="id" type="hidden" value="{{$id}}"/>

    <!-- Name input -->
  <div class="form-outline mb-4">
    <label class="form-label" for="form2Example1">Full Name</label>
    <input type="text" id="form2Example1" class="form-control" name="name" value="{{ $user->name}}" required />
   
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <label class="form-label" for="form2Example1">Email address</label>
    <input type="email" id="form2Example1" class="form-control" name="email" value="{{ $user->email}}" required />
  
  </div>

  <div class="form-outline mb-4 mb-8">
    <label class="form-label" for="form2Example2">Role</label>
    <select class="form-control" name="role">
        <option value="user">User</option>
        <option value="admin">Admin</option>
    </select>
   
  </div>


  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mt-4">Update User</button>

</form>
