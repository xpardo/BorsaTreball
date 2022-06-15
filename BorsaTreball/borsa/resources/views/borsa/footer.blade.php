
    <nav class="navbar navbar-expand-lg m-2 " style="background-color: #5da4e7; ">

        <div class="pie">
            <div class="col-sm ">   
                <div class="ins ">
                    <div class="overflow-hidden  sm:rounded-lg">
                                <div class="p-6 ">
                                    <center>
                                        <img alt="Logotip entitat " id="logo_entity" src="{{ asset('img/logo-JM-blau-miniatura-1.jpg') }}"  width="120" height="90">
                                    </center>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="large-6 small-12 columns addr-centre ">
                <div class="col-sm ">
                    <div class="vcard ">
                        <span id="tar-nomCentre"><b><strong> Institut Joaquim Mir</strong></b></span>
                        <div class="adr ">
                            <span class="street-address "><b><strong> Codi Centre</strong>: 08043693</b><br><br>av. Vilafranca, s/n</span><br>
                            <span class="postal-code ">Vilanova</span>
                            <span class="locality ">i la Geltru</span>
                            <span class="region " title="Catalunya ">Catalunya</span>
                            <span class="country-name ">Espanya</span>
                            <div class="tel ">
                                <span><b><strong>Telf:  </strong></b><b>93 893 36 48<br>a8043693@xtec.cat</b></span>
                            </div>

                            <a style="color:#FFFFFF;" id="tar-mapa " target="_blank " href="https://www.google.es/maps/place/google+maps+ies+joaquim+mir/data=!4m2!3m1!1s0x0:0x5937d94d3b5cdcbd?sa=X&amp;ved=0CCYQrwswAGoVChMIpJ6Z2LizyAIVQekUCh0vdQw_ "><u>mapa</u></a>
                            <span class="pipe ">|</span>
                            <a style="color:#FFFFFF;"  id="tar-contacte " href="https://agora.xtec.cat/iesjoaquimmir/linstitut/on-som "><u>contacte</u></a>

                        </div>
                    </div>
                </div>
            </div>
        
        

            <div class="col-sm ">
                <div class="ins ">
                    <div id="text-32 " class="widget top-bar-widget large-4 columns widget_text ">
                        <div class="textwidget"><b><strong>Informació Important:</strong></b>
                        <br><a style="color:#FFFFFF;"  href="{{url('condi')}}"><u>Tèrmit i condicions</a></u><br>
                            <br><a style="color:#FFFFFF;"  href="{{url('politic')}}"><u>Política de privacitat</a></u><br>
                        </div>
                    </div>
                </div>
            </div>

            <br>
        </div>
        
    </nav>
    


    @include('estil/pie')
