@extends('layout.adm')

@section('container')
    <div class="row layout-top-spacing mx-auto" id="cancel-row" style="width: 80%;">

        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="widget-content widget-content-area br-6">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Add Data Outlet</h4>
                    </div>
                </div>
                <div class="form">
                    <form action="/admin/outlet" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="col-4">
                                <label for="lFullName"><strong>Full Name</strong></label>
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Full Name *" required
                                    onkeyup="this.value=this.value.replace(/[^a-zA-Z ]/g, '')" value="{{ old('name') }}">
                            </div>
                            <div class="col-4">
                                <label for="ph-number"><strong>No. Telp</strong></label>
                                <input type="tel" id="tlp" class="form-control mb-4"
                                    pattern="^[\+]?[\(]?[0-9]{2,4}[\)\s]?[-\s\.]?[0-9]{2,4}[-\s\.]?[0-9]{4}[-\s\.]?[0-9]{3,4}$"
                                    minlength="12" maxlength="17" name="tlp"
                                    placeholder="+62 899-9999-9***/0899-9999-9***" required value="{{ old('tlp') }}">
                            </div>
                            <div class="col-4">
                                <label for="inputAddress"><strong>Address</strong></label>
                                <input type="text" class="form-control" id="alamat" name="alamat"
                                    placeholder="1234 Main St" required minlength="5" maxlength="25" value="{{ old('alamat') }}">
                            </div>
                        </div>
                        <div class="form-row mb-4">
                            <div class="col-3">
                                <label for="provinsi"><strong>Province</strong></label>
                                <select id="provinsi" class="form-control basic" name="province_id" required>
                                    <option selected disabled value="">--- Select Province ---</option>
                                    @foreach ($provinces as $provinsi)
                                        <option value="{{ $provinsi->id }}">{{ $provinsi->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-3">
                                <label for="kabupaten"><strong>Regency</strong></label>
                                <select id="kabupaten" class="form-control basic" name="regency_id" required>
                                    <option selected disabled value="">--- Select Regency ---</option>
                                </select>
                            </div>
                            <div class="col-3">
                                <label for="kecamatan"><strong>District</strong></label>
                                <select id="kecamatan" class="form-control basic" name="district_id" required>
                                    <option selected disabled value="">--- Select District ---</option>
                                </select>
                            </div>
                            <div class="col-3">
                                <label for="desa"><strong>Village</strong></label>
                                <select id="desa" class="form-control basic" name="village_id" required>
                                    <option selected disabled value="">--- Select Village ---</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <a href="/admin/outlet" class="btn btn-primary">back</a>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
