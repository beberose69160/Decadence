<?php

header()
?>
<html>
<head
      <meta charset="8">
    
<?php
</head>
<body>

  function generatePassword($length_min, $length_max,$nb=1) {
  if(!is_numeric($length_min) OR !is_numeric($length_max) ) {
  return -1;

}
// on vérifie si la longueur max est sup a la longueur min
if($length_max<$length_min){
    return -2;
}
// on définit la variable password
  $password = '';

  // Etape 1: on définit les caractères qui pourront apparaître dans notre mot de passe
  $letters_lower = 'abcdefghijklmnopqrstuvwxyz';
  $letters_upper = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $letters_special = '*$%:?;!^"(°)';
  // 2 : On sleectionne aleatoirement n fois un caractère parmi les caractères définis
  $characters = $characters_lowercase.
                $characters_uppercase.
                $characters_special.

$characters_nb = strlen($characters);
$password_nb = rand($length_min, $length_max);

for($i=0; $i<$password_nb; $i++)
  $random_position = rand(0,$characters_nb-1);
  $password = $password.$characters [$random_position] ;
}
  // 3 : on retourne le mot de passe généré
  return $password;
  return htmlspecialentities$password;

}
echo generatePassword(10,20);
?>
</body>
