@include("header")


@if ($isAdmin)
    
<a class="btn btn-primary btn-block mt-4" href="{{URL('/create')}}">Add New User</a>
@endif

<div class="table-responsive">
<table class="table table-bordered">

    <thead>
    <tr>
        <th> id </th>
        <th> Name </th>
        <th> role </th>
        <th> created </th>
        <th> Delete </th>
        <th> Update </th>
    </tr>
    </thead>
    <tbody>
        @foreach ( $users as $user)
        <tr>
            <th scope="row"> {{ $user->id}}</th>
            <td>{{ $user->name}}</td>
            <td>{{ $user->role}}</td>
            <td>{{ $user->created_at}}</td>
            <td><a href="{{ URL('/delete/')}}/{{$user->id}}">Delete</a></td>
            <td><a href="{{ URL('/update/')}}/{{$user->id}}">Update</a></td>
          </tr>
        @endforeach
    </tbody>

</table>

</div>