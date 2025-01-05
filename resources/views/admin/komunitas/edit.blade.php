<link rel="icon" href="{{ asset('admin/dist/img/parkir.png') }}" type="image/png">

<x-layout>
    <x-slot name='page_name'>Halaman Edit Data Pengguna</x-slot>
    <x-slot name='page_content'>
        <form class="forms-sample" action="{{ url('dashboard/datapengguna/update', $datapengguna->id) }}" method="POST">
            @csrf
            @method('put')
            <div class="form-group row">
                <label for="nama" class="col-sm-4 col-form-label">Nama Pengguna</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nama" name="nama"
                        placeholder="Masukkan Nama Pengguna" value="{{ $datapengguna->nama }}">
                </div>
            </div>
            
            <div class="form-group row">
                <label for="email" class="col-sm-4 col-form-label">Email Pengguna</label>
                <div class="col-sm-8">
                    <input type="email" class="form-control" id="email" name="email"
                        placeholder="Masukkan Email Pengguna" value="{{ $datapengguna->email }}">
                </div>
            </div>
            
            <div class="form-group row">
                <label for="password" class="col-sm-4 col-form-label">Password Pengguna</label>
                <div class="col-sm-8">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password Pengguna">
                </div>
            </div>

            <div class="form-group row">
                <label for="role" class="col-sm-4 col-form-label">Role Pengguna</label>
                <div class="col-sm-8">
                    <select class="form-control" id="role" name="role">
                        <option value="">Pilih Role Pengguna</option>
                        <option value="admin" {{ $datapengguna->role == 'admin' ? 'selected' : '' }}>Admin</option>
                        <option value="user" {{ $datapengguna->role == 'user' ? 'selected' : '' }}>User</option>
                    </select>
                </div>
            </div>
            
            <div class="form-group row">
                <label for="status" class="col-sm-4 col-form-label">Status Pengguna</label>
                <div class="col-sm-8">
                    <select class="form-control" id="status" name="status">
                        <option value="">Pilih Status Pengguna</option>
                        <option value="active" {{ $datapengguna->status == 'active' ? 'selected' : '' }}>Aktif</option>
                        <option value="inactive" {{ $datapengguna->status == 'inactive' ? 'selected' : '' }}>Non-Aktif</option>
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
    </x-slot>
</x-layout>
