<div 
    x-data="{ show: true }" 
    x-show="show" 
    x-transition 
    @keydown.escape.window="show = false"
    x-init="setTimeout(() => show = false, 5000)" 
    tabindex="0"
    class="fixed top-4 right-4 z-[9999] w-full max-w-md"
>
    <div class="bg-green-50 border-l-4 border-green-500 text-green-700 p-4 rounded-lg shadow-lg flex items-start mx-4">
        <i class="ri-checkbox-circle-fill text-xl mr-3"></i>
        <div class="flex-1">
            {{ $message ?? session('success') }}
        </div>
        <button @click="show = false" class="text-green-600 hover:text-green-800 ml-2" aria-label="Dismiss">
            <i class="ri-close-line"></i>
        </button>
    </div>
</div>
