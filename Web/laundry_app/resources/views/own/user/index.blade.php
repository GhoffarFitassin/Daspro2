@extends('layout.own')

@section('container')
    <div class="row layout-top-spacing" id="cancel-row">

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
            <div class="widget-content widget-content-area br-6">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Data User</h4>
                    </div>
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12 mt-3 mb-0" style="margin-left: 15px">
                        <a href="/owner/user/create" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-plus-circle">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="12" y1="8" x2="12" y2="16"></line>
                                <line x1="8" y1="12" x2="16" y2="12"></line>
                            </svg> Add Data</a>
                    </div>
                </div>
                <div id="read">
                    @include('own.user.read')
                </div>
            </div>
        </div>
    </div>
@endsection
