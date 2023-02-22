<div>

    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Panel General "Renovacion 2023"
    </h2>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.dataTables.min.css">



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="card">
                    <div class="card-body">

                        <table class="table table-striped" id="cvmsoperation">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Estado</th>
                                    <th>Cevem</th>
                                    <th>Asignado</th>
                                    <th>FC2</th>
                                    <th>Libreria</th>
                                    <th>OMP</th>
                                    <th>KVM</th>
                                    <th>Xclarity</th>
                                </tr>
                            </thead>

                            <tfoot></tfoot>

                        </table>

                    </div>
                </div>


            </div>
        </div>
    </div>


    {{-- Scripts --}}
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
        $('#cvmsoperation').DataTable({
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
            ajax: "http://dssnc.test/list_xd",
            columns: [{
                    data: 'cevem_id'
                },

                {
                    data: 'cevem'
                },
                {
                    data: 'state'
                },
                {
                    data: 'name',
                    render: function(data, type, row) {
                        if (type === 'display') {
                            var words = data.split(' ');
                            var text = words[2];
                            return text;

                        }
                        return data;
                    }
                },
                {
                    data: 'url',
                    render: function(data, type, row) {
                        return '<a href="' + data +
                            '" target="_blank" ><img src="{{ asset('images/fc2-logo.png') }}" width="32" height="32"  alt=""></a>'
                    }
                },
                {
                    data: 'xendatas',
                    render: function(data, type, row) {
                        var info = data[0].ip_libreria;
                        return '<a href="http://' + info +
                            '/login.php" target="_blank"><img src="{{ asset('images/libreria.jpg') }}" width="36" height="36"></a>'
                    }
                },
                {
                    data: 'wellavs',
                    render: function(data, type, row) {
                        var info = data[0].ip_wellav;

                        return '<a href="http://' + info +
                            '/" target="_blank"><img src="{{ asset('images/wellav.jpg') }}" width="32" height="32"></a>'
                    }
                },
                {
                    data: 'kvms',
                    render: function(data, type, row) {
                        var info = data[0].ip_kvm;
                        return '<a href="http://' + info +
                            '/" target="_blank"><img src="{{ asset('images/kvm.jpg') }}" width="32" height="32"></a>'
                    }
                },
                {
                    data: 'xclaritys',
                    render: function(data, type, row) {
                        var select = '<select>';
                        $.each(row.xclaritys, function(key, value) {
                            select += '<option value="' + value.cevem_id +
                                '"><a href="'+value.ip_xclarity+'"><img src="{{ asset('images/lenovo-xclarity.png') }}" width="32" height="32" ></a></option>';
                        });
                        select += '</select>';
                        return select;
                    }
                }


            ],

        });
    </script>


</div>
