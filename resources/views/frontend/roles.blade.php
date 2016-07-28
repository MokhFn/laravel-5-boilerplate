@extends('frontend.user.layouts.master')
@section('users.roles')
class="active"
@endsection

@section('users')
active
@endsection

@section('page-header')
    Roles
@endsection

@section('location')
    Roles
@endsection

@section('head')
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.3.js"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>

@endsection


@section('content')
    <div class="box box-danger">
        <div class="box-header">
            <h3 class="box-title">Liste Des Roles</h3>
            <div class="box-tools pull-right">
                <div class="pull-right mb-10">
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Créer Un Role</button>
                </div><!--pull right-->
                <div class="clearfix">

                </div>
            </div>
        </div>
        <!-- /.box-header -->
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Nouvelle Facture</h4>
                </div>
                <div class="modal-body">

                    <!--<div class="row">
                        <div class="form-group col-xs-8">
                            <label for="ItemName">Item Name</label>
                            <input type="email" class="form-control" id="ItemName" placeholder="Enter Item Name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-xs-2">
                            <label>Quantity</label>
                            <select class="form-control">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>-->
                    <form id="bookForm" method="post" class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Role</label>
                            <div class="col-xs-5">
                                <input type="text" class="form-control" name="book[0].title" placeholder="Nom" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label"></label>
                            <div class="col-xs-5">
                                <input type="text" class="form-control" name="book[0].title" placeholder="Fournisseur" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label"></label>
                            <div class="col-xs-5">
                                <input type="text" class="form-control" name="book[0].title" placeholder="Destinataire" />
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-5 col-xs-offset-1">
                                <button type="submit" class="btn btn-default">Valider</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                </div>
            </div>
        </div>
    </div>
        <div class="box-body">
            <table id="tab" class="table table-hover" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Role ID</th>
                    <th>Role Name</th>
                    <th>Users With this Role</th>
                    <th>Permissions</th>
                    <th>Created At</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Role ID</th>
                    <th>Role Name</th>
                    <th>Users With this Role</th>
                    <th>Permissions</th>
                    <th>Created At</th>
                </tr>
                </tfoot>
                <tbody class="table-hover">
                {{--@foreach --}}
                    <tr>
                        <td>{{-- --}}</td>
                        <td>{{-- --}}</td>
                        <td>{{-- --}}</td>
                        <td>{{-- --}}</td>
                        <td>{{-- --}}</td>
                    </tr>
                {{-- @endforeach--}}
                <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                </tr>
                <tr>
                    <td>Garrett Winters</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>63</td>
                    <td>2011/07/25</td>
                </tr>
                <tr>
                    <td>Ashton Cox</td>
                    <td>Junior Technical Author</td>
                    <td>San Francisco</td>
                    <td>66</td>
                    <td>2009/01/12</td>
                </tr>
                <tr>
                    <td>Cedric Kelly</td>
                    <td>Senior Javascript Developer</td>
                    <td>Edinburgh</td>
                    <td>22</td>
                    <td>2012/03/29</td>
                </tr>
                <tr>
                    <td>Airi Satou</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>33</td>
                    <td>2008/11/28</td>
                </tr>
                <tr>
                    <td>Brielle Williamson</td>
                    <td>Integration Specialist</td>
                    <td>New York</td>
                    <td>61</td>
                    <td>2012/12/02</td>
                </tr>
                <tr>
                    <td>Herrod Chandler</td>
                    <td>Sales Assistant</td>
                    <td>San Francisco</td>
                    <td>59</td>
                    <td>2012/08/06</td>
                </tr>
                <tr>
                    <td>Rhona Davidson</td>
                    <td>Integration Specialist</td>
                    <td>Tokyo</td>
                    <td>55</td>
                    <td>2010/10/14</td>
                </tr>
                <tr>
                    <td>Colleen Hurst</td>
                    <td>Javascript Developer</td>
                    <td>San Francisco</td>
                    <td>39</td>
                    <td>2009/09/15</td>
                </tr>
                <tr>
                    <td>Sonya Frost</td>
                    <td>Software Engineer</td>
                    <td>Edinburgh</td>
                    <td>23</td>
                    <td>2008/12/13</td>
                </tr>
                <tr>
                    <td>Jena Gaines</td>
                    <td>Office Manager</td>
                    <td>London</td>
                    <td>30</td>
                    <td>2008/12/19</td>
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