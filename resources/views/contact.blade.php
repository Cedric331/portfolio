@extends('layouts/app')

@section('content')

<div class="container my-5">
  <section class="text-center dark-grey-text mb-5">
    <div class="card">
      <div class="card-body rounded-top border-top p-5">

        <h3 class="font-weight-bold my-4">Contact</h3>
        
        <form class="mb-4 mx-md-5" action="">
          <div class="row">
            <div class="col-md-6 mb-4">
              <input type="text" id="name" class="form-control" placeholder="Votre nom">
            </div>

            <div class="col-md-6 mb-4">
              <input type="email" id="email" class="form-control" placeholder="Votre email">
            </div>
          </div>

          <div class="row">
            <div class="col-md-12 mb-4">
              <input type="text" id="subject" class="form-control" placeholder="Sujet">
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">

              <div class="form-group mb-4">
                <textarea class="form-control rounded" id="message" rows="3" placeholder="Votre message..."></textarea>
              </div>

              <div class="text-center">
                <button type="submit" class="btn btn-info btn-md">Envoyer</button>
              </div>

            </div>
          </div>
        </form>
   
      </div>
    </div>
  </section>
</div>

@endsection