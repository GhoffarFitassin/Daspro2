@extends('layout.adm')

@section('container')
    <div class="row layout-top-spacing mx-auto" id="cancel-row" style="width: 80%;">

        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="widget-content widget-content-area br-6">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Update Data Member</h4>
                    </div>
                </div>
                <div class="form">
                    <form action="/admin/member/{{ $member->id }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-row">
                            <div class="col-3">
                                <label for="name"><strong>Name</strong></label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Full Name *" value="{{ $member->name }}" required>
                            </div>
                            <div class="col-3">
                                <label for="gender"><strong>Gender</strong></label>
                                <select id="gender" class="form-control basic" name="jenis_kelamin" required>
                                    <option selected>{{ $member->jenis_kelamin }}</option>
                                    <option value="L">L</option>
                                    <option value="P">P</option>
                                </select>
                            </div>
                            <div class="col-3">
                                <label for="ph-number"><strong>Telephone</strong></label>
                                <input type="tel" id="tlp" class="form-control mb-4"
                                    pattern="^[\+]?[\(]?[0-9]{2,4}[\)\s]?[-\s\.]?[0-9]{2,4}[-\s\.]?[0-9]{4}[-\s\.]?[0-9]{3,4}$"
                                    minlength="12" maxlength="17" name="tlp" value="{{ $member->tlp }}" required>
                            </div>
                            <div class="col-3">
                                <label for="alamat"><strong>Address</strong></label>
                                <input type="text" class="form-control" id="alamat" name="alamat"
                                    placeholder="1234 Main St" minlength="5" maxlength="25" value="{{ $member->alamat }}"
                                    required>
                            </div>
                        </div>
                        <div class="form-row mb-4">
                            <div class="col-3">
                                <label for="provinsi"><strong>Province</strong></label>
                                <select id="provinsi" class="form-control basic" name="province_id" required>
                                    <option selected value="{{ $member->province_id }}">{{ $member->province->name }}
                                    </option>
                                    @foreach ($provinces as $provinsi)
                                        <option value="{{ $provinsi->id }}">{{ $provinsi->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-3">
                                <label for="kabupaten"><strong>Regency</strong></label>
                                <select id="kabupaten" class="form-control basic" name="regency_id" required>
                                    <option selected value="{{ $member->regency_id }}">{{ $member->regency->name }}
                                    </option>
                                </select>
                            </div>
                            <div class="col-3">
                                <label for="kecamatan"><strong>District</strong></label>
                                <select id="kecamatan" class="form-control basic" name="district_id" required>
                                    <option selected value="{{ $member->district_id }}">{{ $member->district->name }}
                                    </option>
                                </select>
                            </div>
                            <div class="col-3">
                                <label for="desa"><strong>Village</strong></label>
                                <select id="desa" class="form-control basic" name="village_id" required>
                                    <option selected value="{{ $member->village_id }}">{{ $member->village->name }}
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <a href="/admin/member" class="btn btn-primary">back</a>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
