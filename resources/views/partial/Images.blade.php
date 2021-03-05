<div class="border border-black p-2">
    <div class="flex justify-between mb-3 border-b border-black pb-1">
        <h3 class="uppercase">images</h3>
        <button form="uploadPic"
                type="submit"
                class="border-2 border-blue-300  px-4 rounded hover:text-white hover:bg-blue-400 hover:text-white"
        >
            Save
        </button>

    </div>


    @if( count($pics) < 4 )
        <form method="POST"
              action="/images"
              id="uploadPic"
              enctype="multipart/form-data"
              class="mb-3 border-black border-b pb-3"
        >
            @csrf
            <input class="border border-black p-2 w-full"
                   type="file"
                   name="pic"
                   required
            />

        </form>
    @else
        <p class="capitalize font-bold">maximum 4 images, delete some to upload new images</p>
    @endif

    <div>
        <h3 class="font-bold text-2xl">Click for full size</h3>
        @forelse($pics as $pic)
            <div class="flex justify-between items-end px-4 border-b border-black pb-1">
                <a href="{{asset('storage/'.$pic->image_src)}}">
                    <img
                        src="{{asset('storage/'.$pic->image_src)}}"
                        width="150"
                        class="my-3">
                </a>
                <form method="POST" action="/images/{{$pic->id}}">
                    @csrf
                    @method('DELETE')
                    <button type="submit">🗑️</button>
                </form>
            </div>
        @empty
            <p>no pic upload yet</p>
        @endforelse
    </div>
</div>
