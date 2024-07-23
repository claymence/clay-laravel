### a personal web app project

#### made with

*Laravel* | *Livewire* | *Alpine.js* | *Tailwind CSS* | *Vite* | *SQLite*

>explore the tech stack and used tools at my [info page](https://claymence.de/info)


## overview

### implemented
- user registration and login ([Laravel Breeze](https://laravel.com/docs/11.x/starter-kits#laravel-breeze))
- comments ("[Chirps](https://bootcamp.laravel.com/livewire/creating-chirps)")
- user and role administration
- light/dark theme

### work in progress
- browse images from the James Webb Space Telescope
- user settings

### planned / ideas
- e-mail verification
- e-mail notifications
- like / fav list JWST images
- vote for JWST showcase images
- testing lichess.org API
- playing chess against stockfish (chess engine)
- stockfish features for training/analyzing (blunder warnings, ..)
- playing chess against other users

## deployment

the [`deploy`](https://github.com/claymence/clay-laravel/tree/deploy) branch gets deployed at [claymence.de](https://claymence.de/) on push

[`.github\workflows\deploy.yml`](https://github.com/claymence/clay-laravel/blob/deploy/.github/workflows/deploy.yml)

## license

[MIT](https://github.com/claymence/clay-laravel?tab=MIT-1-ov-file#readme)

## more info & diagrams

*OOP*

*MVC*

### entity relationship diagram
```mermaid
erDiagram
    USER {
        int id PK
        string name
        string email
        string password
        int role_id FK
    }
    
    ROLE {
        int id PK
        string name
    }
    
    PERMISSION {
        int id PK
        string name
    }
    
    ROLE_PERMISSION {
        int role_id FK
        int permission_id FK
    }
    
    SETTING {
        int id PK
        int user_id FK
        json preferences
        string theme
    }

    CHIRP {
        int id PK
        string content
        int user_id FK
    }

    USER ||--o{ ROLE : "belongs to"
    ROLE ||--o{ USER : "has many"
    USER ||--o{ CHIRP : "has many"
    CHIRP ||--o{ USER : "belongs to"
    ROLE ||--o{ ROLE_PERMISSION : "has many"
    PERMISSION ||--o{ ROLE_PERMISSION : "has many"
    ROLE_PERMISSION }o--|| ROLE : "belongs to"
    ROLE_PERMISSION }o--|| PERMISSION : "belongs to"
    USER ||--|| SETTING : "has one"
    SETTING ||--|| USER : "belongs to"
```
