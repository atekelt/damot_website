@extends('layouts.app')


@section('content')
<div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/page-title-bg.webp);">
    <div class="container position-relative">
      <h1>Export & Logistics</h1>
      
      <nav class="breadcrumbs">
        <ol>
          <li><a href="index.html">Home</a></li>
          <li class="current">Export & Logistics</li>
        </ol>
      </nav>
    </div>
  </div>
  <section class="py-5 bg-white">
    <div class="container">
  
      <div class="text-center mb-5" data-aos="fade-down">
        <h2 class="fw-bold display-5 text-dark">Export & Logistics</h2>
        <p class="lead text-muted mx-auto" style="max-width: 800px;">
          From the heart of our farms to global markets, our logistics ensure safe, timely, and consistent product delivery worldwide.
        </p>
      </div>
  
      <div class="row align-items-center mb-5">
        <div class="col-md-6" data-aos="fade-right">
          <div class="overflow-hidden rounded shadow-sm">
            <img src="assets/img/export-packaging.jpg" alt="Export Ready Packaging"
                 class="img-fluid w-100 transition-transform hover-zoom">
          </div>
          <small class="text-muted d-block text-center mt-2">Export-ready packaging, carefully handled for international shipment</small>
        </div>
        <div class="col-md-6" data-aos="fade-left">
          <h3 class="fw-bold text-success">From Field to Market</h3>
          <p class="lead text-muted">
            Over the years, we’ve built a robust logistics network that ensures our products reach markets swiftly and safely. Our produce is now shipped internationally, expanding our reach and reputation.
          </p>
          <p class="lead text-muted">
            We work with certified partners and maintain strict quality standards throughout the supply chain. Whether you’re a wholesaler abroad or a retailer at home, we ensure consistency and excellence every step of the way.
          </p>
        </div>
      </div>
  
      <div class="row text-center g-4" data-aos="fade-up">
        <div class="col-md-4">
          <div class="overflow-hidden rounded shadow-sm">
            <img src="assets/img/loading-trucks.jpg" class="img-fluid transition-transform hover-zoom" alt="Trucks being loaded">
          </div>
          <p class="mt-2 text-muted">Trucks being loaded directly from farms</p>
        </div>
        <div class="col-md-4">
          <div class="overflow-hidden rounded shadow-sm">
            <img src="assets/img/cargo-containers.jpg" class="img-fluid transition-transform hover-zoom" alt="Cargo containers">
          </div>
          <p class="mt-2 text-muted">Secure cargo containers en route to ports</p>
        </div>
        <div class="col-md-4">
          <div class="overflow-hidden rounded shadow-sm">
            <img src="assets/img/port-shipping.jpg" class="img-fluid transition-transform hover-zoom" alt="Port scene">
          </div>
          <p class="mt-2 text-muted">International port logistics operations</p>
        </div>
      </div>
  
    </div>
  </section>
  
@endsection