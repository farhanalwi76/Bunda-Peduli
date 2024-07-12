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
        <form class="forms-sample" action="{{ url('dashboard/rombel/store') }}" method="POST">
            @csrf
            <div class="form-group row">
                <label for="id" class="col-sm-4 col-form-label mb-3">Id</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="id" name="id"
                        placeholder="Masukkan Id">
                </div>
            </div>
            <div class="form-group row">
                <label for="kode" class="col-sm-4 col-form-label mb-3">Kode</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="kode" name="kode"
                        placeholder="Masukkan Kode">
                </div>
            </div>
            <div class="form-group row">
                <label for="thn_masuk" class="col-sm-4 col-form-label mb-3">Tahun Masuk</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="thn_masuk" name="thn_masuk" placeholder="Masukkan Tahun Masuk">
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="dosen_pa" class="col-sm-4 col-form-label">Dosen</label>
                <div class="col-sm-8">
                    <select class="form-control" name="dosen_pa" id="dosen_pa">
                    <option value="">Pilih Dosen</option>
                        @foreach ($dosen as $dsn)
                            <option value="{{ $dsn->nidn }}">{{ $dsn->nama }}</option>
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
        </x-slot>
    <x-slot name="footer">
    </x-slot>
</x-layout>