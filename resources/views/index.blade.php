<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Berita Terbaru</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
            crossorigin="anonymous"
        />
    </head>
    <body>
        <div class="container">
            @if (isset($error))
            <p>{{ $error }}</p>
            @else {{-- Title --}}
            <div class="title text-center fs-1 fw-bold mt-5">
                <h1>BERITA TERBARU</h1>
                <hr />
            </div>
            {{-- Content --}}
            <div class="row">
                @foreach ($news as $a)
                <div class="col-sm-6">
                    <a
                        href="{{ $a['link'] }}"
                        target="_blank"
                        style="text-decoration: none"
                    >
                        <div class="card mb-3">
                            <img
                                src="{{ $a['photo_url'] }}"
                                class="card-img-top"
                                alt="{{ $a['title'] }}"
                                style="height: 15rem"
                            />
                            <div class="card-body">
                                <h5 class="card-title fs-4 fw-bolder">
                                    {{ $a['title'] }}
                                </h5>
                                <p class="card-text lh-sm">
                                    {{ $a['snippet'] }}
                                </p>
                                <p class="card-text fst-italic">
                                    <small
                                        class="text-body-secondary text-decoration-underline"
                                    >
                                        Source: {{ $a['source_name'] }}
                                    </small>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </body>
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"
    ></script>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"
    ></script>
</html>
