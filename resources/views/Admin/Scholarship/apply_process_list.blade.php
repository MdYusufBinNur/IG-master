@extends('layouts.app')


@section('style')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="{{asset('Admin/paper_dashboard/assets/tinymce/tinymce.min.js') }}"></script>

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
                                <table id="datatables" class="table table-striped table-no-bordered table-hover"
                                       cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                    <tr>

                                        <th class="text-center"> Details</th>
                                        <th class="text-center disabled-sorting">Actions</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @if(!empty($processes))
                                        @foreach($processes as $process)
                                            <tr>
                                                <td class="text-center">{!! substr($process->apply_details,0,1000) !!}</td>

                                                <td class="text-center">

                                                    <a href="#" class="btn btn-simple btn-warning btn-icon edit"
                                                       data-toggle="modal" data-body="{{ "set_up_apply_processe" }}"
                                                       data-id="{{ $process->id }}" data-target="#Modal"
                                                       onclick="tinyMCE_init()"><i class="ti-pencil-alt"></i></a>
                                                    <a href="" class="btn btn-simple btn-info btn-icon del_brand remove"
                                                       data-id="{{ $process->id }}"
                                                       data-body="{{ "set_up_apply_processe" }}" id="del_brand_item"><i
                                                            class="ti-trash"></i></a>

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
                    <h4 class="modal-title">Apply Process Information</h4>
                </div>
                <form action="{{ url('set_up_apply_processes') }}" method="post" enctype="multipart/form-data">
                    @csrf()
                    <div class="modal-body">
                        <div class="row" style="padding: 10px">

                            <input type="text" id="process_id" hidden name="process_id">


                            <div class="form-group">
                                <label class="control-label" for=""> Apply Details
                                    <star>*</star>
                                </label>
                                <textarea class="form-control" name="apply_details" id="apply_details" rows="3">

                                </textarea>
                            </div>

                            <div class="category">
                                <star>*</star>
                                Required fields
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


