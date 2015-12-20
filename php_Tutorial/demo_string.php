<?php

$ten = "Vu,Thanh.Binh";
echo "<br> Do dai chuoi la : " . strlen($ten);
echo "<br> So ky tu ten lop cua chung ta la : ". strlen('BCH1512');
echo "<br> So tu trong ten cua minh la :" . str_word_count($ten);
echo "<br> So tu trong chuoi \"xin chao cac ban\" la : " . str_word_count('xin chao cac ban');