<div class="form-group row">
    <label class="col-md-3 form-control-label" for="nombre">Nombre</label>
    <div class="col-md-9">
        <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre de categoría" required pattern="^[a-zA-Z_áéíóúñ\s]{0,30}$">
    </div>
</div>
<div class="form-group row">
    <label class="col-md-3 form-control-label" for="descripcion">Email</label>
    <div class="col-md-9">
    <input type="text" name="email" id="email" class="form-control" placeholder="Ingrese Email">
    </div>
</div>
<div class="form-group row">
    <label class="col-md-3 form-control-label" for="descripcion">Contraseña</label>
    <div class="col-md-9">
    <input type="password" name="password" id="password" class="form-control" placeholder="Ingrese su Contraseña">
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times fa-2x"></i> Cerrar</button>
    <button type="submit" class="btn btn-success" id="guardar"><i class="fa fa-save fa-2x"></i> Guardar</button>
</div>
