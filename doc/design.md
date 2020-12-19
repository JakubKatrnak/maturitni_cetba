# Návrhová dokumentace

## Dart - jazyk

Jazyk byl vybraný, jelikož se podobá jazyku Java s kterým už máme zkušenost, ale hlavně jelikož je jazyk stavěný pro vývoj mobilních aplikací, je optimalizovaný pro UI a slibuje rychlost na všech platformách.

## Flutter - framework

Flutter byl vybraný, jelikož obsahuje čistý a přehledný UI model a dokáže zpracovávat kód zároveň na Android tak in na iOS, případně i na web nebo počítač. Také  obsahuje funkci "hot reload", která umožňuje rychlý vývoj.

## Android Studio - vývojové přostředí

Android Studio umožňuje vytvoření vlastních emulátorů mobilních zařízení, na kterých je možné aplikaci vyvýjet, také obsahuje plnou podporu pro jazyk Dart i framework Flutter. Obsahuje vše co je pro vývoj naší aplikace potřeba. 

## Firebase - Realtime Database

Firebase je moderní NoSql dazabáze, na struktury používá třídy a ukládá je jako JSON. Jedná se o službu od společnosti Google a nabízí své služby v limitované verzy zdarma. Je také podporována Andoid Studiem i frameworkem Flutter.

## Příklad modelu databáze

    {
  "oauh_knihy" : [ 1, {
    "autor" : "autor",
    "id_knihy" : "id_knihy",
    "id_obdobi" : "id_obdobi",
    "isbn" : "isbn",
    "nazev_knihy" : " nazev_knihy",
    "pocet_stran" : "pocet_stran",
    "popis" : "popis",
    "rok_vydani" : "rok_vydani",
    "zanr" : "zanr"
  }