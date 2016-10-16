<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <meta charset="utf-8">
    <link rel="shortcut icon" href="images/jdr-logo.png">
    <title>JEDARA Imports and Exports </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="keywords">
    <meta name="author" content="">
    


    <link href="css/main.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

   
<style>
            .ontop {                
                z-index: 2;
                width: 100%;
                min-height: 100%;
                top: 0;
                left: 0;
                display: none;
                position: absolute;             
                background-color: rgba(0, 0, 0 ,0.9);
            }
            #button_close{
                position: absolute;
                right:    10px;
                top: 120px;
                color: #808080;
            }   
            #button_close:hover{
                color: #e0e0e0;
                cursor: hand;
            }
        </style>
        <script type="text/javascript">
            $(document).ready(function(){
            });
            var height = 0;
            var imageSrc = "images/";
            var image;
            var numberOfImages = 0;
            var popupDiv;
            var j;
            
            function hide(div) {
                $("#content > img").each(function(){
                    $(this).remove();
                });
                document.getElementById(div).style.display = 'none';
            }
            //To detect escape button
            document.onkeydown = function(evt) {
                evt = evt || window.event;
                if (evt.keyCode == 27) {
                    hide('ontopDiv');
                }
            };
            function newPopup(ontopDiv, string1, string2, id) {
                window.scrollTo(0, 0);
                imageSrc="images/";
                height = $("#largest").height()+100;
                $("#ontopDiv").css("height", height);
                document.getElementById(ontopDiv).style.display = 'block';
                popupDiv = document.getElementById("content");
                
                imageSrc = imageSrc.concat(string1).concat("/").concat(string2);
                numberOfImages = parseInt($('#'+id).attr('alt'));
                for(i = 1; i <= numberOfImages; i++){
                    j = i.toString();
                    imageSrc = imageSrc.concat(j);
                    imageSrc = imageSrc.concat(".jpg");
                    image = document.createElement('img');
                    $(image).attr({'src': imageSrc, 'height': '250px', 'width': '250px', 'hspace': '50', 'vspace': '50'});

                    popupDiv.appendChild(image);
                    imageSrc = "images/";
                    imageSrc = imageSrc.concat(string1).concat("/").concat(string2);
                }
                imageSrc="";
            }

        </script>

</head>
<body>
    <div id="largest">
    <div id="ontopDiv" class="ontop">
        <CENTER>
            <div id="content" style="padding-top:140px" >
                <i id="button_close" class="fa fa-times fa-2x" onclick="hide('ontopDiv')"></i>
            </div>
        </CENTER>
    </div>
    <div class="navbar-wrapper">
        <div class="navbar navbar-fixed-top" id="navigation">
            <div class="navbar-inner">
                <div class="container">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="brand" >
                        <img src="images/jdr-logo.png" >
                    </a>
                    <input id="navActive" type="hidden">
                    <div class="nav-collapse collapse">
                        
                         


<div class="row" style="padding-top:15px">


<span style="float:left">
<h3>  JEDARA IMPORTS & EXPORTS (PVT) LTD </h3>
   </span>

<ul class="nav pull-right">
    <li id="navHome" class="">
      <a href="index.php">HOME</a>
    </li>
   

    

    <li id="navPricing" class="">
        <a href="Products.php">PRODUCTS</a>
    </li>

   
    <li id="navContact" class="">
        <a href="Contact.php">CONTACT</a>
    </li>
   
</ul>


</div>
      
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div id="wrap">
        <div id="large_div">
            

<div class="row-fluid">
    <div class="pricing-banner-large">
        <img style="z-index:1" src="images/p1.png">
        <div id="pricing-banner-background"></div>
        <div class="pricing-banner-content">
            <h3 style="color:#FFFFFF; padding-top:20px">
				These are our Imports and Exports!
                
            </h3>
            
        </div>

    </div>

</div>

