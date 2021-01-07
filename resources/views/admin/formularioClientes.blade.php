<div class="form-group row">
    <label class="col-md-3 form-control-label" for="nombre">Nombre</label>
    <div class="col-md-9">
        <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre del cliente" required
            pattern="^[a-zA-Z_áéíóúñ\s]{0,30}$">
    </div>
</div>
<div class="form-group row">
    <label class="col-md-3 form-control-label" for="descripcion">Email</label>
    <div class="col-md-9">
        <input type="text" name="email" id="email" class="form-control" placeholder="Ingrese Email">
    </div>
</div>
<div class="form-group row">
    <label class="col-md-3 form-control-label" for="descripcion">Telefono</label>
    <div class="col-md-9">
        <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Ingrese su Telefono">
    </div>
</div>
<div class="form-group row">
    <label class="col-md-3 form-control-label" for="descripcion">Status</label>
    <div class="col-md-9">
        <select name="status" id="status" class="form-control">
            <option value=""></option>
            <option value="Activo">Activo</option>
            <option value="No Activo">No Activo</option>
        </select>
    </div>
</div>
<div class="form-group row">
    <label class="col-md-3 form-control-label" for="descripcion">Localidad</label>
    <div class="col-md-9">
        <select name="localidad" id="localidad" class="form-control">
            <option value=""></option>
            @isset($localidades, $cliente)
                @foreach ($localidades as $localidad)
                    <option value="{{ $localidad->id }}" {{ $cliente->localidad == $localidad->nombre ? 'selected' : '' }}>
                        {{ $localidad->nombre }}</option>
                @endforeach
            @endisset
        </select>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times fa-2x"></i> Cerrar</button>
    <button type="submit" class="btn btn-success" id="guardar"><i class="fa fa-save fa-2x"></i> Guardar</button>
</div>
