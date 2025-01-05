<x-layout>
    <x-slot name="main_title">
        Dashboard Bunda Peduli x Flaminggo
    </x-slot>
    <x-slot name="header_name">
        Komunitas Bunda Peduli
    </x-slot>
    <x-slot name="subheader_name">
    </x-slot>
    <x-slot name="subsubheader_name">
        
    </x-slot>
    <x-slot name="title">
    </x-slot>
    <x-slot name="main_content">
        <div class="container mt-4">
            <h3 class="mb-3 text-center">Temukan Komunitas Anda</h3>
            <div class="row justify-content-center">
                <!-- Komunitas Kehamilan -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                    <img src="/admin/src/images/img/ibuanak.jpg" alt="Admin Image" class="card-img-top" alt="Kehamilan">
                        <div class="card-body text-center">
                            <h5 class="card-title">Kehamilan</h5>
                            <a href="https://www.instagram.com/kehamilan" target="_blank" class="btn btn-pink">Gabung</a>
                        </div>
                    </div>
                </div>
                <!-- Komunitas Parenting -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                    <img src="/admin/src/images/img/ibu.jpg" alt="Admin Image" class="card-img-top" alt="Parenting">
                        <div class="card-body text-center">
                            <h5 class="card-title">Parenting</h5>
                            <a href="https://www.instagram.com/parenting" target="_blank" class="btn btn-pink">Gabung</a>
                        </div>
                    </div>
                </div>
                <!-- Komunitas Nutrisi -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                    <img src="/admin/src/images/img/nutrisi.jpg" alt="Admin Image" class="card-img-top" alt="Nutrisi">
                        <div class="card-body text-center">
                            <h5 class="card-title">Nutrisi</h5>
                            <a href="https://www.instagram.com/nutrisi" target="_blank" class="btn btn-pink">Gabung</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
    <x-slot name="footer">
    </x-slot>
</x-layout>

<style>
    .btn-pink {
        background-color: #ffb6c1; /* Warna pink muda */
        color: white;
        border: none;
        border-radius: 20px;
        padding: 10px 20px;
        font-size: 16px;
        transition: all 0.3s ease;
    }

    .btn-pink:hover {
        background-color: #ff8fa3; /* Warna pink sedikit lebih gelap saat hover */
        color: white;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
    }

    .card {
        border: none;
        border-radius: 10px;
        overflow: hidden;
    }

    .card-img-top {
        height: 180px;
        object-fit: cover;
    }

    .card-body h5 {
        font-weight: bold;
        margin-bottom: 15px;
    }

    .container h3 {
        font-weight: bold;
        color: #333;
    }
</style>
