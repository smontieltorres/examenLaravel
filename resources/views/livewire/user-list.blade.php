<div>
    {{-- Condicion para determinar que accion se llevara a cabo y por tanto que componente renderizar --}}
    @if (!$Edit)
    {{-- ForEach para listar usuarios --}}
        @foreach ($users as $user)
            <ul class="list-group list-group-numbered">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">{{ $user->name }}</div>
                        {{ $user->email }}
                        <br>
                        {{ $user->address }}
                    </div>
                    <div class="d-flex flex-column h-100 justify-content">
                        <span class="badge  rounded-pill mt-2 mb-2">CI: {{ $user->cedula }}</span>
                        {{-- Boton para ir a la vista de edicion, pasa dos parametros a getAction (ver UserList.php) --}}
                        <span class="badge bg-primary rounded-pill mt-2 mb-2 text-light" style="cursor: pointer"
                            wire:click="getAction({{ $user->id }})">Editar</span>
                        <span class="badge bg-danger rounded-pill mt-2 mb-2 text-light" style="cursor: pointer"
                            wire:click="deleteUser({{ $user->id }})">Eliminar</span>
                    </div>
                </li>
            </ul>
        @endforeach
    @elseif($Create)
    {{-- Renderiza el componente edit-create en su modo de edicion --}}
        <livewire:edit-create />
    @else
    {{-- Renderiza el compoenete edit-create en su mode de creacion --}}
        <livewire:edit-create />
    @endif

</div>
