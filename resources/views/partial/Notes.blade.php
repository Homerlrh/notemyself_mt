<div class="border border-black p-2" style="height: max-content">
    <div class="flex justify-between mb-3 border-b border-black pb-1">
        <h3 class="uppercase">notes</h3>
        <button form="note"
                type="submit"
                class="border-2 border-blue-300  px-4 rounded hover:text-white hover:bg-blue-400 hover:text-white"
        >
            Save
        </button>
    </div>
    <div>

        <form id="note" method="POST" action="/notes">
            @csrf

            <textarea name="body"
                      class="w-full h-96 border border-black p-2"
                      placeholder="Enter your notes"
            > @if($note){{$note->body}}@else  @endif</textarea>
        </form>


    </div>
</div>
