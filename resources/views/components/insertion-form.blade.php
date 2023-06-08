@props(['data'])

<div class="flex flex-row justify-between space-x-20">
    <div class="flex flex-col space-y-10 w-1/2">
        {{ $left_side }}
    </div>
    <div class="flex flex-col space-y-10 w-1/2 h-full">
        {{ $right_side }}
    </div>
</div>
