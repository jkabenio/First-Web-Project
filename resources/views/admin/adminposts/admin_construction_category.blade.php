@extends('layouts.master')

@section('content')
<style>
  td{
    max-width: 100px;
 overflow: hidden;
 text-overflow: ellipsis;
 white-space: nowrap;
 text-align: center;

  }


  </style>

<!-- Modal -->
  
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">delete Post</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <input type="text" name="post_delete_id" id="post_delete_id">
         <h5>Are you sure to delete this post. ?</h5>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

<div class="container-fluid px-4">
    <div class="card mt-4" style="width:940px; border: 1px solid black">
        <div class="card-header">
            <h4><b>CONSTRUCTION SERVICES</b><a href="{{url('admin/add-adminposts')}}" 
            class="btn btn-primary btn-sm float-end"> Add Posts </h4></a>
        </div>
        <div class="card-body">

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            
            <table class="table table-bordered" style="width:900px; border: 1px solid black">
                <thead >
                    <tr >

                        <th>ID</th>
                        <th>Municipality</th>
                        <th>Title</th>
                        <th>Body</th>
                        <th>Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody >
                    @foreach ($post as $item)
                    <tr>
                        @if($item->job_categories == "CONSTRUCTION SERVICES")
                            <td>{{$item->user_id}}</td>
                            <td>{{$item->municipality}}</td>
                            <td>{{$item->title}}</td>
                            <td class="job_descriptions">{{$item->body}}</td>
                            <td>
                                <img src="/storage/cover_images/{{$item->cover_image}}" width="50px" height="50px" alt="Img"> 
                            </td>
                       

                            <td>
                                <a href="{{url ('/admin/adminposts-edit/'.$item->id)}}" class="btn btn-success">Edit</a>
                            </td>
                            <td>
                            {{--  <a href="{{url ('/admin/adminposts-delete/'.$item->id)}}" class="btn btn-danger">delete</a> --}}
                            <button type="button" class="btn btn-danger deletePostBtn" value="{{$item->user_id}}">Delete</button>

                            </td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>

            </table>

        </div>
    </div>

</div>

@endsection

@section('scripts')

    <script>

       $(document).ready(function () {
            $('.deletePostBtn').click(function (e){
                e.preventDefault();
                
              var post_id = $(this).val();
              $('#post_id').val(post_id);

              $('#deleteModal').modal('show');

            });
       });
    </script>

@endsection