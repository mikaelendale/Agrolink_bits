<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-xl-3">
                <div class="contact-title">
                    <h4 class="mb-xl-0 mb-2">Delete account</h4>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="setting-input mb-3">
                    <p>{{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
                    </p>
                </div>
                <button type="button" class="btn btn-danger mb-2" data-bs-toggle="modal"
                    data-bs-target="#basicModal">Delete account
                </button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="basicModal" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete Account</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>
                <div class="modal-body text-bold"> {{ __('Are you sure you want to delete your account?') }} <br>
                    {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                    <br>
                    <div class="mb-3"><br>
                        <label for="password" class="form-label">{{ __('Password') }}</label>
                        <input id="password" name="password" type="password" class="form-control" placeholder="{{ __('Password') }}">
                        <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-success light btn-sm" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-danger btn-sm">Delete</button>
                </div>
            </div>
        </form>
    </div>
</div>
{{-- <section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Delete Account') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <x-danger-button x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')">{{ __('Delete Account') }}</x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ __('Are you sure you want to delete your account?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                <x-text-input id="password" name="password" type="password" class="mt-1 block w-3/4"
                    placeholder="{{ __('Password') }}" />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-danger-button class="ms-3">
                    {{ __('Delete Account') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section> --}}
