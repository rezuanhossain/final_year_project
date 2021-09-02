@extends('layouts.front-end.theme')

@section('content')
<main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>Courses</h2>
        <!-- <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p> -->
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Courses Section ======= -->
    <section id="courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
            @forelse ($courses as $item)
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" style="margin-bottom: 1rem!important;">
                    <div class="course-item">
                    <img src="{{ asset($item->image) }}" style="height:16vw;" class="img-fluid" alt="...">
                    <div class="course-content">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4>{{ $item->course_level }}</h4>
                        
                        </div>
        
                        <h3><a href="course-details.html">{{ $item->course_title }}</a></h3>
                        <p>Et architecto provident deleniti facere repellat nobis iste</p>
                        
                        <div class="trainer d-flex justify-content-between align-items-center">
                        <div class="trainer-profile d-flex align-items-center">
                            <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                            <span>Antonio</span>
                        </div>
                        <div class="trainer-rank d-flex align-items-center">
                            <i class="bx bx-user"></i>{{ $item->student_count }} {{ Str::plural('student', 1) }}
                            <i class="bx bx-grid"></i>{{ $item->lessons->count() }}{{ Str::plural('lessons', 1) }}
                        </div>
                        </div>
                    </div>
                    </div>
                </div><br><br>
            @empty
                <h1 class="text text-danger">
                    No Courses to Show..!!
                </h1>
            @endforelse
           
          <!-- End Course Item-->
        </div>
        <div class="row">
           <div class="col-md-6"></div>
           <div class="col-md-6">
            {{  $courses->links()}}
           </div>
        </div>

      </div>
    </section><!-- End Courses Section -->

  </main><!-- End #main -->
  @endsection