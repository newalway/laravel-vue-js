@extends('layoutContents')
@section('section-contents-page')
@section('faq-trans')
  <li class="nav-item">
    <a href="{{ URL::to('/contents') }}"><img src=" {{asset('photos/uk.png') }}" width="25"/></a>
    <a href="{{ URL::to('/th/contents') }}"><img src=" {{asset('photos/thai.png') }}" width="25"/></a>
  </li>
@endsection
<section class="py-5 video" id="contents">
  <div class="container">
         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
           <h1 class="text-center">{{ trans('mainmenu.headSectionContents') }}</h1>
         </div>
    <style type="text/css">

      /* .slider {
          width: 50%;
          margin: 100px auto;
      } */

      .slick-slide {
        margin: 0px 20px;
      }

      .slick-slide img {
        width: 100%;
      }
      .slick-prev {
          top: 30%;
          left: -12px;
      }
      .slick-next {
        right: -12px;
        top: 30%;
    }
     /* .slick-prev:before,
      .slick-next:before {
        color: black;
        right: -12px;
        top: 30%;
      } */


      .slick-slide {
        transition: all ease-in-out .3s;
        opacity: .2;
      }

      .slick-active {
        opacity: 1;
      }

      .slick-current {
        opacity: 1;
      }
      .txt-margin{margin: 30px;color: #fff;}
      .vertical-center{margin-top: 30px;}
      .slick-next:before {
          font-family: 'Font Awesome\ 5 Free';
          content: '\f138';
          font-weight: 900;
      }
      .slick-prev:before {
          font-family: 'Font Awesome\ 5 Free';
          content: '\f137';
          font-weight: 900;
      }
      section.video{margin-top: inherit;}
    </style>

    @if ( Config::get('app.locale') == 'en')

  <style media="screen">
        #contents{background-image: url('img/BG_Product.jpg');background-repeat: no-repeat;background-position: top;width: 100%;}
  </style>

  @elseif ( Config::get('app.locale') == 'th' )
    <style media="screen">
          #contents{background-image: url('../img/BG_Product.jpg');background-repeat: no-repeat;background-position: top;width: 100%;}
    </style>

    @endif
<div class="row">

  @forelse ($contents as $content)

    <div class="col-sm-6 col-md-4 col-lg-4 text-center">

      {{-- @if ( Config::get('app.locale') == 'en')
        <a href="{{ route('contents.show', ['id' => $content->contents_id]) }}" target="_blank" class="text-center">
      @elseif ( Config::get('app.locale') == 'th' )
        <a href="{{ route('th.contents.show', ['id' => $content->contents_id]) }}" target="_blank" class="text-center">
      @endif --}}
      <a href="{{ url('/contents', ['id' => $content->contents_id]) }}" target="_blank" class="text-center">
        <img class="img-fluid" src="{{asset($content->contents_image)}}" style="max-width:220px;max-height:220px;margin:0 auto;"alt="">

        <div class="txt-margin text-center">{{$content->contents_name}}</div>
      </a>
    </div>


  @empty
  <p>No Contents</p>
  @endforelse
  <div class="col-sm-12 col-md-12 col-lg-12">
    {{-- {{dd($products)}} --}}
    <div class="float-right">
        {{ $contents->fragment('contents')->links() }}
    </div>

  </div>

</div>



</section>
@endsection
