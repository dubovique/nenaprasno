<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
    <footer class="footer">
        <div class="wrapper">
            <div class="footer-copyright">
                &copy; Фонд профилактики рака «Не напрасно», <?php echo date("Y"); ?>
            </div>
        </div>
    </footer>
    <script src="/assets/scripts.js"></script>
    <? if (CSite::InDir('/test/')): ?>
        <script>vueApp.activateForm();</script>
    <? endif ?>


    <script type="text/javascript" >
    (function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
    try {
    w.yaCounter48129917 = new Ya.Metrika({
    id:48129917,
    clickmap:true,
    trackLinks:true,
    accurateTrackBounce:true,
    webvisor:true,
    trackHash:true
    });
    } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
    s = d.createElement("script"),
    f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = "https://mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
    d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/48129917" style="position:absolute; left:-9999px;" alt="" /></div></noscript>


    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MGW2BMG');</script>
    <!-- End Google Tag Manager -->

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MGW2BMG"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

	</body>
</html>