@extends('../../layouts/main_admin')
@section('contenido')
    <!-- Header-->
    <header class="masthead text-center text-white">
        <div class="masthead-content">
            <div class="container px-5">
                <h1 class="masthead-heading mb-0">Creditos extraescolares</h1>
                <a class="btn btn-primary btn-xl rounded-pill mt-5" href="{{ route('lista') }}">Listado de estudiantes <i class="fa-solid fa-address-book"></i> </a>
            </div>
        </div>
        <div class="bg-circle-1 bg-circle"></div>
        <div class="bg-circle-2 bg-circle"></div>
        <div class="bg-circle-3 bg-circle"></div>
        <div class="bg-circle-4 bg-circle"></div>
    </header>
    <!-- Content section 1-->
    <section id="scroll">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="p-5"><img class="img-fluid rounded-circle" src="{{ asset('img/deportivo.png') }}"></div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="p-5">
                        <h2 class="display-4">Credito deportivo</h2>
                        <p>Esta actividad tiene como competencias adquirir destresa y salud para los alumnos de dicho instituto.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Content section 2-->
    <section>
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <div class="p-5"><img class="img-fluid rounded-circle" src="{{ asset('img/cultural.png') }}"></div>
                </div>
                <div class="col-lg-6">
                    <div class="p-5">
                        <h2 class="display-4">Credito cultural</h2>
                        <p>Esta actividad tiene como proposito incentivar y dar a conocer a los alumnos las tradicones  que tiene nuestra institucion y pueblo en donde se desarrollo el ambiente estudiantil.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Content section 3-->
    <section>
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="p-5"><img class="img-fluid rounded-circle" src="{{ asset('img/civico.jpg') }}"></div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="p-5">
                        <h2 class="display-4">Credito civico</h2>
                        <p>Este actividad tiene como funcion que los estudiantes cuenten con los conocimientos historicos y acontecimietnos importantes de su pais </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-black">
        <div class="container px-5"><p class="m-0 text-center text-white small">Copyright &copy; Orion System 2023</p></div>
    </footer>
@endsection