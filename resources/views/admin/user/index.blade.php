@extends('layouts.master')

@section('content')
<style>


body{
    background-color: rgb(255, 255, 255);
    font-family: "Times New Roman", Times, serif;
}
</style>
<div class="container-fluid px-4">
    <div class="card mt-4" style="width:940px; border: 1px solid black">
        <div class="card-header">
            <h4> View Users</h4>
        </div>
        <div class="card-body">

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            
            <table class="table table-bordered" style="width:900px; border: 1px solid black">
                <thead >
                    <tr >

                        <th>ID</th>
                        <th>name</th>
                        <th>email</th>
                        <th>phone</th>
                        {{-- <th>terms</th> --}}
                        <th>Role</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody >
                    @foreach ($users as $item)
                    <tr >
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->phone}}</td>
                        {{-- <td>{{$item->terms}}</td> --}}
                        <td>
                            {{ $item->role_as == '0' ? 'Job Seeker' : ''}}
                            {{ $item->role_as == '14' ? 'Employer' : ''}}
                            {{$item->role_as == '1' ? 'Admin':''}}
                            {{ $item->role_as == '2' ? 'Vinzons Admin' : ''}}
                            {{ $item->role_as == '3' ? 'Talisay Admin' : ''}}
                            {{ $item->role_as == '4' ? 'Sta Elena Admin' : ''}}
                            {{ $item->role_as == '5' ? 'San vicente Admin' : ''}}
                            {{ $item->role_as == '6' ? 'San Lorenzo Admin' : ''}}
                            {{ $item->role_as == '7' ? 'Paracale Admin' : ''}}
                            {{ $item->role_as == '8' ? 'Mercedes Admin' : ''}}
                            {{ $item->role_as == '9' ? 'Labo Admin' : ''}}
                            {{ $item->role_as == '10' ? 'Panganiban Admin' : ''}}
                            {{ $item->role_as == '11' ? 'Daet Admin' : ''}}
                            {{ $item->role_as == '12' ? 'Capalonga Admin' : ''}}
                            {{ $item->role_as == '13' ? 'Basud Admin' : ''}}
                        </td>
                        
                        <td>
                            <a href="{{url ('admin/user/'.$item->id)}}" class="btn btn-success">Edit</a>
                        </td>
                        <td>
                            <a href="{{url('admin/delete-user/'.$item->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
 
            </table>
            
            {{$users_count->links()}} 
        </div>
    </div>

</div>

@endsection