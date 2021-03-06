<div class="alert alert-success addOrderSuccess" style="display:none;">
    <button type="button" class="close" data-hide="alert" aria-hidden="true">&times;</button>
    <strong><strong>
            </div>
            <div class="panel panel-default" id="adminUsersOrder">
                <!-- Default panel contents -->
                <div class="panel-heading">Ver Ordenes de Usuarios</div>
                <div class="panel-body">
                    <p>
Puede buscar la orden de un usuario aquí . Sólo tiene que escribir su correo electrónico en la barra de búsqueda y pulsar el botón Buscar..</p>
                  
                    <div class="input-group">
                        <span class="input-group-btn">
                            <button class="btn btn-default searchOrderOfUser" type="button">Buscar</button>
                        </span>
                        <input type="text" class="form-control" name="searchUserEmail" id="searchUserEmail" placeholder="Ingrese email de Usuario">
                    </div>
                </div>

                <div style="height:300px; overflow:auto;border: 1px solid rgba(51, 51, 51, 0.17);margin: 5px;">
                    <!-- Table -->
                    <table class="table table-hover" id="adminOrderTable">
                        <?= $order_table ?>
                    </table>

                </div>

            </div>

            <!-- Modal -->
            <div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel"></h4>
                        </div>

                        <div class="modal-body clearfix">

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-primary confirmAction" data-formSubmit="form">Aceptar</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

            <div class="footer">
                <p>&copy; PetFile 2016</p>
            </div>

            </div>