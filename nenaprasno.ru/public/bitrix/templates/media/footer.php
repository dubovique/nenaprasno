<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
    </main>

    <a href="#" class="scroll-to-top" data-scroll-to-top>Наверх</a>

    <footer class="main-footer">
        <div class="wrapper">
            <a href="/" class="main-footer-logo">
                <img src="/assets/images/logo.svg" alt="Profilaktika Media — Ненапрасно" width="140">
            </a>
            <a href="https://xn--80afcdbalict6afooklqi5o.xn--p1ai/" target="_blank" class="main-footer-additional-logo" >
                <img src="/assets/images/pgrants_logo.svg" alt="Фонд президентских грантов"  width="140">
            </a>

			<?$APPLICATION->IncludeComponent("bitrix:menu", "main-footer-menu", Array("ROOT_MENU_TYPE" => "bottom"), false);?>

            <div class="main-footer-socials">
                <a href="https://www.facebook.com/profilaktikamedia/" target="_blank" class="main-footer-socials-item">
                    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/assets/images/icon-facebook.svg"); ?>
                </a>
                <a href="https://t.me/stupid_cancer" target="_blank" class="main-footer-socials-item">
                    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/assets/images/icon-telegram.svg"); ?>
                </a>
                <a href="https://vk.com/profilaktikamedia" target="_blank" class="main-footer-socials-item">
                    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/assets/images/icon-vk.svg"); ?>
                </a>
            </div>
        </div>
    </footer>

    <script src="/assets/build/scripts.js"></script>

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

    </body>
</html>
