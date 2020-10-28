
 @extends('layouts.master')
 @section('content')
    
    <div id="templatemo_content">
        <div id="templatemo_content_left">
        	<div class="templatemo_content_left_section">
            	<h1>Categories</h1>
                <ul>
                    <li><a href="subpage.php">Novel</a></li>
                    <li><a href="subpage.php">Komik</a></li>
                    <li><a href="#">Ensiklopedi</a></li>
                    <li><a href="#">Antologi</a></li>
                    <li><a href="#">Buku Best Seller</a></li>
                    <li><a href="#">Dongeng</a></li>
                    
            	</ul>
            </div>
			<div class="templatemo_content_left_section">
            	<h1>Bestsellers</h1>
                <ul>
                   <li><a href="asyastory.php">ASYA STORY</a></li>
                    <li><a href="alaska.php">ALASKA</a></li>
                    <li><a href="septihan.php">SEPTIHAN</a></li>
                    <li><a href="telukalaska.php">TELUK ALASKA</a></li>
                    <li><a href="#">GALAKSI</a></li>
                    <li><a href="#">SEBUAH SENI BERSIKAP BODO AMAT</a></li>
                    <li><a href="#">SENI HIDUP MINIMALIS</a></li>
                    <li><a href="#">BICARA ADA ITU SENINYA</a></li>
                  
            	</ul>
            </div>
            
            <div class="templatemo_content_left_section">                
                <a href="http://validator.w3.org/check?uri=referer"><img style="border:0;width:88px;height:31px" src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" width="88" height="31" vspace="8" border="0" /></a>
            <a href="http://jigsaw.w3.org/css-validator/check/referer"><img style="border:0;width:88px;height:31px"  src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="Valid CSS!" vspace="8" border="0" /></a>
			</div>
        </div> 
        <!-- end of content left -->
        
        <div id="templatemo_content_right">
        	<div class="templatemo_product_box">
            	<h1>Novel Wattpad  <span>(by Best Author)</span></h1>
   	      <img src="images/templatemo_image_01.jpg" alt="image" />
                <div class="product_info">
                	
                    <p><h2>ASYA STORY</h2></p>
                  <h3>Rp 55.000</h3>
                    <div class="buy_now_button"><a href="subpage.php">Buy Now</a></div>
                    <div class="detail_button"><a href="asyastory.php">Detail</a></div>
                </div>
                <div class="cleaner">&nbsp;</div>
            </div>
            
            <div class="cleaner_with_width">&nbsp;</div>
            
            <div class="templatemo_product_box">
            	<h1>Novel Wattpad <span>(by Best Author)</span></h1>
       	    <img src="images/templatemo_image_02.jpg" alt="image" />
                <div class="product_info">
                	<p><h2>TELUK ALASKA</h2></p>
                    <h3>Rp 55.000</h3>
                    <div class="buy_now_button"><a href="subpage.php">Buy Now</a></div>
                    <div class="detail_button"><a href="telukalaska.php">Detail</a></div>
                </div>
                <div class="cleaner">&nbsp;</div>
            </div>
            
            <div class="cleaner_with_height">&nbsp;</div>
            
            <div class="templatemo_product_box">
            	<h1>Novel Wattpad  <span>(by Best Author)</span></h1>
   	      <img src="images/templatemo_image_03.jpg" alt="image" />
                <div class="product_info">
                	<p><h2>SEPTIHAN</h2></p>
                    <h3>Rp 65.000</h3>
                    <div class="buy_now_button"><a href="subpage.php">Buy Now</a></div>
                    <div class="detail_button"><a href="septihan.php">Detail</a></div>
                </div>
                <div class="cleaner">&nbsp;</div>
            </div>
            
            <div class="cleaner_with_width">&nbsp;</div>
            
            <div class="templatemo_product_box">
            	<h1>Buku Dongeng <span>(by Best Author)</span></h1>
            	<img src="images/templatemo_image_12.jpg" alt="image" />
                <div class="product_info">
                	<p><h2>LEGENDA DANAU TOBA</h2></p>
                    <h3>Rp 50.000</h3>
                    <div class="buy_now_button"><a href="subpage.php">Buy Now</a></div>
                    <div class="detail_button"><a href="subpage.php">Detail</a></div>
                </div>
                <div class="cleaner">&nbsp;</div>
            </div>
            
            <div class="cleaner_with_height">&nbsp;</div>

             <div id="templatemo_content_right">
             <div class="templatemo_product_box">
                <h1>Buku Best Seller   <span>(by Best Author)</span></h1>
                <img src="images/templatemo_image_05.jpg" alt="image" />
                <div class="product_info">
                    <p><h2>SEBUAH SENI UNTUK BERSIKAP BODO AMAT</h2></p>
                    <h3>Rp 75.000</h3>
                    <div class="buy_now_button"><a href="subpage.php">Buy Now</a></div>
                    <div class="detail_button"><a href="subpage.php">Detail</a></div>
                </div>
                <div class="cleaner">&nbsp;</div>
            </div>
            
            <div class="cleaner_with_height">&nbsp;</div>

              
            <a href="subpage.blade.php"><img src="images/templatemo_ads.png" alt="ads" /></a>
        </div> <!-- end of content right -->
    
    	<div class="cleaner_with_height">&nbsp;</div>
    </div> <!-- end of content -->

    @endsection