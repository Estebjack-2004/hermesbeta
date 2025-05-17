<script src="vistas/js/autorizaciones.js"></script>
<div class="wrapper">
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Autorizaciones</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="tblAutorizaciones" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Usuarios</th>
                    <th>Fecha solicitud</th>
                    <th>Fecha de reserva</th>
                    <th>Fecha de entrega</th>
                    <th>Autorizaciones</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Cristian Orozco</td>
                    <td>11/5/2025</td>
                    <td>18/6/2025</td>
                    <td>18/6/2025</td>
                    <td>
                      <div class="icheck-primary d-inline mr-2">
                        <input type="checkbox" id="auth1_1">
                        <label for="auth1_1"></label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="auth1_2">
                        <label for="auth1_2"></label>
                      </div>
                    </td>
                    <td>
                      <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#detailsModal1">Ver</button>
                    </td>
                  </tr>
                  <tr>
                    <td>Luis Hernei</td>
                    <td>11/5/2025</td>
                    <td>18/6/2025</td>
                    <td>18/6/2025</td>
                    <td>
                      <div class="icheck-primary d-inline mr-2">
                        <input type="checkbox" id="auth2_1">
                        <label for="auth2_1"></label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="auth2_2">
                        <label for="auth2_2"></label>
                      </div>
                    </td>
                    <td>
                      <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#detailsModal2">Ver</button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- MODAL 1 -->
    <div class="modal fade" id="detailsModal1" tabindex="-1" role="dialog" aria-labelledby="detailsModalLabel1" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="detailsModalLabel1">Detalles de Cristian Orozco</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table class="table table-bordered">
              <tr><td>Tipo de usuario</td><td>Instructor</td></tr>
              <tr><td>Fecha de reserva</td><td>10/2000</td></tr>
              <tr><td>Fecha de entrega</td><td>10/2000/09</td></tr>
              <tr><td>Objeto</td><td>Equipo</td></tr>
              <tr><td>Cantidad</td><td>04</td></tr>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success">Autorizar</button>
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#rechazoModal1" data-dismiss="modal">Rechazar</button>
            <button type="button" class="btn btn-primary" onclick="printModal('detailsModal1')">Imprimir</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- MODAL DE RECHAZO 1 -->
    <div class="modal fade" id="rechazoModal1" tabindex="-1" role="dialog" aria-labelledby="rechazoModalLabel1" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header bg-danger">
            <h5 class="modal-title" id="rechazoModalLabel1">Rechazar préstamo - Cristian Orozco</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="formRechazo1">
              <div class="form-group">
                <label for="motivoRechazo1">Motivo del rechazo:</label>
                <textarea class="form-control" id="motivoRechazo1" rows="5" placeholder="Describa el motivo del rechazo del préstamo..." required></textarea>
              </div>
              <div class="form-group">
                <label for="emailRechazo1">Correo electrónico del solicitante:</label>
                <input type="email" class="form-control" id="emailRechazo1" value="correo@cristian.com" required>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#detailsModal1">Cancelar</button>
            <button type="button" class="btn btn-danger" onclick="enviarRechazo(1)">Enviar rechazo</button>
          </div>
        </div>
      </div>
    </div>

    <!-- MODAL DE RECHAZO 2 -->
    <div class="modal fade" id="rechazoModal2" tabindex="-1" role="dialog" aria-labelledby="rechazoModalLabel2" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header bg-danger">
            <h5 class="modal-title" id="rechazoModalLabel2">Rechazar préstamo - Luis Hernei</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="formRechazo2">
              <div class="form-group">
                <label for="motivoRechazo2">Motivo del rechazo:</label>
                <textarea class="form-control" id="motivoRechazo2" rows="5" placeholder="Describa el motivo del rechazo del préstamo..." required></textarea>
              </div>
              <div class="form-group">
                <label for="emailRechazo2">Correo electrónico del solicitante:</label>
                <input type="email" class="form-control" id="emailRechazo2" value="correo@luis.com" required>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#detailsModal2">Cancelar</button>
            <button type="button" class="btn btn-danger" onclick="enviarRechazo(2)">Enviar rechazo</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
