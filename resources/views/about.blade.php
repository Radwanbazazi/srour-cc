@extends('index')

@section('content')


    <div class="page-title">
        <div class="container">
            <div class="padding-tb-120px">
                <h1>{{__('about.content.AboutUs')}}</h1>
            </div>
        </div>
    </div>


    <!--============= About Us =============-->
    <div class="nile-about-section">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-6 sm-mb-45px">



                        <div class="section-title-right text-main-color clearfix">
                        <div class="icon"><img src="{{asset('assets/icons/title-icon-1.png')}}" alt=""></div>

                        <h2 class="title-text">{{__('about.content.Who We Are 1')}}</h2>
                    </div>
                    <div class="about-text margin-tb-25px">
                        <h2 style="background-attachment: center;">{{__('about.content.Who We Are 2')}}</h2>{{__('about.content.Who We Are 3')}}
                        <br>
                        <h2>{{__('about.content.OUR GOAL 1')}}</h2>

                        {{__('about.content.OUR GOAL 2')}}
                    </div>
                    

                </div>
                <div class="col-lg-6">
                    
                        <img src="{{asset('assets/img/srour.jpeg')}}" alt="">
                    </div>



                    <div class="col-lg-12">
                    
                        <img src="{{asset('assets/img/srour.jpeg')}}" alt="">
                    </div>
            </div>
        </div>
    </div>
    <!--============= //About Us =============-->





@endsection