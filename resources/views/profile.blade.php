<x-master>
    <div class="container mx-auto flex justify-center">
        <div class="row px-10 py-4 bg-gray-300 rounded-2xl w-1/2">
            <form method="POST" action="/profile">
                @csrf

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="name">
                        Name
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="text"
                           name="name"
                           id="name"
                           value="{{$user->name}}"
                           required
                    />

                    @error("name")
                    <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email">
                        Email
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="email"
                           name="email"
                           id="email"
                           value="{{$user->email}}"
                           required
                    />

                    @error("email")
                    <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group row mb-6">
                    <label for="password"
                           class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password"
                               class="form-control w-full p-2 @error('password') is-invalid @enderror"
                               name="password"
                               required autocomplete="new-password">
                    </div>
                </div>

                <div class="form-group row mb-6">
                    <label for="password-confirm"
                           class="col-md-4 col-form-label text-md-right ">{{ __('Confirm Password') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control w-full p-2"
                               name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                @error('password')
                <span class="invalid-feedback text-red-500" role="alert">
                <strong>{{ $message }}</strong>
            </span>
                @enderror

                <div class="mb-6">
                    <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mr-4">
                        Submit
                    </button>

                    <a href="/home"
                       class="hover:underline hover:bg-red-600 hover:text-white rounded py-2 px-4">Cancel</a>

                </div>
            </form>
        </div>
    </div>
</x-master>
