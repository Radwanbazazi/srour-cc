@extends('index')

@section('content')




	<div class="page-title">
		<div class="container">
			<div class="padding-tb-120px">
				<h1>{{__('service.content.Services')}}</h1>
				
			</div>
		</div>
	</div>


	<div class="padding">
		<div class="container">
			<div class="row">

			


<!--=============================== //services cycle ======================================-->


    <div class="nile-about-section">
        <div class="container">
            <!-- Title -->
            <div class="section-title margin-bottom-40px">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="icon text-main-color"><i class="fa fa-truck"></i></div>
                        <div class="h2">{{__('service.content.Our Service 1')}}</div>
                        <div class="des">{{__('service.content.Our Service 2')}} </div>
                    </div>
                </div>
            </div>
            <!-- // End Title -->

            <div class="row">

                <div class="col-lg-4">
                    <div class="service-icon-box">
                        <div class="icon"><img src="{{asset('assets/icons/service-dark-1.png')}}" alt=""></div>
                        <a href="#" class="title h2">{{__('service.content.Cargo Transportation 1')}}</a>
                        <div class="des">{{__('service.content.Cargo Transportation 2')}}</div>
                    </div>
                    <div class="service-icon-box">
                        <div class="icon"><img src="{{asset('assets/icons/service-dark-2.png')}}" alt=""></div>
                        <a href="#" class="title h2">{{__('service.content.Air Freight 1')}}</a>
                        <div class="des">  Full & {{__('service.content.Air Freight 2')}}</div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="text-center sm-mb-45px">
                        <img src="{{asset('assets/img/about-2.jpg')}}" alt="" class="border-radius-500">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-icon-box">
                        <div class="icon"><img src="{{asset('assets/icons/service-dark-3.png')}}" alt=""></div>
                        <a href="#" class="title h2">{{__('service.content.Ocean Freight 1')}}</a>
                        <div class="des">{{__('service.content.Ocean Freight 2')}}</div>
                    </div>
                    <div class="service-icon-box">
                        <div class="icon"><img src="{{asset('assets/icons/service-dark-4.png')}}" alt=""></div>
                        <a href="#" class="title h2">{{__('service.content.Packaging & Storage 1')}}</a>
                        <div class="des">{{__('service.content.Packaging & Storage 2')}}</div>
                    </div>
                </div>



            </div>


            

        </div>
    </div>


<!--=============================== //services cycle ======================================-->


					<div id="accordion" class="nile-accordion margin-top-30px sm-mb-45px">
						<div class="card">
							<div class="card-header" id="headingOne">
								<h5 class="mb-0">
									<button class="btn btn-block btn-link active"  style="width: %100" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><i class="fa fa-info-circle"></i>{{__('service.content.Our Services Include 1')}}</button>
								</h5>
							</div>

							<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
							<div class="card-body">{{__('service.content.Our Services Include 2')}}
										</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingTwo">
								<h5 class="mb-0">
									<button class="btn btn-block btn-link collapsed"  style="width: %100" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><i class="fa fa-truck"></i> {{__('service.content.Explore our Various Services 1')}}</button>
								</h5>
							</div>
							<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
								<div class="card-body">
							{{__('service.content.E1')}}<br>
							{{__('service.content.E2')}}<br>
							{{__('service.content.E3')}}<br>
							{{__('service.content.E4')}}
							{{__('service.content.E5')}}							{{__('service.content.E6')}}
							{{__('service.content.E7')}}
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingThree">
								<h5 class="mb-0">
									<button class="btn btn-block btn-link collapsed"  style="width: %100" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><i class="fa fa-plane"></i>{{__('service.content.Warehousing Solution 1')}}</button>
								</h5>
							</div>
							<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
								<div class="card-body">
									{{__('service.content.Warehousing Solution 2')}}

								</div>
							</div>
						</div>
					</div>



				</div>

				</div>

			</div>
		</div>
	</div>


	<div class="call-action ba-1">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 padding-tb-15px">
					<h2>{{__('service.content.Unbeatable Trucking and Transport Services 1')}}</h2>
					<div class="text" >{{__('service.content.Unbeatable Trucking and Transport Services 2')}}
					</div>
				</div>
				<div class="col-lg-5">
					<div class="row">
						
						<div class="col-lg-4 col-md-4 sm-mb-45px">
							<a href="/about" class="action-bottom layout-1">
								<img src="{{asset('assets/icons/small-icon-2.png')}}" alt=""> 
								<h4>{{__('service.content.Read More')}}</h4>
							</a>
						</div>
						<div class="col-lg-4 col-md-4">
							<a href="/contact" class="action-bottom layout-1">
								<img src="{{asset('assets/icons/small-icon-3.png')}}" alt=""> 
								<h4>{{__('service.content.Contact Us')}}</h4>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection