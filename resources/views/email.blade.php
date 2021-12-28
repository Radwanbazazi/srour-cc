<!DOCTYPE html>
<html>
<head>
	 <title>SROUR-CC</title>
    <meta name="author" content="Nile-Theme">
    <meta name="robots" content="index follow">
    <meta name="googlebot" content="index follow">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="keywords" content="cargo, clean, contractor, corporate, freight, industry, localization, logistics, modern, shipment, transport, transportation, truck, trucking">
    <meta name="description" content="Transportation and Logistics Responsive HTML5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800%7CPoppins:300i,300,400,500,600,700,400i,500%7CDancing+Script:700%7CDancing+Script:700%7CGreat+Vibes:400%7CPoppins:400%7CDosis:800%7CRaleway:400,700,800&amp;subset=latin-ext" rel="stylesheet">
    <!-- animate -->
    <link rel="stylesheet" href="assets/css/animate.css" />
    <!-- owl Carousel assets -->
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/owl.theme.css" rel="stylesheet">
    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- hover anmation -->
    <link rel="stylesheet" href="assets/css/hover-min.css">
    <!-- flag icon -->
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <!-- main style -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- elegant icon -->
    <link rel="stylesheet" href="assets/css/elegant_icon.css">
    <!-- fontawesome  -->
    <link rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css">
    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="assets/rslider/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" type="text/css" href="assets/rslider/fonts/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="assets/rslider/css/settings.css">


</head>
<body>

                        <div class="container">
                            <div class="row">

                                <div class="col-lg-12 sm-mb-45px">

                                         <form action="send-email" method="POST" enctype="multipart/form-data">
                                        @csrf       
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>{{__('contact.content.Full Name')}} </label>
                                                <input type="text" class="form-control" id="inputName44" placeholder="Name" Name="name"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>{{__('contact.content.Email 2')}} </label>
                                                <input type="email" class="form-control" id="inputEmail44" placeholder="Email" Name="email"> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>{{__('contact.content.Message')}} </label>
                                            <textarea class="form-control" id="exampleFormControlTextarea11" rows="3" Name="message"> </textarea>
                                        </div>
                                        <button type="submit"  id ="af" class="btn-sm btn-lg btn-block background-dark text-white text-center  text-uppercase rounded-0 padding-15px">{{__('contact.content.SEND MESSAGE')}} </button>


                                        </form>
                                    </div>
                                </div>
                            </div>




<!-- SLIDER REVOLUTION 5.0 EXTENSIONS -->
<script src="assets/rslider/js/extensions/revolution.extension.actions.min.js"></script>
<script src="assets/rslider/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="assets/rslider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="assets/rslider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="assets/rslider/js/extensions/revolution.extension.migration.min.js"></script>
<script src="assets/rslider/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="assets/rslider/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="assets/rslider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="assets/rslider/js/extensions/revolution.extension.video.min.js"></script>
<script src="assets/js/YouTubePopUp.jquery.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/imagesloaded.min.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script>  
        window.onbeforeunload = function () {
            window.scrollTo(0, 0);
        }; 
 </script>

</body>
</html>