<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compare Cars</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <style>
            /* General Styles */
body {
    font-family: 'Roboto', sans-serif;
    background-color: #f8f9fa;
    margin: 0;
    padding: 0;
}
.kanit-regular {
    font-family: "Kanit", sans-serif;
    font-weight: 400;
    font-style: normal;
  }
  .teko-regular {
    font-family: "Teko", sans-serif;
    font-optical-sizing: auto;
    font-weight: 400;
    font-style: normal;
  }
  
/* Navigation Bar */
.navbar {
    background-color: black;
}
.border {
    border: 1rem solid black; /* You can adjust the color and width of the border */
}

.navbar .navbar-brand {
    color: #fff;
}

.navbar .nav-link {
    color: #fff;
}

.navbar .nav-link:hover {
    color: #ddd;
}

/* Hero Section */
.jumbotron {
    
    background-image: url('Designer (2).png'); /* Replace 'your-image-url.jpg' with the URL of your image */
    background-size: cover; /* Adjusts the background image size to cover the entire div */
 /* Centers the background image */
 /* Adjusts the width of the div */
 /* Adjusts the height of the div */
    color: #fff;
    margin-bottom: 0;
}
.display-4
{
    color: #f8f9fa;
}

.jumbotron .btn {
    background-color: #ff6347;
    border-color: #ff6347;
}

.jumbotron .btn:hover {
    background-color: #ff4500;
    border-color: #ff4500;
}
.oswald-regular {
    font-family: "Oswald", sans-serif;
    font-optical-sizing: auto;
    font-weight: 800;
    font-style: normal;
  }
.Car_Title
{  
    font-family: "Oswald", sans-serif;
    font-size: 5rem;
}
#titleborder
{
    position: relative;
    width: 100%;
    border: #000 solid 8px;
}
#brandSelect {
    position: absolute;
    top: 30%;
    left: 2.5%;
    color: black;
    border: 2px solid grey;
    background: rgb(171,171,171);
    background: linear-gradient(90deg, rgba(171,171,171,1) 0%, rgba(255,255,255,1) 0%, rgba(0,0,0,1) 100%);
    width: 400px; /* Adjust the width as needed */
    height: 50px;
    border-radius: 10px;
    font-size: 18px; /* Adjust the font size as needed */
}
#front_image
{
    margin-top: 20px;
    margin-bottom: 20px;
    margin-left: 20%;
    position: relative;
    left: 10%;
    width:100%;
    height: 200px;
    border: 4px solid white;
}
#titlerow
{   
    background-image: url('wallpapers/Neon_BW.jpg');
    background-size: cover; /* Adjusts the background image size to cover the entire div */
    background-position: center;
    width: 100%;
    height: 400px;
    border:  8px solid black;
}
#compare_container
{   position: relative;
    margin-top: 30px;
}
#front_text
{
    font-size: 5rem;
    font-family: "Oswald", sans-serif;
    color: white;
    text-align: center;
}
#bottom_text
{
    font-size: 3rem;
    font-family: "Oswald", sans-serif;
    color: white;
    text-align: center;

}
#filterdiv
{
    position: absolute;
    width: 20%;
    top: 43%;
    left: 2%;
    border-radius: 10px;
}
#filtertitle
{   
    font-size: 3rem;
    font-family: "Oswald", sans-serif;
    color: black;
}
#filterdiv .brand-button {
    margin-top: 20px;
    border-radius: 10px;
    color: black;
    border: 2px solid grey;
    border: 2px solid black;
    background: rgb(171,171,171);
    background: linear-gradient(90deg, rgba(171,171,171,1) 0%, rgba(255,255,255,1) 0%, rgba(145,145,145,1) 100%);
    width: 70%;
    transition: transform 0.3s ease;
    height: 80%;
}
.brand-button:hover {
    transform: scale(1.15);
}

.Porsche_Border
{   
    position: relative;

    max-width: none; 
    border: 2px solid #000; 

}
    /* Model Comparison Table */
.b-title-headline-text
{
    position: absolute;
    left: 20%;
}
#compareBtn
{
    border: 2px solid white;
    background: rgb(171,171,171);
background: linear-gradient(90deg, rgba(171,171,171,1) 0%, rgba(4,4,4,1) 0%, rgba(120,120,120,1) 100%);
}
#uncheckAllBtn
{
    border: 2px solid white;
    background: rgb(171,171,171);
background: linear-gradient(90deg, rgba(171,171,171,1) 0%, rgba(4,4,4,1) 0%, rgba(120,120,120,1) 100%);
}
#s718-models
{
    position: relative;
    left: 50%;
}
.car-card {
    margin-bottom: 20px; /* Adjust the value as per your requirement */
}

.car-card .h5
{
    color: black;
}
.card
{
    border-radius: 20px;
    transition: transform 0.3s ease;
}
.card:hover {
    transform: scale(1.1); /* Scale up the card on hover */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); /* Add box shadow for a lifted effect */
}
.table {
    margin-top: 2rem;
    border-top: 2px solid #ddd;
}

.table th {
    background-color: #f8f9fa;
    color: #333;
}

.table td, .table th {
    border-bottom: 1px solid #ddd;
}

