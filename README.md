## Tyrell System - Programming Quiz
Theme: Playing cards will be given out to n(number) people

Purpose: Total 52 cards containing 1-13 of each Spade(S), Heart(H), Diamond(D), Club(C) will be
given to n people randomly.

Output format :
```
a. Spade = S, Heart = H, Diamond = D, Club = C
b. Card 2 to 9 are, as it is, 1=A,10=X,11=J,12=Q,13=K
c. The card distributed to the first person on the first row will be separated (comma),
d. The card distributed to the second person on the second row will be separated(comma),
e. [LF] is not allowed. Example:
S-A,H-X,.....
D-3,H-J,.....
```

### Answers:
#### a) System Requirements
- PHP version ^7.3 | >= 8.0

#### b) Installation Steps

1. Clone this project to your folder you want

2. Run cp .env.example .env file to copy example file to .env

3. Then edit your .env file with DB credentials and other settings.

4. Run composer install command, after that run npm install and npm run dev.

5. Run php artisan migrate --seed command.

        <i>Notice: seed is important, because it will create the first user for you.</i>

6. Run php artisan key:generate command.

And that's it, go to your domain `http://localhost/login` and login:
```
Email Address: tyrell@gmail.com
Password: 123456
```


#### Screenshot
![image](https://user-images.githubusercontent.com/93239445/215782913-7410d7b0-8182-4f96-85b4-61232b965288.png)

![image](https://user-images.githubusercontent.com/93239445/215783932-b59c8ca9-a08e-4047-a9cb-3e31fd41b19e.png)

![image](https://user-images.githubusercontent.com/93239445/215784353-7caee0a3-3002-4fd1-997a-cfc142e8c0da.png)

![image](https://user-images.githubusercontent.com/93239445/215784935-05a7321b-d2ab-42d3-8762-34eac993af6b.png)


![image](https://user-images.githubusercontent.com/93239445/215784639-24096f6e-6172-4441-9c6c-ea2f18f82cfc.png)
