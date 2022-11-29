@extends('backend.layout.admin-layout')


@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="post"
                          action="{{(!empty($category->slug)?route('admin.category.update',$category->slug):route('admin.category.store'))}}">
                        @csrf
                        {{-- Title --}}
                        <div class="row mb-3">
                            <label for="title" class="col-sm-2 col-form-label">{{__("Title")}}</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="title"
                                       value="{{$category->title??null}}"
                                       placeholder="{{__("Title")}}"
                                       id="title">
                            </div>
                        </div>
                        {{-- Slug --}}
                        <div class="row mb-3">
                            <label for="title" class="col-sm-2 col-form-label">{{__("Slug")}}</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="slug"
                                       value="{{$category->slug??null}}"
                                       placeholder="{{__("Slug")}}"
                                       id="title">
                            </div>
                        </div>
                        {{-- Short Description --}}
                        <div class="row mb-3">
                            <label for="short_description"
                                   class="col-sm-2 col-form-label">{{__("Short Description")}}</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="8" type="text" name="description"
                                          placeholder="{{__("Short Description")}}"
                                          id="short_description">
                                    {{$category->description??null}}
                                </textarea>
                            </div>
                        </div>
                        {{-- Submit --}}
                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <input class="btn btn-dark w-100" type="submit"
                                       value="{{(!empty($category->slug))?__("Update category"):__("Create category")}}">
                            </div>
                        </div>
                    </form>
                    <!-- end row -->
                </div>
            </div>
        </div> <!-- end col -->


    </div>


@endsection
