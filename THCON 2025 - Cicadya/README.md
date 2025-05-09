# Challenge Web THCON 2025 - Cicadya
## Introduction
This is the challenge called "Cicadya" that I made for the [THCON 2025 ctf](https://ctftime.org/event/2660/).  
A lore was added to the challenge for the competition, but here is the original challenge.  
It has 2 flags, but you can go straight to the last one.  
The goal is to find the flag in the root folder of the web server.  

## Description 
Difficulty : Medium  
Category : Web  
    
First flag description :  
> Many years ago, Don ALDTRUMP created Cicadya, a company that aimed to be the future of cryptography... and it did !  
>   
> AES, RSA, Elliptic Curve, all these algorithms were created by Cicadya employees and are now part of the cryptographic system, all the encryption standards you know were created by Cicadya!  
>   
> However, a few days ago, the company's website was targeted and compromised by a group of hackers in one of the biggest cyber attacks ever.  
>   
> Help Don ALDTRUMP and his staff regain control of their (not really secure) website!  

Second flag description :  
> Mr. ALDTRUMP informs us that the hackers did not stop after getting admin access to the site, they went further onto the web server...  
> Try to follow their path to find the flag!

## Launch the challenge
- Copy the folder challenge
- `cd challenge/`
- `docker build . -t cicadya-lab`
- `docker run -d -p 127.0.0.1:8888:80 cicadya-lab`

## Write-up
The official writeup is [here](https://github.com/thomsoe/write-ups/tree/main/THCON-2025/Cicadya).

