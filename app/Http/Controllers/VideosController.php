<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Video;
use Storage;
use Auth;

class VideosController extends Controller {

 public function __construct() {
  $this->middleware( 'auth' );
  $this->middleware( 'business' );
  $this->middleware( 'subscribed' );
 }

 public function upload( Request $request ) {
  $this->validate( $request, [
   'uservideo' => [ 'required', 'file' ]
  ] );

  $video = $request->file( 'uservideo' );
  $business = $request->user()->business;
  $basepath = "{$business->folder}/videos";

  $path = $video->store( $basepath, 's3' );

  $dbdata = [
   'name'    => $video->getClientOriginalName(),
   'storage' => 's3',
   'path'    => $path,
   'type'    => $video->getMimeType(),
   'size'    => $video->getSize()
  ];
  $video = $business->videos()->create( $dbdata );

  return back();
 }

 public function destroy( Request $request, Video $video ) {
  Storage::disk( $video->storage )->delete( $video->path );
  $video->delete();

  return back();
 }

 public function linkTo( Request $request, Video $video ) {
  $this->validate( $request, [
   'advs' => [ 'required', 'array' ]
  ] );

  $video->advs()->toggle( $request->advs );

  return back();
 }


 // - view actions

 public function index() {
  $videos = Auth::user()->business->videos()->latest()->get();

  return view( 'layouts.wrapper', [ 'page'=>'videos.index-page' ] )
   ->with( 'videos', $videos );
 }

 public function create() {
  return view( 'layouts.wrapper', [ 'page'=>'videos.create-page' ] );
 }

 public function manifesto( Video $video ) {
  $advs = Auth::user()->advs;

  return view( 'layouts.wrapper', [ 'page'=>'videos.manifesto-page' ] )
   ->with( 'video', $video )
   ->with( 'advs', $advs );
 }
}
