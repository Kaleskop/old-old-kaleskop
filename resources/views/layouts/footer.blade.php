<footer class="pt-16">
 <div>
  <div>
   <a href="{{ route( 'website.homepage' ) }}">
    <img src="" alt="The Kaleskop K" />
   </a>
   <span>{{ __( 'Ready to get started?' ) }}</span>
   <span>{{ config( 'app.name' ) }}. {{ __( 'We Advertise!' ) }}</span>
  </div>
  <div>
   <a href="{{ route( 'register' ) }}">{{ __( 'Sign up for free' ) }}</a>
  </div>
 </div>

 <div class="flex justify-around">
  <div>
   <h4 class="mb-2 font-medium text-xl">{{ __( 'Resources' ) }}</h4>
   <p><a href="" class="underline">{{ __( 'Pricing' ) }}</a></p>
   <p><a href="" class="underline">{{ __( 'Documentation' ) }}</a></p>
   <p><a href="https://discord.gg/rcMk7M5" class="underline" target="_blank">Discord</a></p>
  </div>

  <div>
   <h4 class="mb-2 font-medium text-xl">{{ __( 'Company' ) }}</h4>
   <p><a href="" class="underline">{{ __( 'About' ) }}</a></p>
   <p><a href="" class="underline">{{ __( 'Terms of Service' ) }}</a></p>
   <p><a href="" class="underline">{{ __( 'Privacy' ) }}</a></p>
   <p><a href="mailto:info@kaleskop.com" class="underline">{{ __( 'Contact' ) }}</a></p>
  </div>
 </div>

 <div>
  <div class="py-4">
   <a href="{{ route( 'website.homepage' ) }}">
    <img src="" />
   </a>
   <span>&copy; 2019 - {{ config( 'app.name' ) }}</span>
   <small>{{ __( 'Built by' ) }} <a href="https://andreagiuseppe.com" class="underline">AndreaGiuseppe</a>.</small>
  </div>
  
  <div class="p-2 flex justify-between">
   <a href="https://twitter.com/kaleskopadv" class="underline">Twitter</a> <a href="https://github.com/Kaleskop" class="underline">Github</a>
  </div>
 </div>
</footer>
