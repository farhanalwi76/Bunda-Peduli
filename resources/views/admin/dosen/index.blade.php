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
        @if(session('pesan'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('pesan') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <a href="{{ url('/dashboard/dosen/create') }}" class="btn btn-primary">+ Tambah dosen</a>
        <table class="table table-bordered text-center">
            <tr class="table-success">
                <th>NIDN</th>
                <th>Nama</th>
                <th>tmp_lahir</th>
                <th>tgl_lahir</th>
                <th>Gender</th>
                <th>Prodi id</th>
                <th>Aksi</th>
            </tr>
            @foreach ($dosen as $d)
        <tr>
            <td>{{ $d->nidn }}</td>
            <td>{{ $d->nama }}</td>
            <td>{{ $d->tmp_lahir }}</td>
            <td>{{ $d->tgl_lahir }}</td>
            <td>{{ $d->jk }}</td>
            <td>{{ $d->prodi_id }}</td>
            <td>
                <a href="{{ url('dashboard/dosen/show', $d->nidn) }}" class="btn-primary btn-sm"><i class="far fa-eye"></i> Lihat</a>
                <a href="{{ url('dashboard/dosen/edit', $d->nidn) }}" class="btn-warning btn-sm"><i class="far fa-edit"></i> Edit</a>
                <form class="forms-sample d-inline" action="{{ url('dashboard/dosen/destroy', $d->nidn) }}" method="post">
                    @csrf 
                    @method('delete')
                    <button type="submit" class="btn-sm btn-danger" onclick="return confirm('Apakah yakin ingin menghapus data {{ $d->nama }}?')">
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