<div>
 <div>
  <figure>
   <img src="{{ asset( 'storage/'.$brand->logo_path ) }}" />
  </figure>

  <article>
   <h4>{{ $brand->name }}</h4>

   <p>{{ Illuminate\Mail\Markdown::parse( $brand->description ) }}</p>

   <footer>
    @subscribed
     <a href="{{ route( 'brands.sponsor', $brand ) }}">{{ __( 'Sponsor' ) }}</a>

    @endsubscribed
   </footer>
  </article>
 </div>
</div>