.table tr:nth-child(even) {
    background-color: #f2f2f2;
}

.table tr:hover {
    background-color: #e6e6e6;
}

/* Custom Styles */
/* Hide the default radio buttons */
.form-check-input[type="radio"] {
    display: none;
}

/* Create a custom radio button */
.form-check-label:before {
    content: '';
    display: inline-block;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    border: 1px solid #ddd;
    margin-right: 10px;
}

/* Style the custom radio button when checked */
.form-check-input[type="radio"]:checked ~ .form-check-label:before {
    background-color: #2196F3;
    border-color: #2196F3;
}


.container {
    max-width: 960px;
    margin: 0 auto;
    padding: 2rem;
}

h1, h2 {
    color: #333;
}

a {
    color: #007bff;
    text-decoration: none;
}

a:hover {
    color: #0056b3;
    text-decoration: underline;
}
.modal-dialog {
    max-width: 90%; /* Adjust as needed */
}

.col-md-6 p 
{
    font: bold;
    font-family: "Kanit", sans-serif;
    font-size: 1.5rem;
}
.compareinfo
{
    position: relative;
    top: 20%;
}
.car-checkbox {
    /* Increase the size of the checkbox */
    transform: scale(1.5);
    margin-right: 10px; /* Add some spacing between checkbox and text */
}
    </style>
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <a class="navbar-brand" href="#">Car Verse</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Models</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->

    <!--    <div id="filterdiv">
        <select id="brandSelect" class="filter_one">
            <option value="all">All Brands</option>
            <option value="Bugatti">Bugatti</option>
            <option value="Ferrari">Ferrari</option>
            <option value="BMW">BMW</option>
            <option value="Porsche">Porsche</option>
            <option value="Ford">Ford</option>
            <option value="Lamborghini">Lamborghini</option>
            <option value="Mercedes-Benz">Mercedes-Benz</option>
            <option value="Mclaren">Mclaren</option>
        </select>
    </div>    
    -->
    <div class="front">
        <div class="row" id="titlerow">
            <div class="col-sm-12" id ="front_text">
                CarCompare
            </div>
            <div class="col-sm-12" id ="bottom_text">
                Discover the Best Match: Compare Cars to Uncover the Ideal Vehicle for You.
            </div>
        </div>
    </div>
    <div class="container"  id="filterdiv">
        <div class="row">
            <div class="col-sm-12" id ="filtertitle">
                Car brands
            </div>
            <div class="col-sm-12">
                <button class="btn btn-primary brand-button"  id="filterbutton"   data-brand="all">All Brands</button>
            </div>
            <div class="col-sm-12">
                <button class="btn btn-primary brand-button" id="filterbutton" data-brand="Bugatti">Bugatti</button>
            </div>
            <div class="col-sm-12">
                <button class="btn btn-primary brand-button" id="filterbutton" data-brand="Ferrari">Ferrari</button>
            </div>
            <div class="col-sm-12">
                <button class="btn btn-primary brand-button" id="filterbutton" data-brand="Porsche">Porsche</button>
            </div>
            <div class="col-sm-12">
                <button class="btn btn-primary brand-button" id="filterbutton" data-brand="Ford">Ford</button>
            </div>
            <div class="col-sm-12">
                <button class="btn btn-primary brand-button" id="filterbutton" data-brand="Lamborghini">Lamborghini</button>
            </div>
            <div class="col-sm-12">
                <button class="btn btn-primary brand-button" id="filterbutton"  data-brand="Mercedes-Benz">Mercedes-Benz</button>
            </div>
            <div class="col-sm-12">
                <button class="btn btn-primary brand-button" id="filterbutton"  data-brand="Mclaren">Mclaren</button>
            </div>
            <div class="col-sm-12">
                <button class="btn btn-primary brand-button" id="filterbutton"  data-brand="BMW">BMW</button>
            </div>
            <!--            <div class="col-l-12" >
                <div id="brandButtons">
                    <button class="btn btn-primary brand-button"  id="filterbutton"   data-brand="all">All Brands</button>
                    <button class="btn btn-primary brand-button" id="filterbutton" data-brand="Bugatti">Bugatti</button>
                    <button class="btn btn-primary brand-button" id="filterbutton" data-brand="Ferrari">Ferrari</button>
                    <button class="btn btn-primary brand-button" id="filterbutton" data-brand="Porsche">Porsche</button>
                    <button class="btn btn-primary brand-button" id="filterbutton" data-brand="Ford">Ford</button>
                    <button class="btn btn-primary brand-button" id="filterbutton" data-brand="Lamborghini">Lamborghini</button>
                    <button class="btn btn-primary brand-button" id="filterbutton"  data-brand="Mercedes-Benz">Mercedes-Benz</button>
                    <button class="btn btn-primary brand-button" id="filterbutton"  data-brand="Mclaren">Mclaren</button>
                    <button class="btn btn-primary brand-button" id="filterbutton"  data-brand="BMW">BMW</button>
                </div>
            </div>

            -->

        </div>
    </div>


    

    
    <!-- Model Comparison Section -->
    <button type="button" class="btn btn-primary btn-lg" id="compareBtn"
        style="position: fixed; bottom: 20px; right: 20px; z-index: 999;">
        Compare
    </button>
    <button type="button" class="btn btn-primary btn-lg" id="uncheckAllBtn"
        style="position: fixed; bottom: 20px; right: 10rem; z-index: 999;">
        Uncheck All
    </button>

    <div class="container-xl" id="compare_container">
            <div class="row">
                <div class="col-md-5 brand-div" data-brand="Porsche">
                    <div class="Car_Title">
                        Porsche
                    </div>
                </div>
                <div class="col-md-7 brand-div" data-brand="Porsche">
                    <img src="Logo_final\PORSCHE.png">
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 car-card" data-brand="Porsche">
                    <div class="card" style="width: 28rem;">
                        <div>
                            <img alt="Porsche 718 Cayman" src="Car_models\Caymen.webp"
                                data-image-src="Car_models\Caymen.webp" data-width="640" data-height="360"
                                data-fade-in-show="true">
                            <input type="checkbox" class="car-checkbox" id="car-checkbox-Caymen" value="Caymen"
                                data-car-info="718 Cayman : Performance :  0-100 in 4.2 sec">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Cayman</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 car-card" data-brand="Porsche">
                    <div class="card" style="width: 28rem;">
                        <div>
                            <img alt="Porsche 718 Cayman" src="Car_models\911.jpg" data-image-src="Car_models\911.jpg"
                                data-width="640" data-height="360" data-fade-in-show="true">
                            <input type="checkbox" class="car-checkbox" id="car-checkbox-911" value="911"
                                data-car-info="718 Cayman : Performance :  0-100 in 4.2 sec">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">911</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 car-card" data-brand="Porsche">
                    <div class="card" style="width: 28rem;">
                        <div>
                            <img alt="Porsche 718 Cayman Style Edition" src="Car_models\CAYENNEN.jpg"
                                data-image-src="Car_models\CAYENNEN.jpg" data-width="640" data-height="360"
                                data-fade-in-show="true">
                            <input type="checkbox" class="car-checkbox" id="car-checkbox-cayenne" value="cayenne"
                                data-car-info="718 Boxster: Some quick example text to build on the card title and make up the bulk of the card's content.">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Cayenne</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="col-md-5 car-card" data-brand="Porsche">
                <div class="card" style="width: 28rem;">
                    <div>
                        <img alt="Porsche 911 Carrera" src="Car_models\MACAN.jpg" data-image-src="Car_models\MACAN.jpg"
                            data-width="640" data-height="360" data-lazy-load="true" data-lazy-loaded="true"
                            data-fade-in-show="true">
                        <input type="checkbox" class="car-checkbox" id="car-checkbox-macan" value="macan"
                            data-car-info="718 Cayman : Performance :  0-100 in 4.2 sec">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Macan</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-5 car-card" data-brand="Porsche">
                <div class="card" style="width: 28rem;">
                    <div>
                        <img alt="Porsche 911 Carrera T" src="Car_models\PANAMERA.jpg"
                            data-image-src="Car_models\PANAMERA.jpg" data-width="640" data-height="360"
                            data-lazy-load="true" data-lazy-loaded="true" data-fade-in-show="true">
                        <input type="checkbox" class="car-checkbox" id="car-checkbox-panamera" value="panamera"
                            data-car-info="718 Cayman : Performance :  0-100 in 4.2 sec">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Panamera</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-2 car-card" data-brand="Porsche">
                <div class="card" style="width: 28rem;">
                    <div>
                        <img alt="Porsche 911 Carrera Cabriolet" src="Car_models\TAYCAN.jpg"
                            data-image-src="Car_models\TAYCAN.jpg" data-width="640" data-height="360"
                            data-lazy-load="true" data-lazy-loaded="true" data-fade-in-show="true">
                        <input type="checkbox" class="car-checkbox" id="car-checkbox-taycan" value="taycan"
                            data-car-info="718 Cayman : Performance :  0-100 in 4.2 sec">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Taycan</h5>
                    </div>
                </div>
            </div>
            </div>

        <div class="row">
            <div class="col-md-5 brand-div" data-brand="Lamborghini">
                <div class="Car_Title">
                    Lamborghini
                </div>
            </div>
            <div class="col-md-7 brand-div" data-brand="Lamborghini">
                <img src="Logo_final\LAMBORGHINI.png">
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 car-card" data-brand="Lamborghini">
                <div class="card d-flex flex-column" style="width: 28rem;">
                    <div>
                        <img alt="Porsche 718 Boxster" src="Samesize\AVENTADOR-removebg-preview.png"
                            data-image-src="Samesize\AVENTADOR-removebg-preview.png" data-width="640" data-height="360"
                            data-fade-in-show="true" style="height: 216px;width: 450px;">
                    </div>
                    <div class="card-body">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title">Aventador</h5>
                                </div>
                                <div class="col-auto">
                                    <input type="checkbox" class="car-checkbox" id="car-checkbox-Aventador"
                                        value="aventador" data-car-info="718 Cayman : Performance :  0-100 in 4.2 sec">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-5 car-card" data-brand="Lamborghini">
                <div class="card d-flex flex-column" style="width: 28rem;">
                    <div>
                        <img alt="Porsche 718 Boxster" src="Samesize\URUS-removebg-preview.png"
                            data-image-src="Samesize\URUS-removebg-preview.png" data-width="640" data-height="360"
                            data-fade-in-show="true" style="max-width: 90%">
                        <input type="checkbox" class="car-checkbox" id="car-checkbox-urus" value="urus"
                            data-car-info="718 Cayman : Performance :  0-100 in 4.2 sec">
                    </div>

                    <div class="card-body">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title">Urus</h5>
                                </div>
                                <div class="col-auto">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 car-card" data-brand="Lamborghini">
                <div class="card d-flex flex-column" style="width: 28rem;">
                    <div>
                        <img alt="Porsche 718 Boxster" src="Samesize\VENENO-removebg-preview.png"
                            data-image-src="Samesize\VENENO-removebg-preview.png" data-width="640" data-height="360"
                            data-fade-in-show="true" style="max-width: 85%">
                        <input type="checkbox" class="car-checkbox" id="car-checkbox-veneno" value="veneno"
                            data-car-info="718 Cayman : Performance :  0-100 in 4.2 sec">
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title">Veneno</h5>
                            </div>
                            <div class="col-auto">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 car-card" data-brand="Lamborghini">
                <div class="card" style="width: 28rem;">
                    <div>
                        <img alt="Porsche 718 Boxster" src="Car_models\DIABLO-removebg-preview.png"
                            data-image-src="Car_models\DIABLO-removebg-preview.png" data-width="640" data-height="360"
                            data-fade-in-show="true" style="max-width: 90%">
                        <input type="checkbox" class="car-checkbox" id="car-checkbox-diablo" value="diablo"
                            data-car-info="718 Cayman : Performance :  0-100 in 4.2 sec">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Diablo</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-5 car-card" data-brand="Lamborghini">
                <div class="card" style="width: 28rem;">
                    <div>
                        <img alt="Porsche 718 Boxster" src="Samesize\COUNTECH-removebg-preview.png"
                            data-image-src="Samesize\COUNTECH-removebg-preview.png" data-width="640" data-height="360"
                            data-fade-in-show="true" style="max-width: 90%">
                        <input type="checkbox" class="car-checkbox" id="car-checkbox-countech" value="countech"
                            data-car-info="718 Cayman : Performance :  0-100 in 4.2 sec">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Countech</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-2 car-card" data-brand="Lamborghini">
                <div class="card" style="width: 28rem;">
                    <div>
                        <img alt="Porsche 718 Boxster" src="Car_models\HURACAN-removebg-preview.png"
                            data-image-src="Car_models\HURACAN-removebg-preview.png" data-width="640" data-height="360"
                            data-fade-in-show="true" style="max-width: 90%">
                        <input type="checkbox" class="car-checkbox" id="car-checkbox-huracan" value="huracan"
                            data-car-info="718 Cayman : Performance :  0-100 in 4.2 sec">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Huracan</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 brand-div" data-brand="Ferrari">
                <div class="Car_Title">
                    Ferrari
                </div>
            </div>
            <div class="col-md-7 brand-div" data-brand="Ferrari">
                <img src="Logo_final\FERRARI.png">
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 car-card" data-brand="Ferrari">
                <div class="card d-flex flex-column" style="width: 28rem;">
                    <div>
                        <img alt="Porsche 718 Boxster" src="Samesize\EVO-599x-removebg-preview.png"
                            data-image-src="Samesize\EVO-599x-removebg-preview.png" data-width="640" data-height="360"
                            data-fade-in-show="true" style="max-width: 90%">
                        <input type="checkbox" class="car-checkbox" id="car-checkbox-evolution" value="evolution"
                            data-car-info="718 Cayman : Performance :  0-100 in 4.2 sec">
                    </div>
                    <div class="card-body">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title">Evolution</h5>
                                </div>
                                <div class="col-auto">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 car-card" data-brand="Ferrari">
                <div class="card" style="width: 28rem;">
                    <div>
                        <img alt="Porsche 911 Carrera T" src="Samesize\ITALIA-removebg-preview.png"
                            data-image-src="Samesize\ITALIA-removebg-preview.png" data-width="640" data-height="360"
                            data-lazy-load="true" data-lazy-loaded="true" data-fade-in-show="true"
                            style="max-width: 90%">
                        <input type="checkbox" class="car-checkbox" id="car-checkbox-italia" value="italia"
                            data-car-info="718 Cayman : Performance :  0-100 in 4.2 sec">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Italia</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-2 car-card" data-brand="Ferrari">
                <div class="card" style="width: 28rem;">
                    <div>
                        <img alt="Porsche 911 Carrera T" src="Samesize\1_PISTA-removebg-preview.png"
                            data-image-src="Samesize\PISTA-removebg-preview.png" data-width="640" data-height="360"
                            data-lazy-load="true" data-lazy-loaded="true" data-fade-in-show="true"
                            style="max-width: 90%">
                        <input type="checkbox" class="car-checkbox" id="car-checkbox-pista" value="pista"
                            data-car-info="718 Cayman : Performance :  0-100 in 4.2 sec">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Pista</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 car-card" data-brand="Ferrari">
                <div class="card" style="width: 28rem;">
                    <div>
                        <img alt="Porsche 718 Boxster" src="Samesize\FF50-removebg-preview.png"
                            data-image-src="Samesize\FF50-removebg-preview.png" data-width="640" data-height="360"
                            data-fade-in-show="true" style="max-width: 90%">
                        <input type="checkbox" class="car-checkbox" id="car-checkbox-ff50" value="ff50"
                            data-car-info="718 Cayman : Performance :  0-100 in 4.2 sec">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">FF50</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-5 car-card" data-brand="Ferrari">
                <div class="card" style="width: 28rem;">
                    <div>
                        <img alt="Porsche 718 Boxster" src="Samesize\SUPERFAST-removebg-preview.png"
                            data-image-src="Samesize\SUPERFAST-removebg-preview.png" data-width="640" data-height="360"
                            data-fade-in-show="true" style="max-width: 90%">
                        <input type="checkbox" class="car-checkbox" id="car-checkbox-superfast" value="superfast"
                            data-car-info="718 Cayman : Performance :  0-100 in 4.2 sec">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Superfast</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-2 car-card" data-brand="Ferrari">
                <div class="card" style="width: 28rem;">
                    <div>
                        <img alt="Porsche 718 Boxster" src="Samesize\PORTOFINO-removebg-preview.png"
                            data-image-src="Samesize\PORTOFINO-removebg-preview.png" data-width="640" data-height="360"
                            data-fade-in-show="true" style="max-width: 90%">
                        <input type="checkbox" class="car-checkbox" id="car-checkbox-portofino" value="portofino"
                            data-car-info="718 Cayman : Performance :  0-100 in 4.2 sec">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Portofino</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 brand-div" data-brand="Bugatti">
                <div class="Car_Title">
                    Buggati
                </div>
            </div>
            <div class="col-md-7 brand-div" data-brand="Bugatti">
                <img src="Logo_final\BUGGATI.png">
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 car-card" data-brand="Bugatti">
                <div class="card d-flex flex-column" style="width: 28rem;">
                    <div>
                        <img alt="Porsche 718 Boxster" src="Samesize\CHIRON_side-removebg.png"
                            data-image-src="Samesize\CHIRON_side-removebg.png" data-width="640" data-height="360"
                            data-fade-in-show="true" style="max-width: 90%">
                        <input type="checkbox" class="car-checkbox" id="car-checkbox-chiron" value="chiron"
                            data-car-info="718 Cayman : Performance :  0-100 in 4.2 sec">
                    </div>
                    <div class="card-body">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title">Chiron</h5>
                                </div>
                                <div class="col-auto">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 car-card" data-brand="Bugatti">
                <div class="card" style="width: 28rem;">
                    <div>
                        <img alt="Porsche 911 Carrera T" src="Samesize\DIVO-removebg-preview.png"
                            data-image-src="Samesize\DIVO-removebg-preview.png" data-width="640" data-height="360"
                            data-lazy-load="true" data-lazy-loaded="true" data-fade-in-show="true"
                            style="max-width: 90%">
                        <input type="checkbox" class="car-checkbox" id="car-checkbox-divo" value="divo"
                            data-car-info="718 Cayman : Performance :  0-100 in 4.2 sec">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Divo</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-2 car-card" data-brand="Bugatti">
                <div class="card" style="width: 28rem;">
                    <div>
                        <img alt="Porsche 911 Carrera T" src="Samesize\VEYRON-Side_view.png"
                            data-image-src="Samesize\VEYRON-Side_view.png" data-width="640" data-height="360"
                            data-lazy-load="true" data-lazy-loaded="true" data-fade-in-show="true"
                            style="max-width: 90%">
                        <input type="checkbox" class="car-checkbox" id="car-checkbox-veyron" value="veyron"
                            data-car-info="718 Cayman : Performance :  0-100 in 4.2 sec">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Veyron</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 brand-div" data-brand="BMW">
                <div class="Car_Title">
                    BMW
                </div>
            </div>
            <div class="col-md-7 brand-div" data-brand="BMW">
                <img src="Logo_final\1_BMW-removebg-preview.png">
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 car-card" data-brand="BMW">
                <div class="card d-flex flex-column" style="width: 28rem;">
                    <div>
                        <img alt="Porsche 718 Boxster" src="Samesize\BMW_M3_GTR-removebg-preview.png"
                            data-image-src="Samesize\BMW_M3_GTR-removebg-preview.png" data-width="640" data-height="360"
                            data-fade-in-show="true" style="max-width: 90%">
                        <input type="checkbox" class="car-checkbox" id="car-checkbox-m3-gtr" value="m3-gtr"
                            data-car-info="718 Cayman : Performance :  0-100 in 4.2 sec">
                    </div>
                    <div class="card-body">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title">M3 GTR</h5>
                                </div>
                                <div class="col-auto">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 car-card" data-brand="BMW">
                <div class="card" style="width: 28rem;">
                    <div>
                        <img alt="Porsche 911 Carrera T" src="Samesize\I8-removebg-preview.png"
                            data-image-src="Samesize\I8-removebg-preview.png" data-width="640" data-height="360"
                            data-lazy-load="true" data-lazy-loaded="true" data-fade-in-show="true"
                            style="max-width: 90%">
                        <input type="checkbox" class="car-checkbox" id="car-checkbox-i8" value="i8"
                            data-car-info="718 Cayman : Performance :  0-100 in 4.2 sec">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">I8</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-2 car-card" data-brand="BMW">
                <div class="card" style="width: 28rem;">
                    <div>
                        <img alt="Porsche 911 Carrera T" src="Samesize\M4_Coupe-removebg-preview.png"
                            data-image-src="Samesize\M4_Coupe-removebg-preview.png" data-width="640" data-height="360"
                            data-lazy-load="true" data-lazy-loaded="true" data-fade-in-show="true"
                            style="max-width: 90%">
                        <input type="checkbox" class="car-checkbox" id="car-checkbox-m4-coupe" value="m4-coupe"
                            data-car-info="718 Cayman : Performance :  0-100 in 4.2 sec">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">M4 Coupe</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 car-card" data-brand="BMW">
                <div class="card" style="width: 28rem;">
                    <div>
                        <img alt="Porsche 911 Carrera T" src="Samesize\ROADSTER.jpg"
                            data-image-src="Samesize\ROADSTER.jpg" data-width="640" data-height="360"
                            data-lazy-load="true" data-lazy-loaded="true" data-fade-in-show="true"
                            style="max-width: 90%">
                        <input type="checkbox" class="car-checkbox" id="car-checkbox-roadster" value="roadster"
                            data-car-info="718 Cayman : Performance :  0-100 in 4.2 sec">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Roadster</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-5 car-card" data-brand="BMW">
                <div class="card" style="width: 28rem;">
                    <div>
                        <img alt="Porsche 911 Carrera T" src="Samesize\M5.jpg" data-image-src="Samesize\M5.jpg"
                            data-width="640" data-height="360" data-lazy-load="true" data-lazy-loaded="true"
                            data-fade-in-show="true" style="max-width: 90%">
                        <input type="checkbox" class="car-checkbox" id="car-checkbox-m5" value="m5"
                            data-car-info="718 Cayman : Performance :  0-100 in 4.2 sec">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">M5</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-2 car-card" data-brand="BMW">
                <div class="card" style="width: 28rem;">
                    <div>
                        <img alt="Porsche 911 Carrera T" src="Samesize\M6_Coupe-removebg-preview.png"
                            data-image-src="Samesize\M6_Coupe-removebg-preview.png" data-width="640" data-height="360"
                            data-lazy-load="true" data-lazy-loaded="true" data-fade-in-show="true"
                            style="max-width: 90%">
                        <input type="checkbox" class="car-checkbox" id="car-checkbox-m6-coupe" value="m6-coupe"
                            data-car-info="718 Cayman : Performance :  0-100 in 4.2 sec">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">M6 Coupe</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 brand-div" data-brand="Mclaren">
                <div class="Car_Title">
                    Mclaren
                </div>
            </div>
            <div class="col-md-7 brand-div" data-brand="Mclaren">
                <img src="Logo_final\MCLAREN.png">
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 car-card" data-brand="Mclaren">
                <div class="card d-flex flex-column" style="width: 28rem;">
                    <div>
                        <img alt="Porsche 718 Boxster" src="Samesize\Mclaren_GT-removebg-preview.png"
                            data-image-src="Samesize\Mclaren_GT-removebg-preview.png" data-width="640" data-height="360"
                            data-fade-in-show="true" style="max-width: 90%">
                        <input type="checkbox" class="car-checkbox" id="car-checkbox-gt" value="gt"
                            data-car-info="718 Cayman : Performance :  0-100 in 4.2 sec">
                    </div>
                    <div class="card-body">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title">Mclaren GT</h5>
                                </div>
                                <div class="col-auto">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 car-card" data-brand="Mclaren">
                <div class="card" style="width: 28rem;">
                    <div>
                        <img alt="Porsche 911 Carrera T" src="Samesize\Mclaren_P1-removebg-preview.png"
                            data-image-src="Samesize\Mclaren_P1-removebg-preview.png" data-width="640" data-height="360"
                            data-lazy-load="true" data-lazy-loaded="true" data-fade-in-show="true"
                            style="max-width: 90%">
                        <input type="checkbox" class="car-checkbox" id="car-checkbox-p1" value="p1"
                            data-car-info="718 Cayman : Performance :  0-100 in 4.2 sec">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Mclaren P1</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-2 car-card" data-brand="Mclaren">
                <div class="card" style="width: 28rem;">
                    <div>
                        <img alt="Porsche 911 Carrera T" src="Samesize\SPYDER-removebg-preview.png"
                            data-image-src="Samesize\SPYDER-removebg-preview.png" data-width="640" data-height="360"
                            data-lazy-load="true" data-lazy-loaded="true" data-fade-in-show="true"
                            style="max-width: 90%">
                        <input type="checkbox" class="car-checkbox" id="car-checkbox-spyder" value="spyder"
                            data-car-info="718 Cayman : Performance :  0-100 in 4.2 sec">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Mclaren Spyder</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 brand-div" data-brand="Mercedes-Benz">
                <div class="Car_Title">
                    Mercedes-Benz
                </div>
            </div>
            <div class="col-md-7 brand-div" data-brand="Mercedes-Benz">
                <img src="Logo_final\MERCEDES_BENZ.png">
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 car-card" data-brand="Mercedes-Benz">
                <div class="card d-flex flex-column" style="width: 28rem;">
                    <div>
                        <img alt="Porsche 718 Boxster" src="Samesize\AMGONE-removebg-preview.png"
                            data-image-src="Samesize\AMGONE-removebg-preview.png" data-width="640" data-height="360"
                            data-fade-in-show="true" style="max-width: 90%">
                        <input type="checkbox" class="car-checkbox" id="car-checkbox-amg-one" value="amg-one"
                            data-car-info="718 Cayman : Performance :  0-100 in 4.2 sec">
                    </div>
                    <div class="card-body">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title">AMG-ONE</h5>
                                </div>
                                <div class="col-auto">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 car-card" data-brand="Mercedes-Benz">
                <div class="card" style="width: 28rem;">
                    <div>
                        <img alt="Porsche 911 Carrera T" src="Samesize\COUPE-removebg-preview.png"
                            data-image-src="Samesize\COUPE-removebg-preview.png" data-width="640" data-height="360"
                            data-lazy-load="true" data-lazy-loaded="true" data-fade-in-show="true"
                            style="max-width: 90%">
                        <input type="checkbox" class="car-checkbox" id="car-checkbox-coupe-black" value="coupe-black"
                            data-car-info="718 Cayman : Performance :  0-100 in 4.2 sec">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Coupe Black</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-2 car-card" data-brand="Mercedes-Benz">
                <div class="card" style="width: 28rem;">
                    <div>
                        <img alt="Porsche 911 Carrera T" src="Samesize/GTR-removebg-preview.png"
                            data-image-src="Samesize/GTR-removebg-preview.png" data-width="640" data-height="360"
                            data-lazy-load="true" data-lazy-loaded="true" data-fade-in-show="true"
                            style="max-width: 90%">
                        <input type="checkbox" class="car-checkbox" id="car-checkbox-gtr" value="gtr"
                            data-car-info="718 Cayman : Performance :  0-100 in 4.2 sec">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Mercedes-Benz GTR</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 brand-div" data-brand="Ford">
                <div class="Car_Title">
                    Ford
                </div>
            </div>
            <div class="col-md-7 brand-div" data-brand="Ford">
                <img src="Logo_final\FORD.png">
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 car-card" data-brand="Ford">
                <div class="card d-flex flex-column" style="width: 28rem;">
                    <div>
                        <img alt="Porsche 718 Boxster" src="Samesize\MUSTANG-removebg-preview.png"
                            data-image-src="Samesize\MUSTANG-removebg-preview.png" data-width="640" data-height="360"
                            data-fade-in-show="true" style="max-width: 90%">
                        <input type="checkbox" class="car-checkbox" id="car-checkbox-amg-one" value="amg-one"
                            data-car-info="718 Cayman : Performance :  0-100 in 4.2 sec">
                    </div>
                    <div class="card-body">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title">Mustang</h5>
                                </div>
                                <div class="col-auto">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 car-card" data-brand="Ford">
                <div class="card" style="width: 28rem;">
                    <div>
                        <img alt="Porsche 911 Carrera T" src="Samesize\FORD_GT-removebg-preview.png"
                            data-image-src="Samesize\FORD_GT-removebg-preview.png" data-width="640" data-height="360"
                            data-lazy-load="true" data-lazy-loaded="true" data-fade-in-show="true"
                            style="max-width: 90%">
                        <input type="checkbox" class="car-checkbox" id="car-checkbox-raptor-pickup-truck"
                            value="raptor-pickup-truck" data-car-info="718 Cayman : Performance :  0-100 in 4.2 sec">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Ford GT</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-2 car-card" data-brand="Ford">
                <div class="card" style="width: 28rem;">
                    <div>
                        <img alt="Porsche 911 Carrera T" src="Samesize\RAPTOR.jpg" data-image-src="Samesize\RAPTOR.jpg"
                            data-width="640" data-height="360" data-lazy-load="true" data-lazy-loaded="true"
                            data-fade-in-show="true" style="max-width: 90%">
                        <input type="checkbox" class="car-checkbox" id="car-checkbox-raptor-pickup-truck"
                            value="raptor-pickup-truck" data-car-info="718 Cayman : Performance :  0-100 in 4.2 sec">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Raptor</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- Modal -->
    <input type="hidden" id="selectedCars" value="">
    <div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="infoModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="infoModalLabel">Car Information</h5>
                    <button type="button" class="close" id="close1" data-bs-dismiss="modal"
                        onclick="$('#infoModal').modal('hide');" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modalBody">
                    <!-- Car information will be inserted here -->

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" id="close1"
                        onclick="closeModal()">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
    // Variable to store the modal instance
    var modalInstance = null;

    // Function to close the modal and uncheck selected checkboxes
    function closeModal() {
        if (modalInstance) {
            modalInstance.hide();
            // Uncheck all checkboxes
            const checkboxes = document.querySelectorAll('.car-checkbox');
            checkboxes.forEach(checkbox => checkbox.checked = false);
        }
    }

    // Fetch the JSON data
    let carData = [];
    fetch('cars_temp.json')
        .then(response => response.json())
        .then(data => {
            carData = data;
        })
        .catch(error => console.error('Error fetching car data:', error));

    // Event listener for the modal's shown.bs.modal event
    document.getElementById('infoModal').addEventListener('shown.bs.modal', function () {
        // Get the modal instance and store it in the variable
        modalInstance = bootstrap.Modal.getInstance(this);
    });

    document.getElementById('uncheckAllBtn').addEventListener('click', function () {
        const checkboxes = document.querySelectorAll('.car-checkbox');
        checkboxes.forEach(checkbox => checkbox.checked = false);
    });

    // Add click event listener to the Compare button
    document.getElementById('compareBtn').addEventListener('click', function (event) {
        event.preventDefault(); // Prevent the default action

        // Collect all checked checkboxes
        const checkedCheckboxes = document.querySelectorAll('.car-checkbox:checked');
        const checkedCarIds = Array.from(checkedCheckboxes).map(checkbox => checkbox.value);

        // Check if more than two cars are selected
        if (checkedCarIds.length > 2) {
            alert("You can only compare up to two cars.");
            return; // Exit the function
        }

        // Fetch and display information for each checked car
        let modalBodyContent = '<div class="container-xxl">'; // Start the container
        checkedCarIds.forEach((carId, index) => {
            const carInfo = carData.find(car => car.id === carId);
            if (carInfo) {
                // For every second car, start a new row
                if (index % 2 === 0) {
                    modalBodyContent += '<div class="row">';
                }

                modalBodyContent += `
                    <div class="col-md-6">
                        <div> 
                            <img src="${carInfo.imageSrc}" alt="${carInfo.name}" class="img-fluid mx-auto" id="imgid1"><br>
                        </div> 

                        <h4>${carInfo.name}</h4>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Power (Kw)</td>
                                    <td>${carInfo.powerKw}</td>
                                </tr>
                                <tr>
                                    <td>Horsepower</td>
                                    <td>${carInfo.horsepower}</td>
                                </tr>
                                <tr>
                                    <td>Top Speed</td>
                                    <td>${carInfo.topSpeed} km/h</td>
                                </tr>
                                <tr>
                                    <td>0-100 mph</td>
                                    <td>${carInfo.zeroToHundred} sec</td>
                                </tr>
                                <tr>
                                    <td>Weight</td>
                                    <td>${carInfo.weightKg} kg</td>
                                </tr>
                                <tr>
                                    <td>Height</td>
                                    <td>${carInfo.height} mm</td>
                                </tr>
                                <tr>
                                    <td>Length</td>
                                    <td>${carInfo.length} mm</td>
                                </tr>
                                <tr>
                                    <td>Fuel Consumption</td>
                                    <td>${carInfo.fuelConsumption} L/100km</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                `;

                // For every second car, close the row
                if (index % 2 === 1 || index === checkedCarIds.length - 1) {
                    modalBodyContent += '</div>'; // Close the row
                }
            } else {
                console.error('Car information not found for ID:', carId);
            }
        });
        modalBodyContent += '</div>'; // Close the container

        // Update modal body with selected car information
        document.querySelector('#modalBody').innerHTML = modalBodyContent;

        // Show the modal
        $('#infoModal').modal('show');
    });

    // Event listener for the modal's hidden.bs.modal event
    document.getElementById('infoModal').addEventListener('hidden.bs.modal', function () {
        closeModal(); // Close the modal when it's hidden
    });

    // Additional code to ensure the modal closes when the close button is clicked
    document.querySelector('#close1').addEventListener('click', function () {
        closeModal();
    });

    // Function to filter cars and brands
    function filterCarsAndBrands(selectedBrand) {
        const cars = document.querySelectorAll('.car-card'); // Get all car cards
        const brands = document.querySelectorAll('.brand-div'); // Get all brand divs

        // Loop through each car card and brand div
        cars.forEach(car => {
            const brand = car.dataset.brand; // Get the brand of the car

            // Show or hide the card based on the selected brand
            if (selectedBrand === 'all' || brand === selectedBrand) {
                car.style.display = 'block'; // Show the card
            } else {
                car.style.display = 'none'; // Hide the card
            }
        });

        // Loop through each brand div
        brands.forEach(brandDiv => {
            const brand = brandDiv.dataset.brand; // Get the brand of the div

            // Show or hide the brand div based on the selected brand
            if (selectedBrand === 'all' || brand === selectedBrand) {
                brandDiv.style.display = 'block'; // Show the div
            } else {
                brandDiv.style.display = 'none'; // Hide the div
            }
        });
    }

    // Add event listener to brand buttons
    const brandButtons = document.querySelectorAll('.brand-button');
    brandButtons.forEach(button => {
        button.addEventListener('click', function () {
            const brand = this.dataset.brand; // Get the brand from the data attribute
            filterCarsAndBrands(brand); // Filter cars and brands
        });
    });
});
    </script>
    

</body>

</html>