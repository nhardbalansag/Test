<div>
    <button wire:click='delete' class="btn btn-danger">delete</button>

    <div wire:loading>
        @include('content.cms.includes.loading-state');
    </div>
</div>
