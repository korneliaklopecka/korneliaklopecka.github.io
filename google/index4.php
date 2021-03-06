<!DOCTYPE html>
<html lang="pl">

  <head>
    <meta charset="utf-8">
    <title>Google</title>
    <link rel="icon" href="https://www.freepnglogos.com/uploads/google-logo-png/google-logo-png-google-icon-logo-png-transparent-svg-vector-bie-supply-14.png">
    <link rel="stylesheet" type="text/css" href="styles3.css">
    <link rel="stylesheet" type="text/css" href="styles4.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <link href="autocompleter.css" rel="stylesheet" type="text/css">
    <script src="autocompleter.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js" integrity="sha512-JZSo0h5TONFYmyLMqp8k4oPhuo6yNk9mHM+FY50aBjpypfofqtEWsAgRDQm94ImLCzSaHeqNvYuD9382CEn2zw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  </head>

  <body> 
    <div id="app" :class="[wyszukaj.length > 0 ? 'results' : 'home']"> 
      
    <nav class="nav_tools">
        <a href ="#">Gmail</a>
        <a href ="#">Grafika</a>
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAHlBMVEUAAAD////c3NyGhobZ2dl9fX3o6OiCgoL4+Pi3t7cTiY9IAAABp0lEQVR4nO3dy23DQBBEQZpfKf+EHYH30IcGhq4KoLHvPBK4baH9529HuHksNvf0oTGFCYVdChMKuxQmFHYpTCjsUphQ2KUwobBLYUJhl8KEwi6FCYVdChMKuxQmFHYpTCjsUphQ2KUwobBLYUJhl8KEwi6FCYVdChMKu87Fa65w81psnvFL98z5WbzmPrPNe7H5yTb3fVuMvoPC+RTOp3A+hfMpnE/hfArnUzifwvkUzqdwPoXzKZxvOzLX6sbwfaLN57vYvK/wpfFFZ3V7esLNZ7GZ355S778fKkwo7FKYUNilMKGwS2FCYZfChMIuhQmFXQoTCrsUJhR2KUwo7FKYUNilMKGwS2FCYZfChMIuhQmFXQoTCrsUJhR2KUwo7Hp/4Zzf6of/Yhj0f4vF6DsonE/hfArnUzifwvkUzqdwPoXzKZxP4XwK51M4n8L5/sH3LVJzvlGSev/9UGFCYZfChMIuhQmFXQoTCrsUJhR2KUwo7FKYUNilMKGwS2FCYZfChMIuhQmFXQoTCrsUJhR2KUwo7FKYUNilMKGwS2FCYZfChMLIL9IUYVkcF1KJAAAAAElFTkSuQmCC" class="google_apps" role="button" height="32"></img>
        <button>Zaloguj się</button>
    </nav>

    <div class="main">
    <div class="logo">
          <img class="google" src="logo.png"> 
      </div>
      <div class="wyszukaj">
          <div class="pasek"> 
              <div class="text">
                  <div class="widok">
                      <img class="lupa" src="search.svg" @click="potwierdz" title="Szukaj">
                      <input v-model="googleSearch" @keyup.enter="potwierdz" type="search">
                      <img class="mikro" src="vs.png" title="Wyszukiwanie głosowe">
                  </div>
              </div>
              <div class="lista">
                  <ul v-for="miasto in filtredCities" @click="uzupelnij(miasto)">
                      <img class="lupa1" src="search.svg" title="Szukaj">
                      {{googleSearch}}<b>{{ miasto.name.substring(googleSearch.length) }}</b>
                  </ul>
              </div>
          </div>
          <div class="przyciski">
              <div class="buttons">
                  <button class="przycisk1" @click="potwierdz" type="button">Szukaj w Google</button>
                  <button class="przycisk2" type="button" onclick="location.href=''">Szczęśliwy traf</button>
              </div>
          </div>
      </div>
  </div>

    <footer class="stopka">
        <h4>Polska</h4>
        <div class="typ">
            <div class="typ1">
                <a href="#">O nas</a>
                <a href="#">Reklamuj się</a>
                <a href="#">Dla firm</a>
                <a href="#">Jak działa wyszukiwarka</a>
            </div>
           

          <div class="typ3">
                <a href="#">Prywatność</a>
                <a href="#">Warunki</a>
                <a href="#">Ustawienia</a>
            </div>
        </div>
    </footer>

    
    <div class="topbar">

        <img src="https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_92x30dp.png" alt="">

        <ul class="opcje">
          <li><a href="#"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAHlBMVEUAAAD////c3NyGhobZ2dl9fX3o6OiCgoL4+Pi3t7cTiY9IAAABp0lEQVR4nO3dy23DQBBEQZpfKf+EHYH30IcGhq4KoLHvPBK4baH9529HuHksNvf0oTGFCYVdChMKuxQmFHYpTCjsUphQ2KUwobBLYUJhl8KEwi6FCYVdChMKuxQmFHYpTCjsUphQ2KUwobBLYUJhl8KEwi6FCYVdChMKu87Fa65w81psnvFL98z5WbzmPrPNe7H5yTb3fVuMvoPC+RTOp3A+hfMpnE/hfArnUzifwvkUzqdwPoXzKZxvOzLX6sbwfaLN57vYvK/wpfFFZ3V7esLNZ7GZ355S778fKkwo7FKYUNilMKGwS2FCYZfChMIuhQmFXQoTCrsUJhR2KUwo7FKYUNilMKGwS2FCYZfChMIuhQmFXQoTCrsUJhR2KUwo7Hp/4Zzf6of/Yhj0f4vF6DsonE/hfArnUzifwvkUzqdwPoXzKZxP4XwK51M4n8L5/sH3LVJzvlGSev/9UGFCYZfChMIuhQmFXQoTCrsUJhR2KUwo7FKYUNilMKGwS2FCYZfChMIuhQmFXQoTCrsUJhR2KUwo7FKYUNilMKGwS2FCYZfChMLIL9IUYVkcF1KJAAAAAElFTkSuQmCC" class="google_apps" role="button" height="32"></a></li>
          <li><button class="signIn" type="button" name="button">Zaloguj się</button></li>
        </ul>

        <div class="searchgoogle">

          <div class="elements">
            <input ref="second" type="text" v-model="googleSearch">
            <img src="search.svg" class="lupa">
            <img src="vs.png" class="mikrofon">
            <div class="line"></div>
            <img src="close.png" class="x">
          </div>

          <ul class="optionsbar">
            <li class="lewo all"><a href="#">Wszystko</a></li>
            <li class="lewo"><a href="#">Wiadomości</a></li>
            <li class="lewo"><a href="#">Grafika</a></li>
            <li class="lewo"><a href="#">Wideo</a></li>
            <li class="lewo"><a href="#">Mapy</a></li>
            <li class="lewo"><a href="#">Więcej</a></li>
            <li class="lewo"><a class="tools" href="#">Narzędzia</a></li>
            <li class="lewo"><a href="#">Ustawienia</a></li>
          </ul>
          
        </div>

    </div> 
    <div class="searchResults">

        <p class="searchnumber">Około  17 500 000 wyników (0,72 s)</p>
      
        <div class="result">
            <a class="link" href="#">https://podstawyhiszpanskiego.pl/ </a> <button>▼</button>
            <h2><a href="#">Podstawyhiszpanskiego.pl | Samouczek hiszpańskiego ...</a></h2>
            <p>N?><Mauka języka francuskiego online. Kurs podstaw hiszpańskiego za darmo! <br>
               Poniżej znajdziesz przygotowany przeze mnie kurs języka hiszpańskiego. </p>
        </div>

        <div class="result">
            <a class="link" href="#">http://www.ebrio.pl/</a> <button>▼</button>
            <h2><a href="#">Strona główna - www.ebrio.pl - Darmowy kurs języka ...</a></h2>
            <p>Darmowy kurs języka hiszpańskiego dla początkujących. Kurs składa się z kolejnych lekcji, w każdej lekcji jest krótki tekst (czytany przez lektora), tłumaczenie, ...</p>
 
        </div>

        <div class="result">
            <a class="link" href="#">https://langusta.io/blog/8-sposobow-jak-uczyc-sie-jezyka-hiszpanskiego/</a> <button>▼</button>
            <h2><a href="#">8 sposobów jak uczyć się języka hiszpańskiego | Langusta.io ...</a></h2>
            <p> Zastosowanie się do tej wskazówki spowoduje, że Twoja nauka języka obcego będzie najbardziej efektywna. Korzyści płynące z nauki języka ...</p>
        </div>

        <div class="result">
            <a class="link" href="#">https://hiszpanski.6ka.pl/lekcja/cz1/1</a> <button>▼</button>
            <h2><a href="#">Lekcja 1 - Część 1 - Hiszpański na Szóstkę - 6ka.pl - Języki ...</a></h2>
            <p>Znajdziesz je w lewym bocznym menu, poniżej głównych lekcji. Dodatki "Słownictwo" rozszerzają kurs o ćwiczenia utrwalające wszystkie słowa i zdania z kursu ... </p>
        </div>

        <div class="result">
            <a class="link" href="#">https://www.lingohut.com/pl/l2/naucz-si%C4%99-j%C4%99zyka-hiszpa%C5%84skiego</a> <button>▼</button>
            <h2><a href="#">Darmowe lekcje hiszpańskiego - LingoHut.com</a></h2>
            <p>Darmowe lekcje hiszpańskiego. Naucz się hiszpańskiego samodzielnie. Ucz się dzięki 125 darmowym lekcjom. Nie ma żadnego ryzyka ani umowy. Naucz się ...</p>
        </div>

        <div class="result">
            <a class="link" href="#">https://pl.duolingo.com/course/es/en/Nauka-hiszpa%C5%84skiego/</a> <button>▼</button>
            <h2><a href="#">Najlepsza na świecie metoda nauki hiszpańskiego. - Duolingo</a></h2>
            <p>Dzięki naszej darmowej aplikacji mobilnej i stronie internetowej każdy może korzystać z Duolingo. Ucz się skutecznie hiszpańskiego, wykonując krótkie lekcje.</p>
        </div>

        <div class="result">
            <a class="link" href="#">https://hiszpanski.ang.pl/nauka/lekcje_od_podstaw</a> <button>▼</button>
            <h2><a href="#">Język hiszpański - Lekcje od podstaw – Szlifuj swój hiszpański</a></h2>
            <p>Język hiszpański - Lekcje od podstaw. ... Lista lekcji języka hiszpańskiego: Cześć! ... Fajnie by było, gdybyście zrobili naukę słówek, tak jak w angielskim.</p>
        </div>

        <div class="result">
            <a class="link" href="#">https://www.superprof.pl/blog/nauka-hiszpanskiego-od-podstaw/</a> <button>▼</button>
            <h2><a href="#">Najlepsze Metody Nauki Języka Hiszpańskiego od Podstaw</a></h2>
            <p>Nie wiesz jak zacząć uczyć się podstaw hiszpańskiego? Z tymi poradami nauka hiszpańskiego dla początkujących to pestka. Poznaj ...</p>
        </div>

        <div class="result">
            <a class="link" href="#">https://www.17-minute-languages.com/pl/nauka-hiszpa%C5%84skiego/</a> <button>▼</button>
            <h2><a href="#">Nauka hiszpańskiego z wykorzystaniem pamięci długotrwałej ...</a></h2>
            <p>Wypróbuj natychmiast kurs hiszpańskiego ✓ 17 minut dziennie nauki ✓ Komputer + smartfon + tablet ✓ Superlearning ✓ Nauka szybka i wydajna.</p>
        </div>

        <div class="result">
            <a class="link" href="#">https://www.sprachcaffe.com/polski/kursy_hiszpanskiego.htm</a> <button>▼</button>
            <h2><a href="#">Kursy Hiszpańskiego za granicą | Sprachcaffe</a></h2>
            <p>Wszystkie nasze lekcje hiszpańskiego w internecie. Zaprojektuj swój kurs online. Hiszpański: kursy językowe w Barcelonie i Maladze lub na Kubie ..</p>
        </div>

        <br>

        <div class="help">

          <h3>Podobne wyszukiwania</h3>
            <div class="relatedlists">
                <ul class="relatedleft">
                    <a id="pomoc1" type="text"><img src="search.svg" class="lupka" alt="Lupa Google" href="#">Nauka hiszapńskiego w domu</a>
                    <a id="pomoc2" type="text"><img src="search.svg" class="lupka" alt="Lupa Google" href="#">Nauka hiszpańskiego książka</a>
                    <a id="pomoc3" type="text"><img src="search.svg" class="lupka" alt="Lupa Google" href="#">Nauka hiszpańskiego aplikacja</a>
                    <a id="pomoc4" type="text"><img src="search.svg" class="lupka" alt="Lupa Google" href="#">Nauka hiszpańskiego YouTube</a>
                </ul>
                <ul class="relatedright">
                    <a id="pomoc5" type="text"><img src="search.svg" class="lupka" alt="Lupa Google" href="#">Szybka nauka hiszpańskiego</a>
                    <a id="pomoc6" type="text"><img src="search.svg" class="lupka" alt="Lupa Google" href="#">Stronu do nauki hiszpańskiego</a>
                    <a id="pomoc7" type="text"><img src="search.svg" class="lupka" alt="Lupa Google" href="#">Kurs hiszpańskiego</a>
                    <a id="pomoc8" type="text"><img src="search.svg" class="lupka" alt="Lupa Google" href="#">Język hiszpański</a>
                </ul>
            </div>

        </div>

        <br><br>

          <table class="googlelist">
            <tr>
              <td><span class="blue">G</span></td>
              <td><span class="red">o</span></td>
              <td><span class="yellow">o</span></td>
              <td><span class="yellow">o</span></td>
              <td><span class="yellow">o</span></td>
              <td><span class="yellow">o</span></td>
              <td><span class="yellow">o</span></td>
              <td><span class="yellow">o</span></td>
              <td><span class="yellow">o</span></td>
              <td><span class="yellow">o</span></td>
              <td><span class="yellow">o</span></td>
              <td><span class="blue">g</span></td>
              <td><span class="green">l</span></td>
              <td><span class="red">e</span></td>
              <td rowspan="2" style="width: 10px;"></td>
              <td><span class="blue arrow">></span></td>
            </tr>

            <tr>
              <td class="numer"></td>
              <td class="numer">1</td>
              <td class="numer">2</td>
              <td class="numer">3</td>
              <td class="numer">4</td>
              <td class="numer">5</td>
              <td class="numer">6</td>
              <td class="numer">7</td>
              <td class="numer">8</td>
              <td class="numer">9</td>
              <td class="numer">10</td>
              <td colspan="3"></td>
              <td class="numer">Następna</td>
            </tr>

          </table>

      </div>

      <div class="infopasek">

        <div class="locationpasek">
        <p>
          <a class="panstwo">Polska</a>
          <a class="miasto"><strong>Kraków</strong> - Na podstawie Twojej wcześniejszej aktywności </a>
          <a class ="inne">- Użyj dokładnej lokalizacji</a><a class ="loc_more"> - Dowiedz się więcej</a>
        </p>
      </div>

        <ul>
            <li><a href="#">Pomoc</a></li>
            <li><a href="#">Prześlij opinię</a></li>
            <li><a href="#">Prywatność</a></li>
            <li><a href="#">Warunki</a></li>
        </ul>
        
      </div>
    </div>
</body>

<script>
   var app = new Vue({
                el: "#app",
                data: {
                    googleSearch:"",
                    wyszukaj:"",
                    cities: window.cities,
                },
                computed: {
                    filtredCities() {
                        let result = this.cities.filter(miasto => miasto.name.startsWith(this.googleSearch) || miasto.name.toLowerCase().startsWith(this.googleSearch));
                        if (this.googleSearch.length > 0) {
                            return result.slice(0, 10);
                        }
                    }
                },
                methods: {
                    potwierdz() {
                        this.wyszukaj = this.googleSearch
                    },
                    uzupelnij(miasto) {
                        this.googleSearch = miasto.name;
                        this.wyszukaj = this.googleSearch;
                    },
                }
            })
</script>
</html>
