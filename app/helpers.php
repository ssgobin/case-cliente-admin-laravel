<?php
function classRenda($renda)
{
    if ($renda <= 980) return 'badge-classe-a';
    if ($renda <= 2500) return 'badge-classe-b';
    return 'badge-classe-c';
}
