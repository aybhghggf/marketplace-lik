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
>
    <div class="bg-green-50 border-l-4 border-green-500 text-green-700 p-4 rounded-lg shadow-lg flex items-start">
        <i class="ri-checkbox-circle-fill text-xl mr-3"></i>
        <div class="flex-1">
            {{ $message ?? session('success') }}
        </div>
        <button @click="show = false" class="text-green-600 hover:text-green-800 ml-2" aria-label="Fermer">
            <i class="ri-close-line text-lg"></i>
        </button>
    </div>
</div>
