<div>
 <div class="flex">
  <figure class="w-1/4">
   <img src="{{ asset( 'storage/'.$brand->logo_path ) }}" class="w-full" />
  </figure>

  <article class="ml-4 flex-1">
   <header class="flex justify-between items-center">
    <h4 class="mb-2 font-medium text-2xl">{{ $brand->name }}</h4>

    <a href="{{ route( 'brands.edit', $brand ) }}">
     <span class="far fa-edit"></span>
     <span class="hidden">{{ __( 'Edit' ) }}</span>
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
