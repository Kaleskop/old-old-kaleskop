<footer>
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

 <div>
  <div>
   <h4>{{ __( 'Resources' ) }}</h4>
   <p><a href="">{{ __( 'Pricing' ) }}</a></p>
   <p><a href="">{{ __( 'Documentation' ) }}</a></p>
   <p><a href="https://discord.gg/rcMk7M5" target="_blank">Discord</a></p>
  </div>

  <div>
   <h4>{{ __( 'Company' ) }}</h4>
   <p><a href="">{{ __( 'About' ) }}</a></p>
   <p><a href="">{{ __( 'Terms of Service' ) }}</a></p>
   <p><a href="">{{ __( 'Privacy' ) }}</a></p>
   <p><a href="mailto:info@kaleskop.com">{{ __( 'Contact' ) }}</a></p>
  </div>
 </div>

 <div>
  <div>
   <a href="{{ route( 'website.homepage' ) }}">
    <img src="" />
   </a>
   <span>&copy; 2019 - {{ config( 'app.name' ) }}</span>
   <small>{{ __( 'Built by' ) }} <a href="https://andreagiuseppe.com">AndreaGiuseppe</a>.</small>
  </div>
  
  <div>
   <a href="https://twitter.com/kaleskopadv">Twitter</a> <a href="https://github.com/Kaleskop">Github</a>
  </div>
 </div>
</footer>
