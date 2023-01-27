<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Monitoreo de detectores
        </h2>
    </x-slot>

    {{--     @section('css') --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.dataTables.min.css">
    {{--     @endsection --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="card">
                    <div class="card-body">

                        <table class="table table-striped" id="dtctr">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Estado</th>
                                    <th>Cevem</th>
                                    <th>IP</th>
                                    <th>mam(%)</th>
                                    <th>storage(%)</th>
                                    <th>opt(%)</th>
                                </tr>
                            </thead>

                            <tfoot></tfoot>

                        </table>

                    </div>
                </div>


            </div>
        </div>
    </div>


    {{--     @section('js') --}}
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>


    <script>
        $('#dtctr').DataTable({
            paging: false,
            responsive: true,
            autoWidth: true,
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel'
            ],
            language: {
                "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
            },
            ajax: "{{ route('detector.data') }}",
            columns: [
                {
                    data: 'id'
                },
                {
                    data: 'state'
                },
                {
                    data: 'cevem'
                },
                {
                    data: 'ip_detector'
                },
                {
                    data: 'mam_prcnt'
                },
                {
                    data: 'storage_prcnt'
                },
                {
                    data: 'opt_prcnt'
                },
            ],

        });
    </script>
    {{--     @endsection --}}


</x-app-layout>


{{-- 
    
      <tbody>
                                @foreach ($detectores as $detector)
                                    <tr>
                                        <td>{{ $detector->id }}</td>
                                        <td>{{ $detector->state }}</td>
                                        <td>{{ $detector->cevem }}</td>
                                        <td>{{ $detector->ip_detector }}</td>
                                        <td>{{ $detector->mam_prcnt }}</td>
                                        <td>{{ $detector->storage_prcnt }}</td>
                                        <td>{{ $detector->opt_prcnt }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
--}}
