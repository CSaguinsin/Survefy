<!-- resources/views/livewire/add-feedback-board.blade.php -->
<div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
    <form wire:submit.prevent="save" class="space-y-6">
        <h5 class="text-xl font-bold text-gray-900 dark:text-white">Build products people really want 🚀</h5>
        @if (session()->has('success'))
            <div class="text-green-500">
                {{ session('success') }}
            </div>
        @endif
        <div>
            <label for="boardname" class="block mb-2 text-sm font-sans text-gray-900 dark:text-white">Board Name</label>
            <input wire:model="boardname" id="boardname" class="bg-gray-50 border border-gray-300 text-gray-900 font-bold text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Name of your product board 🌟" required />
        </div>
        <div class="flex items-start">
            <button type="submit" class="w-full text-white bg-customBlue hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-bold rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create Board</button>
        </div>
    </form>
</div>
