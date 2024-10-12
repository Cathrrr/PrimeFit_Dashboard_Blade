@extends('dashboard')
@section('content')
<!-- Main content -->
<style>
    .gambar {
        height: 100px;
        border-radius: 100px;
        border: 2px solid #ddd;
        background-image: none;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    }

    .gambarkelas {
        width: 300px;
        border-radius: 10px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    }

    .card {
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s;
    }

    .card:hover {
        transform: scale(1.03);
    }

    .rating-icon {
        color: Gold;
    }

    .table {
        border: 1px solid #ddd;
        border-radius: 5px;
        overflow: hidden;
    }
    .table th, .table td {
        vertical-align: middle;
        padding: 15px;
    }

    .hijau {
        background-color: green;
        color: white;
    }
</style>

<div class="content">
    <div class="modal fade" id="staticBackdropDetail" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header hijau">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Detail Kelas</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h2 class="font-weight-bold">Gaming</h2>
                    <div class="d-flex">
                        <p class="card-text font-weight-bold">Instruktur: </p>
                        <p class="card-text ms-1">{{$instruktur}}</p>
                    </div>
                    <div class="d-flex">
                        <p class="card-text font-weight-bold">Kode Instruktur:</p>
                        <p class="card-text ms-1">220711939</p>
                    </div>
                    <div class="d-flex">
                        <p class="card-text font-weight-bold">Hari Kelas:</p>
                        <p class="card-text ms-1">Monday</p>
                    </div>
                    <div class="d-flex">
                        <p class="card-text font-weight-bold">Tanggal:</p>
                        <p class="card-text ms-1">{{date('d F Y')}}</p>
                    </div>
                    <div class="d-flex">
                        <p class="card-text font-weight-bold">Ruang:</p>
                        <p class="card-text ms-1">{{$ruang}}</p>
                    </div>
                    <div class="d-flex">
                        <p class="card-text font-weight-bold">Rating :
                        <div class="ms-1">
                            @for ($i = 0; $i < $rating; $i++)
                                <i class="fas fa-star fa-xs"></i>
                            @endfor
                        </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid justify-content-center d-flex mt-4 mb-4">
        <div class="card" style="border-radius: 0px;">
            <div class="row g-0">
                <div class="col-md-3 d-flex align-items-center">
                    <div class="card-body justify-content-center">
                        <img src="/img/gambar3.jpg" class="img-fluid rounded" style="width: 500px;" alt="">
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card-body">
                        <div class="d-flex mb-2">
                            <h2 class="font-weight-bold">Gaming</h2>
                            <button class="btn btn-success ms-3 mb-2" data-bs-toggle="modal" data-bs-target="#staticBackdropDetail">
                                <i class="fa-regular fa-eye"></i>
                            </button>
                            <h5 class="font-weight-bold ms-auto">Tanggal : {{$tanggal}}</h5>
                        </div>
                        <p class="card-text font-weight-bold">Instruktur : {{$instruktur}}</p>
                        <p class="card-text font-weight-bold">Ruang : {{$ruang}}</p>
                        <p class="card-text font-weight-bold">Total Member : {{count($totalMember)}}</p>
                        <div class="d-flex">
                            <p class="card-text font-weight-bold">Rating :
                                <div class="rating-icon">
                                    @for ($i = 0; $i < $rating; $i++)
                                        <i class="fas fa-star fa-xs"></i>
                                    @endfor
                                </div>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="width: 60vw;">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Section 1: Informasi Umum
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>Informasi umum mengenai kelas. </strong>Detail umum kelas dapat dimasukkan di sini.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Section 2: Jadwal kelas
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p><strong>Hari Senin, 7 Oktober 2024</strong></p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Section 3: Infomasi Tambahan
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p><strong>Silahkan Diisi bebas</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-4" style="width: 77vw;">
        <div class="d-flex">
            <h2><strong>Daftar Member</strong></h2>      
            <button type="button" class="btn btn-primary ms-auto me-5" id="liveToastBtn"><i class="nav-icon fas fa-check"></i> Presensi</button>
            <div class="toast-container position-fixed bottom-0 end-0 p-3">
                <div id="liveToast" style="border-radius: 0;" class="toast text-bg-primary" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="d-flex">
                        <div class="toast-body">
                            <i class="nav-icon fas fa-check"></i> Berhasil mempresensi Member!
                        </div>
                    </div>
                </div> 
            </div>
        </div>
        
        <div class="row mt-3 d-flex justify-content-center align-items-center align-content-center m-auto">
            @foreach ($totalMember as $member)
                <div class="col-md-4 mb-4">
                    @if ($member['jenisKartu'] == 'Gold')
                        <div class="card bg-yellow border-dark" style="width: 20rem; border-width: 3px;">
                    @elseif ($member['jenisKartu'] == 'Silver')
                        <div class="card bg-secondary border-dark text-white" style="width: 20rem; border-width: 3px;">
                    @else
                        <div class="card bg-black border-0" style="width: 20rem;">
                    @endif
                        <img src="/img/gambar4.jpeg" class="card-img-top" style="height: 12vw;" alt="">
                        <div class="card-body">
                            <h5 class="font-weight-bold">{{$member['nama']}}</h5>
                            <p class="card-text">Email: {{$member['email']}}</p>
                            <p class="card-text">No Telp: {{$member['noTelp']}}</p>
                            <p class="card-text">Jenis Kartu:
                                @if ($member['jenisKartu'] == 'Gold')
                                    <span class="badge rounded-pill border border-2 border-black">{{$member['jenisKartu']}}</span>                                
                                @elseif ($member['jenisKartu'] == 'Silver')
                                    <span class="badge rounded-pill border border-2 border-black">{{$member['jenisKartu']}}</span>
                                @else
                                    <span class="badge rounded-pill border border-2 border-white">{{$member['jenisKartu']}}</span>
                                @endif
                            </p>
                            <p class="card-text">Metode Pembayaran:
                                @if ($member['metodePembayaran'] == 'Hutang Teman')
                                    <span class="badge text-bg-danger p-1">{{$member['metodePembayaran']}}</span>
                                @elseif ($member['metodePembayaran'] == 'Langsung Bayar')
                                    <span class="badge text-bg-primary p-1">{{$member['metodePembayaran']}}</span>
                                @else
                                    <span class="badge text-bg-warning p-1">{{$member['metodePembayaran']}}</span>
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</div>

<script>
    const toastTrigger = document.getElementById('liveToastBtn')
    const toastLiveExample = document.getElementById('liveToast')
    if (toastTrigger) {
        toastTrigger.addEventListener('click', () => {
            const toast = new bootstrap.Toast(toastLiveExample)
            
            toast.show()
        })
    }
</script>

@endsection