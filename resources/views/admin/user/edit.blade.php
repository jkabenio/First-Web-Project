@extends('layouts.master')

@section('content')
<style>
h4{
    font-family: "Times New Roman", Times, serif;
}

    
</style>
<div class="container-fluid px-4">
    <div class="card mt-4" style="width:940px; border: 1px solid black">
        <div class="card-header">
            <h4> <b> Edit User </b>
                <a href="{{url('admin/users')}}" class="btn btn-danger float-end">BACK</a>
            </h4>
        </div>
        <div class="card-body">

            <div class="mb-3">
                <label>Full Name</label>
                <p class="form-control">
                {{ $user->name ?? 'None'}}</p>
             </div>
               
             <div class="mb-3">
                <label>Email</label>
                <p class="form-control">
                {{ $user->email ?? 'None' }}</p>
            </div>
            
            <div class="mb-3">
                <label>Created At</label>
                <p class="form-control">
                {{ $user->created_at ?? 'None'  }}</p>
            </div>
 
            <form action="{{ url('admin/update-user/'.$user->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label>Role as</label>
                    <select name="role_as" class="form-control">
                        <option value="13" {{ $user->role_as == '13' ? 'selected' : '' }}>Basud Admin</option>
                        <option value="12" {{ $user->role_as == '12' ? 'selected' : '' }}>Capalonga Admin</option>
                        <option value="11" {{ $user->role_as == '11' ? 'selected' : '' }}>Daet Admin</option>
                        <option value="10" {{ $user->role_as == '10' ? 'selected' : '' }}>panganiban Admin</option>
                        <option value="9" {{ $user->role_as == '9' ? 'selected' : '' }}>Labo Admin</option>
                        <option value="8" {{ $user->role_as == '8' ? 'selected' : '' }}>Mercedes Admin</option>
                        <option value="7" {{ $user->role_as == '7' ? 'selected' : '' }}>Paracale Admin</option>
                        <option value="6" {{ $user->role_as == '6' ? 'selected' : '' }}>San Lorenzo Admin</option>
                        <option value="5" {{ $user->role_as == '5' ? 'selected' : '' }}>San vicente Admin</option>
                        <option value="4" {{ $user->role_as == '4' ? 'selected' : '' }}>Sta Elena Admin</option>
                        <option value="3" {{ $user->role_as == '3' ? 'selected' : '' }}>Talisay Admin</option>
                        <option value="2" {{ $user->role_as == '2' ? 'selected' : '' }}>Vinzons Admin</option>
                        <option value="1" {{ $user->role_as == '1' ? 'selected' : '' }}>Admin</option>
                        <option value="14" {{ $user->role_as == '14' ? 'selected' : '' }}>Employer</option>
                        <option value="0" {{ $user->role_as == '0' ? 'selected' : '' }}>Job Seeker</option>  
                    </select>
 
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Update User Role</button>
                </div>
            </form>

        </div>
    </div>
</div>

@endsection