<?php

// function encrypt($plain_text, $step_size)
// {
//     $matrix_representation = array();
//     $encrypted_text = "";

//     $matrix_height = $step_size;
//     $matrix_width = ceil(strlen($plain_text) / $matrix_height);

//     for ($i = 0; $i < $matrix_height; $i++) {
//         if ($matrix_height % 2 == 0) {
//             if ($i % 2 == 0) {
//                 for ($j = 0; $j < $matrix_width; $j++) {
//                     $index = $i + $j * $matrix_height;
//                     if ($index < strlen($plain_text)) {
//                         $matrix_representation[] = $plain_text[$index];
//                     } else {
//                         $matrix_representation[] = "@";
//                     }
//                 }
//             } else {
//                 for ($j = $matrix_width - 1; $j >= 0; $j--) {
//                     $index = $i + $j * $matrix_height;
//                     if ($index < strlen($plain_text)) {
//                         $matrix_representation[] = $plain_text[$index];
//                     } else {
//                         $matrix_representation[] = "@";
//                     }
//                 }
//             }
//         } else {
//             if ($i % 2 == 0) {
//                 for ($j = 0; $j < $matrix_width; $j++) {
//                     $index = $i + $j * $matrix_height;
//                     if ($index < strlen($plain_text)) {
//                         $matrix_representation[] = $plain_text[$index];
//                     } else {
//                         $matrix_representation[] = "@";
//                     }
//                 }
//             } else {
//                 for ($j = $matrix_width - 1; $j >= 0; $j--) {
//                     $index = $i + $j * $matrix_height;
//                     if ($index < strlen($plain_text)) {
//                         $matrix_representation[] = $plain_text[$index];
//                     } else {
//                         $matrix_representation[] = "@";
//                     }
//                 }
//             }
//         }
//     }

//     $encrypted_text = implode("", $matrix_representation);

//     return $encrypted_text;
// }

// function decrypt($encrypted_text, $step_size)
// {
//     $matrix_height = $step_size;
//     $matrix_width = ceil(strlen($encrypted_text) / $matrix_height);

//     $matrix_representation = array_fill(0, $matrix_height, array_fill(0, $matrix_width, '@'));

//     $index = 0;
//     for ($i = 0; $i < $matrix_height; $i++) {
//         if ($matrix_height % 2 == 0) {
//             if ($i % 2 == 0) {
//                 for ($j = 0; $j < $matrix_width; $j++) {
//                     if ($matrix_representation[$i][$j] != "@") {
//                         continue;
//                     }
//                     $matrix_representation[$i][$j] = $encrypted_text[$index];
//                     $index++;
//                 }
//             } else {
//                 for ($j = $matrix_width - 1; $j >= 0; $j--) {
//                     if ($matrix_representation[$i][$j] != "@") {
//                         continue;
//                     }
//                     $matrix_representation[$i][$j] = $encrypted_text[$index];
//                     $index++;
//                 }
//             }
//         } else {
//             if ($i % 2 == 0) {
//                 for ($j = 0; $j < $matrix_width; $j++) {
//                     if ($matrix_representation[$i][$j] != "@") {
//                         continue;
//                     }
//                     $matrix_representation[$i][$j] = $encrypted_text[$index];
//                     $index++;
//                 }
//             } else {
//                 for ($j = $matrix_width - 1; $j >= 0; $j--) {
//                     if ($matrix_representation[$i][$j] != "@") {
//                         continue;
//                     }
//                     $matrix_representation[$i][$j] = $encrypted_text[$index];
//                     $index++;
//                 }
//             }
//         }
//     }

//     $decrypted_text = "";
//     foreach ($matrix_representation as $row) {
//         foreach ($row as $char) {
//             if ($char != "@") {
//                 $decrypted_text .= $char;
//             }
//         }
//     }

//     return str_replace("-", " ", $decrypted_text);
// }





// $spasi = "_";
// $akhirHill = "@";
// $akhirSpiral = "ദ";

