@extends('backend.layouts.app')
  @section('content')
    <div>
        <div class="page-header">
            <h3 class="page-title"></h3>
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Admin</button></a>
                <li class="breadcrumb-item active" aria-current="page">Blog Comment</li>
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
                        <a class="nav-link btn btn-success create-new-button px-3"  data-toggle="modal" data-target="#add" href="#"> + Add New Blog Comment</a>
                        </li>
                    </ul>
                    <div class="table-responsive">
                        <table class="table">
                        @if(Session::has('success'))
                            <div class="alert-success p-3 mb-3" >{{Session::get('success')}}</div>
                         @endif
                            <thead>
                                <tr>
                                    <th>Comment</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($blog_comment as $postData)
                                <tr>
                                    <td>{!!Str::limit($postData->comment,'30', '....')!!}</td>
                                    <td>{{$postData->name}}</td>
                                    <td>{{$postData->email}}</td>
            
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
                    <h5 class="modal-title" id="exampleModalLabel">Add Blog Comment</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{!!route('save.blog_comment_create')!!}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Comment</label>
                            <input type="text" name="comment" class="form-control" placeholder="Type Your Comment" required>
                            <span class="text-danger">@error('comment'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Type Your Name" required>
                            <span class="text-danger">@error('name'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Email</label>
                            <input type="text" name="email" class="form-control"  placeholder="Type Your Email"required>
                            <span class="text-danger">@error('email'){{$message}}@enderror</span>
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

        <!-- Edit Modal End -->

        <!-- Delete Post Modal  -->
        @foreach($blog_comment as $postData)
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
                        <a href="{{url('/blog_comment_section/delete')}}/{{$postData->id}}" type="button"
                            class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <!-- Delete Post Modal  -->
    </div>
  @endsection
