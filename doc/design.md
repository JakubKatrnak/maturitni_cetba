# Návrhová dokumentace

## Dart - jazyk

Jazyk byl vybraný, jelikož se podobá jazyku Java s kterým už máme zkušenost, ale hlavně jelikož je jazyk stavěný pro vývoj mobilních aplikací, je optimalizovaný pro UI a slibuje rychlost na všech platformách.

## Flutter - framework

Flutter byl vybraný, jelikož obsahuje čistý a přehledný UI model a dokáže zpracovávat kód zároveň na Android tak i na iOS, případně i na web nebo počítač. Také  obsahuje funkci "hot reload", která umožňuje rychlý vývoj.

## Android Studio - vývojové přostředí

Android Studio umožňuje vytvoření vlastních emulátorů mobilních zařízení, na kterých je možné aplikaci vyvíjet, také obsahuje plnou podporu pro jazyk Dart i framework Flutter. Obsahuje vše co je pro vývoj naší aplikace potřeba. 

## Firebase - Realtime Database

Firebase je moderní NoSql dazabáze, na struktury používá třídy a ukládá je jako JSON. Jedná se o službu od společnosti Google a nabízí své služby v limitované verzy zdarma. Je také podporována Andoid Studiem i frameworkem Flutter.

## Příklad modelu databáze

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

-----------------------------------------------------

# Popis návrhových rozhodnutí

jaký programovací jazyk/framework/... jsme použili a proč?
- programovací jazyk jsme použili dart a framework flutter, jelikož nám přišel velmi přehledný a lehce psatelný. 

jakou jsme zvolili databázi a proč?
- zvolili jsme firebase, jelikož je to dobře přístupná databáze a ve flutteru hodně používaná, jelikož se s ní jednoduše pracuje

které vývojové prostředí jsme použili a ve které verzi projekt vytváříme?
- používáme android studio ve verzi 4.1.1, které je přímo dělané pro vývoj mobilních aplikací
>>>>>>> 7a08573bfaf7ada1342b484d8d25e767a64b2a40
