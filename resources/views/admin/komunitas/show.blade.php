<link rel="icon" href="{{ asset('admin/dist/img/parkir.png') }}" type="image/png">

<x-layout>
    <x-slot name='page_name'>Halaman Data Pengguna / Detail</x-slot>
    <x-slot name='page_content'>
        <table class="table table-bordered">
            <tr class="table-success">
                <th>No</th>
                <th>Id Pengguna</th>
                <th>Nama Pengguna</th>
                <th>Email</th>
                <th>Role</th>
                <th>Status</th>
            </tr>
            <tr>
                <td>1</td>
                <td>{{ $datapengguna->id }}</td>
                <td>{{ $datapengguna->nama }}</td>
                <td>{{ $datapengguna->email }}</td>
                <td>{{ $datapengguna->role }}</td>
                <td>{{ $datapengguna->status }}</td>
            </tr>
        </table>
    </x-slot>
</x-layout>
