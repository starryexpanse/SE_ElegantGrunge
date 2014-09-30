(function() {
    var
    sw = document.getElementById('spoiler-warning')
    , c = document.cookie.replace(/(?:(?:^|.*;\s*)spoileraccept\s*\=\s*([^;]*).*$)|^.*$/, "$1");

    if (c !== 'yes') {
        sw.style.display='block';
    }
    document.getElementById('acceptspoiler').onclick = function() {
        sw.style.display='none';
        var now = new Date();
        now.setTime(now.getTime()+1000*60*60*24*365*20); // 20 years
        console.log(now);
        document.cookie = 'spoileraccept=yes;;expires='+now.toGMTString()+';path=/';
    };
    document.getElementById('rejectspoiler').onclick = function() { window.location.href = 'http://store.steampowered.com/app/63610/'; };
    function fixSize(){
        var $sw = jQuery(sw);
        $sw.css('height', (jQuery(document.body).height()-$sw.position().top)+'px')
    }
    jQuery(document).ready(fixSize).load(fixSize);
}());
