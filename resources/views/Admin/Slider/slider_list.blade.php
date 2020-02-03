@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
@endsection

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    @if(Session::get('success'))
                        <div class="alert alert-success">
                            <button type="button" aria-hidden="true" data-notify="dismiss" class="close">×</button>
                            <span><b> Success - </b> {{ Session::get('success') }}</span>
                        </div>
                    @endif

                    @if(Session::get('error'))
                        <div class="alert alert-warning">
                            <button type="button" aria-hidden="true" data-notify="dismiss" class="close">×</button>
                            <span><b> Success - </b> {{ Session::get('error') }}</span>
                        </div>
                    @endif

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h4 class="title">Slider Lists</h4>
                    <br>

                    <div class="card">
                        <div class="card-content">
                            <div class="toolbar">
                                <!--Here you can write extra buttons/actions for the toolbar-->
                            </div>
                            <div class="fresh-datatables">
                                <table id="datatables" class="table table-striped table-no-bordered table-hover"
                                       cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th class="text-center"> Title</th>

                                        <th class="text-center"> Image</th>
                                        <th class="text-center disabled-sorting">Actions</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @if(!empty($sliders))
                                        @foreach($sliders as $slider)
                                            <tr>
                                                <td class="text-center">{!! $slider->slider_name !!}</td>


                                                <td class="text-center">
                                                    <img src="{!! $slider->slider_image !!}" width="50px" height="auto"
                                                         alt="">
                                                </td>


                                                <td class="text-center">

                                                    <a href="#" class="btn btn-simple btn-success btn-icon detail_view"
                                                       data-toggle="modal" data-target="#BrandModal"><i
                                                            class="ti-eye"></i></a>
                                                    <a href="#" class="btn btn-simple btn-warning btn-icon edit"
                                                       data-toggle="modal" data-body="{{ "slider" }}"
                                                       data-id="{{ $slider->id }}" data-target="#Modal"><i
                                                            class="ti-pencil-alt"></i></a>
                                                    <a href="" class="btn btn-simple btn-info btn-icon del_brand remove"
                                                       data-id="{{ $slider->id }}" data-body="{{ "slider" }}"
                                                       id="del_brand_item"><i class="ti-trash"></i></a>

                                                </td>
                                            </tr>

                                        @endforeach
                                    @endif

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!--  end card  -->
                </div> <!-- end col-md-12 -->


            </div> <!-- end row -->

        </div>
    </div>

    <div class="modal fade" id="Modal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit Slider Information</h4>
                </div>
                <form action="{{ url('sliders') }}" method="post" enctype="multipart/form-data">
                    @csrf()
                    <div class="modal-body">
                        <div class="row" style="padding: 10px">

                            <input type="text" id="slider_id" hidden name="slider_id">

                            <div class="form-group">
                                <label class="control-label" for="slider_name">
                                    Title
                                </label>

                                <input class="form-control" type="text" name="slider_name" id="slider_name" required/>
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="slider_image"> Image </label>
                                <input type="file" name="slider_image" class="form-control" />
                            </div>

                            <div class="form-group">
                                <label for="old_logo">Old Image</label>
                                <br>
                                <img src="" alt="" width="50" height="auto" id="old_logo">
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-default">Update</button>
                    </div>

                </form>


            </div>

        </div>
    </div>

@endsection

@section('script')

    <script src="{{asset('Admin/paper_dashboard/assets/js/datatable_search_pagination.js') }}"></script>

    {{--<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js">datatable_search_pagination.js</script>--}}
@endsection


