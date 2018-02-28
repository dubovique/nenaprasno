<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
    </main>
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
                <a href="#" target="_blank" class="main-footer-socials-item">
                    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/assets/images/icon-facebook.svg"); ?>
                </a>
                <a href="#" target="_blank" class="main-footer-socials-item">
                    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/assets/images/icon-instagram.svg"); ?>
                </a>
                <a href="#" target="_blank" class="main-footer-socials-item">
                    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/assets/images/icon-vk.svg"); ?>
                </a>
            </div>
        </div>
    </footer>

    <script src="/assets/build/scripts.js"></script>
    </body>
</html>
