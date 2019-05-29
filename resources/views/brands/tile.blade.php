<div>
 <div>
  <figure>
   <img src="{{ asset( 'storage/'.$brand->logo_path ) }}" class="w-full" />
  </figure>

  <article>
   <header>
    <h4 class="mb-2 font-medium text-2xl">{{ $brand->name }}</h4>

    <a href="{{ route( 'brands.edit', $brand ) }}">
     <span class="far fa-edit"></span>
     <span>{{ __( 'Edit' ) }}</span>
    </a>
   </header>

   <p>{{ Illuminate\Mail\Markdown::parse( $brand->description ) }}</p>

   <footer class="p-2 flex justify-end">
    @subscribed
     <a href="{{ route( 'brands.sponsor', $brand ) }}" class="underline">{{ __( 'Sponsor' ) }}</a>

    @endsubscribed
   </footer>
  </article>
 </div>
</div>