// $substitusi = array(
//     'A' => 0, 'B' => 1, 'C' => 2, 'D' => 3, 'E' => 4, 'F' => 5, 'G' => 6, 'H' => 7, 'I' => 8, 'J' => 9, 'K' => 10, 'L' => 11, 'M' => 12,
//     'N' => 13, 'O' => 14, 'P' => 15, 'Q' => 16, 'R' => 17, 'S' => 18, 'T' => 19, 'U' => 20, 'V' => 21, 'W' => 22, 'X' => 23, 'Y' => 24, 'Z' => 25,
//     'a' => 26, 'b' => 27, 'c' => 28, 'd' => 29, 'e' => 30, 'f' => 31, 'g' => 32, 'h' => 33, 'i' => 34, 'j' => 35, 'k' => 36, 'l' => 37, 'm' => 38,
//     'n' => 39, 'o' => 40, 'p' => 41, 'q' => 42, 'r' => 43, 's' => 44, 't' => 45, 'u' => 46, 'v' => 47, 'w' => 48, 'x' => 49, 'y' => 50, 'z' => 51,
//     '0' => 52, '1' => 53, '2' => 54, '3' => 55, '4' => 56, '5' => 57, '6' => 58, '7' => 59, '8' => 60, '9' => 61,
//     '.' => 62, '/' => 63, '?' => 64, '!' => 65, '_' => 66, '@' => 67, ',' => 68, ':' => 69, ';' => 70, '-' => 71, '=' => 72, '+' => 73, '*' => 74,
//     '&' => 75, '^' => 76, '%' => 77, '$' => 78, '#' => 79, '(' => 80, ')' => 81, '{' => 82, '}' => 83, '[' => 84, ']' => 85, '<' => 86, '>' => 87,
//     '|' => 88, '\\' => 89, '`' => 90, '~' => 91, "'" => 92, '"' => 93
// );

// $panjang_subs = count($substitusi);

// // Membalik Variabel Substitusi menjadi "Angka : Huruf" || 0 : 'A' dst.
// $inverse_substitution = array_flip($substitusi);

// // Fungsi untuk mencari modulo invers
// function mod_inverse($a, $m)
// {
//     for ($x = 1; $x < $m; $x++) {
//         if (($a * $x) % $m == 1) {
//             return $x;
//         }
//     }
//     return null;
// }

// function buatkeymatrix($string_input)
// {
//     // Menghitung panjang string
//     $panjang_string = strlen($string_input);

//     // Menghitung ukuran matriks m x m
//     $m = (int) sqrt($panjang_string);

//     // Memastikan bahwa panjang string sesuai dengan ukuran matriks m x m
//     if ($m * $m != $panjang_string) {
//         echo "Panjang string tidak cocok dengan ukuran matriks m x m.";
//         return;
//     } else {
//         // Membuat matriks m x m dengan huruf dari string input
//         $key_matrix = array_map(function ($text) {
//             global $substitusi;
//             return $substitusi[$text];
//         }, str_split($string_input, 1));
//         $key_matrix = array_chunk($key_matrix, $m);

//         return $key_matrix;
//     }
// }

// function generatekey($panjang)
// {
//     global $inverse_substitution;

//     $randomtext = array();
//     // Mengulang berdasarkan panjang yang diinginkan
//     for ($i = 0; $i < $panjang; $i++) {
//         // Menghasilkan angka acak dari 0-26, kemudian disimpan kedalam array.
//         $randomtext[] = mt_rand(0, count($inverse_substitution) - 1);
//     }

//     // Mengubah angka menjadi huruf sesuai substitusi.
//     $randomtext_array = array_map(function ($text) use ($inverse_substitution) {
//         return $inverse_substitution[$text];
//     }, $randomtext);

//     // Mengabungkan array menjadi satu string utuh.
//     return implode($randomtext_array);
// }

// function hill_encript()
// {
//     global $spasi, $akhirHill, $substitusi, $inverse_substitution;

//     // Input plain text dan key
//     $plain_text = strtoupper(readline("Masukkan plain text: "));
//     $key = strtoupper(readline("Masukkan key :"));

//     // Buat matriks kunci
//     $key_matrix = buatkeymatrix($key);

//     // Merubah karakter Spasi menjadi simbol "_"
//     $plain_text = str_replace(" ", "_", $plain_text);

//     // Menghilangkan karakter selain yang ada di variabel substitusi
//     $plain_text = preg_replace('/[^A-Za-z0-9.,?!_@:;=-]/', '', $plain_text);

