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
        <form class="forms-sample" action="{{ url('dashboard/mahasiswa/store') }}" method="POST">
            @csrf
            <div class="form-group row">
                <label for="nim" class="col-sm-4 col-form-label mb-3">NIM</label>
                <div class="col-sm-8">
                    <input type="number" class="form-control" id="nim" name="nim"
                        placeholder="Masukkan NIM">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-4 col-form-label mb-3">Nama</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nama" name="nama"
                        placeholder="Masukkan Nama Lengkap">
                </div>
            </div>
            <div class="form-group row">
                <label for="tmp_lahir" class="col-sm-4 col-form-label mb-3">Tempat Lahir</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir"
                        placeholder="Masukkan Tempat Lahir">
                </div>
            </div>
            <div class="form-group row">
                <label for="tgl_lahir" class="col-sm-4 col-form-label mb-3">Tanggal Lahir</label>
                <div class="col-sm-8">
                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir"
                        placeholder="Masukkan Tanggal Lahir">
                </div>
            </div>
            <div class="form-group row">
                <label for="ipk" class="col-sm-4 col-form-label mb-3">IPK</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="ipk" name="ipk"
                        placeholder="Masukkan IPK">
                </div>
            </div>
            <div class="form-group row">
                <label for="rombel_id" class="col-sm-4 col-form-label mb-3">Rombongan Belajar</label>
                <div class="col-sm-8">
                    <select class="form-control" id="rombel_id" name="rombel_id">
                        <option value="">Pilih Rombel</option>
                        @foreach ($rombongan_belajar as $rombel)
                        <option value="{{$rombel->id}}">{{$rombel->kode}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="prodi_id" class="col-sm-4 col-form-label">Prodi</label>
                <div class="col-sm-8">
                    <select class="form-control" id="prodi_id" name="prodi_id">
                        <option value="">Pilih Prodi</option>
                        @foreach ($prodi as $prodi)
                        <option value="{{$prodi->id}}">{{$prodi->nama}}</option>
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