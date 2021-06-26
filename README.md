# World cup

## Data

### User
id
name
email
password
predictions: Prediction[]

### Prediction
id
user_id
game_id
home_goals
away_goals

### Team
id
country_name
group_id: Group

games: Game[]

### Group
name
teams: Team[]

### Game
id
home_team
away_team
home_goals
away_goals
played_at

predictions: Prediction[]
