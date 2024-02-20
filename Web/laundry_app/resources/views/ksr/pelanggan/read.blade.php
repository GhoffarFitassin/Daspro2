<table id="alter_pagination" class="table" style="width:100%">
    <thead>
        <tr>
            <th style="width: 10px">#</th>
            <th>Name</th>
            <th>Address</th>
            <th>Gender</th>
            <th class="text-center">Telephone</th>
            <th class="text-center" style="width: 200px">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $member)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $member->name }}</td>
                <td>{{ $member->alamat }}, {{ $member->village->name }}, {{ $member->district->name }},
                    {{ $member->regency->name }}, {{ $member->province->name }}</td>
                <td>{{ $member->jenis_kelamin }}</td>
                <td>{{ $member->tlp }}</td>
                <td class="text-center">
                    <a href="/admin/member/{{ $member->id }}/edit" class="btn btn-outline-warning"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-edit">
                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                        </svg></a>
                    <form action="/admin/member/{{ $member->id }}" method="post" class="d-inline">
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
