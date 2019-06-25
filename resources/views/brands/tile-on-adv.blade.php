<div class="p-2 {{ $adv->widthClassName() }}">
<a href="{{ route( 'website.advs', [ 'brand'=>$brand, 'adv'=>$adv ] ) }}">
 <figure class="tile relative">
  <img src="{{ asset( 'storage/'.$brand->logo_path ) }}" />

  <figcaption class="absolute bottom-0 left-0 p-2 text-sm uppercase bg-black text-white">{{ $brand->name }}</figcaption>
 </figure>
</a>
</div>
