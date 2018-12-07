
<!DOCTYPE html>
<html lang="en">

{{-- Include admin Head --}}
@include('partials.admin._adminHead')

<body>
    <div class="wrapper">
        <!-- Main Container -->
        <div id="main-wrapper" class="menu-fixed page-hdr-fixed">
            <!-- Menu Wrapper -->
            @include('partials.admin._adminNav')
            <!-- Page header -->
            @include('partials.admin._adminHeader')
            <!-- Main Page Wrapper -->
            <div class="page-wrapper">
                <!-- Page Title -->
                <div class="page-title">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <h2 class="page-title-text">Consultas</h2>
                        </div>
                        <div class="col-sm-6 text-right">
                            <div class="breadcrumbs">
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li>Support Ticket</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page Body -->
                <div class="page-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="panel panel-default">
                                <div class="panel-head">
                                    <div class="panel-title">
                                        <span class="panel-title-text">Todas las consultas</span>
                                    </div>
                                </div>
                                <div id="ticket-table">
                                    <table class="ticket-table" style="width: 100%;">
                                        <thead>
                                            <tr><th class="d-none"></th></tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($consultas as $consulta)

                                            <tr>
                                                <td>
                                                    <div class="ticket-block">
                                                        <div class="ticket">
                                                            <div class="row ticket-hdr">
                                                                <div class="col-sm-4 card-left text-left">
                                                                    <span class="text-center">#{{$consulta->id}}</span>
                                                                </div>
                                                                <div class="col-sm-8 text-right ticket-right">
                                                                    <span>{{$consulta->created_at}}</span>
                                                                </div>
                                                            </div>
                                                            <div class="row ticket-bdy">
                                                                <div class="col-sm-6 col-md-5 text-left">
                                                                    <div class="ticket-img">
                                                                        <i class="icon-user"></i>
                                                                    </div>
                                                                    <div class="ticket-info">
                                                                        <a class="ticket-name" target="_blank">{{$consulta->nombre}}</a>
                                                                        <div class="ticket-text">{{$consulta->email}}</div>
                                                                        <div class="ticket-text">{{$consulta->celular}}</div>
                                                                        <div class="ticket-text">Área - Ventas</div>
                                                                    </div>
                                                                </div>
                                                                {{-- <div class="col-sm-6 col-md-7 ticket-subject">
                                                                    <span>Asunto</span>
                                                                    <p>Theme is not installing</p>
                                                                </div> --}}
                                                            </div>
                                                            <div class="row ticket-ftr align-items-center">
                                                                <div class="col-sm-8 text-left">
                                                                    <span class="badge badge-light badge-pill badge-sm">Se actualizó: {{$consulta->updated_at}}</span>
                                                                    <span class="badge badge-default badge-pill badge-sm">Open</span>
                                                                    <span class="badge badge-primary badge-pill badge-sm">New</span>

                                                                </div>
                                                                <div class="col-sm-4 text-right ticket-action">
                                                                    <a href="#" class="btn btn-primary btn-circle m-1 m-1"><i class="icon-pencil"></i></a>
                                                                    <a class="btn btn-danger btn-circle m-1" href=""><i class="icon-trash"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Footer -->
            <div class="page-ftr">
                <div>© 2018. Created by Obj-food</div>
            </div>
        </div>
        <!-- Sidebar Section -->

        </div><!-- End Sidebar Section --> --}}
    </div>


    <!-- Include js files -->
    @include('partials.admin._adminBottomScripts')

</body>
</html>
