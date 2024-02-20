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
                    <form action="/admin/transaksi" class="select" method="POST">
                        @csrf
                        <div class="form-row mb-4">
                            <div class="col-4">
                                <label for="inv"><strong>Inv Code</strong></label>
                                <input type="text" class="form-control" id="inv" name="kode_invoice"
                                    value="{{ 'INV-' . $kd }}" placeholder="Full Name *" required readonly>
                            </div>
                            <div class="col-4">
                                <label for="bt"><strong>Additional Price</strong></label>
                                <input type="text" class="form-control" id="bt" name="biaya_tambahan"
                                    placeholder="10.000" required minlength="3" maxlength="6"
                                    onkeyup="this.value=this.value.replace(/[^0-9]/g, '')"
                                    value="{{ old('biaya_tambahan') }}">
                            </div>
                            <div class="col-4">
                                <label for="qty"><strong>QTY</strong></label>
                                <input type="text" class="form-control" id="qty" name="qty" placeholder="10"
                                    required maxlength="3" onkeyup="this.value=this.value.replace(/[^0-9]/g, '')"
                                    value="{{ old('diskon') }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-4">
                                <label for="outlet"><strong>Outlet Name</strong></label>
                                <select id="outlet" class="form-control basic" name="outlet_id" required>
                                    <option selected disabled value="">--- Select Outlet Name ---</option>
                                    @foreach ($outlets as $outlet)
                                        <option value="{{ $outlet->id }}">{{ $outlet->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-4">
                                <label for="paket"><strong>Paket Name</strong></label>
                                <select id="paket" class="form-control basic" name="paket_id" required>
                                    <option selected disabled  value="">--- Select Paket Name ---</option>
                                    @foreach ($pakets as $paket)
                                        <option value="{{ $paket->id }}">{{ $paket->nama_paket }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-4">
                                <label for="user"><strong>Cashier Name</strong></label>
                                <select id="user" class="form-control basic" name="user_id" required>
                                    <option selected disabled  value="">--- Select Cashier Name ---</option>
                                    @foreach ($data as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-row mb-4">
                            <div class="col-4">
                                <label for="member"><strong>Member Name</strong></label>
                                <select id="member" class="form-control basic" name="member_id" required>
                                    <option selected disabled  value="">--- Select Member Name ---</option>
                                    @foreach ($members as $member)
                                        <option value="{{ $member->id }}">{{ $member->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-4">
                                <label for="status"><strong>Status</strong></label>
                                <select id="status" class="form-control basic" name="status" required>
                                    <option selected disabled  value="">--- Select Status ---</option>
                                    <option>Baru</option>
                                    <option>Proses</option>
                                    <option>Selesai</option>
                                    <option>Diambil</option>
                                </select>
                            </div>
                            <div class="col-4">
                                <label for="pstatus"><strong>Payment Status</strong></label>
                                <select id="pstatus" class="form-control basic" name="dibayar" required>
                                    <option selected disabled  value="">--- Select Payment Status ---</option>
                                    <option>Belum dibayar</option>
                                    <option>Dibayar</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <a href="/admin/transaksi" class="btn btn-primary">back</a>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
{{-- <input type="tel" class="form-control mb-4" pattern="^[\+]?[\(]?[0-9]{2,4}[\)\s]?[-\s\.]?[0-9]{2,4}[-\s\.]?[0-9]{4}[-\s\.]?[0-9]{3,4}$" minlength="12" maxlength="17" name="tlp" placeholder="+62 899-9999-9***/0899-9999-9***" required> --}}
