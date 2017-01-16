<section class="container">
    <div class="row">
        <div id="site-map" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <span class="map-title">Mapa do Site</span>

            <div class="map">
                <ul>
                    @forelse($pageGen->getActivePages() as $page)
                        <li>
                            <a href="/site/{{$page->slug}}">
                                {{$page->title}}
                            </a>
                        </li>
                    @empty
                        <a href="/">Home</a>
                    @endforelse
                </ul>
            </div>
        </div>

        <div id="social-media" class="col-lg-3 col-md-4 col-sm-4 col-xs-4">
            <span class="social-title">Redes Sociais</span>

            <div class="social-icons">
                <i class=" fa fa-envelope-o fa-2x"></i>
                <i class=" fa fa-twitter fa-2x"></i>
                <i class=" fa fa-facebook fa-2x"></i>
            </div>
        </div>

        <div id="contacts" class="col-lg-offset-2 col-lg-3 col-md-4 col-sm-4 col-xs-4">
            <span class="contact-title">Contatos</span>

            <div class="contact">
                <ul>
                    <li>(12) 99787 4340</li>
                    <li>Av. José da Silva Mineiro, 5.255</li>
                    <li>Bairro Germana | Caçapava/SP</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<div class="copyright">
    <section class="container">
        &copy; 2016 Aerovale
    </section>
</div>