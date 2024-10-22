<div>
    <form wire:submit="submit">
        <div>
            <label for="bird_count">Bird Count:</label>
            <input wire:model="birdCount" type="number" id="bird_count">
        </div>

        {{-- <div>
            <label for="bird_count">Bird Count:</label>
            <input wire:model="bird_count" type="number" id="bird_count">
        </div> --}}
        <br>
        <div>
            <label for="note">Notes: </label>
            <textarea wire:model="notes" name="" id="note"></textarea>
        </div>
        <button>Add a New Bird Count Entry</button>
    </form>
    @if ($errors->any())
        <div>
            @foreach ($errors->all() as $error)
                <div style="color: red">{{ $error }}</div>
            @endforeach
        </div>
    @endif


    @foreach ($list as $bird)
        <p>{{$bird->bird_count}}</p>
        <p>{{$bird->notes}}</p>
    @endforeach
</div>
