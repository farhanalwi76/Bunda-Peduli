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
    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ session('error') }}</strong>
        </div>
        @endif
     @if(session('pesan'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('pesan') }}</strong>
        </div>
        @endif
        <a href="{{ url('/dashboard/rombel/create') }}" class="btn btn-primary mb-2">+ Tambah Rombel</a>
        <table class="table table-bordered text-center">
            <tr class="table-primary">
                <th>Id</th>
                <th>Kode</th>
                <th>Tahun Masuk</th>
                <th>Dosen PA</th>
                <th>Aksi</th>
            </tr>
        @foreach ($rombongan_belajar as $r)
            <tr>
                <td>{{ $r->id }}</td>
                <td>{{ $r->kode }}</td>
                <td>{{ $r->thn_masuk }}</td>
                <td>{{ $r->dosen_pa }}</td>
                <td>
                    <a href="{{ url('dashboard/rombel/show', $r->id) }}" class="btn btn-primary"><i class="far fa-eye"></i> Lihat</a>
                    <a href="{{ url('dashboard/rombel/edit', $r->id) }}" class="btn btn-warning"><i class="far fa-edit"></i> Edit</a>
                    <form class="forms-sample d-inline" action="{{ url('dashboard/rombel/destroy', $r->id) }}" method="post">
                        @csrf 
                        @method('delete')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah yakin ingin menghapus data Rombel {{ $r->kode }}?')">
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