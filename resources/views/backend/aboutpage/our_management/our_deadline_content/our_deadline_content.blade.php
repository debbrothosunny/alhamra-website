@extends('backend.layouts.app')
  @section('content')
    <div>
        <div class="page-header">
            <h3 class="page-title"></h3>
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Admin</button></a>
                <li class="breadcrumb-item active" aria-current="page">Our Deadline Content</li>
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
                        <a class="nav-link btn btn-success create-new-button px-3"  data-toggle="modal" data-target="#add" href="#"> + Add New Our Content</a>
                        </li>
                    </ul>
                    <div class="table-responsive">
                        <table class="table">
                        @if(Session::has('success'))
                            <div class="alert-success p-3 mb-3" >{{Session::get('success')}}</div>
                         @endif
                            <thead>
                                <tr>
                                    <th>Deadline Id</th>
                                    <th>Title</th>
                                    <th>Position</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr> 
                            </thead>
                            <tbody>
                                @forelse($our_deadline_content as $postData)
                                <tr>
                                    <td>{{$postData->DeadName->deadline ?? ''}}</td>
                                    <td>{{$postData->title}}</td>
                                    <td>{{$postData->position}}</td>
                                    <td> @if($postData->status == '0')
                                        <label class="badge badge-info">Published</label>
                                    @else
                                        <label class="badge badge-danger">Closed</label>
                                    @endif</td>
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
                    <h5 class="modal-title" id="exampleModalLabel">Add Our Content</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{!!route('save.our_deadline_content_create')!!}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Deadline Id</label>
                                <div class="col-sm-12">
                                <select class="form-control" name="deadline_id">
                                    @foreach($our_management_deadline as $postData)
                                    <option value="{{$postData->id}}">{{$postData->deadline}}</option>
                                    @endforeach
                                    </select>
                                </div>
                            </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Title</label>
                            <input type="text" name="title" placeholder="Title" class="form-control" required>
                            <span class="text-danger">@error('title'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">position</label>
                            <input type="text" name="position" placeholder="Your Position" class="form-control" required>
                            <span class="text-danger">@error('position'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Image<span>500kb<span></label>
                            <input type="file" name="image" placeholder=" uploadYour Image" class="form-control" required>
                            <span class="text-danger">@error('image'){{$message}}@enderror</span>
                        </div>

                        <div class="form-check form-check-flat form-check-primary">
                            <label class="form-check-label">
                            <input type="checkbox" class="form-check-input " name="status" {!!$postData->status== '0' ? 'checked':''!!}> <i class="input-helper"></i></label>
                            <span class="text-danger">@error('status'){{$message}}@enderror</span>
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
        @foreach ($our_deadline_content as $postData)
            <div class="modal fade" id="{{ 'edit'.$postData->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Our Content</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{!!route('update.our_deadline_content', $postData->id)!!}" method="POST" enctype="multipart/form-data">
                            @csrf       
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Deadline</label>
                                <div class="col-sm-12">
                                   <select class="form-control" name="deadline_id">
                                    @foreach($our_management_deadline as $postdata)
                                    <option value="{{$postData->id}}">{{$postdata->deadline}}</option>
                                    @endforeach
                                    </select>
                            </div>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Title</label>
                                <input type="text" name="title" class="form-control" value="{{ $postData->title }}" >
                                <span class="text-danger">@error('title'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Position</label>
                                <input type="text" name="position" value="{{ $postData->position }}" class="form-control" >
                                <span class="text-danger">@error('position'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Image<span>500kb<span></label>
                                <input type="file" name="image" class="form-control">
                                <span class="text-danger">@error('image'){{$message}}@enderror</span>
                            </div>
                            <div class="form-check form-check-flat form-check-primary">
                                <label class="form-check-label">
                                <input type="checkbox" class="form-check-input " name="status" {!!$postData->status== '0' ? 'checked':''!!}> <i class="input-helper"></i></label>
                                <span class="text-danger">@error('status'){{$message}}@enderror</span>
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
        @foreach($our_deadline_content as $postData)
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
                        <a href="{{url('/our_deadline_content/delete')}}/{{$postData->id}}" type="button"
                            class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <!-- Delete Post Modal  -->
    </div>
  @endsection
