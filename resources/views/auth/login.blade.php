<x-master>
    <div class="container mx-auto flex justify-center">
        <div class="row px-16 py-8 bg-gray-200 rounded-2xl">
            <div class="col-md-8">
                <div class="card">
                    <div class="font-bold text-lg mb-4">{{ __('Login') }}</div>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-6">
                            <label for="email"
                                   class="block mb-2 uppercase font-bold text-xs text-gray-700"
                            >
                                Email
                            </label>

                            <input id="email"
                                   type="email"
                                   class="border border-gray-400 p-2 w-full"
                                   name="email"
                                   value="{{ old('email') }}"
                                   required
                                   autocomplete="email"
                            >

                            @error('email')
                            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="password"
                                   class="block mb-2 uppercase font-bold text-xs text-gray-700"
                            >
                                Password
                            </label>

                            <input id="password"
                                   type="password"
                                   class="border border-gray-400 p-2 w-full"
                                   name="password"
                                   required
                                   autocomplete="current-password"
                            >

                            @error('password')
                            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <div>
                                <input class="mr-1" type="checkbox" name="remember" id="remember">

                                <label class="text-xs text-gray-700 font-bold uppercase"
                                       for="remember"
                                    {{old('remember')? 'checked' : ''}}
                                >
                                    Remember me
                                </label>
                            </div>

                            @error('remember')
                            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                            @enderror

                        </div>

                        <div class="mb-6">
                            <button type="submit"
                                    class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mt-2"
                            >
                                Submit
                            </button>
                            <a href="{{ url("/register") }}" class="ml-4 text-lg hover:underline">Register</a>
                            |<a href="{{route("password.request")}}" class="ml-4 text-lg hover:underline">Forgot
                                password ?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-master>