//     // Jika panjang Plain Text tidak sekelipatan dengan besar matriks kita tambahkan huruf 'X'
//     if (strlen($plain_text) % count($key_matrix) != 0) {
//         $padding_length = count($key_matrix) - (strlen($plain_text) % count($key_matrix));
//         $plain_text .= str_repeat($akhirHill, $padding_length);
//     }

//     // Tempat untuk menyimpan Cipher Text
//     $cipher_text = '';

//     echo "Plain Text Bersih : $plain_text\n";
//     echo "Key Matrix :\n";
//     print_r($key_matrix);

//     // Looping Enkripsi
//     for ($$i = 0; $i < strlen($plain_text); $i += count($key_matrix)) {
//         // Ambil blok teks
//         $block = substr($plain_text, $i, count($key_matrix));

//         // Konversi blok teks menjadi matriks angka sesuai substitusi
//         $block_matrix = array_map(function ($text) use ($substitusi) {
//             return $substitusi[$text];
//         }, str_split($block, 1));
//         $block_matrix = array_chunk($block_matrix, count($key_matrix));

//         // Kalikan matriks teks dengan matriks kunci
//         $result_matrix = array();
//         for ($j = 0; $j < count($key_matrix); $j++) {
//             $result_matrix[$j] = 0;
//             for ($k = 0; $k < count($key_matrix); $k++) {
//                 $result_matrix[$j] += $key_matrix[$j][$k] * $block_matrix[0][$k];
//             }
//             $result_matrix[$j] %= $panjang_subs;
//         }

//         // Konversi hasil perkalian menjadi teks sesuai substitusi
//         $result_text = array_map(function ($number) use ($inverse_substitution) {
//             return $inverse_substitution[$number];
//         }, $result_matrix);

//         // Gabungkan hasil ke dalam Cipher Text
//         $cipher_text .= implode('', $result_text);
//     }

//     // Tampilkan hasil Cipher Text
//     echo "\nCipher Text : $cipher_text\n";
// }

// function hill_decript()
// {
//     global $spasi, $akhirHill, $substitusi, $inverse_substitution;

//     // Input cipher text dan key
//     $cipher_text = strtoupper(readline("Masukkan cipher text: "));
//     $key = strtoupper(readline("Masukkan key :"));

//     // Buat matriks kunci
//     $key_matrix = buatkeymatrix($key);

//     // Tempat untuk menyimpan Plain Text
//     $plain_text = '';

//     // Looping Dekripsi
//     for ($i = 0; $i < strlen($cipher_text); $i += count($key_matrix)) {
//         // Ambil blok teks
//         $block = substr($cipher_text, $i, count($key_matrix));

//         // Konversi blok teks menjadi matriks angka sesuai substitusi
//         $block_matrix = array_map(function ($text) use ($substitusi) {
//             return $substitusi[$text];
//         }, str_split($block, 1));
//         $block_matrix = array_chunk($block_matrix, count($key_matrix));

//         // Menghitung invers dari matriks kunci
//         $det = round(gmp_intval(gmp_init($key_matrix[0][0]) * gmp_init($key_matrix[1][1]) - gmp_init($key_matrix[0][1]) * gmp_init($key_matrix[1][0]))) % $panjang_subs;
//         $det_inverse = mod_inverse($det, $panjang_subs);

//         // Matriks adjoint
//         $adj_matrix = array(
//             array($key_matrix[1][1], -$key_matrix[0][1]),
//             array(-$key_matrix[1][0], $key_matrix[0][0])
//         );

//         // Matriks invers
//         $inverse_matrix = array();
//         for ($j = 0; $j < count($adj_matrix); $j++) {
//             $inverse_matrix[$j] = array();
//             for ($k = 0; $k < count($adj_matrix[$j]); $k++) {
//                 $inverse_matrix[$j][$k] = $adj_matrix[$j][$k] * $det_inverse % $panjang_subs;
//             }
//         }

//         // Kalikan matriks teks dengan matriks invers kunci
//         $result_matrix = array();
//         for ($j = 0; $j < count($inverse_matrix); $j++) {
//             $result_matrix[$j] = 0;
//             for ($k = 0; $k < count($inverse_matrix); $k++) {
//                 $result_matrix[$j] += $inverse_matrix[$j][$k] * $block_matrix[0][$k];
//             }
//             $result_matrix[$j] %= $panjang_subs;
//         }

