<div class="form-group row">
    <label class="col-md-3 form-control-label" for="descripcion">Tipo</label>
    <div class="col-md-9">
        <select name="tipo" id="tipo" class="form-control">
            <option value=""></option>"
            <!--$cliente->localidad == $localidad->nombre ? 'selected' : ''--->
            @isset($tipos)
                @foreach ($tipos as $tipo)
                    <option value="{{ $tipo->id }}">{{ $tipo->nombre }}</option>
                @endforeach
            @endisset
        </select>
    </div>
</div>
<div class="form-group row">
    <label class="col-md-3 form-control-label" for="descripcion">Marca</label>
    <div class="col-md-9">
        <input type="text" name="marca" id="marca" class="form-control" placeholder="Ingrese la marca">
    </div>
</div>
<div class="form-group row">
    <label class="col-md-3 form-control-label" for="descripcion">Fecha de Inicio</label>
    <div class="col-md-9">
        <input type="text" name="fecha_inicio" id="fecha_inicio" class="form-control"
            placeholder="Ingrese la fecha de inicio">
    </div>
</div>
<div class="form-group row">
    <label class="col-md-3 form-control-label" for="descripcion">Fecha de Entrega</label>
    <div class="col-md-9">
        <input type="text" name="fecha_entrega" id="fecha_entrega" class="form-control"
            placeholder="Ingrese  la fecha de entrega">
    </div>
</div>
<div class="form-group row">
    <label class="col-md-3 form-control-label" for="descripcion">Estado</label>
    <div class="col-md-9">
        <select name="estado" id="estado" class="form-control">
            <option value=""></option>
            <option value="Pendiente">Pendiente</option>
            <option value="Reparado">Reparado</option>
            <option value="Entregado">Entregado</option>
        </select>
    </div>
</div>
<div class="form-group row">
    <label class="col-md-3 form-control-label" for="descripcion">Total</label>
    <div class="col-md-9">
        <input type="text" name="total" id="total" class="form-control" placeholder="Ingrese el total">
    </div>
</div>
<div class="form-group row">
    <label class="col-md-3 form-control-label" for="descripcion">Cliente</label>
    <div class="col-md-9">
        <select name="cliente" id="cliente" class="form-control">
            <option value=""></option>"
            <!--$cliente->localidad == $localidad->nombre ? 'selected' : ''--->
            @isset($clientes)
                @foreach ($clientes as $cliente)
                    <option value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
                @endforeach
            @endisset
        </select>
    </div>
</div>
<div class="form-group row">
    <label class="col-md-3 form-control-label" for="descripcion">Empleado</label>
    <div class="col-md-9">
        <select name="empleado" id="empleado" class="form-control">
            <option value=""></option>"
            <!--$cliente->localidad == $localidad->nombre ? 'selected' : ''--->
            @foreach ($empleados as $empleado)
                <option value="{{ $empleado->id }}">{{ $empleado->name }}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="form-group row">
    <label class="col-md-3 form-control-label" for="descripcion">Anticipo</label>
    <div class="col-md-9">
        <input type="text" name="anticipo" id="anticipo" class="form-control" placeholder="Ingrese el anticipo">
    </div>
</div>
<div class="form-group row">
    <label class="col-md-3 form-control-label" for="descripcion">Soluciones</label>
    <div class="col-md-9">
        <input type="text" name="soluciones" id="soluciones" class="form-control"
            placeholder="Ingrese las posibles soluciones">
    </div>
</div>
<div class="form-group row">
    <label class="col-md-3 form-control-label" for="descripcion">Color</label>
    <div class="col-md-9">
        <input type="text" name="color" id="color" class="form-control" placeholder="Ingrese el color del dispositivo">
    </div>
</div>
<div class="form-group row">
    <label class="col-md-3 form-control-label" for="descripcion">No. Serie</label>
    <div class="col-md-9">
        <input type="text" name="no_serie" id="no_serie" class="form-control" placeholder="Ingrese el No. Serie">
    </div>
</div>
<div class="form-group row">
    <label class="col-md-3 form-control-label" for="descripcion">Observaciones</label>
    <div class="col-md-9">
        <Textarea name="observaciones" id="observaciones" class="form-control"></Textarea>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times fa-2x"></i> Cerrar</button>
    <button type="submit" class="btn btn-success" id="guardar"><i class="fa fa-save fa-2x"></i> Guardar</button>
</div>
