@extends('Common.Frontheader')
@section('content')

<div class="page-banner section" style="height:100px;">
        <div class="container" style="height:100px;">
            <div class="page-banner-wrapper text-center">
                <h2 class="title">Blog</h2>
                <!--<ul class="breadcrumb justify-content-center">-->
                <!--</ul>-->
            </div>
        </div>
    </div>
    <!-- Page Banner End -->

    <!-- Blog Start -->
    <div class="section section-padding-02 mt-n10">
        <div class="container">
            <!-- Blog Wrapper Start -->
            <div class="blog-wrapper">
                <div class="row">
                @foreach ($bloglist as $list)
                    <div class="col-lg-4 col-md-6">
                        <!-- Single Blog Start -->
                        <div class="single-blog">
                            <div class="blog-image">
                                <a href="blogdetails?id={{$list->id}}">
                                <a href="blogdetails?id={{$list->id}}"><img src="{{$list->blogimage}}" alt="blog-img" style="width:400px; height:300px;"></a>
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="#">Admin</a>
                                    <span>{{$list->created_at}}</span>
                                </div>
                                <h4 class="title"><a href="blogdetails?id={{$list->id}}">{{$list->title}}<br> new collections arrives</a></h4>
                                <a href="blogdetails?id={{$list->id}}" class="more">Read more</a>
                            </div>
                        </div>
                        <!-- Single Blog End -->
                    </div>
                    @endforeach
                   
                </div>
            </div>
            <!-- Blog Wrapper End -->

            <!-- Page pagination End -->
            <!-- <div class="page-pagination">
                <ul class="pagination justify-content-center">
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link active" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item">...</li>
                    <li class="page-item"><a class="page-link" href="#">15</a></li>
                </ul>
            </div> -->
            <!-- Page pagination End -->
        </div>
    </div>


@endsection