//         // Konversi hasil perkalian menjadi teks sesuai substitusi
//         $result_text = array_map(function ($number) use ($inverse_substitution) {
//             return $inverse_substitution[$number];
//         }, $result_matrix);

//         // Gabungkan hasil ke dalam Plain Text
//         $plain_text .= implode('', $result_text);
//     }

//     // Hapus padding karakter akhir
//     $plain_text = rtrim($plain_text, $akhirHill);

//     // Ganti simbol "_" dengan spasi
//     $plain_text = str_replace("_", " ", $plain_text);

//     // Tampilkan hasil Plain Text
//     echo "\nPlain Text : $plain_text\n";
// }


// function spiral_encrypt($plain_text)
// {
//     $square_root = ceil(sqrt(strlen($plain_text)));
//     $rounded_step_size = $square_root;
//     $step_size = $rounded_step_size;

//     $matrix_representation = [];
//     $encrypted_text = "";
//     echo "Panjang Matrix nya (m x m) : " . $step_size . "\n";

//     for ($i = 0; $i < $step_size; $i++) {
//         $matrix_row = [];
//         for ($j = 0; $j < $step_size; $j++) {
//             $index = $j * $step_size + $i;
//             if ($index < strlen($plain_text)) {
//                 $matrix_row[] = $plain_text[$index];
//             } else {
//                 $matrix_row[] = '@';
//             }
//         }
//         $matrix_representation[] = $matrix_row;
//     }

//     echo "Matrix:\n";
//     foreach ($matrix_representation as $row) {
//         print_r($row);
//         echo "\n";
//     }

//     $matrix_height = $step_size;
//     $matrix_width = $step_size;
//     $mid = $step_size / 2;
//     $x1 = 0;

//     for ($i = 0; $i < $mid; $i++) {
//         if ($step_size % 2 == 0) {
//             for ($x = $mid + $i; $x >= $mid - $i - 1; $x--) {
//                 $encrypted_text .= $matrix_representation[$x][$mid + $i];
//                 $x1++;
//                 echo $x1 . "," . $matrix_representation[$x][$mid + $i] . "(" . $x . "," . ($mid + $i) . ")\n";
//             }
//             for ($y = $mid + $i; $y >= $mid - $i - 1; $y--) {
//                 $encrypted_text .= $matrix_representation[$mid - $i - 1][$y];
//                 $x1++;
//                 echo $x1 . "," . $matrix_representation[$mid - $i - 1][$y] . "(" . ($mid - $i - 1) . "," . $y . ")\n";
//             }
//             for ($x = $mid - $i - 1; $x <= $mid + $i + 1; $x++) {
//                 $encrypted_text .= $matrix_representation[$x][$mid - $i - 1];
//                 $x1++;
//                 echo $x1 . "," . $matrix_representation[$x][$mid - $i - 1] . "(" . $x . "," . ($mid - $i - 1) . ")\n";
//             }
//             if ($i + 1 != $mid) {
//                 for ($y = $mid - $i - 1; $y <= $mid + $i + 1; $y++) {
//                     $encrypted_text .= $matrix_representation[$mid + $i + 1][$y];
//                     $x1++;
//                     echo $x1 . "," . $matrix_representation[$mid + $i + 1][$y] . "(" . ($mid + $i + 1) . "," . $y . ")\n";
//                 }
//             }
//         } else {
//             for ($x = $mid - $i; $x <= $mid + $i; $x++) {
//                 $encrypted_text .= $matrix_representation[$x][$mid - $i];
//                 $x1++;
//                 echo $x1 . "," . $matrix_representation[$x][$mid - $i] . "(" . $x . "," . ($mid - $i) . ")\n";
//             }
//             for ($y = $mid - $i; $y <= $mid + $i; $y++) {
//                 $encrypted_text .= $matrix_representation[$mid + $i + 1][$y];
//                 $x1++;
//                 echo $x1 . "," . $matrix_representation[$mid + $i + 1][$y] . "(" . ($mid + $i + 1) . "," . $y . ")\n";
//             }
//             for ($x = $mid + $i + 1; $x >= $mid - $i - 1; $x--) {
//                 $encrypted_text .= $matrix_representation[$x][$mid + $i + 1];
//                 $x1++;
//                 echo $x1 . "," . $matrix_representation[$x][$mid + $i + 1] . "(" . $x . "," . ($mid + $i + 1) . ")\n";
//             }
//             for ($y = $mid + $i + 1; $y >= $mid - $i - 1; $y--) {
//                 $encrypted_text .= $matrix_representation[$mid - $i - 1][$y];
//                 $x1++;
//                 echo $x1 . "," . $matrix_representation[$mid - $i - 1][$y] . "(" . ($mid - $i - 1) . "," . $y . ")\n";
//             }
//             if ($i + 1 == $mid) {
//                 $i += 1;
//                 for ($x = $mid - $i; $x <= $mid + $i; $x++) {
//                     $encrypted_text .= $matrix_representation[$x][$mid - $i];
//                     $x1++;
//                     echo $x1 . "," . $matrix_representation[$x][$mid - $i] . "(" . $x . "," . ($mid - $i) . ")\n";
//                 }
//             }
//         }
//     }