<div class="container">

    

    <section id="labels" style="padding-bottom:0px; padding-top:30px;">
        <div class="container">
            <div class="row">
                <div class="span6">
                    <div class="dl">
                        <div class="brand">
                            <h2 style="letter-spacing: -1px;">
                                Import
                            </h2>
                        </div>

                         <div id="full-features">
                    
                <ul class="unstyled row-fluid">
                    
                    <li alt="6" id="image1" style="visibility: hidden; animation-name: none;" class="right span12  wow fadeInLeft" onClick="newPopup('ontopDiv', 'wines', 'wine', id)">
                        <div class="span6" style="padding-left:100px">
                            Wine
                           
                        </div>
                        <div class="span6 center">
                            <img src="images/wines.png">
                        </div>
                    </li>
                    <li alt="6" id="image2" style="visibility: hidden; animation-name: none;" class="left span12 wow fadeInRight" onClick="newPopup('ontopDiv', 'wfMaterials', 'wfmaterial', id)">
                        <div class="span6  center">
                            <img src="images/wood_flooring.jpg">
                        </div>
                        <div class="span6">
                            Wood flooring material 
                    </li>
                    <li alt="6" id="image3" style="visibility: hidden; animation-name: none;" class="right span12 wow fadeInLeft" onClick="newPopup('ontopDiv', 'craftLiners', 'craftLiner', id)">
                        <div class="span6">
                            Kraft liners
                            
                        </div>
                        <div class="span6 center">
                            <img src="images/craft_liners.jpg">
                        </div>
                    </li>   
                              </ul>
                           </div>
                    </div>
                </div>
                <div class="span6">
                    <div class="dl">

                        
                        <div class="brand">
                            <h2 style="letter-spacing: -1px;">
                                Export
                            </h2>
                        </div>

                    

                       <div id="full-features">
                
                   
                <ul class="unstyled row-fluid">
                    <li alt="6" id="image4" style="visibility: hidden; animation-name: none;" class="left span12 wow fadeInRight" onClick="newPopup('ontopDiv', 'shirts', 'shirt', id)">
                        <div class="span6 center">
                            <img src="images/shirt.png">
                        </div>
                        <div class="span6">
                            Shirts
                             
                        </div>
                    </li>
                    <li alt="6" id="image5" style="visibility: hidden; animation-name: none;" class="right span12  wow fadeInLeft" onClick="newPopup('ontopDiv', 'bressiers', 'bressier', id)">
                        <div class="span6">
                            Brassieres
                        </div>
                        
                        <div class="span6 center">
                            <img src="images/bressiers.png">
                        </div>
                    </li>
                    <li alt="6" id="image6" style="visibility: hidden; animation-name: none;" class="left span12 wow fadeInRight" onClick="newPopup('ontopDiv', 'gloves', 'glove', id)">
                        <div class="span6  center">
                            <img src="images/gloves.png">
                        </div>
                        <div class="span6">
                            Gloves
                        </div>
                    </li>
                    <li alt="6" id="image7" style="visibility: hidden; animation-name: none;" class="right span12 wow fadeInLeft" onClick="newPopup('ontopDiv', 'wines', 'wine', id)">
                        <div class="span6">
                           Wine
                        </div>
                        <div class="span6 center">
                            <img src="images/wines.png">
                        </div>
                    </li>
                    <li alt="6" id="image8" style="visibility: hidden; animation-name: none;" class="left span12 wow fadeInRight" onClick="newPopup('ontopDiv', 'coconutProducts', 'coconutProduct', id)">
                        <div class="span6 center">
                            <img src="images/coconut_products.png">
                        </div>
                        <div class="span6">
                           Coconut products
                        </div>
                    </li>
                    <li alt="6" id="image9" style="visibility: hidden; animation-name: none;" class="right span12 wow fadeInLeft" onClick="newPopup('ontopDiv', 'carbonProducts', 'carbonProduct', id)">
                        <div class="span6">
                           Activated Carbon Products
                        </div>
                        <div class="span6 center">
                            <img src="images/act_carbon.png">
                        </div>
                    </li>

                    <!--
                    <li alt="6" id="image10" style="visibility: hidden; animation-name: none;" class="right span12 wow fadeInLeft" onClick="newPopup('ontopDiv', 'cinomonItems', 'cinomonItem', id)">
                        <div class="span6">
                           Cinnomon Products
                        </div>
                        <div class="span6 center">
                            <img src="images/cinnomon.png">
                        </div>
                    </li>
                     <li alt="6" id="image11" style="visibility: hidden; animation-name: none;" class="right span12 wow fadeInLeft" onClick="newPopup('ontopDiv', 'Tea', 'teaItem', id)">
                        <div class="span6">
                           Tea
                        </div>
                        <div class="span6 center">
                            <img src="images/tea.png">
                        </div>
                    </li>
                           <li alt="6" id="image12" style="visibility: hidden; animation-name: none;" class="right span12 wow fadeInLeft" onClick="newPopup('ontopDiv', 'VirginCoconutOil', 'VirginCoconutOilItem', id)">
                        <div class="span6">
                           Virgin Coconut Oil
                        </div>
                        <div class="span6 center">
                            <img src="images/coconuit_oil.png">
                        </div>
                    </li>
                      <li alt="6" id="image13" style="visibility: hidden; animation-name: none;" class="right span12 wow fadeInLeft" onClick="newPopup('ontopDiv', 'Cocopeat', 'CocopeatItem', id)">
                        <div class="span6">
                           Coco Peat
                        </div>
                        <div class="span6 center">
                            <img src="images/Cocopeat.png">
                        </div>
                    </li>
                      <li alt="6" id="image14" style="visibility: hidden; animation-name: none;" class="right span12 wow fadeInLeft" onClick="newPopup('ontopDiv', ' CoirProducts', ' CoirProductsItem', id)">
                        <div class="span6">
                           Coir Products
                        </div>
                        <div class="span6 center">
                            <img src="images/CoirProducts.png">
                        </div>
                    </li>
                -->
                    </div>
                </div>







           
            </div>
        </div>
    </section>


 </div> 

<link href="css/pricing.css" rel="stylesheet">

        </div>
              
   
        
<footer id="footer" class="margintop20">
    <div class="container">
        <div class="row">
            <div class="span12">
               
            
                <ul class="unstyled">
                    

                    <li> <a href="https://www.jedara.com/Contact">Contact Us</a> </li>
            
                </ul>

            </div>
            
       
        
            


        </div>
    </div>

</footer>


    
    
    

    <script src="other/basic"></script>



</body></html>