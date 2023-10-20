<div>
    <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->


    @if ($allOption)
    <label for="{{ $name }}" class="mb-1 flex items-center">
        <input type="radio" name="{{ $name }}" value="" @checked(!request($name)) />
        <span class="ml-2">{{ $allOption }}</span>
    </label>
    @endif
    @foreach ($options as $label=>$option )
    <label for="{{$name}}" class="mb-1 flex items-center">
        <input type="radio" name="{{$name}}" value="{{ $option }}" @checked($option===($value ?? request($name))) />
        <span class="ml-2">{{ Str::ucfirst($label) }}</span>
    </label>
    @endforeach
    @error($name)
    <div class="mt-1 text-xs text-red-500">
        {{ $message }}
    </div>
    @enderror

</div>
