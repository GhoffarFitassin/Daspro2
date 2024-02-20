<div class="mt-0">
    <div class="form-group">
        <label for="inv">Inv Code</label>
        <select id="inv" class="form-control selectpicker" data-live-search="true" name="transaksi_id" required>
            <option selected disabled value="">--- Select Inv Code ---</option>
            @foreach ($transaksis as $transaksi)
            <option value="{{ $transaksi->id }}">{{ $transaksi->kode_invoice }}</option>
            @endforeach
        </select>
    </div>
</div>