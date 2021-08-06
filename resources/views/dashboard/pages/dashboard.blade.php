<x-app-layout>
    <div class="container">
        <div class="row mt-4 d-flex justify-content-center">
            <div class="col-6"><h5>New Books (5 Books)</h5></div>
            <div class="col-6 text-right"><a  href="{{ url('/dashboard/new/all-books') }}" class="btn btn-outline-primary btn-sm waves-effect">View All</a></div>
        </div>
        <div class="row d-flex justify-content-center">
            @foreach ($books->sortByDesc('created_at')->forPage(1, 5) as $book)
                <div class="col-6 col-md-2 mt-2">
                    <div class="card card-cascade narrower card-ecommerce">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="view view-cascade overlay">
                                    <img src="{{ url($book->image->path.$book->image->name.'.'.$book->image->type) }}" class="card-img-top">
                                    <a href="{{ url('dashboard/book/'.$book->id) }}">
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card-body card-body-cascade p-2">
                                    
                                    <h5 class="card-title mb-0">
                                        <strong>
                                            <a href="{{ url('dashboard/book/'.$book->id) }}">{{ $book->title }}</a>
                                        </strong>
                                    </h5>
                                    <small class="text-muted">{{ date("F j, Y, g:i a", strtotime($book->created_at)) }}</small>
                                    <a href="{{ url('dashboard/book/'.$book->id) }}" class="btn btn-block btn-outline-primary mt-1 btn-sm waves-effect">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row mt-4 d-flex justify-content-center">
            <div class="col-6"><h5>Your Recently Books (5 Books)</h5></div>
            <div class="col-6 text-right"><a  href="{{ url('/dashboard/user/recently-books') }}" class="btn btn-outline-primary btn-sm waves-effect">View All</a></div>
        </div>
        
        <div class="row d-flex justify-content-center">
            @foreach (Auth::User()->recently_listened->sortByDesc('updated_at')->forPage(1, 5) as $book)
                @php
                $book = $book->book;
                @endphp
                <div class="col-12 mt-2">
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
                                    <p class="card-text mb-1">
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
                                <a href="{{ url('dashboard/book/'.$book->id) }}" class="btn btn-outline-primary btn-sm waves-effect">View</a>
                                <livewire:wishlist-button :book="$book">
                            </div>
                        </div>


                        <!-- Card image -->

                    </div>
                    <!-- Card -->
                </div>
            @endforeach
        </div>

        <div class="row mt-4">
            <h5>Group's Most Popular Books</h5>
            <div class="col-6 text-right"><a  href="{{ url('/dashboard/user/recently-books') }}" class="btn btn-outline-primary btn-sm waves-effect">View All</a></div>
        </div>
        <div class="row mt-4">



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
