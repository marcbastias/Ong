<head>
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
</head>
<div>
    <div class="card shadow">
        <div class="card-header bg-white">
            <input wire:model.live="search" class="form-control" placeholder="Search...">
        </div>
        @if ($users->count())
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr class="border-b border-gray-200">
                                <th
                                    class="px-6 py-3 text-left text-md font-medium text-gray-500 uppercase tracking-wider tipo_principal">
                                    Nombre
                                </th>
                                <th
                                    class="px-6 py-3 text-left text-md font-medium text-gray-500 uppercase tracking-wider tipo_principal">
                                    Rol
                                </th>
                                <th
                                    class="px-6 py-3 text-left text-md font-medium text-gray-500 uppercase tracking-wider tipo_principal">
                                    Status
                                </th>
                                <th
                                    class="px-6 py-3 text-left text-md font-medium text-gray-500 uppercase tracking-wider tipo_principal">
                                    Acciones
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($users as $user)
                                <tr>
                                    <td class="">
                                        <!-- Mostrar la imagen de perfil en un círculo -->
                                        <div class="d-flex align-items-center">
                                            <div class="mr-21">
                                                @if ($user->photo)
                                                    <img id="picture" src="{{ Storage::url($user->photo) }}"
                                                        alt="Foto de perfil" width="60" height="60"
                                                        style="border-radius: 50%; margin-right: 20px; border: 2px solid var(--primary-color);">
                                                @else
                                                    <img src="{{ asset('assets/images/default-profile-image.jpg') }}"
                                                        alt="Foto de perfil por defecto" width="60" height="60"
                                                        style="border-radius: 50%; margin-right:20px;">
                                                @endif
                                            </div>
                                            <div>
                                                <div class="text-lg uppercase">{{ $user->name }}</div>
                                                <div class="text-sm">{{ $user->email }}</div>

                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{ implode(', ', $user->getRoleNames()->toArray()) }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="w-2 h-2 mr-2 bg-green-500 rounded-full animate-ping"></div>
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                Active
                                            </span>
                                        </div>
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <a href="{{ route('admin.users.edit', $user->id) }}"
                                            class="text-indigo-600 hover:text-indigo-900 mr-2">
                                            <i class="fas fa-edit"></i> Editar
                                        </a>
                                        <button type="button" class="text-red-600 hover:text-red-900 delete-user"
                                            data-user-id="{{ $user->id }}">
                                            <i class="fas fa-trash-alt"></i> Eliminar
                                        </button>
                                        <form id="delete-form-{{ $user->id }}"
                                            action="{{ route('admin.users.destroy', $user->id) }}" method="POST"
                                            style="display: none;" onclick="mostrarMensajeBorrado();">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer bg-white">
                {{ $users->links() }}
            </div>
        @else
            <div class="card-body">
                <strong>No se encontraron usuarios</strong>
            </div>
        @endif
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        $('.delete-user').on('click', function() {
            var userId = $(this).data('user-id');
            Swal.fire({
                title: '¿Estás seguro de borrar a este usuario?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, borrarlo',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Si el usuario confirma, envía el formulario de eliminación
                    $('#delete-form-' + userId).submit();
                }
            });
        });
    });

    // Función para mostrar SweetAlert2 después de enviar el formulario
    function mostrarMensajeBorrado() {
        Swal.fire({
            title: '¡Borrado!',
            text: 'El usuario ha sido eliminado correctamente.',
            icon: 'success',
            showConfirmButton: false,
            timer: 1500
        });
    }
</script>
