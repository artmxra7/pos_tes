<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | ALAN POS</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style type="text/css">
        body {
            font-family: Helvetica;
        }
        .banner{
            height: 100vh;
            min-height: 770px;
            padding-top: 256px;
            background: url(https://s3-ap-southeast-1.amazonaws.com/image.mokapos.com/growth/homepage/index/index-jumbotron@2x.png) no-repeat 50%;
            background-blend-mode: multiply;
            background-size: cover;
        }
        .banner-title{
            font-size: 40px;
            font-weight: 500;
            line-height: 1.38;
            color: #fff;
        }
        .banner-body{
            margin-top: 15px;
            font-size: 20px;
            line-height: 1.8;
            color: #fff;
        }
        a:hover {
          text-decoration: none;
        }
        .footer {
            background-color: #0d1527;
        }

        .contras {
            filter: contrast(40%);
        }
        .btn-rounded{
            border-radius: 40px;
        }
        .btn-transparent{
            background: transparent;
        }

        .padding-bisnis {
            padding: 28px;
        }
        .padding-menu{
            margin: 30px;
            margin-top: 0px;
        }
        .padding-category{
            margin-bottom: 5px;
        }

        .category-description{
            background: white;
        }

        .text-header-moka{
            font-size: 30px;
            font-weight: 500;
            line-height: 1.33;
            color: #37549c;
        }
        .text-header-footer{
            color: #6d7587;
            font-size: 17px;
            text-transform: capitalize;
            margin-top: 18px;
            margin-bottom: 18px;
        }

        .text-header-footer li a{
            color: #6d7587;
            font-size: 17px;
            text-transform: capitalize;
            margin-bottom: 18px;
        }

        .modal-dialog {
            max-width: 800px;
            margin: 30px auto;
        }
        .modal-body {
            position:relative;
            padding:0px;
        }
        .close {
            position:absolute;
            right:-30px;
            top:0;
            z-index:999;
            font-size:2rem;
            font-weight: normal;
            color:#fff;
            opacity:1;
        }

        .list-footer{
            text-align: left;
            list-style-type: none;
            padding-left: 0;
            text-decoration: none;
        }

        .list-footer li {
            margin-bottom: 10px;
        }

        .list-footer li a{
            color: #fff;
            text-decoration-color: blue;
        }

        .list-footer li a:hover{
            color: #007bff;
        }

        .hr-footer{
            border: 0.5px solid #fff;
        }
    </style>
</head>
<body>

    @yield('content')
    
    <!-- Mainly scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            // Transition effect for navbar 
            $(window).scroll(function() {
              if($(this).scrollTop() > 100) { 
                $('#navbar').addClass('navbar-light bg-light fixed-top text-dark');
                $('#navbar').removeClass('bg-transparent navbar-dark bg-dark text-light');
                document.getElementById('logo').src = 'https://s3-ap-southeast-1.amazonaws.com/image.mokapos.com/growth/homepage/navbar/desktop/blue.svg';
                document.getElementById('navbar').style.top = '0px';
              } else {
                $('#navbar').addClass('bg-transparent navbar-dark bg-dark text-light');
                $('#navbar').removeClass('navbar-light bg-light fixed-top text-dark');
                document.getElementById('logo').src = 'https://s3-ap-southeast-1.amazonaws.com/image.mokapos.com/growth/homepage/navbar/desktop/inactive.svg';
                document.getElementById('navbar').style.top = '64px';
              }
            });

            // Modal
            var $videoSrc;  
            $('.video-btn').click(function() {
                $videoSrc = $(this).data( "src" );
            });
            $('#myModal').on('shown.bs.modal', function (e) {
                $("#video").attr('src',$videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0" ); 
            })
            $('#myModal').on('hide.bs.modal', function (e) {
                $("#video").attr('src',$videoSrc); 
            })
        });
    </script>
</body>
</html>
