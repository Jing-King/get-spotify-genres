<div>
    <button wire:click="add_wishlist" data-book_id="{{ $book->id }}" type="button" class="btn btn-outline-primary btn-sm waves-effect m-1 pt-1 px-2">
        @if($this->isOnList)
        Remove From Wishlist 
        @else
        Add To Wishlist 
        @endif
        
    </button>
</div>
