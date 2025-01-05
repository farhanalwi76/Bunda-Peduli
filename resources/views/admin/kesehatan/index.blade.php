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
    @if(session('pesan'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('pesan') }}</strong>
        </div>
        @endif
        <a href="{{ url('/dashboard/kesehatan/create') }}" class="btn btn-primary mb-3" style="background-color: #EBA199; border-color: #EBA199; border-radius: 20px;">+ Tambah Catatan</a>
        <table class="table table-bordered text-center">
            <tr class="table-primary">
                <th>Id</th>
                <th>Berat Badan</th>
                <th>Tinggi Badan</th>
                <th>Lingkar Kepala</th>
                <th>Umur Anak</th>
                <th>Aksi</th>
            </tr>
            @foreach ($kesehatan as $k)
            <tr>
                <td>{{ $k->id }}</td>
                <td>{{ $k->berat_badan }}</td>
                <td>{{ $k->tinggi_badan }}</td>
                <td>{{ $k->lingkar_kepala }}</td>
                <td>{{ $k->umur_anak }}</td>
                <td>
                    <a href="{{ url('dashboard/kesehatan/show', $k->id) }}" class="btn btn-primary"><i class="far fa-eye"></i> Lihat</a>
                    <a href="{{ url('dashboard/kesehatan/edit', $k->id) }}" class="btn btn-warning"><i class="far fa-edit"></i> Edit</a>
                    <form class="forms-sample d-inline" action="{{ url('dashboard/kesehatan/destroy', $k->id) }}" method="post">
                        @csrf 
                        @method('delete')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus catatan {{ $k->nama }}?')">
                            <i class="far fa-trash-alt"></i> Hapus
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </table>
        <script>
            // Menutup alert secara otomatis setelah 5 detik (5000 milidetik)
            window.setTimeout(function() {
                $(".alert").fadeTo(500, 0).slideUp(500, function(){
                    $(this).remove();
                });
            }, 1000); // Durasi dalam milidetik (misalnya 5000 untuk 5 detik)
        </script>
    </x-slot>
    <x-slot name="footer">
    </x-slot>
</x-layout>