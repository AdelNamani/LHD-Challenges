
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="author" content="Zellat Abdelkhalek">
    <meta name="description"
          content="LHD Challenges">

    <meta property="og:title" content="LHD Challenges">
    <meta property="og:description"
          content="LHD Challenges">
    <meta property="og:site_name" content="LHD">
    <meta property="og:image" content="cse_spot/images/logo.png">
    <meta property="og:url" content="https://cse.club">
  

    <title> LHD Challenegs </title>
    <link rel="shortcut icon" href="https://localhackday.mlh.io/assets/logos/favicon-8a04661b47811a1cbf3957f7ac0f05ae6c6267bf2c0184ec2c250492b2af9c5a.ico">
    <link href="{{URL::asset('css/LHD.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
</head>

<body>
 <section> 
       <div class="element left"> 
            <img src="{{URL::asset('Images/Fichier 11.png')}}" class="image" style="margin-top: 30px ; margin-left: -20px;">
            <img src="{{URL::asset('Images/Fichier 13.png')}}" class="image" style="margin-left: 40px ;">
            <div >
                  <img src="{{URL::asset('Images/Fichier 3.png')}}" class="image" style="margin-top: -10px ; margin-left: -30px;">
                  <img src="{{URL::asset('Images/Fichier 14.png')}}" class="image" style="margin-left: 60px ">
      
            </div>
           
       </div>
       <div class="element content">
             <div class="sub">
                  <a title="CSE - Club sceintifique de lesi" href="https://cse.club" target="_blank" class="logo-cse"><img src="{{URL::asset('Images/Fichier 5.png')}}" class="logo" style="width: 100%"></a>
                  <a title="MLH - Local Hack Day" href="https://localhackday.mlh.io/" class="animated" style="margin-top: 20px ; width: 80%" target="_blank" style="width: 70%;"><img src="{{URL::asset('Images/Fichier 4.png')}}" style="width: 100%" class="logo"></a>
             </div>
             <div class="sub">
                   <form action="{{ route('login') }}" method="POST">
                        @csrf
                         <h3>
                              Insert your email here :      
                         </h3>
                         <input class="input" id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
                         @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert" style="margin-top: 10px;color: red">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                         <button type="submit" class="btn" href="#">Validate</button>
                   </form>
             </div>
             <div class="sub">
                   <div class="flex">
                        <hr class="hr">
                        <h2> Sponsored by </h2>
                        <hr class="hr">
                   </div>
                   <div class="flex2" style="margin-top : -15px ; ">
                        <a title="Github" target="_blank" href="https://github.com/" class="sponsored"> <img src="{{URL::asset('Images/GitHub-Logo.png')}}" style="width: 100%;"></a>
                        <a title="MLH" target="_blank" href="" class="sponsored"> <img src="{{URL::asset('Images/mlh-logo-grayscale.png')}}" style="width: 100%;"></a>
                        <a title="Microsoft" target="_blank" href="https://www.microsoft.com" class="sponsored"> <img src="{{URL::asset('Images/Microsoft.png')}}" style="width: 100%;"></a>
                   </div>
                  
             </div>
            
       </div>
       <div class="element right">
            <img src="{{URL::asset('Images/Fichier 10.png')}}"  class ="image2" style="margin-top: 20px ; margin-right: -25px ;">
            <img src="{{URL::asset('Images/Fichier 2.png')}}" class ="image2" >
       </div>
 </section>


</body>
</html>
