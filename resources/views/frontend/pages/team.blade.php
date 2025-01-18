@extends('frontend.layouts.master')
@section('title','Ecommerce Laravel || HOME PAGE')
@section('main-content')
<section class="page-header">
  <div class="page-header__bg" style="background-image: url(assets/images/hariyali/team_img1.jpg);"></div>
  <!-- /.page-header__bg -->
  <div class="container">
    <h2 class="text-dark">Meet the Team</h2>
    <ul class="thm-breadcrumb list-unstyled">
      <li><a href="index.html">Home</a></li>
      <li>/</li>
      <li><span class="text-dark">Our Team</span></li>
    </ul><!-- /.thm-breadcrumb list-unstyled -->
  </div><!-- /.container -->
</section><!-- /.page-header -->


<div class="block-title text-center p-4">
  <div class="block-title__decor"></div><!-- /.block-title__decor -->
  <p>Professional People</p>
  <h4>Team details</h4>
  <!-- <h3>Meet the Team</h3> -->
</div><!-- /.block-title -->

<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="card team-card">
        <!--    <img src="assets/images/hariyali/amit_images.jpg" alt=""> -->
        <img src="assets/images/hariyali/amit_images.jpg" class="card-img-top" alt="Team Member 2">
        <div class="card-body">
          <!-- <h3 class="card-title">Amit Kumar Raj
                </h3> -->
          <div class="team-card__content">
            <h3>Amit Kumar Raj </h3>
            <!-- <h6>Role: Founder &amp; CEO</h6> -->
          </div>
          <p class="card-text">
            <!-- Position: Founder & CEO -->
            <b>Role: Founder & CEO</b>
            <br>
          </p>
          <p class="card-text">
            As the founder, my mission is to build Hariyalikart into a globally recognized brand that is synonymous with sustainable agriculture and technological innovation. I am committed to leading Hariyalikart with integrity, vision, and a relentless drive to create meaningful impact in the world of farming
          </p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card team-card">
        <!--     <img src="assets/images/hariyali/anjali_images.jpg" alt=""> -->
        <img src="assets/images/hariyali/anjali_images.jpg" class="card-img-top" alt="Team Member 2">
        <div class="card-body">
          <div class="team-card__content">
            <h3>Anjali Kumari </h3>
          </div>
          <p class="card-text"><b>Role: Co-founder & CTO</b> <br></p>
          <p class="card-text">
            As a co-founder I want to establish my startup worldwide. I am from Bihar and my Bihar is an agricultural state and I have seen the farmers of Bihar struggling while farming and have also seen that because of this the youth are running away from farming , that's why I want to end this thing through my new technology of farming and want to completely convert traditional farming into smart farming and I know that with this innovation of ours, one day smart farming will be implemented in our entire Bihar. and our bihar became a smart state
            A small initiative from Hariyalikart to strengthen the economic growth of Bihar and India.
          </p>
        </div>
      </div>
    </div>

  </div>


  <div class="row">
    <div class="col-md-6">
      <div class="card team-card">
        <!-- <img src="assets/images/hariyali/aman_images.jpg" alt=""> -->
        <img src="assets/images/teams/manish-big.png" class="card-img-top" alt="Team Member 2">
        <div class="card-body">
          <!-- <h3 class="card-title">Amit Kumar Raj
                </h3> -->
          <div class="team-card__content">
            <h3>Manish Kumar </h3>
            <!-- <h6>Role: Founder &amp; CEO</h6> -->
          </div>
          <p class="card-text">
            <!-- Position: Founder & CEO -->
            <b>Role: Co-founder & CMO</b>

          </p>
          <p class="card-text">As a co-founder in HARIYALIKART, I'm passionate about leveraging technology to address the pressing challenges facing agriculture today. Our mission is to empower farmers with innovative solutions that optimize productivity, conserve resources, and promote sustainability. Through collaboration, ingenuity, and a deep commitment to the future of farming, we're shaping a more resilient and prosperous agricultural landscape for generations to come. <br />. </p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card team-card">
        <!--     <img src="assets/images/hariyali/anjali_images.jpg" alt=""> -->
        <img src="assets/images/teams/ajay-big.png" class="card-img-top" alt="Team Member 2">
        <div class="card-body">
          <div class="team-card__content">
            <h3>Ajay Kumar</h3>
          </div>
          <p class="card-text">
            <b>Role: Content Creator & CIO</b>
          </p>
          <p class="card-text">To leverage my creative skills and passion for storytelling to produce compelling content that resonates with audiences, drives engagement, and contributes to brand awareness and growth.</p>
        </div>
      </div>
    </div>

  </div>

  <div class="row">
    <div class="col-md-6">
      <div class="card team-card">
        <!--     <img src="assets/images/hariyali/anjali_images.jpg" alt=""> -->
        <img src="assets/images/teams/ajay-big.png" class="card-img-top" alt="Team Member 2">
        <div class="card-body">
          <div class="team-card__content">
            <h3>Vijay Prasad</h3>
          </div>
          <p class="card-text">
            <b>Role: CTO</b>
          </p>
          <p class="card-text">
            I think of making a huge development in the field of agriculture, through innovation, tech and AI.
          </p>
        </div>
      </div>
    </div>
  </div>

</div>



@endsection