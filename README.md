# clay-laravel
a web app made with laravel & livewire

## features
- user registration and login
- user and role administration
- "chirps" (microblog example from laravel tutorial)
- testing jwstapi.com API
- testing lichess.org API

## planned features
- e-mail verification
- e-mail notifications
- user settings
- browse images from JWST (James Webb Space Telescope) API
- like / vote for JWST showcase images
- playing chess against stockfish (chess engine)
- stockfish features for training/analyzing (blunder warnings, ..)
- playing chess against other users

## deployment
the `deploy` branch gets deployed at [claymence.de](https://claymence.de/) on push

[.github\workflows\deploy.yml](https://github.com/claymence/clay-laravel/blob/deploy/.github/workflows/deploy.yml)

## documentation

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
    
    CHIRP {
        int id PK
        string content
        int user_id FK
    }
    
    ROLE_PERMISSION {
        int role_id FK
        int permission_id FK
    }
    
    USER ||--o{ ROLE : "belongs to"
    ROLE ||--o{ USER : "has many"
    USER ||--o{ CHIRP : "has many"
    CHIRP ||--o{ USER : "belongs to"
    ROLE ||--o{ ROLE_PERMISSION : "has many"
    PERMISSION ||--o{ ROLE_PERMISSION : "has many"
    ROLE_PERMISSION }o--|| ROLE : "belongs to"
    ROLE_PERMISSION }o--|| PERMISSION : "belongs to"
```
