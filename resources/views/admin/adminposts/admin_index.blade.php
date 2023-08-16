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
  .w3-modal-content{
    margin-left: 286px;
    width: 50%;
  }
  .modal_head{
    color: red;
  }
  

  </style>




<div class="container-fluid px-4">
    <div class="card mt-4" style="width:940px; border: 1px solid black">
        <div class="card-header">
            <h4>Admin View Posts <a href="{{url('admin/add-adminposts')}}" 
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
                        <th>Job Category</th>
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
                    <tr >
                        <td>{{$item->user_id}}</td>
                        <td>{{$item->job_categories}}</td>
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

<!-- Modal -->
                            {{-- <div class="w3-container">
                              <div id="id" class="w3-modal">
                                <div class="w3-modal-content">
                                  <header class="w3-container w3-teal"> 
                                    
                                    <span onclick="document.getElementById('id').style.display='none'" 
                                    class="w3-button w3-display-topright">&times;</span>
                                  
                                    <h2 class="modal_head">Warning!</h2>
                                  </header>
                                  <div class="w3-container">
                                    <p>Your about to delete the "{{$item->user_id}} &nbsp; {{$item->title}}" job post...</p>
                                    <p>are you sure you want to proceed?</p>
                                  </div>
                                  <footer class="w3-container w3-teal">
                                  
                                    <a href="{{url ('/admin/adminposts-delete/'.$item->id)}}" class="btn btn-danger">Yes</a>
                                    <a href="{{url ('admin/adminposts')}}" class="btn btn-success">No</a>
                                 
                                  </footer>
                                </div>
                              </div>
                            </div> --}}

                          <a href="{{url ('/admin/adminposts-delete/'.$item->id)}}" class="btn btn-danger">delete</a> 
                          {{-- <button onclick=" document.getElementById('id').style.display='block'"   class="btn btn-danger">Delete</button> --}}


                          
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                
            </table>

        </div>
        {{$post->links()}} 
    </div>
    
</div>

@endsection

{{-- @section('scripts')

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

@endsection --}}