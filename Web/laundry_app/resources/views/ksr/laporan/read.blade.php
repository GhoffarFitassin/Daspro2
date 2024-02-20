<table id="html5-extension" class="table" style="width:100%">
    <thead>
        <tr>
            <th style="width: 10px">#</th>
            <th>Inv Code</th>
            <th>Outlet Name</th>
            <th>Member Name</th>
            <th>Package type</th>
            <th>QTY</th>
            <th>Date</th>
            <th>Due Date</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $detail)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $detail->transaksi->kode_invoice }}</td>
                <td>{{ $detail->transaksi->outlet->name }}</td>
                <td>{{ $detail->transaksi->member->name }}</td>
                <td>{{ $detail->transaksi->paket->jenis }}</td>
                <td>{{ $detail->transaksi->qty }}</td>
                <td>{{ $detail->transaksi->tgl }}</td>
                <td>{{ $detail->transaksi->batas_waktu }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
