@include('header')
            <div class="row">
                <div class="col-md-12" >
                    <article class="blog-post">
                        <div class="blog-post-body">
                            <h2>HELLO & WELCOME TO OUR BLOG</h2>
                        </div>
                    </article>
                </div>
            </div>



<div class="container mt-3">
  <div class="row text-center">
    <div class="col-12 h1">
      Best blog cars ever.
    </div>
  </div>
</div>


<div class="container-fluid">
  <div class="row">
    <div class="col-md-4">
      <img src="mercedes.jpg" alt="mercedes" width="100%">
    </div>
    <div class="col-md-4">
      <img src="audi.jpg" alt="audi" width="100%">
    </div>
    <div class="col-md-4">
      <img src="tesla.jpg" alt="tesla"  width="100%">
    </div>
  </div>
</div>




<div class="container mt-4">

        <div class="row">
                  <div class="col-md-12">



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
                    </div>


                    <div class="sidebar-widget">
                        <h3 class="sidebar-title">Socials</h3>
                        <div class="widget-container">
                            <div class="widget-socials">
                                <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a href="https://twitter.com/?lang=es" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.instagram.com/?hl=es" target="_blank"><i class="fa fa-instagram"></i></a>
                                <a href="https://www.gmail.com" target="_blank"><i class="fa fa-google-plus"></i></a>
                                <a href="https://dribbble.com/" target="_blank"><i class="fa fa-dribbble"></i></a>
                                <a href="https://www.reddit.com/" target="_blank"><i class="fa fa-reddit"></i></a>
                            </div>
                        </div>

            </div>


        </div>
    </div>
</div>











<div class="container">
  <div class="row mt-3">
    <div class="col-12 h2 text-center">
      This is our WebPage abour €P¡C K@R$
    </div>
  </div>
  <div class="row">
    <div class="col-12 text-center">
      <p>The best cars in the world are made in the United States of America!!</p>
      <p>Tesla, Lamborghini, Ferrari... We make lots and lots of cars...</p>
      <p>And all cars are made with chinese pieces!!</p>
      <p>Buy a plastic car for 100 times the original price!</p>

    </div>
  </div>
</div>

@include('footer')
