<x-layout>
    <x-slot name="main_title">
        Pencatatan Kesehatan
    </x-slot>
    <x-slot name="header_name">
        Pencatatan Kesehatan
    </x-slot>
    <x-slot name="subheader_name">
    </x-slot>
    <x-slot name="subsubheader_name">
    </x-slot>
    <x-slot name="title">
    </x-slot>
    <x-slot name="main_content">
        <table class="table table-bordered text-center">
            <tr class="table-primary">
                <th>Id</th>
                <th>Berat Badan</th>
                <th>Tinggi Badan</th>
                <th>Lingkar Kepala</th>
                <th>Umur Anak</th>
            </tr> 
            
            <tr>
                <td>{{ $kesehatan->id }}</td>
                <td>{{ $kesehatan->berat_badan }}</td>
                <td>{{ $kesehatan->tinggi_badan }}</td>
                <td>{{ $kesehatan->lingkar_kepala }}</td>
                <td>{{ $kesehatan->umur_anak }}</td>
            </tr>
        </table>
    </x-slot>
    <x-slot name="footer">
    </x-slot>
</x-layout>