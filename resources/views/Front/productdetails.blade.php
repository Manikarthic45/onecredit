@extends('Common.Frontheader')
@section('content')
<div class="page-banner section" style="height:30px;">
        <div class="container" style="height:100px;">
            <div class="page-banner-wrapper text-center">
                <h2 class="title"></h2>
               
            </div>
        </div>
    </div>
    <div class="section section-padding-02 mt-n10">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <!-- Product Details Content Start -->
                    <div class="product-details-wrapper">
                        <div class="row gx-md-12 align-items-xl-top">
                             
                           <div class="col-md-2" style="display:none;"> 
                                <!-- Others Product Details Images Start -->
                                <div class="thumb-scroll"> 
                                    <div class="swiper-container gallery-thumbs swiper-container-vertical">
                                        @foreach ($primglist as $list)
                                            <div class="swiper-slide" style="width: 100px; margin-bottom: 20px;">
                                                <img src="upload/{{$list->imgname}}" alt="">
                                            </div>
                                            @endforeach
                                    </div>
                                </div>
                                <!-- Others Product Details Images End -->
                            </div>
                            
                            <div class="col-md-5">
                                <!-- Product Details Images Start -->
                               <div class="product-details-images slider-section slider-active">
                                    <div class="swiper-container gallery-top">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="{{$prdimg}}" alt="">
                                            </div>
                                            @foreach ($primglist as $list)
                                            <div class="swiper-slide">
                                                <img src="upload/{{$list->imgname}}" alt="">
                                            </div>
                                            @endforeach

                                        </div>
                                        <div class="swiper-button-next"><span class="material-icons">trending_flat</span></div>
                                        <div class="swiper-button-prev"><span class="material-icons">trending_flat</span></div>
                                    </div>
                                    
                                    <!--
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>-->
                                    
                                </div>
                                <!-- Product Details Images End -->

                            </div>
                            <div class="col-md-7">
                                <!-- Product Details Content Start -->
                                <div class="product-details-content">
                                    <div class="product-category">
                                        <a href="#">{{$cat}}</a>
                                    </div>
                                    <h4 class="product-title">{{$prdname}}</h4>
                                   <!-- <div class="product-info">
                                    <a href="productdetails?itemid={{$itemid}}"><button type="button" class="btn btn-success">Clear Selected Options</button></a>
                                    </div> -->
                                    <div class="product-price-rating">
                                        <div class="product-price">
                                            <span class="old-price">₹ {{$actprice}}</span>
                                            <span class="sale-price">₹ {{$prdamt}}</span>
                                            <span class="product-price" id="newamt" style="display: none;"></span>
                        <div id="xx"><span class="product-price"></span></div>
                                        </div>
                                      
                                    </div>
                                    <div class="product-info">
                                       
                                       <!-- Large modal start --> 
                                @if($catcode =='Men')
                                 <!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg" style="margin-top: 40px;">Mens Size Chart</button>-->
                                 <div class="size-chart-icon" data-toggle="modal" data-target=".bd-example-modal-lg"><img src="assets/assets/images/size_chart_icon.png" alt="" width="23"> Men's Size Chart</div>


                                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                          <div class="modal-content">
                                            <div class="modal-header">


                                                <h5 class="modal-title" id="exampleModalLabel">Mens Size Chart</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                                                              
                                                <h6 class="modal-title" id="exampleModalLabel">KURTA</h6>
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th class="product-image">YOUR SIZE</th>
                                                            <th class="product-name"></th>
                                                            <th class="product-quantity"></th>
                                                            <th class="product-price"></th>
                                                            <th class="product-add-cart"></th>
                                                            <th class="product-action"></th>
                                                            <th class="product-action"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>36/S</td>
                                                            <td>44</td>
                                                            <td>40</td>
                                                            <td>38</td>
                                                            <td>40</td>
                                                            <td>18</td>
                                                            <td>25</td>
                                                            
                                                        </tr>
                                                       
                                                        <tr>
                                                            <td>38/M</td>
                                                            <td>45</td>
                                                            <td>42</td>
                                                            <td>40</td>
                                                            <td>42</td>
                                                            <td>18.5</td>
                                                            <td>25.5</td>
                                                            
                                                        </tr>

                                                        <tr>
                                                            <td>40/L</td>
                                                            <td>45</td>
                                                            <td>44</td>
                                                            <td>42</td>
                                                            <td>44</td>
                                                            <td>19</td>
                                                            <td>26</td>
                                                            
                                                        </tr>

                                                        <tr>
                                                            <td>42/XL</td>
                                                            <td>47</td>
                                                            <td>48</td>
                                                            <td>44</td>
                                                            <td>48</td>
                                                            <td>19.5</td>
                                                            <td>26</td>
                                                            
                                                        </tr>

                                                        <tr>
                                                            <td>44/2XL</td>
                                                            <td>47</td>
                                                            <td>50</td>
                                                            <td>48</td>
                                                            <td>50</td>
                                                            <td>20</td>
                                                            <td>26.5</td>
                                                            
                                                        </tr>

                                                        <tr>
                                                            <td>46/3XL</td>
                                                            <td>47</td>
                                                            <td>52</td>
                                                            <td>50</td>
                                                            <td>52</td>
                                                            <td>20.5</td>
                                                            <td>27</td>
                                                            
                                                        </tr>

                                                        <tr>
                                                            <td>48/4XL</td>
                                                            <td>47</td>
                                                            <td>54</td>
                                                            <td>52</td>
                                                            <td>54</td>
                                                            <td>21</td>
                                                            <td>27.5</td>
                                                            
                                                        </tr>
                                                        
                                                    </tbody>
                                                </table>

                                                <h6 class="modal-title" id="exampleModalLabel">SHERWANI</h6>
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th class="product-image">YOUR SIZE</th>
                                                            <th class="product-name">LENGTH</th>
                                                            <th class="product-quantity">CHEST</th>
                                                            <th class="product-price">STOMACH</th>
                                                            <th class="product-add-cart">HIP</th>
                                                            <th class="product-action">SHOULDER</th>
                                                            <th class="product-action">NECK</th>
                                                            <th class="product-action">LENGTH SLEEVE</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>36/S</td>
                                                            <td>46</td>
                                                            <td>40.5</td>
                                                            <td>36.5</td>
                                                            <td>41.5</td>
                                                            <td>17.5</td>
                                                            <td>16.5</td>
                                                            <td>24.5</td>
                                                        </tr>
                                                       
                                                        <tr>
                                                            <td>38/M</td>
                                                            <td>46</td>
                                                            <td>42.5</td>
                                                            <td>38.5</td>
                                                            <td>43.5</td>
                                                            <td>18</td>
                                                            <td>17</td>
                                                            <td>25</td>
                                                        </tr>

                                                        <tr>
                                                            <td>40/L</td>
                                                            <td>46</td>
                                                            <td>44.5</td>
                                                            <td>41.5</td>
                                                            <td>45.5</td>
                                                            <td>18.75</td>
                                                            <td>17.5</td>
                                                            <td>25.5</td>
                                                        </tr>

                                                        <tr>
                                                            <td>42/XL</td>
                                                            <td>47</td>
                                                            <td>46.5</td>
                                                            <td>43.5</td>
                                                            <td>47.5</td>
                                                            <td>19.5</td>
                                                            <td>18</td>
                                                            <td>26</td>
                                                        </tr>

                                                        <tr>
                                                            <td>44/2XL</td>
                                                            <td>47</td>
                                                            <td>48.5</td>
                                                            <td>46</td>
                                                            <td>48.5</td>
                                                            <td>20.25</td>
                                                            <td>18.5</td>
                                                            <td>26.5</td>
                                                        </tr>

                                                        <tr>
                                                            <td>46/3XL</td>
                                                            <td>47</td>
                                                            <td>50.5</td>
                                                            <td>48</td>
                                                            <td>50.5</td>
                                                            <td>21</td>
                                                            <td>19</td>
                                                            <td>27</td>
                                                        </tr>

                                                        <tr>
                                                            <td>48/4XL</td>
                                                            <td>48</td>
                                                            <td>52.5</td>
                                                            <td>50</td>
                                                            <td>52.5</td>
                                                            <td>21.5</td>
                                                            <td>19.5</td>
                                                            <td>27.5</td>
                                                        </tr>
                                                        
                                                    </tbody>
                                                </table>


                                                <h6 class="modal-title" id="exampleModalLabel">WAISTCOAT / NEHRU JACKET</h6>
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th class="product-image">YOUR SIZE</th>
                                                            <th class="product-name">LENGTH</th>
                                                            <th class="product-quantity">CHEST</th>
                                                            <th class="product-price">STOMACH</th>
                                                            <th class="product-add-cart">HIP</th>
                                                            <th class="product-action">SHOULDER</th>
                                                            <th class="product-action">NECK</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>36/S</td>
                                                            <td>28</td>
                                                            <td>39.5</td>
                                                            <td>36</td>
                                                            <td>39</td>
                                                            <td>15.5</td>
                                                            <td>16.5</td>
                                                            
                                                        </tr>
                                                       
                                                        <tr>
                                                            <td>38/M</td>
                                                            <td>28</td>
                                                            <td>41.5</td>
                                                            <td>38</td>
                                                            <td>41</td>
                                                            <td>16</td>
                                                            <td>17</td>
                                                            
                                                        </tr>

                                                        <tr>
                                                            <td>40/L</td>
                                                            <td>28</td>
                                                            <td>43.5</td>
                                                            <td>40</td>
                                                            <td>43</td>
                                                            <td>16.5</td>
                                                            <td>17.5</td>
                                                           
                                                        </tr>

                                                        <tr>
                                                            <td>42/XL</td>
                                                            <td>29</td>
                                                            <td>45.5</td>
                                                            <td>43</td>
                                                            <td>45</td>
                                                            <td>17</td>
                                                            <td>18</td>
                                                            
                                                        </tr>

                                                        <tr>
                                                            <td>44/2XL</td>
                                                            <td>29</td>
                                                            <td>47.5</td>
                                                            <td>45</td>
                                                            <td>47</td>
                                                            <td>17.5</td>
                                                            <td>18.5</td>
                                                            
                                                        </tr>

                                                        <tr>
                                                            <td>46/3XL</td>
                                                            <td>30</td>
                                                            <td>49.5</td>
                                                            <td>47</td>
                                                            <td>49</td>
                                                            <td>18</td>
                                                            <td>19</td>
                                                           
                                                        </tr>

                                                        <tr>
                                                            <td>48/4XL</td>
                                                            <td>30</td>
                                                            <td>51.5</td>
                                                            <td>49</td>
                                                            <td>51</td>
                                                            <td>18.5</td>
                                                            <td>19.5</td>
                                                           
                                                        </tr>
                                                        
                                                    </tbody>
                                                </table>

                                          </div>


                                        </div>
                                      </div>
                                    </div>

                                @elseif($catcode =='Women')    
                                    <!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg-1" style="margin-top: 40px;">Womens Size Chart</button>-->
                                 <div class="size-chart-icon" data-toggle="modal" data-target=".bd-example-modal-lg-1" ><img src="assets/assets/images/size_chart_icon.png" alt="" width="23"> Women's Size Chart</div>

                                    <div class="modal fade bd-example-modal-lg-1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                          <div class="modal-content">
                                            <div class="modal-header">


                                                <h5 class="modal-title" id="exampleModalLabel">Womens Size Chart</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <h6 class="modal-title" id="exampleModalLabel">WOMENS GARMENTS SIZE CHART FOR DRESSES</h6>
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th class="product-image">SIZES</th>
                                                            <th class="product-name">XS</th>
                                                            <th class="product-quantity">S</th>
                                                            <th class="product-price">M</th>
                                                            <th class="product-add-cart">L</th>
                                                            <th class="product-action">XL</th>
                                                            <th class="product-action">XXL</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><b>CHEST</b></td>
                                                            <td>36</td>
                                                            <td>38</td>
                                                            <td>40</td>
                                                            <td>42</td>
                                                            <td>44</td>
                                                            <td>47</td>
                                                            
                                                        </tr>
                                                       
                                                        <tr>
                                                            <td><b>WAIST</b></td>
                                                            <td>31</td>
                                                            <td>33</td>
                                                            <td>35</td>
                                                            <td>37</td>
                                                            <td>39</td>
                                                            <td>40</td>
                                                            
                                                        </tr>

                                                        <tr>
                                                            <td><b>HIPS</b></td>
                                                            <td>37</td>
                                                            <td>39</td>
                                                            <td>42</td>
                                                            <td>44</td>
                                                            <td>46</td>
                                                            <td>49</td>
                                                            
                                                        </tr>

                                                        <tr>
                                                            <td><b>SHOULDER</b></td>
                                                            <td>15</td>
                                                            <td>15.5</td>
                                                            <td>16</td>
                                                            <td>16.5</td>
                                                            <td>17</td>
                                                            <td>18</td>
                                                            
                                                        </tr>

                                                        <tr>
                                                            <td colspan="7"><b>SLEEVES AND LENGTH OF THE DRESS WILL DIFFER ACCORDING TO THE STYLE.</b></td>
                                                            
                                                            
                                                        </tr>

                                                        
                                                    </tbody>
                                                </table>


                                                <h6 class="modal-title" id="exampleModalLabel">WOMENS BOTTOM SIZE CHART FOR PANTS / SHORTS / SKIRTS</h6>
                                                <table class="table">
                                                    
                                                    <tbody>
                                                        <tr>
                                                            <td><b>SIZES</b></td>
                                                            <td>0</td>
                                                            <td>2</td>
                                                            <td>4</td>
                                                            <td>6</td>
                                                            <td>8</td>
                                                            <td>10</td>
                                                            <td>12</td>
                                                            <td>14</td>
                                                            <td>16</td>
                                                        </tr>
                                                       
                                                        <tr>
                                                            <td><b>WAIST</b></td>
                                                            <td>24</td>
                                                            <td>25</td>
                                                            <td>27</td>
                                                            <td>28</td>
                                                            <td>29</td>
                                                            <td>30</td>
                                                            <td>32</td>
                                                            <td>34</td>
                                                            <td>36</td>
                                                            
                                                        </tr>

                                                        <tr>
                                                            <td><b>HIP</b></td>
                                                            <td>34</td>
                                                            <td>35</td>
                                                            <td>36</td>
                                                            <td>37</td>
                                                            <td>38</td>
                                                            <td>39</td>
                                                            <td>40</td>
                                                            <td>42</td>
                                                            <td>44</td>
                                                            
                                                        </tr>

                                                        <tr>
                                                            <td><b>THIGH ROUND</b></td>
                                                            <td>19</td>
                                                            <td>20</td>
                                                            <td>21</td>
                                                            <td>22</td>
                                                            <td>23</td>
                                                            <td>24</td>
                                                            <td>25</td>
                                                            <td>25</td>
                                                            <td>26</td>
                                                            
                                                        </tr>

                                                        <tr>
                                                            <td><b>KNEE ROUND</b></td>
                                                            <td>14</td>
                                                            <td>14</td>
                                                            <td>15</td>
                                                            <td>15</td>
                                                            <td>16</td>
                                                            <td>16</td>
                                                            <td>16</td>
                                                            <td>17</td>
                                                            <td>17.5</td>
                                                            
                                                        </tr>

                                                        <tr>
                                                            <td><b>CALF ROUND</b></td>
                                                            <td>13</td>
                                                            <td>13</td>
                                                            <td>14</td>
                                                            <td>14</td>
                                                            <td>15</td>
                                                            <td>15</td>
                                                            <td>15</td>
                                                            <td>16</td>
                                                            <td>16.5</td>
                                                            
                                                        </tr>

                                                        <tr>
                                                            <td><b>ANKLE ROUND</b></td>
                                                            <td>8</td>
                                                            <td>8</td>
                                                            <td>9</td>
                                                            <td>9</td>
                                                            <td>9</td>
                                                            <td>10</td>
                                                            <td>10</td>
                                                            <td>10</td>
                                                            <td>10</td>
                                                            
                                                        </tr>

                                                        <tr>
                                                            <td><b>INSEAM</b></td>
                                                            <td>29</td>
                                                            <td>29</td>
                                                            <td>29</td>
                                                            <td>29</td>
                                                            <td>30</td>
                                                            <td>30</td>
                                                            <td>30</td>
                                                            <td>30</td>
                                                            <td>31</td>
                                                            
                                                        </tr>

                                                        <tr>
                                                            <td colspan="10"><b>For the size of the Skirts and Shorts only Waist and Hips will be considered from the size chart.</b></td>
                                                            
                                                            
                                                        </tr>

                                                        
                                                    </tbody>
                                                </table>


                                                <h6 class="modal-title" id="exampleModalLabel">CHUDIDAR</h6>
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th class="product-image">YOUR SIZE</th>
                                                            <th class="product-name">LENGTH</th>
                                                            <th class="product-quantity">HIP</th>
                                                            <th class="product-price">THIGH</th>
                                                            <th class="product-add-cart">CROTCH</th>
                                                            <th class="product-action">BOTTOM</th>
                                                           
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>36/S</td>
                                                            <td>51</td>
                                                            <td>49</td>
                                                            <td>23</td>
                                                            <td>14.5</td>
                                                            <td>12.5</td>
                                                                                                                       
                                                        </tr>
                                                       
                                                        <tr>
                                                            <td>38/M</td>
                                                            <td>51</td>
                                                            <td>51</td>
                                                            <td>24</td>
                                                            <td>15</td>
                                                            <td>13</td>
                                                                                                                        
                                                        </tr>

                                                        <tr>
                                                            <td>40/L</td>
                                                            <td>51</td>
                                                            <td>53</td>
                                                            <td>25</td>
                                                            <td>15.5</td>
                                                            <td>13.5</td>
                                                                                                                     
                                                        </tr>

                                                        <tr>
                                                            <td>42/XL</td>
                                                            <td>51</td>
                                                            <td>55</td>
                                                            <td>26</td>
                                                            <td>16</td>
                                                            <td>14</td>
                                                                                                                        
                                                        </tr>

                                                        <tr>
                                                            <td>44/2XL</td>
                                                            <td>51</td>
                                                            <td>57</td>
                                                            <td>27</td>
                                                            <td>16.5</td>
                                                            <td>14</td>
                                                                                                                      
                                                        </tr>

                                                        <tr>
                                                            <td>46/3XL</td>
                                                            <td>51</td>
                                                            <td>59</td>
                                                            <td>28</td>
                                                            <td>17</td>
                                                            <td>14</td>
                                                                                                                     
                                                        </tr>

                                                        <tr>
                                                            <td>48/4XL</td>
                                                            <td>51</td>
                                                            <td>61</td>
                                                            <td>29</td>
                                                            <td>17.5</td>
                                                            <td>14.5</td>
                                                                                                                     
                                                        </tr>
                                                        
                                                    </tbody>
                                                </table>


                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                @endif
                                    <!-- Large modal end -->
                                        @if($chkcolor>0)
                                        <div class="single-info">
                                           <span class="label">
                                                Color:</span>
                                            
                                            <div class="widget-color">
                                                <ul class="color-list">
                                                    @foreach ($colorlist as $list)
                                                    <li  data-tooltip="tooltip" data-placement="top" class="new-color" id="{{$list->size}}" data-color="{{$list->size}}"></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                        @else
                                        <div class="single-info" style="display:none;">
                                           <span class="label">
                                                Color Test:</span>
                                            
                                            <div class="widget-color">
                                                <ul class="color-list">
                                                    <li data-tooltip="tooltip" data-placement="top" class="new-color active" id="nocolor1" data-color="nocolor1" aria-label="nocolor1" data-bs-original-title="nocolor1" style="background-color: black;" ></li>
                                                    <li data-tooltip="tooltip" data-placement="top" class="new-color" id="nocolor2" data-color="nocolor2" aria-label="nocolor2" data-bs-original-title="nocolor2" style="background-color: white;" ></li>
                                                </ul>
                                            </div>
                                        </div>
                                        @endif

                                        @if($chksize>0)
                                        <div class="single-info">
                                            <span class="label">Size:</span>
                                            <ul class="size">
                                                @foreach ($sizelist  as $list)
                                                <li class="new-size" id="{{$list->size}}">{{$list->size}}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        @else
                                        <div class="single-info" style="display:none;">
                                            <span class="label">Size Test:</span>
                                            <ul class="size">
                                                <li class="new-size active" id="nosize1">nosize1</li>
                                                <li class="new-size" id="nosize2">nosize2</li>
                                            </ul>
                                        </div>
                                        @endif
                                      
                                        <div class="single-info">
                                            <span class="label">Quantity:</span>
                                            <div class="product-quantity d-inline-flex">
                                                <button type="button" class="sub">-</button>
                                                <input type="text" id="qtyid" value="1" />
                                                <button type="button" class="add">+</button>
                                            </div>
                                        </div>
                                        
                                        <div>
                                            <p>{{$short}}</p>
                                        </div>
                                        
                                        <div class="single-info">
                                            <span class="label">Description:</span>
                                        </div>
                                        <div class="long-desc">
                                            <p>{!! $long !!}</p>
                                        </div>
                                        
                                        
                                        <div class="single-info">
                                            <span class="label">Fabric:</span>
                                            <span class="value">{{$fabric}}</span>
                                        </div>
                                        
                                      <button class="accordion">More Information</button>
                                        <div class="panel">
                                            <p>If you love something on our website, make it yours while you can. All the clothes are made with love and care. Once your favourites get sold out, it may not be possible to restock them or ensure their availability later on!</p>
                                            <div>&nbsp;</div>
                                            <div class="label"><strong>Garment Care:</strong></div> 
                                            <ul class="more-info-ul">
                                                <li>We recommend to hand wash in cold water or dry clean only.</li>
                                                <li>Do not soak and scrub the product and dry it in shade.</li>
                                                <li>Do not iron on embellishments.</li>
                                                <li>If it is a naturally dyed, It might bleed during the first few washes. Don't get scared.</li>
                                            </ul>
                                        </div>
                                        
                                        @if($stock <= 5 && $stock > 0)
                                        <div class="single-info stock-info">
                                            <span class="value"><i>Only {{$stock}} items in stock!</i></span>
                                        </div>
                                        @endif
                                        
                                        @if($stock == 0)
                                        <div class="notify-me">
                                            <span><center><strong>OUT OF STOCK</strong></center></span>
                                            <span><center>We will notify you when this product becomes available.</center></span>
                                            <span>&nbsp;</span>
                                            <div class="notifyme-form">
                                                <form>
                                                    <input type="text" name="email_id" id="email_id" placeholder="Enter your email here...">
                                                    <button type="button" data-toggle="modal" onclick="addnotifyme();">Send <span class="material-icons">arrow_right_alt</span></button>
                                                </form>
                                            </div>
                
                                             <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                                                      <button type="button" class="close" onclick="close10();" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                      </button>
                                                    </div>
                                                    <div class="modal-body">
                                                    <h4>Thank you!</h4> 
                                                      <p>We will notify you when the item will be back in stock.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                      
                                                      <button type="button" class="btn btn-primary" onclick="close10();">No Thanks</button>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                        </div>
                                        @endif
                                    </div>
                                    
                                                                 
                                    <div class="product-cart-favourate">

                                        <div class="product-cart">
                                            @if(session()->get('userid')!="") <a href="cart" class="btn btn-info btn-hover-info" style="background-color:#0062cc;" onclick="addcart();"><font color="white">Add to cart</font></a>@else
                                            <a href="#" class="btn btn-info btn-hover-info" style="background-color:#0062cc;" onclick="addcartwithlogout();" ><font color="white">Add to cart</font></a>@endif
                                        </div>
                                        <div class="product-cart">
                                            @if(session()->get('userid')!="") <a href="cart"class="btn btn-info btn-hover-info" style="background-color:#0062cc;" onclick="addcart();"><font color="white">Buy it now</font></a>@else
                                            <a href="logoutcart" class="btn btn-info btn-hover-info" style="background-color:#0062cc;"  onclick="addcartwithlogout();" ><font color="white">Buy it now</font></a>@endif
                                        </div>
                                        <div class="product-favourate">
                                           
                                            @if(session()->get('userid')!="") <a class="btn" onclick="addwishlist();" style="font-size:25px;" ><font color="#FF007F"><i class="fa fa-heart"></i></font></a>@else
                                            <a href="login" class="btn" style="font-size:25px;"><font color="#FF007F"><i class="fa fa-heart"></i></font></a>@endif
                                        </div>
                                        <div class="product-cart">
                                        @if(session()->get('userid')!="") <a href="cart" class="btn" style="font-size:25px;" ><font color="green"><i class="fa fa-shopping-cart" onclick="addcart();"></i></font></a>@else
                                            <a href="#" class="btn" style="font-size:25px;"><font color="green"><i class="fa fa-shopping-cart" onclick="addcartwithlogout();"></i></font></a>@endif
                                        </div>  
                                    </div> 
                                              
                                    <div class="exchange-cod-customer-info-wrapper">
                                        <img src="assets/assets/images/exchange-cod-customer-icon.png" alt="" width="350" style="opacity: 0.7;">
                                    </div>
                                              
                                       <div class="social-sharing">

                                            
                                            <?php $url_whatsapp = URL::full(); ?>
                                            <!-- Facebook share button code -->
                                            <span><div id="fb-root"></div>
                                                <script>
                                                    (function (d, s, id) {
                                                        var js, fjs = d.getElementsByTagName(s)[0];
                                                        if (d.getElementById(id)) return;
                                                        js = d.createElement(s); js.id = id;
                                                        js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
                                                        fjs.parentNode.insertBefore(js, fjs);
                                                    }(document, 'script', 'facebook-jssdk'));
                                                </script>

                                                <!-- Whatsapp share button code -->
                                            <span class="social-sharing__title" aria-hidden="true" style="position: relative; top: 3px;"><a href="https://wa.me/?text={{$url_whatsapp}}" onclick="window.open(this.href, 'targetWindow', 'toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=600,height=600');return false;" style="color: #29a71a !important; cursor: pointer; text-decoration: none; font-size: 11px; font-family: Helvetica, Arial, sans-serif;"><img class="_3vtw img" src="assets/assets/images/whatsapp-icon.png" alt="" width="20" height="20">
                                              Share</a></span>
                                              <!-- Facebook share button code -->
                                                <div class="fb-share-button"
                                                     data-href="{{$url_whatsapp}}">
                                                </div>
                                            </div></span>
                                    </div>
                                </div>
                                <!-- Product Details Content End -->
                            </div>
                        </div>
                    </div>
                    <!-- Product Details Content End -->
                </div>
            </div>

            <!-- Product Details Tabs Start -->
            <!--
            <div class="product-details-tabs section-padding">
                <ul class="nav nav-justified">
                    <li class="nav-item"><a class="active" data-bs-toggle="tab" href="#description">Description</a></li>
                    
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="description">
                        <div class="product-description">
                            <p>{!!$long!!}</p>
                        </div>
                    </div>
                   
                </div>
            </div> -->
            <!-- Product Details Tabs End -->
            <div class="related-products section-padding mt-n2">
                <div class="section-title">
                    <h2 class="title">Related Products</h2>
                </div>
                <div class="product-active">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">

                        @foreach ($productlist  as $list)
                            <div class="swiper-slide">
                                <!-- Single-Product Start -->
                                <div class="single-product">
                                    <div class="product-image">
                                        <a href="productdetails?itemid={{$list->id}}">
                                            <img src="{{$list->itemname}}" style="width: 300px; height: 300px;"  alt="product">
                                        </a>
                                       
                                        
                                    </div>
                                    <div class="product-content">
                                        <div class="product-category-action">
                                            <div class="product-category">
                                                <a href="productdetails?itemid={{$list->id}}">{{$list->subcatname}}</a>
                                            </div>
                                            <div class="product-action">
                                                <a href="productdetails?itemid={{$list->id}}" class="action" data-tooltip="tooltip" data-placement="top" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                                                <a href="productdetails?itemid={{$list->id}}" class="action" data-tooltip="tooltip" data-placement="top" title="Wish"><i class="fa fa-heart-o"></i></a>
                                            </div>
                                        </div>
                                        <h4 class="product-title"><a href="productdetails?itemid={{$list->id}}">{{$list->plantname}}</a></h4>
                                        <div class="product-price">
                                            <span class="old-price">₹ {{$list->actprice}}</span>
                                            <span class="sale-price">₹ {{$list->offerprice}}</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single-Product End -->
                            </div>
                            @endforeach


                           
                           
                           
                           
                        </div>
                    </div>
                </div>
            </div>
