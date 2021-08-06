<x-guest-layout>
    <div class="container pt-4">
        <div class="row d-flex justify-content-center pt-2">
            <div class="col-8">

                <div class="card">

                    <!-- Card image -->
                    <img class="card-img-top" src="/img/1giphy.gif" alt="a meme">

                    <!-- Card content -->
                    <div class="card-body">

                        <!-- Title -->
                        <h4>Want to see what Spotify dont want you to know? It is "genres".</h4>

                        @csrf
                        <div class="row mt-4">
                            <div class="col-12">
                                <div class="md-form md-outline">
                                    <input type="text" id="form1" name="song" class="form-control">
                                    <label for="form1">Song (Right Click On Song and then click on "Copy Song Link" Paste It Here)</label>
                                </div>
                            </div>
                        </div>
                        <h4>OR</h4>
                        <div class="row mt-0">
                            <div class="col-12">
                                <div class="md-form md-outline">
                                    <input type="text" id="form1" name="artist" class="form-control">
                                    <label for="form1">Artist (Right Click On Artist and then click on "Copy Link To Artist " Paste It Here)</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-0 mb-4">
                            <div class="col-4">
                                <button name="show_me" type="button" class="btn btn-primary">Show Me</button>
                            </div>
                        </div>
     
                        <h4>Output</h4>
        
                        <div class="row ">

                            <div class="col-4">
                                <ul name="output" class="list-group"></ul>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
                   
        $("[name=show_me]").on('click', function (e) {
            var CSRF_TOKEN = $("input[name=_token]").val();

            var url = "{{ url('/spotify_wow') }}";
            var formData = { 
                "_token": CSRF_TOKEN, 
                "song": $("[name=song]").val(), 
                "artist": $("[name=artist]").val()
            };
            $.ajax({
                type: "POST",
                url: url,
                dataType: "json",
                data:formData,
                success: function(data) {
                    $("[name=output]").children().remove();
                    data.genres.forEach(function(element) {
                        $("[name=output]").append('<li class="list-group-item">'+element+'</li>');
                    })

                    
                }
            });
        });
        </script>
    @endpush
</x-app-layout>
