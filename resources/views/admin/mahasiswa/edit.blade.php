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
    @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

@if($mahasiswa)

    <form class="forms-sample" action="{{ url('dashboard/mahasiswa/update', $mahasiswa->nim) }}" method="POST">
        @csrf
        @method('put')
        <div class="form-group row">
            <label for="nim" class="col-sm-4 col-form-label">Nim</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="nim" name="nim" value="{{ $mahasiswa->nim }}" placeholder="Masukkan Nim">
            </div>
        </div>
        <div class="form-group row">
            <label for="nama" class="col-sm-4 col-form-label">Nama</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $mahasiswa->nama }}" placeholder="Masukkan Nama Lengkap">
            </div>
        </div>
        <div class="form-group row">
            <label for="tmp_lahir" class="col-sm-4 col-form-label">Tempat Lahir</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir" value="{{ $mahasiswa->tmp_lahir }}" placeholder="Masukkan Tempat Lahir">
            </div>
        </div>
        <div class="form-group row">
            <label for="tgl_lahir" class="col-sm-4 col-form-label">Tanggal Lahir</label>
            <div class="col-sm-8">
                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="{{ $mahasiswa->tgl_lahir }}" placeholder="Masukkan Tanggal Lahir">
            </div>
        </div>
        <div class="form-group row">
            <label for="iok" class="col-sm-4 col-form-label">IPK</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="ipk" name="ipk" value="{{ $mahasiswa->ipk }}" placeholder="Masukkan IPK">
            </div>
        </div>
        <div class="form-group row">
            <label for="rombel_id" class="col-sm-4 col-form-label">Rombel</label>
            <div class="col-sm-8">
                <select class="form-control" id="rombel_id" name="rombel_id">
                    <option value="">Pilih Rombel</option>
                    @foreach ($rombel_belajar as $r)
                        <option value="{{ $r->id }}" {{ $mahasiswa->rombel_id == $r->id ? 'selected' : '' }}>{{ $r->kode }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="prodi_id" class="col-sm-4 col-form-label">Prodi</label>
            <div class="col-sm-8">
                <select class="form-control" id="prodi_id" name="prodi_id">
                    <option value="">Pilih Prodi</option>
                    @foreach ($prodi as $p)
                        <option value="{{ $p->id }}" {{ $mahasiswa->prodi_id == $p->id ? 'selected' : '' }}>{{ $p->nama }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-4"></div>
            <div class="col-sm-8">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-warning">Reset</button>
            </div>
        </div>
    </form>
@else
    <p>Data Mahasiswa tidak ditemukan.</p>
@endif
        </x-slot>
    <x-slot name="footer">
    </x-slot>
</x-layout>