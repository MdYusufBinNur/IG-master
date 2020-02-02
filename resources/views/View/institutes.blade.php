@extends('View.layout')

@section('page-content')

<section class="breadcrumb py-5 bg-color-primary justify-content-center rounded-0">
    <h2 class="text-center text-uppercase text-light display-4 d-flex flex-column"><i class="fas fa-university"></i>
        institutes</h2>
</section>


<section class="institutes mb-5">
    <div class="container">
        <div class="card shadow border-0 p-3 list-group-flush">

            <div class="row">
                <div class="col-4">
                    <div class="list-group" id="list-tab" role="tablist">
                        <a class="list-group-item list-group-item-action active" id="list-country-1" data-toggle="list"
                            href="#country-1" role="tab" aria-controls="country-1">Australia</a>
                        <a class="list-group-item list-group-item-action" id="list-country-2" data-toggle="list"
                            href="#country-2" role="tab" aria-controls="country-2">Canada</a>
                        <a class="list-group-item list-group-item-action" id="list-country-3" data-toggle="list"
                            href="#country-3" role="tab" aria-controls="country-3">Ireland</a>
                        <a class="list-group-item list-group-item-action" id="list-country-4" data-toggle="list"
                            href="#country-4" role="tab" aria-controls="country-4">Netherland</a>
                        <a class="list-group-item list-group-item-action" id="list-country-5" data-toggle="list"
                            href="#country-5" role="tab" aria-controls="country-5">Sweden</a>
                        <a class="list-group-item list-group-item-action" id="list-country-6" data-toggle="list"
                            href="#country-6" role="tab" aria-controls="country-6">UK</a>
                        <a class="list-group-item list-group-item-action" id="list-country-7" data-toggle="list"
                            href="#country-7" role="tab" aria-controls="country-7">USA</a>

                    </div>
                </div>
                <div class="col-8">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="country-1" role="tabpanel"
                            aria-labelledby="list-country-1">
                            <h4 class="px-4 pb-2"><span class="text-muted text-capitalize">institutes of</span>
                                <span class="text-uppercase font-weight-bold">Autralia</span>
                            </h4>
                            <ol>
                                <li class="p-1"><a href="#"> Northumbria University</a></li>
                                <li class="p-1"><a href="#""> Northumbria University</a></li>
                                <li class=" p-2"><a href=" #"> University of West Scotland</a></li>
                                <li class="p-2"><a href="#"> Northumbria University</a></li>
                                <li class="p-2"><a href="#"> Northumbria University</a></li>
                                <li class="p-2"><a href="#"> University of West Scotland</a></li>
                            </ol>
                        </div>
                        <div class="tab-pane fade" id="country-2" role="tabpanel" aria-labelledby="list-country-2">
                            <h4 class="px-4 pb-2"><span class="text-muted text-capitalize">institutes of</span>
                                <span class="text-uppercase font-weight-bold">Canada</span>
                            </h4>
                            <ol>
                                <li class="p-1"><a href="#"> Northumbria University</a></li>
                                <li class="p-1"><a href="#""> Northumbria University</a></li>
                                <li class=" p-2"><a href=" #"> University of West Scotland</a></li>
                                <li class="p-2"><a href="#"> Northumbria University</a></li>
                                <li class="p-2"><a href="#"> Northumbria University</a></li>
                                <li class="p-2"><a href="#"> University of West Scotland</a></li>
                            </ol>
                        </div>
                        <div class="tab-pane fade" id="country-3" role="tabpanel" aria-labelledby="list-country-3">
                            <h4 class="px-4 pb-2"><span class="text-muted text-capitalize">institutes of</span>
                                <span class="text-uppercase font-weight-bold">Ireland</span>
                            </h4>
                            <ol>
                                <li class="p-1"><a href="#"> Northumbria University</a></li>
                                <li class="p-1"><a href="#""> Northumbria University</a></li>
                                <li class=" p-2"><a href=" #"> University of West Scotland</a></li>
                                <li class="p-2"><a href="#"> Northumbria University</a></li>
                                <li class="p-2"><a href="#"> Northumbria University</a></li>
                                <li class="p-2"><a href="#"> University of West Scotland</a></li>
                            </ol>
                        </div>
                        <div class="tab-pane fade" id="country-4" role="tabpanel" aria-labelledby="list-country-4">
                            <h4 class="px-4 pb-2"><span class="text-muted text-capitalize">institutes of</span>
                                <span class="text-uppercase font-weight-bold">Netherland</span>
                            </h4>
                            <ol>
                                <li class="p-1"><a href="#"> Northumbria University</a></li>
                                <li class="p-1"><a href="#""> Northumbria University</a></li>
                                <li class=" p-2"><a href=" #"> University of West Scotland</a></li>
                                <li class="p-2"><a href="#"> Northumbria University</a></li>
                                <li class="p-2"><a href="#"> Northumbria University</a></li>
                                <li class="p-2"><a href="#"> University of West Scotland</a></li>
                            </ol>
                        </div>
                        <div class="tab-pane fade" id="country-5" role="tabpanel" aria-labelledby="list-country-5">
                            <h4 class="px-4 pb-2"><span class="text-muted text-capitalize">institutes of</span>
                                <span class="text-uppercase font-weight-bold">Sweden</span>
                            </h4>
                            <ol>
                                <li class="p-1"><a href="#"> Northumbria University</a></li>
                                <li class="p-1"><a href="#""> Northumbria University</a></li>
                                <li class=" p-2"><a href=" #"> University of West Scotland</a></li>
                                <li class="p-2"><a href="#"> Northumbria University</a></li>
                                <li class="p-2"><a href="#"> Northumbria University</a></li>
                                <li class="p-2"><a href="#"> University of West Scotland</a></li>
                            </ol>
                        </div>
                        <div class="tab-pane fade" id="country-6" role="tabpanel" aria-labelledby="list-country-6">
                            <h4 class="px-4 pb-2"><span class="text-muted text-capitalize">institutes of</span>
                                <span class="text-uppercase font-weight-bold">UK</span>
                            </h4>
                            <ol>
                                <li class="p-1"><a href="#"> Northumbria University</a></li>
                                <li class="p-1"><a href="#""> Northumbria University</a></li>
                                <li class=" p-2"><a href=" #"> University of West Scotland</a></li>
                                <li class="p-2"><a href="#"> Northumbria University</a></li>
                                <li class="p-2"><a href="#"> Northumbria University</a></li>
                                <li class="p-2"><a href="#"> University of West Scotland</a></li>
                            </ol>
                        </div>
                        <div class="tab-pane fade" id="country-7" role="tabpanel" aria-labelledby="list-country-7">
                            <h4 class="px-4 pb-2"><span class="text-muted text-capitalize">institutes of</span>
                                <span class="text-uppercase font-weight-bold">USA</span>
                            </h4>
                            <ol>
                                <li class="p-1"><a href="#"> Northumbria University</a></li>
                                <li class="p-1"><a href="#""> Northumbria University</a></li>
                                <li class=" p-2"><a href=" #"> University of West Scotland</a></li>
                                <li class="p-2"><a href="#"> Northumbria University</a></li>
                                <li class="p-2"><a href="#"> Northumbria University</a></li>
                                <li class="p-2"><a href="#"> University of West Scotland</a></li>
                            </ol>
                        </div>


                    </div>
                </div>
            </div>


        </div>
    </div>
</section>

@endsection
