<label for="Tipo_rol">Tipo rol</label>
<input type="text" name="Tipo_rol" value="{{isset($roles->Tipo_rol)?$roles->Tipo_rol:''}}">

<label for="descripcion">Descripcion</label>
<input type="text" name="descripcion" value="{{isset($roles->descripcion)?$roles->Tipo_rol:''}}">

<input type="submit" value="Guardar">