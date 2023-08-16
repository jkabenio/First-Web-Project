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
            <h4><b>MANUFACTURING SERVICES</b><a href="{{url('municipalityadmin/add-adminposts')}}" 
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
                      {{-- VINZONS --}}
                      @if(Auth::user()->role_as == '2')
                      @if( $item->municipality == "VINZONS CAMARINES NORTE" ) 
                        @if($item->job_categories == "MANUFACTURING")
                            <td>{{$item->user_id}}</td>
                            <td>{{$item->municipality}}</td>
                            <td>{{$item->title}}</td>
                            <td class="job_descriptions">{{$item->body}}</td>
                            <td>
                                <img src="/storage/cover_images/{{$item->cover_image}}" width="50px" height="50px" alt="Img"> 
                            </td>
                      

                            <td>
                                <a href="{{url ('/municipalityadmin/adminposts-edit/'.$item->id)}}" class="btn btn-success">Edit</a>
                            </td>
                            <td>
                            <a href="{{url ('/municipalityadmin/adminposts-delete/'.$item->id)}}" class="btn btn-danger">delete</a>

                            </td>
                        @endif
                      @endif
                   @endif

                      {{-- TALISAY --}}
                      @if(Auth::user()->role_as == '3')
                      @if( $item->municipality == "TALISAY CAMARINES NORTE" ) 
                        @if($item->job_categories == "MANUFACTURING")
                            <td>{{$item->user_id}}</td>
                            <td>{{$item->municipality}}</td>
                            <td>{{$item->title}}</td>
                            <td class="job_descriptions">{{$item->body}}</td>
                            <td>
                                <img src="/storage/cover_images/{{$item->cover_image}}" width="50px" height="50px" alt="Img"> 
                            </td>
                      

                            <td>
                                <a href="{{url ('/municipalityadmin/adminposts-edit/'.$item->id)}}" class="btn btn-success">Edit</a>
                            </td>
                            <td>
                            <a href="{{url ('/municipalityadmin/adminposts-delete/'.$item->id)}}" class="btn btn-danger">delete</a>

                            </td>
                        @endif
                      @endif
                   @endif

                      {{-- STA ELENA --}}
                      @if(Auth::user()->role_as == '4')
                      @if( $item->municipality == "STA ELENA CAMARINES NORTE" ) 
                        @if($item->job_categories == "MANUFACTURING")
                            <td>{{$item->user_id}}</td>
                            <td>{{$item->municipality}}</td>
                            <td>{{$item->title}}</td>
                            <td class="job_descriptions">{{$item->body}}</td>
                            <td>
                                <img src="/storage/cover_images/{{$item->cover_image}}" width="50px" height="50px" alt="Img"> 
                            </td>
                      

                            <td>
                                <a href="{{url ('/municipalityadmin/adminposts-edit/'.$item->id)}}" class="btn btn-success">Edit</a>
                            </td>
                            <td>
                            <a href="{{url ('/municipalityadmin/adminposts-delete/'.$item->id)}}" class="btn btn-danger">delete</a>

                            </td>
                        @endif
                      @endif
                   @endif

                      {{-- SAN VICENTE --}}
                      @if(Auth::user()->role_as == '5')
                      @if( $item->municipality == "SAN VICENTE CAMARINES NORTE" ) 
                        @if($item->job_categories == "MANUFACTURING")
                            <td>{{$item->user_id}}</td>
                            <td>{{$item->municipality}}</td>
                            <td>{{$item->title}}</td>
                            <td class="job_descriptions">{{$item->body}}</td>
                            <td>
                                <img src="/storage/cover_images/{{$item->cover_image}}" width="50px" height="50px" alt="Img"> 
                            </td>
                      

                            <td>
                                <a href="{{url ('/municipalityadmin/adminposts-edit/'.$item->id)}}" class="btn btn-success">Edit</a>
                            </td>
                            <td>
                            <a href="{{url ('/municipalityadmin/adminposts-delete/'.$item->id)}}" class="btn btn-danger">delete</a>

                            </td>
                        @endif
                      @endif
                   @endif

                      {{-- SAN LORENZO --}}
                      @if(Auth::user()->role_as == '6')
                      @if( $item->municipality == "SAN LORENZO RUIZ CAMARINES NORTE" ) 
                        @if($item->job_categories == "MANUFACTURING")
                            <td>{{$item->user_id}}</td>
                            <td>{{$item->municipality}}</td>
                            <td>{{$item->title}}</td>
                            <td class="job_descriptions">{{$item->body}}</td>
                            <td>
                                <img src="/storage/cover_images/{{$item->cover_image}}" width="50px" height="50px" alt="Img"> 
                            </td>
                      

                            <td>
                                <a href="{{url ('/municipalityadmin/adminposts-edit/'.$item->id)}}" class="btn btn-success">Edit</a>
                            </td>
                            <td>
                            <a href="{{url ('/municipalityadmin/adminposts-delete/'.$item->id)}}" class="btn btn-danger">delete</a>

                            </td>
                        @endif
                      @endif
                   @endif

                      {{-- PARACALE --}}
                      @if(Auth::user()->role_as == '7')
                      @if( $item->municipality == "PARACALE CAMARINES NORTE" ) 
                        @if($item->job_categories == "MANUFACTURING")
                            <td>{{$item->user_id}}</td>
                            <td>{{$item->municipality}}</td>
                            <td>{{$item->title}}</td>
                            <td class="job_descriptions">{{$item->body}}</td>
                            <td>
                                <img src="/storage/cover_images/{{$item->cover_image}}" width="50px" height="50px" alt="Img"> 
                            </td>
                      

                            <td>
                                <a href="{{url ('/municipalityadmin/adminposts-edit/'.$item->id)}}" class="btn btn-success">Edit</a>
                            </td>
                            <td>
                            <a href="{{url ('/municipalityadmin/adminposts-delete/'.$item->id)}}" class="btn btn-danger">delete</a>

                            </td>
                        @endif
                      @endif
                   @endif

                      {{-- MERCEDES --}}
                      @if(Auth::user()->role_as == '8')
                      @if( $item->municipality == "MERCEDES CAMARINES NORTE" ) 
                        @if($item->job_categories == "MANUFACTURING")
                            <td>{{$item->user_id}}</td>
                            <td>{{$item->municipality}}</td>
                            <td>{{$item->title}}</td>
                            <td class="job_descriptions">{{$item->body}}</td>
                            <td>
                                <img src="/storage/cover_images/{{$item->cover_image}}" width="50px" height="50px" alt="Img"> 
                            </td>
                      

                            <td>
                                <a href="{{url ('/municipalityadmin/adminposts-edit/'.$item->id)}}" class="btn btn-success">Edit</a>
                            </td>
                            <td>
                            <a href="{{url ('/municipalityadmin/adminposts-delete/'.$item->id)}}" class="btn btn-danger">delete</a>

                            </td>
                        @endif
                      @endif
                   @endif

                      {{-- LABO --}}
                      @if(Auth::user()->role_as == '9')
                      @if( $item->municipality == "LABO CAMARINES NORTE" ) 
                        @if($item->job_categories == "MANUFACTURING")
                            <td>{{$item->user_id}}</td>
                            <td>{{$item->municipality}}</td>
                            <td>{{$item->title}}</td>
                            <td class="job_descriptions">{{$item->body}}</td>
                            <td>
                                <img src="/storage/cover_images/{{$item->cover_image}}" width="50px" height="50px" alt="Img"> 
                            </td>
                      

                            <td>
                                <a href="{{url ('/municipalityadmin/adminposts-edit/'.$item->id)}}" class="btn btn-success">Edit</a>
                            </td>
                            <td>
                            <a href="{{url ('/municipalityadmin/adminposts-delete/'.$item->id)}}" class="btn btn-danger">delete</a>

                            </td>
                        @endif
                      @endif
                   @endif

                      {{-- PANGANIBAN --}}
                      @if(Auth::user()->role_as == '10')
                      @if( $item->municipality == "JOSE PANGANIBAN CAMARINES NORTE" ) 
                        @if($item->job_categories == "MANUFACTURING")
                            <td>{{$item->user_id}}</td>
                            <td>{{$item->municipality}}</td>
                            <td>{{$item->title}}</td>
                            <td class="job_descriptions">{{$item->body}}</td>
                            <td>
                                <img src="/storage/cover_images/{{$item->cover_image}}" width="50px" height="50px" alt="Img"> 
                            </td>
                      

                            <td>
                                <a href="{{url ('/municipalityadmin/adminposts-edit/'.$item->id)}}" class="btn btn-success">Edit</a>
                            </td>
                            <td>
                            <a href="{{url ('/municipalityadmin/adminposts-delete/'.$item->id)}}" class="btn btn-danger">delete</a>

                            </td>
                        @endif
                      @endif
                   @endif

                     {{-- DAET --}}
                      @if(Auth::user()->role_as == '11')
                        @if( $item->municipality == "DAET CAMARINES NORTE" ) 
                          @if($item->job_categories == "MANUFACTURING")
                              <td>{{$item->user_id}}</td>
                              <td>{{$item->municipality}}</td>
                              <td>{{$item->title}}</td>
                              <td class="job_descriptions">{{$item->body}}</td>
                              <td>
                                  <img src="/storage/cover_images/{{$item->cover_image}}" width="50px" height="50px" alt="Img"> 
                              </td>
                        
 
                              <td>
                                  <a href="{{url ('/municipalityadmin/adminposts-edit/'.$item->id)}}" class="btn btn-success">Edit</a>
                              </td>
                              <td>
                              <a href="{{url ('/municipalityadmin/adminposts-delete/'.$item->id)}}" class="btn btn-danger">delete</a>

                              </td>
                          @endif
                        @endif
                     @endif

                     {{-- capalonga --}}
                      @if(Auth::user()->role_as == '12')
                        @if( $item->municipality == "CAPALONGA CAMARINES NORTE" ) 
                          @if($item->job_categories == "MANUFACTURING")
                              <td>{{$item->user_id}}</td>
                              <td>{{$item->municipality}}</td>
                              <td>{{$item->title}}</td>
                              <td class="job_descriptions">{{$item->body}}</td>
                              <td>
                                  <img src="/storage/cover_images/{{$item->cover_image}}" width="50px" height="50px" alt="Img"> 
                              </td>
                        

                              <td>
                                <a href="{{url ('/municipalityadmin/adminposts-edit/'.$item->id)}}" class="btn btn-success">Edit</a>
                            </td>
                            <td>
                            <a href="{{url ('/municipalityadmin/adminposts-delete/'.$item->id)}}" class="btn btn-danger">delete</a>

                            </td>
                          @endif
                        @endif
                     @endif


                     {{-- basud --}}
                     @if(Auth::user()->role_as == '13')
                     @if( $item->municipality == "BASUD CAMARINES NORTE" ) 
                       @if($item->job_categories == "MANUFACTURING")
                           <td>{{$item->user_id}}</td>
                           <td>{{$item->municipality}}</td>
                           <td>{{$item->title}}</td>
                           <td class="job_descriptions">{{$item->body}}</td>
                           <td>
                               <img src="/storage/cover_images/{{$item->cover_image}}" width="50px" height="50px" alt="Img"> 
                           </td>
                     
 
                           <td>
                               <a href="{{url ('/municipalityadmin/adminposts-edit/'.$item->id)}}" class="btn btn-success">Edit</a>
                           </td>
                           <td>
                           <a href="{{url ('/municipalityadmin/adminposts-delete/'.$item->id)}}" class="btn btn-danger">delete</a>

                           </td>
                       @endif
                     @endif
                  @endif
                    </tr>
                    @endforeach
                </tbody>

            </table>

        </div>
    </div>

</div>

@endsection
