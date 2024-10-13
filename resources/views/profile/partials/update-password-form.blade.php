@if (session('status') === 'password-updated')
    <div x-transition x-init="setTimeout(() => show = false, 2000)" class="alert alert-success solid alert-dismissible fade show">
        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"
            stroke-linecap="round" stroke-linejoin="round" class="me-2">
            <polyline points="9 11 12 14 22 4"></polyline>
            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
        </svg>
        <strong>Success!</strong> Saved!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
            <span>
                <i class="fa-solid fa-xmark"></i>
            </span>
        </button>
    </div>
@endif
<div class="card">
    <div class="card-body">
        <h3 class="mb-4">{{ __('Update Password') }}</h3>
        <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
            @csrf
            @method('put')
            <div class="row">
                <div class="col-xl-6 col-sm-6">
                    <div class="setting-input">
                        <label for="exampleInputEmail1" class="form-label">Current password</label>
                        <input type="password" class="form-control" id="update_password_current_password"
                            name="current_password" autocomplete="current-password">
                        <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                    </div>
                </div>
                <div class="col-xl-6 col-sm-6">
                    <div class="setting-input">
                        <label for="exampleInputPassword1" class="form-label">New Password</label>
                        <input id="update_password_password" name="password" type="password" class="form-control"
                            autocomplete="new-password">
                        <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                    </div>
                </div>
                <div class="col-xl-6 col-sm-6">
                    <div class="setting-input">
                        <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                        <input id="update_password_password_confirmation" name="password_confirmation" type="password"
                            class="form-control" autocomplete="new-password">
                        <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                    </div>
                </div>
                <div class="col-xl-6 col-sm-6">
                    <div class="setting-input">
                        <label for="exampleInputPassword1" class="form-label"></label>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary float-end w-50 btn-md">Save
                        Setting</button>
                </div>
            </div>
        </form>
    </div>
</div>
{{-- <section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="update_password_current_password" :value="__('Current Password')" />
            <x-text-input id="update_password_current_password" name="current_password" type="password"
                class="mt-1 block w-full" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_password_password" :value="__('New Password')" />
            <x-text-input id="update_password_password" name="password" type="password" class="mt-1 block w-full"
                autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_password_password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password"
                class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section> --}}
