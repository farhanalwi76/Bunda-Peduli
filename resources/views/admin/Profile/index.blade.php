<x-layout>
    <x-slot name="main_title">
        Halaman Profil Dosen
    </x-slot>
    <x-slot name="header_name">
        Profil Dosen
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

        <!-- Profile Info -->
        <div class="profile-info">
            <h4>Informasi Profil Dosen</h4>
            <table class="table table-bordered text-center">
                <tr>
                    <th>NIDN</th>
                    <td>{{ $dosen->nidn }}</td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td>{{ $dosen->nama }}</td>
                </tr>
                <tr>
                    <th>Tempat Lahir</th>
                    <td>{{ $dosen->tmp_lahir }}</td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td>{{ $dosen->tgl_lahir }}</td>
                </tr>
                <tr>
                    <th>Gender</th>
                    <td>{{ $dosen->jk }}</td>
                </tr>
                <tr>
                    <th>Prodi</th>
                    <td>{{ $dosen->prodi ? $dosen->prodi->nama : 'Prodi tidak ditemukan' }}</td>
                </tr>
            </table>
        </div>

        <!-- Edit and Delete Buttons -->
        <div class="d-flex justify-content-end">
            <a href="{{ url('dashboard/dosen/edit', $dosen->nidn) }}" class="btn btn-warning"><i class="far fa-edit"></i> Edit</a>
            <form class="forms-sample d-inline" action="{{ url('dashboard/dosen/destroy', $dosen->nidn) }}" method="post">
                @csrf 
                @method('delete')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah yakin ingin menghapus Dosen {{ $dosen->nama }}?')">
                    <i class="far fa-trash-alt"></i> Hapus
                </button>
            </form>
        </div>

        <script>
            // Menutup alert secara otomati
