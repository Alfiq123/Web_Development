@props(["active" => false])

    <a {{ $attributes }} class="{{ $active ? 'bg-gray-800 text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium">{{ $slot }}</a>