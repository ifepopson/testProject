@include("header")

<h2>Update User</h2>

<form class="form" method="POST" action="{{URL('/update')}}">
    {{ csrf_field() }}

    <input name="password" type="hidden" value="1234567890"/>
    <input name="id" type="hidden" value="{{$id}}"/>

    <!-- Name input -->
  <div class="form-outline mb-4">
    <label class="form-label" for="form2Example1">Full Name</label>
    <input type="text" id="form2Example1" class="form-control" name="name" required />
   
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <label class="form-label" for="form2Example1">Email address</label>
    <input type="email" id="form2Example1" class="form-control" name="email" required />
  
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

  <!-- Register buttons -->
  <div class="text-center">
    <p>Not a member? <a href="{{URL('/')}}">Register</a></p>
   
  </div>
</form>
