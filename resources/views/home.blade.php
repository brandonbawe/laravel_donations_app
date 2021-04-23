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
          <div class="feature-card-icon efficient">
            <svg height="480pt" fill="#ed6754" viewBox="0 0 480 480.00056" width="480pt" xmlns="http://www.w3.org/2000/svg"><path d="m472 288h-46.695312l-43.257813-14.398438-14.046875-35.136718v-26.464844c-.054688-18.300781-13.863281-33.632812-32.054688-35.597656 0-1.097656.054688-2.195313.054688-3.289063v-117.113281c0-3.535156-2.316406-6.648438-5.703125-7.664062l-160-48c-1.5-.449219-3.09375-.449219-4.59375 0l-160 48c-3.382813 1.015624-5.703125 4.128906-5.703125 7.664062v117.113281c0 3.710938.25 7.375.382812 11.0625.203126 5.402344.503907 10.769531.984376 16.105469.082031.910156.191406 1.765625.28125 2.664062 9.824218 101.574219 71.363281 190.894532 162.777343 236.253907 2.25 1.125 4.898438 1.125 7.152344 0 11.964844-6.007813 23.519531-12.8125 34.574219-20.367188 2.511718 3.460938 5.683594 6.386719 9.335937 8.609375-7.988281 9.527344-9.734375 22.816406-4.480469 34.085938 5.253907 11.265625 16.558594 18.46875 28.992188 18.472656h136c1.582031 0 3.125-.46875 4.441406-1.34375l45.957032-30.65625h45.601562c4.417969 0 8-3.582031 8-8v-144c0-4.417969-3.582031-8-8-8zm-173.144531-39.304688 9.328125 23.304688h-46.480469c16.988281-30.472656 26.011719-64.742188 26.242187-99.632812l32.054688-9.613282v10.359375c0 1.710938-.054688 3.414063-.085938 5.128907-14.296874 5.078124-23.867187 18.585937-23.914062 33.757812v21.832031c-.003906 5.09375.964844 10.136719 2.855469 14.863281zm-114.855469 55.304688c.007812 8.171875 3.160156 16.03125 8.800781 21.945312-2.96875 2.160157-5.878906 4.398438-8.945312 6.398438l-15.855469 10.144531-15.824219-10.167969c-35.472656-22.738281-62.445312-56.558593-76.726562-96.199218l196.320312-58.898438c-1.09375 33.566406-11 66.253906-28.722656 94.777344h-27.046875c-17.671875 0-32 14.328125-32 32zm-163.65625-82.101562c-.0625-.402344-.136719-.800782-.199219-1.1875l31.792969-9.511719c.941406 4.800781 2.085938 9.601562 3.367188 14.289062l-32.25 9.679688c-1.054688-4.589844-1.925782-8.96875-2.710938-13.269531zm-3.6875-32.136719 31.640625-9.496094c.222656 5.015625.589844 10 1.167969 14.941406l-31.570313 9.472657c-.078125-.71875-.140625-1.429688-.222656-2.152344-.40625-4.125-.777344-8.3125-1.015625-12.765625zm255.34375-93.3125-208 62.398437v-57.207031l104.273438-37.238281 103.726562 29.628906zm0 16.703125v15.296875l-206.910156 62.070312c-.503906-4.96875-.816406-9.972656-.945313-15.007812zm48 17.601562v15.292969l-32 9.601563v-15.296876zm0-16.707031-32 9.601563v-15.296876l32-9.597656zm-252.671875 92.503906 130.175781-39.046875 74.496094-22.351562v15.296875l-201.375 60.414062c-1.265625-4.71875-2.394531-9.480469-3.296875-14.3125zm-51.328125-144.597656 152-45.601563 152 45.601563v20.09375l-32 9.601563v-3.648438c0-3.570312-2.367188-6.707031-5.800781-7.6875l-112-32c-1.601563-.464844-3.316407-.414062-4.886719.152344l-112 40c-3.1875 1.136718-5.3125 4.152344-5.3125 7.535156v67.648438l-32 9.601562zm152 361.070313c-68.90625-35.394532-120.046875-97.789063-141.230469-172.304688l33.335938-10c15.382812 43.304688 44.726562 80.261719 83.414062 105.058594l20.152344 12.953125c2.636719 1.695312 6.019531 1.695312 8.65625 0l20.152344-12.953125.207031-.136719c-2.816406 13.273437 3.148438 26.863281 14.824219 33.777344-4.855469 5.757812-7.515625 13.050781-7.511719 20.582031.015625 1.113281.089844 2.222656.222656 3.328125-10.289062 7.277344-21.050781 13.859375-32.222656 19.695313zm205.601562 40.976562h-133.601562c-8.835938 0-16-7.164062-16-16-.015625-8.304688 6.386719-15.214844 14.671875-15.832031 4.300781-.445313 7.507813-4.160157 7.320313-8.480469-.167969-4.296875-3.699219-7.691406-8-7.6875h-5.992188c-8.835938 0-16-7.164062-16-16s7.164062-16 16-16c4.417969 0 8-3.582031 8-8s-3.582031-8-8-8h-8c-8.835938 0-16-7.164062-16-16s7.164062-16 16-16c4.417969 0 8-3.582031 8-8s-3.582031-8-8-8h-8c-8.835938 0-16-7.164062-16-16s7.164062-16 16-16h104c2.65625.003906 5.140625-1.3125 6.628906-3.515625 1.492188-2.199219 1.792969-4.992187.804688-7.460937l-13.714844-34.269532c-1.140625-2.835937-1.722656-5.863281-1.71875-8.921875v-21.832031c0-11.046875 8.953125-20 20-20s20 8.953125 20 20v28c0 1.019531.195312 2.027344.566406 2.976562l16 40c.882813 2.179688 2.675782 3.867188 4.90625 4.617188l42.527344 14.175781v133.949219zm90.398438-32h-32v-128h32zm0 0"/><path d="m420.960938 102.71875-10.9375 11.683594c3.652343 3.417968 7.085937 7.0625 10.28125 10.910156l12.304687-10.230469c-3.621094-4.359375-7.511719-8.488281-11.648437-12.363281zm0 0"/><path d="m464 201.992188c0-3.136719-.105469-6.242188-.320312-9.320313l-15.960938 1.082031c.183594 2.71875.277344 5.464844.28125 8.238282 0 2.265624-.0625 4.519531-.191406 6.753906l16 .917968c.128906-2.542968.191406-5.101562.191406-7.671874zm0 0"/><path d="m407.878906 91.914062c-4.585937-3.335937-9.375-6.382812-14.34375-9.121093l-7.71875 14.007812c4.378906 2.402344 8.601563 5.074219 12.648438 8zm0 0"/><path d="m461.792969 226.511719-15.746094-2.863281c-.890625 4.917968-2.09375 9.773437-3.597656 14.535156l15.246093 4.800781c1.710938-5.398437 3.078126-10.898437 4.097657-16.472656zm0 0"/><path d="m378.160156 75.535156c-5.273437-2.09375-10.671875-3.851562-16.167968-5.261718l-4 15.496093c4.84375 1.25 9.605468 2.796875 14.257812 4.640625zm0 0"/><path d="m433 260.121094 14 7.757812c1.601562-2.933594 3.199219-5.941406 4.566406-9.023437l-14.527344-6.6875c-1.226562 2.703125-2.570312 5.355469-4.039062 7.953125zm0 0"/><path d="m429.160156 137.410156c2.6875 4.207032 5.113282 8.578125 7.265625 13.085938l14.445313-6.863282c-2.433594-5.117187-5.183594-10.078124-8.238282-14.847656zm0 0"/><path d="m442 164.390625c1.558594 4.746094 2.820312 9.585937 3.777344 14.488281l15.703125-3.046875c-1.082031-5.566406-2.511719-11.0625-4.289063-16.449219zm0 0"/><path d="m359.886719 152.578125c19.441406 7.699219 32.179687 26.515625 32.113281 47.421875h16c.09375-27.457031-16.640625-52.167969-42.167969-62.28125l-2.855469-1.140625-5.953124 14.847656zm0 0"/></svg>
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
                    <p class="curly-text"><b>2000XAF raised of {{ $campaign->goal_amount }}XAF</b></p>
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
