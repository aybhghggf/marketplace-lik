<div 
    x-data="{ show: true }" 
    x-show="show" 
    x-transition.duration.300ms
    @keydown.escape.window="show = false"
    x-init="setTimeout(() => show = false, 5000)" 
    tabindex="0"
    role="alert"
    aria-live="assertive"
    class="fixed top-4 right-4 z-[9999] w-full max-w-md mx-4"
    x-cloak
>
    <div class="bg-red-50 border-l-4 border-red-500 text-red-700 p-4 rounded-lg shadow-lg flex items-start">
        <i class="ri-close-circle-fill text-xl mr-3"></i>
        <div class="flex-1">
            {{ $message ?? session('error') }}
        </div>
        <button 
            type="button"
            @click="show = false" 
            class="text-red-600 hover:text-red-800 ml-2" 
            aria-label="Dismiss"
        >
            <i class="ri-close-line"></i>
        </button>
    </div>
</div>
