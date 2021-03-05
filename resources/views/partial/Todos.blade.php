<div class="border border-black p-2" style="height: max-content">
    <div class="flex justify-between mb-3 border-b border-black pb-1">
        <h3 class="uppercase">tbd</h3>
        <button form="todo"
                type="submit"
                class="border-2 border-blue-300  px-4 rounded hover:text-white hover:bg-blue-400 hover:text-white"
        >
            Save
        </button>
    </div>

    <form id="todo" method="POST" action="/todos" class="mb-3 border-b border-black pb-1">
        @csrf
        <input name="body" class="w-full border border-black px-2 py-1 mb-2" autocomplete="off"/>
    </form>

    @forelse($todos as $todo)
        <form method="POST"
              action="/todos/{{$todo->id}}"
              class="flex justify-between border border-black p-2 mb-2 "
        >
            @csrf
            <p class="{{$todo->isDone? "line-through":""}}">{{$todo->item}}</p>
            <div>
                <button type="submit">
                    @if($todo->isDone)
                        ❌
                    @else
                        ✔
                    @endif</button>
                <button form="deleteTodo" type="submit">
                    🗑️
                </button>
            </div>
        </form>
        <form method="POST"
              action="/todos/{{$todo->id}}"
              id="deleteTodo"
        >
            @csrf
            @method('DELETE')
        </form>
    @empty
        <p>No todo yet</p>
    @endforelse
</div>
