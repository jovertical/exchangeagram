<?php

if (!function_exists('cx')) {
    /**
     * Form a space separated CSS classes.
     * Inspired by `classnames` js library.
     *
     * @param  string|array<string> ...$args The CSS classes to concatenate.
     * @return string
     */
    function cx(...$args)
    {
        return collect($args)->map(function ($item) {
            if (is_string($item)) {
                return $item;
            }

            if (is_array($item)) {
                return collect($item)->filter(fn ($item) => (bool) $item)
                    ->keys()
                    ->reduce(fn ($carry, $item) => $carry ? "${carry} ${item}" : $item);
            }

            return null;
        })->join(' ');
    }
}
