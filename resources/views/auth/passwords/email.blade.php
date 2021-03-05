<x-master>
    <div class="container mx-auto flex justify-center">
        <div class="row px-16 py-8 bg-gray-200 rounded-2xl">
            <div class="col-md-8">
                <div class="card">
                    <div class="mb-6">{{ __('Reset Password') }}</div>


                    <form method="POST" action="/emailReset">
                        @csrf
                        <div class="form-group row">
                            <label for="email"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Enter E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email"
                                       class="form-control @error('email') is-invalid @enderror" name="email"
                                       value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="mt-6">
                                <button type="submit"
                                        class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mt-2"
                                >
                                    Reset
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-master>
