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
    @if(session('pesan'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('pesan') }}</strong>
        </div>
        @endif
        <a href="{{ url('/dashboard/prodi/create') }}" class="btn btn-primary mb-2">+ Tambah Prodi</a>
        <table class="table table-bordered text-center">
            <tr class="table-primary">
                <th>Id</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
            @foreach ($prodi as $p)
            <tr>
                <td>{{ $p->id }}</td>
                <td>{{ $p->kode }}</td>
                <td>{{ $p->nama }}</td>
                <td>
                    <a href="{{ url('dashboard/prodi/show', $p->id) }}" class="btn btn-primary"><i class="far fa-eye"></i> Lihat</a>
                    <a href="{{ url('dashboard/prodi/edit', $p->id) }}" class="btn btn-warning"><i class="far fa-edit"></i> Edit</a>
                    <form class="forms-sample d-inline" action="{{ url('dashboard/prodi/destroy', $p->id) }}" method="post">
                        @csrf 
                        @method('delete')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah yakin ingin menghapus Prodi {{ $p->nama }}?')">
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