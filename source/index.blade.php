@extends('_layouts.master')

@section('body')
<section class="container max-w-6xl mx-auto px-6 py-10 md:py-12">
    <div class="flex flex-col-reverse mb-10 lg:flex-row lg:mb-24">
        <div class="mt-8">
            <h1 id="intro-docs-template">{{ $page->siteName }}</h1>

            <h2 id="intro-powered-by-jigsaw" class="font-light mt-4">{{ $page->siteDescription }}</h2>

            <p class="text-lg">Tu grupo de desarrolladores y entusiastas de Java y la JVM.</p>

            <div class="flex my-10">
                <a href="{{ $page->baseUrl }}/docs/inicio" title="{{ $page->siteName }} getting started" class="bg-blue-500 hover:bg-blue-600 font-normal text-white hover:text-white rounded mr-4 py-2 px-6">Get Started</a>

            </div>
        </div>

        <img src="/assets/img/logo-large.svg" alt="{{ $page->siteName }} large logo" class="mx-auto mb-6 lg:mb-0 ">
    </div>

    <hr class="block my-8 border lg:hidden">

    <div class="md:flex -mx-2 -mx-4">
        <div class="mb-8 mx-3 px-2 md:w-1/3">
            <img src="/assets/img/icon-window.svg" class="h-12 w-12" alt="window icon">

            <h3 id="intro-laravel" class="text-2xl text-blue-900 mb-0">Bienvenid@</h3>

            <p>Tanto si eres nuev@ en este mundillo que rodea a la Máquina Virtual Java, como si estás curtido en las mil batallas del bytecode, has encontrado el sitio perfecto para aprender, enseñar y conocer gente interesante.</p>
        </div>

        <div class="mb-8 mx-3 px-2 md:w-1/3">
            <img src="/assets/img/icon-terminal.svg" class="h-12 w-12" alt="terminal icon">

            <h3 id="intro-markdown" class="text-2xl text-blue-900 mb-0">Nuestras reuniones presenciales</h3>

            <p>Intentamos reunirnos una o dos veces al mes bajo el formato de una charla técnica + networking. No tenemos un dia al fijo al mes,
                pero solemos planificar las sesiones Martes, Miércoles o Jueves a las 19h. Los encuentros se anuncian a través de la página de MadridJUG en LinkedIn,
                la cuenta de @MadridJUG en X, la cuenta de @MadridJUG en Mastodon y nuestra página del MadridJUG en Meetup.
                ¡Puedes seguirnos en cualquiera de nuestras redes sociales!
                El registro para asistir a las sesiones se realiza en la página del MadridJUG en Meetup..</p>
        </div>

        <div class="mx-3 px-2 md:w-1/3">
            <img src="/assets/img/icon-stack.svg" class="h-12 w-12" alt="stack icon">

            <h3 id="intro-mix" class="text-2xl text-blue-900 mb-0">Nuestras sesiones grabadas</h3>

            <p>Grabamos nuestras sesiones y las publicamos en canal de Youtube, para que puedas seguirlas en remoto o volver a revisarlas cuando lo necesites.</p>
        </div>
    </div>
</section>
@endsection
