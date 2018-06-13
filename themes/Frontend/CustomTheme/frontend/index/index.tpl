<!-- Extend the parent index template, as this contains frontend_index_container_ajax_cart -->
{extends file="parent:frontend/index/index.tpl"}

<!-- Overwrite the block we need to edit -->
{block name="frontend_index_container_ajax_cart"}
    <!-- @todo: handle both off canvas cart and collapsible scenarios based off admin config -->
    <div class="container--ajax-cart" data-collapse-cart="true" {if $theme.offcanvasCart} data-displayMode="collapsible"{/if}></div>
{/block}