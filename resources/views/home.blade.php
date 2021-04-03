@extends('layouts.app')

@section('content')
  <div class="hero-section">
    <div class="background-overlay">
      <div class="hero-section-inner">
        <div class="hero-text">
        <h1>Answer a call Today to help <span class="orange-text"> Someone in need</span></h1>
        <p class="lead py-2 gray-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur, doloremque. Placeat itaque non ipsam minima quo provident. Culpa, nisi! Rerum similique illum ipsa maxime </p>

          <div class="hero-buttons-container">
            <a href="{{ url('dashboard') }}" class="button orange-btn shadow-lg">
              Get Started 
            </a>
            <a href="{{ url('campaigns') }}" class="ml-4 button white-btn shadow-lg">
               Start Donating
            </a>
          </div>
      </div>
      <div class="hero-section-media">
         <div class="img-1 hero-section-img">

         </div>
         <div class="hero-section-media-sm-container">
           <div class="img-2 hero-section-img ml-2">

           </div>
           <div class="img-3 hero-section-img">

           </div>
         </div>
      </div>
      </div>
      
    </div>
  </div>


  <main class="main-section-content">
    <div class="do-good-section">
      <h3 class="curly-text">Play your part.</h3>
      <h1 class="blue-text pb-2">Do good anytime, they still need your help, a lot.</h1>
      <p class="gray-text pb-2">Donate anytime, they still need you the need the helping hands of good people like you, start donating now with GoFundMe.Camair</p>
      <a href="/register" class="button orange-btn">Start Donating now</a>
    </div>

    <div class="everything-you-need-to-know-section">
      <h1 class="blue-text">Everything You Need to Know About Us</h1> 
      <div class="background-box">

      </div>
      <section class="cards-container pt-5">
      <div class="feature-card shadow">
        <div class="feature-card-icon">
      
        </div>
        <h3>Controlled</h3>
        <p class="gray-text">
          Boost your brand recognition with each click. Generic links don't mean a
          thing. Branded links help instill confidence in your content.
        </p>
        </div>
        <div class="feature-card shadow card-2">
          <div class="feature-card-icon">

          </div>
          <h3>Efficient</h3>
          <p class="gray-text">
            Gain insights into who is clicking your links. Know where and when
            people engage with your content helps inform better decisions.
          </p>
        </div>
        <div class="feature-card shadow card-3">
        <div class="feature-card-icon">

        </div>
        <h3>Transparent</h3>
        <p class="gray-text">
          Improve brand awareness and content discoverability through customizable
          links, supercharging audience engagement.
        </p>
        </div>
      </section>

    </div>

    <div class="top-campaigns">
        <h3 class="curly-text">Play your part.</h3>
        <h1>Find a Campaign near you</h1>
        <div class="campaign-grid">
          @foreach ($campaigns as $campaign)
          <a href="/campaigns/{{ $campaign->id }}" class="text-decoration-none">
             <div class="campaign-card my-2 shadow">
                  <div>
                    <h3>{{ $campaign->campaign_name }}</h3>
                  </div>
                  <div>
                    <p class="text-dark">
                        {{Str::limit($campaign->campaign_purpose, 200)}}
                    </p>
                    <p class="orange-text"><b>2000XAF raised of {{ $campaign->goal_amount }}XAF</b></p>
                  </div>
            </div>
          </a>
          @endforeach
        </div>
        <p class="mb-5 pb-5"><a class="text-decoration-none button orange-btn" href="{{ url('campaigns') }}">See More</a></p>
    </div>
  </main>

  @include('layouts.footer')
@endsection
