@extends('backend.layouts.app')
  @section('content')
    <div>
        <div class="page-header">
            <h3 class="page-title"></h3>
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Admin</button></a>
                <li class="breadcrumb-item active" aria-current="page">Buffet Paradise Title</li>
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
                        <a class="nav-link btn btn-success create-new-button px-3"  data-toggle="modal" data-target="#add" href="#"> + Add New Footer</a>
                        </li>
                    </ul>
                    <div class="table-responsive">
                        <table class="table">
                        @if(Session::has('success'))
                            <div class="alert-success p-3 mb-3" >{{Session::get('success')}}</div>
                         @endif
                            <thead>
                                <tr>
                                    <th>Title_1</th>
                                    <th>Description_1</th>
                                    <th>Title_2</th>
                                    <th>Title_3</th>
                                    <th>Description_2</th>
                                    <th>location</th>
                                    <th>Number</th>
                                    <th>Number_2</th>
                                    <th>Email</th>
                                    <th>Location_icon</th>
                                    <th>Phone_icon_1</th>
                                    <th>Phone_icon_2</th>
                                    <th>Email_icon</th>
                                    <th>Facebook</th>
                                    <th>Twitter</th>
                                    <th>Linkdin</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($footer as $postData)
                                <tr>
                                    <td>{{$postData->title_1}}</td>
                                    <td>{!!Str::limit($postData->description_1,'30', '....')!!}</td>
                                    <td>{{$postData->title_2}}</td>
                                    <td>{{$postData->title_3}}</td> 
                                    <td>{!!Str::limit($postData->description_2,'30', '....')!!}</td>
                                    <td>{{$postData->location}}</td>
                                    <td>{{$postData->number_1}}</td>
                                    <td>{{$postData->number_2}}</td>
                                    <td>{{$postData->email}}</td>
                                    <td>{{$postData->location_icon}}</td>
                                    <td>{{$postData->phone_icon_1}}</td>
                                    <td>{{$postData->phone_icon_2}}</td>
                                    <td>{{$postData->email_icon}}</td>
                                    <td>{{$postData->facebook}}</td>
                                    <td>{{$postData->twitter}}</td>
                                    <td>{{$postData->linkdin}}</td>
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
                    <h5 class="modal-title" id="exampleModalLabel">Add Footer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{!!route('save.footer_create')!!}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Title_1</label>
                            <input type="text" name="title_1" class="form-control" required>
                            <span class="text-danger">@error('title_1'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Description_1</label>
                            <input type="text" name="description_1" class="form-control" required>
                            <span class="text-danger">@error('description_1'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Title_2</label>
                            <input type="text" name="title_2" class="form-control" placeholder="Type Second Title" required>
                            <span class="text-danger">@error('title_2'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">title_3</label>
                            <input type="text" name="title_3" class="form-control" placeholder="Type Third Title" required>
                            <span class="text-danger">@error('title_3'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Description_2</label>
                            <input type="text" name="description_2" class="form-control" placeholder="Type Description" required>
                            <span class="text-danger">@error('description_2'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Location</label>
                            <input type="text" name="location" class="form-control" placeholder="Your Location" required>
                            <span class="text-danger">@error('location'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Number_1</label>
                            <input type="number" name="number_1" class="form-control"placeholder="Your Number" required>
                            <span class="text-danger">@error('number_1'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">number_2</label>
                            <input type="number" name="number_2" class="form-control" placeholder="Your Secondery Number" required>
                            <span class="text-danger">@error('number_2'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Email</label>
                            <input type="text" name="email" class="form-control" placeholder="Your Email" required>
                            <span class="text-danger">@error('email'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Location_Icon</label>
                            <input type="text" name="location_icon"   placeholder="Location Icon" class="form-control" required>
                            <span class="text-danger">@error('location_icon'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Phone_Icon_1</label>
                            <input type="text" name="phone_icon_1"  placeholder="Phone Icon" class="form-control" required>
                            <span class="text-danger">@error('phone_icon_1'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">phone_icon_2</label>
                            <input type="text" name="phone_icon_2"   placeholder="Phone Icon" class="form-control" required>
                            <span class="text-danger">@error('phone_icon_2'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">email_icon</label>
                            <input type="text" name="email_icon"  placeholder="Email Icon"class="form-control" required>
                            <span class="text-danger">@error('email_icon'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Facebook</label>
                            <input type="text" name="facebook"  placeholder="Facebook Icon" class="form-control" required>
                            <span class="text-danger">@error('facebook'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Twitter</label>
                            <input type="text" name="twitter"  placeholder="Twitter Icon" class="form-control" required>
                            <span class="text-danger">@error('twitter'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">linkdin</label>
                            <input type="text" name="linkdin"  placeholder="Linkdin Icon" class="form-control" required>
                            <span class="text-danger">@error('linkdin'){{$message}}@enderror</span>
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
        @foreach ($footer as $postData)
            <div class="modal fade" id="{{ 'edit'.$postData->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Footer</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{!!route('update.footer', $postData->id)!!}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Title_1</label>
                            <input type="text" name="title_1"  value="{{ $postData->title_1 }}" class="form-control" >
                            <span class="text-danger">@error('title_1'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Dscription_1</label>
                            <input type="text" name="description_1" value="{{ $postData->description_1 }}"  class="form-control" >
                            <span class="text-danger">@error('description_1'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Title_2</label>
                            <input type="text" name="title_2"  value="{{ $postData->title_2 }}"class="form-control" >
                            <span class="text-danger">@error('title_2'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">title_3</label>
                            <input type="text" name="title_3"  value="{{ $postData->title_3 }}" class="form-control" >
                            <span class="text-danger">@error('title_3'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Description_2</label>
                            <input type="text" name="description_2"  value="{{ $postData->description_2 }}" class="form-control" >
                            <span class="text-danger">@error('description_2'){{$message}}@enderror</span>
                        </div>

                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Location</label>
                            <input type="text" name="location" value="{{ $postData->location}}" class="form-control" >
                            <span class="text-danger">@error('location'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Number_1</label>
                            <input type="number" name="number_1"  value="{{ $postData->number_1}}" class="form-control" >
                            <span class="text-danger">@error('number_1'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">number_2</label>
                            <input type="number" name="number_2" value="{{ $postData->number_2}}" class="form-control" >
                            <span class="text-danger">@error('number_2'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Email</label>
                            <input type="text" name="email" value="{{ $postData->email}}" class="form-control" >
                            <span class="text-danger">@error('email'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Location_Icon</label>
                            <input type="text" name="location_icon"  value="{{ $postData->location_icon}}" class="form-control" >
                            <span class="text-danger">@error('location_icon'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Phone_Icon_1</label>
                            <input type="text" name="phone_icon_1"  value="{{ $postData->phone_icon_1}}" class="form-control" >
                            <span class="text-danger">@error('phone_icon_1'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">phone_icon_2</label>
                            <input type="text" name="phone_icon_2"  value="{{ $postData->phone_icon_2 }}" class="form-control" >
                            <span class="text-danger">@error('phone_icon_2'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">email_icon</label>
                            <input type="text" name="email_icon"  value="{{ $postData->email_icon }}" class="form-control" >
                            <span class="text-danger">@error('email_icon'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Facebook</label>
                            <input type="text" name="facebook"  value="{{ $postData->facebook }}" class="form-control" >
                            <span class="text-danger">@error('facebook'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Twitter</label>
                            <input type="text" name="twitter"  value="{{ $postData->twitter }}" class="form-control" >
                            <span class="text-danger">@error('twitter'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">linkdin</label>
                            <input type="text" name="linkdin"  value="{{ $postData->linkdin }}" class="form-control" >
                            <span class="text-danger">@error('linkdin'){{$message}}@enderror</span>
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

        <!-- Delete Post Modal Start  -->
        @foreach($footer as $postData)
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
                        <a href="{{url('/footer/delete')}}/{{$postData->id}}" type="button"
                            class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <!-- Delete Post Modal  -->
    </div>
  @endsection
