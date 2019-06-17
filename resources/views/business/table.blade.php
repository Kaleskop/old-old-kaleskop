<table class="relative overflow-hidden w-full bg-white">
 <thead>
  <tr>
   <th scope="col" class="p-2 font-semibold text-left">{{ __( 'Date' ) }}</th>
   <th scope="col" class="p-2 font-semibold text-left">{{ __( 'Total' ) }}</th>
   <th scope="col" class="p-2 font-semibold text-left">{{ __( 'Actions' ) }}</th>
  </tr>
 </thead>
 <tbody>

 @forelse( $invoices as $invoice )
  <tr>
   <td>{{ $invoice->date()->toFormattedDateString() }}</td>
   <td>{{ $invoice->total() }}</td>
   <td>
    <div>
     <a href="" class="underline">{{ __( 'Download' ) }}</a>
    </div>
   </td>
  </tr>

 @empty
  <tr><td colspan="4">{{ __( 'No invoices' ) }}</td></tr>

 @endforelse

 </tbody>
</table>
