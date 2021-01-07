<div class="form-group row">
    <label class="col-md-3 form-control-label" for="descripcion">Tipo</label>
    <div class="col-md-9">
        <select name="tipo" id="tipo" class="form-control">
            <option value=""></option>
            @isset($dispositivo)
                @foreach ($tipos as $tipo)
                    <option value="{{ $tipo->id }}" {{ $tipo->nombre == $dispositivo->tipo ? 'selected' : '' }}>
                        {{ $tipo->nombre }}
                    </option>
                @endforeach
            @endisset
        </select>
    </div>
</div>
<div class="form-group row">
    <label class="col-md-3 form-control-label" for="descripcion">Marca</label>
    <div class="col-md-9">
        <input type="text" name="marca" id="marca" class="form-control" placeholder="Ingrese la Marca">
    </div>
</div>
<div class="form-group row">
    <label class="col-md-3 form-control-label" for="descripcion">Fecha de Inicio</label>
    <div class="col-md-9">
        <input type="text" name="fecha_inicio" id="fecha_inicio" class="form-control"
            placeholder="Ingrese fecha de inicio">
    </div>
</div>
<div class="form-group row">
    <label class="col-md-3 form-control-label" for="descripcion">Fecha de Entrega</label>
    <div class="col-md-9">
        <input type="text" name="fecha_entrega" id="fecha_entrega" class="form-control"
            placeholder="Ingrese fecha de entrega">
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
            @isset($clientes)
                @foreach ($clientes as $cliente)
                    <option value="{{ $cliente->id }}" {{ $cliente->nombre == $dispositivo->cliente ? 'selected' : '' }}>
                        {{ $cliente->nombre }}
                    </option>
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
            @isset($empleados)
                @foreach ($empleados as $empleado)
                    <option value="{{ $empleado->id }}" {{ $empleado->name == $dispositivo->empleado ? 'selected' : '' }}>
                        {{ $empleado->name }}
                    </option>
                @endforeach
            @endisset
        </select>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times fa-2x"></i> Cerrar</button>
    <button type="submit" class="btn btn-success" id="guardar"><i class="fa fa-save fa-2x"></i> Guardar</button>
</div>