//     return $encrypted_text;
// }


// function spiral_decrypt()
// {
//     $cipher_text = readline("Masukkan Cipher text : ");

//     $square_root = ceil(sqrt(strlen($cipher_text)));
//     $rounded_step_size = $square_root;
//     $step_size = $rounded_step_size;

//     $matrix_height = $step_size;
//     $matrix_width = $step_size;
//     $mid = $step_size / 2;
//     $x1 = 0;
//     $plain_text_matrix = array_fill(0, $matrix_height, array_fill(0, $matrix_width, " "));

//     $idx = 0;

//     for ($i = 0; $i < $mid; $i++) {
//         if ($matrix_height % 2 == 0) {
//             for ($x = $mid + $i; $x >= $mid - $i - 1; $x--) {
//                 $plain_text_matrix[$x][$mid + $i] = $cipher_text[$idx];
//                 $idx++;
//                 $x1++;
//                 echo $x1 . "," . $plain_text_matrix[$x][$mid + $i] . "(" . $x . "," . ($mid + $i) . ")\n";
//             }
//             for ($y = $mid + $i; $y >= $mid - $i - 1; $y--) {
//                 $plain_text_matrix[$mid - $i - 1][$y] = $cipher_text[$idx];
//                 $idx++;
//                 $x1++;
//                 echo $x1 . "," . $plain_text_matrix[$mid - $i - 1][$y] . "(" . ($mid - $i - 1) . "," . $y . ")\n";
//             }
//             for ($x = $mid - $i - 1; $x <= $mid + $i + 1; $x++) {
//                 $plain_text_matrix[$x][$mid - $i - 1] = $cipher_text[$idx];
//                 $idx++;
//                 $x1++;
//                 echo $x1 . "," . $plain_text_matrix[$x][$mid - $i - 1] . "(" . $x . "," . ($mid - $i - 1) . ")\n";
//             }
//             if ($i + 1 != $mid) {
//                 for ($y = $mid - $i - 1; $y <= $mid + $i + 1; $y++) {
//                     $plain_text_matrix[$mid + $i + 1][$y] = $cipher_text[$idx];
//                     $idx++;
//                     $x1++;
//                     echo $x1 . "," . $plain_text_matrix[$mid + $i + 1][$y] . "(" . ($mid + $i + 1) . "," . $y . ")\n";
//                 }
//             }
//         } else {
//             for ($x = $mid - $i; $x <= $mid + $i; $x++) {
//                 $plain_text_matrix[$x][$mid - $i] = $cipher_text[$idx];
//                 $idx++;
//                 $x1++;
//                 echo $x1 . "," . $plain_text_matrix[$x][$mid - $i] . "(" . $x . "," . ($mid - $i) . ")\n";
//             }
//             for ($y = $mid - $i; $y <= $mid + $i; $y++) {
//                 $plain_text_matrix[$mid + $i + 1][$y] = $cipher_text[$idx];
//                 $idx++;
//                 $x1++;
//                 echo $x1 . "," . $plain_text_matrix[$mid + $i + 1][$y] . "(" . ($mid + $i + 1) . "," . $y . ")\n";
//             }
//             for ($x = $mid + $i + 1; $x >= $mid - $i - 1; $x--) {
//                 $plain_text_matrix[$x][$mid + $i + 1] = $cipher_text[$idx];
//                 $idx++;
//                 $x1++;
//                 echo $x1 . "," . $plain_text_matrix[$x][$mid + $i + 1] . "(" . $x . "," . ($mid + $i + 1) . ")\n";
//             }
//             for ($y = $mid + $i + 1; $y >= $mid - $i - 1; $y--) {
//                 $plain_text_matrix[$mid - $i - 1][$y] = $cipher_text[$idx];
//                 $idx++;
//                 $x1++;
//                 echo $x1 . "," . $plain_text_matrix[$mid - $i - 1][$y] . "(" . ($mid - $i - 1) . "," . $y . ")\n";
//             }
//             if ($i + 1 == $mid) {
//                 $i += 1;
//                 for ($x = $mid - $i; $x <= $mid + $i; $x++) {
//                     $plain_text_matrix[$x][$mid - $i] = $cipher_text[$idx];
//                     $idx++;
//                     $x1++;
//                     echo $x1 . "," . $plain_text_matrix[$x][$mid - $i] . "(" . $x . "," . ($mid - $i) . ")\n";
//                 }
//             }
//         }
//     }

