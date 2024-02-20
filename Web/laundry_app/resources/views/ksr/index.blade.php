@extends('layout.ksr')

@section('container')
    <div class="row layout-top-spacing">
        <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">
            <div class="widget-content-area br-4">
                <div class="widget-one">

                    <h6>welcome to the Kasir dashboard!</h6>


                    <p class="">Welcome Kasir {{ auth()->user()->name }}, with the development of
                        advanced technology, even a laundry business can be made easier by managing data digitally via a
                        computer.</p>

                    <p class="">This website is a laundry management web that can make it easier for a laundry business
                        to process data, you as an Kasir can process data from processing outlet data, transactions to
                        generating reports.</p>

                </div>
            </div>
        </div>

    </div>
@endsection
