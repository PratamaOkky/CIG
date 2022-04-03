@section('title', 'Gaji')

@extends('layouts.admin.template')

@section('content')

<div class="section">
    <div class="container">
        <div class="card mt-5">
            <div class="card-content">
                <div class="card-body" style="text-align: justify">
                    <h1 class="head mb-4">Data Gaji</h1>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odio officia enim modi placeat. Quibusdam repellat nam ipsa velit qui. Animi asperiores ea ex quisquam dolorum recusandae laudantium sunt mollitia iure.</p>
                </div>
            </div>
        </div>

        <table id="table_id" class="table table-stripped table-sm text-center">
            <thead>
                <tr>
                    <th class="text-center"><input type="checkbox" name="checkAll" id="checkAll"></th>
                    <th class="text-center">NIP</th>
                    <th class="text-center">Gaji</th>
                    <th class="text-center">Total Gaji</th>
                    <th class="text-center"> Action <br> <button href="#" class="btn btn-danger btn-sm mb-3 d-none" id="deleteAll" onclick="return confirm('Yakin Hapus Semua Data?')">Delete Selected</button></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($gaji as $item)
                <tr>
                    <td><input type="checkbox" name="id" class="checkBoxClass" value="{{$item->id}}"></td>
                    <td>{{$item->nip}}</td>
                    <td>{{$item->gaji}}</td>
                    <td>{{$item->totalgaji}}</td>
                    <td>
                        <form action="{{route('gaji.destroy', Crypt::encryptString($item->id))}}" method="POST">
                            @method('delete')
                            @csrf
                            <button class="text-danger delete d-inline border-0 ml-2" style="background: transparent" onclick="return confirm('Yakin Hapus Data?')"><i class="fa fa-trash-o h4"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@include('sweetalert::alert')

@push('page-scripts')

<script>

    $(document).ready( function () {
        $('#table_id').DataTable();
    });

</script>

<script>

    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
        }
    });

    $(function () {

        $(document).on('click','input[name="checkAll"]', function(){
                  if(this.checked){
                    $('input[name="id"]').each(function(){
                        this.checked = true;
                    });
                  }else{
                     $('input[name="id"]').each(function(){
                         this.checked = false;
                     });
                  }
                  toggledeleteAllBtn();
           });

           $(document).on('change','input[name="id"]', function(){

               if( $('input[name="id"]').length == $('input[name="id"]:checked').length ){
                   $('input[name="checkAll"]').prop('checked', true);
               }else{
                   $('input[name="checkAll"]').prop('checked', false);
               }
               toggledeleteAllBtn();
           });


           function toggledeleteAllBtn(){
               if( $('input[name="id"]:checked').length > 0 ){
                   $('button#deleteAll').text('Delete ('+$('input[name="id"]:checked').length+')').removeClass('d-none');
               }else{
                   $('button#deleteAll').addClass('d-none');
               }
           }

           $('#deleteAll').click(function (e) {
            e.preventDefault();
            var all = [];

            $("input:checkbox[name=id]:checked").each(function () {
                all.push($(this).val());
            });

            $.ajax({
                url:"{{route('select.gaji')}}",
                type:"DELETE",
                data:{
                    _token:$("input[name=_token]").val(),
                    id:all,
                },
                success:function(response){
                    $.each(all, function (key, val) {
                        $("#id"+val).remove();
                    })
                }
            });
        })

    });
</script>

@endpush

@endsection
