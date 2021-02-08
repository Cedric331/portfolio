@extends('layouts/app')

@section('content')

<div class="container my-5">
  <section class="text-center dark-grey-text mb-5">
    <div class="card">
      <div class="card-body rounded-top border-top p-5" id="contact">

        <h3 class="font-weight-bold my-4 text-white">Contact</h3>

        <form class="mb-4 mx-md-5" action="{{ route('contact-post') }}" method="POST">
         @method('POST')
         @csrf
          <div class="row">
            <div class="col-md-6 mb-4">
              <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Votre nom" required>
               @error('name')
                  <ul>
                     <li class="text-danger">{{ $message }}</li>
                  </ul>
               @enderror
            </div>

            <div class="col-md-6 mb-4">
              <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Votre email" required>
               @error('email')
                  <ul>
                     <li class="text-danger">{{ $message }}</li>
                  </ul>
               @enderror
            </div>

            <div class="col-md-12 mb-4">
              <input type="text" id="subject" name="subject" class="form-control @error('subject') is-invalid @enderror" value="{{ old('subject') }}" placeholder="Sujet" required>
              @error('subject')
                  <ul>
                     <li class="text-danger">{{ $message }}</li>
                  </ul>
               @enderror
            </div>

            <div class="col-md-12">

              <div class="form-group mb-4">
                <textarea class="form-control rounded @error('message') is-invalid @enderror" name="message" id="message" value="{{ old('message') }}" rows="3" placeholder="Votre message..." required></textarea>
                  @error('message')
                     <ul>
                        <li class="text-danger">{{ $message }}</li>
                     </ul>
                  @enderror
               </div>

              <div class="text-center">
                <button type="submit" class="btn btn-light btn-md">Envoyer</button>
              </div>

            </div>
          </div>
        </form>
   
      </div>
    </div>
  </section>
</div>

@endsection