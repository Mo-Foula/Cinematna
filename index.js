function generate_carousel_cards(link, visible) {
    //if visable == 0 , y7ot el code bta3 el hidden, else y7ot el code el3adi
    var vis = " ";
    if (visible)
        vis = "box--hide";
    var slider = `<li class="box movie-item ` + vis + `"
    style="background-image: url(`+ link + `);background-size: cover;">

</li>`;
    document.getElementById("carouselfirstpart").innerHTML += slider;
}
// popularmoviesinhomepage
function generate_popular_movie(id, name, poster, rating) {
    var pop2 = `<div class="slide-it">
<div class="movie-item">
    <div class="mv-img">
        <img src="`+ poster + `" alt="">
    </div>
    <div class="hvr-inner">
        <a href="SingleMoviePage.php?id=`+ id + `"> Read more <i
                class="ion-android-arrow-dropright"></i>
        </a>
    </div>
    <div class="title-in">
        <h6><a href="#">`+ name + `</a></h6>
        <p><i class="ion-android-star"></i><span>`+ rating + `</span>
            /10</p>
    </div>
</div>
</div>`;
    document.getElementById('popularmoviesinhomepage').innerHTML += pop2;
}
function generate_toprated_movie(id, name, poster, rating) {
    var pop3 = `<div class="slide-it">
    <div class="movie-item">
        <div class="mv-img">
            <img src="`+ poster + `" alt="">
        </div>
        <div class="hvr-inner">
            <a href="singlemoviepage.php?id=`+ id + `"> Read more <i
                    class="ion-android-arrow-dropright"></i>
            </a>
        </div>
        <div class="title-in">
            <h6><a href="#">`+ name + `</a></h6>
            <p><i class="ion-android-star"></i><span>`+ rating + `</span>
                /10</p>
        </div>
    </div>
</div>`;
    document.getElementById('topratedhomepage').innerHTML += pop3;
}
function kokokookokoko(){
    alert('omak');
}
function generate_commingsoon_movie(id, name, poster, rating) {
    var pop3 = `<div class="slide-it">
        <div class="movie-item">
            <div class="mv-img">
                <img src="`+ poster + `" alt="">
            </div>
            <div class="hvr-inner">
                <a href="singlemoviepage.php?id=`+ id + `"> Read more <i
                        class="ion-android-arrow-dropright"></i>
                </a>
            </div>
            <div class="title-in">
                <h6><a href="#">`+ name + `</a></h6>
                <p><i class="ion-android-star"></i><span>`+ rating + `</span>
                    /10</p>
            </div>
        </div>
    </div>`;
    document.getElementById('commingsoonsectionhomepage').innerHTML += pop3;
}
function generate_thumbnail(name, img){
    var a = `<div class="item">
    <div class="trailer-img">
        <img src="`+img+`" alt="photo by Barn Images"
            width="4096" height="2737">
    </div>
    <div class="trailer-infor">
        <h4 class="desc">`+name+`</h4>
        <p>2:30</p>
    </div>
</div>`;
    document.getElementById('trailer_thumbnail_homepage').innerHTML+=a;
}

function generate_trailers_homepage(link){
    var a = `<div>
    <iframe class="item-video" src="#"
        data-src="`+link+`"></iframe>
</div>`;
    document.getElementById('homepage_movietrailer').innerHTML+=a;
}
//homepage_movietrailer