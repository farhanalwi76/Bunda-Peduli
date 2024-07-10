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
    @if(session('pesan'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('pesan') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <a href="{{ url('/dashboard/rombel/create') }}" class="btn btn-primary">+ Tambah rombel</a>
        <table class="table table-bordered text-center">
            <tr class="table-success"></tr>
                <th>ID</th>
                <th>Kode</th>
                <th>Tahun Masuk</th>
                <th>Dosen PA</th>
                <th>Aksi</th>
            </tr>
            @foreach ($rombongan_belajar as $r)
        <tr></tr>
            <td>{{ $r->id }}</td>
            <td>{{ $r->kode }}</td>
            <td>{{ $r->thn_masuk }}</td>
            <td>{{ $r->dosen_pa }}</td>
            <td>
                <a href="{{ url('dashboard/rombel/show', $r->id) }}" class="btn-primary btn-sm"><i class="far fa-eye"></i> Lihat</a>
                <a href="{{ url('dashboard/rombel/edit', $r->id) }}" class="btn-warning btn-sm"><i class="far fa-edit"></i> Edit</a>
                <form class="forms-sample d-inline" action="{{ url('dashboard/rombel/destroy', $r->id) }}" method="post">
                    @csrf 
                    @method('delete')
                    <button type="submit" class="btn-sm btn-danger" onclick="return confirm('Apakah yakin ingin menghapus data {{ $r->nama }}?')">
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