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
                                        <th class="text-center"> University Name</th>
                                        <th class="text-center"> Program Name</th>

                                        <th class="text-center disabled-sorting">Actions</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @if(!empty($programs))
                                        @foreach($programs as $program)
                                            <tr>
                                                <td class="text-center">{!! $program->university->university_name !!}</td>
                                                <td class="text-center">{!! $program->program_name !!}</td>

                                                <td class="text-center">
                                                    <a href="#" class="btn btn-simple btn-warning btn-icon edit" data-toggle="modal" data-body="{{ "program" }}" data-id="{{ $program->id }}" data-target="#Modal" ><i class="ti-pencil-alt"></i></a>
                                                    <a href="" class="btn btn-simple btn-info btn-icon del_brand remove" data-id="{{ $program->id }}" data-body="{{ "program" }}"  ><i class="ti-trash"></i></a>
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
                    <h4 class="modal-title">Edit Program Details</h4>
                </div>
                <form action="{{ url('programs') }}" method="post" enctype="multipart/form-data">
                    @csrf()
                    <div class="modal-body">
                        <input type="hidden" id="program_id"  name="program_id">

                        <div class="form-group">
                            <label class="control-label" for="category_info">
                                University
                            </label>
                            <input class="form-control" type="text" name="old_university_name" id="old_university_name" readonly/>
                        </div>

                        <div class="form-group">
                            <label for="">Select University<star>*</star></label>
                            <select  title="-" class="selectpicker"  data-style="btn-dark btn-block" data-size="4" name="university_id" id="university_id"  >

                                @if(!empty($universities))
                                    @foreach($universities as $university)
                                        <option value="{!! $university->id !!}">{!! $university->university_name !!}</option>
                                    @endforeach
                                @endif

                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="program_name">
                                Program Name<star>*</star>
                            </label>
                            <input class="form-control" type="text" name="program_name" id="program_name" required/>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-default"  >Update</button>
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


