@section('title','Laporan Master barang')
@extends('template')
@section('contents')
<header class="gray accent-3 relative nav-sticky">
    <div class="container-fluid text-black">
        <div class="row">
            <div class="col">
                <h3 class="my-3">
                    <i class="icon icon-notifications_active"></i>
                    Home <span class="s-14"> <a class="btn btn-outline-primary btn-xs" href="#" target="_blank">
                            @yield('title') </a> </span>
                </h3>
            </div>
        </div>
    </div>
</header>
<div class="container-fluid animatedParent animateOnce my-3">
    <div class="animated fadeInUpShort">

        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">


        <div class="container-fluid my-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="card no-b">
                        <div class="card-header">
                            <button class="add btn btn-primary btn-xs"><i class="icon icon-add"></i>Tambah data</button>

                        </div>
                        <div class="card-body">

                            <table class="table table-striped">
                                <tr>
                                    <td>Dari </td>
                                    <td><input type="date" name="dari" class="form-control" placeholder="dari ..."></td>
                                </tr>
                                <tr>
                                    <td>Sampai </td>
                                    <td><input type="date" name="sampai" class="form-control" placeholder="dari ...">
                                    </td>
                                </tr>
                                <tr>
                                    <td><button class="btn btn-primary" id="cari"><i class="fa fa-search"></i>Cari
                                            Data</button></td>
                                </tr>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script>
    $(function(){
    $('#cari').click(function(e){
        e.PreventDefault();
         var dari = $('#dari').val();
         var sampai = $('#sampai').val();
         var url  = '{{ Url("report/show/") }}?dari='+dari+'&sampai='+sampai;
            $('#content').load(url);
            $('modal_pdf').model('show');
    });    
});  
</script>


<div class="modal fade" id="show_form" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content b-0">
            <div class="modal-header r-0 bg-primary">
                <h6 class="modal-title text-white" id="exampleModalLabel">
                    <div class="judul_form"></div>
                </h6>
                <a href="#" data-dismiss="modal" aria-label="Close"
                    class="paper-nav-toggle paper-nav-white active"><i></i></a>
            </div>
            <div class="modal-body no-p no-b">
  

            </div>
        </div>
    </div>
</div>

@endsection