</div>
</div>
            
    <div id="myModald" class="modal fade" tabindex="-2">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Success : Cart</h5>

                </div>
                <div class="modal-body">
                    <p>Successfully saved your cart!</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="close10();" data-dismiss="modal" id="btn1">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div id="myModalwishd" class="modal fade" tabindex="-2">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Success : Wishlist</h5>

                </div>
                <div class="modal-body">
                    <p>Successfully saved your wishlist!</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="close10();" data-dismiss="modal" id="btn2">Close</button>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" value="{{$itemid}}" id="itemid">
    <input type="hidden" value="" id="newsize">
    <input type="hidden" value="" id="newcolor">
    <style>
        .consult_box12 {
            background-color: #ededed;
            border-radius: 30px;
            padding: 0 0 3em 2em;
            /* height: 16vw; */
        }
    </style>
    <script>
        setTimeout(function(){
            $('#myModal').modal('hide')
        }, 4000);
        setTimeout(function(){
            $('#myModalwish').modal('hide')
        }, 4000);
        function close10() {
            $('#myModald').modal('hide');$('#myModalwishd').modal('hide');$('#exampleModalCenter').modal('hide');
        }

        function changesize(size)
        {
            document.getElementById("newsize").value=size;
            var itemid=document.getElementById("itemid").value;
            var size=document.getElementById("newsize").value;
            $.ajax({
                type: 'post',
                url: '{{url('/getamt')}}',
                data: {
                    itemid     : itemid, size     : size,
                    '_token': '{{csrf_token()}}'
                },
                success: function (data) {//alert(data);
                    document.getElementById("amt").style.display = 'none';
                    document.getElementById("newamt").style.display='block';
                    $('#xx').html(data);
                }
            });
        }
        function changecolor(color)
        {
            // alert(size);
            document.getElementById("newcolor").value=color;

        }
        function addcart()
        {
            var qty = document.getElementById("qtyid").value;
            var itemid = document.getElementById("itemid").value;
            var size = document.getElementsByClassName("new-size active")[0].id;
            var color = document.getElementsByClassName("new-color active")[0].id;

            // <?php if($size){ ?>
            // <?php } else { ?>
            //     var size = "0";
            // <?php } ?>

            // <?php if($chkcolor>0){ ?>
            // <?php } else { ?>
            //     var color = "None";
            // <?php } ?>


            console.log(size);
            console.log(color);

            $.ajax({
                type: 'post',
                url: '{{url('/addcart')}}',
                data: {
                    itemid     : itemid,size     : size,color     : color,qty     : qty,
                    '_token': '{{csrf_token()}}'
                },
                success: function (data) {//alert(data);
                     if(data!=""){
                    $('#myModald').modal('show');}
                }
            });
        }

        function addcartwithlogout()
        {
            var qty = document.getElementById("qtyid").value;
            var itemid = document.getElementById("itemid").value;
            var size = document.getElementsByClassName("new-size active")[0].id;
            var color = document.getElementsByClassName("new-color active")[0].id;

            // <?php if($size){ ?>
            // <?php } else { ?>
            //     var size = "0";
            // <?php } ?>

            // <?php if($chkcolor>0){ ?>
            // <?php } else { ?>
            //     var color = "None";
            // <?php } ?>


            console.log(size);
            console.log(color);

            $.ajax({
                type: 'post',
                url: '{{url('/addcartwithlogout')}}',
                data: {
                    itemid     : itemid,size     : size,color     : color,qty     : qty,
                    '_token': '{{csrf_token()}}'
                },
                success: function (data) {//alert(data);
                     if(data!=""){
                    $('#myModald').modal('show');}
                }
            });
        }


        
        function addwishlist()
        {
            var qty=document.getElementById("qtyid").value;
            var itemid=document.getElementById("itemid").value;
            var size = document.getElementsByClassName("new-size active")[0].id;
            var color = document.getElementsByClassName("new-color active")[0].id;
            $.ajax({
                type: 'post',
                url: '{{url('/addwish')}}',
                data: {
                    itemid     : itemid,size     : size,color     : color,
                    qty     : qty,
                    '_token': '{{csrf_token()}}'
                },
                success: function (data) {//alert(data);
                    if(data!=""){
                    $('#myModalwishd').modal('show');}
                }
            });
        }
    </script>
    
   <script>
    var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
    this.classList.toggle("active");

    /* Toggle between hiding and showing the active panel */
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}

// Notify Me Section
function addnotifyme()
{
    var email_id=document.getElementById("email_id").value;
    $.ajax({
        type: 'post',
        url: '{{url('/addnotifyme')}}',
        data: {
            email_id     : email_id,
            '_token': '{{csrf_token()}}'
        },
        success: function (data) {
            
            if(data!=""){
                $('#exampleModalCenter').modal('show');
            }
        }
    });
}


</script>

<script>
        const swiper = new Swiper('.gallery-top', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // // And if we need scrollbar
    // scrollbar: {
    //     el: '.swiper-scrollbar',
    // },
});

    </script>
  
           
@endsection

