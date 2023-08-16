@extends('layouts.municipalitymaster')

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


<div class="container-fluid px-4">
    <div class="card mt-4" style="width:940px; border: 1px solid black">
        <div class="card-header">
            <h4>Admin View Posts <a href="{{url('municipalityadmin/add-adminposts')}}" 
            class="btn btn-primary btn-sm float-end"> Add Posts </h4></a>
        </div>
        <div class="card-body">

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            
            <table class="table table-bordered" style="width:900px; border: 1px solid black">
                <thead >
                    <tr >

                        <th>Job Categories</th>
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

                  {{-- BASUD admin  --}}

                  @if(Auth::user()->role_as == '13')
                   @if($item->municipality == "BASUD CAMARINES NORTE")
                  <td>{{$item->job_categories}}</td>
                  <td>{{$item->municipality}}</td>
                  <td>{{$item->title}}</td>
                  <td>{{$item->body}}</td>
                  <td>
                      <img src="/storage/cover_images/{{$item->cover_image}}" width="50px" height="50px" alt="Img"> 
                  </td>


                  <td>
                      <a href="{{url ('/municipalityadmin/adminposts-edit/'.$item->id)}}" class="btn btn-success">Edit</a>
                  </td>
                  <td>
                    <a href="{{url ('/municipalityadmin/adminposts-delete/'.$item->id)}}" class="btn btn-danger">delete</a>
                  </td>
                  </tr>
                  @endif
                  @endif

                  {{-- CAPALONGA admin  --}}

                      @if(Auth::user()->role_as == '12')
                         @if($item->municipality == "CAPALONGA CAMARINES NORTE")
                      <td>{{$item->job_categories}}</td>
                        <td>{{$item->municipality}}</td>
                        <td>{{$item->title}}</td>
                        <td>{{$item->body}}</td>
                        <td>
                            <img src="/storage/cover_images/{{$item->cover_image}}" width="50px" height="50px" alt="Img"> 
                        </td>
                      

                        <td>
                            <a href="{{url ('/municipalityadmin/adminposts-edit/'.$item->id)}}" class="btn btn-success">Edit</a>
                        </td>
                        <td>
                           <a href="{{url ('/municipalityadmin/adminposts-delete/'.$item->id)}}" class="btn btn-danger">delete</a>
                        </td>
                  </tr>
                      @endif
                    @endif

                      {{-- daet --}}

                      @if(Auth::user()->role_as == '11')
                        @if($item->municipality == "DAET CAMARINES NORTE")
                        <td>{{$item->job_categories}}</td>
                          <td>{{$item->municipality}}</td>
                          <td>{{$item->title}}</td>
                          <td>{{$item->body}}</td>
                          <td>
                              <img src="/storage/cover_images/{{$item->cover_image}}" width="50px" height="50px" alt="Img"> 
                          </td>
                        
 
                          <td>
                              <a href="{{url ('/municipalityadmin/adminposts-edit/'.$item->id)}}" class="btn btn-success">Edit</a>
                          </td>
                          <td>
                             <a href="{{url ('/municipalityadmin/adminposts-delete/'.$item->id)}}" class="btn btn-danger">delete</a>
                          </td>
                    </tr>
                        @endif
                      @endif

                      {{-- PANAGNIBAN ADMIN--}} 
                      

                      @if(Auth::user()->role_as == '10')
                      @if($item->municipality == "JOSE PANGANIBAN CAMARINES NORTE")
                      <td>{{$item->job_categories}}</td>
                        <td>{{$item->municipality}}</td>
                        <td>{{$item->title}}</td>
                        <td>{{$item->body}}</td>
                        <td>
                            <img src="/storage/cover_images/{{$item->cover_image}}" width="50px" height="50px" alt="Img"> 
                        </td>
                      

                        <td>
                            <a href="{{url ('/municipalityadmin/adminposts-edit/'.$item->id)}}" class="btn btn-success">Edit</a>
                        </td>
                        <td>
                            <a href="{{url ('/municipalityadmin/adminposts-delete/'.$item->id)}}" class="btn btn-danger">delete</a>
                          {{-- <button type="button" class="btn btn-danger deletePostBtn" value="{{$item->user_id}}">Delete</button> --}}
 
                        </td>
                  </tr>
                      @endif
                    @endif

                    {{-- LABO admin  --}}

                      @if(Auth::user()->role_as == '9')
                         @if($item->municipality == "LABO CAMARINES NORTE")
                      <td>{{$item->job_categories}}</td>
                        <td>{{$item->municipality}}</td>
                        <td>{{$item->title}}</td>
                        <td>{{$item->body}}</td>
                        <td>
                            <img src="/storage/cover_images/{{$item->cover_image}}" width="50px" height="50px" alt="Img"> 
                        </td>
                      

                        <td>
                            <a href="{{url ('/municipalityadmin/adminposts-edit/'.$item->id)}}" class="btn btn-success">Edit</a>
                        </td>
                        <td>
                           <a href="{{url ('/municipalityadmin/adminposts-delete/'.$item->id)}}" class="btn btn-danger">delete</a>
                        </td>
                  </tr>
                      @endif
                    @endif 


                     {{-- MERCEDES admin  --}}

                     @if(Auth::user()->role_as == '8')
                     @if($item->municipality == "MERCEDES CAMARINES NORTE")
                  <td>{{$item->job_categories}}</td>
                    <td>{{$item->municipality}}</td>
                    <td>{{$item->title}}</td>
                    <td>{{$item->body}}</td>
                    <td>
                        <img src="/storage/cover_images/{{$item->cover_image}}" width="50px" height="50px" alt="Img"> 
                    </td>
                  

                    <td>
                        <a href="{{url ('/municipalityadmin/adminposts-edit/'.$item->id)}}" class="btn btn-success">Edit</a>
                    </td>
                    <td>
                       <a href="{{url ('/municipalityadmin/adminposts-delete/'.$item->id)}}" class="btn btn-danger">delete</a>
                    </td>
              </tr>
                  @endif
                @endif

                    {{-- PARACALE admin  --}}

                      @if(Auth::user()->role_as == '7')
                         @if($item->municipality == "PARACALE CAMARINES NORTE")
                      <td>{{$item->job_categories}}</td>
                        <td>{{$item->municipality}}</td>
                        <td>{{$item->title}}</td>
                        <td>{{$item->body}}</td>
                        <td>
                            <img src="/storage/cover_images/{{$item->cover_image}}" width="50px" height="50px" alt="Img"> 
                        </td>
                      

                        <td>
                            <a href="{{url ('/municipalityadmin/adminposts-edit/'.$item->id)}}" class="btn btn-success">Edit</a>
                        </td>
                        <td>
                           <a href="{{url ('/municipalityadmin/adminposts-delete/'.$item->id)}}" class="btn btn-danger">delete</a>
                        </td>
                  </tr>
                      @endif
                    @endif

                   {{-- SAN LORENZO admin  --}}

                   @if(Auth::user()->role_as == '6')
                   @if($item->municipality == "SAN LORENZO RUIZ CAMARINES NORTE")
                <td>{{$item->job_categories}}</td>
                  <td>{{$item->municipality}}</td>
                  <td>{{$item->title}}</td>
                  <td>{{$item->body}}</td>
                  <td>
                      <img src="/storage/cover_images/{{$item->cover_image}}" width="50px" height="50px" alt="Img"> 
                  </td>
                

                  <td>
                      <a href="{{url ('/municipalityadmin/adminposts-edit/'.$item->id)}}" class="btn btn-success">Edit</a>
                  </td>
                  <td>
                     <a href="{{url ('/municipalityadmin/adminposts-delete/'.$item->id)}}" class="btn btn-danger">delete</a>
                  </td>
            </tr>
                @endif
              @endif

                        {{-- SAN VICENTE admin  --}}

                      @if(Auth::user()->role_as == '5')
                         @if($item->municipality == "SAN VICENTE CAMARINES NORTE")
                      <td>{{$item->job_categories}}</td>
                        <td>{{$item->municipality}}</td>
                        <td>{{$item->title}}</td>
                        <td>{{$item->body}}</td>
                        <td>
                            <img src="/storage/cover_images/{{$item->cover_image}}" width="50px" height="50px" alt="Img"> 
                        </td>
                      

                        <td>
                            <a href="{{url ('/municipalityadmin/adminposts-edit/'.$item->id)}}" class="btn btn-success">Edit</a>
                        </td>
                        <td>
                           <a href="{{url ('/municipalityadmin/adminposts-delete/'.$item->id)}}" class="btn btn-danger">delete</a>
                        </td>
                  </tr>
                      @endif
                    @endif

                   {{-- STA ELENA admin  --}}

                   @if(Auth::user()->role_as == '4')
                   @if($item->municipality == "STA ELENA CAMARINES NORTE")
                <td>{{$item->job_categories}}</td>
                  <td>{{$item->municipality}}</td>
                  <td>{{$item->title}}</td>
                  <td>{{$item->body}}</td>
                  <td>
                      <img src="/storage/cover_images/{{$item->cover_image}}" width="50px" height="50px" alt="Img"> 
                  </td>
                

                  <td>
                      <a href="{{url ('/municipalityadmin/adminposts-edit/'.$item->id)}}" class="btn btn-success">Edit</a>
                  </td>
                  <td>
                     <a href="{{url ('/municipalityadmin/adminposts-delete/'.$item->id)}}" class="btn btn-danger">delete</a>
                  </td>
            </tr>
                @endif
              @endif

               {{-- TALISAY admin  --}}

               @if(Auth::user()->role_as == '3')
               @if($item->municipality == "TALISAY CAMARINES NORTE")
            <td>{{$item->job_categories}}</td>
              <td>{{$item->municipality}}</td>
              <td>{{$item->title}}</td>
              <td>{{$item->body}}</td>
              <td>
                  <img src="/storage/cover_images/{{$item->cover_image}}" width="50px" height="50px" alt="Img"> 
              </td>
            

              <td>
                  <a href="{{url ('/municipalityadmin/adminposts-edit/'.$item->id)}}" class="btn btn-success">Edit</a>
              </td>
              <td>
                 <a href="{{url ('/municipalityadmin/adminposts-delete/'.$item->id)}}" class="btn btn-danger">delete</a>
              </td>
        </tr>
            @endif
          @endif

             {{-- vinzons admin  --}}

             @if(Auth::user()->role_as == '2')
             @if($item->municipality == "VINZONS CAMARINES NORTE")
          <td>{{$item->job_categories}}</td>
            <td>{{$item->municipality}}</td>
            <td>{{$item->title}}</td>
            <td>{{$item->body}}</td>
            <td>
                <img src="/storage/cover_images/{{$item->cover_image}}" width="50px" height="50px" alt="Img"> 
            </td>
          

            <td>
                <a href="{{url ('/municipalityadmin/adminposts-edit/'.$item->id)}}" class="btn btn-success">Edit</a>
            </td>
            <td>
               <a href="{{url ('/municipalityadmin/adminposts-delete/'.$item->id)}}" class="btn btn-danger">delete</a>
            </td>
      </tr>
          @endif
        @endif

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