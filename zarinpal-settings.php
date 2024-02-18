<hr/>
<table class="form-table" style="vertical-align: top">
    <?php
    do_action('RCP_ZarinPal_before_settings', $rcp_options); ?>
    <tr>
        <th colspan=2><h3><?php
                _e('تنظیمات زرین پال', 'rcp_zarinpal'); ?></h3></th>
    </tr>
    <tr>
        <th>
            <label for="rcp_settings[zarinpal_merchant]"><?php
                _e('مرچنت زرین پال', 'rcp_zarinpal'); ?></label>
        </th>
        <td>
            <input class="regular-text" id="rcp_settings[zarinpal_merchant]" style="width: 300px;"
                   name="rcp_settings[zarinpal_merchant]"
                   value="<?php
                   if (isset($rcp_options['zarinpal_merchant'])) {
                       echo $rcp_options['zarinpal_merchant'];
                   } ?>"/>
        </td>
    </tr>
    <tr>
        <th>
            <label for="rcp_settings[zarinpal_name]"><?php
                _e('نام نمایشی درگاه', 'rcp_zarinpal'); ?></label>
        </th>
        <td>
            <input class="regular-text" id="rcp_settings[zarinpal_name]" style="width: 300px;"
                   name="rcp_settings[zarinpal_name]"
                   value="<?php
                   echo isset($rcp_options['zarinpal_name']) ? $rcp_options['zarinpal_name'] : __(
                       'زرین پال',
                       'rcp_zarinpal'
                   ); ?>"/>
        </td>
    </tr>
    <tr>
        <th>
            <label><?php
                _e('تذکر ', 'rcp_zarinpal'); ?></label>
        </th>
        <td>
            <div class="description"><?php
                _e(
                    'از سربرگ مربوط به ثبت نام در تنظیمات افزونه حتما یک برگه برای بازگشت از بانک انتخاب نمایید . ترجیحا نامک برگه را لاتین قرار دهید .<br/> نیازی به قرار دادن شورت کد خاصی در برگه نیست و میتواند برگه ی خالی باشد .',
                    'rcp_zarinpal'
                ); ?></div>
        </td>
    </tr>
    <input type="hidden" id="rcp_settings[zarinpal_query_name]" value="ZarinPal">
    <?php
    do_action('RCP_ZarinPal_after_settings', $rcp_options); ?>
</table>