//     echo "Matrix:\n";
//     foreach ($plain_text_matrix as $row) {
//         print_r($row);
//         echo "\n";
//     }

//     $plain_text = "";
//     for ($j = 0; $j < $matrix_width; $j++) {
//         for ($i = 0; $i < $matrix_height; $i++) {
//             if ($plain_text_matrix[$i][$j] != "@") {
//                 $plain_text .= $plain_text_matrix[$i][$j];
//             }
//         }
//     }
//     echo $plain_text . "\n";
//     return $plain_text;
// }


// function hill_decrypt($msg)
// {
//     // Convert Cipher Text ke Huruf Besar
//     $cipher_text = $msg;

//     $key = readline("Masukkan key :");

//     $key_matrix = buatkeymatrix($key);

//     // Mencari determinan dengan menggunakan numpy, kemudian angkanya di bulatkan.
//     $determinant = round(determinant($key_matrix));
//     echo "\nDeterminan : " . $determinant . "\n";

//     $determinant = $determinant % panjang_subs;
//     echo "K^-1 : " . $determinant . "\n";

//     // Mencari modulo invers dari determinan
//     $modulo_inverse = mod_inverse($determinant, panjang_subs);

//     echo "Invers Modulo : " . $modulo_inverse . "\n";

//     if ($modulo_inverse === null) {
//         return ["Determinan tidak memiliki invers modulo", panjang_subs];
//     } else {
//         // Membuat variabel penampung baru, besarnya sama seperti key_matrix.
//         // Jika key_matrix berukuran 3x3, maka adjoint_matrix akan berukuran 3x3 juga.
//         $adjoint_matrix = array_fill(0, count($key_matrix), array_fill(0, count($key_matrix[0]), 0));

//         // key_matrix.shape isinya yaitu ukuran matriks.
//         // Jika key_matrix berukuran 3x3, maka key_matrix.shape akan bernilai [3,3]
//         for ($i = 0; $i < count($key_matrix); $i++) {
//             for ($j = 0; $j < count($key_matrix[0]); $j++) {
//                 // Axis 0 artinya baris, Axis 1 artinya kolom.
//                 // Untuk mendapatkan sub_matrix, kita menghapus baris dan kolom pada matriks itu.
//                 // Contoh : 2 1 1 | Misal pada posisi pertama i = 0 ; j = 0, kita akan menghapus
//                 //          3 5 2 | baris dan kolom "2" menyisakan | 5 2 | sebagai sub_matrix nya.
//                 //          3 3 3 |                                | 3 3 |
//                 $sub_matrix = array_map(function ($row) use ($i, $j) {
//                     return array_merge(array_slice($row, 0, $j), array_slice($row, $j + 1));
//                 }, array_merge(array_slice($key_matrix, 0, $i), array_slice($key_matrix, $i + 1)));
//                 // Kemudian, mencari determinan dari sub_matrix tersebut.
//                 $cofactor = round(determinant($sub_matrix));
//                 // Melihat apakah i+j ganjil/genap. Jika i+j ganjil, maka angka didepan menjadi "1"
//                 // Jika i+j genap, maka angka didepan menjadi "-1"
//                 $adjoint_matrix[$j][$i] = ((-1) ** ($i + $j)) * ($cofactor % panjang_subs);
//             }
//         }

