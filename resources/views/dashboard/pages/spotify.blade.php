<x-guest-layout>
    <div class="container pt-4">
        <div class="row d-flex justify-content-center pt-2">
            <div class="col-12 col-md-8">

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
                            <div class="col-12">
                                <button name="show_me" type="button" class="btn btn-primary">Show Me</button>
                            </div>
                        </div>
     
                        <h4>Output</h4>
        
                        <div class="row ">

                            <div class="col-12">
                        
                                <div name="output" class="list-group"></div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal_display_tracks" tabindex="-1" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
        <div class="modal-dialog cascading-modal modal-avatar modal-fluid px-4" role="document">
            <div class="modal-content">
                <div class="modal-body text-center mb-1">
                    <h5 class="mt-1 mb-2">Tracks</h5>
                    <ul name="tracks_display" class="list-unstyled list-group"></ul>
                    

                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            function millisToMinutesAndSeconds(millis) {
                var minutes = Math.floor(millis / 60000);
                var seconds = ((millis % 60000) / 1000).toFixed(0);
                return minutes + ":" + (seconds < 10 ? '0' : '') + seconds;
            }
        $('body').on('click', "[name=gen_button]", function (e) {
            
            console.log($(this).data('id'))
            console.log(save_data)
            this_track = save_data[parseInt($(this).data('id'))]
            console.log(this_track)
            if(this_track != undefined) {
                if(this_track.info != null) {
                    this_track.info.tracks.forEach(track => {
                        if($(window).width() < 900) {
                            $("[name=tracks_display]").append(
                                '<a href="'+track.external_urls.spotify+'" target="_blank" class="media list-group-item list-group-item-action d-flex justify-content-between">'+
                                    '<div class="">'+
                                        '<img class="d-flex mr-3" src="'+track.album.images[2].url+'" alt="Generic placeholder image">'+
                                        '<div class="media-body text-left">'+
                                            '<h4>'+track.name+'</h4>'+
                                            '<h5>'+track.artists[0].name+'</h5>'+
                                            '<h5>'+track.album.name+'</h5>'+
                                        '</div>'+
                                    '</div>'+
                                    '<h4>'+millisToMinutesAndSeconds(track.duration_ms)+'</h4>'+
                                '</a>'
                            );
                        } else {
                            $("[name=tracks_display]").append(
                                '<a href="'+track.external_urls.spotify+'" target="_blank" class="media list-group-item list-group-item-action d-flex justify-content-between">'+
                                    '<div class="d-flex justify-content-start">'+
                                        '<img class="d-flex mr-3" src="'+track.album.images[2].url+'" alt="Generic placeholder image">'+
                                        '<div class="media-body text-left">'+
                                            '<h4>'+track.name+'</h4>'+
                                            '<h5>'+track.artists[0].name+'</h5>'+
                                        '</div>'+
                                    '</div>'+
                                    '<h4>'+track.album.name+'</h4>'+
                                    '<h4>'+millisToMinutesAndSeconds(track.duration_ms)+'</h4>'+
                                '</a>'
                            );
                        }

                    });
                    $("#modal_display_tracks").modal('show')
                }
                
            }
            /*
            $("[name=tracks_display]").append(
                '<div class="list-group-item list-group-item-action flex-column align-items-start">'+
                    '<img class="img-fluid" src="'+track.album.images[2].url+'" alt="a meme">'+
                '</div>'
            );
            */
        });

        save_data = [];

        $("[name=show_me]").on('click', function (e) {
            if($("[name=song]").val() != "" || $("[name=artist]").val() != "") {
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
                        save_data = data.genres
                        if(data.genres.length > 0) {
                            count = 0
                            
                            data.genres.forEach(function(element) {
                                images = '';
                                if(element.info != null) {
                                    show_count = 3
                                    img_count = 0
                                    element.info.tracks.forEach(track => {
                                        if(img_count < show_count) {
                                            images = images + '<img class="img-fluid" src="'+track.album.images[2].url+'" alt="a meme">'
                                        }
                                        img_count++;
                                        
                                    });
                                }
                                $("[name=output]").append('<a name="gen_button" data-id="'+count+'" class="list-group-item list-group-item-action"> <strong class="mb-1">'+element.title+'</strong> <br/>'+images+'</a>');
                                count++;
                            })
                            
                        } else {
                            $("[name=output]").append('<a href="#!" class="list-group-item list-group-item-action">No Genres</a>');
                        }
                        
                    }
                });
            } else {

            }


        });
        </script>
    @endpush
</x-app-layout>
