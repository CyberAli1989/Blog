@extends('backend.layout.admin-layout');

@section('content')
    <div class="row bg-white p-4">
        <table id="datatable-buttons" class="table text-center table-striped table-bordered dt-responsive nowrap"
               style="border-collapse: collapse; border-spacing: 0; width: 100%;">
            <thead>
            <tr>
                <th>#</th>
                <th>name</th>
                <th>action</th>
            </tr>
            </thead>


            <tbody>
            @foreach($category as $cat)
                <tr>
                    <td>
                        {{$cat->id}}
                    </td>
                    <td>
                        {{$cat->title}}
                    </td>
                    <td>
                        <a class="btn btn-warning" href="{{route('admin.category.edit', $cat->slug)}}"><span
                                class="fa fa-edit"></span></a>
                        <a class="btn btn-danger delete" href="{{route('admin.category.delete' , $cat->slug)}}"><span
                                class="fa fa-trash"></span></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
