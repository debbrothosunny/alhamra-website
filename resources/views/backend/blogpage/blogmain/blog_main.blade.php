@extends('backend.layouts.app')
  @section('content')
    <div>
        <div class="page-header">
            <h3 class="page-title"></h3>
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Admin</button></a>
                <li class="breadcrumb-item active" aria-current="page">Blog Main</li>
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
                        <a class="nav-link btn btn-success create-new-button px-3"  data-toggle="modal" data-target="#add" href="#"> + Add New Blog Header</a>
                        </li>
                    </ul>
                    <div class="table-responsive">
                        <table class="table">
                        @if(Session::has('success'))
                            <div class="alert-success p-3 mb-3" >{{Session::get('success')}}</div>
                         @endif
                            <thead>
                                <tr>
                                    <th>Category Name</th>
                                    <th>Slug</th>
                                    <th>Created By</th>
                                    <th>Status</th>
                                    <th>Meta Title</th>
                                    <th>Meta Description</th>
                                    <th>Meta Keyword</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($blog_main as $postData)
                                <tr>
                                    <td>{{$postData->category_name}}</td>
                                    <td>{{$postData->slug}}</td>
                                    <td>{{$postData->created_by}}</td>
                                    <td>{{$postData->status}}</td>
                                    <td>{{$postData->meta_title}}</td>
                                    <td>{!!Str::limit($postData->meta_description,'30', '....')!!}</td>
                                    <td>{{$postData->meta_keyword}}</td>
                                    <td>
                                    @if($postData->status == '0')
                                        <label class="badge badge-info">Published</label>
                                    @else
                                        <label class="badge badge-danger">Closed</label>
                                    @endif
                                    </td>
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
                    <h5 class="modal-title" id="exampleModalLabel">Add Blog Main</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{!!route('save.blog_main_create')!!}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Category Name</label>
                            <input type="text" name="category_name" placeholder="Type Category name" class="form-control" required>
                            <span class="text-danger">@error('category_name'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Meta Title</label>
                            <input type="text" name="meta_title" placeholder="Type Meta Title" class="form-control" required>
                            <span class="text-danger">@error('meta_title'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Meta Description</label>
                            <textarea class="form-control"  placeholder="Type Meta Description"id="exampleTextarea1" name="meta_description" rows="5" required ></textarea>
                            <span class="text-danger">@error('meta_description'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Meta Keyword</label>
                            <input type="text" name="meta_keyword" placeholder="Type Meta Keyword" class="form-control" required>
                            <span class="text-danger">@error('meta_keyword'){{$message}}@enderror</span>
                        </div>
                        <div class="form-check form-check-flat form-check-primary">
                                <label class="form-check-label">
                                <input type="checkbox" name="status" class="form-check-input"> Status <i class="input-helper"></i></label>
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
        @foreach ($blog_main as $postData)
            <div class="modal fade" id="{{ 'edit'.$postData->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Blog Main</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{!!route('update.blog_main', $postData->id)!!}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Category Name</label>
                                <input type="text" name="category_name" class="form-control" value="{{ $postData->category_name }}" >
                                <span class="text-danger">@error('category_name'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Slug</label>
                                <input type="text" name="slug" class="form-control" value="{{ $postData->slug }}" >
                                <span class="text-danger">@error('slug'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Meta Title</label>
                                <input type="text" name="meta_title" class="form-control" value="{{ $postData->meta_title}}" >
                                <span class="text-danger">@error('meta_title'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Meta Description</label>
                                <input type="text" name="meta_description" class="form-control" value="{{ $postData->meta_description }}" >
                                <span class="text-danger">@error('meta_description'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Meta Keyword</label>
                                <input type="text" name="meta_keyword" class="form-control" value="{{ $postData->meta_keyword }}" >
                                <span class="text-danger">@error('meta_keyword'){{$message}}@enderror</span>
                            </div>
                            <div class="form-check form-check-flat form-check-primary">
                                <label class="form-check-label">
                                <input type="checkbox" name="status" {!!$postData->status== '0' ? 'checked':''!!} class="form-check-input"> Status <i class="input-helper"></i></label>
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
        @foreach($blog_main as $postData)
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
                        <a href="{{url('/blogmain/delete')}}/{{$postData->id}}" type="button"
                            class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <!-- Delete Post Modal  -->
    </div>
  @endsection
