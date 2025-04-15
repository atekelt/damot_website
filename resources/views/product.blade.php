@extends('layouts.app')


@section('content')

<section class="py-5 bg-white">
  <div class="container">

    <div class="text-center mb-5">
      <h2 class="fw-bold text-dark display-5">Our Products</h2>
      <p class="lead text-muted mx-auto" style="max-width: 800px;">
        We grow a wide variety of high-quality crops, cultivated with care and harvested with precision. Our products meet both local demands and international quality standards.
      </p>
    </div>

    <div class="row align-items-center mb-5">
      <div class="col-md-6">
        <img src="assets/img/vegetables.jpg" alt="Fresh Vegetables" class="img-fluid rounded shadow-sm w-100">
        <small class="text-muted d-block text-center mt-2">Close-up of freshly harvested vegetables</small>
      </div>
      <div class="col-md-6">
        <h3 class="fw-bold text-success">Vegetables</h3>
        <p class="lead text-muted">
          Grown in nutrient-rich soil and carefully monitored from seed to harvest, our vegetables are known for their freshness and flavor. Perfect for both local dishes and global markets.
        </p>
      </div>
    </div>

    <div class="row align-items-center mb-5">
      <div class="col-md-6 order-md-2">
        <img src="assets/img/fruits.jpg" alt="Handpicked Fruits" class="img-fluid rounded shadow-sm w-100">
        <small class="text-muted d-block text-center mt-2">Sun-ripened, handpicked fruits at their peak</small>
      </div>
      <div class="col-md-6 order-md-1">
        <h3 class="fw-bold text-success">Fruits</h3>
        <p class="lead text-muted">
          Our fruits are sun-kissed and organic, handpicked at peak ripeness to ensure maximum sweetness and shelf life. They’re as nutritious as they are delicious.
        </p>
      </div>
    </div>

    <div class="row align-items-center mb-5">
      <div class="col-md-6">
        <img src="assets/img/grains&legumes.jpg" alt="Grains and Legumes" class="img-fluid rounded shadow-sm w-100">
        <small class="text-muted d-block text-center mt-2">Grains and legumes ready for local and export markets</small>
      </div>
      <div class="col-md-6">
        <h3 class="fw-bold text-success">Grains & Legumes</h3>
        <p class="lead text-muted">
          Stable and reliable, our grains and legumes are cultivated at scale to support food security and export needs. Quality controlled from farm to storage.
        </p>
      </div>
    </div>

    <div class="row align-items-center mb-5">
      <div class="col-md-6 order-md-2">
        <img src="assets/img/specialtycrops.jpg" alt="Specialty Crops" class="img-fluid rounded shadow-sm w-100">
        <small class="text-muted d-block text-center mt-2">High-value crops tailored for international demand</small>
      </div>
      <div class="col-md-6 order-md-1">
        <h3 class="fw-bold text-success">Specialty Crops</h3>
        <p class="lead text-muted">
          From herbs to niche exports, our specialty crops are grown to meet the unique demands of international clients, providing high returns and consistent quality.
        </p>
      </div>
    </div>

  </div>
</section>



@endsection
