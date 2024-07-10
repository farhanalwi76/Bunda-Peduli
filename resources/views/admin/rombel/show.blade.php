<x-layout>
    <x-slot name="main_title">
        Halaman Rombel
    </x-slot>
    <x-slot name="header_name">
        Halaman Rombel
    </x-slot>
    <x-slot name="subheader_name">
    </x-slot>
    <x-slot name="subsubheader_name">
    </x-slot>
    <x-slot name="title">
    </x-slot>
    <x-slot name="main_content">
        <table class="table table-bordered text-center">
            <tr class="table-success"></tr>
                <th>NIDN</th>
                <th>Kode</th>
                <th>Tahun Masuk</th>
                <th>Dosen PA</th>
                
            </tr>

        <tr></tr>
            <td>{{ $rombongan_belajar->id }}</td>
            <td>{{ $rombongan_belajar->kode }}</td>
            <td>{{ $rombongan_belajar->thn_masuk }}</td>
            <td>{{ $rombongan_belajar->dosen_pa }}</td>
        </tr>
        </table>
    </x-slot>
    <x-slot name="footer">
    </x-slot>
</x-layout>