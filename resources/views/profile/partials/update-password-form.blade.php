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
                        <input type="password" class="form-control" name="current_password" type="password" autocomplete="current-password" >
                        <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                    </div>
                </div>
                <div class="col-xl-6 col-sm-6">
                    <div class="setting-input">
                        <label for="exampleInputPassword1" class="form-label">New Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password"
                            type="password" autocomplete="new-password">
                        <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                    </div>
                </div>
                <div class="col-xl-6 col-sm-6">
                    <div class="setting-input">
                        <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password"
                            type="password" name="password_confirmation" type="password" autocomplete="new-password"
                            autocomplete="new-password">
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
    </div>
</div>
