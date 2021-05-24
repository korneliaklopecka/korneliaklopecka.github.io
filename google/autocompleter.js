Vue.component('v-autocompleter', {
    template: ' <div><img src="search.svg" class="widok"><input @change="zmiana" @keyup.enter="potwierdź" v-model="googleSearch" type="search"><div class="lista" :class="{widok : googleSearch.length > 0 && filtredCities.length>0}></div></div>'
          data: function() {
            return {
                    googleSearch:"",
                    wyszukaj:"",
                    cities: window.cities,
            }
                },
                computed: {
                    filtredCities: function() {
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
    
}
