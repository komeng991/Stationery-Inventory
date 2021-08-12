@extends('layouts.dashboard')
@extends('layouts.header')
@extends('layouts.sidebar')


@section('section')
	



@stop

@section('css')
<link rel="stylesheet" media="screen, print" href="{{url('css/datagrid/datatables/datatables.bundle.css')}}">

@stop

@section('js')

<!-- PAGE RELATED PLUGIN(S) -->
<script src="{{url('js/datagrid/datatables/datatables.bundle.js')}}"></script>
        <script>
            /* demo scripts for change table color */
            /* change background */


            $(document).ready(function()
            {
                $('#dt-basic-example').dataTable(
                {
                    responsive: true
                });

                $('.js-thead-colors a').on('click', function()
                {
                    var theadColor = $(this).attr("data-bg");
                    console.log(theadColor);
                    $('#dt-basic-example thead').removeClassPrefix('bg-').addClass(theadColor);
                });

                $('.js-tbody-colors a').on('click', function()
                {
                    var theadColor = $(this).attr("data-bg");
                    console.log(theadColor);
                    $('#dt-basic-example').removeClassPrefix('bg-').addClass(theadColor);
                });

            });

        </script>
@stop
