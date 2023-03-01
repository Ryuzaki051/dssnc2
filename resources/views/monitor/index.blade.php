<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Selector de monitoreo - Servidores
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- @livewire('monitor.show-detectors') --}}

                <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="xd-tab" data-bs-toggle="tab" data-bs-target="#xd"
                            type="button" role="tab" aria-controls="xd" aria-selected="true">Xendata</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="detector-tab" data-bs-toggle="tab" data-bs-target="#detector"
                            type="button" role="tab" aria-controls="detector"
                            aria-selected="false">Detector</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="omp-tab" data-bs-toggle="tab" data-bs-target="#omp"
                            type="button" role="tab" aria-controls="omp" aria-selected="false">OMP</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    {{-- Modulo Xendata --}}
                    <div class="tab-pane fade show active" id="xd" role="tabpanel" aria-labelledby="xd-tab">

                        <div class="card">
                            <div class="card-body">

                                <div class="d-grid gap-2 d-md-block">
                                    <a href="#" class="btn btn-primary" aria-current="page">Panel de Monitoreo</a>
                                    <a href="#" class="btn btn-primary">Consulta</a>
                                    <a href="#" class="btn btn-primary">Historico</a>
                                </div>

                            </div>
                        </div>



                    </div>
                    {{-- Modulo Detector --}}
                    <div class="tab-pane fade" id="detector" role="tabpanel" aria-labelledby="detector-tab">
                        <div class="card">
                            <div class="card-body">

                                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                    <a href="{{ route('detector.listado') }}" class="btn btn-primary" aria-current="page">Panel de Monitoreo</a>
                                    <a href="#" class="btn btn-primary">Consulta</a>
                                    <a href="#" class="btn btn-primary">Historico</a>
                                </div>

                            </div>
                        </div>


                    </div>
                    {{-- Modulo OMP --}}
                    <div class="tab-pane fade" id="omp" role="tabpanel" aria-labelledby="omp-tab">
                        <div class="card">
                            <div class="card-body">

                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <a href="#" class="btn btn-primary" aria-current="page">Panel de Monitoreo</a>
                                    <a href="#" class="btn btn-primary">Consulta</a>
                                    <a href="#" class="btn btn-primary">Historico</a>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
