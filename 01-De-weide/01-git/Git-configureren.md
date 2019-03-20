# Git & GitHub configureren

## Doelstellingen

 - In staat zijn Git & Github te kunnen gebruiken via een SSH-key

## Deadline
 - Voorziene tijd: 1 dag

## Instructies

 1. Neem eerst het volgende door [Introductie Git door BeCode](https://github.com/becodeorg/BeCode/wiki/Git-&-Github)
 1. Schrijf je in op GitHub : [https://github.com/join](https://github.com/join)

### Je profiel op GitHub

Eenmaal ingeschreven, neem je de tijd om je [profil GitHub](https://github.com/settings/profile) gegevens te vervolledigen. Je voornaam, naam en een recente foto van jezelf zijn vereist. 


### Gebruik GitHub met de terminal (voor **Linux**)

Om je aan te melden bij je GitHub-account, moet je een **SSH-key** hebben. 
Met de volgende stappen zal je in staat zijn om een SSH-key te maken en het met je GitHub account te linken.

#### Genereren van een SSH-key
1. Open je terminal.
1. Kopieer en plak de onderstaande tekst in je terminal. 
    Wijzig "your_email@example.com" naar het e-mailadres van je GitHub account en druk op `Enter`.

    ```shell
    ssh-keygen -t rsa -b 4096 -C "your_email@example.com"
    ```

    Deze commando maakt een SSH-key aan die gelinkt is aan je e-mailadres.

1. Genereren van publiek / privé rsa-sleutelpaar.
    Wanneer u wordt gevraagd om "Enter a file in which to save the key", drukt u op `Enter`. Hiermee accepteert u de standaard bestandslocatie.

1. Enter a file in which to save the key (/home/*user_name*/.ssh/id_rsa): [Laat dit veld leeg en druk op `Enter`]
1. Enter passphrase (empty for no passphrase): [Laat dit veld leeg en druk op `Enter`]
1. Enter same passphrase again: [Laat dit veld leeg en druk op `Enter`]
1. Volg de volgende tutorial om uw SSH-key aan uw GitHub-account te koppelen: https://help.github.com/articles/adding-a-new-ssh-key-to-your-github-account/#platform-linux


### Gebruik GitHub met de terminal (voor **Mac**)

Om je aan te melden bij je GitHub-account, moet je een **SSH-key** hebben. 
Met de volgende stappen zal je in staat zijn om een SSH-key aan te maken en het met je GitHub-account te linken.

#### Genereren van een SSH-key
1. Open je terminal.
1. Kopieer en plak de onderstaande tekst in je terminal. 
    Wijzig "your_email@example.com" naar het e-mailadres van je GitHub-account en druk op `Enter`.

    ```shell
    ssh-keygen -t rsa -b 4096 -C "your_email@example.com"
    ```

    Deze commando maakt een SSH-key aan die gelinkt is aan je e-mailadres.
1. Genereren van publiek / privé rsa-sleutelpaar.
    Wanneer u wordt gevraagd om "Enter a file in which to save the key", drukt u op `Enter`. Hiermee accepteert u de standaard bestandslocatie.

1. Enter a file in which to save the key (/Users/*user_name*/.ssh/id_rsa): [Laat dit veld leeg en druk op `Enter`]
1. Enter passphrase (empty for no passphrase): [Laat dit veld leeg en druk op `Enter`]
1. Enter same passphrase again: [Laat dit veld leeg en druk op `Enter`]
1. Volg de volgende tutorial om uw SSH-key aan uw GitHub-account te koppelen: https://help.github.com/articles/adding-a-new-ssh-key-to-your-github-account/#platform-mac


### Gebruik GitHub met de terminal (voor **Windows**)

Om je aan te melden bij je GitHub-account, moet je een **SSH-key** hebben. 
Met de volgende stappen zal je in staat zijn om een SSH-key te maken en het met je GitHub-account te linken.

#### Genereren van een SSH-key
1. Open je Terminal/cmdr.
1. Kopieer en plak de onderstaande tekst in je terminal. 
    Wijzig "your_email@example.com" naar het e-mailadres van je GitHub-account en druk op `Enter`.

    ```shell
    ssh-keygen -t rsa -b 4096 -C "your_email@example.com"
    ```

    Deze commando maakt een SSH-key aan die gelinkt is aan je e-mailadres.
1. Genereren van publiek / privé rsa-sleutelpaar.
    Wanneer u wordt gevraagd om "Enter a file in which to save the key", drukt u op `Enter`. Hiermee accepteert u de standaard bestandslocatie.

1. Enter a file in which to save the key (/c/Users/*user_name*/.ssh/id_rsa): [Laat dit veld leeg en druk op `Enter`]
1. Enter passphrase (empty for no passphrase): [Laat dit veld leeg en druk op `Enter`]
1. Enter same passphrase again: [Laat dit veld leeg en druk op `Enter`]
1. Volg de volgende tutorial om uw SSH-key aan uw GitHub-account te koppelen: https://help.github.com/articles/adding-a-new-ssh-key-to-your-github-account/#platform-windows

[Terug naar Git](/01-De-weide/git/)
