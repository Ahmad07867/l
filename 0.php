<?php
// جميع الحقوق محفوظة @Informatics_4ever - @FFFFFFM
echo ("WELCOME TO INFORMATICS 4EVER CHANNEL\n");
echo ("https://youtube.com/channel/UCz-06GrLFNjFleJ4dYNe_Qw \n");
$informatics_4ever = 500;
for($x2=0;$x2<$informatics_4ever; $x2++){
$vv = file_get_contents("https://combolist.org/generate");
$hh = explode("spellcheck=", $vv)[1];
$hh2 = explode("</textarea>", $hh)[0];
file_put_contents("Combo-List.txt",$hh2."\n",FILE_APPEND); //@Informa>
$is  = explode("\n",file_get_contents("Combo-List.txt"));
$iss = count($is)-1;
echo "done < $iss > BY @Informatics_4ever \n";
}
// جميع الحقوق محفوظة @Informatics_4ever - @FFFFFFM