//         // Mencari Kunci Matriks Invers dengan mengalikan adjoint_matrix dengan Modulo Invers dan di modulo 27.
//         $key_matrix_inv = array_map(function ($row) use ($modulo_inverse) {
//             return array_map(function ($val) use ($modulo_inverse) {
//                 return ($val * $modulo_inverse) % panjang_subs;
//             }, $row);
//         }, $adjoint_matrix);

//         echo "Adj matrix : \n";
//         print_r($adjoint_matrix);
//         echo "Kunci matrix invers : \n";
//         print_r($key_matrix_inv);
//     }

//     // Tempat untuk menyimpan Plain Text hasil dekripsi
//     $plain_text = '';

//     // Looping Dekripsi
//     for ($i = 0; $i < strlen($cipher_text); $i += count($key_matrix)) {
//         // Mengambil Cipher Text huruf ke i sampai i + len(key_matrix)
//         $block = substr($cipher_text, $i, count($key_matrix));

//         // Konversi Cipher Text menjadi angka.
//         $block_vector = array_map(function ($text) {
//             return substitusi[$text];
//         }, str_split($block));
//         echo "\nCiphertext : ";
//         print_r($block_vector);

//         // Dekripsi dengan mengalikan matriks kunci invers dengan vektor ciphertext
//         $decrypted_vector = array_map(function ($row) use ($block_vector) {
//             return array_sum(array_map(function ($a, $b) {
//                 return $a * $b;
//             }, $row, $block_vector)) % panjang_subs;
//         }, $key_matrix_inv);
//         echo "Plaintext : ";
//         print_r($decrypted_vector);

//         // Konversi vektor hasil dekripsi menjadi huruf
//         $decrypted_block = implode('', array_map(function ($num) {
//             return inverse_substitution[$num];
//         }, $decrypted_vector));
//         echo "Plaintext : " . $decrypted_block . "\n";

//         // Plain Text ditampung di variabel bernama plain_text
//         // plain_text += decrypted_block
//         for ($j = 0; $j < count($decrypted_block); $j++) {
//             if ($decrypted_block[$j] !== akhirHill) {
//                 $plain_text .= $decrypted_block[$j];
//             }
//         }
//     }

//     // Mengreplace karakter "_" dengan spasi " ".
//     return str_replace(spasi, ' ', $plain_text);
// }

// // Fungsi untuk menghitung determinan matriks menggunakan metode ekspansi kofaktor
// function determinant($matrix)
// {
//     if (count($matrix) == 1) {
//         return $matrix[0][0];
//     }

//     if (count($matrix) == 2) {
//         return $matrix[0][0] * $matrix[1][1] - $matrix[0][1] * $matrix[1][0];
//     }

//     $det = 0;
//     for ($i = 0; $i < count($matrix); $i++) {
//         $minor = array_map(function ($row) use ($i) {
//             return array_merge(array_slice($row, 0, $i), array_slice($row, $i + 1));
//         }, array_slice($matrix, 1));
//         $det += ($i % 2 == 0 ? 1 : -1) * $matrix[0][$i] * determinant($minor);
//     }

//     return $det;
// }


// Define the encryption and decryption functions using a simple substitution cipher
function encrypt($data, $key)
{
    $result = '';
    $keyLength = strlen($key);

    for ($i = 0; $i < strlen($data); $i++) {
        $char = $data[$i];
        $keyChar = $key[$i % $keyLength];
        $result .= chr(ord($char) + ord($keyChar));
    }

    return base64_encode($result); // Base64 encoding for binary safety
}

function decrypt($data, $key)
{
    $data = base64_decode($data);
    $result = '';
    $keyLength = strlen($key);

    for ($i = 0; $i < strlen($data); $i++) {
        $char = $data[$i];
        $keyChar = $key[$i % $keyLength];
        $result .= chr(ord($char) - ord($keyChar));
    }

    return $result;
}

// // Example usage:
// $originalData = "This is sensitive data";
// $key = "secret_key";

// $encryptedData = encrypt($originalData, $key);
// $decryptedData = decrypt($encryptedData, $key);

// echo "Original Data: $originalData\n";
// echo "Encrypted Data: $encryptedData\n";
// echo "Decrypted Data: $decryptedData\n";
?>
