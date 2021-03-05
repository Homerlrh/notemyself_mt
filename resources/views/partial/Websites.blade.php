<div class="border border-black p-2" style="height: max-content">
    <div class="flex justify-between mb-3 border-b border-black pb-1">
        <h3 class="uppercase">websites</h3>
        <button form="web"
                type="submit"
                class="border-2 border-blue-300  px-4 rounded hover:text-white hover:bg-blue-400 hover:text-white"
        >
            Save
        </button>
    </div>

    @foreach($urls as $url)
        <a href="{{$url->url}}">
            <p class="border border-black px-2 py-1 mb-2 hover:text-yellow-300">{{$url->url}}</p>
        </a>
    @endforeach

    <form id="web" method="POST" action="/websites">
        @csrf
        <input name="links[]" class="w-full border border-black px-2 py-1 mb-2" autocomplete="off"/>
        <input name="links[]" class="w-full border border-black px-2 py-1 mb-2" autocomplete="off"/>
        <input name="links[]" class="w-full border border-black px-2 py-1 mb-2" autocomplete="off"/>
        <input name="links[]" class="w-full border border-black px-2 py-1" autocomplete="off"/>
    </form>
</div>
