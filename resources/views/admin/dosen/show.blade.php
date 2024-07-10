<x-layout>
    <x-slot name="main_title">
        Halaman Dosen
    </x-slot>
    <x-slot name="header_name">
        Halaman Dosen
    </x-slot>
    <x-slot name="subheader_name">
    </x-slot>
    <x-slot name="subsubheader_name">
    </x-slot>
    <x-slot name="title">
    </x-slot>
    <x-slot name="main_content">
       
        <table class="table table-bordered text-center">
            <tr class="table-success">
                <th>NIDN</th>
                <th>Nama</th>
                <th>tmp_lahir</th>
                <th>tgl_lahir</th>
                <th>Gender</th>
                <th>Prodi id</th>
            </tr>
           
        <tr>
            <td>{{ $dosen->nidn }}</td>
            <td>{{ $dosen->nama }}</td>
            <td>{{ $dosen->tmp_lahir }}</td>
            <td>{{ $dosen->tgl_lahir }}</td>
            <td>{{ $dosen->jk }}</td>
            <td>{{ $dosen->prodi_id }}</td>
           
        </tr>
        </table>
    </x-slot>
    <x-slot name="footer">
    </x-slot>
</x-layout>