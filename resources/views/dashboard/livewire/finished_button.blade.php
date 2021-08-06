<div>
    <button wire:click="add_wishlist" data-book_id="{{ $book->id }}" type="button" class="btn btn-outline-primary btn-sm waves-effect m-1 pt-1 px-2">
        @if($this->isFinished)
        Mark as Finished
        @else
        Mark as Unfinshed
        @endif
        
    </button>
</div>
