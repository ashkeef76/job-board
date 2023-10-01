<div>
    <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
    <div class="mb-1 font-semibold">{{Str::ucfirst($name)}}</div>

    <label for="{{$name}}" class="mb-1 flex items-center">
        <input type="radio" name="{{$name}}" value="" @checked(!request($name)) />
        <span class="ml-2">All</span>
    </label>
    @foreach ($options as $label=>$option )
    <label for="{{$name}}" class="mb-1 flex items-center">
        <input type="radio" name="{{$name}}" value="{{ $option }}" @checked($option===request($name)) />
        <span class="ml-2">{{ Str::ucfirst($label) }}</span>
    </label>
    @endforeach

</div>
