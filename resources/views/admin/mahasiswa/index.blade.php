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
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <a href="{{ url('/dashboard/mahasiswa/create') }}" class="btn btn-primary">+ Tambah mahasiswa</a>
        <table class="table table-bordered text-center">
            <tr class="table-success">
                <th>Nim</th>
                <th>Nama</th>
                <th>tmp_lahir</th>
                <th>tgl_lahir</th>
                <th>IPK</th>
                <th>Rombel id</th>
                <th>Prodi id</th>
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
                <a href="{{ url('dashboard/mahasiswa/show', $m->nidn) }}" class="btn btn-primary"><i class="far fa-eye"></i> Lihat</a>
                
                <a href="{{ url('dashboard/mahasiswa/edit', $m->nidn) }}" class="btn btn-warning"><i class="far fa-edit"></i> Edit</a>
                <form class="forms-sample d-inline" action="{{ url('dashboard/mahasiswa/destroy', $m->nidn) }}" method="post">
                    @csrf 
                    @method('delete')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah yakin ingin menghapus data {{ $m->nama }}?')">
                        <i class="far fa-trash-alt"></i> Hapus
                    </button>
                </form>
                
                
            </td>
        </tr>
        @endforeach
        </table>
    </x-slot>
    <x-slot name="footer">
    </x-slot>
</x-layout>