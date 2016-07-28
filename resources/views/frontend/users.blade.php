@extends('frontend.user.layouts.master')
@section('users.users')
class="active"
@endsection

@section('users')
active
@endsection

@section('head')
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.3.js"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" charset="utf-8">
        $(document).ready(function() {
            $('#tab').DataTable();
        } );
    </script>
@endsection
@section('content')
    <div class="box box-danger">
        <div class="box-header">
            <h3 class="box-title">Data Table With Full Features</h3>
            <div class="box-tools pull-right">
                <div class="pull-right mb-10">
                    <div class="btn btn-danger">
                        <a href="/Create/User" style="color:white;text-decoration: none;">Create New User</a>
                    </div><!--btn group-->
                </div><!--pull right-->
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="tab" class="table table-hover" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Role(s)</th>
                    <th>Events Assigned to</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Role(s)</th>
                    <th>Events Assigned to</th>
                </tr>
                </tfoot>
                <tbody class="table-hover">
                {{-- @foreach --}}
                    <tr>
                        <td>{{-- --}}</td>
                        <td>{{-- --}}</td>
                        <td>{{-- --}}</td>
                        <td>{{-- --}}</td>
                    </tr>
                {{-- @endforeach --}}
                <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                </tr>
                <tr>
                    <td>Garrett Winters</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>63</td>
                </tr>
                <tr>
                    <td>Ashton Cox</td>
                    <td>Junior Technical Author</td>
                    <td>San Francisco</td>
                    <td>66</td>
                </tr>
                <tr>
                    <td>Cedric Kelly</td>
                    <td>Senior Javascript Developer</td>
                    <td>Edinburgh</td>
                    <td>22</td>
                </tr>
                <tr>
                    <td>Airi Satou</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>33</td>
                </tr>
                <tr>
                    <td>Brielle Williamson</td>
                    <td>Integration Specialist</td>
                    <td>New York</td>
                    <td>61</td>
                </tr>
                <tr>
                    <td>Herrod Chandler</td>
                    <td>Sales Assistant</td>
                    <td>San Francisco</td>
                    <td>59</td>
                </tr>
                <tr>
                    <td>Rhona Davidson</td>
                    <td>Integration Specialist</td>
                    <td>Tokyo</td>
                    <td>55</td>
                </tr>
                <tr>
                    <td>Colleen Hurst</td>
                    <td>Javascript Developer</td>
                    <td>San Francisco</td>
                    <td>39</td>
                </tr>
                <tr>
                    <td>Sonya Frost</td>
                    <td>Software Engineer</td>
                    <td>Edinburgh</td>
                    <td>23</td>
                </tr>
                <tr>
                    <td>Jena Gaines</td>
                    <td>Office Manager</td>
                    <td>London</td>
                    <td>30</td>
                </tr>
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
@endsection