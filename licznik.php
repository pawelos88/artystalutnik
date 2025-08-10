<?
  // Licznik graficzny do wykorzystania w dokumentach HTML i PHP.

  function printliczba ($numer) {
  // funkcja wy¶wietla liczbê w postaci grafiki, korzystaj±c z grafik - cyfr, 
  // zawartych w katalogu cyfry.
    $liczbacyfr=1; $l = $numer;
    while ($l >= 10) {
      $liczbacyfr++;
      $l=floor($l/10);
    }

    header("Content-type: image/png");
    $rysunek = imagecreate (15*$liczbacyfr,20);
    for ($i=$liczbacyfr; $i>=1; $i--) {
      $cyfra = floor($numer/pow(10,$i-1));
      $numer = $numer % pow(10,$i-1);
      $rysunekcyfra = imagecreatefromgif ("cyfry/$cyfra.gif");
      imagecopyresized 
        ($rysunek,$rysunekcyfra,($liczbacyfr-$i)*15,0,0,0,15,20,15,20);
      imagedestroy ($rysunekcyfra);
    }
    imagepng ($rysunek);
  }


  if (!(file_exists("dane/licznik.txt"))) { // nie ma pliku z licznikiem
    $plik = fopen ("dane/licznik.txt", "w+");
    fputs ($plik, "-");                    // wiêc go tworzymy
    fclose ($plik);
  }

  printliczba (filesize ("dane/licznik.txt")); 
  $plik = fopen ("dane/licznik.txt", "a");
  flock ($plik, 2);
  fputs ($plik, "-");
  flock ($plik, 3);
  fclose ($plik);
?>
