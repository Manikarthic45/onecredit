@extends('Common.Frontheader')
@section('content')


<div class="page-banner section" style="height:100px;">
        <div class="container" style="height:100px;">
            <div class="page-banner-wrapper text-center">
                <h2 class="title">Blog Messages</h2>
                <ul class="breadcrumb justify-content-center">
                </ul>
            </div>
        </div>
    </div>
   

        <!-- blog area start  -->
        <div class="blog-area pt-120 pb-90">
            <div class="container container-small">
                <div class="row">

                    <div class="col-xl-8 col-lg-12">
                        <div class="blog-main-wrapper mb-30">
                            <div class="row">

                                @foreach ($blogdet as $list)
                                <div class="col-xl-12 col-lg-6 col-md-12">
                                    <div class="blog-wrapper position-relative mb-30">
                                        <div class="blog-thumb ">
                                            <a href="blogdetails?id={{$list->id}}"><img src="{{$list->blogimage}}" alt="blog-img"></a>
                                        </div>
                                        <div class="blog-content-wrapper">
                                            <div class="blog-meta">
                                                <div class="blog-date">
                                                    <i class="flaticon-calendar"></i>
                                                    <span>{{$list->created_at}}</span>
                                                </div>
                                                <div class="blog-user">
                                                    <i class="flaticon-avatar"></i>
                                                    <span>Admin</span>
                                                </div>
                                            </div>
                                            <div class="blog-content">
                                                <a href="blogdetails/{{$list->id}}">
                                                    <h3>{{$list->title}}</h3>
                                                </a>
                                                <p>{{$list->shortdesc}}</p>
                                                <p>{{$list->longdesc}}</p>
                                                <p>{!! $list->fulldesc !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach






                            </div>
                            {{--<div class="common-pagination mt-30 mb-20">--}}
                                {{--<ul>--}}
                                    {{--<li><a href="#"><i class="fal fa-angle-left"></i></a></li>--}}
                                    {{--<li class="active"><a href="#"><span>01</span></a></li>--}}
                                    {{--<li><a href="#"><span>02</span></a></li>--}}
                                    {{--<li><a href="#"><i class="fal fa-angle-right"></i></a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        </div>

                    </div>
                    <div class="col-xl-4 col-lg-8 col-md-8">
                        <div class="sidebar-widget-wrapper">

                            <div class="sidebar__widget mb-30">
                                <div class="sidebar__widget-head mb-35">
                                    <h4 class="sidebar__widget-title">Recent posts</h4>
                                </div>

                                <div class="sidebar__widget-content">
                                    <div class="rc__post-wrapper">
                                        @foreach ($allbloglist as $list)
                                        <div class="rc__post d-flex align-items-center">
                                            <div class="rc__thumb mr-20">
                                                <a href="blogdetails?id={{$list->id}}"><img src="{{$list->blogimage}}" alt="img" style="width:400px; height:300px;"></a>
                                            </div>
                                            
                                        </div>
                                        <div class="rc__content">
                                                <div class="rc__meta">
                                                    <span>Created At : {{$list->created_at}}</span>
                                                </div>
                                            </div>
                                           <div style="height:10px;"></div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>


@endsection

