<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
    </main>
    <footer class="main-footer">
        <div class="wrapper">
            <a href="#" class="main-footer-logo">
                <img src="/assets/images/profilaktika-media/logo.svg" alt="Profilaktika Media — Ненапрасно" width="140">
            </a>

			<?$APPLICATION->IncludeComponent("bitrix:menu", "main-footer-menu", Array("ROOT_MENU_TYPE" => "bottom"), false);?>

            <div class="main-footer-socials">
                <a href="#" target="_blank" class="main-footer-socials-item">
                    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/assets/images/profilaktika-media/icon-facebook.svg"); ?>
                </a>
                <a href="#" target="_blank" class="main-footer-socials-item">
                    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/assets/images/profilaktika-media/icon-instagram.svg"); ?>
                </a>
                <a href="#" target="_blank" class="main-footer-socials-item">
                    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/assets/images/profilaktika-media/icon-vk.svg"); ?>
                </a>
            </div>
        </div>
    </footer>

    <script src="/assets/build/profilaktika-media/scripts.js"></script>
    </body>
</html>