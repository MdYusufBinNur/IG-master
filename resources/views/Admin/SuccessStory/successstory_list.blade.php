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
                    <h4 class="title">Success Story List</h4>
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
                                        <th class="text-center"> Country Name</th>
                                        <th class="text-center"> Title</th>
                                        <th class="text-center"> Description</th>
                                        <th class="text-center"> Source</th>
                                        <th class="text-center disabled-sorting">Actions</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @if(!empty($successStories))
                                        @foreach($successStories as $successStory)
                                            <tr>
                                                <td class="text-center">{!! $successStory->country_name !!}</td>
                                                <td class="text-center">{!! $successStory->title !!}</td>
                                                <td class="text-center">{!! $successStory->description !!}</td>
                                                <td class="text-center">{!! $successStory->source !!}</td>



                                                <td class="text-center">

                                                    <a href="#" class="btn btn-simple btn-success btn-icon detail_view" data-toggle="modal"  data-target="#BrandModal"><i class="ti-eye"></i></a>
                                                    <a href="#" class="btn btn-simple btn-warning btn-icon edit" data-toggle="modal" data-body="{{ "storie" }}" data-id="{{ $successStory->id }}" data-target="#Modal"><i class="ti-pencil-alt"></i></a>
                                                    <a href="" class="btn btn-simple btn-info btn-icon del_brand remove" data-id="{{ $successStory->id }}" data-body="{{ "storie" }}" id="del_brand_item" ><i class="ti-trash"></i></a>

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
                    <h4 class="modal-title">Edit Scholarship Information</h4>
                </div>
                <form action="{{ url('stories') }}" method="post" enctype="multipart/form-data">
                    @csrf()
                    <div class="modal-body">
                        <div class="row" style="padding: 10px">

                            <input type="text" id="success_story_id" hidden name="success_story_id">

                            <div class="form-group">
                                <label class="control-label" for="old_country">
                                   Selected Country<star>*</star>
                                </label>
                                <input class="form-control" type="text" name="old_country" id="old_country"  readonly required/>
                            </div>
                            <div class="form-group">
                                <label for="">Select Country<star>*</star></label>
                                <select  title="-" class="selectpicker"  data-style="btn-dark btn-block" data-size="4" name="country_id" id="country_id"  >

                                    @if(!empty($countries))
                                        @foreach($countries as $country)
                                            <option value="{!! $country->id !!}">{!! $country->countryname !!}</option>
                                        @endforeach
                                    @endif

                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="title">
                                    Title<star>*</star>
                                </label>
                                <input class="form-control" type="text" name="title" id="title" required/>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="source">
                                    Source<star>*</star>
                                </label>
                                <input class="form-control" type="text" name="source" id="source" required/>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="description"> Description<star>*</star></label>
                                <textarea class="form-control" name="description" id="description" rows="3" required>

                                    </textarea>
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

