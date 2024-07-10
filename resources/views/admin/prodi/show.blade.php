<x-layout>
    <x-slot name="main_title">
        Halaman Prodi
    </x-slot>
    <x-slot name="header_name">
        Halaman Prodi
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
                <th>Id</th>
                <th>Kode</th>
                <th>Nama</th>
            </tr> 
        <tr>
            <td>{{ $prodi->id }}</td>
            <td>{{ $prodi->kode }}</td>
            <td>{{ $prodi->nama }}</td>
        </tr>
        </table>
    </x-slot>
    <x-slot name="footer">
    </x-slot>
</x-layout>