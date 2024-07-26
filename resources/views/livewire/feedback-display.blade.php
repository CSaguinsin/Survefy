<div class="space-y-5">
    @foreach($feedbacks as $feedback)
        <div class="pt-5 flex flex-row w-[40rem] h-[10rem] p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <div class="flex flex-col pl-8px w-[20rem]">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $feedback->title }}</h5>
                    <p class="mb-2 text-5 text-gray-900 dark:text-white">{{ $feedback->feedback }}</p>
                </a>
            </div>
            <div class="flex flex-col space-y-6 pr-8px ml-auto">
                @auth
                <details class="dropdown" x-data="{ summaryText: '{{ $feedback->status }}' }" x-ref="dropdown">
                    <summary class="btn m-1" x-text="summaryText">⭐ Options</summary>
                    <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                        <li><a href="#" x-on:click="summaryText = '🚧 Work In progress'; $wire.updateStatus({{ $feedback->id }}, '🚧 Work In progress'); $refs.dropdown.removeAttribute('open')">🚧 Work In progress</a></li>
                        <li><a href="#" x-on:click="summaryText = '✅ Shipped'; $wire.updateStatus({{ $feedback->id }}, '✅ Shipped'); $refs.dropdown.removeAttribute('open')">✅ Shipped</a></li>
                        <li><a href="#" x-on:click="summaryText = '❌ Cancelled'; $wire.updateStatus({{ $feedback->id }}, '❌ Cancelled'); $refs.dropdown.removeAttribute('open')">❌ Cancelled</a></li>
                    </ul>
                </details>
                <button wire:click="delete({{ $feedback->id }})" class="btn btn-ghost">
                    ❌ Delete
                </button>
                @else
                <p class="mb-2 text-5 text-gray-900 dark:text-white">{{ $feedback->status }}</p>
                @endauth
            </div>
        </div>
    @endforeach
</div>
