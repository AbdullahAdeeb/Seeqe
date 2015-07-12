{if $error ne ""}
<div id="MessagesBox" style="padding-bottom:10px;"><div class="FailPanel">{$error}</div></div>
{/if}
{if $message ne ""}
<div id="MessagesBox" style="padding-bottom:10px;"><div class="SuccessPanel">{$message}</div></div>
{/if}