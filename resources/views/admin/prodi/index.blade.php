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
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <a href="{{ url('/dashboard/prodi/create') }}" class="btn btn-primary">+ Tambah prodi</a>
        <table class="table table-bordered text-center">
            <tr class="table-success">
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
                <a href="{{ url('dashboard/prodi/show', $p->id) }}" class="btn-primary btn-sm"><i class="far fa-eye"></i> Lihat</a>
                
                <a href="{{ url('dashboard/prodi/edit', $p->id) }}" class="btn-warning btn-sm"><i class="far fa-edit"></i> Edit</a>
                <form class="forms-sample d-inline" action="{{ url('dashboard/prodi/destroy', $p->id) }}" method="post">
                    @csrf 
                    @method('delete')
                    <button type="submit" class="btn-sm btn-danger" onclick="return confirm('Apakah yakin ingin menghapus data {{ $p->nama }}?')">
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