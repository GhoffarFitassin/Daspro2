@extends('layout.adm')

@section('container')
    <div class="row layout-top-spacing mx-auto" id="cancel-row" style="width: 80%;">

        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="widget-content widget-content-area br-6">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Add Data Transaksi</h4>
                    </div>
                </div>
                <div class="form">
                    <form action="/admin/transaksi/{{ $transaksi->id }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-row mb-4">
                            <div class="col-4">
                                <label for="inv">Inv Code</label>
                                <input type="text" class="form-control" id="inv" name="kode_invoice"
                                    placeholder="Full Name *" value="{{ $transaksi->kode_invoice }}" required readonly>
                            </div>
                            <div class="col-4">
                                <label for="bt"><strong>Additional Price</strong></label>
                                <input type="text" class="form-control" id="bt" name="biaya_tambahan"
                                    placeholder="10.000" required minlength="3" maxlength="6"
                                    onkeyup="this.value=this.value.replace(/[^0-9]/g, '')"
                                    value="{{ $transaksi->biaya_tambahan }}">
                            </div>
                            <div class="col-4">
                                <label for="qty"><strong>QTY</strong></label>
                                <input type="text" class="form-control" value="{{ $transaksi->qty }}" id="qty" name="qty" placeholder="10"
                                    required maxlength="3" onkeyup="this.value=this.value.replace(/[^0-9]/g, '')">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-3">
                                <label for="outlet">Outlet Name</label>
                                <select id="outlet" class="form-control basic" name="outlet_id" required>
                                    <option value="{{ $transaksi->outlet_id }}">{{ $transaksi->outlet->name }}</option>
                                    @foreach ($outlets as $outlet)
                                        <option value="{{ $outlet->id }}">{{ $outlet->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-3">
                                <label for="user">Cashier Name</label>
                                <select id="user" class="form-control basic" name="user_id" required>
                                    <option value="{{ $transaksi->user_id }}">{{ $transaksi->user->name }}</option>
                                    @foreach ($data as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-3">
                                <label for="paket"><strong>Paket Name</strong></label>
                                <select id="paket" class="form-control basic" name="paket_id" required>
                                    <option selected disabled  value="{{ $transaksi->paket_id }}">{{ $transaksi->paket->nama_paket }}</option>
                                    @foreach ($pakets as $paket)
                                        <option value="{{ $paket->id }}">{{ $paket->nama_paket }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-3">
                                <label for="member">Member Name</label>
                                <select id="member" class="form-control basic" name="member_id" required>
                                    <option value="{{ $transaksi->member_id }}">{{ $transaksi->member->name }}</option>
                                    @foreach ($members as $member)
                                        <option value="{{ $member->id }}">{{ $member->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-row mb-4">
                            <div class="col-4">
                                <label for="date">Pay Date</label>
                                <input id="date" class="form-control flatpickr flatpickr-input active" type="text"
                                    placeholder="Select Date.." name="tgl_bayar" value="{{ $transaksi->tgl_bayar }}"
                                    required>
                            </div>
                            <div class="col-4">
                                <label for="status">Status</label>
                                <select id="status" class="form-control basic" name="status" required>
                                    <option selected>{{ $transaksi->status }}</option>
                                    <option>Baru</option>
                                    <option>Proses</option>
                                    <option>Selesai</option>
                                    <option>Diambil</option>
                                </select>
                            </div>
                            <div class="col-4">
                                <label for="pstatus">Payment Status</label>
                                <select id="pstatus" class="form-control basic" name="dibayar" required>
                                    <option selected>{{ $transaksi->dibayar }}</option>
                                    <option>Belum dibayar</option>
                                    <option>Dibayar</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <a href="/admin/transaksi" class="btn btn-primary">back</a>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
