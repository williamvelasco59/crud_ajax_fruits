<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap/bootstrap.css'); ?>">

    <title>Fruit List</title>
</head>
<body>

<div class="container">
    <div class="row">
    <div class="col-12">
        <div class="col-md-12" style="margin-top: 50px">
            <h1>Fruit
                <small>List</small>
                <div class="float-end">
                    <a href="javascript:void(0);" class="btn btn-primary" 
                    data-bs-toggle="modal" data-bs-target="#Modal_Add">
                        <span class="fa fa-plus">Add New</span>
                    </a>
                    <!-- Button trigger modal -->
                </div>
            </h1>
        </div>

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Sr No.</th>
                    <th>Fruit Name</th>
                    <th>Fruit Price</th>
                    <th style="text-align: right;">Actions</th>
                </tr>
            </thead>
            <tbody id="show_data">
            </tbody>
        </table>


    </div>
    </div>
</div>

<!-- MODAL ADD -->
<!-- Modal -->
<form>
    <div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-keyboard="false" data-bs-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Adicionar nueva fruta</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Nombre de la fruta</label>
                    <div class="col-md-10">
                        <input type="text" name="fruit_name" id="fruit_name" class="form-control" placeholder="Nombre de la fruta">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Precio</label>
                    <div class="col-md-10">
                        <input type="text" name="price" id="price" class="form-control" placeholder="Precio">
                    </div>
                </div> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" type="submit" id="btn-save" class="btn btn-primary">Guardar</button>
            </div>
            </div>
        </div>
    </div>
</form>
<!-- END MODAL ADD -->


<!-- MODAL EDIT -->
<!-- Modal -->
<form>
    <div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-keyboard="false" data-bs-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Adicionar nueva fruta</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <input type="hidden" name="fruit_id_edit" id="fruit_id_edit" class="form-control">
                
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Nombre de la fruta</label>
                    <div class="col-md-10">
                        <input type="text" name="fruit_name_edit" id="fruit_name_edit" class="form-control" placeholder="Nombre de la fruta">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Precio</label>
                    <div class="col-md-10">
                        <input type="text" name="price_edit" id="price_edit" class="form-control" placeholder="Precio">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" type="submit" id="btn_update" class="btn btn-primary">Editar</button>
            </div>
            </div>
        </div>
    </div>
</form>
<!-- END MODAL EDIT -->

<!-- MODAL DELETE -->
<!-- Modal -->
<form>
    <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-keyboard="false" data-bs-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Fruta</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <strong>Esta seguro de que desea eliminar el item ?</strong>
                
            </div>
            <div class="modal-footer">
                <input type="hidden" name="fruit_id_delete" id="fruit_id_delete" class="form-control">

                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" type="submit" id="btn_delete" class="btn btn-primary">Eliminar</button>
            </div>
            </div>
        </div>
    </div>
</form>
<!-- END MODAL DELETE -->



    <script type="text/javascript" src="<?= base_url('assets/js/jquery/jquery-3.6.1.js'); ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/bootstrap/bootstrap.js'); ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/fruits.js'); ?>"></script>
</body>
</html>