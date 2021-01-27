<x-jet-action-section>
    <x-slot name="title">
        {{ __('ELIMINAR CUENTA') }}
    </x-slot>

    <x-slot name="description">
        {{ __('ELIMINAR PERMANENTEMENTE TU CUENTA.') }}
    </x-slot>

    <x-slot name="content">
        <div class="max-w-xl text-sm text-gray-600">
            {{ __('Una vez que tu cuenta esté eliminada, todos tus datos y archivos serán borrados permanentemente. Despues de borrar tu cuenta, porfavor descarga cual información o datos que desees respaldar.') }}
        </div>

        <div class="mt-5">
            <x-jet-danger-button wire:click="confirmUserDeletion" wire:loading.attr="disabled">
                {{ __('BORRAR CUENTA') }}
            </x-jet-danger-button>
        </div>

        <!-- Delete User Confirmation Modal -->
        <x-jet-dialog-modal wire:model="confirmingUserDeletion">
            <x-slot name="title">
                {{ __('BORRAR CUENTA') }}
            </x-slot>

            <x-slot name="content">
                {{ __('¿Estas seguro que quiero borrar tu cuenta? una vez que tu cuenta sea borrada, todos tus datos y archivos serán borrados permanentemente. Porfavor ingresa tu contraseña para confirmar que quieres borrar permanentemente tu cuenta.') }}

                <div class="mt-4" x-data="{}" x-on:confirming-delete-user.window="setTimeout(() => $refs.password.focus(), 250)">
                    <x-jet-input type="password" class="mt-1 block w-3/4"
                                placeholder="{{ __('Password') }}"
                                x-ref="password"
                                wire:model.defer="password"
                                wire:keydown.enter="deleteUser" />

                    <x-jet-input-error for="password" class="mt-2" />
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled">
                    {{ __('REGRESAR') }}
                </x-jet-secondary-button>

                <x-jet-danger-button class="ml-2" wire:click="deleteUser" wire:loading.attr="disabled">
                    {{ __('ELIMINAR CUENTA') }}
                </x-jet-danger-button>
            </x-slot>
        </x-jet-dialog-modal>
    </x-slot>
</x-jet-action-section>
