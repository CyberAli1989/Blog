@extends('backend.layout.admin-layout')


@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data"
                          action="{{(!empty($portfolio->slug)?route('admin.portfolio.update',$portfolio->slug):route('admin.portfolio.store'))}}">
                        @csrf
                        {{-- Category --}}
                        <div class="row mb-3">
                            <label for="category" class="col-sm-2 col-form-label">{{__("Category")}}</label>
                            <div class="col-sm-10">
                                <select id="category" name="category_id" class="form-control select2">
                                    <option>{{__("Select")}}</option>
                                    @foreach($category as $cat)
                                        <option value="{{$cat->id}}">{{$cat->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        {{-- Name --}}
                        <div class="row mb-3">
                            <label for="name" class="col-sm-2 col-form-label">{{__("Name")}}</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="name"
                                       value="{{$portfolio->name??null}}"
                                       placeholder="{{__("Name")}}"
                                       id="name">
                            </div>
                        </div>
                        {{-- Slug --}}
                        <div class="row mb-3">
                            <label for="title" class="col-sm-2 col-form-label">{{__("Slug")}}</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="slug"
                                       value="{{$portfolio->slug??null}}"
                                       placeholder="{{__("Slug")}}"
                                       id="title">
                            </div>
                        </div>
                        {{-- Image --}}
                        <div class="row mb-3">
                            <label for="image" data-img="true"
                                   class="col-sm-2 col-form-label">{{__("Portfolio Img")}}</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" name="image"
                                       placeholder="{{__("Portfolio Img")}}"
                                       id="profile_img">
                            </div>

                            <div class="text-end mt-3">
                                <label for="profile_img">
                                    <img id="show_img"
                                         src="{{(!empty($portfolio->image))? url($editUser->image):url('upload/no_image.jpg')}}"
                                         alt="avatar-5"
                                         class="rounded avatar-lg">
                                </label>

                            </div>
                        </div>

                        {{-- Submit --}}
                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <input class="btn btn-dark w-100" type="submit" value="{{(!empty($portfolio->slug))?__("Update portfolio"):__("Create portfolio")}}">
                            </div>
                        </div>
                    </form>
                    <!-- end row -->
                </div>
            </div>
        </div> <!-- end col -->


    </div>


@endsection
