@extends('backend.layouts.app')
  @section('content')
    <div>
        <div class="page-header">
            <h3 class="page-title"></h3>
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Admin</button></a>
                <li class="breadcrumb-item active" aria-current="page">Our Qualities</li>
            </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card mx-auto">
                <div class="card">
                    <div class="card-body">
                    <ul class="navbar-nav d-inline mb-3">
                        <li class="nav-item col-lg-3 float-right mb-3"  style="padding-right: 4.3%;">
                            <form action="" style="display: flex;">
                            <input type="search" name="search" class="form-control" placeholder="Search Category">
                            <button type="submit" class="btn btn-primary" >
                                <i class=" mdi mdi-flattr"></i>
                            </button>
                            </form>
                        </li>
                        <li class="breadcrumb-item p-2 col-lg-9 mb-3">
                        <a class="nav-link btn btn-success create-new-button px-3"  data-toggle="modal" data-target="#add" href="#"> + Add New Our Qualities</a>
                        </li>
                    </ul>
                    <div class="table-responsive">
                        <table class="table">
                        @if(Session::has('success'))
                            <div class="alert-success p-3 mb-3" >{{Session::get('success')}}</div>
                         @endif
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Title_1</th>
                                    <th>Title_2</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($our_qualities as $postData)
                                <tr>
                                    <td>{{$postData->title}}</td>
                                    <td>{!!Str::limit($postData->description,'30', '....')!!}</td>
                                    <td>{{$postData->title_1}}</td>
                                    <td>{{$postData->title_2}}</td>
                                    <td><img style="width: 40px; border-radius: 50px;" src="{!! asset('assets/img/uploaded/'.$postData->image) !!}" alt="none"></td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="{{'#edit'.$postData->id}}" href="">
                                                <i class="mdi mdi-grease-pencil"></i>
                                            </a>
                                            <a type="button" class="btn btn-outline-danger"  data-toggle="modal" data-target="{{'#delete'.$postData->id}}"  href="">
                                            <i class="mdi mdi-delete"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    Data Not Found
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container pt-3 ">
        </div>
        <!-- Add Modal Start -->
        <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Our Qualities</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{!!route('save.our_qualities_create')!!}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Title</label>
                            <input type="text" name="title" placeholder=
                            "Title" class="form-control" required>
                            <span class="text-danger">@error('title'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Description</label>
                            <textarea class="form-control"  placeholder="Type Your Description"id="exampleTextarea1" name="description" rows="5" required ></textarea>
                            <span class="text-danger">@error('description'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Title_1</label>
                            <input type="text" name="title_1" placeholder=
                            "Type Your First Title"class="form-control" required>
                            <span class="text-danger">@error('title_1'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Title_2</label>
                            <input type="text" name="title_2" placeholder=
                            "Type Your Second Title" class="form-control" required>
                            <span class="text-danger">@error('title_2'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Image<span>500kb<span></label>
                            <input type="file" name="image" placeholder=
                            "Upload Your Image" class="form-control" required>
                            <span class="text-danger">@error('image'){{$message}}@enderror</span>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">submit</button>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
        <!-- Add Modal End -->
        <!-- Edit Modal -->
        @foreach ($our_qualities as $postData)
            <div class="modal fade" id="{{ 'edit'.$postData->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Our Qualities</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{!!route('update.our_qualities', $postData->id)!!}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Title</label>
                                <input type="text" name="title" class="form-control" value="{{ $postData->title }}">
                                <span class="text-danger">@error('title'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Description</label>
                                <input type="text" name="description" value="{{ $postData->description }}" class="form-control" >
                                <span class="text-danger">@error('description'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Title_1</label>
                                <input type="text" name="title_1"  value="{{ $postData->title_1 }}" class="form-control">
                                <span class="text-danger">@error('title_1'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Title_2</label>
                                <input type="text" name="title_2"  value="{{ $postData->title_2 }}" class="form-control">
                                <span class="text-danger">@error('title_2'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Image<span>500kb<span></label>
                                <input type="file" name="image" class="form-control">
                                <span class="text-danger">@error('image'){{$message}}@enderror</span>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">submit</button>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        @endforeach

        <!-- Edit Modal End -->

        <!-- Delete Post Modal  -->
        @foreach($our_qualities as $postData)
        <div class="modal fade" id="{{'delete'.$postData->id}}" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center flex-column">
                        <h4 class="w-100 text-danger question">&#63;</h4>
                        <h4 class="modal-title w-100">Are You Sure?</h4>
                    </div>
                    <div class="modal-body">
                        <p class="text-center">Do you really want to delete these Post? This Post can't be undone.</p>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <a href="{{url('/our_qualities/delete')}}/{{$postData->id}}" type="button"
                            class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <!-- Delete Post Modal  -->
    </div>
  @endsection
