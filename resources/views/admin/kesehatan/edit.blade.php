<x-layout>
    <x-slot name="main_title">
        Pencatatan Kesehatan
    </x-slot>
    <x-slot name="header_name">
        Pencatatan  Kesehatan
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

    @if($kesehatan)
    <form class="forms-sample" action="{{ url('dashboard/kesehatan/update', $kesehatan->id) }}" method="POST">
        @csrf
        @method('put')
        <div class="form-group row">
                <label for="id" class="col-sm-4 col-form-label mb-3">Id</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="id" name="id"
                        placeholder="Masukkan Id">
                </div>
            </div>
            <div class="form-group row">
                <label for="berat_badan" class="col-sm-4 col-form-label mb-3">Berat Badan</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="berat_badan" name="berat_badan"
                    placeholder="Masukkan Berat Badan Anak">
                </div>
            </div>
            <div class="form-group row">
                <label for="tinggi_badan" class="col-sm-4 col-form-label mb-3">Tinggi Badan</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="tinggi_badan" name="tinggi_badan"
                    placeholder="Masukkan Tinggi Badan Anak">
                </div>
            </div>
            <div class="form-group row">
                <label for="lingkar_kepala" class="col-sm-4 col-form-label mb-3">Lingkar Kepala</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="lingkar_kepala" name="lingkar_kepala"
                    placeholder="Masukkan Lingkar Kepala Anak">
                </div>
            </div>
            <div class="form-group row">
                <label for="umur_anak" class="col-sm-4 col-form-label mb-3">Umur Anak</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="umur_anak" name="umur_anak"
                    placeholder="Masukkan Umur Anak">
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
        <p>Data catatan tidak ditemukan.</p>
    @endif
        </x-slot>
    <x-slot name="footer">
    </x-slot>
</x-layout>