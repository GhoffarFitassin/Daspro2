<table id="alter_pagination" class="table" style="width:100%">
    <thead>
        <tr>
            <th style="width: 10px">#</th>
            <th>Inv Code</th>
            <th>Outlet Name</th>
            <th>Member Name</th>
            <th>Kasir Name</th>
            <th>Date</th>
            <th>Status</th>
            <th style="width: 150px">Payment Status</th>
            <th class="text-center" style="width: 200px">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $transaksi)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $transaksi->kode_invoice }}</td>
                <td>{{ $transaksi->outlet->name }}</td>
                <td>{{ $transaksi->member->name }}</td>
                <td>{{ $transaksi->user->name }}</td>
                <td>{{ $transaksi->tgl }}</td>
                <td>
                    @if ($transaksi->status == 'Baru')
                    <span class="btn btn-outline-dark">Baru</span>
                    @elseif ($transaksi->status == 'Proses')
                    <span class="btn btn-outline-warning">Proses</span>
                    @elseif ($transaksi->status == 'Selesai')
                    <span class="btn btn-outline-primary">selesai</span>
                    @elseif ($transaksi->status == 'Diambil')
                    <span class="btn btn-outline-success">Diambil</span>
                    </td>
                    @endif
                <td>
                    @if ($transaksi->dibayar == 'Dibayar')
                    <span class="btn btn-outline-success">Dibayar</span>
                    @elseif ($transaksi->dibayar == 'Belum dibayar')
                    <span class="btn btn-outline-danger">Belum dibayar</span>
                    </td>
                    @endif
                <td class="text-center">
                    <a href="/admin/transaksi/{{ $transaksi->id }}" class="btn btn-outline-primary"
                        title="Detail"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg></a>
                    <a href="/admin/transaksi/{{ $transaksi->id }}/edit" class="btn btn-outline-warning"
                        title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                        </svg></a>
                    <form action="/admin/transaksi/{{ $transaksi->id }}" method="post" class="d-inline">
                        @csrf
                        @method('delete')
                        <button class="btn btn-outline-danger" onclick="return confirm('Are you sure?')"
                            title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2">
                                <polyline points="3 6 5 6 21 6"></polyline>
                                <path
                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                </path>
                                <line x1="10" y1="11" x2="10" y2="17">
                                </line>
                                <line x1="14" y1="11" x2="14" y2="17">
                                </line>
                            </svg></button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
    {{-- <tfoot>
        <tr>
            <th style="width: 10px">#</th>
            <th>Inv Code</th>
            <th>Outlet Name</th>
            <th>Member Name</th>
            <th>Kasir Name</th>
            <th>Date</th>
            <th>Status</th>
            <th>Payment Status</th>
            <th class="text-center" style="width: 200px">Action</th>
        </tr>
    </tfoot> --}}
</table>
