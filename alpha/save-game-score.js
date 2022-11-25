function saveGameScore(score, startGameDate, gameId, gameLevel) {
    const data = new FormData();
    data.append('score', score);
    data.append('startGameDate', startGameDate);
    data.append('gameId', gameId);
    data.append('gameLevel', gameLevel);
    fetch('/puissance4/alpha/api/save-game-score.php', { method: "POST", body: data });
}
