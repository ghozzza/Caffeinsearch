@extends('user.layouts.assets')

@section('content')
    @include('user.layouts.navbar', ['home' => 'active', 'about' => false, 'feeds' => false])
    @include('user.layouts.bg')

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">
                <div class="row">
                    @include('user.layouts.filter')
                    <div class="col-lg-9 col-md-12 col-sm-12">
                        <h1>
                            <strong>
                                Recommendation
                            </strong>
                        </h1>
                        <div id="carouselExampleControls" class="carousel slide rounded" data-bs-ride="carousel"
                            style="border-radius: 16px;">
                            <div class="carousel-inner rounded ">
                                @if ($results->count() > 0)
                                    @for ($n = 0; $n < 3; $n++)
                                        <?php $x = rand(0, $results->count() - 1); ?>
                                        @if ($n == 0)
                                            <div class="carousel-item active">
                                                <a href="{{ url('details', $results[$x]->id) }}">
                                                    @if ($results[$x]->foto != null)
                                                        @if (substr($results[$x]->foto, 0, 5) === 'https')
                                                            <img src="<?= asset($results[$x]->foto) ?>"
                                                                class="d-block w-100"
                                                                alt="<?= asset('storage/image/' . $results[$x]->foto) ?>">
                                                        @else
                                                            <img src="<?= asset('storage/image/' . $results[$x]->foto) ?>"
                                                                class="d-block w-100"
                                                                alt="<?= asset('storage/image/' . $results[$x]->foto) ?>">
                                                            {{-- <?php continue; ?> --}}
                                                        @endif
                                                    @else
                                                        <img src="<?= asset('user/assets/img/assets1.png') ?>"
                                                            class="d-block w-100"
                                                            alt="<?= asset('user/assets/img/assets1.png') ?>">
                                                    @endif
                                                    <div class="carousel-caption rounded-5"
                                                        style="background-color: #30475E; color: #FFC26F">
                                                        <h6><strong>
                                                                {{ $results[$x]->nama }}
                                                            </strong></h6>

                                                        <i class="fa-solid fa-star me-2"></i>
                                                        {{ number_format($results[$x]->rating, 1) }}/ 5.0
                                                        <br>
                                                        <i class="fa-solid fa-location-dot me-2"></i>
                                                        {{ $results[$x]->lokasi }}
                                                    </div>
                                                </a>
                                            </div>
                                        @else
                                            <div class="carousel-item">
                                                <a href="{{ url('details', $results[$x]->id) }}">
                                                    @if ($results[$x]->foto != null)
                                                        @if (substr($results[$x]->foto, 0, 5) === 'https')
                                                            <img src="<?= asset($results[$x]->foto) ?>"
                                                                class="d-block w-100"
                                                                alt="<?= asset('storage/image/' . $results[$x]->foto) ?>">
                                                        @else
                                                            <img src="<?= asset('storage/image/' . $results[$x]->foto) ?>"
                                                                class="d-block w-100"
                                                                alt="<?= asset('storage/image/' . $results[$x]->foto) ?>">
                                                            {{-- <?php continue; ?> --}}
                                                        @endif
                                                    @else
                                                        <img src="<?= asset('user/assets/img/assets1.png') ?>"
                                                            class="d-block w-100"
                                                            alt="<?= asset('user/assets/img/assets1.png') ?>">
                                                    @endif
                                                    <div class="carousel-caption rounded-5"
                                                        style="background-color: #30475E; color: #FFC26F">
                                                        <h6><strong>
                                                                {{ $results[$x]->nama }}
                                                            </strong></h6>

                                                        <i class="fa-solid fa-star me-2"></i>
                                                        {{ number_format($results[$x]->rating, 1) }} / 5.0
                                                        <br>
                                                        <i class="fa-solid fa-location-dot me-2"></i>
                                                        {{ $results[$x]->lokasi }}
                                                    </div>
                                                </a>
                                            </div>
                                        @endif
                                    @endfor
                                @endif
                            </div>
                            {{-- <div class="carousel-item">
                            <img src="<?= asset('user/assets/img/assets1.png') ?>" class="d-block w-100"
                                alt="<?= asset('user/assets/img/assets1.png') ?>">
                            <div class="carousel-caption">
                                <p>Coffee kamu</p>
                                <p>* rating/5</p>
                                <p>loc Jakarta</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="<?= asset('user/assets/img/assets1.png') ?>" class="d-block w-100"
                                alt="<?= asset('user/assets/img/assets1.png') ?>">
                            <div class="carousel-caption">
                                <p>Coffee Dia</p>
                                <p>* rating/5</p>
                                <p>loc Jakarta</p>
                            </div>
                        </div> --}}

                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <br>
                        <h2>
                            <strong>
                                Popular Cafe
                            </strong>
                        </h2>
                        <div class="row">
                            @if (count($cafe) > 0)
                                @foreach ($cafe as $v)
                                    <div class="col-lg-3 col-md-12 col-sm-12 mb-3">
                                        <div class="card mat-card shadow-sm bg-white rounded">
                                            @if ($v->foto != null)
                                                @if (substr($v->foto, 0, 5) === 'https')
                                                    <img src="<?= asset($v->foto) ?>" class="d-block w-100"
                                                        style="border-radius: 5px 5px 0px 0px"
                                                        alt="<?= asset('storage/image/' . $v->foto) ?>">
                                                @else
                                                    <img src="<?= asset('storage/image/' . $v->foto) ?>"
                                                        class="d-block w-100" style="border-radius: 5px 5px 0px 0px"
                                                        alt="<?= asset('storage/image/' . $v->foto) ?>">
                                                @endif
                                            @else
                                                <img src="<?= asset('user/assets/img/assets1.png') ?>" class="d-block w-100"
                                                    alt="<?= asset('user/assets/img/assets1.png') ?>">
                                            @endif

                                            <div class="card-body ">
                                                <p>
                                                    @if ($v->user_id != 0)
                                                        <strong>
                                                            {{ $v->nama }} <i class="bi bi-patch-check-fill"
                                                                style="color: #3a9bdc"></i>
                                                        </strong>
                                                    @else
                                                        <strong>
                                                            {{ $v->nama }}
                                                        </strong>
                                                    @endif

                                                </p>

                                                <i class="fa-solid fa-star me-2"></i>
                                                {{ number_format($v->rating, 1) }}/ 5.0
                                                <br>
                                                <i class="fa-solid fa-location-dot me-2"></i>{{ $v->lokasi }}
                                                <br>
                                                <a href="{{ url('details/' . $v->id) }}"
                                                    class="btn btn-block btn-solid mt-2">See
                                                    Details</a>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="col-lg-3 col-md-12 col-sm-12">
                                    <a href="{{ url('see-all') }}">
                                        <div class="card mat-card btn-card">
                                            <img src="<?= asset('user/assets/img/see-all.png') ?>" class="card-img-top"
                                                alt="..." style="width: 100%; border-radius: 5px;">
                                            <p class="carousel-caption">
                                                ...
                                                <br>
                                                See All Cafe
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            @else
                                <div class="text-center">
                                    Tidak ada cafe
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->
    @include('user.layouts.footer')
@endsection
