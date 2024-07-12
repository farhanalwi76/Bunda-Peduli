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
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    @if($rombongan_belajar)
        <form class="forms-sample" action="{{ url('dashboard/rombel/update', $rombongan_belajar->id) }}" method="POST">
            @csrf
            @method('put')
            <div class="form-group row">
                <label for="id" class="col-sm-4 col-form-label mb-3">Id</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="id" name="id" value="{{ $rombongan_belajar->id }}" placeholder="Masukkan Id">
                </div>
            </div>
            <div class="form-group row">
                <label for="kode" class="col-sm-4 col-form-label mb-3">Kode</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="kode" name="kode" value="{{ $rombongan_belajar->kode }}" placeholder="Masukkan Kode">
                </div>
            </div>
            <div class="form-group row">
                <label for="thn_masuk" class="col-sm-4 col-form-label mb-3">Tahun Masuk</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="thn_masuk" name="thn_masuk" value="{{ $rombongan_belajar->thn_masuk }}" placeholder="Masukkan Tahun Masuk">
                </div>
            </div>
            <div class="form-group row">
                <label for="dosen_pa" class="col-sm-4 col-form-label">Dosen</label>
                <div class="col-sm-8">
                    <select class="form-control" name="dosen_pa" id="dosen_pa">
                        @foreach ($dosen as $dsn)
                            <option value="{{ $dsn->nidn }}" {{ $dsn->nidn == $rombongan_belajar->dosen_pa ? 'selected' : '' }}> {{ $dsn->nama }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4"></div>
                <div class="col-sm-8 mt-3">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                </div>
            </div>
        </form>
    @else
        <p>Data Rombel tidak ditemukan.</p>
    @endif
    </x-slot>
    <x-slot name="footer">
    </x-slot>
</x-layout>
