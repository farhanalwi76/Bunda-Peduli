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
        <a href="{{ url('/dashboard/dosen/create') }}" class="btn btn-primary mb-2">+ Tambah Dosen</a>
        <table class="table table-bordered text-center">
            <tr class="table-primary">
                <th>NIDN</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Gender</th>
                <th>Prodi</th>
                <th>Aksi</th>
            </tr>
        @foreach ($dosen as $d)
            <tr>
                <td>{{ $d->nidn }}</td>
                <td>{{ $d->nama }}</td>
                <td>{{ $d->tmp_lahir }}</td>
                <td>{{ $d->tgl_lahir }}</td>
                <td>{{ $d->jk }}</td>
                <td>{{ $d->prodi ? $d->prodi->nama : 'Prodi tidak ditemukan' }}</td>
                <td>
                    <a href="{{ url('dashboard/dosen/show', $d->nidn) }}" class="btn btn-primary"><i class="far fa-eye"></i> Lihat</a>
                    <a href="{{ url('dashboard/dosen/edit', $d->nidn) }}" class="btn btn-warning"><i class="far fa-edit"></i> Edit</a>
                    <form class="forms-sample d-inline" action="{{ url('dashboard/dosen/destroy', $d->nidn) }}" method="post">
                        @csrf 
                        @method('delete')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah yakin ingin menghapus Dosen {{ $d->nama }}?')">
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