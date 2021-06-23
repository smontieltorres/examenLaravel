<div>
    @if (!$Edit)
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
                        <span class="badge bg-primary rounded-pill mt-2 mb-2 text-light" style="cursor: pointer"
                            wire:click="getAction('edit', {{ $user->id }})">Editar</span>
                        <span class="badge bg-danger rounded-pill mt-2 mb-2 text-light" style="cursor: pointer"
                            wire:click="deleteUser({{ $user->id }})">Eliminar</span>
                    </div>
                </li>
            </ul>
        @endforeach
    @elseif($Create)
        <livewire:edit-create />
    @else
        <livewire:edit-create />
    @endif

</div>
