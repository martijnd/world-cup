# World cup

## Data

### Users
id
name
email
password
predictions: N-N Game

### Prediction
id
user_id
game_id
home_goals
away_goals

### Team
id
country_name

games: Game[]

### Game
id
home_team
away_team
home_goals
away_goals
datetime
location

predictions: Prediction[]
