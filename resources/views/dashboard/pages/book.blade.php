
<x-app-layout>
    @prepend('styles')
    <style>
    .svg_edit > svg {
        height: 3rem !important;

    }
    </style>
    @endprepend
    <div class="container">
        <div class="row mt-4">

                <div class="col-12 mt-2 text-right">
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#upload_page">
                        Upload
                    </button>
                </div>
                <div class="col-12 mt-2">
                    <!-- Card -->


                    <div class="card card-cascade narrower card-ecommerce">
                        <!-- Card image -->
                        <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="view view-cascade overlay">
                                    <img src="{{ url($book->image->path.$book->image->name.'.'.$book->image->type) }}" class="card-img-top">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <!-- Card content -->
                                <div class="card-body card-body-cascade p-2">
                                    <!-- Category & Title -->
                         
                                        <div class="gray_box" style="display: none;">
                                            <div class="d-flex justify-content-center">
                                                <div name="backward_20" class="svg_edit mx-2 text-center d-none d-lg-block">
                                                    {!! file_get_contents(public_path('themes/MDB-Pro_4.19.2/img/svg/small-arrow-left.svg')) !!}
                                                    <h6>20 Min</h6>
                                                </div>
                                                <div name="backward_10" class="svg_edit mx-2 text-center">
                                                    {!! file_get_contents(public_path('themes/MDB-Pro_4.19.2/img/svg/small-arrow-left.svg')) !!}
                                                    <h6>10 Min</h6>
                                                </div>
                                                <div name="backward_1" class="svg_edit mx-2 text-center">
                                                    {!! file_get_contents(public_path('themes/MDB-Pro_4.19.2/img/svg/new-arrow-to-left.svg')) !!}
                                                    <h6>1 Min</h6>
                                                </div>
                                                <div name="play" class=" mx-2 text-center">
                                                    <div name="svg_play" class="svg_edit">
                                                        {!! file_get_contents(public_path('themes/MDB-Pro_4.19.2/img/svg/play.svg')) !!}
                                                    </div>
                                                    <div name="svg_pause" class="svg_edit" style="display: none;">
                                                        {!! file_get_contents(public_path('themes/MDB-Pro_4.19.2/img/svg/pause.svg')) !!}
                                                    </div>
                                                    <h6>Play</h6>
                                                </div>
                                                <div name="forward_1" class="svg_edit mx-2 text-center">
                                                    {!! file_get_contents(public_path('themes/MDB-Pro_4.19.2/img/svg/new-arrow-to-right.svg')) !!}
                                                    <h6>1 Min</h6>
                                                </div>
                                                <div name="forward_10" class="svg_edit mx-2 text-center">
                                                    {!! file_get_contents(public_path('themes/MDB-Pro_4.19.2/img/svg/small-arrow-right.svg')) !!}
                                                    <h6>10 Min</h6>
                                                </div>
                                                <div name="forward_20" class="svg_edit mx-2 text-center d-none d-lg-block">
                                                    {!! file_get_contents(public_path('themes/MDB-Pro_4.19.2/img/svg/small-arrow-right.svg')) !!}
                                                    <h6>20 Min</h6>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-center ">
                                                <input type="range" class="custom-range" id="time_frame">
                                            </div>

                                            <div class="d-flex justify-content-center mb-2">
                                                Current: <span name="current_time">-- min</span> / Total: <span name="total_time">-- min</span>
                                            </div>
                                        </div>

             


                                    <h3 class="card-title mb-0">
                                        <strong>
                                            <a href="">{{ $book->title }}</a>
                                        </strong>
                                    </h3>
                                    <a href="" class="text-muted">
                                        <span>{{ $book->sub }}</span>
                                    </a>
                                    <!-- Description -->
                                    <p class="card-text">
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
                                <div class="text-left mt-2 gray_box px-2" style="display: none;">
                                    <label for="customRange1">Vol</label>
                                    <input type="range" class="custom-range" id="vol" value="100">
       

                                    <label for="customRange1 mb-0">Speed</label>
                                        <div class="select-outline">

                                            <select name="rate" class="mdb-select md-form md-outline colorful-select dropdown-primary my-0">
                                                <option value="0.2">0.2x</option>
                                                <option value="0.4">0.4x</option>
                                                <option value="0.6">0.6x</option>
                                                <option value="0.8">0.8x</option>
                                                <option value="1.0" selected>1.0x Defalt</option>
                                                <option value="1.2">1.2x</option>
                                                <option value="1.4">1.4x</option>
                                                <option value="1.6">1.6x</option>
                                                <option value="1.8">1.8x</option>
                                                <option value="2.0">2.0x</option>
                                                <option value="2.2">2.2x</option>
                                                <option value="2.4">2.4x</option>
                                                <option value="2.6">2.6x</option>
                                                <option value="2.8">2.8x</option>
                                                <option value="3.0">3.0x</option>
    
                                            </select>
              
                                        
                                          </div>

                          

                                </div>
                                <hr>
                                <button type="button" class="btn btn-outline-default btn-sm waves-effect">Download</button>
                                <livewire:wishlist-button :book="$book">
                                <livewire:finished-button :book="$book">

                            </div>
                        </div>



                        <!-- Card image -->

                    </div>
                    <!-- Card -->

                    <div class="card card-cascade narrower card-ecommerce mt-4">
                        <div class="row ">
                            <div class="col-12">
                                <!-- Card content -->
                                <div class="card-body card-body-cascade p-2">
                                    <!-- Category & Title -->
                                    {!! $book->description !!}
                                </div>
                                <!-- Card content -->
                            </div>
                        </div>
                    </div>
                    @if(count($book->files) > 0)
                        <div class="card card-cascade narrower card-ecommerce my-4">
                            <div class="row ">
                                <div class="col-12">
                                    <!-- Card content -->
                                    <div class="card-body card-body-cascade p-2">
                                        <!-- Category & Title -->
                                        <ul class="list-group list-group-flush">
                                            @foreach ($book->files->sortBy('place') as $file)
                                                <li name="file_{{ $file->id }}" data-count="{{ $loop->index }}" class="list-group-item py-1">{{ $file->file->name . '.' . $file->file->type }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <!-- Card content -->
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
        </div>
    </div>

<div class="modal fade" id="upload_page" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <!-- Change class .modal-sm to change the size of the modal -->
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title w-100" id="myModalLabel">Upload</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" id="files" action="{{ url('dashboard/book/'.$book->id.'/upload') }}" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
            <div class="file-field">
                <div class="btn btn-outline-info waves-effect btn-sm float-left">
                    <span>Choose files</span>
                    <input type="file" name="file">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text"  placeholder="Upload one or more files">
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary btn-sm">Save</button>
        </div>
    </form>
    </div>
  </div>
</div>

@push('scripts')
    <script>

        @if(count($book->files) > 0)


        if ('mediaSession' in navigator) {

            navigator.mediaSession.metadata = new MediaMetadata({
                title: '{{ $book->title }}',
                artist: '{{ $book->by }}',
                album: '{{ $book->narrated_by }}',
                artwork: [
                    { src: '{{ url($book->image->path.$book->image->name.'.'.$book->image->type) }}', sizes: '512x512', type: 'image/png' },
                ]
            });
            navigator.mediaSession.setActionHandler('play', function() {
                navigator.mediaSession.playbackState = "playing";
                files.items[count].file.sound.play();
                ui_button('play')
            });
            navigator.mediaSession.setActionHandler('pause', function() {
                navigator.mediaSession.playbackState = "paused";
                files.items[count].file.sound.pause();
                ui_button('pause')
            });
            /*
            navigator.mediaSession.setActionHandler('seekbackward', function() {
                move('backward', 1);
            });

            navigator.mediaSession.setActionHandler('seekforward', function() {
                move('forward', 1);
            });
            */

            /*
            navigator.mediaSession.setActionHandler('previoustrack', function() {
                move('backward', 10);
            });
            navigator.mediaSession.setActionHandler('nexttrack', function() {
                move('forward', 10);
            });
            */
            
            /*

            navigator.mediaSession.setActionHandler('play', function() {});
            navigator.mediaSession.setActionHandler('pause', function() {});
            navigator.mediaSession.setActionHandler('seekbackward', function() {});
            navigator.mediaSession.setActionHandler('seekforward', function() {});
            navigator.mediaSession.setActionHandler('previoustrack', function() {});
            navigator.mediaSession.setActionHandler('nexttrack', function() {});
            */
        }



        @foreach($book->files as $file)
            @php
            $file->file->full_file = url($file->file->path.$file->file->name.'.'.$file->file->type);
            @endphp

        @endforeach

        files = collect({!! $book->files->toJson() !!})


        @foreach($book->files as $file)
                this_file = files.firstWhere('id', {{ $file->id }})
                this_file.file.sound = new Howl({
                    src: [this_file.file.full_file],
                    html5: true,
                    preload: true
                });


                        
        this_file.file.sound.on('end', function(){
            files.items[count].file.sound.pause();
            count++;
            move('forward', 0);
        });


        @endforeach






        count = 0
        curent_id = {{ $book->files->first()->id }}

        @if(Auth::user()->recently_listened->contains('book_id', $book->id))
            count = {{ Auth::user()->recently_listened->firstWhere('book_id', $book->id)->title }}
            files.items[count].file.sound.seek({{  Auth::user()->recently_listened->firstWhere('book_id', $book->id)->last_time }});
            files.items[count].file.sound.pause()
            
        @endif

        /*
        files.items[count].file.sound.pause();
        count = parseInt($(this).attr('data-count'))
        move('forward', 0);
        */



        //-load_file(count)
        //sounds.play(files.items[count].file.sound);
        $("[name=file_"+files.items[count].id+"]").addClass('active')

        function updateLocation() {
            var CSRF_TOKEN = $("input[name=_token]").val();

            var url = "{{ url('/dashboard/book/'.$book->id.'/listening') }}";
            var formData = { "_token": CSRF_TOKEN, "type": "last_spot", "title": count, "value": files.items[count].file.sound.seek() };
            $.ajax({
                type: "POST",
                url: url,
                dataType: "json",
                data:formData,
                success: function(data) {

                }
            });
            
        }


        function move(direction, min) {

            console.log("----------------------------------------------")

            files.items[count].file.sound.pause();
            ui_button('pause')

            const time = min*60
            const currentSeek = files.items[count].file.sound.seek();
            const duration = files.items[count].file.sound.duration();

            console.log("duration: "+duration)
            console.log("currentSeek: "+currentSeek)
            console.log("direction: "+direction)

            if(direction == 'backward') {
                var forwardTo = currentSeek - time;
                console.log('forwardTo ' + forwardTo + ' duration ' + duration);
                console.log('>'+(forwardTo >= duration))
                console.log('<'+(forwardTo <= duration))
                
                if (forwardTo <= 0) {
                    console.log("forwardTo: "+forwardTo)
                    console.log("duration: "+duration)
                    forwardTo = 0
                    if(count > 0) {
                        forwardTo = forwardTo - duration
                        count--;

        

                        forwardTo = files.items[count].file.sound.duration() + forwardTo;
                        console.log("forwardTo: "+forwardTo)
                        console.log("duration: "+files.items[count].file.sound.duration())
                    } else {
                        toastr.warning('Currently on First Track')
                    }

                }
                
            }

            if(direction == 'forward') {
                var forwardTo = currentSeek + time;
                
                if (forwardTo >= duration) {
                    forwardTo = forwardTo - duration
                    
                    if(count == (files.count()-1) ) {
                        forwardTo = currentSeek;
                        toastr.warning('Currently on Last Track')
                    } else {
                        count++;
                    }
                    
                    //load_file(count)
                }
                
            }

            

            console.log('skipping to ' + forwardTo + ' from ' + currentSeek);
            
            files.items[count].file.sound.seek(forwardTo);
            files.items[count].file.sound.play();
            files.items[count].file.sound.rate(parseFloat($("[name=rate]").val()));

            $(".list-group-item.active").removeClass('active')
            $("[name=file_"+files.items[count].id+"]").addClass('active')
            ui_button('play')
        }


        
        $("[name=backward_20]").on('click', function (e) {
            move('backward', 20);
        });
        $("[name=backward_10]").on('click', function (e) {
            move('backward', 10);
        });
        $("[name=backward_1]").on('click', function (e) {
            move('backward', 1);
        });
        $("[name=play]").on('click', function (e) {
            if(files.items[count].file.sound.playing()) {
                files.items[count].file.sound.pause()
                ui_button('pause')
            } else {
                files.items[count].file.sound.play()
                ui_button('play')
            }
            //console.log(sound._sounds[0]._seek)
        });


        $("[name=forward_1]").on('click', function (e) {
            move('forward', 1);
        });
        $("[name=forward_10]").on('click', function (e) {
            move('forward', 10);
        });
        $("[name=forward_20]").on('click', function (e) {
            move('forward', 20);
        });


        $(".list-group-item").on('click', function (e) {
            files.items[count].file.sound.pause();
            count = parseInt($(this).attr('data-count'))
            move('forward', 0);
            
        });

        function ui_button(type) {
            switch (type) {
                case 'pause':
                    $("[name=svg_play]").show()
                    $("[name=svg_pause]").hide()
                    break;
                case 'play':
                    $("[name=svg_play]").hide()
                    $("[name=svg_pause]").show()
                    break;
            
                default:
                    break;
            }
            
        }

        

        $("#vol").on('change', function (e) {
            percet = $("#vol").val()
            vol = (percet/100)
            Howler.volume(vol);
        });

        $("[name=rate]").on('change', function (e) {
            files.items[count].file.sound.rate(parseFloat($("[name=rate]").val()));
        });


        $("#time_frame").mouseover(function() {
            $("#time_frame").addClass('no_touch_square')
        });

        $("#time_frame").mouseleave(function() {
            $("#time_frame").removeClass('no_touch_square')
        });

        $("#time_frame").on('change', function (e) {

                //$("#time_frame").addClass('no_touch_square')
                console.log($("#time_frame").val())
                files.items[count].file.sound.pause()
                percet = $("#time_frame").val()
                console.log(files.items[count].file.sound.duration())
                moveTo = (percet/100) * files.items[count].file.sound.duration()

                console.log(moveTo)
                files.items[count].file.sound.seek(moveTo);
                files.items[count].file.sound.play();
                ui_button('play')
                //$("#time_frame").delay(5000).removeClass('no_touch_square')
            
        });

        function updateWidth() {
                sound = files.items[count].file.sound
                let width = (sound.seek()/sound.duration())*100;
                if($("#time_frame").hasClass('no_touch_square') == false) {
                    $("#time_frame").val(width)
                }

                $("[name=current_time]").text(Math.round(sound.seek()/60) +" Min")
                $("[name=total_time]").text(Math.round(sound.duration()/60) +" Min")
            
        }

        old_time = files.items[count].file.sound.seek()
        old_count = count

         setInterval(() => {

            
            
                updateWidth(); 
        
            
            if($(".gray_box").hasClass('done_lock') == false) {
                //console.log("runhide")
                if(files.items[count].file.sound.duration() != 0) {
                    $(".gray_box").fadeIn()
                    $(".gray_box").addClass('done_lock')
                }
            }

            if(old_time != files.items[count].file.sound.seek()) {
                old_time = files.items[count].file.sound.seek()
                old_count = count
                updateLocation()
            }

            

        },300);




/*
        active
        sound.on('end', function(){
            console.log('Finished!');
            count++;
            load_file(count)
            sound.play();

        }); */


        @endif
        $(document).ready(function() {
            $('.mdb-select').materialSelect();
        });
    </script>
@endpush
</x-app-layout>
