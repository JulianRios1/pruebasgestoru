@extends('layout')

@section('content')
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-xs-6">
                        <h2><b>Mascotas</b></h2>
                    </div>
                    <div class="col-xs-6">
                        <a href="#addModal" class="btn btn-success" data-toggle="modal">
                            <i class="material-icons">&#xE147;</i> <span>Nuevo Registro</span></a>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover" id="tableMascotas">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Raza</th>
                        <th>Fecha nacimiento</th>
                        <th>Propietario</th>
                        <th>Telefone propietario</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
    </div>
    <!-- Edit Modal HTML -->
    <div id="addModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form role="form" enctype="multipart/form-data" id="FormMascota" name="FormMascota">
                    <div class="modal-header">
                        <h4 class="modal-title">Crear mascota</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" name='nombre' id='nombre' class="form-control requerido" required>
                        </div>
                        <div class="form-group">
                            <label>Tipo de mascota</label>
                            <select name="idtipomascota" id="idtipomascota" class="form-control select2bs4" required>
                                <option value="">Selecciones un tipo</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Raza</label>
                            <input type="text" name='raza' id='add_raza' class="form-control requerido" required>
                        </div>
                        <div class="form-group">
                            <label>Fecha nacimiento</label>
                            <input type="text" name='fecha_nacimiento' id='add_fecha_nacimiento' class="form-control"
                                required>
                        </div>
                        <div class="form-group">
                            <label>Propietario</label>
                            <input type="text" name='propietario' id='add_propietario' class="form-control requerido"
                                required>
                        </div>
                        <div class="form-group">
                            <label>Telefono propietario</label>
                            <input type="text" name='tel_propietario' id='add_tel_propietario'
                                class="form-control requerido" required>
                        </div>
                        <div class="form-group">
                            <label>Direcciión propietario</label>
                            <input type="text" name='dir_propietario' id='add_dir_propietario' class="form-control"
                                required>
                        </div>
                        <div class="form-group">
                            <label>Email Propietario</label>
                            <input type="email" name='email_propietario' id='add_email_propietario' class="form-control"
                                required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-danger" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-info" id="btncrear" value="Crear">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Edit Modal HTML -->
    <div id="editeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form role="form" enctype="multipart/form-data" id="FormEditMascota" name="FormEditMascota">
                    <div class="modal-header">
                        <h4 class="modal-title">Editar mascota</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" name='nombre' id='nombre' class="form-control requerido" required>
                            <input type="hidden" name='id' id='id'>

                        </div>
                        <div class="form-group">
                            <label>Tipo de mascota</label>
                            <select name="idtipomascota" id="idtipomascota" class="form-control select2bs4" required>
                                <option value="">Selecciones un tipo</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Raza</label>
                            <input type="text" name='raza' id='raza' class="form-control requerido" required>
                        </div>
                        <div class="form-group">
                            <label>Fecha nacimiento</label>
                            <input type="text" name='fecha_nacimiento' id='fecha_nacimiento' class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Propietario</label>
                            <input type="text" name='propietario' id='propietario' class="form-control requerido" required>
                        </div>
                        <div class="form-group">
                            <label>Telefono propietario</label>
                            <input type="text" name='tel_propietario' id='tel_propietario' class="form-control requerido"
                                required>
                        </div>
                        <div class="form-group">
                            <label>Direcciión propietario</label>
                            <input type="text" name='dir_propietario' id='dir_propietario' class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Email Propietario</label>
                            <input type="email" name='email_propietario' id='email_propietario' class="form-control"
                                required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-danger" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-info" id="btnsave" data-id='' value="Editar">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Delete Modal HTML -->
    <div id="deleteModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form role="form" enctype="multipart/form-data" id="FormDeleteMascota" name="FormDeleteMascota">
                    <div class="modal-header">
                        <h4 class="modal-title">Eliminar </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>¿Está seguro de que desea eliminar estos registros?</p>
                        <p class="text-warning"><small>Esta acción no se puede deshacer.</small></p>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-danger" id='btndelete' value="Delete">
                        <input type="hidden" name="id" id="iddelete">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('scriptJS')
    <script>
        $(document).ready(function() {
            // Activate tooltip
            $('[data-toggle="tooltip"]').tooltip();
            let dtOverrideGlobals = {
                processing: true,
                serverSide: true,
                retrieve: true,
                ajax: "{{ route('mascotas.list') }}",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'nombre',
                        name: 'nombre'
                    },
                    {
                        data: 'raza',
                        name: 'raza'
                    },
                    {
                        data: 'fecha_nacimiento',
                        name: 'fecha_nacimiento'
                    },
                    {
                        data: 'propietario',
                        name: 'Propietario'
                    },
                    {
                        data: 'tel_propietario',
                        name: 'tel_propietario'
                    },
                    {
                        data: 'action',
                        name: 'action'
                    }
                ],
                order: [
                    [0, 'asc']
                ],
                pageLength: 25,
                "language": {
                    "url": "Spanish.json"
                }
            };

            const table = $('#tableMascotas').DataTable(dtOverrideGlobals);
            $("#tableMascotas").removeAttr('style')
            /*Se carga listado de tipos de mascotas*/
            $.ajax({
                type: "GET",
                url: "{{ route('tiposmascotas.index') }}",
                dataType: "json",
                processData: false,
                contentType: false,
                success: function(resp, e) {
                    if (e === 'success') {
                        for (let index = 0; index < resp.length; index++) {
                            $("#idtipomascota").append(
                                `<option value="${resp[index].id}">${resp[index].nombre}</option>`
                            );
                            $("#add_idtipomascota").append(
                                `<option value="${resp[index].id}">${resp[index].nombre}</option>`
                            );
                        }

                    }
                }
            })
            $("#btnsave").click(function(event) {
                event.preventDefault();
                let validacion = _validForm('#FormEditMascota');
                const id = $("#btnsave").data('id');
                if (validacion === 0 && id >= 1) {
                    var url = `{{ route('mascotas.update', '') }}` + `/${id}`;
                    var data = new FormData(document.getElementById("FormEditMascota"));
                    data.append("_method", 'PUT');
                    data.append("_token", '{{ csrf_token() }}');
                    $.ajax({
                        method: "POST",
                        url: url,
                        data: data,
                        dataType: "json",
                        processData: false,
                        contentType: false,
                        success: function(result) {
                            $("#editeModal").modal('toggle');
                            $('#tableMascotas').DataTable().ajax.reload();
                            alertas('Dato actualizados')
                        }
                    });
                }
            })
            $("#btndelete").click(function(event) {
                event.preventDefault();
                const id = $("#btndelete").data('id');
                if (id >= 1) {
                    var url = `{{ route('mascotas.destroy', '') }}` + `/${id}`;
                    var data = new FormData(document.getElementById("FormDeleteMascota"));
                    data.append("_method", 'DELETE');
                    data.append("_token", '{{ csrf_token() }}');
                    $.ajax({
                        method: "POST",
                        url: url,
                        data: data,
                        dataType: "json",
                        processData: false,
                        contentType: false,
                        success: function(result) {
                            $("#deleteModal").modal('toggle');
                            $('#tableMascotas').DataTable().ajax.reload();
                            alertas('Dato eliminado')
                        }
                    });
                }
            })
            $("#btncrear").click(function(event) {
                event.preventDefault();
                let validacion = _validForm('#FormMascota');
                console.log(validacion);
                if (validacion === 0) {
                    var url = `{{ route('mascotas.store') }}`;
                    var data = new FormData(document.getElementById("FormMascota"));
                    data.append("_token", '{{ csrf_token() }}');
                    $.ajax({
                        method: "POST",
                        url: url,
                        data: data,
                        dataType: "json",
                        processData: false,
                        contentType: false,
                        success: function(result) {
                            $("#addModal").modal('toggle');
                            $('#tableMascotas').DataTable().ajax.reload();
                            alertas('Dato creado.')
                        }
                    });
                }
            })
        });

        function listValuesJson() {
            json = JSON.parse(event.srcElement.getAttribute('data-json'))
            $("#id").val(json["id"]);
            $('#btnsave').attr('data-id', json["id"]);
            $("#nombre").val(json["nombre"]);
            $("#idtipomascota").val(json["idtipomascota"]);
            $("#raza").val(json["raza"]);
            $("#fecha_nacimiento").val(json["fecha_nacimiento"]);
            $("#propietario").val(json["propietario"]);
            $("#tel_propietario").val(json["tel_propietario"]);
            $("#dir_propietario").val(json["dir_propietario"]);
            $("#email_propietario").val(json["email_propietario"]);
        }

        function valueDelete(id) {
            $("#iddelete").val(id);
            $('#btndelete').attr('data-id', id);
        }

        function _validForm(form) {
            let tipo = 'success';
            let contadorerror = 0;
            const $inputs = $(form).find('div').children().find(':input.requerido[type="text"]') //INPUTS
            const $inputsnumber = $(form).find('div').children().find(':input.requerido[type="number"]') //INPUTS
            const $selects = $(form).find('div').children().find('select.requerido') //SELECTS
            $inputs.each(function(_index, element) {
                if ($(element).val() == 0) {
                    $(element).addClass('is-invalid');
                    contadorerror = contadorerror + 1;
                } else
                    $(element).addClass('is-valid');
            });
            $inputsnumber.each(function(index, element) {
                if ($(element).val() < 0 || $(element).val() === '') {
                    $(element).addClass('is-invalid');
                    contadorerror = contadorerror + 1;
                } else
                    $(element).addClass('is-valid');
            });
            $selects.each(function(index, element) {
                if ($(element).val() == 0) {
                    $(element).addClass('is-invalid');
                    contadorerror = contadorerror + 1;
                } else
                    $(element).addClass('is-valid');
            });
            return contadorerror;
        }

        function alertas(msj, tipo = 'success') {
            //Tipo de alerta success-error-warning-info-question
            Swal.fire(
                'Resultado de operación',
                msj,
                tipo
            );
        }
    </script>
@endsection
