@extends('layouts.home')

@section('content')

<!-- header -->
<header class="masthead-about">
    <div class="container px-4 px-lg-5 h-100">
        <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-8 align-self-end w-100">
                <h2 class="text-white fw-bold">PERDAGANGAN UMUM</h2>
                <!-- <hr class="divider" /> -->
            </div>
            <div class="col-lg-8 align-self-baseline w-100">
                <p class="text-white-75 mb-5">
                    Kami menyediakan berbagai macam jasa konstruksi dan perdagangan
                    umum
                </p>
            </div>
        </div>
    </div>
</header>
<!-- end header -->

<main>
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Album example</h1>
                <p class="lead text-body-secondary">
                    Something short and leading about the collection below—its
                    contents, the creator, etc. Make it short and sweet, but not too
                    short so folks don’t simply skip over it entirely.
                </p>
                <p>
                    <a href="#" class="btn btn-primary my-2">Main call to action</a>
                    <a href="#" class="btn btn-secondary my-2">Secondary action</a>
                </p>
            </div>
        </div>
    </section>

    <div class="album py-5 bg-body-tertiary">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach($trades as $trade)
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="image/{{ $trade->image }}" alt="" height="300px">

                        <div class="card-body">
                            <h3 class="card-title">{{ $trade->name }}</h3>
                            <p class="card-text">
                                {{ $trade->description}}
                            </p>
                            <div class="d-flex justify-content-between align-items-center">

                                <button type="button" class="btn btn-utama">
                                    Selengkapnya
                                </button>


                                <small class="text-body-secondary">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach



                {{-- <div class="col">
                    <div class="card shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c" />
                            <text x="50%" y="50%" fill="#eceeef" dy=".3em">
                                Thumbnail
                            </text>
                        </svg>
                        <div class="card-body">
                            <p class="card-text">
                                This is a wider card with supporting text below as a
                                natural lead-in to additional content. This content is a
                                little bit longer.
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">
                                        View
                                    </button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">
                                        Edit
                                    </button>
                                </div>
                                <small class="text-body-secondary">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div> --}}

            </div>
        </div>
    </div>
</main>
<header class="py-5">
    <div class="container px-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xxl-6">
                <div class="text-center my-5">
                    <h1 class="fw-bolder mb-3">
                        Our mission is to make building websites easier for everyone.
                    </h1>
                    <p class="lead fw-normal text-muted mb-4">
                        Start Bootstrap was built on the idea that quality, functional
                        website templates and themes should be available to everyone.
                        Use our open source, free products, or support us by
                        purchasing one of our premium products or services.
                    </p>
                    <a class="btn btn-utama btn-lg" href="#scroll-target">Read our story</a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- About section one-->
<section class="py-5 bg-light" id="scroll-target">
    <div class="container px-5 my-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6">
                <img class="img-fluid rounded mb-5 mb-lg-0" src="assets/img/truk-merah-01.png" alt="..." />
            </div>
            <div class="col-lg-6">
                <h2 class="fw-bolder">Our founding</h2>
                <p class="lead fw-normal text-muted mb-0">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto
                    est, ut esse a labore aliquam beatae expedita. Blanditiis
                    impedit numquam libero molestiae et fugit cupiditate, quibusdam
                    expedita, maiores eaque quisquam.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-5" style="background-color: #11293a; color: white" id="features">
    <div class="container px-5 my-5">
        <h2 class="fw-bolder mb-5 text-center">Lingkup Pekerjaan</h2>
        <div class="row gx-5">
            <div class="col-lg-12">
                <div class="row gx-5 row-cols-1 row-cols-md-2">
                    <div class="col mb-5 h-100">
                        <div class="fitur bg-primary bg-gradient text-white rounded-3 mb-3">
                            <i class="bi bi-truck"></i>
                        </div>
                        <h2 class="h5">Perdagangan Umum</h2>
                        <p class="mb-0">
                            Konstruksi Bangunan Sipil, Seperti Konstruksi saluran Air,
                            Pelabuhan, DAM, Prasarana Sumber Daya Air Lainnya, Jalan
                            Raya, Jalan, Rel Kereta Api, dan Landas Pacu Bandara
                            Konstruksi Bangunan Gedung Seperti Bangunan Komersial dan
                            Bangunan Pendidikan
                        </p>
                    </div>
                    <div class="col mb-5 h-100">
                        <div class="fitur bg-primary bg-gradient text-white rounded-3 mb-3">
                            <i class="bi bi-building"></i>
                        </div>
                        <h2 class="h5">Kontraktor</h2>
                        <p class="mb-0">
                            Perdagangan Besar Beras Perdagangan Besar Minyak dan Lemak
                            Nabati Perdagangan Besar Telur dan Hasil Olahan Telur
                            Perdagangan Besar Susu dan Produk Susu Perdagangan Besar
                            Mesin dan perlengkapan Lainnya Perdagangan Besar Berbagai
                            Macam Material Bangunan
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection