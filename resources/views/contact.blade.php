@extends('index')

@section('content')



    <div class="page-title">
        <div class="container">
            <div class="padding-tb-120px">
                <h1>{{__('contact.content.Contact Us 1')}}</h1>
                
            </div>
        </div>
    </div>


    <div class="padding-tb-100px">

        <div class="container">
            <div class="row">

                <div class="col-lg-6 sm-mb-45px">
                    <p> {{__('contact.content.Contact Us 2')}}</p>
                    <h5>{{__('contact.content.Phone')}} :</h5>
                    <span class="d-block"><i class="fa fa-phone text-main-color margin-right-10px" aria-hidden="true"></i> {{__('contact.content.info1')}}</span>
                    <span class="d-block sm-mb-30px"><i class="fa fa-mobile text-main-color margin-right-10px" aria-hidden="true"></i>{{__('contact.content.info2')}}</span>
                     <span class="d-block sm-mb-30px"><i class="fa fa-mobile text-main-color margin-right-10px" aria-hidden="true"></i>{{__('contact.content.info3')}}</span>
                    <h5 class="margin-top-20px">{{__('contact.content.Address 1')}} :</h5>
                    <span class="d-block sm-mb-30px"><i class="fa fa-map text-main-color margin-right-10px" aria-hidden="true"></i>{{__('contact.content.Address 2')}}  </span>
                    <h5 class="margin-top-20px">Email :</h5>
                    <span class="d-block sm-mb-30px"><i class="fa fa-envelope-open text-main-color margin-right-10px" aria-hidden="true"></i>{{__('contact.content.Email 1')}}  </span>
                </div>

                <div class="col-lg-6">
                    <div class="contact-modal">
                        <div class="background-main-color">
                            <div class="padding-30px">
                                <h3 class="padding-bottom-15px">{{__('contact.content.SEND MESSAGE')}} </h3>
                               
                                    <a href="email"  id ="af" class="btn-sm btn-lg btn-block background-dark text-white text-center  text-uppercase rounded-0 padding-15px">{{__('contact.content.SEND MESSAGE')}} </a>

                               
                                       
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>


    <div class="map-layout">
        <div class="map-embed">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d831.6233717551071!2d36.29518817078865!3d33.51455299879726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4364b5c8bc484bf1!2zMzPCsDMwJzUyLjQiTiAzNsKwMTcnNDAuNyJF!5e0!3m2!1sar!2s!4v1638070538965!5m2!1sar!2s"width="100%" height="390" frameborder="0" style="border:0" allowfullscreen loading="lazy"></iframe>

        </div>
        </div>
    </div>




@endsection




