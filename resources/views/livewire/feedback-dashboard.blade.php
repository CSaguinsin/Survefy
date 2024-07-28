<div class="h-[20rem]">
    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $boardname->boardname }}</h5>
    <div class="pt-10">
        <p class="font-bold pb-2">Public Link</p>
        <div class="flex items-center space-x-2">
            <div class="tooltip" data-tip="Copy Link">
                <button class="btn p-0 w-[2rem]" onclick="copyToClipboard()">
                    <img src="../../../../assets/elements/copyLink.png" alt="feature1" class="w-6 h-6" />

                </button>
            </div>
            <input type="text" id="publicLink" class="input input-bordered w-[30rem] max-w-xs" value="{{ route('public.feedback', ['boardId' => $boardId]) }}" readonly>
        </div>
    </div>
        <div class="pt-5">
            <button wire:click="delete({{ $boardname->id }})" class="btn btn-ghost">
                ❌ Delete
            </button>
        </div>
</div>

<script>
    function copyToClipboard() {
        var copyText = document.getElementById("publicLink");
        copyText.select();
        copyText.setSelectionRange(0, 99999); // For mobile devices
        document.execCommand("copy");
    }
</script>
