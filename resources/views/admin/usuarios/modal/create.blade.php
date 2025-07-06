<div class="container-modal-crear">
    <div class="registrar-producto-container">
        <h2>Registrar producto</h2>
        <form action="{{ route('admin.usuarios.store') }}" method="POST" enctype="multipart/form-data"
            id="formularioUsuarios" class="">
            @csrf
            <label for="user" class="form-label"><i class="fa-solid fa-cubes"></i>Usuario</label>
            <input type="text" class="form-control" id="user" name="user"
                placeholder="Usuario" minlength="50" required>


            <label for="documento_usuario" class="form-label"><i class="fa-sharp fa-solid fa-coins" style="color: #FFD43B;"></i>Precio del
                producto</label>
            <input type="number" class="form-control" id="documento_usuario"
                name="documento_usuario" placeholder="Numero de documento" max="10" required>
            <br>
            <label for ="password" class="form-label"><i class="fa-solid fa-lock"></i>Contraseña</label>
            <input type="password" class="form-control" id="password" name="password"
                placeholder="Contraseña" minlength="8" required>
            <br>
            <label for="telefono_usuario" class="form-label"><i class="fa-solid fa-phone"></i>Telefono</label>
            <input type="number" class="form-control" id="telefono_usuario" name="telefono_usuario"
                placeholder="Telefono" max="10" required>
            <br>

            <button type="submit">Crear</button>
        </form>
        <button type="submit" class="btn" id='ocultar-modal-crear'>Cancelar</button>
    </div>
</div>
<script src="{{ asset('js/usuarios/crear.js') }}"></script>
