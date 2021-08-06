<x-app-layout>
    <div class="container">
        <div class="row mt-4">
            @foreach ($books as $book)
                <div class="col-12 my-2">
                    <!-- Card -->
                    <div class="card card-cascade narrower card-ecommerce">
                        <!-- Card image -->
                        <div class="row">
                            <div class="col-5 col-md-2">
                                <div class="view view-cascade overlay">
                                    <img src="{{ url($book->image->path.$book->image->name.'.'.$book->image->type) }}" class="card-img-top">
                                    <a href="{{ url('dashboard/book/'.$book->id) }}">
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-md-8">
                                <!-- Card content -->
                                <div class="card-body card-body-cascade p-2">
                                    <!-- Category & Title -->

                                    <h5 class="card-title mb-0">
                                        <strong>
                                            <a href="{{ url('dashboard/book/'.$book->id) }}">{{ $book->title }}</a>
                                        </strong>
                                    </h5>
                                    <a href="{{ url('dashboard/book/'.$book->id) }}" class="text-muted">
                                        <span>{{ $book->sub }}</span>
                                    </a>
                                    <!-- Description -->
                                    <p class="card-text">
                                        @if(count($book->files) == 0)
                                        No MP3 Files
                                        @endif
                                    </p>
                                    <!-- Card footer -->
                                    <div class="card-footer p-0">
                                        <span class="badge badge-pill badge-light mt-2">By: {{ $book->by }}</span>
                                        <span class="badge badge-pill badge-light mt-2">Narrated By: {{ $book->narrated_by }}</span>
                                        <span class="badge badge-pill badge-light mt-2">Series: {{ $book->series }}</span>
                                        <span class="badge badge-pill badge-light mt-2">Length: {{ $book->length }}</span>
                                        <span class="badge badge-pill badge-light mt-2">Ratting: {{ $book->rating }}</span>
                                        <span class="badge badge-pill badge-light mt-2">Ratings: {{ $book->ratings }}</span>
                                    </div>

        

                                </div>

                                <!-- Card content -->
                            </div>
                            <div class="col-12 col-md-2 text-right">
                                <a href="{{ url('dashboard/book/'.$book->id) }}" class="btn btn-outline-primary btn-sm waves-effect">Listen Now</a>
                                {{-- <button type="button" class="btn btn-outline-default btn-sm waves-effect">Download</button> --}}
                                <livewire:wishlist-button :book="$book">
                            </div>
                        </div>


                        <!-- Card image -->

                    </div>
                    <!-- Card -->
                </div>
            @endforeach



        </div>
    </div>
    <div class="modal fade" id="import_book" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <!-- Change class .modal-sm to change the size of the modal -->
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title w-100" id="myModalLabel">Book Import</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="POST" id="files" action="{{ url('dashboard/book/import') }}" enctype="multipart/form-data">
              @csrf
              <div class="modal-body">
                <div class="md-form md-outline">
                    <input type="text" id="book_url" class="form-control" name="book_url">
                    <label for="book_url">URL</label>
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary btn-sm">Import</button>
              </div>
          </form>
          </div>
        </div>
      </div>

</x-app-layout>
