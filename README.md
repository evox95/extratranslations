# extratranslations
My simple module allows to add translations everywhere where we have access to Tools class – for example in PrestaShop classes.

1. Download module and install in PrestaShop.
2. Open file: /modules/extratranslations/extratranslations.tpl and add labels in this way:
{l s='example' mod='extratranslations'}
{l s='label' mod='extratranslations'}
 
3. Add yours labels wherever you want in this way:
Tools::getExtraTranslation('example')

4. Translate yours labels in PrestaShop Admin Panel:
Localization > Translations > Module Translations > Module extratranslations
