<x-layout>
    <x-slot name="main_title">
        Halaman Mahasiswa
    </x-slot>
    <x-slot name="header_name">
        Halaman Mahasiswa
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
                <th>Nim</th>
                <th>Nama</th>
                <th>tmp_lahir</th>
                <th>tgl_lahir</th>
                <th>IPK</th>
                <th>Rombel id</th>
                <th>Prodi id</th>
            </tr>
           
        <tr>
            <td>{{ $mahasiswa->nim }}</td>
            <td>{{ $mahasiswa->nama }}</td>
            <td>{{ $mahasiswa->tmp_lahir }}</td>
            <td>{{ $mahasiswa->tgl_lahir }}</td>
            <td>{{ $mahasiswa->ipk }}</td>
            <td>{{ $mahasiswa->rombel_id }}</td>
            <td>{{ $mahasiswa->prodi_id }}</td>
            
        </tr>
        
        </table>
    </x-slot>
    <x-slot name="footer">
    </x-slot>
</x-layout>