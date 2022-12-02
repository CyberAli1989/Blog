@extends('backend.layout.admin-layout');

@section('content')
    <div class="row bg-white p-4">
        <table id="datatable-buttons"
               class="table align-middle text-center table-dark table-striped table-bordered dt-responsive nowrap"
               style="border-collapse: collapse; border-spacing: 0; width: 100%;">
            <thead>
            <tr>
                <th>#</th>
                <th>{{__("Image")}}</th>
                <th>{{__("Name")}}</th>
                <th>{{__("Category")}}</th>
                <th>{{__("action")}}</th>
            </tr>
            </thead>


            <tbody>
            @foreach($portfolio as $p)
                <tr>
                    <td>
                        {{$p->id}}
                    </td>
                    <td>
                        <img class="img-thumbnail" style="width: 50px; height: 50px; border: none" src="{{url($p->image)}}"
                             alt="">
                    </td>
                    <td>
                        {{$p->name}}
                    </td>
                    <td>
                        {{$p->category->title}}
                    </td>
                    <td>
                        <a class="btn btn-warning" href="{{route('admin.portfolio.edit', $p->slug)}}"><span
                                class="fa fa-edit"></span></a>
                        <a class="btn btn-danger delete" href="{{route('admin.portfolio.delete' , $p->slug)}}"><span
                                class="fa fa-trash"></span></a>
                    </td>
                </tr>
            @endforeach
            </tbody>

        </table>

    </div>
@endsection
