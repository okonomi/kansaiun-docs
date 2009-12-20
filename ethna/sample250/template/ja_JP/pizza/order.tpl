<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="{$config.url}css/ethna.css" type="text/css" />
  </head>
  <body>
    <div id="header">
      <h1>{'Pizza Order'|i18n}</h1>
    </div>

    <div id="main">
      {if count($errors)}
        <ul>
        {foreach from=$errors item="error"}
          <li>{$error}</li>
        {/foreach}
        </ul>
      {/if}
      {form ethna_action="pizza_order_confirm"}
        <dl>
          <dt>{form_name name="Pizza[type]"}</dt>
            <dd>{form_input name="Pizza[type]" emptyoption="-- 選んでください --"}</dd>
          <dt>{form_name name="Pizza[size]"}</dt>
            <dd>{form_input name="Pizza[size]"}</dd>
          <dt>{form_name name="Pizza[count]"}</dt>
            <dd>{form_input name="Pizza[count]" default=1}</dd>
        </dl>

        <p>{form_submit value="確認"}</p>
      {/form}
    </div>

    <div id="footer">
      Powered By <a href="http://ethna.jp">Ethna</a>-{$smarty.const.ETHNA_VERSION}.
    </div>
  </body>
</html>
