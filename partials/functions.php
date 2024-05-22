<?php

function email_controls($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}
