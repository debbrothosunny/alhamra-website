@extends('backend.layouts.app')
  @section('content')
    <div>
        <div class="page-header">
            <h3 class="page-title"></h3>
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Admin</button></a>
                <li class="breadcrumb-item active" aria-current="page">Blog Content</li>
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
                        <a class="nav-link btn btn-success create-new-button px-3"  data-toggle="modal" data-target="#add" href="#"> + Add New Blog Content</a>
                        </li>
                    </ul>
                    <div class="table-responsive">
                        <table class="table">
                        @if(Session::has('success'))
                            <div class="alert-success p-3 mb-3" >{{Session::get('success')}}</div>
                         @endif
                            <thead>
                                <tr>
                                    <th>Category id</th>
                                    <th>Created By</th>
                                    <th>Title</th>
                                    <th>Description 1</th>
                                    <th>Description 2</th>
                                    <th>Description 3</th>
                                    <th>Description 4</th>
                                    <th>Slug</th>
                                    <th>Meta Title</th>
                                    <th>Meta Description</th>
                                    <th>Meta Keyword</th>
                                    <th>Status</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($blog_content as $postData)
                                <tr>
                                    <td>{{$postData->CatName->category_name  ?? ''}}</td>
                                    <td>{{$postData->CreatedBy->name}}</td>
                                    <td>{{$postData->title}}</td>
                                    <td>{!!Str::limit($postData->description_1,'30', '....')!!}</td>
                                    <td>{!!Str::limit($postData->description_2,'30', '....')!!}</td>
                                    <td>{!!Str::limit($postData->description_3,'30', '....')!!}</td>
                                    <td>{!!Str::limit($postData->description_4,'30', '....')!!}</td>
                                    <td>{{$postData->slug}}</td>
                                    <td>{{$postData->meta_title}}</td>
                                    <td>{{$postData->meta_description}}</td>
                                    <td>{{$postData->meta_keyword}}</td>
                                    <td>
                                    @if($postData->status == '0')
                                        <label class="badge badge-info">Published</label>
                                    @else
                                        <label class="badge badge-danger">Closed</label>
                                    @endif
                                    </td>
                                        <td><img style="width: 50px; border-radius: 0px;" src="{!! asset('assets/img/uploaded/'.$postData->image) !!}" alt="none"></td>
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
                    <h5 class="modal-title" id="exampleModalLabel">Add Blog Content</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{!!route('save.blog_content_create')!!}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Category</label>
                            <div class="col-sm-12">
                            <select class="form-control" name="category_id">
                                @foreach($blog_category as $postData)
                                <option value="{{$postData->id}}" >{{$postData->category_name}}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Title</label>
                            <input type="text" name="title"  placeholder="Enter Title" class="form-control" required>
                            <span class="text-danger">@error('title'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Description 1</label>
                            <input type="text" name="description_1"  placeholder="Type Your Description" class="form-control" placeholder="type your description" required>
                            <span class="text-danger">@error('description_1'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Description 2</label>
                            <input type="text" name="description_2"   placeholder="Type Your Description" class="form-control" required>
                            <span class="text-danger">@error('description_2'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Description 3</label>
                            <input type="text" name="description_3"  placeholder="Type Your Description" class="form-control" required>
                            <span class="text-danger">@error('description_3'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Description 4</label>
                            <input type="text" name="description_4"  placeholder="Type Your Description" class="form-control" required>
                            <span class="text-danger">@error('description_4'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Meta Title</label>
                            <input type="text" name="meta_title" class="form-control" required>
                            <span class="text-danger">@error('meta_title'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Meta Description</label>
                            <input type="text" name="meta_description" placeholder="Meta Description" class="form-control" required>
                            <span class="text-danger">@error('meta_description'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Meta Keyword</label>
                            <input type="text" name="meta_keyword" placeholder="Meta Keyword" class="form-control" required>
                            <span class="text-danger">@error('meta_keyword'){{$message}}@enderror</span>
                        </div>                    
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Image</label>
                            <input type="file" name="image"  placeholder="Upload your Image"class="form-control" required>
                            <span class="text-danger">@error('image'){{$message}}@enderror</span>
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
        @foreach ($blog_content as $postData)
            <div class="modal fade" id="{{ 'edit'.$postData->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Blog Content</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{!!route('update.blog_content', $postData->id)!!}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Category</label>
                                <div class="col-sm-12">
                                 <select class="form-control" name="category_id">
                                    @foreach($blog_category as $postdata)
                                    <option value="{{$postdata->id}}" >{{$postdata->category_name}}</option>
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
                                <label for="recipient-name" class="col-form-label">Description 1</label>
                                <input type="text" name="description_1" class="form-control" value="{{ $postData->description_1 }}" >
                                <span class="text-danger">@error('description_1'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Description 2</label>
                                <input type="text" name="description_2" class="form-control" value="{{ $postData->description_2 }}" >
                                <span class="text-danger">@error('description_2'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Description 3</label>
                                <input type="text" name="description_3" class="form-control" value="{{ $postData->description_3 }}" >
                                <span class="text-danger">@error('description_3'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Description 4</label>
                                <input type="text" name="description_4" class="form-control" value="{{ $postData->description_4 }}" >
                                <span class="text-danger">@error('description_4'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Slug</label>
                                <input type="text" name="slug" class="form-control" value="{{ $postData->slug}}" >
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
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Image</label>
                                <input type="file" name="image" class="form-control" value="{{ $postData->image }}" >
                                <span class="text-danger">@error('image'){{$message}}@enderror</span>
                            </div>
                            <div class="form-check form-check-flat form-check-primary">
                                <label class="form-check-label">
                                <input type="checkbox" name="status" class="form-check-input" {!!$postData->status== '0' ? 'checked':''!!}> Status <i class="input-helper"></i></label>
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
        @foreach($blog_content as $postData)
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
                        <a href="{{url('/blogcontent/delete')}}/{{$postData->id}}" type="button"
                            class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <!-- Delete Post Modal  -->
    </div>
  @endsection
