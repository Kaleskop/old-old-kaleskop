<table class="relative overflow-hidden w-full bg-white">
 <thead>
  <tr>
   <th scope="col">{{ __( 'Name' ) }}</th>
   <th scope="col">{{ __( 'Type' ) }}</th>
   <th scope="col">{{ __( 'Size' ) }}</th>
   <th scope="col">{{ __( 'Actions' ) }}</th>
  </tr>
 </thead>
 <tbody>

 @forelse( $videos as $video )
  <tr>
   <td>{{ $video->name }}</td>
   <td>{{ $video->type }}</td>
   <td>{{ $video->size }}</td>
   <td>
    <div>
     <a href="{{ route( 'videos.manifesto', $video ) }}">{{ __( 'Manifesto' ) }}</a>
    </div>

    @include( 'videos.delete-form' )

   </td>
  </tr>

 @empty
  <tr><td colspan="4">{{ __( 'No videos' ) }}</td></tr>

 @endforelse

 </tbody>
</table>
