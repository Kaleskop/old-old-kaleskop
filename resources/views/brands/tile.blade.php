<div>
 <div>
  <figure>
   <img src="{{ asset( 'storage/'.$brand->logo_path ) }}" />
  </figure>

  <article>
   <h4 class="mb-2 font-medium text-2xl">{{ $brand->name }}</h4>

   <p>{{ Illuminate\Mail\Markdown::parse( $brand->description ) }}</p>

   <footer class="p-2 flex justify-end">
    @subscribed
     <a href="{{ route( 'brands.sponsor', $brand ) }}" class="underline">{{ __( 'Sponsor' ) }}</a>

    @endsubscribed
   </footer>
  </article>
 </div>
</div>
