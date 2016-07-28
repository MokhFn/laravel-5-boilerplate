@extends('frontend.user.layouts.master')
@section('stock')
active
@endsection

@section('page-header')
    Matériel
@endsection

@section('location')
    Matériel
@endsection

@section('head')
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.3.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://formvalidation.io/vendor/formvalidation/css/formValidation.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

@endsection
@section('content')
    <div class="box box-danger">
        <div class="box-header">
            <h3 class="box-title">Liste D'équipements</h3>
            <div class="box-tools pull-right">
                <div class="pull-right mb-10">
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Ajouter du Matériel</button>
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
                        <h4 class="modal-title">New Item</h4>
                    </div>
                    <div class="modal-body">

                        <form id="bookForm" method="post" class="form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Equipement</label>
                                <div class="col-xs-3">
                                    <input type="text" class="form-control" name="book[0].title" placeholder="Nom" />
                                </div>
                                <div class="col-xs-3">
                                    <input type="text" class="form-control" name="book[0].isbn" placeholder="Code à Barre" />
                                </div>
                                <div class="col-xs-3">
                                    <input type="text" class="form-control" name="book[0].price" placeholder="Nombre de Piéces" />
                                </div>
                                <div class="col-xs-1">
                                    <button type="button" class="btn btn-default addButton"><i class="fa fa-plus"></i></button>
                                </div>
                            </div>

                            <!-- The template for adding new field -->
                            <div class="form-group hide" id="bookTemplate">
                                <div class="col-xs-3 col-xs-offset-1">
                                    <input type="text" class="form-control" name="title" placeholder="Nom" />
                                </div>
                                <div class="col-xs-3">
                                    <input type="text" class="form-control" name="isbn" placeholder="Code à Barre" />
                                </div>
                                <div class="col-xs-2">
                                    <input type="text" class="form-control" name="price" placeholder="Nombre de Piéces" />
                                </div>
                                <div class="col-xs-1">
                                    <button type="button" class="btn btn-default removeButton"><i class="fa fa-minus"></i></button>
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
    <script type="text/javascript" charset="utf-8">

        $(document).ready(function() {
            var titleValidators = {
                        row: '.col-xs-4',   // The title is placed inside a <div class="col-xs-4"> element
                        validators: {
                            notEmpty: {
                                message: 'The title is required'
                            }
                        }
                    },
                    isbnValidators = {
                        row: '.col-xs-4',
                        validators: {
                            notEmpty: {
                                message: 'The ISBN is required'
                            },
                            isbn: {
                                message: 'The ISBN is not valid'
                            }
                        }
                    },
                    priceValidators = {
                        row: '.col-xs-2',
                        validators: {
                            notEmpty: {
                                message: 'The price is required'
                            },
                            numeric: {
                                message: 'The price must be a numeric number'
                            }
                        }
                    },
                    bookIndex = 0;

            $('#bookForm')
                    .formValidation({
                        framework: 'bootstrap',
                        icon: {
                            valid: 'glyphicon glyphicon-ok',
                            invalid: 'glyphicon glyphicon-remove',
                            validating: 'glyphicon glyphicon-refresh'
                        },
                        fields: {
                            'book[0].title': titleValidators,
                            'book[0].isbn': isbnValidators,
                            'book[0].price': priceValidators
                        }
                    })

                    // Add button click handler
                    .on('click', '.addButton', function() {
                        bookIndex++;
                        var $template = $('#bookTemplate'),
                                $clone    = $template
                                        .clone()
                                        .removeClass('hide')
                                        .removeAttr('id')
                                        .attr('data-book-index', bookIndex)
                                        .insertBefore($template);

                        // Update the name attributes
                        $clone
                                .find('[name="title"]').attr('name', 'book[' + bookIndex + '].title').end()
                                .find('[name="isbn"]').attr('name', 'book[' + bookIndex + '].isbn').end()
                                .find('[name="price"]').attr('name', 'book[' + bookIndex + '].price').end();

                        // Add new fields
                        // Note that we also pass the validator rules for new field as the third parameter
                        $('#bookForm')
                                .formValidation('addField', 'book[' + bookIndex + '].title', titleValidators)
                                .formValidation('addField', 'book[' + bookIndex + '].isbn', isbnValidators)
                                .formValidation('addField', 'book[' + bookIndex + '].price', priceValidators);
                    })

                    // Remove button click handler
                    .on('click', '.removeButton', function() {
                        var $row  = $(this).parents('.form-group'),
                                index = $row.attr('data-book-index');

                        // Remove fields
                        $('#bookForm')
                                .formValidation('removeField', $row.find('[name="book[' + index + '].title"]'))
                                .formValidation('removeField', $row.find('[name="book[' + index + '].isbn"]'))
                                .formValidation('removeField', $row.find('[name="book[' + index + '].price"]'));

                        // Remove element containing the fields
                        $row.remove();
                    });
        });


    </script>
@endsection