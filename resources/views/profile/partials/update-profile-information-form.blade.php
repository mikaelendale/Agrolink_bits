@if (session('status') === 'profile-updated')
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
        <h3 class="mb-4">Profile Info</h3>
        <form id="send-verification" method="post" action="{{ route('verification.send') }}">
            @csrf
        </form>
        <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
            @csrf
            @method('patch')
            <div class="row">
                <div class="col-xl-6 col-sm-6">
                    <div class="setting-input">
                        <label for="exampleInputtext" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputtext"
                            value="{{ old('name', $user->name) }}" required autofocus autocomplete="name">
                        <x-input-error class="mt-2" :messages="$errors->get('name')" />
                    </div>
                    <div class="setting-input">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                            value="{{ old('email', $user->email) }}" required autocomplete="username">
                        <x-input-error class="mt-2" :messages="$errors->get('email')" />
                        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                            <div>
                                <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">

                                    <button form="send-verification" class="btn btn-primary">
                                        {{ __('Unverified Email Click here to re-send link.') }}
                                    </button>
                                </p>

                                @if (session('status') === 'verification-link-sent')
                                    <p class="mt-2 text-center font-medium text-sm text-green-600 dark:text-green-400">
                                        {{ __('A new verification link has been sent to your email address.') }}
                                    </p>
                                @endif
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-xl-6 col-sm-6">
                    <div class="setting-input">
                        <label for="exampleInputnumber" class="form-label">User type</label>
                        <input disabled class="form-control" id="exampleInputnumber"
                            value="{{ old('usertype', $user->usertype) }}">
                    </div>
                    <div class="setting-input">
                        <label for="exampleInputPassword1" class="form-label"></label>
                        <input type="hidden" class="form-control"><br>
                    </div>
                    <button class="btn btn-primary float-end w-50 btn-md" type="submit" name="submit">Save
                        Setting</button>

                </div>

            </div>
        </form>
    </div>
</div>
