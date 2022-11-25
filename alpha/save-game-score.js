function saveGameScore(score) {
    const data = new FormData();
    data.append('score', score);
    fetch('/puissance4/alpha/api/save-game-score.php', { method: "POST", body: data });
}
