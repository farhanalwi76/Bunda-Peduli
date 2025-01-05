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
    @if(session('pesan'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('pesan') }}</strong>
        </div>
        @endif
        <a href="{{ url('/dashboard/mahasiswa/create') }}" class="btn btn-primary mb-2">+ Tambah Mahasiswa</a>
        <table class="table table-bordered text-center">
            <tr class="table-primary">
                <th>NIM</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>IPK</th>
                <th>Rombel</th>
                <th>Prodi</th>
                <th>Aksi</th>
            </tr>
            @foreach ($mahasiswa as $m)
        <tr>
            <td>{{ $m->nim }}</td>
            <td>{{ $m->nama }}</td>
            <td>{{ $m->tmp_lahir }}</td>
            <td>{{ $m->tgl_lahir }}</td>
            <td>{{ $m->ipk }}</td>
            <td>{{ $m->prodi_id }}</td>
            <td>{{ $m->rombel_id }}</td>
            <td>
                <a href="{{ url('dashboard/mahasiswa/show', $m->nim) }}" class="btn btn-primary"><i class="far fa-eye"></i> Lihat</a>
                <a href="{{ url('dashboard/mahasiswa/edit', $m->nim) }}" class="btn btn-warning"><i class="far fa-edit"></i> Edit</a>
                <form class="forms-sample d-inline" action="{{ url('dashboard/mahasiswa/destroy', $m->nim) }}" method="post">
                    @csrf 
                    @method('delete')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah yakin ingin menghapus data Mahasiswa {{ $m->nama }}?')">
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