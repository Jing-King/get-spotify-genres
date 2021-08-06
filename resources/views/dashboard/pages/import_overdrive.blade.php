<x-app-layout>
    <div class="container">
        <div class="row mt-4">
            @foreach($book_json as $book)
                <div class="col-12 mt-2">
                    <!-- Card -->
                    <div id="{{ $book->id }}" class="card card-cascade narrower card-ecommerce">
                        <!-- Card image -->
                        <div class="row">
                            <div class="col-5 col-md-2">
                                <div class="view view-cascade overlay">
                                    <img src="{{ $book->image_link_old }}" class="card-img-top">
                                    <a href="{{ $book->image_link_old }}">
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                                <small>Folder</small>
                            </div>
                            <div class="col-5 col-md-2">
                                <div class="view view-cascade overlay">
                                    <img src="{{ $book->image_link }}" class="card-img-top">
                                    <a href="{{ $book->image_link }}">
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                                <small>Audible</small>
                            </div>
                            <div class="col-12 col-md-6">
                                <!-- Card content -->
                                <div class="card-body card-body-cascade p-2">
                                    <!-- Category & Title -->

                                    <h5 class="card-title mb-0">
                                        <strong>
                                            {{ $book->title }}
                                        </strong>
                                    </h5>


                                </div>

                                <!-- Card content -->
                            </div>
                            <div class="col-12 col-md-2 text-right">
                                
                                <button type="button" class="btn btn-outline-default btn-sm waves-effect">Delete</button>
                            </div>
                        </div>


                        <!-- Card image -->

                    </div>
                    <!-- Card -->
                </div>
            @endforeach



        </div>
    </div>

</x-app-layout>
