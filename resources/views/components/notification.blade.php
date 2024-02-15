@props(['type' => 'info', 'message' => ''])

<div x-data="{ isOpen: true }" x-show="isOpen" x-init="setTimeout(() => isOpen = false, 3000)" x-transition:enter="transition ease-out duration-200 transform" x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in duration-200 transform" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" class="font-regular absolute top-24 left-4 rounded-lg {{ $type === 'success' ? 'bg-green-500' : 'bg-blue-500' }} p-4 text-base leading-5 text-white opacity-100 z-50">
    <span class="pr-16">{{ $message }}</span>
    <button @click="isOpen = false" class="absolute top-0 right-0 mt-2 mr-2 focus:outline-none">
        <svg class="h-4 w-4 fill-current" viewBox="0 0 24 24">
            <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/>
        </svg>
    </button>
</div>
