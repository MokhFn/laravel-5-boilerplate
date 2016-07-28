@section('head')
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.3.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://formvalidation.io/vendor/formvalidation/css/formValidation.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
@endsection

    <div class="box box-danger">
        <div class="box-header with-border">
            <h3 class="box-title">Evénement : {{ ucwords($event->name) }}</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">

            <p>
                <strong>Nom : </strong>
            </p>

            <p>
                {{ ucfirst($event->name) }}
            </p>

            <p>
                <strong>Date De Début : </strong>
            </p>

            <p>
                {{ ($event->starting_date) }}
            </p>
            <p>
                <strong>Date De Fin : </strong>
            </p>

            <p>
                {{ ($event->ending_date) }}
            </p>

            <p>
                <strong>Description : </strong>
            </p>

            <p>
                {{ ($event->description) }}
            </p>

           <!-- <p>
                <strong>Statut : </strong>
            </p>

            <p>

            </p>-->

           <p>
                <strong>Matériel Inclus : </strong>
            </p>

            <table id="tab" class="table table-hover" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Code à Barre</th>
                    <th>Nombre de Piéces</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Code à Barre</th>
                    <th>Nombre de Piéces</th>
                </tr>
                </tfoot>
                <tbody class="table-hover">

                <tr onclick="window.location='';" style="cursor: pointer;"><a href=""></a>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>Edinburgh</td>
                </tr>
                {{-- @foreach--}}
                <!--<tr>
                        <td>{{-- --}}</td>
                        <td>{{-- --}}</td>
                        <td>{{-- --}}</td>
                    </tr>-->
                {{-- @endforeach--}}
                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
    <script type="text/javascript" charset="utf-8">
        $(document).ready(function() {
            $('#tab').DataTable();
        } );
    </script>

    <script type="text/javascript" src="http://formvalidation.io/vendor/formvalidation/js/formValidation.min.js"></script>
    <script type="text/javascript" src="http://formvalidation.io/vendor/formvalidation/js/framework/bootstrap.min.js"></script>
