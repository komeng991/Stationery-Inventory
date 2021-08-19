@extends('layouts.dashboard')
@extends('layouts.header')
@extends('layouts.sidebar')


@section('section')
<div class="page-content">
    <div>
    <a href="#" data-toggle="modal" data-target="#reqForm" class="btn btn-success">Request Asset</a>
    <br><br>

   
    </div>
    <div>
        <br>
        <br>
        <h3><strong>Available Assets</strong></h3>
        <br>
        <table class="table" id="prodReqTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Item</th>
                    <th>Model</th>
                    <th>Description</th>
                    <th>Quantity1</th>
                </tr>
            </thead>
    
            <tbody>
<tr>
    @foreach($products as $product)
    
    <td>{{ $product->id }}</td>
    <td>{{ $product->item }}</td>
</tbody>
@endforeach
        </table>
    </div>    
</div>

<div class="modal fade" id="reqForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Fill in the asset details below</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form id="reqAsset" method="POST" action="#" enctype="multipart/form-data">
                @csrf
                <!--Category-->
                <div class="form-group">
                    <label class="required" for="category">Item</label>
                    <select name="category" id="category" class="select2 form-control" >
                        <option value="" selected>-</option>
                        @foreach ($products as $product)
                            <option value="{{ $product->item }}">{{ $product->item }}</option>
                        @endforeach
                    </select>
                  
                    <span class="help-block"></span>
                </div>

                <!--Model-->
                <div class="form-group">
                    <label class="required" for="model">Model</label>
                    <select name="model" id="model" class="select2 form-control">
                        <option value="" selected>-</option>
                    </select>
                  
                    <span class="help-block"></span>
                </div>

                <!--Quantity-->
                <div class="form-group">
                    <label class="required" for="quantity">Quantity</label>
                        <input type="number" name="quantity" id="quantity" class="select2 form-control" min=1 required>
                
                    <span class="help-block"></span>
                </div>

               

         

            

                {{-- Recipient ID --}}
                <div class="form-group">
                    <label class="required" for="recipient">Recipient ID</label>
                    <input type="text" id="recipient" name="recipient" maxlength="20" class="form-control" disabled/>
                    <span name="errorMsg" id="errorMsg" style="color: red;"></span>
                  
                    <span class="help-block"></span>
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button id="reqButton" type="submit" form="reqAsset" class="btn btn-primary">Request</button>
        </div>
      </div>
    </div>
</div>
@endsection


@section('css')
<link rel="stylesheet" media="screen, print" href="{{url('css/datagrid/datatables/datatables.bundle.css')}}">

@stop

@section('js')

    <script src="js/datagrid/datatables/datatables.bundle.js"></script>

    <script src="js/datagrid/datatables/datatables.export.js"></script>

    <link rel="stylesheet" type="text/css" href="css/datagrid/datatables/datatables.bundle.css"></link>

    <link rel="stylesheet" type="text/css" href="css/datagrid/datatables/datatables.bundle.css.map"></link>
    
@stop