@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="{{asset('Admin/paper_dashboard/assets/tinymce/tinymce.min.js') }}" ></script>

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
                    <h4 class="title"> List</h4>
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
                                        <th class="text-center"> Image</th>
                                        <th class="text-center disabled-sorting">Actions</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @if(!empty($procedures))
                                        @foreach($procedures as $procedure)
                                            <tr>
                                                <td class="text-center">{!! $procedure->country->country_name !!}</td>
                                                <td class="text-center">{!! $procedure->description !!}</td>
                                                <td class="text-center">

                                                    <a href="#" class="btn btn-simple btn-warning btn-icon edit" data-toggle="modal" data-body="{{ "procedure" }}" data-id="{{ $procedure->id }}" data-target="#Modal"><i class="ti-pencil-alt"></i></a>
                                                    <a href="" class="btn btn-simple btn-info btn-icon del_brand remove" data-id="{{ $procedure->id }}" data-body="{{ "procedure" }}" id="del_brand_item" ><i class="ti-trash"></i></a>

                                                </td>
                                            </tr>

                                        @endforeach
                                    @endif
                                    {{--<tr>
                                        <td class="text-center"></td>
                                        <td class="text-center"></td>
                                        <td class="text-center">

                                            <a href="#" class="btn btn-simple btn-warning btn-icon edit" data-toggle="modal" data-body="{{ "procedure" }}" data-id="{{ 1 }}" data-target="#Modal"><i class="ti-pencil-alt"></i></a>

                                        </td>
                                    </tr>--}}
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
                    <h4 class="modal-title">About Information</h4>
                </div>
                <form action="{{ url('procedures') }}" method="post" enctype="multipart/form-data">
                    @csrf()
                    <div class="modal-body">
                        <div class="row" style="padding: 10px">

                            <input type="text" id="procedure_id" hidden name="procedure_id">

                            <div class="form-group">
                                <label for="">Selected Country<star>*</star></label>
                                <input type="text" id="old_country_name" readonly class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Select Country<star>*</star></label>
                                <select  title="-" class="selectpicker"  data-style="btn-dark btn-block" data-size="4" name="country_id" id="country_id" >

                                    @if(!empty($countries))
                                        @foreach($countries as $country)
                                            <option value="{!! $country->id !!}">{!! $country->country_name !!}</option>
                                        @endforeach
                                    @endif

                                </select>
                            </div>


                            <div class="form-group">
                                <label class="control-label" for="description">
                                    Description<star>*</star>
                                </label>
                                <textarea class="form-control" type="text" name="description" id="description">

                                </textarea>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="country_map_image">Map Image with university icons for Selected country</label>
                                <input type="file" name="country_map_image" class="form-control" />
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


