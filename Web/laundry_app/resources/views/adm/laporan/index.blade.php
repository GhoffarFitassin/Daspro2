@extends('layout.adm')

@section('container')
    <div class="row invoice layout-top-spacing" id="cancel-row">

        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            @if (session()->has('success'))
                <div class="alert alert-success mb-4" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg></button> <strong>Success!</strong> {{ session('success') }}
                </div>
            @endif
            @if (session()->has('fail'))
                <div class="alert alert-danger mb-4" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg></button> <strong>Fail!</strong> {{ session('fail') }}
                </div>
            @endif
            <div class="widget-content widget-content-area br-6">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Data Report</h4>
                    </div>
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12 mt-3 mb-0" style="margin-left: 15px">
                        <button type="button" class="btn btn-success mb-2 mr-2" data-toggle="modal"
                            data-target="#fadeinModal"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="12" y1="8" x2="12" y2="16"></line>
                                <line x1="8" y1="12" x2="16" y2="12"></line>
                            </svg> Add Data</button>
                    </div>
                </div>
                <div id="read" class="table-responsive mb-4 mt-1">
                    @include('adm.laporan.read')
                </div>

                <div id="fadeinModal" class="modal animated fadeInDown" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Add Data</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg>
                                </button>
                            </div>
                            <form action="/admin/detail" method="POST">
                                @csrf
                                <div class="modal-body">
                                    @include('adm.laporan.create')
                                </div>
                                <div class="modal-footer">
                                    <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i>
                                        Discard</button>
                                    <button type="submit" class="btn btn-success">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
