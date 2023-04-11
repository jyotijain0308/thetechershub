<?php
function toUrl($endPoint = '')
{
    return url(config('app.url') . '/' . $endPoint);
}
