<div class="relative w-32 sm:w-48 md:w-56">
 <figure>
  <img src="{{ asset( 'storage/'.$brand->logo_path ) }}" />
 </figure>

 <article>
  <h4>{{ $brand->name }}</h4>

  <p>{{ Illuminate\Mail\Markdown::parse( $brand->description ) }}</p>
 </article>
</div>
