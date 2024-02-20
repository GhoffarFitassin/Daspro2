@extends('layout.own')

@section('container')
    <div class="row layout-top-spacing mx-auto" id="cancel-row" style="width: 70%;">

        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="widget-content widget-content-area br-6">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Update Data Transaksi</h4>
                    </div>
                </div>
                <div class="form">
                    <form action="/owner/detail/{{ $detail->id }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-row">
                            <div class="col">
                                <label for="inv">Inv Code</label>
                                <select id="inv" class="form-control basic" name="transaksi_id" required>
                                    <option selected value="{{ $detail->transaksi_id }}">{{ $detail->transaksi->kode_invoice }}</option>
                                    @foreach ($transaksis as $transaksi)
                                    <option value="{{ $transaksi->id }}">{{ $transaksi->kode_invoice }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col">
                                <label for="outlet">Outlet Name</label>
                                <select id="outlet" class="form-control basic" name="outlet_id" required>
                                    <option selected value="{{ $detail->outlet_id }}">{{ $detail->outlet->name }}</option>
                                    @foreach ($outlets as $outlet)
                                    <option value="{{ $outlet->id }}">{{ $outlet->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label for="paket">Package Name</label>
                                <select id="paket" class="form-control basic" name="paket_id" required>
                                    <option selected value="{{ $detail->paket_id }}">{{ $detail->paket->nama_paket }}</option>
                                    @foreach ($pakets as $paket)
                                    <option value="{{ $paket->id }}">{{ $paket->nama_paket }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col">
                                <label for="member">Member Name</label>
                                <select id="member" class="form-control basic" name="member_id" required>
                                    <option selected value="{{ $detail->member_id }}">{{ $detail->member->name }}</option>
                                    @foreach ($members as $member)
                                    <option value="{{ $member->id }}">{{ $member->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-row" style="width: 10%">
                            <label for="bt">QTY</label>
                            <input type="text" class="form-control" id="dc" name="qty" value="{{ $detail->qty }}"
                            placeholder="10.000" required minlength="1" maxlength="3">
                        </div>
                        <div class="form-row mb-4">
                            <label for="bt">Ket</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="keterangan" required minlength="10" maxlength="100">{{ $detail->keterangan }}</textarea>
                        </div>
                        <div>
                            <a href="/owner/detail" class="btn btn-primary">back</a>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
