<?php

function encrypt($plain_text, $step_size)
{
    $matrix_representation = array();

    // Membangun matriks representasi dari teks
    for ($i = 0; $i < $step_size; $i++) {
        $matrix_row = array();
        for ($j = 0; $j < ceil(strlen($plain_text) / $step_size); $j++) {
            $index = $j * $step_size + $i;
            if ($index < strlen($plain_text)) {
                $matrix_row[] = $plain_text[$index];
            } else {
                $matrix_row[] = "@";
            }
        }
        $matrix_representation[] = $matrix_row;
    }

    // Proses enkripsi
    $matrix_height = $step_size;
    $matrix_width = ceil(strlen($plain_text) / $matrix_height);
    $encrypted_text = '';

    for ($i = $matrix_height - 1; $i >= 0; $i--) {
        if ($matrix_height % 2 == 0) {
            if ($i % 2 != 0) {
                for ($j = $matrix_width - 1; $j >= 0; $j--) {
                    if ($matrix_representation[$i][$j] != "@") {
                        $encrypted_text .= $matrix_representation[$i][$j];
                    } else {
                        $encrypted_text .= "@";
                    }
                }
            } else {
                for ($j = 0; $j < $matrix_width; $j++) {
                    if ($matrix_representation[$i][$j] != "@") {
                        $encrypted_text .= $matrix_representation[$i][$j];
                    } else {
                        $encrypted_text .= "@";
                    }
                }
            }
        } else {
            if ($i % 2 == 0) {
                for ($j = $matrix_width - 1; $j >= 0; $j--) {
                    if ($matrix_representation[$i][$j] != "@") {
                        $encrypted_text .= $matrix_representation[$i][$j];
                    } else {
                        $encrypted_text .= "@";
                    }
                }
            } else {
                for ($j = 0; $j < $matrix_width; $j++) {
                    if ($matrix_representation[$i][$j] != "@") {
                        $encrypted_text .= $matrix_representation[$i][$j];
                    } else {
                        $encrypted_text .= "@";
                    }
                }
            }
        }
    }

    return $encrypted_text;
}

function pad_cipher_text($cipher_text, $step_size)
{
    $extra_chars = strlen($cipher_text) % $step_size;
    if ($extra_chars != 0) {
        $padding_size = $step_size - $extra_chars;
        $cipher_text .= str_repeat("@", $padding_size);
    }
    return $cipher_text;
}

function decrypt($cipher_text, $step_size)
{
    $matrix_height = $step_size;
    $matrix_width = ceil(strlen($cipher_text) / $matrix_height);
    $plain_text_matrix = array_fill(0, $matrix_height, array_fill(0, $matrix_width, " "));

    $idx = 0;

    $cipher_text = pad_cipher_text($cipher_text, $step_size);

    for ($i = $matrix_height - 1; $i >= 0; $i--) {
        if ($matrix_height % 2 == 0) {
            if ($i % 2 != 0) {
                for ($j = $matrix_width - 1; $j >= 0; $j--) {
                    $plain_text_matrix[$i][$j] = $cipher_text[$idx];
                    $idx++;
                }
            } else {
                for ($j = 0; $j < $matrix_width; $j++) {
                    $plain_text_matrix[$i][$j] = $cipher_text[$idx];
                    $idx++;
                }
            }
        } else {
            if ($i % 2 == 0) {
                for ($j = $matrix_width - 1; $j >= 0; $j--) {
                    $plain_text_matrix[$i][$j] = $cipher_text[$idx];
                    $idx++;
                }
            } else {
                for ($j = 0; $j < $matrix_width; $j++) {
                    $plain_text_matrix[$i][$j] = $cipher_text[$idx];
                    $idx++;
                }
            }
        }
    }

    $plain_text = "";
    for ($j = 0; $j < $matrix_width; $j++) {
        for ($i = 0; $i < $matrix_height; $i++) {
            if ($plain_text_matrix[$i][$j] != "@") {
                $plain_text .= $plain_text_matrix[$i][$j];
            }
        }
    }

    return str_replace("-", " ", $plain_text);
}
