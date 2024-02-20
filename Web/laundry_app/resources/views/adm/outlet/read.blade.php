<table id="alter_pagination" class="table" style="width:100%">
    <thead>
        <tr>
            <th style="width: 10px">#</th>
            <th class="text-center">Name</th>
            <th class="text-center">Address</th>
            <th class="text-center" >Telephone</th>
            <th class="text-center" style="width: 200px">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $outlet)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $outlet->name }}</td>
                <td>{{ $outlet->alamat }}, {{ $outlet->village->name }}, {{ $outlet->district->name }},
                    {{ $outlet->regency->name }}, {{ $outlet->province->name }}</td>
                <td>{{ $outlet->tlp }}</td>
                <td class="text-center">
                    <a href="/admin/outlet/{{ $outlet->id }}/edit" class="btn btn-outline-warning"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-edit">
                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                        </svg></a>
                    <form action="/admin/outlet/{{ $outlet->id }}" method="post" class="d-inline">
                        @csrf
                        @method('delete')
                        <button class="btn btn-outline-danger" onclick="return confirm('Are you sure?')"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-trash-2">
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
</table>
{{-- <script>
    $(document).ready(function() {
        $('#alter_pagination').DataTable( {
            "pagingType": "full_numbers",
            "oLanguage": {
                "oPaginate": { 
                    "sFirst": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>',
                    "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                    "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>',
                    "sLast": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>'
                },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
               "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7 
        });
        $("#ph-number").inputmask({mask:"09999999999"});
    } );
</script> --}}
