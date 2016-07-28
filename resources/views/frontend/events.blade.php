@extends('frontend.user.layouts.master')
@section('events')
active
@endsection

@section('page-header')
    Evénements
@endsection

@section('location')
    Evénements
@endsection

@section('head')

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.3.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://formvalidation.io/vendor/formvalidation/css/formValidation.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/css/bootstrap-select.min.css" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/js/bootstrap-select.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
    <style>
        .datepicker{z-index:1151 !important;}
    </style>
    <script type="text/javascript" charset="utf-8">
        $(document).ready(function() {
            $('#tab').on( 'processing.dt', function ( e, settings, processing ) {
                $('#processingIndicator').css( 'display', processing ? 'block' : 'none' );
            } ).DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
                }
            });
        } );
    </script>
@endsection
@section('content')
    <div class="box box-danger">

        <div class="box-header">
            <h3 class="box-title">Liste Des Evénements</h3>
            <div class="box-tools pull-right">
                <div class="pull-right mb-10">
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Créer un Evénement</button>
                </div><!--pull right-->
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- /.box-header -->
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Nouvel Evénement</h4>
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
                        <!--<form id="taskForm" method="post" class="form-horizontal">
                            <div class="form-group">
                                <label class="col-xs-2 control-label">Evénement</label>
                                <div class="col-xs-6">
                                    <input type="text" class="form-control" name="Nom" placeholder="Nom" />
                                </div>
                            </div>

                            <div class="form-group">
                            <label class="col-xs-2 control-label">Début</label>
                                <div class="input-group col-xs-2" style="padding-left:15px;">
                                    <div class="input-group-addon" style="border-top-left-radius:5px;border-bottom-left-radius:5px;">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="date" class="form-control" data-inputmask="'alias': 'jj/mm/aaaa'" data-mask="" name="date_debut">
                                </div>
                            </div>

                            <div class="form-group">
                            <label class="col-xs-2 control-label">Fin</label>
                                <div class="input-group col-xs-2" style="padding-left:15px;">
                                    <div class="input-group-addon" style="border-top-left-radius:5px;border-bottom-left-radius:5px;">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input title="start-date" type="date" class="form-control" data-inputmask="'alias': 'jj/mm/aaaa'" data-mask="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-xs-2 control-label">Assigné à</label>
                                <div class="col-xs-6">
                                    <input type="text" class="form-control" name="task[]" placeholder="Nom" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-xs-2 control-label">Description</label>
                                <div class="col-xs-6">
                                    <textarea id="desc" cols="6" class="form-control">Veuillez ajouter une description.</textarea>
                                </div>
                            </div>
                            </br>
                            <div class="form-group">
                                <label class="col-xs-1 control-label"></label>
                                    <div class="col-xs-5 col-xs-offset-1">
                                         <button type="submit" class="btn btn-default">Valider</button>
                                    </div>
                            </div>
                        </form>-->


                        <form id="eventForm" method="post" class="form-horizontal" action="createEvent">
                            <div class="form-group">
                                <label class="col-xs-3 control-label">Nom</label>
                                <div class="col-xs-5">
                                    <input type="text" class="form-control" name="name" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-xs-3 control-label">Date de début</label>
                                <div class="col-xs-5 dateContainer">
                                    <div class="input-group input-append date" id="startDatePicker">
                                        <input type="text" class="form-control" name="starting_date" />
                                        <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-xs-3 control-label">Date de fin</label>
                                <div class="col-xs-5 dateContainer">
                                    <div class="input-group input-append date" id="endDatePicker">
                                        <input type="text" class="form-control" name="ending_date" />
                                        <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-xs-3 control-label">Assigné à</label>
                                <div class="col-xs-5 selectContainer">
                                    <select name="assigned_to" class="form-control">
                                        <option value="4">First</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-xs-3 control-label">Description</label>
                                <div class="col-xs-5">
                                    <textarea id="desc" class="form-control" name="description" required >Veuillez entrer une description.</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-5 col-xs-offset-3">
                                    <button type="submit" class="btn btn-default">valider</button>
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
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Date De Début</th>
                    <th>Date De Fin</th>
                    <th>Assigné à</th>
                    <th>Crée Le</th>
                    <th>Options</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Date De Début</th>
                    <th>Date De Fin</th>
                    <th>Assigné à</th>
                    <th>Crée Le</th>
                    <th>Options</th>
                </tr>
                </tfoot>
                <tbody class="table-hover">
                @foreach($events as $event)
                <tr>
                    <td onclick="showEvent({{ $event->id }})" data-toggle="modal" data-target="#eventModal"  style="cursor: pointer;">{{ $event->id }}</td>
                    <td onclick="showEvent({{ $event->id }})" data-toggle="modal" data-target="#eventModal"  style="cursor: pointer;">{{ $event->name }}</td>
                    <td onclick="showEvent({{ $event->id }})" data-toggle="modal" data-target="#eventModal"  style="cursor: pointer;">{{ $event->starting_date }}</td>
                    <td onclick="showEvent({{ $event->id }})" data-toggle="modal" data-target="#eventModal"  style="cursor: pointer;">{{ $event->ending_date }}</td>
                    <td onclick="showEvent({{ $event->id }})" data-toggle="modal" data-target="#eventModal"  style="cursor: pointer;">{{ $event->assigned_to }}</td>
                    <td onclick="showEvent({{ $event->id }})" data-toggle="modal" data-target="#eventModal"  style="cursor: pointer;">{{ $event->created_at }}</td> <!--window.location='/Event/{{-- $event->id --}}';-->
                    <td>
                        <div class="btn-group"><a href="" class="btn btn-xs btn-info"><i class="fa fa-refresh" data-toggle="tooltip" data-placement="top" title="Update"></i></a></div>
                        <div class="btn-group"><a class="btn btn-xs btn-danger" style="cursor:pointer;"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="Delete"></i></a></div>
                    </td>
                </tr>
                @endforeach
                <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                    <td>$320,800</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>63</td>
                    <td>2011/07/25</td>
                    <td>$170,750</td>
                    <td>$320,800</td>
                </tr>
                <tr>
                    <td>54</td>
                    <td>Junior Technical Author</td>
                    <td>San Francisco</td>
                    <td>66</td>
                    <td>2009/01/12</td>
                    <td>$86,000</td>
                    <td>$320,800</td>
                </tr>
                <tr>
                    <td>654</td>
                    <td>Senior Javascript Developer</td>
                    <td>Edinburgh</td>
                    <td>22</td>
                    <td>2012/03/29</td>
                    <td>$433,060</td>
                    <td>$320,800</td>
                </tr>
                <tr>
                    <td>54</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>33</td>
                    <td>2008/11/28</td>
                    <td>$162,700</td>
                    <td>$320,800</td>
                </tr>
                <tr>
                    <td>87</td>
                    <td>Integration Specialist</td>
                    <td>New York</td>
                    <td>61</td>
                    <td>2012/12/02</td>
                    <td>$372,000</td>
                    <td>$320,800</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Sales Assistant</td>
                    <td>San Francisco</td>
                    <td>59</td>
                    <td>2012/08/06</td>
                    <td>$137,500</td>
                    <td>$320,800</td>
                </tr>
                <tr>
                    <td>78</td>
                    <td>Integration Specialist</td>
                    <td>Tokyo</td>
                    <td>55</td>
                    <td>2010/10/14</td>
                    <td>$327,900</td>
                    <td>$320,800</td>
                </tr>
                <tr>
                    <td>63</td>
                    <td>Javascript Developer</td>
                    <td>San Francisco</td>
                    <td>39</td>
                    <td>2009/09/15</td>
                    <td>$205,500</td>
                    <td>$320,800</td>
                </tr>
                <tr>
                    <td>99</td>
                    <td>Software Engineer</td>
                    <td>Edinburgh</td>
                    <td>23</td>
                    <td>2008/12/13</td>
                    <td>$103,600</td>
                    <td>$320,800</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Office Manager</td>
                    <td>London</td>
                    <td>30</td>
                    <td>2008/12/19</td>
                    <td>$90,560</td>
                    <td>$320,800</td>
                </tr>
                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->



    <!-- Modal To Be Filled With The Clicked Event Data-->
    <div class="modal fade" id="eventModal" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Evénement X</h4>
                </div>
                <div class="modal-body" id="event-modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>
    <!-- / .modal -->


    <script type="text/javascript" src="http://formvalidation.io/vendor/formvalidation/js/formValidation.min.js"></script>
    <script type="text/javascript" src="http://formvalidation.io/vendor/formvalidation/js/framework/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#startDatePicker')
                    .datepicker({
                        format: 'yyyy/mm/dd'
                    })
                    .on('changeDate', function(e) {
                        // Revalidate the start date field
                        $('#eventForm').formValidation('revalidateField', 'starting_date');
                    });

            $('#endDatePicker')
                    .datepicker({
                        format: 'yyyy/mm/dd'
                    })
                    .on('changeDate', function(e) {
                        $('#eventForm').formValidation('revalidateField', 'ending_date');
                    })
            .find('[name="assigned_to"]')
                    .selectpicker()
                    .change(function(e) {
                        /* Revalidate the pick when it is changed */
                        $('#eventForm').formValidation('revalidateField', 'assigned_to');
                    })
                    .end()

            $('#eventForm')
                    .formValidation({
                        framework: 'bootstrap',
                        icon: {
                            valid: 'glyphicon glyphicon-ok',
                            invalid: 'glyphicon glyphicon-remove',
                            validating: 'glyphicon glyphicon-refresh'
                        },
                        fields: {
                            name: {
                                validators: {
                                    notEmpty: {
                                        message: 'Le nom est obligatoire.'
                                    }
                                }
                            },
                            starting_date: {
                                validators: {
                                    notEmpty: {
                                        message: 'La date de début est obligatoire.'
                                    },
                                    date: {
                                        format: 'YYYY/MM/DD',
                                        min: new Date(new Date().setDate(new Date().getDate()-1)),
                                        max: 'ending_date',
                                        message: 'La date de début est non valide.'
                                    }
                                }
                            },
                            ending_date: {
                                validators: {
                                    notEmpty: {
                                        message: 'La date est oligatoire.'
                                    },
                                    date: {
                                        format: 'YYYY/MM/DD',
                                        min: 'starting_date',
                                        message: 'La date de fin est non valide.'
                                    }
                                }
                            },
                            description: {
                                validators: {
                                    notEmpty: {
                                        message: 'La description est obligatoire.'
                                    }
                                }
                            },
                            assigned_to: {
                                validators: {
                                    notEmpty: {
                                        message: 'Veuillez séléctionner un utilisateur.'
                                    }
                                }
                            }
                        }
                    })
                    .on('success.field.fv', function(e, data) {
                        if (data.field === 'starting_date' && !data.fv.isValidField('ending_date')) {
                            // We need to revalidate the end date
                            data.fv.revalidateField('ending_date');
                        }

                        if (data.field === 'ending_date' && !data.fv.isValidField('starting_date')) {
                            // We need to revalidate the start date
                            data.fv.revalidateField('starting_date');
                        }
                    })
                    .on('success.form.bv', function (e) {
                        e.preventDefault();
                    var $form = $("#eventForm"),
                        url = $form.attr('action');
                    $.post(url, $form.serialize()).done(function () {
                        $("#myModal").dialog("close");
                    });
                    });
            $("#desc")
                .focus(function() {
                    if (this.value === this.defaultValue) {
                        this.value = '';
                    }
                })
                .blur(function() {
                    if (this.value === '') {
                        this.value = this.defaultValue;
                    }
                });
            });
    </script>
    <script>
        function showEvent(str) {
            $("#event-modal-body")
                    .empty()
                    .append(
                            '<center><img src="https://upload.wikimedia.org/wikipedia/commons/b/b1/Loading_icon.gif" id="loading" style="display:none;right:50%;" /></center>'
                    );
            var loading = document.getElementById("loading");
            loading.style.display = "block";

            if (str == "") {
                document.getElementById("event-modal-body").innerHTML = "";
                return;
            } else {
                if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                }
                xmlhttp.onreadystatechange = function() {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        document.getElementById("event-modal-body").innerHTML = xmlhttp.responseText;
                        loading.style.display = "none";

                    }
                };
                xmlhttp.open("GET","Event/"+str,true);
                xmlhttp.send();
            }
        }
    </script>

@endsection