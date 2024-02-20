@extends('layout.own')

@section('container')
    <div class="row layout-top-spacing">
        <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">
            <div class="widget-content-area br-4">
                <div class="widget-one">

                    <h6>welcome to the owner dashboard!</h6>

                    <p class="">Welcome owner {{ auth()->user()->name }}, with the development of
                        advanced technology, even a laundry business can be made easier by managing data digitally via a
                        computer.</p>

                    <p class="">This web is a laundry management web that can make it easier for a laundry business to
                        process data, you as a cashier can process data from processing report data to generating reports.
                    </p>

                </div>
            </div>
        </div>

    </div>
@endsection
