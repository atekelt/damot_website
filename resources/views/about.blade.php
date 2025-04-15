@extends('layouts.app')


@section('content')

<section class="py-5 bg-light">
  <div class="container">
    
    <div class="mb-5">
      <h2 class="mb-4 border-start border-success ps-3 fs-2 fw-bold text-dark">Our Story</h2>
      <div class="row align-items-center">
        <div class="col-md-6">
          <p class="lead text-muted">
            Our journey began in the year 2000 with nothing more than a patch of land, a few hand-held hoses, and a dream. With unrelenting determination, we began farming using the simplest of methods. In the earliest days, donkeys were our main farming aides. Two years later, cows replaced the donkeys, and with just one employee, we worked the land tirelessly.
          </p>
          <p class="lead text-muted">
            As our ambition grew, so did our operations. Within three years, we were hiring vehicles to transport our produce — a sign of evolution and resilience. What started with one curry and a single hectare has now blossomed into a 300-hectare enterprise known for its quality, consistency, and vision.
          </p>
        </div>
        <div class="col-md-6">
          <div class="rounded shadow-sm overflow-hidden">
            <img src="assets/img/img_sq_6.jpg" alt="Farm Timeline" class="img-fluid w-100">
          </div>
          <small class="text-muted d-block text-center mt-2"></small>
        </div>
      </div>
    </div>

    <div class="mt-5">
      <h2 class="mb-4 border-start border-success ps-3 fs-2 fw-bold text-dark">Our Vision</h2>
      <div class="row align-items-center">
        <div class="col-md-6 order-md-2">
          <p class="lead text-muted">
            We believe that sustainable agriculture is more than growing food — it's about cultivating opportunity, nurturing communities, and driving economic growth. Our vision has always been long-term: to support local markets and gradually expand our reach to international consumers.
          </p>
          <p class="lead text-muted">
            Today, we proudly serve both local and global markets with premium, responsibly grown products.
          </p>
        </div>
        <div class="col-md-6 order-md-1">
          <div class="rounded shadow-sm overflow-hidden">
            <img src="assets/img/img_sq_1.jpg" alt="Farm Export Aerial" class="img-fluid w-100">
          </div>
          <small class="text-muted d-block text-center mt-2"></small>
        </div>
      </div>
    </div>

  </div>
</section>



@endsection
