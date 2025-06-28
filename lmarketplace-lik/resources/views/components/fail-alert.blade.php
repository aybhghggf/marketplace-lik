<div x-data="{ show: true }" x-show="show" x-transition
     class="fixed top-4 right-4 z-[9999] w-full max-w-md">
    <div class="bg-red-50 border-l-4 border-red-500 text-red-700 p-4 rounded-lg shadow-lg flex items-start mx-4">
        <i class="ri-close-circle-fill text-xl mr-3"></i>
        <div class="flex-1">
            {{ $message ?? session('error') }}
        </div>
        <button @click="show = false" class="text-red-600 hover:text-red-800 ml-2">
            <i class="ri-close-line"></i>
        </button>
    </div>
</div>