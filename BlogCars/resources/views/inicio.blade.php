@include('header')


      <!--=====================================================================================-->
        <section>
            <div class="row">
                <div class="col-md-12" style="margin-top: 2%;">
                    <article class="blog-post">
                        <div class="blog-post-body">
                            <h2  style="text-align: center !important;">HELLO & WELCOME TO OUR BLOG</h2>
                        </div>
                    </article>
                </div>
            </div>
        </section>
     
<div class="container mt-4">
  <div class="row">
    <div class="col-md-4 text-center">
      <img src="mercedes.jpg" alt="mercedes" height="250px" width="300px">
    </div>
    <div class="col-md-4 text-center">
      <img src="audi.jpg" alt="audi" height="250px" width="300px">
    </div>
    <div class="col-md-4 text-center">
      <img src="tesla.jpg" alt="tesla" height="250px" width="300px">
    </div>
  </div>
</div>
<br><br><br><br>


<div class="container">

        <div class="row">            
            <!--=====================================================================================-->
            <div class="col-md-6">
                <aside>
                    <div class="sidebar-widget">
                        <h3 class="sidebar-title">About Us</h3>
                        <div class="widget-container widget-about">
                            <h4><a href="{{url('/')}}">Ankush, Santi & Viçent</a></h4>
                            <div class="author-title">Bloggers</div>
                            <p>Este Blog se ha hecho explicitamente para la practica Laravel Final del curso DWES.</p><br>
                            
                            <h2><strong>Esto es algo de texto:</strong></h2>
                            <p>
                            	Han pasado más de treinta años desde la caída del Imperio Galáctico, derrotado por la Alianza
								Rebelde. Luke Skywalker (Mark Hamill) ha desaparecido, pero existe un mapa que revela
								dónde se encuentra el último guerrero Jedi con vida. Muchos de los héroes de antes,
								Leia (Carrie Fisher), Han Solo (Harrison Ford), Chewbacca, R2-D2 y C-3PO, todavía 
								están activos y luchan en la resistencia. Y es que la tiranía y la opresión no han 
								acabado en la galaxia, que todavía se encuentra en guerra. Una Nueva República ha 
								surgido, aunque su gobierno es frágil.
							</p>
                            
                            
                            
                        </div>
                    </div>
               </aside>
               </div>
               
                 <div class="col-md-6">
                    
                    <div class="sidebar-widget">
                        <h3 class="sidebar-title">Publicaciones Destacadas</h3>
                        <div class="widget-container">
                            <article class="widget-post">
                                <div class="post-image">
                                    <a href="{{url('/')}}"><img src="images/Logo.jpg" alt="" style="width: 90px;"></a>
                                </div>
                                <div class="post-body">
                                    <h2><a href="{{url('/')}}">Publicación 1</a></h2>
                                    <div class="post-meta">
                                        <span><i class="fa fa-clock-o"></i> 16. febrero 2021</span> <span><a href="{{url('/')}}"><i class="fa fa-comment-o"></i> 23</a></span>
                                    </div>
                                </div>
                            </article>
                            <article class="widget-post">
                                <div class="post-image">
                                    <a href="{{url('/')}}"><img src="images/Logo.jpg" alt="" style="width: 90px;"></a>
                                </div>
                                <div class="post-body">
                                    <h2><a href="{{url('/')}}">Publicación 2</a></h2>
                                    <div class="post-meta">
                                        <span><i class="fa fa-clock-o"></i> 17. febrero 2021</span> <span><a href="{{url('/')}}"><i class="fa fa-comment-o"></i> 23</a></span>
                                    </div>
                                </div>
                            </article>
                            <article class="widget-post">
                                <div class="post-image">
                                    <a href="{{url('/')}}"><img src="images/Logo.jpg" alt="" style="width: 90px;"></a>
                                </div>
                                <div class="post-body">
                                    <h2><a href="{{url('/')}}">Publicación 3</a></h2>
                                    <div class="post-meta">
                                        <span><i class="fa fa-clock-o"></i> 17. febrero 2021</span> <span><a href="{{url('/')}}"><i class="fa fa-comment-o"></i> 23</a></span>
                                    </div>
                                </div>
                            </article>

                    </div>
                    
                    
                    <div class="sidebar-widget">
                        <h3 class="sidebar-title">Socials</h3>
                        <div class="widget-container">
                            <div class="widget-socials">
                            	<img alt="" src="css/images/fb.png">
                            	<img alt="" src="css/images/instagram.png">
                                                        <img alt="" src="css/images/tw.png">
                                                        <img alt="" src="css/images/lin.png">
                            
                            </div>
                        </div>
                    </div>   

        </div>
    </div>
</div>
</div>


<br><br><br><br>
<br><br><br><br>
<br><br><br><br>











@include('footer')
