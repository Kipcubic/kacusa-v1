<x-app-layout>
    <x-slot name="title">
        Hello {{ \Auth::user()->fname}}, welcome to KACUSA
    </x-slot>
    @section('css')
    <!-- DataTables -->
    <link href="{{ asset('assets/plugins/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/datatables/fixedHeader.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/plugins/datatables/scroller.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

    @endsection
    @section('scripts')
    <!-- Required datatable js-->
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <!-- Buttons examples -->
    <script src="{{ asset('assets/plugins/datatables/dataTables.buttons.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.js')}}"></script>

    <script src="{{ asset('assets/plugins/datatables/jszip.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatables/pdfmake.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatables/vfs_fonts.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatables/buttons.html5.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatables/buttons.print.min.js')}}"></script>
    <script src="assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
    <script src="assets/plugins/datatables/dataTables.keyTable.min.js"></script>
    <script src="assets/plugins/datatables/dataTables.scroller.min.js"></script>

    <!-- Responsive examples -->
    <script src="{{ asset('assets/plugins/datatables/dataTables.responsive.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>

    <!-- Datatable init js -->
    <script src="{{ asset('assets/pages/datatables.init.js')}}"></script>

    @endsection
    <div class="row">
        <div class="container-fluid">
            <header class="pb-3 mb-4 border-bottom">
                <a href="/" class="d-flex align-items-center text-dark text-decoration-none h4">
                    <span class="fs-2">About</span>
                </a>
            </header>
            <p>
                KACUSA is a student base organization that advocates for students affairs and
                ideas that can help both Kalokol youth and Turkana County At Large.
                The group is based in Kalokol in Turkana central constituency in Turkana
                County. The mainly activities will be advocated till its success and also to attain
                the great heights of a Kenyan youth dream.
            </p>

        </div>
        <div class="container-fluid">
            <header class="pb-3 mb-4 border-bottom">
                <a href="/" class="d-flex align-items-center text-dark text-decoration-none h4">
                    <span class="fs-2">Membership</span>
                </a>
            </header>
            <p>
                Below are qualifications to become a member
                <ol type="I">

                    <li>A student in a college/ university</li>
                    <li> Must be a Kenyan citizen
                    </li>
                    <li> Must be active member
                    </li>
                    <li> Must be Kalokol resident
                    </li>
                    <li>
                        Must be a good conduct
                    </li>
                    <li> He/she must pay registration fee of sh.100
                    </li>
                </ol>
            </p>

        </div>
    </div>


</x-app-layout>