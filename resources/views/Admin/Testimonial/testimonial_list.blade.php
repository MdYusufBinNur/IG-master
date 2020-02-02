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
                    <h4 class="title">Testimonial List</h4>
                    <br>

                    <div class="card">
                        <div class="card-content">
                            <div class="toolbar">
                                <!--Here you can write extra buttons/actions for the toolbar-->
                            </div>
                            <div class="fresh-datatables">
                                <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th class="text-center"> Title</th>
                                        <th class="text-center"> Description</th>
                                        <th class="text-center"> Image</th>
                                        <th class="text-center disabled-sorting">Actions</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @if(!empty($testimonials))
                                        @foreach($testimonials as $testimonial)
                                            <tr>
                                                <td class="text-center">{!! $testimonial->testimonial_title !!}</td>
                                                <td class="text-center">{!! $testimonial->testimonial_descripion !!}</td>

                                                <td class="text-center">
                                                    <img src="{!! $testimonial->testimonial_image !!}" width="50px" height="auto" alt="">
                                                </td>


                                                <td class="text-center">
                                                    <a href="#" class="btn btn-simple btn-success btn-icon detail_view" data-toggle="modal"  data-target="#BrandModal"><i class="ti-eye"></i></a>
                                                    <a href="#" class="btn btn-simple btn-warning btn-icon edit" data-toggle="modal" data-body="{{ "testimonial" }}" data-id="{{ $testimonial->id }}" data-target="#Modal"><i class="ti-pencil-alt"></i></a>
                                                    <a href="" class="btn btn-simple btn-info btn-icon del_brand remove" data-id="{{ $testimonial->id }}" data-body="{{ "testimonial" }}" id="del_brand_item" ><i class="ti-trash"></i></a>
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
                    <h4 class="modal-title">Testimonial Information</h4>
                </div>
                <form action="{{ url('testimonials') }}" method="post" enctype="multipart/form-data">
                    @csrf()
                    <div class="modal-body">
                        <div class="row" style="padding: 10px">

                            <input type="text" id="testimonial_id" hidden name="testimonial_id">

                            <div class="form-group">
                                <label class="control-label" for="testimonial_title">
                                    Testimonial Title
                                </label>

                                <input class="form-control" type="text" name="testimonial_title" id="testimonial_title" required/>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="testimonial_description">
                                    Description
                                </label>

                                <textarea class="form-control" name="testimonial_description" id="testimonial_description" rows="3" required>

                                    </textarea>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="testimonial_image"> Image </label>
                                <input type="file" name="testimonial_image" class="form-control" required/>
                            </div>
                            <div class="form-group">
                                <label for="old_logo">Old Image</label>
                                <br>
                                <img src="" alt="" width="50" height="auto" id="old_logo">
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-default" >Update</button>
                    </div>


                </form>


            </div>

        </div>
    </div>

@endsection

@section('script')

    <script src="{{asset('Admin/paper_dashboard/assets/js/datatable_search_pagination.js') }}" ></script>

    {{--<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js">datatable_search_pagination.js</script>--}}
@endsection


