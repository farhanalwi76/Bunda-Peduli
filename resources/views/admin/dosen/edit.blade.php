@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

@if($dosen)
    <form class="forms-sample" action="{{ url('dashboard/dosen/update', $dosen->nidn) }}" method="POST">
        @csrf
        <div class="form-group row">
            <label for="nidn" class="col-sm-4 col-form-label">Nidn</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="nidn" name="nidn" value="{{ $dosen->nidn }}" placeholder="Masukkan NIDN">
            </div>
        </div>
        <div class="form-group row">
            <label for="nama" class="col-sm-4 col-form-label">Nama</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $dosen->nama }}" placeholder="Masukkan Nama Lengkap">
            </div>
        </div>
        <div class="form-group row">
            <label for="tmp_lahir" class="col-sm-4 col-form-label">Tempat Lahir</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir" value="{{ $dosen->tmp_lahir }}" placeholder="Masukkan Tempat Lahir">
            </div>
        </div>
        <div class="form-group row">
            <label for="tgl_lahir" class="col-sm-4 col-form-label">Tanggal Lahir</label>
            <div class="col-sm-8">
                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="{{ $dosen->tgl_lahir }}" placeholder="Masukkan Tanggal Lahir">
            </div>
        </div>
        <div class="form-group row">
            <label for="jk" class="col-sm-4 col-form-label">Jenis kelamin</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="jk" name="jk" value="{{ $dosen->jk }}" placeholder="Masukkan Jenis Kelamin L/P">
            </div>
        </div>
        <div class="form-group row">
            <label for="prodi_id" class="col-sm-4 col-form-label">Prodi</label>
            <div class="col-sm-8">
                <select class="form-control" id="prodi_id" name="prodi_id">
                    <option value="">Pilih Prodi</option>
                    @foreach ($prodi as $p)
                        <option value="{{ $p->id }}" {{ $dosen->prodi_id == $p->id ? 'selected' : '' }}>{{ $p->nama }}</option>
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
    <p>Data dosen tidak ditemukan.</p>
@endif