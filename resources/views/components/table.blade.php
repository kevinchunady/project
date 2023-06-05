@props(['data'])

<div class="overflow-x-scroll">
    <table {{ $attributes->merge(['class' => 'w-full table-auto']) }}>
        <thead class="bg-clightblue items-end text-cdarkblue text-xs font-semibold uppercase">
            {{ $header }}
        </thead>
        <tbody class="text-sm text-center">
            {{ $body }}
        </tbody>
    </table>
</div>