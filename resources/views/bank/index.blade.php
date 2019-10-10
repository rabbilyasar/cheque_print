@extends('layouts.layout')

@section('title', 'Bank List')

@section('content')

<div class="container">
    <div style="display: flex; align-items: center; justify-content: center; padding-bottom: 20px">
        <h3>LIST OF RECORDS</h3>
    </div>

    <div class="row input-daterange">
        <div class="col-md-4">
            <input type="text" name="from_date" id="from_date" class="form-control" placeholder="From Date" readonly />
        </div>
        <div class="col-md-4">
            <input type="text" name="to_date" id="to_date" class="form-control" placeholder="To Date" readonly />
        </div>
        <div class="col-md-4">
            <button type="button" name="filter" id="filter" class="btn btn-primary">Filter</button>
            <button type="button" name="refresh" id="refresh" class="btn btn-default">Refresh</button>
        </div>
    </div>
    <br />
    <table class="table table-bordered table-striped" id="order_table">
        <thead>
            <tr>
                <th>Bank Name</th>
                <th>Format</th>
                <th>Created</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($banks as $bank)
            <tr>
                <td>{{strToUpper($bank->name)}}</td>
                <td><span class="badge badge-secondary"
                        style="padding:8px">{{$bank->status == 0 ? 'Universal Format' : 'I/B Format'}}</span></td>
                <td>{{$bank->created_at->diffForHumans()}}</td>
                <td style="display:flex">
                    <a href="{{route('bank.edit', $bank->id)}}" class="btn btn-info btn-sm" style=" margin-left:4px;">Edit</a>
                    <form action="{{route('bank.destroy', $bank->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" style=" margin-left:4px;"
                            onclick="return confirm('Item will be deleted permanently. YOU SURE?')">Delete</button>
                    </form>
                </td>

                @empty
            <tr class="text-center text-danger">
                <td colspan="10" style="padding-top: 20px">
                    <h4>There is no data available at the moment</h4>
                </td>
            </tr>
            </tr>
            @endforelse
        </tbody>
    </table>

</div>

@endsection

@section('script')
<script>


    {{--  $(document).ready(function(){
                $('.input-daterange').datepicker({
                 todayBtn:'linked',
                 format:'dd-mm-yyyy',
                 autoclose:true
                });

                load_data();

                function load_data(from_date = '', to_date = '')
                {
                 $('#order_table').DataTable({
                  processing: true,
                  serverSide: true,
                  ajax: {
                   url:'{{ route("bank.index") }}',
                   data:{from_date:from_date, to_date:to_date}
                  },
                  columns: [
                   {
                    data:'id',
                    name:'id'
                   },
                   {
                    data:'name',
                    name:'name'
                   },
                   {
                    data:'status',
                    name:'status'
                   }
                  ]
                 });
                }

                $('#filter').click(function(){
                 var from_date = $('#from_date').val();
                 var to_date = $('#to_date').val();
                 if(from_date != '' &&  to_date != '')
                 {
                  $('#order_table').DataTable().destroy();
                  load_data(from_date, to_date);
                 }
                 else
                 {
                  alert('Both Date is required');
                 }
                });

                $('#refresh').click(function(){
                 $('#from_date').val('');
                 $('#to_date').val('');
                 $('#order_table').DataTable().destroy();
                 load_data();
                });

               });  --}}

</script>
@endsection
