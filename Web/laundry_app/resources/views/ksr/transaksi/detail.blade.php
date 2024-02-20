@extends('layout.adm')

@section('container')
    <div class="row layout-top-spacing mx-auto" id="cancel-row" style="width: 50%;">

        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="widget-content widget-content-area br-6">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Data Detail</h4>
                    </div>
                </div>
                <div class="form mt-lg-5">
                    <div class="form-row mb-lg-3">
                        <div class="col">
                            <h6><strong>Inv Code :</strong> <span>{{ $transaksi->kode_invoice }}</span></h6>
                            <h6><strong>Outlet Name :</strong> <span>{{ $transaksi->outlet->name }}</span><br></h6>
                            
                            <h6><strong>Member Name :</strong> <span>{{ $transaksi->member->name }}</span><br></h6>
                            <h6><strong>Member Name :</strong> <span>{{ $transaksi->paket->nama_paket }}</span><br></h6>
                            
                            <h6><strong>Kasir Name :</strong> <span>{{ $transaksi->user->name }}</span><br></h6>
                            
                            <h6><strong>Status :</strong> <span>{{ $transaksi->status }}</span><br></h6>
                            
                        </div>
                        <div class="col">
                            <h6><strong>Date :</strong> <span>{{ $transaksi->tgl }}</span><br></h6>
                            
                            @if ($transaksi->tgl_bayar)
                                <h6><strong>Pay date :</strong> <span>{{ $transaksi->tgl_bayar }}</span><br></h6>
                            @else
                                <h6><strong>Pay Date :</strong> <span>Belum Dibayar</span><br></h6>
                            @endif
                            @if ($transaksi->batas_waktu)
                                <h6><strong>Due Date :</strong> <span>{{ $transaksi->batas_waktu }}</span><br></h6>
                            @else
                                <h6><strong>Due Date :</strong> <span>belum</span><br></h6>
                            @endif
                            
                            
                            <h6><strong>Additional Cost :</strong> <span>{{ $transaksi->biaya_tambahan }}</span><br></h6>
                            
                            <h6><strong>QTY :</strong> <span>{{ $transaksi->qty }}</span><br></h6>
                            <h6><strong>Payment Status :</strong> <span>{{ $transaksi->dibayar }}</span><br></h6>
                            
                        </div>
                    </div>
                    <div>
                        <a href="/admin/transaksi" class="btn btn-primary">back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
{{-- Inv Code

<td>{{ $transaksi->kode_invoice }}</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>


Date





Status
 --}}