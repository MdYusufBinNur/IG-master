@extends('layouts.app')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="card">
                        <div class="card-content">
                            <div class="row">
                                <div class="col-xs-5">
                                    <div class="icon-big icon-dark text-center">

                                        <i class="ti-info"></i>
                                    </div>
                                </div>
                                <div class="col-xs-7">
                                    <div class="numbers">
                                        <p><a href="{{ url('abouts/create') }}" style="color: black">ABOUT INFORMATION</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <hr />

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card">
                        <div class="card-content">
                            <div class="row">
                                <div class="col-xs-5">
                                    <div class="icon-big icon-dark text-center">

                                        <i class="ti-facebook"></i>
                                    </div>
                                </div>
                                <div class="col-xs-7">
                                    <div class="numbers">
                                        <p><a href="{{ url('linkers') }}" style="color: black">SOCIAL ACTIVITIES</a></p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <hr />
                            {{--<div class="stats">--}}
                            {{--<div class="pull-right" style="position:relative; display:inline-block;"><i class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" rel="tooltip" title="adasdasdasdasdasd adasdasdasdasdShows the total price of orders minus cost for ads."></i></div>--}}
                            {{--<i class="ti-clipboard"></i><div class="my-inline-block" id="campaign-name4"></div>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card">
                        <div class="card-content">
                            <div class="row">
                                <div class="col-xs-5">
                                    <div class="icon-big icon-dark text-center">

                                        <i class="ti-mobile"></i>
                                    </div>
                                </div>
                                <div class="col-xs-7">
                                    <div class="numbers">
                                        <p><a href="{{ url('contacts') }}" style="color: black">CONTACT INFORMATION</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <hr />

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card">
                        <div class="card-content">
                            <div class="row">
                                <div class="col-xs-5">
                                    <div class="icon-big icon-dark text-center">

                                        <i class="ti-user"></i>
                                    </div>
                                </div>
                                <div class="col-xs-7">
                                    <div class="numbers">
                                        <p><a href="{{ url('owners') }}" style="color: black">OWNER INFORMATION</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <hr />

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card">
                        <div class="card-content">
                            <div class="row">
                                <div class="col-xs-5">
                                    <div class="icon-big icon-dark text-center">

                                        <i class="ti-list"></i>
                                    </div>
                                </div>
                                <div class="col-xs-7">
                                    <div class="numbers">
                                        <p><a href="{{ url('blogs') }}" style="color: black">BLOG INFORMATION</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <hr />

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card">
                        <div class="card-content">
                            <div class="row">
                                <div class="col-xs-5">
                                    <div class="icon-big icon-dark text-center">

                                        <i class="ti-announcement"></i>
                                    </div>
                                </div>
                                <div class="col-xs-7">
                                    <div class="numbers">
                                        <p><a href="{{ url('applies') }}" style="color: black">APPLICANTS</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <hr />

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card">
                        <div class="card-content">
                            <div class="row">
                                <div class="col-xs-5">
                                    <div class="icon-big icon-dark text-center">

                                        <i class="ti-video-camera"></i>
                                    </div>
                                </div>
                                <div class="col-xs-7">
                                    <div class="numbers">
                                        <p><a href="{{ url('institutes') }}" style="color: black">INSTITUTES INFORMATION</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <hr />

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card">
                        <div class="card-content">
                            <div class="row">
                                <div class="col-xs-5">
                                    <div class="icon-big icon-dark text-center">

                                        <i class="ti-clipboard"></i>
                                    </div>
                                </div>
                                <div class="col-xs-7">
                                    <div class="numbers">
                                        <p><a href="{{ url('services') }}" style="color: black">SERVICE INFORMATION</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <hr />

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
