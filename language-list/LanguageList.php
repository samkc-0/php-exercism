<?php

function language_list(...$languages)
{
    return $languages;
}

function add_to_language_list($language_list, $language_to_add): array {
    $language_list[] = $language_to_add;
    return $language_list;
}

function prune_language_list($language_list): array {
    array_shift($language_list);
    return $language_list;
}

function current_language($language_list): string {
    return $language_list[0];
}

function language_list_length($language_list) {
    return count($language_list);
}