@prepend('styles')
<style>
    .jarallax {
        min-height: 100vh;
    }
  </style>
@endprepend
<x-guest-layout>
    <section class="view jarallax h-100" data-jarallax='{"speed": 0.2}' style="background-image: url('/themes/MDB-Pro_4.19.2/img/bg1.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">

        <div class="mask rgba-stylish-strong h-100 d-flex justify-content-center align-items-center">
          <div class="container">
            <div class="row">
              <div class="col-xl-5 col-lg-6 col-md-10 col-sm-12 mx-auto mt-lg-5">
  
                <!--Form with header-->
                <div class="card" >
                  <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <!--Header-->
                        <div class="form-header purple-gradient">
                            <h3><i class="fas fa-user mt-2 mb-2"></i> Log in:</h3>
                        </div>
                        <!--Body-->
                        <div class="md-form">
                            <i class="fas fa-envelope prefix white-text"></i>
                            <input type="text" id="name" name="name" class="form-control" required autofocus>
                            <label for="name">Your Name</label>
                        </div>
                        <div class="md-form">
                            <i class="fas fa-envelope prefix white-text"></i>
                            <input type="text" id="email" name="email" class="form-control" required>
                            <label for="email">Your email</label>
                        </div>
                        <div class="md-form">
                            <i class="fas fa-lock prefix white-text"></i>
                            <input type="password" id="password" name="password" class="form-control" required>
                            <label for="password">Your password</label>
                        </div>
                        <div class="md-form">
                            <i class="fas fa-lock prefix white-text"></i>
                            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required>
                            <label for="password_confirmation">Your password</label>
                        </div>
                        <div class="text-center">
                            <button class="btn purple-gradient btn-lg waves-effect waves-light">Register</button>
                            <hr>
                            @if(count($errors) > 0)
                            {{ $errors }}
                            @endif
                        </div>
                    </form>
  
                  </div>
                </div>
                <!--/Form with header-->
  
              </div>
            </div>
          </div>
        </div>
      </section>
</x-guest-layout>
@push('scripts')

@endpush